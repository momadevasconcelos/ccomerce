<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa3'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa3']);
	unset($_SESSION['tabelaComprasTempMesa3']);
	$_SESSION['tabelaComprasTempMesa3']=$dados;


	

 ?>