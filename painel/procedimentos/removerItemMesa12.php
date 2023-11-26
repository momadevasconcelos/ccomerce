<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa12'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa12']);
	unset($_SESSION['tabelaComprasTempMesa12']);
	$_SESSION['tabelaComprasTempMesa12']=$dados;


	

 ?>