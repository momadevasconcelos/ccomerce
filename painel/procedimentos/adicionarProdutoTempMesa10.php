<?php 
	session_start();
	require_once "../../conexao.php";

	$nomeCliente=$_POST['cliente10'];
	$idproduto=$_POST['produtoVenda10'];
	$quantidade=$_POST['estoque10'];
	$quantV=$_POST['qtd10'];
	$preco=$_POST['preco10'];
	$mesa=$_POST['mesa10'];
	$status=$_POST['status10'];

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
	 $_SESSION['tabelaComprasTempMesa10'][]=$produto;


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
	 $_SESSION['tabelaComprasTempMesa10'][]=$produto;


		$sql = "UPDATE produtos SET estoque=? WHERE id=?";
		$pdo->prepare($sql)->execute([$quantNova,$idproduto]);
		
	}

 ?>