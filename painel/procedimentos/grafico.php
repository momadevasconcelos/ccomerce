<?php 
require_once "../../conexao.php";


 $query = $pdo->query("SELECT MONTHNAME(dataCompra) mes,   SUM(total_Venda) total FROM vendas GROUP BY MONTHNAME(dataCompra) ORDER BY MONTHNAME(dataCompra) desc");
                        $results = $query->fetchAll(PDO::FETCH_ASSOC);
                        $totalDadsos= @count($res);

                         
                    echo json_encode($results);






 ?>