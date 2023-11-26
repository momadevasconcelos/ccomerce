<?php 
	session_start();
	require_once "../../conexao.php";

	$nomeCliente=$_POST['cliente15'];
	$idproduto=$_POST['produtoVenda15'];
	$quantidade=$_POST['estoque15'];
	$quantV=$_POST['qtd15'];
	$preco=$_POST['preco15'];
	$mesa=$_POST['mesa15'];
	$status=$_POST['status15'];

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
	 $_SESSION['tabelaComprasTempMesa15'][]=$produto;


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
	 $_SESSION['tabelaComprasTempMesa15'][]=$produto;


		$sql = "UPDATE produtos SET estoque=? WHERE id=?";
		$pdo->prepare($sql)->execute([$quantNova,$idproduto]);
		
	}

 ?>