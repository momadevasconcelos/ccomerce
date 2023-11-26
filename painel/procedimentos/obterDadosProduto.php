<?php
	require_once "../../conexao.php";

	$idproduto=$_POST['idproduto'];

    $query = $pdo->prepare("SELECT * FROM produtos where id=:idproduto");
    $query->bindValue(":idproduto", "$idproduto");
	$query->execute();
       $res = $query->fetchAll(PDO::FETCH_ASSOC);
       $total_reg = @count($res);
			if($total_reg > 0){
			
			$dados=array(
			'nome' => $res[0]['nome'],
			'status' => $res[0]['status'],
			'quantidade' => $res[0]['estoque'],
			'url' =>$res[0]['foto'],
			'preco' => $res[0]['valor_venda'],

				);		

			echo json_encode($dados);					
			}
			
										
	

 ?>