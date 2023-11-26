<?php 
@session_start();
require_once("verificar.php");
require_once("../conexao.php");

$pag_inicial = 'home';

$id_usuario = $_SESSION['id'];

$query = $pdo->query("SELECT * from usuarios where id = '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
    $nome_usuario = $res[0]['nome'];
    $email_usuario = $res[0]['email'];

    $senha_usuario = $res[0]['senha'];
    $nivel_usuario = $res[0]['nivel'];
    $telefone_usuario = $res[0]['telefone'];
    $endereco_usuario = $res[0]['endereco'];
    $foto_usuario = $res[0]['foto'];

}

if(@$_SESSION['nivel'] != 'Administrador'){
    require_once("verificar-permissoes.php");
}

if(@$_GET['pag'] == ""){
    $pag = $pag_inicial;
}else{
    $pag = $_GET['pag'];
}




?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Chef Of Comerce</title>
    <link rel="icon" type="image/png" href="../img/logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
    <!-- //side nav css file -->

    <link rel="stylesheet" href="css/monthly.css">
     <link rel="stylesheet" href="css/select2.min.css">

    <!-- js-->
    <script src="js/loader.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <script src="js/alertify.js"></script>
    <script src="js/sweetalert.min.js"></script>

    <!--webfonts-->
    <link href="css/css.css" rel="stylesheet">
    <!--//webfonts--> 

    <!-- chart -->
    <script src="js/Chart.js"></script>
    <!-- //chart -->

    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
    <!--pie-chart --><!-- index page sales reviews visitors pie chart -->
    <script src="js/pie-chart.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#e32424',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
    <!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->


    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>


    <style type="text/css">
        img {
    border-radius: 100%;
}
    </style>
</head> 
<body class="cbp-spmenu-push">
    <div class="main-content">
        <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <!--left-fixed -navigation-->
            <aside class="sidebar-left">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="index.php"><img src="../img/logo.png" width="110px"><span class="dashboard_text"></span></a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="sidebar-menu">
                            <li class="header">MENU DE NAVEGAÇÃO</li>


                            <li class="treeview <?php echo @$home ?>">
                                <a href="index.php">
                                    <i class="fa fa-dashboard"></i> <span>Home</span>
                                </a>
                            </li>

                           



                            <li class=" <?php echo $menuPonto_venda ?>">
                                <a href="#">
                                    <i class="fa fa-users"></i>
                                    <span>Ponto de Venda</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="<?php echo @$usuarios ?>"><a href="index.php?pag=ponto_venda"><i class="fa fa-angle-right"></i>Restaurante</a></li>
                                   

                                    <li class="<?php echo @$fornecedores ?>"><a href="index.php?pag=loja_roupa"><i class="fa fa-angle-right"></i>Loja</a></li>

                                </ul>
                            </li>


                            <li class=" <?php echo $menu_pessoas ?>">
                                <a href="#">
                                    <i class="fa fa-users"></i>
                                    <span>Pessoas</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="<?php echo @$usuarios ?>"><a href="index.php?pag=usuarios"><i class="fa fa-angle-right"></i>Usuários</a></li>
                                   

                                    <li class="<?php echo @$fornecedores ?>"><a href="index.php?pag=fornecedores"><i class="fa fa-angle-right"></i>Fornecedores</a></li>

                                </ul>
                            </li>



                            <li class="treeview <?php echo $menu_cadastros ?>" >
                                <a href="#">
                                    <i class="fa fa-plus"></i>
                                    <span>Cadastros</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                  

                                    <li class="<?php echo @$grupos ?>"><a href="index.php?pag=grupos"><i class="fa fa-angle-right"></i>Grupo Acessos</a></li>

                                    <li class="<?php echo @$acessos ?>"><a href="index.php?pag=acessos"><i class="fa fa-angle-right"></i>Acessos</a></li>
                                
                                </ul>
                            </li>


                            <li class="treeview <?php echo $menu_produtos ?>">
                                <a href="#">
                                    <i class="fa fa-plus"></i>
                                    <span>Gestao</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">

                                    <li class="<?php echo @$produtos ?>"><a href="index.php?pag=produtos"><i class="fa fa-angle-right"></i>Produtos</a></li>

                                    <li class="<?php echo @$cat_produtos ?>"><a href="index.php?pag=cat_produtos"><i class="fa fa-angle-right"></i>Categorias</a></li>
                                    
                                    <li class="<?php echo @$estoque ?>"><a href="index.php?pag=estoque"><i class="fa fa-angle-right"></i>Estoque Baixo</a></li>

                                    <li class="<?php echo @$saidas ?>"><a href="index.php?pag=saidas"><i class="fa fa-angle-right"></i>Saídas</a></li>

                                    <li class="<?php echo @$entradas ?>"><a href="index.php?pag=entradas"><i class="fa fa-angle-right"></i>Entradas</a></li>
                                
                                </ul>
                            </li>



                            <li class="treeview <?php echo $menu_financeiro ?>" >
                                <a href="#">
                                    <i class="fa fa-usd"></i>
                                    <span>Financeiro</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">

                                    <li class="<?php echo @$vendas ?>"><a href="index.php?pag=vendas"><i class="fa fa-angle-right"></i>Vendas</a></li>

                                  
                                    <li class="<?php echo @$receber ?>"><a href="index.php?pag=receber"><i class="fa fa-angle-right"></i>Contas à Receber</a></li>  

                                                                 
                                
                                </ul>
                            </li>


                        </ul>
                    </div>
                   
                </nav>

            </aside>

        </div>
        <!--left-fixed -navigation-->
        
        <!-- header-starts -->
        <div class="sticky-header header-section ">
            <div class="header-left">
                <!--toggle button start-->
            <div class="visible-xs">
                <a id="showLeftPush" href="" data-toggle="modal" data-target="#mobile"><i class="fa fa-bars"></i></a>
            </div>
               
                <!--toggle button end-->
                <div class="profile_details_left"><!--notifications of menu start -->
                 
                    <div class="clearfix"> </div>
                </div>
                <!--notification menu end -->
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">
                
                
                
                
                <div class="profile_details">       
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">   
                                    <span class="prfil-img"><img src="img/perfil/<?php echo $foto_usuario ?>" alt="" width="50" height="50"> </span> 
                                    <div class="user-name">
                                        <p><?php echo $nome_usuario ?></p>
                                        <span><?php echo $nivel_usuario ?></span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>    
                                </div>  
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="" data-toggle="modal" data-target="#modalConfig"><i class="fa fa-cog"></i> Configurações</a> </li>    
                                <li> <a href="" data-toggle="modal" data-target="#modalPerfil"><i class="fa fa-suitcase"></i> Editar Perfil</a> </li> 
                                <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Sair</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>               
            </div>
            <div class="clearfix"> </div>   
        </div>
        <!-- //header-ends -->








        <!-- main content start-->
        <div id="page-wrapper">
            <?php require_once("paginas/".$pag.'.php') ?>
        </div>









        
        <!--footer-->
        <div class="footer">
            <p  ><span style="font-size: 12pt" class="glyphicon glyphicon-copyright-mark text-warning"> <?=date('Y')?>|M.Vasconcelos </span>  <sub><span class="text-info"> Phone number: 878131994</span></sub>  </p>       
        </div>
        <!--//footer-->
      
    </div>


    <!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->
    
    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->
    
    
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"> </script>
    <!-- //Bootstrap Core JavaScript -->
    
</body>
</html>




<script type="text/javascript" src="js/select2.min.js"></script>
<!-- Mascaras JS -->
<script type="text/javascript" src="js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="js/jquery.mask.min.js"></script> 






<style type="text/css">
        .select2-selection__rendered {
            line-height: 36px !important;
            font-size:16px !important;
            color:#666666 !important;

        }

        .select2-selection {
            height: 36px !important;
            font-size:16px !important;
            color:#666666 !important;

        }
    </style>  


<!-- Modal Perfil-->
<div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Editar Perfil</h4>
                <button id="btn-fechar-perfil" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
                    <span aria-hidden="true" >&times;</span>
                </button>
            </div>
            <form method="post" id="form-perfil">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="nome-perfil" name="nome" placeholder="Nome" value="<?php echo $nome_usuario ?>" required>    
                            </div>  
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email-perfil" name="email" placeholder="Email" value="<?php echo $email_usuario ?>" required>    
                            </div>  
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefone</label>
                                <input type="text" class="form-control" id="telefone-perfil" name="telefone" placeholder="Telefone" value="<?php echo $telefone_usuario ?>" >    
                            </div>  
                        </div>

                         <div class="col-md-8">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Endereço</label>
                                <input type="text" class="form-control" id="endereco-perfil" name="endereco" placeholder="Rua X Número 1 Bairro xxx" value="<?php echo $endereco_usuario ?>" >    
                            </div>  
                        </div>
                       
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Senha</label>
                                <input type="password" class="form-control" id="senha-perfil" name="senha" placeholder="Senha" value="<?php echo $senha_usuario ?>" required>    
                            </div>  
                        </div>
                        <div class="col-md-8">
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirmar Senha</label>
                                <input type="password" class="form-control" id="conf-senha-perfil" name="conf_senha" placeholder="Confirmar Senha" required>    
                            </div>  
                        </div>

                       

                    </div>


                   

                        <div class="row">
                            <div class="col-md-8">                      
                                <div class="form-group"> 
                                    <label>Foto</label> 
                                    <input class="form-control" type="file" name="foto" onChange="carregarImgPerfil();" id="foto-usu">
                                </div>                      
                            </div>
                            <div class="col-md-4">
                                <div id="divImg">
                                    <img src="img/perfil/<?php echo $foto_usuario ?>"  width="80px" id="target-usu">                                    
                                </div>
                            </div>

                        </div>


                    
                        <input type="hidden" name="id" value="<?php echo $id_usuario ?>">

                    <br>
                    <small><div id="mensagem-perfil" align="center"></div></small>
                </div>
                <div class="modal-footer">      
                    <button type="submit" class="btn btn-primary">Editar Perfil</button>
                </div>
            </form>
        </div>
    </div>
</div>









<!-- Modal Config-->
<div class="modal fade" id="modalConfig" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Editar Configurações</h4>
                <button id="btn-fechar-config" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
                    <span aria-hidden="true" >&times;</span>
                </button>
            </div>
            <form method="post" id="form-config">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome Entidade</label>
                                <input type="text" class="form-control" id="nome_sistema" name="nome_sistema" placeholder="Nome da Barbearia" value="<?php echo $nome_sistema ?>" required>    
                            </div>  
                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Entidade</label>
                                <input type="email" class="form-control" id="email_sistema" name="email_sistema" placeholder="Email" value="<?php echo $email_sistema ?>" required>    
                            </div>  
                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Whatsapp Entidade</label>
                                <input  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="text" class="form-control" id="whatsapp" name="whatsapp_sistema" placeholder="Whatsapp" value="<?php echo $whatsapp_sistema ?>" required>    
                            </div>  
                        </div>
                    </div>


                    <div class="row">
                        
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tel Fixo Entidade</label>
                                <input  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="9" type="text" class="form-control" id="" name="telefone_fixo_sistema" placeholder="Fixo" value="<?php echo $telefone_fixo_sistema ?>" required>    
                            </div>  
                        </div>
                        <div class="col-md-8">
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Endereço Entidade</label>
                                <input maxlength="9" type="text" class="form-control" id="nuit" name="nuit" placeholder="NUIT" value="<?php echo $nuit?>">    
                            </div>  
                        </div>
                    </div>

                     <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Endereço Entidade</label>
                                <input type="text" class="form-control" id="endereco_sistema" name="endereco_sistema" placeholder="Rua X Numero X Bairro Cidade" value="<?php echo $endereco_sistema ?>">    
                            </div>  
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <span id="mensagem-config"></span>      
                    <button type="submit" class="btn btn-primary">Salvar Dados</button>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- Modal Mobile show menu-->
<div class="modal fade" id="mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        <div class="modal-header">
     

        <h1><a class="modal-title" id="exampleModalLabel" href="index.php"><img width="230px" src="../img/logo.png"></a></h1>
                
        </div>
            

         <div class="modal-body">

        <ul class="nav navbar-nav">
          <li class="active treeview <?php echo @$home ?>">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            </a>
          </li>
     
          <li class="treeview <?php echo @$pdv ?>"><a href="index.php?pag=pdv"><i class="fa fa-dashboard"></i> <span>Ponto de Venda</span> </a></li>


        <li class="dropdown <?php echo $menu_pessoas ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-users"></i>
            <span> Pessoas</span><i class="fa fa-angle-left pull-right"></i></a>
            <ul class="dropdown-menu">
               <li class="<?php echo @$usuarios ?>"><a href="index.php?pag=usuarios"><i class="fa fa-angle-right"></i> Usuários</a></li>

               <li class="<?php echo @$fornecedores ?>"><a href="index.php?pag=fornecedores"><i class="fa fa-angle-right"></i> Fornecedores</a></li>
               

                
            </ul>
        </li>


         <li class="dropdown <?php echo $menu_cadastros ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-plus"></i><span> Cadastros</span><i class="fa fa-angle-left pull-right"></i></a>
            
            <ul class="dropdown-menu">
              
             <li class="<?php echo @$grupos ?>"><a href="index.php?pag=grupos"><i class="fa fa-angle-right"></i> Grupo Acessos</a>
             </li>

             <li class="<?php echo @$acessos ?>"><a href="index.php?pag=acessos"><i class="fa fa-angle-right"></i> Acessos</a>
               </li>

                
            </ul>
        </li>


        <li class="dropdown  <?php echo $menu_produtos ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-plus">  
            </i><span> Produtos</span>
             <i class="fa fa-angle-left pull-right"></i></a>
            
            <ul class="dropdown-menu">
             <li class="<?php echo @$produtos ?>"><a href="index.php?pag=produtos"><i class="fa fa-angle-right"></i> Produtos</a></li>

                <li class="<?php echo @$cat_produtos ?>"><a href="index.php?pag=cat_produtos"><i class="fa fa-angle-right"></i> Categorias</a></li>
                                    
                <li class="<?php echo @$estoque ?>"><a href="index.php?pag=estoque"><i class="fa fa-angle-right"></i> Estoque Baixo</a></li>

                <li class="<?php echo @$saidas ?>"><a href="index.php?pag=saidas"><i class="fa fa-angle-right"></i> Saídas</a></li>

                <li class="<?php echo @$entradas ?>"><a href="index.php?pag=entradas"><i class="fa fa-angle-right"></i> Entradas</a></li>

                
            </ul>
        </li>


         <li class="dropdown <?php echo $menu_financeiro ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-usd"></i>
            <span>Financeiro</span>
            <i class="fa fa-angle-left pull-right"></i></a>
            
            <ul class="dropdown-menu">
              
             <li class="<?php echo @$vendas ?>"><a href="index.php?pag=vendas"><i class="fa fa-angle-right"></i>Vendas</a></li>

             <li class="<?php echo @$receber ?>"><a href="index.php?pag=receber"><i class="fa fa-angle-right"></i>Contas à Receber</a></li> 

                
            </ul>
        </li>


    </ul>
 </div>
    <div class="modal-footer ">
        
    </div>
 </div>
</div>
</div>






 <script type="text/javascript">
    $("#form-perfil").submit(function () {
       alert("ttdt")
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: "editar-perfil.php",
            type: 'POST',
            data: formData,

            success: function (mensagem) {
                $('#mensagem-perfil').text('');
                $('#mensagem-perfil').removeClass()
                if (mensagem.trim() == "Editado com Sucesso") {

                    $('#btn-fechar-perfil').click();
                    location.reload();          
                    
                } else {

                    $('#mensagem-perfil').addClass('text-danger')
                    $('#mensagem-perfil').text(mensagem)
                }


            },

            cache: false,
            contentType: false,
            processData: false,

        });

    });
</script>

 <script type="text/javascript">
    $("#form-config").submit(function () {

        event.preventDefault();
        var formData = new FormData(this);
        
        $.ajax({
            url: "editar-config.php",
            type: 'POST',
            data: formData,

            success: function (mensagem) {

                $('#mensagem-config').text('');
                $('#mensagem-config').removeClass()
                if (mensagem.trim() == "Editado com Sucesso") {
                    $('#mensagem-config').text('ditado com Sucesso');
                    $('#btn-fechar-config').click();
                    location.reload();          
                    
                } else {

                    $('#mensagem-config').addClass('text-danger')
                    $('#mensagem-config').text(mensagem)
                }


            },

            cache: false,
            contentType: false,
            processData: false,

        });

    });
</script>




<script >
 $(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
