<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa4'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa4']);
	unset($_SESSION['tabelaComprasTempMesa4']);
	$_SESSION['tabelaComprasTempMesa4']=$dados;


	

 ?>