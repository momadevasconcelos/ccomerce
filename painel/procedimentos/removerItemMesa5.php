<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa5'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa5']);
	unset($_SESSION['tabelaComprasTempMesa5']);
	$_SESSION['tabelaComprasTempMesa5']=$dados;


	

 ?>