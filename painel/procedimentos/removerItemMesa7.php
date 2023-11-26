<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa7'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa7']);
	unset($_SESSION['tabelaComprasTempMesa7']);
	$_SESSION['tabelaComprasTempMesa7']=$dados;


	

 ?>