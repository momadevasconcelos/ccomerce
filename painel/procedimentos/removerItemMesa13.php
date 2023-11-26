<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa13'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa13']);
	unset($_SESSION['tabelaComprasTempMesa13']);
	$_SESSION['tabelaComprasTempMesa13']=$dados;


	

 ?>