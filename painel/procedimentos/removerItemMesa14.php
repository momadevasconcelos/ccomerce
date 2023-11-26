<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa14'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa14']);
	unset($_SESSION['tabelaComprasTempMesa14']);
	$_SESSION['tabelaComprasTempMesa14']=$dados;


	

 ?>