<?php 
	session_start();
	require_once "../../conexao.php";

	$nomeCliente=$_POST['cliente2'];
	$idproduto=$_POST['produtoVenda2'];
	$quantidade=$_POST['estoque2'];
	$quantV=$_POST['qtd2'];
	$preco=$_POST['preco2'];
	$mesa=$_POST['mesa2'];
	$status=$_POST['status2'];

	$query = $pdo->prepare("SELECT nome FROM produtos where id=:idproduto");
    $query->bindValue(":idproduto", "$idproduto");
	$query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $total_reg = @count($res);
    $nomeproduto=$res[0]['nome'];

	echo $qtd2;

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
	 $_SESSION['tabelaComprasTempMesa2'][]=$produto;


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
	 $_SESSION['tabelaComprasTempMesa2'][]=$produto;


		$sql = "UPDATE produtos SET estoque=? WHERE id=?";
		$pdo->prepare($sql)->execute([$quantNova,$idproduto]);
		
	}

 ?>