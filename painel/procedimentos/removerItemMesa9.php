<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa9'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa9']);
	unset($_SESSION['tabelaComprasTempMesa9']);
	$_SESSION['tabelaComprasTempMesa9']=$dados;


	

 ?>