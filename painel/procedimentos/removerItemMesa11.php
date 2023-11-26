<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa11'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa11']);
	unset($_SESSION['tabelaComprasTempMesa11']);
	$_SESSION['tabelaComprasTempMesa11']=$dados;


	

 ?>