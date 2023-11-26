<?php 
@session_start();
require_once("verificar.php");
require_once("../conexao.php");


$pag = 'ponto_venda';

//verificar se ele tem a permissão de estar nessa página
if(@$ponto_venda == 'ocultar'){
    echo "<script>window.location='../index.php'</script>";
    exit();
}


       $query = $pdo->prepare("SELECT max(id) as id FROM vendas");
	   $query->execute();
       $res = $query->fetchAll(PDO::FETCH_ASSOC);
     
			
	   $idv=$res[0]['id'];



?>


<style type="text/css">
	#border{
		border: 0px;
	}
 #disable{
 	background-color:#DCDCDC;
 	cursor: default;
 }
 a{
  cursor: pointer;
 }

</style>

 

<div class="main-page">
   <div class="">      
	<a class="btn btn-primary" onclick="inserir()" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Pré-Pago</a>
</div>
<br>

	<div class="col_3" >

       
      <?php  if (isset($_SESSION['tabelaComprasTempMesa1'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa1'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa01()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-01</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa01()">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-01</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vazia</span></div>
            </div>
		</div>
        </a>
      <?}?> 



      <?php  if (isset($_SESSION['tabelaComprasTempMesa2'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa2'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa02()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-02</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa02()">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-02</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vazia</span></div>
            </div>
		</div>
        </a>
      <?}?> 



      <?php  if (isset($_SESSION['tabelaComprasTempMesa3'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa3'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa03()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-03</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa03()">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-03</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vazia</span></div>
            </div>
		</div>
        </a>
      <?}?> 
	
	
       <?php  if (isset($_SESSION['tabelaComprasTempMesa4'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa4'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa04()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-04</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa04()">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-04</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vazia</span></div>
            </div>
		</div>
        </a>
      <?}?> 



      <?php  if (isset($_SESSION['tabelaComprasTempMesa5'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa5'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa05()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-05</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa05()">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-05</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vazia</span></div>
            </div>
		</div>
        </a>
      <?}?> 


          
   



		<br>
		<br>
		 <?php  if (isset($_SESSION['tabelaComprasTempMesa6'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa6'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa06()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-06</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa06()">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-06</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vazia</span></div>
            </div>
		</div>
        </a>
      <?}?> 



      <br>
		<br>
	 <?php  if (isset($_SESSION['tabelaComprasTempMesa7'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa7'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa07()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-07</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa07()">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-07</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vazia</span></div>
            </div>
		</div>
        </a>
      <?}?>



      <?php  if (isset($_SESSION['tabelaComprasTempMesa8'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa8'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa08()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-08</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa08()">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-08</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vazia</span></div>
            </div>
		</div>
        </a>
      <?}?> 



      <?php  if (isset($_SESSION['tabelaComprasTempMesa9'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa9'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa09()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-09</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa09()">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-09</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vazia</span></div>
            </div>
		</div>
        </a>
      <?}?> 



    <?php  if (isset($_SESSION['tabelaComprasTempMesa10'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa10'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa10()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-10</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa10()">
		<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-10</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vazia</span></div>
            </div>
		</div>
        </a>
      <?}?> 

	

     

		 

		<div style="margin-top: 10px" class="clearfix">


		</div>
		<?php  if (isset($_SESSION['tabelaComprasTempMesa11'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa11'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a   onclick="mesa11()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-11</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a   onclick="mesa11()">
		<div id="an" class="col-md-3 widget widget1">
			<div  id="disable" class="r3_counter_box">
				
                <i  class="pull-left fa dollar2 fa icon-rounded">M-11</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Dasabilitado</span></div>
            </div>
		</div>
        </a>
      <?}?> 

	

         
        <?php  if (isset($_SESSION['tabelaComprasTempMesa12'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa12'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa12()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-12</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa12()">
		<div class="col-md-3 widget widget1">
			<div id="disable" class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-12</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Dasabilitado</span></div>
            </div>
		</div>
        </a>
      <?}?> 


		

		<?php  if (isset($_SESSION['tabelaComprasTempMesa13'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa13'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa13()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-13</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa13()">
		<div class="col-md-3 widget widget1">
			<div id="disable" class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-13</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Dasabilitado</span></div>
            </div>
		</div>
        </a>
      <?}?> 

       
       <?php  if (isset($_SESSION['tabelaComprasTempMesa14'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa14'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa14()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-14</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa14()">
		<div class="col-md-3 widget widget1">
			<div id="disable" class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-14</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Dasabilitado</span></div>
            </div>
		</div>
        </a>
      <?}?> 

      <?php  if (isset($_SESSION['tabelaComprasTempMesa15'])) {

		$totm1=0;//total da venda em dinheiro
		$i=0;
		$totalm1=0;
		foreach (@$_SESSION['tabelaComprasTempMesa15'] as $key) {
		$m1=explode("||", @$key);

		$calcm1 = $m1[1] * $m1[3];
		$totalm1=$totalm1 + $calcm1;
		$i++;
		}
      ?>
       <a onclick="mesa15()">
      	<div class="col-md-3 widget widget1">
			<div class="r3_counter_box">
				
                <i class="pull-left fa  fa icon-rounded bg-warning">M-15</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	<?=$totalm1." ,00"?>
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Ocupado</span></div>
            </div>
		</div>
	 </a>
      <?} else{ ?>
     <a onclick="mesa15()">
		<div class="col-md-3 widget widget1">
			<div id="disable" class="r3_counter_box">
				
                <i class="pull-left fa dollar2 fa icon-rounded">M-15</i>
                <div class="stats">
                        <h5><strong><big><big>
                        	0,00
                        </big></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Dasabilitado</span></div>
            </div>
		</div>
        </a>
      <?}?> 

    	

     <div class="clearfix"> </div>
	</div>

</div>


   




    <!-- Modal Pre-pago-->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id="">Pré-Pago</span></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   <input hidden="" type="text" name="mesa" id="mesa" value="Sem Mesa">
							   	<input hidden="" type="text" name="cliente" id="cliente" value="0">	
							   	<input hidden="" type="number" name="estoque" id="estoque" >
							   	<input hidden="" name="status" id="status" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda" name="produtoVenda" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco" id="preco">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd" name="qtd" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total8=0;//total da venda em dinheiro
							$cliente=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTemp'])):
								$index=0;
								foreach (@$_SESSION['tabelaComprasTemp'] as $key) {

									$d8=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $d8[0] ?></td>
					        <td><?php echo $d8[1] ?></td>
					        <td><?php echo $d8[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque('<?=$d8[5]?>',' <?=$d8[2]?>','<?=$d8[8]?>'),removerItem('<?=$index?>',' <?=$d8[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc8 = $d8[1] * $d8[3];
							$total8=$total8 + $calc8;
							$index++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total9" style=" font-size: 1.2em" > <?php echo $total8.",00"; ?></span>
										 <input type="hidden" name="totalP" id="totalP" value="<?=$total8?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select  style=" text-align: right; font-size: 1em" class="form-control" id="fpagamento" name="fpagamento">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: right; font-size: 1.2em"  type="number"  name="vRecebido" id="vRecebido" class="form-control">
				<span  id="msgvalor" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change" id="change" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda"  class="btn btn-success"  onclick="fecharVenda()"> Fechar venda
				
				</span>


				<a style="float: right;" id="comprovante9"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>






    <!-- Modal Mesa01-->
<div class="modal fade" data-backdrop="static" id="modalForm1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id=""><strong>Mesa 01</strong></span></h4>
				<button id="btn-fechar1" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos1">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   	<input hidden="" type="text" name="mesa1" id="mesa1" value="Sem Mesa">
							   	<input hidden="" type="text" name="cliente1" id="cliente1" value="0">	
							   	<input hidden="" type="number" name="estoque1" id="estoque1" >
							   	<input hidden="" name="status1" id="status1" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda1" name="produtoVenda1" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp1"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco1" id="preco1">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto1" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target1">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd1" name="qtd1" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda1"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela1">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total1=0;//total da venda em dinheiro
							$cliente1=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTempMesa1'])):
								$i=0;
								foreach (@$_SESSION['tabelaComprasTempMesa1'] as $key) {

									$d1=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $d1[0] ?></td>
					        <td><?php echo $d1[1] ?></td>
					        <td><?php echo $d1[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque1('<?=$d1[5]?>',' <?=$d1[2]?>','<?=$d1[8]?>'),removerItem1('<?=$i?>',' <?=$d1[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc1 = $d1[1] * $d1[3];
							$total1=$total1 + $calc1;
							$i++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border1">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total1" style=" font-size: 1.2em" > <?php echo $total1.",00"; ?></span>
										 <input type="hidden" name="totalP1" id="totalP1" value="<?=$total1?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda1" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select style=" font-size: 1em"  class="form-control" id="fpagamento1" name="fpagamento1">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago1" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: center; font-size: 1.2em" type="number"  name="vRecebido1" id="vRecebido1" class="form-control">
				<span  id="msgvalor1" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change1" id="change1" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh1" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda1"  class="btn btn-success"  onclick="fecharVenda1()"> Fechar venda
				
				</span>
				   

				<a style="float: right;" id="comprovante1"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>





    <!-- Modal Mesa02-->

    <div class="modal fade" data-backdrop="static" id="modalForm2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id=""><strong>Mesa 02</strong></span></h4>
				<button id="btn-fechar2" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos2">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   	<input hidden="" type="text" name="mesa2" id="mesa2" value="Sem Mesa">
							   	<input hidden="" type="text" name="cliente2" id="cliente2" value="0">	
							   	<input hidden="" type="number" name="estoque2" id="estoque2" >
							   	<input hidden=""  name="status2" id="status2" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda2" name="produtoVenda2" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp2"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco2" id="preco2">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto2" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target2">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd2" name="qtd2" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd2"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda2"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela2">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total2=0;//total da venda em dinheiro
							$cliente2=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTempMesa2'])):
								$i2=0;
								foreach (@$_SESSION['tabelaComprasTempMesa2'] as $key) {

									$m2=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $m2[0] ?></td>
					        <td><?php echo $m2[1] ?></td>
					        <td><?php echo $m2[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque2('<?=$m2[5]?>',' <?=$m2[2]?>','<?=$m2[8]?>'),removerItem2('<?=$i2?>',' <?=$m2[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc2 = $m2[1] * $m2[3];
							$total2=$total2 + $calc2;
							$i2++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border1">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total1" style=" font-size: 1.2em" > <?php echo $total2.",00"; ?></span>
										 <input type="hidden" name="totalP2" id="totalP2" value="<?=$total2?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda2" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select style=" font-size: 1em"  class="form-control" id="fpagamento2" name="fpagamento2">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago1" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: center; font-size: 1.2em" type="number"  name="vRecebido2" id="vRecebido2" class="form-control">
				<span  id="msgvalor2" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change2" id="change2" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh2" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda2"  class="btn btn-success"  onclick="fecharVenda2()"> Fechar venda
				
				</span>
				   

				<a style="float: right;" id="comprovante1"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>



   <!-- Modal Mesa03-->


    <div class="modal fade" data-backdrop="static" id="modalForm3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id=""><strong>Mesa 03</strong></span></h4>
				<button id="btn-fechar3" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos3">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   	<input hidden="" type="text" name="mesa3" id="mesa3" value="Mesa">
							   	<input hidden="" type="text" name="cliente3" id="cliente3" value="0">	
							   	<input hidden="" type="number" name="estoque3" id="estoque3" >
							   	<input hidden=""  name="status3" id="status3" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda3" name="produtoVenda3" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp3"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco3" id="preco3">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto3" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target3">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd3" name="qtd3" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd3"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda3"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela3">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total3=0;//total da venda em dinheiro
							$cliente3=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTempMesa3'])):
								$i3=0;
								foreach (@$_SESSION['tabelaComprasTempMesa3'] as $key) {

									$m3=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $m3[0] ?></td>
					        <td><?php echo $m3[1] ?></td>
					        <td><?php echo $m3[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque3('<?=$m3[5]?>',' <?=$m3[2]?>','<?=$m3[8]?>'),removerItem3('<?=$i3?>',' <?=$m3[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc3 = $m3[1] * $m3[3];
							$total3=$total3 + $calc3;
							$i3++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border1">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total3" style=" font-size: 1.2em" > <?php echo $total3.",00"; ?></span>
										 <input type="hidden" name="totalP3" id="totalP3" value="<?=$total3?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda3" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select style=" font-size: 1em"  class="form-control" id="fpagamento3" name="fpagamento3">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago3" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: center; font-size: 1.2em" type="number"  name="vRecebido3" id="vRecebido3" class="form-control">
				<span  id="msgvalor3" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change3" id="change3" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh3" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda3"  class="btn btn-success"  onclick="fecharVenda3()"> Fechar venda
				
				</span>
				   

				<a style="float: right;" id="comprovante3"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>




  <!-- Modal Mesa04-->


    <div class="modal fade" data-backdrop="static" id="modalForm4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id=""><strong>Mesa 04</strong></span></h4>
				<button id="btn-fechar4" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos4">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   	<input hidden="" type="text" name="mesa4" id="mesa4" value="04">
							   	<input hidden="" type="text" name="cliente4" id="cliente4" value="0">	
							   	<input hidden="" type="number" name="estoque4" id="estoque4" >
							   	<input hidden=""  name="status4" id="status4" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda4" name="produtoVenda4" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp4"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco4" id="preco4">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto4" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target4">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd4" name="qtd4" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd4"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda4"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela4">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total4=0;//total da venda em dinheiro
							$cliente4=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTempMesa4'])):
								$i4=0;
								foreach (@$_SESSION['tabelaComprasTempMesa4'] as $key) {

									$m4=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $m4[0] ?></td>
					        <td><?php echo $m4[1] ?></td>
					        <td><?php echo $m4[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque4('<?=$m4[5]?>',' <?=$m4[2]?>','<?=$m4[8]?>'),removerItem4('<?=$i4?>',' <?=$m4[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc4 = $m4[1] * $m4[3];
							$total4=$total4 + $calc4;
							$i4++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border1">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total4" style=" font-size: 1.2em" > <?php echo $total4.",00"; ?></span>
										 <input type="hidden" name="totalP4" id="totalP4" value="<?=$total4?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda4" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select style=" font-size: 1em"  class="form-control" id="fpagamento4" name="fpagamento4">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago4" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: center; font-size: 1.2em" type="number"  name="vRecebido4" id="vRecebido4" class="form-control">
				<span  id="msgvalor4" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change4" id="change4" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh4" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda4"  class="btn btn-success"  onclick="fecharVenda4()"> Fechar venda
				
				</span>
				   

				<a style="float: right;" id="comprovante4"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>




<!-- Modal Mesa05-->


    <div class="modal fade" data-backdrop="static" id="modalForm5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id=""><strong>Mesa 05</strong></span></h4>
				<button id="btn-fechar5" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos5">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   	<input hidden="" type="text" name="mesa5" id="mesa5" value="05">
							   	<input hidden="" type="text" name="cliente5" id="cliente5" value="0">	
							   	<input hidden="" type="number" name="estoque5" id="estoque5" >
							   	<input hidden=""  name="status5" id="status5" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda5" name="produtoVenda5" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp5"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco5" id="preco5">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto5" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target5">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd5" name="qtd5" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd4"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda5"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela5">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total5=0;//total da venda em dinheiro
							$cliente5=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTempMesa5'])):
								$i5=0;
								foreach (@$_SESSION['tabelaComprasTempMesa5'] as $key) {

									$m5=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $m5[0] ?></td>
					        <td><?php echo $m5[1] ?></td>
					        <td><?php echo $m5[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque5('<?=$m5[5]?>',' <?=$m5[2]?>','<?=$m5[8]?>'),removerItem5('<?=$i5?>',' <?=$m5[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc5 = $m5[1] * $m5[3];
							$total5=$total5 + $calc5;
							$i5++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border1">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total5" style=" font-size: 1.2em" > <?php echo $total5.",00"; ?></span>
										 <input type="hidden" name="totalP5" id="totalP5" value="<?=$total5?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda5" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select style=" font-size: 1em"  class="form-control" id="fpagamento5" name="fpagamento5">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago5" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: center; font-size: 1.2em" type="number"  name="vRecebido5" id="vRecebido5" class="form-control">
				<span  id="msgvalor5" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change5" id="change5" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh5" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda5"  class="btn btn-success"  onclick="fecharVenda5()"> Fechar venda
				
				</span>
				   

				<a style="float: right;" id="comprovante5"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>




<!-- Modal Mesa06-->


    <div class="modal fade" data-backdrop="static" id="modalForm6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id=""><strong>Mesa 06</strong></span></h4>
				<button id="btn-fechar6" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   	<input hidden="" type="text" name="mesa6" id="mesa6" value="06">
							   	<input hidden="" type="text" name="cliente6" id="cliente6" value="0">	
							   	<input hidden="" type="number" name="estoque6" id="estoque6" >
							   	<input hidden=""  name="status6" id="status6" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda6" name="produtoVenda6" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp6"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco6" id="preco6">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto6" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target6">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd6" name="qtd6" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd6"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda6"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela6">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total6=0;//total da venda em dinheiro
							$cliente6=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTempMesa6'])):
								$i6=0;
								foreach (@$_SESSION['tabelaComprasTempMesa6'] as $key) {

									$m6=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $m6[0] ?></td>
					        <td><?php echo $m6[1] ?></td>
					        <td><?php echo $m6[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque6('<?=$m6[5]?>',' <?=$m6[2]?>','<?=$m6[8]?>'),removerItem6('<?=$i6?>',' <?=$m6[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc6 = $m6[1] * $m6[3];
							$total6=$total6 + $calc6;
							$i6++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border1">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total6" style=" font-size: 1.2em" > <?php echo $total6.",00"; ?></span>
										 <input type="hidden" name="totalP6" id="totalP6" value="<?=$total6?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda6" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select style=" font-size: 1em"  class="form-control" id="fpagamento6" name="fpagamento6">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago6" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: center; font-size: 1.2em" type="number"  name="vRecebido6" id="vRecebido6" class="form-control">
				<span  id="msgvalor6" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change6" id="change6" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh6" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda6"  class="btn btn-success"  onclick="fecharVenda6()"> Fechar venda
				
				</span>
				   

				<a style="float: right;" id="comprovante6"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>




<!-- Modal Mesa07-->


    <div class="modal fade" data-backdrop="static" id="modalForm7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id=""><strong>Mesa 07</strong></span></h4>
				<button id="btn-fechar7" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos7">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   	<input hidden="" type="text" name="mesa7" id="mesa7" value="06">
							   	<input hidden="" type="text" name="cliente7" id="cliente7" value="0">	
							   	<input hidden="" type="number" name="estoque7" id="estoque7" >
							   	<input hidden=""  name="status7" id="status7" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda7" name="produtoVenda7" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp7"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco7" id="preco7">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto7" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target7">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd7" name="qtd7" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd6"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda7"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela7">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total7=0;//total da venda em dinheiro
							$cliente7=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTempMesa7'])):
								$i7=0;
								foreach (@$_SESSION['tabelaComprasTempMesa7'] as $key) {

									$m7=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $m7[0] ?></td>
					        <td><?php echo $m7[1] ?></td>
					        <td><?php echo $m7[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque7('<?=$m7[5]?>',' <?=$m7[2]?>','<?=$m7[8]?>'),removerItem7('<?=$i7?>',' <?=$m7[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc7 = $m7[1] * $m7[3];
							$total7=$total7 + $calc7;
							$i7++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border1">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total7" style=" font-size: 1.2em" > <?php echo $total7.",00"; ?></span>
										 <input type="hidden" name="totalP7" id="totalP7" value="<?=$total7?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda7" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select style=" font-size: 1em"  class="form-control" id="fpagamento7" name="fpagamento7">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago7" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: center; font-size: 1.2em" type="number"  name="vRecebido7" id="vRecebido7" class="form-control">
				<span  id="msgvalor6" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change7" id="change7" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh7" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda7"  class="btn btn-success"  onclick="fecharVenda7()"> Fechar venda
				
				</span>
				   

				<a style="float: right;" id="comprovante7"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>



<!-- Modal Mesa08-->


    <div class="modal fade" data-backdrop="static" id="modalForm8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id=""><strong>Mesa 08</strong></span></h4>
				<button id="btn-fechar8" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos8">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   	<input hidden="" type="text" name="mesa8" id="mesa8" value="06">
							   	<input hidden="" type="text" name="cliente8" id="cliente8" value="0">	
							   	<input hidden="" type="number" name="estoque8" id="estoque8" >
							   	<input hidden=""  name="status8" id="status8" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda8" name="produtoVenda8" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp8"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco8" id="preco8">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto8" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target8">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd8" name="qtd8" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd8"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda8"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela8">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total8=0;//total da venda em dinheiro
							$cliente8=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTempMesa8'])):
								$i8=0;
								foreach (@$_SESSION['tabelaComprasTempMesa8'] as $key) {

									$m8=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $m8[0] ?></td>
					        <td><?php echo $m8[1] ?></td>
					        <td><?php echo $m8[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque8('<?=$m8[5]?>',' <?=$m8[2]?>','<?=$m8[8]?>'),removerItem8('<?=$i8?>',' <?=$m8[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc8 = $m8[1] * $m8[3];
							$total8=$total8 + $calc8;
							$i8++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border1">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total8" style=" font-size: 1.2em" > <?php echo $total8.",00"; ?></span>
										 <input type="hidden" name="totalP8" id="totalP8" value="<?=$total8?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda8" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select style=" font-size: 1em"  class="form-control" id="fpagamento8" name="fpagamento8">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago8" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: center; font-size: 1.2em" type="number"  name="vRecebido8" id="vRecebido8" class="form-control">
				<span  id="msgvalor8" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change8" id="change8" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh8" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda8"  class="btn btn-success"  onclick="fecharVenda8()"> Fechar venda
				
				</span>
				   

				<a style="float: right;" id="comprovante8"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>



<!-- Modal Mesa09-->


    <div class="modal fade" data-backdrop="static" id="modalForm9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id=""><strong>Mesa 09</strong></span></h4>
				<button id="btn-fechar9" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos9">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   	<input hidden="" type="text" name="mesa9" id="mesa9" value="06">
							   	<input hidden="" type="text" name="cliente9" id="cliente9" value="0">	
							   	<input hidden="" type="number" name="estoque9" id="estoque9" >
							   	<input hidden=""  name="status9" id="status9" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda9" name="produtoVenda9" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp9"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco9" id="preco9">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto9" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target9">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd9" name="qtd9" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd9"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda9"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela9">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total9=0;//total da venda em dinheiro
							$cliente9=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTempMesa9'])):
								$i9=0;
								foreach (@$_SESSION['tabelaComprasTempMesa9'] as $key) {

									$m9=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $m9[0] ?></td>
					        <td><?php echo $m9[1] ?></td>
					        <td><?php echo $m9[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque9('<?=$m9[5]?>',' <?=$m9[2]?>','<?=$m9[8]?>'),removerItem9('<?=$i9?>',' <?=$m9[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc9 = $m9[1] * $m9[3];
							$total9=$total9 + $calc9;
							$i9++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border1">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total9" style=" font-size: 1.2em" > <?php echo $total9.",00"; ?></span>
										 <input type="hidden" name="totalP9" id="totalP9" value="<?=$total9?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda9" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select style=" font-size: 1em"  class="form-control" id="fpagamento9" name="fpagamento9">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago9" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: center; font-size: 1.2em" type="number"  name="vRecebido9" id="vRecebido9" class="form-control">
				<span  id="msgvalor9" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change9" id="change9" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh9" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda9"  class="btn btn-success"  onclick="fecharVenda9()"> Fechar venda
				
				</span>
				   

				<a style="float: right;" id="comprovante9"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>



<!-- Modal Mesa10-->


    <div class="modal fade" data-backdrop="static" id="modalForm10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id=""><strong>Mesa 10</strong></span></h4>
				<button id="btn-fechar10" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true" >&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form  id="frmVendasProdutos10">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

							   	<input hidden="" type="text" name="mesa10" id="mesa10" value="10">
							   	<input hidden="" type="text" name="cliente10" id="cliente10" value="0">	
							   	<input hidden="" type="number" name="estoque10" id="estoque10" >
							   	<input hidden=""  name="status10" id="status10" type="number" name="">
								<label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
								<select class="form-control sel2" id="produtoVenda10" name="produtoVenda10" style="width:100%;" >  <button type="submit" class="btn btn-primary">Salvar</button>
								<option value="A"></option>

								<?php
							
								$query = $pdo->query("SELECT id,
								nome
								from produtos");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Cargo</option>';
										}

									?>
									
							   </select>  
                               <span class="text-danger" id="msgp10"></span>
							</div> 
                        
						</div>
						<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Preco</label>
									<input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco10" id="preco10">
																
								</div>
							</div>
							<div class="col-md-3">
								<div id="imgProduto10" style="float: right;">
									<img src="img/produtos/sem-foto.jpg"  width="80px" id="target10">									
								</div>
							</div>

					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						<label for="exampleInputEmail1"></label>
								<input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd10" name="qtd10" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd10"></span>    
							</div> 	
						</div>
						

						<div class="col-md-6">
							
							<div class="form-group" >
								<label for="exampleInputEmail1"></label>
								<span  class="form-control btn btn-primary " id="btnAddVenda10"><span class="fa fa-plus"> </span> Adicionar</span>
							</div> 	
						</div>

                     

					</div>
				</form>

					<div class="row">
						<div class="col-md-12">
							<caption>Lista de Pedidos</caption>
						
						<table class="table table-hover" id="tabela10">
					    <thead>
					      <tr>
					        <th>Produto</th>
					        <th>Preço</th>
					        <th>Qtd</th>
					        <th style="text-align: center;">Cancelar</th>
					      </tr>
					    </thead>
					    <tbody>
					    	
					      <?php  
							$total10=0;//total da venda em dinheiro
							$cliente10=""; //nome cliente
							if(isset($_SESSION['tabelaComprasTempMesa10'])):
								$i10=0;
								foreach (@$_SESSION['tabelaComprasTempMesa10'] as $key) {

									$m10=explode("||", @$key);
									?>
					      	<tr>
					        <td><?php echo $m10[0] ?></td>
					        <td><?php echo $m10[1] ?></td>
					        <td><?php echo $m10[3] ?></td>
					        <td  style="text-align: center;">
					        <i class="btn btn-danger btn-sm" onclick="atualizarEstoque10('<?=$m10[5]?>',' <?=$m10[2]?>','<?=$m10[8]?>'),removerItem10('<?=$i10?>',' <?=$m10[0]?>')">
							<i class='fa fa-close'></i>
							</i>
					        </td>
					      </tr>

					       	<?php 
							$calc10 = $m10[1] * $m10[3];
							$total10=$total10 + $calc10;
							$i10++;
							
								}
							endif; 
							?>
	
					    </tbody>
					     <tfoot>
					     <tr id="border1">
					      	<td colspan="4" id="border">
					   
								<label>Total a Pagar:</label><span id="total10" style=" font-size: 1.2em" > <?php echo $total10.",00"; ?></span>
										 <input type="hidden" name="totalP10" id="totalP10" value="<?=$total10?>">
							
							</td>
						</tr>
					   </tfoot>
					  </table>
							
						</div>
					</div>
				<form id="formFecharVenda10" enctype="multipart/form-data">
				<div class="row g-3">
	
				<div class="col-sm-4">
						<label>Pagamento</label>
				<select style=" font-size: 1em"  class="form-control" id="fpagamento10" name="fpagamento10">
					<?php
							
							$query = $pdo->query("SELECT id,
								forma
								from forma_pagamento");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$total_reg = @count($res);
									if($total_reg > 0){
										for($i=0; $i < $total_reg; $i++){
										foreach ($res[$i] as $key => $value){}
										echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
										}
									}else{
											echo '<option value="0">Cadastre um Pagamento</option>';
										}

				    ?>
					
					

				</select>
					<span  id="msgfpago10" class="text-danger"></span>
					</div>
					<div class="col-sm-4">
						<label >Valor</label>
				<input style=" text-align: center; font-size: 1.2em" type="number"  name="vRecebido10" id="vRecebido10" class="form-control">
				<span  id="msgvalor10" class="text-danger"></span>
					</div>

					<div class="col-sm-4">
					<label>Troco</label>
						<input  style=" text-align: right; font-size: 1.2em" type="text" readonly="" name="change10" id="change10" class="form-control ">
					</div>
      
				</div>
			 </form>
				<br>
			
			<table class="table table-bordered " id="refresh10" style="border:none;" >
	       	<thead>
	       		
		       	</thead >
		       	<tbody> 
		        <tr>
		        	<td style="border:none;">

				<div class="modal-footer">      
				<span  style="float: left;"  id="fecharVenda10"  class="btn btn-success"  onclick="fecharVenda10()"> Fechar venda
				
				</span>
				   

				<a style="float: right;" id="comprovante9"  href="../painel/procedimentos/comprovanteDomPDF.php?idv=<?=$idv?>" class="btn btn-info">
				<i class="fa fa-print"></i></a>
				</div>

				 </td>
	       	</tr> 
	       </tbody>
	   </table>


			
		</div>
	</div>
</div>

</div>









<script src="js/sweetalert2@11.js"></script>
    
<script type="text/javascript">
	$(document).ready(function() {
     $('#btn-fechar1').click(function(){
			history.go(0);
			
		});
     $('#btn-fechar2').click(function(){
			history.go(0);
			
		});


      $('#btn-fechar3').click(function(){
			history.go(0);
			
		});

      	

		$('#btn-fechar4').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar5').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar6').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar7').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar8').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar9').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar10').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar11').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar12').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar13').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar14').click(function(){
			history.go(0);
			
		});

		$('#btn-fechar15').click(function(){
			history.go(0);
			
		});



		$('#produtoVenda').select2({
			dropdownParent: $('#modalForm')
			
		});

		$('#produtoVenda1').select2({
			dropdownParent: $('#modalForm1')
			
		});

		$('#produtoVenda2').select2({
			dropdownParent: $('#modalForm2')
			
		});

		$('#produtoVenda3').select2({
			dropdownParent: $('#modalForm3')
			
		});

		$('#produtoVenda4').select2({
			dropdownParent: $('#modalForm4')
			
		});


		$('#produtoVenda5').select2({
			dropdownParent: $('#modalForm5')
			
		});

		$('#produtoVenda6').select2({
			dropdownParent: $('#modalForm6')
			
		});

		$('#produtoVenda7').select2({
			dropdownParent: $('#modalForm7')
			
		});

		$('#produtoVenda8').select2({
			dropdownParent: $('#modalForm8')
			
		});

		$('#produtoVenda9').select2({
			dropdownParent: $('#modalForm9')
			
		});

		$('#produtoVenda10').select2({
			dropdownParent: $('#modalForm10')
			
		});

		$('#produtoVenda11').select2({
			dropdownParent: $('#modalForm11')
			
		});

		$('#produtoVenda12').select2({
			dropdownParent: $('#modalForm12')
			
		});

		$('#produtoVenda13').select2({
			dropdownParent: $('#modalForm13')
			
		});

		$('#produtoVenda14').select2({
			dropdownParent: $('#modalForm14')
			
		});

		$('#produtoVenda15').select2({
			dropdownParent: $('#modalForm15')
			
		});



	
	});





function inserir(){
    $('#mensagem').text('');
    $('#titulo_inserir').text('Inserir Registro');
    $('#modalForm').modal('show');
  
}

	function mesa01(){
    $('#modalForm1').modal('show');
  
}

	function mesa02(){
    $('#modalForm2').modal('show');
  
}

function mesa03(){
    $('#modalForm3').modal('show');
  
}

function mesa04(){
    $('#modalForm4').modal('show');
  
}

function mesa05(){
    $('#modalForm5').modal('show');
  
}

function mesa06(){
    $('#modalForm6').modal('show');
  
}

function mesa07(){
    $('#modalForm7').modal('show');
  
}

function mesa07(){
    $('#modalForm7').modal('show');
  
}

function mesa08(){
    $('#modalForm8').modal('show');
  
}

function mesa09(){
    $('#modalForm9').modal('show');
  
}

function mesa10(){
    $('#modalForm10').modal('show');
  
}

function mesa11(){
    $('#modalForm11').modal('show');
  
}

function mesa12(){
    $('#modalForm12').modal('show');
  
}

function mesa13(){
    $('#modalForm13').modal('show');
  
}

function mesa14(){
    $('#modalForm14').modal('show');
  
}

function mesa15(){
    $('#modalForm15').modal('show');
  
}


</script>


<script type="text/javascript">
	$('#produtoVenda').change(function(){

    
		$("#msgp").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status').val(dado['status']);
					$('#estoque').val(dado['quantidade']);
					$('#preco').val(dado['preco']);
					$('#target').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>

<script type="text/javascript">
	$('#produtoVenda1').change(function(){
	//Script Mesa 01
     //alert("1")

    
		$("#msgp1").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda1').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status1').val(dado['status']);
					$('#estoque1').val(dado['quantidade']);
					$('#preco1').val(dado['preco']);
					$('#target1').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>



<script type="text/javascript">
	$('#produtoVenda2').change(function(){
	//Script Mesa 02
     
     

    
		$("#msgp2").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda2').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

				
					dado=jQuery.parseJSON(r);
			        $('#status2').val(dado['status']);
					$('#estoque2').val(dado['quantidade']);
					$('#preco2').val(dado['preco']);
					$('#target2').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>



<script type="text/javascript">
	$('#produtoVenda3').change(function(){
	//Script Mesa 03
     //alert("1")

    
		$("#msgp3").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda3').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status3').val(dado['status']);
					$('#estoque3').val(dado['quantidade']);
					$('#preco3').val(dado['preco']);
					$('#target3').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>


<script type="text/javascript">
	$('#produtoVenda4').change(function(){
	//Script Mesa 04
     //alert("1")

    
		$("#msgp1").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda4').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status4').val(dado['status']);
					$('#estoque4').val(dado['quantidade']);
					$('#preco4').val(dado['preco']);
					$('#target4').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>


<script type="text/javascript">
	$('#produtoVenda5').change(function(){
	//Script Mesa 05
     //alert("1")

    
		$("#msgp5").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda5').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status5').val(dado['status']);
					$('#estoque5').val(dado['quantidade']);
					$('#preco5').val(dado['preco']);
					$('#target5').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>


<script type="text/javascript">
	$('#produtoVenda6').change(function(){
	//Script Mesa 06
     //alert("1")

    
		$("#msgp6").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda6').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status6').val(dado['status']);
					$('#estoque6').val(dado['quantidade']);
					$('#preco6').val(dado['preco']);
					$('#target6').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>


<script type="text/javascript">
	$('#produtoVenda7').change(function(){
	//Script Mesa 07
     //alert("1")

    
		$("#msgp7").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda7').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status7').val(dado['status']);
					$('#estoque7').val(dado['quantidade']);
					$('#preco7').val(dado['preco']);
					$('#target7').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>


<script type="text/javascript">
	$('#produtoVenda8').change(function(){
	//Script Mesa 08
     //alert("1")

    
		$("#msgp8").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda8').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status8').val(dado['status']);
					$('#estoque8').val(dado['quantidade']);
					$('#preco8').val(dado['preco']);
					$('#target8').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>


<script type="text/javascript">
	$('#produtoVenda9').change(function(){
	//Script Mesa 09
     //alert("1")

    
		$("#msgp9").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda9').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status9').val(dado['status']);
					$('#estoque9').val(dado['quantidade']);
					$('#preco9').val(dado['preco']);
					$('#target9').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>

<script type="text/javascript">
	$('#produtoVenda10').change(function(){
	//Script Mesa 10
     //alert("1")

    
		$("#msgp1").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda10').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status10').val(dado['status']);
					$('#estoque10').val(dado['quantidade']);
					$('#preco10').val(dado['preco']);
					$('#target10').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>

<script type="text/javascript">
	$('#produtoVenda11').change(function(){
	//Script Mesa 11
     //alert("1")

    
		$("#msgp1").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda11').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status11').val(dado['status']);
					$('#estoque11').val(dado['quantidade']);
					$('#preco11').val(dado['preco']);
					$('#target11').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>


<script type="text/javascript">
	$('#produtoVenda12').change(function(){
	//Script Mesa 012
     //alert("1")

    
		$("#msgp1").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda12').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status12').val(dado['status']);
					$('#estoque12').val(dado['quantidade']);
					$('#preco12').val(dado['preco']);
					$('#target12').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>

<script type="text/javascript">
	$('#produtoVenda13').change(function(){
	//Script Mesa 13
     //alert("1")

    
		$("#msgp13").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda13').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status13').val(dado['status']);
					$('#estoque13').val(dado['quantidade']);
					$('#preco13').val(dado['preco']);
					$('#target13').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>

<script type="text/javascript">
	$('#produtoVenda14').change(function(){
	//Script Mesa 014
     //alert("1")

    
		$("#msgp14").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda14').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status14').val(dado['status']);
					$('#estoque14').val(dado['quantidade']);
					$('#preco14').val(dado['preco']);
					$('#target14').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>

<script type="text/javascript">
	$('#produtoVenda15').change(function(){
	//Script Mesa 015
     //alert("1")

    
		$("#msgp15").hide();
		
			$.ajax({
				type:"POST",
				data:"idproduto=" + $('#produtoVenda15').val(),
				url:"../painel/procedimentos/obterDadosProduto.php",
				success:function(r){

					//alert(r)
					dado=jQuery.parseJSON(r);
			        $('#status15').val(dado['status']);
					$('#estoque15').val(dado['quantidade']);
					$('#preco15').val(dado['preco']);
					$('#target15').attr('src','img/produtos/' + dado['url']);
					
					
				}


			});
		});
</script>



<script type="text/javascript">
	$(document).ready(function(){

         $('#qtd').keyup(function(){
            $('#msgqtd').hide();
        });


		$('#btnAddVenda').click(function(){
           
				produto=$('#produtoVenda').val();
				qty=$('#qtd').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos.qtd.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos').serialize();
		
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTemp.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos')[0].reset();
						 	//refresh da tabela
							$("#tabela").load(" #tabela > *");
							$('#produtoVenda').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>






<script type="text/javascript">

	//Script Mesa 01
	$(document).ready(function(){
       
         $('#qtd1').keyup(function(){
            $('#msgqtd1').hide();
        });


		$('#btnAddVenda1').click(function(){
           
				produto=$('#produtoVenda1').val();
				qty=$('#qtd1').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp1").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd1").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos.qtd.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos1').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa1.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target1').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos1')[0].reset();
						 	//refresh da tabela
							$("#tabela1").load(" #tabela1 > *");
							$('#produtoVenda1').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">

	//Script Mesa 2
	$(document).ready(function(){

         $('#qtd2').keyup(function(){
            $('#msgqtd2').hide();
        });


		$('#btnAddVenda2').click(function(){
           
				produto=$('#produtoVenda2').val();
				qty=$('#qtd2').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp2").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd2").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos2.qtd2.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos2').serialize();
		    
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa2.php",
					success:function(r){
					
						if (r=1) {
							$('#target2').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos2')[0].reset();
						 	//refresh da tabela
							$("#tabela2").load(" #tabela2 > *");
							$('#produtoVenda2').val(null).trigger('change');
						}

					},
					  error: function(r) {
      alert(r)
                Swal.fire({

                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">

	//Script Mesa 03
	$(document).ready(function(){
       
         $('#qtd3').keyup(function(){
            $('#msgqtd3').hide();
        });


		$('#btnAddVenda3').click(function(){
           
				produto=$('#produtoVenda3').val();
				qty=$('#qtd3').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp3").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd3").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos3.qtd3.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos3').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa3.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target3').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos3')[0].reset();
						 	//refresh da tabela
							$("#tabela3").load(" #tabela3 > *");
							$('#produtoVenda3').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">

	//Script Mesa 04
	$(document).ready(function(){
       
         $('#qtd4').keyup(function(){
            $('#msgqtd4').hide();
        });


		$('#btnAddVenda4').click(function(){
           
				produto=$('#produtoVenda4').val();
				qty=$('#qtd4').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp4").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd4").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos4.qtd4.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos4').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa4.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target4').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos4')[0].reset();
						 	//refresh da tabela
							$("#tabela4").load(" #tabela4 > *");
							$('#produtoVenda4').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">

	//Script Mesa 05
	$(document).ready(function(){
       
         $('#qt5').keyup(function(){
            $('#msgqtd5').hide();
        });


		$('#btnAddVenda5').click(function(){
           
				produto=$('#produtoVenda5').val();
				qty=$('#qtd5').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp5").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd5").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos5.qtd5.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos5').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa5.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target5').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos5')[0].reset();
						 	//refresh da tabela
							$("#tabela5").load(" #tabela5 > *");
							$('#produtoVenda5').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">

	//Script Mesa 06
	$(document).ready(function(){
       
         $('#qtd6').keyup(function(){
            $('#msgqtd6').hide();
        });


		$('#btnAddVenda6').click(function(){
           
				produto=$('#produtoVenda6').val();
				qty=$('#qtd6').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp6").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd6").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos.qtd.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos6').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa6.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target6').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos6')[0].reset();
						 	//refresh da tabela
							$("#tabela6").load(" #tabela6 > *");
							$('#produtoVenda6').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>

<script type="text/javascript">

	//Script Mesa 07
	$(document).ready(function(){
       
         $('#qtd7').keyup(function(){
            $('#msgqtd7').hide();
        });


		$('#btnAddVenda7').click(function(){
           
				produto=$('#produtoVenda7').val();
				qty=$('#qtd7').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp7").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd7").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos7.qtd7.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos7').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa7.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target7').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos7')[0].reset();
						 	//refresh da tabela
							$("#tabela7").load(" #tabela7 > *");
							$('#produtoVenda7').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">

	//Script Mesa 08
	$(document).ready(function(){
       
         $('#qtd8').keyup(function(){
            $('#msgqtd8').hide();
        });


		$('#btnAddVenda8').click(function(){
           
				produto=$('#produtoVenda8').val();
				qty=$('#qtd8').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp8").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd8").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos.qtd.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos8').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa8.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target8').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos8')[0].reset();
						 	//refresh da tabela
							$("#tabela8").load(" #tabela8 > *");
							$('#produtoVenda8').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">

	//Script Mesa 09
	$(document).ready(function(){
       
         $('#qtd9').keyup(function(){
            $('#msgqtd9').hide();
        });


		$('#btnAddVenda9').click(function(){
           
				produto=$('#produtoVenda9').val();
				qty=$('#qtd9').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp9").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd9").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos9.qtd9.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos9').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa9.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target9').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos9')[0].reset();
						 	//refresh da tabela
							$("#tabela9").load(" #tabela9 > *");
							$('#produtoVenda9').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">

	//Script Mesa 10
	$(document).ready(function(){
       
         $('#qtd10').keyup(function(){
            $('#msgqtd10').hide();
        });


		$('#btnAddVenda10').click(function(){
           
				produto=$('#produtoVenda10').val();
				qty=$('#qtd10').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp10").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd10").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos10.qtd10.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos10').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa10.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target10').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos10')[0].reset();
						 	//refresh da tabela
							$("#tabela10").load(" #tabela10 > *");
							$('#produtoVenda10').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>

<script type="text/javascript">

	//Script Mesa 01
	$(document).ready(function(){
       
         $('#qtd11').keyup(function(){
            $('#msgqtd11').hide();
        });


		$('#btnAddVenda11').click(function(){
           
				produto=$('#produtoVenda11').val();
				qty=$('#qtd1').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp11").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd11").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos11.qtd11.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos11').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa11.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target11').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos11')[0].reset();
						 	//refresh da tabela
							$("#tabela11").load(" #tabela11 > *");
							$('#produtoVenda11').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">

	//Script Mesa 12
	$(document).ready(function(){
       
         $('#qtd12').keyup(function(){
            $('#msgqtd12').hide();
        });


		$('#btnAddVenda12').click(function(){
           
				produto=$('#produtoVenda12').val();
				qty=$('#qtd1').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp12").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd12").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos.qtd.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos12').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa12.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target12').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos12')[0].reset();
						 	//refresh da tabela
							$("#tabela12").load(" #tabela12 > *");
							$('#produtoVenda12').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">

	//Script Mesa 013
	$(document).ready(function(){
       
         $('#qtd13').keyup(function(){
            $('#msgqtd13').hide();
        });


		$('#btnAddVenda13').click(function(){
           
				produto=$('#produtoVenda13').val();
				qty=$('#qtd13').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp13").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd13").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos13.qtd13.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos13').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa13.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target13').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos13')[0].reset();
						 	//refresh da tabela
							$("#tabela13").load(" #tabela13 > *");
							$('#produtoVenda13').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>

<script type="text/javascript">

	//Script Mesa 01
	$(document).ready(function(){
       
         $('#qtd14').keyup(function(){
            $('#msgqtd1').hide();
        });


		$('#btnAddVenda14').click(function(){
           
				produto=$('#produtoVenda14').val();
				qty=$('#qtd14').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp14").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd14").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos14.qtd14.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos14').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa14.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target14').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos14')[0].reset();
						 	//refresh da tabela
							$("#tabela14").load(" #tabela14 > *");
							$('#produtoVenda1').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>

<script type="text/javascript">

	//Script Mesa 15
	$(document).ready(function(){
       
         $('#qtd15').keyup(function(){
            $('#msgqtd15').hide();
        });


		$('#btnAddVenda15').click(function(){
           
				produto=$('#produtoVenda15').val();
				qty=$('#qtd15').val();
				
			   		
			  if(produto == "A"){
				                  
              $("#msgp15").text("Selecione um produto");
					 
					return false;
				}

				if(qty == ""){
                    $("#msgqtd15").text("Informe a Quantidade!");
					
					
				
					frmVendasProdutos15.qtdq5.focus();
					
					return false;
				}

			dados=$('#frmVendasProdutos15').serialize();
		  
			$.ajax({
					type:"POST",
					data:dados,
					url:"../painel/procedimentos/adicionarProdutoTempMesa15.php",
					success:function(r){
						//alert(r);
						if (r=1) {
							$('#target15').attr('src','img/produtos/sem-foto.jpg');
							$('#frmVendasProdutos15')[0].reset();
						 	//refresh da tabela
							$("#tabela15").load(" #tabela15 > *");
							$('#produtoVenda15').val(null).trigger('change');
						}

					},
					  error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                	                	
	            }

				});
			});
	});
</script>


<script type="text/javascript">
	function atualizarEstoque(id,estoque,status){
			
			$.ajax({
				type:"POST",
				data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem(index,produto){
	 
	 	//alert(produto);
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItem.php",
			success:function(r){
				$("#tabela").load(" #tabela > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}
</script>



<script type="text/javascript">
	//Script Mesa 01
	function atualizarEstoque1(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem1(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa1.php",
			success:function(r){
				$("#tabela1").load(" #tabela1 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}



	function atualizarEstoque2(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem2(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa2.php",
			success:function(r){
				$("#tabela2").load(" #tabela2 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}



	

	function atualizarEstoque3(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem3(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa3.php",
			success:function(r){
				$("#tabela3").load(" #tabela3 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}



	function atualizarEstoque4(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem4(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa4.php",
			success:function(r){
				$("#tabela4").load(" #tabela4 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}



	function atualizarEstoque5(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem5(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa5.php",
			success:function(r){
				$("#tabela5").load(" #tabela5 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}


	function atualizarEstoque6(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem6(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa6.php",
			success:function(r){
				$("#tabela6").load(" #tabela6 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}


	function atualizarEstoque7(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem7(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa7.php",
			success:function(r){
				$("#tabela7").load(" #tabela7 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}

	function atualizarEstoque8(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem8(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa8.php",
			success:function(r){
				$("#tabela8").load(" #tabela8 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}


	function atualizarEstoque9(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem9(index,produto){
	  //alert(index)
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa9.php",
			success:function(r){
				$("#tabela9").load(" #tabela9 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}


	function atualizarEstoque10(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem10(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa10.php",
			success:function(r){
				$("#tabela10").load(" #tabela10 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}

	function atualizarEstoque11(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem11(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa1.php",
			success:function(r){
				$("#tabela11").load(" #tabela11 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}

	function atualizarEstoque12(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem12(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa12.php",
			success:function(r){
				$("#tabela12").load(" #tabela12 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}

	function atualizarEstoque13(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem13(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa3.php",
			success:function(r){
				$("#tabela13").load(" #tabela13 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}



function atualizarEstoque14(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem14(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa14.php",
			success:function(r){
				$("#tabela1").load(" #tabela1 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}


	function atualizarEstoque1(id,estoque,status){
			$.ajax({
				type:"POST",
			    data:"id="+ id+"&estoque="+estoque+"&status="+status,
				url:"../painel/procedimentos/atualizarEstoque.php",
				success:function(r){
					
					//alert(r)
				}
			});
		}

	 function removerItem15(index,produto){
	 
		$.ajax({
			type:"POST",
			data:"i=" + index,
			url:"../painel/procedimentos/removerItemMesa15.php",
			success:function(r){
				$("#tabela15").load(" #tabela15 > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
				
			}
		});
	}



</script>

<script type="text/javascript">

		       //Script Calculo Pre-pago 
	$('#vRecebido').keyup(function (event){
			 	   
		total=parseFloat($('#totalP').val())||0;
		valorR=parseFloat($('#vRecebido').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change').val(troco+".00");
		$('#msgvalor').hide();
		}
			    	
				   
	});


	$('#vRecebido1').keyup(function (event){
			 	   
		total=parseFloat($('#totalP1').val())||0;
		valorR=parseFloat($('#vRecebido1').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change1').val(troco+".00");
		$('#msgvalor1').hide();
		}
			    	
				   
	});


	$('#vRecebido2').keyup(function (event){
			 	   
		total=parseFloat($('#totalP2').val())||0;
		valorR=parseFloat($('#vRecebido2').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change2').val(troco+".00");
		$('#msgvalor2').hide();
		}
			    	
				   
	});



	$('#vRecebido3').keyup(function (event){
			 	   
		total=parseFloat($('#totalP3').val())||0;
		valorR=parseFloat($('#vRecebido3').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change3').val(troco+".00");
		$('#msgvalor3').hide();
		}
			    	
				   
	});


	$('#vRecebido4').keyup(function (event){
			 	   
		total=parseFloat($('#totalP4').val())||0;
		valorR=parseFloat($('#vRecebido4').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change4').val(troco+".00");
		$('#msgvalor4').hide();
		}
			    	
				   
	});


	$('#vRecebido5').keyup(function (event){
			 	   
		total=parseFloat($('#totalP5').val())||0;
		valorR=parseFloat($('#vRecebido5').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change5').val(troco+".00");
		$('#msgvalor5').hide();
		}
			    	
				   
	});


	$('#vRecebido6').keyup(function (event){
			 	   
		total=parseFloat($('#totalP6').val())||0;
		valorR=parseFloat($('#vRecebido6').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change6').val(troco+".00");
		$('#msgvalor6').hide();
		}
			    	
				   
	});


	$('#vRecebido7').keyup(function (event){
			 	   
		total=parseFloat($('#totalP7').val())||0;
		valorR=parseFloat($('#vRecebido7').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change7').val(troco+".00");
		$('#msgvalor7').hide();
		}
			    	
				   
	});

	$('#vRecebido8').keyup(function (event){
			 	   
		total=parseFloat($('#totalP8').val())||0;
		valorR=parseFloat($('#vRecebido8').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change8').val(troco+".00");
		$('#msgvalor8').hide();
		}
			    	
				   
	});


	$('#vRecebido9').keyup(function (event){
			 	   
		total=parseFloat($('#totalP9').val())||0;
		valorR=parseFloat($('#vRecebido9').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change9').val(troco+".00");
		$('#msgvalor9').hide();
		}
			    	
				   
	});


	$('#vRecebido10').keyup(function (event){
			 	   
		total=parseFloat($('#totalP10').val())||0;
		valorR=parseFloat($('#vRecebido10').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change10').val(troco+".00");
		$('#msgvalor10').hide();
		}
			    	
				   
	});



	$('#vRecebido11').keyup(function (event){
			 	   
		total=parseFloat($('#totalP11').val())||0;
		valorR=parseFloat($('#vRecebido11').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change11').val(troco+".00");
		$('#msgvalor11').hide();
		}
			    	
				   
	});
	

	$('#vRecebido12').keyup(function (event){
			 	   
		total=parseFloat($('#totalP12').val())||0;
		valorR=parseFloat($('#vRecebido12').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change12').val(troco+".00");
		$('#msgvalor12').hide();
		}
			    	
				   
	});

	$('#vRecebido13').keyup(function (event){
			 	   
		total=parseFloat($('#totalP13').val())||0;
		valorR=parseFloat($('#vRecebido13').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change13').val(troco+".00");
		$('#msgvalor13').hide();
		}
			    	
				   
	});


	$('#vRecebido14').keyup(function (event){
			 	   
		total=parseFloat($('#totalP14').val())||0;
		valorR=parseFloat($('#vRecebido14').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change14').val(troco+".00");
		$('#msgvalor14').hide();
		}
			    	
				   
	});


	$('#vRecebido15').keyup(function (event){
			 	   
		total=parseFloat($('#totalP15').val())||0;
		valorR=parseFloat($('#vRecebido15').val())||0;
	    
		if (total<=valorR) {
		troco=0;
		troco=valorR-total;
		$('#change15').val(troco+".00");
		$('#msgvalor15').hide();
		}
			    	
				   
	});

</script>
<script type="text/javascript">
	function fecharVenda(){
		

		$('#msgfpago').show();
			$('#msgvalor').show();

  			$('#fpagamento').change(function (){
			$('#msgfpago').hide();
		    });

		    $('#vRecebido').keyup(function (event){
			$('#msgvalor').hide();
		    });
			

			fpagamento= $('#fpagamento').val();
			vRecebido= $('#vRecebido').val();
			  if(fpagamento == "Selecione"){
					$('#msgfpago').text("Selecione");
					$('#msgvalor').hide();
					formFecharVenda.fpagamento.focus();
					return false;
				}if(vRecebido == ""){
					$('#msgvalor').text("Infome o Valor!");
					 $('#msgfpago').hide();
					formFecharVenda.valorR.focus();
					return false;
				}
			
			
			$('#msgfpago').hide();
			 $('#msgvalor').hide();

				var formData = new FormData(document.getElementById("formFecharVenda"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVenda.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda')[0].reset();
							$("#tabela").load(" #tabela > *");
							$("#refresh").load(" #refresh > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });
					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>


<script type="text/javascript">
	//Script fechar venda Mesa-01
	function fecharVenda1(){
		

		$('#msgfpago1').show();
			$('#msgvalor1').show();

  			$('#fpagamento1').change(function (){
			$('#msgfpago1').hide();
		    });

		    $('#vRecebido1').keyup(function (event){
			$('#msgvalor1').hide();
		    });
			

			fpagamento1= $('#fpagamento1').val();
			vRecebido1= $('#vRecebido1').val();

			  if(fpagamento1 == "Selecione"){
					$('#msgfpago1').text("Selecione");
					$('#msgvalor1').hide();
					formFecharVenda1.fpagamento1.focus();
					return false;
				}if(vRecebido1 == ""){
					$('#msgvalor1').text("Infome o Valor!");
					 $('#msgfpago1').hide();
					formFecharVenda1.vRecebido1.focus();
					return false;
				}
			
			
			$('#msgfpago1').hide();
			 $('#msgvalor1').hide();

				var formData = new FormData(document.getElementById("formFecharVenda1"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa1.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda1')[0].reset();
							$("#tabela1").load(" #tabela1 > *");
							$("#refresh1").load(" #refresh1 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>



<script type="text/javascript">
	//Script fechar venda Mesa-02
	function fecharVenda2(){
		

		$('#msgfpago2').show();
			$('#msgvalor2').show();

  			$('#fpagamento2').change(function (){
			$('#msgfpago2').hide();
		    });

		    $('#vRecebido2').keyup(function (event){
			$('#msgvalor2').hide();
		    });
			

			fpagamento1= $('#fpagamento2').val();
			vRecebido1= $('#vRecebido2').val();

			  if(fpagamento1 == "Selecione"){
					$('#msgfpago2').text("Selecione");
					$('#msgvalor2').hide();
					formFecharVenda2.fpagamento2.focus();
					return false;
				}if(vRecebido1 == ""){
					$('#msgvalor2').text("Infome o Valor!");
					 $('#msgfpago2').hide();
					formFecharVenda2.vRecebido2.focus();
					return false;
				}
			
			
			$('#msgfpago2').hide();
			 $('#msgvalor2').hide();

				var formData = new FormData(document.getElementById("formFecharVenda2"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa2.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda2')[0].reset();
							$("#tabela2").load(" #tabela2 > *");
							$("#refresh2").load(" #refresh2 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>


<script type="text/javascript">
	//Script fechar venda Mesa-03
	function fecharVenda3(){
		

		$('#msgfpago3').show();
			$('#msgvalor3').show();

  			$('#fpagamento3').change(function (){
			$('#msgfpago3').hide();
		    });

		    $('#vRecebido3').keyup(function (event){
			$('#msgvalor3').hide();
		    });
			

			fpagamento= $('#fpagamento3').val();
			vRecebido= $('#vRecebido3').val();

			  if(fpagamento == "Selecione"){
					$('#msgfpago3').text("Selecione");
					$('#msgvalor3').hide();
					formFecharVenda3.fpagamento3.focus();
					return false;
				}if(vRecebido == ""){
					$('#msgvalor3').text("Infome o Valor!");
					 $('#msgfpago3').hide();
					formFecharVenda3.vRecebido3.focus();
					return false;
				}
			
			
			$('#msgfpago3').hide();
			 $('#msgvalor3').hide();

				var formData = new FormData(document.getElementById("formFecharVenda3"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa3.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda3')[0].reset();
							$("#tabela3").load(" #tabela3 > *");
							$("#refresh3").load(" #refresh3 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>


<script type="text/javascript">
	//Script fechar venda Mesa-04
	function fecharVenda4(){
	

		$('#msgfpago4').show();
			$('#msgvalor4').show();

  			$('#fpagamento4').change(function (){
			$('#msgfpago4').hide();
		    });

		    $('#vRecebido4').keyup(function (event){
			$('#msgvalor4').hide();
		    });
			

			fpagamento= $('#fpagamento4').val();
			vRecebido= $('#vRecebido4').val();

			  if(fpagamento == "Selecione"){
					$('#msgfpago4').text("Selecione");
					$('#msgvalor4').hide();
					formFecharVenda4.fpagamento4.focus();
					return false;
				}if(vRecebido == ""){
					$('#msgvalor4').text("Infome o Valor!");
					 $('#msgfpago4').hide();
					formFecharVenda4.vRecebido4.focus();
					return false;
				}
			
			
			$('#msgfpago4').hide();
			 $('#msgvalor4').hide();

			 total=parseFloat($('#totalP4').val())||0;
		     valorR=parseFloat($('#vRecebido4').val())||0;
		     formFecharVenda4.vRecebido4.focus();
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }
             	
				var formData = new FormData(document.getElementById("formFecharVenda4"));
			

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa4.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda4')[0].reset();
							$("#tabela4").load(" #tabela4 > *");
							$("#refresh4").load(" #refresh4 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>


<script type="text/javascript">
	//Script fechar venda Mesa-05
	function fecharVenda5(){
		

		$('#msgfpago5').show();
			$('#msgvalor5').show();

  			$('#fpagamento5').change(function (){
			$('#msgfpago5').hide();
		    });

		    $('#vRecebido5').keyup(function (event){
			$('#msgvalor5').hide();
		    });
			

			fpagamento1= $('#fpagamento5').val();
			vRecebido1= $('#vRecebido5').val();

			  if(fpagamento1 == "Selecione"){
					$('#msgfpago5').text("Selecione");
					$('#msgvalor5').hide();
					formFecharVenda1.fpagamento1.focus();
					return false;
				}if(vRecebido1 == ""){
					$('#msgvalor5').text("Infome o Valor!");
					 $('#msgfpago5').hide();
					formFecharVenda5.vRecebido5.focus();
					return false;
				}
			
			
			$('#msgfpago5').hide();
			 $('#msgvalor5').hide();

			 total=parseFloat($('#totalP5').val())||0;
		     valorR=parseFloat($('#vRecebido5').val())||0;
		     formFecharVenda4.vRecebido4.focus();
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }

				var formData = new FormData(document.getElementById("formFecharVenda5"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa5.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda5')[0].reset();
							$("#tabela5").load(" #tabela6 > *");
							$("#refresh5").load(" #refresh6 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>


<script type="text/javascript">
	//Script fechar venda Mesa-06
	function fecharVenda6(){
		

		$('#msgfpago6').show();
			$('#msgvalor6').show();

  			$('#fpagamento6').change(function (){
			$('#msgfpago6').hide();
		    });

		    $('#vRecebido6').keyup(function (event){
			$('#msgvalor6').hide();
		    });
			

			fpagamento1= $('#fpagamento6').val();
			vRecebido= $('#vRecebido6').val();

			  if(fpagamento1 == "Selecione"){
					$('#msgfpago6').text("Selecione");
					$('#msgvalor6').hide();
					formFecharVenda6.fpagamento6.focus();
					return false;
				}if(vRecebido == ""){
					$('#msgvalor6').text("Infome o Valor!");
					 $('#msgfpago6').hide();
					formFecharVenda1.vRecebido1.focus();
					return false;
				}
			
			
			$('#msgfpago6').hide();
			 $('#msgvalor6').hide();

			 total=parseFloat($('#totalP6').val())||0;
		     valorR=parseFloat($('#vRecebido6').val())||0;
		     formFecharVenda4.vRecebido4.focus();
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }

				var formData = new FormData(document.getElementById("formFecharVenda6"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa6.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda6')[0].reset();
							$("#tabela6").load(" #tabela6 > *");
							$("#refresh6").load(" #refresh6 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
			
					alert("Não possui lista de Vendas");
					
					
				}else{
					alert(r)
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>


<script type="text/javascript">
	//Script fechar venda Mesa-07
	function fecharVenda7(){
		

		$('#msgfpago7').show();
			$('#msgvalor7').show();

  			$('#fpagamento7').change(function (){
			$('#msgfpago7').hide();
		    });

		    $('#vRecebido7').keyup(function (event){
			$('#msgvalor7').hide();
		    });
			

			fpagamento1= $('#fpagamento7').val();
			vRecebido1= $('#vRecebido7').val();

			  if(fpagamento1 == "Selecione"){
					$('#msgfpago7').text("Selecione");
					$('#msgvalor7').hide();
					formFecharVenda1.fpagamento1.focus();
					return false;
				}if(vRecebido1 == ""){
					$('#msgvalor7').text("Infome o Valor!");
					 $('#msgfpago7').hide();
					formFecharVenda1.vRecebido1.focus();
					return false;
				}
			
			
			$('#msgfpago7').hide();
			$('#msgvalor7').hide();

			 total=parseFloat($('#totalP7').val())||0;
		     valorR=parseFloat($('#vRecebido7').val())||0;
		     formFecharVenda4.vRecebido4.focus();
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }

				var formData = new FormData(document.getElementById("formFecharVenda7"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa7.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda7')[0].reset();
							$("#tabela7").load(" #tabela7 > *");
							$("#refresh7").load(" #refresh7 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>

<script type="text/javascript">
	//Script fechar venda Mesa-08
	function fecharVenda8(){
		

		$('#msgfpago8').show();
			$('#msgvalor8').show();

  			$('#fpagamento8').change(function (){
			$('#msgfpago8').hide();
		    });

		    $('#vRecebido8').keyup(function (event){
			$('#msgvalor8').hide();
		    });
			

			fpagamento= $('#fpagamento8').val();
			vRecebido= $('#vRecebido8').val();

			  if(fpagamento == "Selecione"){
					$('#msgfpago8').text("Selecione");
					$('#msgvalor8').hide();
					formFecharVenda1.fpagamento1.focus();
					return false;
				}if(vRecebido == ""){
					$('#msgvalor8').text("Infome o Valor!");
					 $('#msgfpago8').hide();
					formFecharVenda8.vRecebido8.focus();
					return false;
				}
			
			
			$('#msgfpago8').hide();
			$('#msgvalor8').hide();

			 total=parseFloat($('#totalP8').val())||0;
		     valorR=parseFloat($('#vRecebido8').val())||0;
		     formFecharVenda8.vRecebido8.focus();
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }

				var formData = new FormData(document.getElementById("formFecharVenda8"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa8.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
								//alert(r)
								//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda8')[0].reset();
							$("#tabela8").load(" #tabela8 > *");
							$("#refresh8").load(" #refresh8 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>


<script type="text/javascript">
	//Script fechar venda Mesa-09
	function fecharVenda9(){
		
 
		$('#msgfpago9').show();
			$('#msgvalor9').show();

  			$('#fpagamento9').change(function (){
			$('#msgfpago9').hide();
		    });

		    $('#vRecebido9').keyup(function (event){
			$('#msgvalor9').hide();
		    });
			

			fpagamento= $('#fpagamento9').val();
			vRecebido= $('#vRecebido9').val();

			  if(fpagamento == "Selecione"){
					$('#msgfpago9').text("Selecione");
					$('#msgvalor9').hide();
					formFecharVenda9.fpagamento9.focus();
					return false;
				}if(vRecebido == ""){
					$('#msgvalor9').text("Infome o Valor!");
					 $('#msgfpago9').hide();
					formFecharVenda9.vRecebido9.focus();
					return false;
				}
			
			
			$('#msgfpago9').hide();
			$('#msgvalor9').hide();

			 total=parseFloat($('#totalP9').val())||0;
		     valorR=parseFloat($('#vRecebido9').val())||0;

		     formFecharVenda9.vRecebido9.focus();
		     
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }
    
				var formData = new FormData(document.getElementById("formFecharVenda9"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa9.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda9')[0].reset();
							$("#tabela9").load(" #tabela9 > *");
							$("#refresh9").load(" #refresh9 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>




<script type="text/javascript">
	//Script fechar venda Mesa-010
	function fecharVenda10(){
		

		$('#msgfpago10').show();
			$('#msgvalor10').show();

  			$('#fpagamento10').change(function (){
			$('#msgfpago10').hide();
		    });

		    $('#vRecebido10').keyup(function (event){
			$('#msgvalor10').hide();
		    });
			

			fpagamento1= $('#fpagamento10').val();
			vRecebido1= $('#vRecebido10').val();

			  if(fpagamento1 == "Selecione"){
					$('#msgfpago10').text("Selecione");
					$('#msgvalor10').hide();
					formFecharVenda10.fpagamento10.focus();
					return false;
				}if(vRecebido1 == ""){
					$('#msgvalor10').text("Infome o Valor!");
					 $('#msgfpago10').hide();
					formFecharVenda10.vRecebido10.focus();
					return false;
				}
			
			
			$('#msgfpago10').hide();
			$('#msgvalor10').hide();

			 total=parseFloat($('#totalP10').val())||0;
		     valorR=parseFloat($('#vRecebido10').val())||0;
		     formFecharVenda10.vRecebido10.focus();
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }

				var formData = new FormData(document.getElementById("formFecharVenda10"));
				

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa10.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alert(r);
								if(r > 0){
							$('#formFecharVenda10')[0].reset();
							$("#tabela10").load(" #tabela10 > *");
							$("#refresh10").load(" #refresh10 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>



<script type="text/javascript">
	//Script fechar venda Mesa-012
	function fecharVenda12(){
		

		$('#msgfpago12').show();
			$('#msgvalor12').show();

  			$('#fpagamento12').change(function (){
			$('#msgfpago12').hide();
		    });

		    $('#vRecebido12').keyup(function (event){
			$('#msgvalor12').hide();
		    });
			

			fpagamento1= $('#fpagamento12').val();
			vRecebido1= $('#vRecebido12').val();

			  if(fpagamento1 == "Selecione"){
					$('#msgfpago12').text("Selecione");
					$('#msgvalor12').hide();
					formFecharVenda1.fpagamento1.focus();
					return false;
				}if(vRecebido1 == ""){
					$('#msgvalor12').text("Infome o Valor!");
					 $('#msgfpago12').hide();
					formFecharVenda1.vRecebido1.focus();
					return false;
				}
			
			
			$('#msgfpago12').hide();
			$('#msgvalor12').hide();

			 total=parseFloat($('#totalP12').val())||0;
		     valorR=parseFloat($('#vRecebido12').val())||0;
		     formFecharVenda4.vRecebido4.focus();
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }

				var formData = new FormData(document.getElementById("formFecharVenda12"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa12.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda12')[0].reset();
							$("#tabela12").load(" #tabela12 > *");
							$("#refresh12").load(" #refresh12 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>



<script type="text/javascript">
	//Script fechar venda Mesa-013
	function fecharVenda13(){
		

		$('#msgfpago13').show();
			$('#msgvalor13').show();

  			$('#fpagamento13').change(function (){
			$('#msgfpago13').hide();
		    });

		    $('#vRecebido13').keyup(function (event){
			$('#msgvalor13').hide();
		    });
			

			fpagamento1= $('#fpagamento13').val();
			vRecebido1= $('#vRecebido13').val();

			  if(fpagamento1 == "Selecione"){
					$('#msgfpago13').text("Selecione");
					$('#msgvalor13').hide();
					formFecharVenda13.fpagamento13.focus();
					return false;
				}if(vRecebido1 == ""){
					$('#msgvalor13').text("Infome o Valor!");
					 $('#msgfpago13').hide();
					formFecharVenda13.vRecebido13.focus();
					return false;
				}
			
			
			$('#msgfpago13').hide();
			 $('#msgvalor13').hide();

			 total=parseFloat($('#totalP13').val())||0;
		     valorR=parseFloat($('#vRecebido13').val())||0;
		     formFecharVenda4.vRecebido4.focus();
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }

				var formData = new FormData(document.getElementById("formFecharVenda13"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa13.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda13')[0].reset();
							$("#tabela13").load(" #tabela13 > *");
							$("#refresh13").load(" #refresh13 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>



<script type="text/javascript">
	//Script fechar venda Mesa-014
	function fecharVenda14(){
		

		$('#msgfpago14').show();
			$('#msgvalor14').show();

  			$('#fpagamento14').change(function (){
			$('#msgfpago14').hide();
		    });

		    $('#vRecebido14').keyup(function (event){
			$('#msgvalor14').hide();
		    });
			

			fpagamento1= $('#fpagamento14').val();
			vRecebido1= $('#vRecebido14').val();

			  if(fpagamento1 == "Selecione"){
					$('#msgfpago14').text("Selecione");
					$('#msgvalor14').hide();
					formFecharVenda14.fpagamento14.focus();
					return false;
				}if(vRecebido1 == ""){
					$('#msgvalor14').text("Infome o Valor!");
					 $('#msgfpago14').hide();
					formFecharVenda1.vRecebido1.focus();
					return false;
				}
			
			
			$('#msgfpago14').hide();
			 $('#msgvalor14').hide();

			 total=parseFloat($('#totalP14').val())||0;
		     valorR=parseFloat($('#vRecebido14').val())||0;
		     formFecharVenda4.vRecebido4.focus();
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }

				var formData = new FormData(document.getElementById("formFecharVenda14"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa14.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda14')[0].reset();
							$("#tabela14").load(" #tabela14 > *");
							$("#refresh14").load(" #refresh14 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>



<script type="text/javascript">
	//Script fechar venda Mesa-015
	function fecharVenda15(){
		

		$('#msgfpago15').show();
			$('#msgvalor15').show();

  			$('#fpagamento15').change(function (){
			$('#msgfpago15').hide();
		    });

		    $('#vRecebido15').keyup(function (event){
			$('#msgvalor15').hide();
		    });
			

			fpagamento1= $('#fpagamento15').val();
			vRecebido1= $('#vRecebido15').val();

			  if(fpagamento1 == "Selecione"){
					$('#msgfpago15').text("Selecione");
					$('#msgvalor15').hide();
					formFecharVenda15.fpagamento15.focus();
					return false;
				}if(vRecebido1 == ""){
					$('#msgvalor15').text("Infome o Valor!");
					 $('#msgfpago15').hide();
					formFecharVenda1.vRecebido1.focus();
					return false;
				}
			
			
			$('#msgfpago15').hide();
			$('#msgvalor15').hide();

			 total=parseFloat($('#totalP15').val())||0;
		     valorR=parseFloat($('#vRecebido15').val())||0;
		     formFecharVenda4.vRecebido4.focus();
		     if (valorR<total) {
		     	 Swal.fire({
                  position: "top-end",
                  icon: "info",
                  showConfirmButton: true,
                  text:"Valor recebido nao pode inferior ao Total a pagar!",
                 
                });

		     	 return false;
		     }

				var formData = new FormData(document.getElementById("formFecharVenda15"));
				//alert(formData)

							$.ajax({
								url:"../painel/procedimentos/fecharVendaMesa15.php",
								type: "post",
								dataType: "html",
								data: formData,
								cache: false,
								contentType: false,
								processData: false,

								success:function(r){
						
								 	//alertify.alert(r);
								if(r > 0){
							$('#formFecharVenda15')[0].reset();
							$("#tabela15").load(" #tabela15 > *");
							$("#refresh15").load(" #refresh15 > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });


					
				}else if(r==0){
					alert("Não possui lista de Vendas");
					alertify.alert('Ready!');
					
				}else{
					alertify.error("Venda não efetuada");
						
				}
			
					}
				});
		    }
		     	
   
</script>














	
