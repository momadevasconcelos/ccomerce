<?php 
require_once("../../../conexao.php");

$data_hoje = date('Y-m-d');
$dataInicial = @$_POST['dataInicial'];

$total=0;
$query = $pdo->query("SELECT f.forma as forma ,sum(ve.total_venda) as total FROM `vendas` as ve INNER JOIN forma_pagamento as f on ve.idPago=f.id  WHERE ve.dataCompra='$dataInicial' GROUP BY ve.idPago");

$total_reg = @count($res);
if($total_reg > 0){

echo <<<HTML
	<small>

	<table class="table table-hover" id="tabela">
	<thead> 
	
	</thead> 
	<tbody>	
HTML;

foreach ($res = $query->fetchAll(PDO::FETCH_ASSOC) as $key) {
	$forma=$key['forma'];
	$tot=$key['total'];
    $total=$total + $key['total'];



echo <<<HTML
<tr >
<td class="mr-2">Venda {$forma}</td>
<td class="mr-2" style="text-align: right;">{$tot},00</td>

</tr>
HTML;

}

$totalR1 = number_format($total, 2, ',', '.');


echo <<<HTML
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>
</table>

<br>	
<div align="right">Total das vendas: <span class="verde">MZN {$totalR1}</span> </div>


</small>
HTML;


}else if($total_reg ==null) {
	echo '<small>Não possui nenhum registro Cadastrado!</small>';
}

?>

<script type="text/javascript">
	$(document).ready( function () {
    $('#tabela').DataTable({
    		"ordering": false,
			"stateSave": true
    	});
    $('#tabela_filter label input').focus();
} );
</script>


<script type="text/javascript">
	function editar(id, produto, pessoa, valor, data_venc, data_pgto, foto){
		$('#id').val(id);
		$('#produto').val(produto).change();
		$('#pessoa').val(pessoa).change();
		$('#valor').val(valor);
		$('#data_venc').val(data_venc);
		$('#data_pgto').val(data_pgto);
								
		$('#titulo_inserir').text('Editar Registro');
		$('#modalForm').modal('show');

		$('#target').attr('src','img/contas/' + foto);
	}

	function limparCampos(){
		$('#id').val('');
		$('#pessoa').val(0).change();
		$('#valor').val('');
		$('#data_pgto').val('');
		$('#data_venc').val('<?=$data_hoje?>');		
		$('#foto').val('');
		$('#quantidade').val('1');

		$('#target').attr('src','img/contas/sem-foto.jpg');
		calcular()
	}
</script>

<script type="text/javascript">
	function mostrar(descricao, valor, data_lanc, data_venc, data_pgto, usuario_lanc, usuario_pgto, foto, pessoa, link, telefone){

		$('#nome_dados').text(descricao);
		$('#valor_dados').text(valor);
		$('#data_lanc_dados').text(data_lanc);
		$('#data_venc_dados').text(data_venc);
		$('#data_pgto_dados').text(data_pgto);
		$('#usuario_lanc_dados').text(usuario_lanc);
		$('#usuario_baixa_dados').text(usuario_pgto);
		$('#pessoa_dados').text(pessoa);
		$('#telefone_dados').text(telefone);
		
		$('#link_mostrar').attr('href','img/contas/' + link);
		$('#target_mostrar').attr('src','img/contas/' + foto);

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


