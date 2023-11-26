<?php 

	
	session_start();
	$index=$_POST['i'];
	unset($_SESSION['tabelaComprasTemp'][$index]);
	$dados=array_values($_SESSION['tabelaComprasTemp']);
	unset($_SESSION['tabelaComprasTemp']);
	$_SESSION['tabelaComprasTemp']=$dados;


	

 ?>