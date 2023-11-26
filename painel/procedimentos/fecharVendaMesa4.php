<?php 
	session_start();
	require_once "../../conexao.php";
	
	

	 $valor=$_POST['vRecebido4'];
	 $idPago=$_POST['fpagamento4'];
	 $troco=$_POST['change4'];

	 $id=0;
	


	

	if(count($_SESSION['tabelaComprasTempMesa4'])==0){
		echo 0;
	}else{
    

    
       $query = $pdo->prepare("SELECT id from vendas group by id desc");
	   $query->execute();
       $res = $query->fetchAll(PDO::FETCH_ASSOC);
       $total_reg = @count($res);
			
		if(isset($res[0]['id'])){
		$id=$res[0]['id'] + 1;
		}else{
			$id=1;
		}


		
        $data=date('Y-m-d');
		$hora=date('H:i:s');
		$idvenda=$id;
		$dados=$_SESSION['tabelaComprasTempMesa4'];
		$idUser=$_SESSION['id'];
		$r=0;

    
        
        
		for ($i=0; $i < count($dados) ; $i++) { 
			$d=explode("||", $dados[$i]);
			/*self::updateCaixa($param[4],$d[7]);*/
			$sql = "INSERT INTO vendas (id,idPago,mesa,id_cliente,id_produto,id_usuario,preco,	quantidade,total_venda,pago,troco,dataCompra,hora)
			        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
           $r=$r+ $pdo->prepare($sql)->execute([$idvenda, $idPago, $d[6],$d[7],$d[5],$idUser,$d[1],$d[3],$d[4],$valor,$troco,$data,$hora]);


        echo $r;
		unset($_SESSION['tabelaComprasTempMesa4']);
		
	}
		
	}
	
 ?>