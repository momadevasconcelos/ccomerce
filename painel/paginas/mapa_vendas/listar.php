<?php 
require_once("../../../conexao.php");
$tabela = 'vendas';
$data_hoje = date('Y-m-d');

$query = $pdo->query("SELECT ve.id as id, p.nome as nome,p.foto as foto ,sum(ve.quantidade) as qty, sum(ve.total_venda) as total, ve.dataCompra as data, p.valor_venda as valor from vendas as ve inner join produtos as p on p.id=ve.id_produto WHERE ve.dataCompra='$data_hoje' GROUP BY p.nome");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){

echo <<<HTML

	
<div style="margin-bottom: 20px"><h4><strong> Mapa de Vendas</strong></h4> <hr style="width: 50%; float:left;"></div>
	<br>
	<small>
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 

	<th>Id | Foto | Produto</th>	
	<th >Data</th> 		
	<th class="esc">Quantidade</th> 
	<th class="esc">Preco</th>
	<th class="esc">Total</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>	
HTML;
$totalR=0;

for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
	$id = $res[$i]['id'];
	$data = $res[$i]['data'];	
	$produto = $res[$i]['nome'];
	$foto=$res[$i]['foto'];
	$quantidade = $res[$i]['qty'];
	$preco = $res[$i]['valor'];
	$total = $res[$i]['total'];
	$totalR=$totalR + $res[$i]['total'];

	$total1 = number_format($total, 2, ',', '.');
	$preco1 = number_format($preco, 2, ',', '.');

	

		


echo <<<HTML
<tr >
<td>
{$id } 
<img src="img/produtos/{$foto}" width="27px" class="mr-2">
{$produto}
</td>

<td >{$data}</td>
<td class="esc">{$quantidade}</td>
<td class="esc">{$preco1}</td>
<td class="esc">{$total1}</td>
<td>

<big><a href="#" onclick="mostrar('{$id}', '{$data}', '{$produto}', '{$foto}',  '{$quantidade}', '{$preco}', '{$total}', '{$produto}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>	
</td>
</tr>
HTML;

}

echo <<<HTML
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>
</table>
<br>	
<div align="right">Total das vendas: <span class="verde">MZN {$totalR},00</span> </div>

</small>
HTML;


}else{
	echo '<small>Não possui nenhum registro Cadastrado!</small>';
}

?>

<script type="text/javascript">
	$(document).ready( function () {
    $('#tabela').DataTable({
    		"ordering": false,
			"stateSave": true,
			searching: false,
			bLengthChange: false
    	});
    $('#tabela_filter label input').focus();
} );
</script>


<script type="text/javascript">
	function editar(id, nome, categoria, descricao, valor_compra, valor_venda, foto, nivel_estoque){
		$('#id').val(id);
		$('#nome').val(nome);
		$('#valor_venda').val(valor_venda);
		$('#valor_compra').val(valor_compra);
		$('#categoria').val(categoria).change();
		$('#descricao').val(descricao);
		$('#nivel_estoque').val(nivel_estoque);
						
		$('#titulo_inserir').text('Editar Registro');
		$('#modalForm').modal('show');

		$('#target').attr('src','img/produtos/' + foto);
	}

	function limparCampos(){
		$('#id').val('');
		$('#nome').val('');
		$('#valor_compra').val('');
		$('#valor_venda').val('');
		$('#descricao').val('');		
		$('#foto').val('');
		$('#target').attr('src','img/produtos/sem-foto.jpg');
	}
</script>



<script type="text/javascript">
	function mostrar(id, data, produto,foto, quantidade, preco, total){

		$('#nome_dados').text(id);
		$('#produto').text(produto);
		$('#preco').text(preco);
		$('#quantidade').text(quantidade);
		$('#total').text(total);
		$('#data').text(data);
		
		$('#target_mostrar').attr('src','img/produtos/' + foto);

		$('#modalDados').modal('show');
	}
</script>




<script type="text/javascript">
	function saida(id, nome, estoque){

		$('#nome_saida').text(nome);
		$('#estoque_saida').val(estoque);
		$('#id_saida').val(id);		

		$('#modalSaida').modal('show');
	}
</script>


<script type="text/javascript">
	function entrada(id, nome, estoque){

		$('#nome_entrada').text(nome);
		$('#estoque_entrada').val(estoque);
		$('#id_entrada').val(id);		

		$('#modalEntrada').modal('show');
	}
</script>