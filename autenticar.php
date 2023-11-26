<?php 
@session_start();
require_once("conexao.php");


$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);

$query = $pdo->prepare("SELECT * from usuarios where (email = :email) and senha_crip = :senha");
$query->bindValue(":email", "$email");
$query->bindValue(":senha", "$senha_crip");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$total_reg = @count($res);
$data = date('d-m-Y');
$dataLicensa="14-09-2024";

$r=0;
if (strtotime($data)>strtotime($dataLicensa)) {
    $r=4;
			
		}else{
	if($total_reg > 0){
	$ativo = $res[0]['ativo'];


	if($ativo == 'Sim'){

		$_SESSION['id'] = $res[0]['id'];
		$_SESSION['nivel'] = $res[0]['nivel'];
		$_SESSION['nome'] = $res[0]['nome'];
	
		//ir para o painel
		$r=1;
	}else{
	 $r=2;
		
	}
	
}else{
	$r=3;
}
}
echo json_encode($r);

 ?>