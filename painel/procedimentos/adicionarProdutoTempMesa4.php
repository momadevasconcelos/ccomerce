<?php 
	session_start();
	require_once "../../conexao.php";

	$nomeCliente=$_POST['cliente4'];
	$idproduto=$_POST['produtoVenda4'];
	$quantidade=$_POST['estoque4'];
	$quantV=$_POST['qtd4'];
	$preco=$_POST['preco4'];
	$mesa=$_POST['mesa4'];
	$status=$_POST['status4'];

	$query = $pdo->prepare("SELECT nome FROM produtos where id=:idproduto");
    $query->bindValue(":idproduto", "$idproduto");
	$query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $total_reg = @count($res);
    $nomeproduto=$res[0]['nome'];

	

	if ($status==1) {

		if ($quantidade<$quantV) {
		header("location:vendas.php");
	    
	
    }else{

	$produto=$nomeproduto."||".
				$preco."||".
				$quantidade."||".
				$quantV."||".
				$quantV * $preco."||".
				$idproduto."||".
				$mesa."||".
				$nomeCliente."||".
				$status;
	 $_SESSION['tabelaComprasTempMesa4'][]=$produto;


		$quantNova = $quantidade - $quantV;

		$sql = "UPDATE produtos SET estoque=? WHERE id=?";
		$pdo->prepare($sql)->execute([$quantNova,$idproduto]);

	}
	
	}else if ($status==0) {
		$produto=$nomeproduto."||".
				$preco."||".
				$quantidade."||".
				$quantV."||".
				$quantV * $preco."||".
				$idproduto."||".
				$mesa."||".
				$nomeCliente."||".
				$status;
	 $_SESSION['tabelaComprasTempMesa4'][]=$produto;


		$sql = "UPDATE produtos SET estoque=? WHERE id=?";
		$pdo->prepare($sql)->execute([$quantNova,$idproduto]);
		
	}

 ?>