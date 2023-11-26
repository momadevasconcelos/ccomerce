<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTempMesa1'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTempMesa1']);
	unset($_SESSION['tabelaComprasTempMesa1']);
	$_SESSION['tabelaComprasTempMesa1']=$dados;


	

 ?>