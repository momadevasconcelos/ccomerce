<?php 
@session_start();
require_once("verificar.php");
require_once("../conexao.php");



//verificar se ele tem a permissão de estar nessa página
if(@$home == 'ocultar'){
    echo "<script>window.location='../index.php'</script>";
    exit();
}


$data=date("Y-m-d");


$query = $pdo->query("SELECT * FROM usuarios ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_clientes = @count($res);

$query = $pdo->query("SELECT * FROM pagar where data_venc = curDate() and pago != 'Sim' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_pagar_hoje = @count($res);

$query = $pdo->query(" SELECT f.forma as forma, SUM( ve.total_venda) as total FROM `vendas` as ve INNER JOIN forma_pagamento as f on ve.idPago=f.id  WHERE ve.dataCompra='$data' GROUP BY ve.idPago");

$contas_hoje = @count($dados);
$total=0;

foreach ($res = $query->fetchAll(PDO::FETCH_ASSOC) as $key) {
    $total=$total + $key['total'];
}


 
$query = $pdo->query("SELECT * FROM produtos where status='1'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
$estoque_baixo = 0;
if($total_reg > 0){
    for($i=0; $i < $total_reg; $i++){
    foreach ($res[$i] as $key => $value){}
        $estoque = $res[$i]['estoque'];
        $nivel_estoque = $res[$i]['nivel_estoque'];

        if($nivel_estoque >= $estoque){
            $estoque_baixo += 1;
        }
    }


    }


       

         

                    
 ?>

<div class="main-page">


    <div class="col_3">

        <a href="index.php?pag=usuarios">
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-users icon-rounded"></i>
                <div class="stats">
                        <h5><strong><?php echo $total_clientes ?></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Total de Usuarios</span></div>
            </div>
        </div>
        </a>

    

         <a href="index.php?pag=vendas">
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-money user1 icon-rounded"></i>
                <div class="stats">
                        <h5><strong><?php echo $total .",00"?></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Vendas do dia</span></div>
            </div>
        </div>
        </a>


        <a href="index.php?pag=mapa_vendas">
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-edit dollar2 icon-rounded"></i>
               <div class="stats">
                        <h5><strong><br></big></strong></h5>

                    </div>
                    <hr style="margin-top:10px; border: none;">
                    <div align="center"><span>Mapa de Vendas</span></div>
            </div>
        </div>
        </a>

         <a href="index.php?pag=estoque">
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                <div class="stats">
                        <h5><strong><?php echo $estoque_baixo ?></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Prod. Estock Baixo</span></div>
            </div>
        </div>
    </a>



        <div class="col-md-3 widget">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-usd dollar2 icon-rounded"></i>
                <div class="stats">
                        <h5><strong><?php echo $total .",00"?></strong></h5>

                    </div>
                    <hr style="margin-top:10px">
                    <div align="center"><span>Saldo do Dia</span></div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

 


    <div class="row" style=" margin-right: 50px ; margin-top: 60px" >
      <div class="col-md-12 text-center">
        <h3>Demostrativo Financeiro</h3>
        <p>weekly and monthly sale</p>
      </div>
      <div class="col-md-4 col-md-offset-4">
        <hr />
      </div>
      <div class="clearfix"></div>
      <div class="col-md-6">
        <div id="chart_div1" class="chart"></div>
      </div>
      <div class="col-md-6">
        <div id="chart_div2" class="chart"></div>
      </div>
    </div>






    </div>


    
    <!-- for amcharts js -->

     
    <script src="js/amcharts.js"></script>
    <script src="js/serial.js"></script>
    <script src="js/export.min.js"></script>
    <link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
    <script src="js/light.js"></script>
    <!-- for amcharts js -->

    <script  src="js/index1.js"></script>
    





<script type="text/javascript">
    $(document).ready(function() {

        $.ajax({
            url : "../painel/procedimentos/grafico.php",
            dataType : "JSON",
            success : function(result) {
                google.charts.load('current', {
                    'packages' : [ 'corechart' ]
                });
                google.charts.setOnLoadCallback(function() {
                    drawChart(result);
                });
            }
        });

        function drawChart(result) {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Name');
            data.addColumn('number', 'MZN');
            var dataArray = [];
            $.each(result, function(i, obj) {
                dataArray.push([ obj.mes, parseInt(obj.total) ]);
            });

            data.addRows(dataArray);

            var piechart_options = {
                title : 'Demostrativo Financeiro Semanal'
               
               
            };
            var piechart = new google.visualization.PieChart(document
                    .getElementById('chart_div2'));
            piechart.draw(data, piechart_options);

            
        }

    });
</script>


<script type="text/javascript">

    $(document).ready(function() {
     google.charts.load("current", {packages: ["corechart", "timeline"]});
     
        $.ajax({
             url : "../painel/procedimentos/grafico1.php",
            dataType : "JSON",
            success : function(result) {
                google.charts.load('current', {
                    'packages' : [ 'corechart' ]
                });
                google.charts.setOnLoadCallback(function() {
                    drawChart(result);
                });
            }
        });

        function drawChart(res) {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'semana');
            data.addColumn('number', 'MZN');
            var dataArray = [];
            $.each(res, function(i, obj) {
                dataArray.push([ obj.dia, parseInt(obj.total) ]);
            });

            data.addRows(dataArray);

            var piechart_options = {
                title : 'Demostrativo Financeiro Semanal'
                
               
            };
            var piechart = new google.visualization.ColumnChart(document
                    .getElementById('chart_div1'));
            piechart.draw(data, piechart_options);

            
        }

    });
</script>













    
