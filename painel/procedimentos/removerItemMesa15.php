<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa15'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa15']);
	unset($_SESSION['tabelaComprasTempMesa15']);
	$_SESSION['tabelaComprasTempMesa15']=$dados;


	

 ?>