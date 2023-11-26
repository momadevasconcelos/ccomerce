<?php 
	require_once "../../conexao.php";
	
    $idvenda=$_GET['idvenda'];
	

	$query = $pdo->prepare("SELECT ve.id as id , ve.dataCompra as data, ve.id_cliente as cliente, pro.nome as nomeP, pro.valor_venda as preco, ve.mesa, pag.forma as pago from vendas as ve inner join produtos as pro on ve.id_produto=pro.id INNER JOIN forma_pagamento as pag ON ve.idPago=pag.id  where ve.id=:id");
    $query->bindValue(":id", "$idvenda");
	$query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $total_reg = @count($res);
    $data=$res[0]['data'];
    $idComprovante=$res[0]['id'];
    $idcliente=$res[0]['cliente'];
    $fPago=$res[0]['pago'];

    $query=$pdo->prepare("SELECT *FROM config");
    $query->execute();
    $dados=$query->fetchAll(PDO::FETCH_ASSOC);
    $entidade=$dados[0]['nome'];
    $endereco=$dados[0]['endereco'];
    $telefone=$dados[0]['telefone_fixo'];
    $nuit=$dados[0]['NUIT']


 ?>	


 	<style type="text/css">
		
@page {
            margin-top: 0.3em;
            margin-left: 1.5em;
            margin-right: .5em;
            margin-bottom: 2em;
        }
    body{
    	font-size: small;

    }

    #right{
    	text-align: right;
    }
	</style>

 
 		<center><h4><?=$entidade?></h4></center>
 		<p> 
 			Nampula Moçambique 
 			<br>Address:<?=$endereco?>
 			<br>Tel Fixo Entidade: <?=$telefone?>
 			<br><b>NUIT:</b> <?=$nuit?>
 		</p>
 		
 		<p> 
 			</b>
 			 Cliente: <?php if ($idcliente==0) {
 			 	echo "Anonimo";
 			 } ?>
 
 			<br>Comprovante N<sup>o</sup>.: <?php echo $idComprovante ?>
 			<br>Forma de Pag.: <?php echo $fPago?>
 			<br>Data: 
 			<?php echo $date = date('d-m-Y H:i:s', time()); ?>

 		</p>

 		
 		
 		<table style="border-collapse: collapse;" border="0" width="145px">

 			<tr>
 				<td style="width: 100px">Produto</td>
 				<td style="width: 50px">Preço</td>
 				<td style="width: 50px;text-align: right;">Qty</td>
 			</tr>
 			<tr><td colspan="3"><sup>______________________________________</sup></td></tr>
 			<?php 

 			$query = $pdo->prepare("SELECT pro.nome as nome,pro.valor_venda as preco,ve.quantidade as qtd ,ve.total_venda as total,ve.pago as pago,ve.troco as troco from vendas  as ve inner join produtos as pro on ve.id_produto=pro.id where ve.id=:id");
		    $query->bindValue(":id", "$idvenda");
			$query->execute();
		        $total=0;
				foreach ($res = $query->fetchAll(PDO::FETCH_ASSOC) as $key) {
                    
 			 ?>
 			<tr>
 				<td><?php echo $key['nome']; ?></td>
 				<td><?php echo $key['preco']; ?></td>
 				<td style="text-align: right;"><?php echo $key['qtd']; ?></td>
 			</tr>
 			<?php
 				$total=$total + $key['total'];
 				$valor= $key['pago'];
 				$troco= $key['troco'];
 				
 				} 
 			 ?>
 			 <tr><td colspan="3"><sup>______________________________________</sup></td></tr>
 			 
 		</table>
 		<table>
 			<tr>
 				<td></td>
 				<td></td>
 				<td></td>
 				<td></td>
 				
 				
 			</tr>
 			<tr>
 				<td><b>SUBTOTAL:</b></td>
 				<td><?php echo $total.",00" ?></td>
 				<td><b>DESC..:</b></td>
 				<td id="right">0.00</td>
 				
 			</tr>
 			<tr>
 				<td><b>TOTAL:</b></td>
 				<td id="right"><?php echo $total.",00" ?></td>
 				<td></td>
 				<td></td>
 				
 			</tr>
 			<tr>
 				<td><b>PAGO:</b></td>
 				<td><?php echo $valor.",00" ?></td>
 				<td><b>TROCO:</b></td>
 				<td id="right"><?php echo $troco?></td>
 			</tr>

 		</table>
 		 <p>Agradecemos por escolher <?=$entidade?>. Volte sempre! </p>


 		