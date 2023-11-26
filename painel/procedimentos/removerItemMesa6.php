<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa6'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa6']);
	unset($_SESSION['tabelaComprasTempMesa6']);
	$_SESSION['tabelaComprasTempMesa6']=$dados;


	

 ?>