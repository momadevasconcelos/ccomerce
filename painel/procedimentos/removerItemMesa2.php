<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa2'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa2']);
	unset($_SESSION['tabelaComprasTempMesa2']);
	$_SESSION['tabelaComprasTempMesa2']=$dados;


	

 ?>