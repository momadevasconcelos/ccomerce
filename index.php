<?php 
require_once("conexao.php");

//INSERIR UM USUÁRIO ADMINISTRADOR CASO NÃO EXISTA
$senha = '123';
$senha_crip = md5($senha);

$query = $pdo->query("SELECT * from usuarios where nivel = 'Administrador'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg == 0){
	$pdo->query("INSERT INTO usuarios SET nome = 'Hugo Vasconcelos', email = '$email_sistema', cpf = '000.000.000-00', senha = '$senha', senha_crip = '$senha_crip', nivel = 'Administrador', data = curDate(), ativo = 'Sim', foto = 'sem-foto.jpg'");
}


$query = $pdo->query("SELECT * from cargos");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg == 0){
	$pdo->query("INSERT INTO cargos SET nome = 'Administrador'");
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chef Of Comerce</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>


	<link rel="stylesheet" type="text/css" href="css/estilo-login.css">
	<link rel="icon" type="image/png" href="img/favicon.ico">

	
</head>
<body>





<div class="container ">

    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel  form-login" style="opacity:0.9; border-radius: 20px">
			  	<div class="panel-heading" align="center" style="border-top-right-radius: 20px; border-top-left-radius: 20px">
			    	<img src="img/logo.png" width="250px">
			 	</div>
			  	<div class="panel-body">
			    	<form id="frmLogin">
			    			             <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Email" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="pasword" name="senha" type="password" value="">
			    		</div>
			    		
			    		
			    		<span class="btn  btn-primary btn-block" id="entrarSistema"> <span class="glyphicon glyphicon-log-in text-warning"></span>Login</span>
			    	</fieldset>

			    	<p class="recuperar"><a title="Clique para recupearar a senha" href="" data-toggle="modal" data-target="#exampleModal">Recuperar Senha</a></p>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>



</body>
</html>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:400px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
        <button id="btn-fechar-rec" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
          <span aria-hidden="true" >&times;</span>
        </button>
      </div>
      <form method="post" id="form-recuperar">
      <div class="modal-body">
        
        	<input placeholder="Digite seu Email" class="form-control" type="email" name="email" id="email-recuperar" required>        	
       
       <br>
       <small><div id="mensagem-recuperar" align="center"></div></small>
      </div>
      <div class="modal-footer">      
        <button type="submit" class="btn btn-primary">Recuperar</button>
      </div>
  </form>
    </div>
  </div>
</div>





 <script type="text/javascript">
	$("#form-recuperar").submit(function () {

		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: "recuperar-senha.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem-recuperar').text('');
				$('#mensagem-recuperar').removeClass()
				if (mensagem.trim() == "Recuperado com Sucesso") {
					//$('#btn-fechar-rec').click();					
					$('#email-recuperar').val('');
					$('#mensagem-recuperar').addClass('text-success')
					$('#mensagem-recuperar').text('Sua Senha foi enviada para o Email')			

				} else {

					$('#mensagem-recuperar').addClass('text-danger')
					$('#mensagem-recuperar').text(mensagem)
				}


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>



<script type="text/javascript">
	$(document).ready(function(){
     function validarFormVazio(formulario){
		dados=$('#' + formulario).serialize();
		d=dados.split('&');
		vazios=0;
		for(i=0;i< d.length;i++){
				controles=d[i].split("=");
				if(controles[1]=="A" || controles[1]==""){
					vazios++;
				}
		}
		return vazios;
	 }

		$('#entrarSistema').click(function(){

		vazios=validarFormVazio('frmLogin');

			if(vazios > 0){
				alert("Preencha os campos!!");
				return false;
			}

		dados=$('#frmLogin').serialize();
		$.ajax({
			type:"POST",
			data:dados,
			url:"autenticar.php",
			success:function(r){
				//alert(r);
				if(r==1){
					window.location="painel";
				}else if(r==3){
					alert("Usuário ou Senha Incorretos!");
					return false;
				}else if (r==2){
					alert('Seu usuário foi desativado, contate o administrador!');
				}else{
					alert("Sua Licença de uso expirou, contate o administrador!");
				}
			}
			
		});
	});
	});
</script>


