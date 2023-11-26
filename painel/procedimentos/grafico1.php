<?php 
require_once "../../conexao.php";


$query = $pdo->query("SELECT DAYNAME( dataCompra ) as dia , SUM(total_venda) as total
   FROM vendas WHERE dataCompra >= DATE_SUB(CURRENT_DATE, INTERVAL DAYOFWEEK(CURRENT_DATE)-1 DAY)
   GROUP BY dia
   ORDER BY dia");
                        $results = $query->fetchAll(PDO::FETCH_ASSOC);
                        $totalDadsos= @count($res);

                         
                    echo json_encode($results);






 ?>