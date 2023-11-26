<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa8'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa8']);
	unset($_SESSION['tabelaComprasTempMesa8']);
	$_SESSION['tabelaComprasTempMesa8']=$dados;


	

 ?>