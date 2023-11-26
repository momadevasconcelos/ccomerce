<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa10'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa10']);
	unset($_SESSION['tabelaComprasTempMesa10']);
	$_SESSION['tabelaComprasTempMesa10']=$dados;


	

 ?>