<?php 
require_once('../conexao.php');


$nome = $_POST['nome_sistema'];
$email = $_POST['email_sistema'];
$whatsapp = $_POST['whatsapp_sistema'];
$fixo = $_POST['telefone_fixo_sistema'];
$endereco = $_POST['endereco_sistema'];
$nuit=$_POST['nuit'];




$query = $pdo->prepare("UPDATE config SET nome = :nome, email = :email, telefone_whatsapp = :whatsapp, telefone_fixo = :telefone_fixo, endereco = :endereco,NUIT=:nuit ");

$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":whatsapp", "$whatsapp");
$query->bindValue(":telefone_fixo", "$fixo");
$query->bindValue(":endereco", "$endereco");
$query->bindValue(":nuit", "$nuit");
$query->execute();

echo 'Editado com Sucesso';
 ?>