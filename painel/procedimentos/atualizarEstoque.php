<?php 
	require_once "../../conexao.php";


	$dados=$_POST['id'];

	$idproduto = $dados;
	$quantidade = $_POST['estoque'];
	$status=$_POST['status'];

	if ($status==1) {
		$sql= "UPDATE produtos SET estoque=?  WHERE id= ?";
	$pdo->prepare($sql)->execute([$quantidade,$idproduto]);
	}
		
 ?>