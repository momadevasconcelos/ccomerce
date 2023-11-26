<style type="text/css">
  /* -- price theme ------ */
.card-price{ border-color: #999; background-color: #ededed; margin-bottom: 24px; }
.card-price > .card-heading,
.card-price > .card-footer{ color: #333; background-color: #fdfdfd; }
.card-price > .card-heading{ border-bottom: 1px solid #ddd; padding: 8px; }

.card-price .price{ 
   
  border-radius: 0 4px 4px 0;
  color: #337ab7; 
  font-size: 3em; 
  text-transform: uppercase;
  line-height: 0.7em; 
  margin: 24px 0 16px;
}

.input-group-multi [class*='col-'] {
  margin: 0 !important;
  padding: 0 !important;
}

.input-group-multi .form-control {
  border-right: 0;
}
.input-group-multi [class*='col-']:last-child .form-control {
  border-radius: 0  0;
  border-right: 1px solid #ccc;
}

.form-control {
  border-radius: 0 4px 4px 0;
  border-right: 1px solid #ccc;
}
</style>

<div class="bs-example widget-shadow" style="padding:15px">

  <div class="row" style=" margin-right: 50px ; margin-top: 60px" >
      
      <div class="clearfix"></div>
      <div class="col-md-7">
        <div id="chart_div1" class="chart">
            <form  id="frmVendasProdutos">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">

                  <input hidden="" type="text" name="mesa" id="mesa" value="Sem Mesa">
                  <input hidden="" type="text" name="cliente" id="cliente" value="0"> 
                  <input hidden="" type="number" name="estoque" id="estoque" >
                  <input hidden="" name="status" id="status" type="number" name="">
                <label><span class="glyphicon glyphicon-search text-info"></span>Produto/Bar Code</label>
                <select class="form-control sel2" id="produtoVenda" name="produtoVenda" style="width:100%; " >  <button type="submit" class="btn btn-primary">Salvar</button>
                <option value="A"></option>

                <?php
              
                $query = $pdo->query("SELECT id,
                nome
                from produtos");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                  $total_reg = @count($res);
                  if($total_reg > 0){
                    for($i=0; $i < $total_reg; $i++){
                    foreach ($res[$i] as $key => $value){}
                    echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';
                    }
                  }else{
                      echo '<option value="0">Cadastre um Cargo</option>';
                    }

                  ?>
                  
                 </select>  
                               <span class="text-danger" id="msgp"></span>
              </div> 
                        
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Preco</label>
                  <input readonly="" style=" font-size: 1.5em" class="form-control" type="number"  name="preco" id="preco">
                                
                </div>
              </div>
              <div class="col-md-3">
                <div id="imgProduto" style="float: right;">
                  <img src="img/produtos/sem-foto.jpg"  width="80px" id="target">                 
                </div>
              </div>

          </div>


          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
            <label for="exampleInputEmail1"></label>
                <input style="text-align: center;font-size: 1.2em" type="number" class="form-control" id="qtd" name="qtd" placeholder="Quantidade" >
                                <span class="text-danger" id="msgqtd"></span>    
              </div>  
            </div>
            

            <div class="col-md-6">
              
              <div class="form-group" >
                <label for="exampleInputEmail1"></label>
                <span  class="form-control btn btn-primary " id="btnAddVenda"><span class="fa fa-plus"> </span> Adicionar</span>
              </div>  
            </div>

          
            <table class="table table-hover" id="tabela">
              <thead>
                <tr>
                  <th>Produto</th>
                  <th>Preço</th>
                  <th>Qtd</th>
                  <th style="text-align: center;">Cancelar</th>
                </tr>
              </thead>
              <tbody>
                
                <?php  
              $total2=0;//total da venda em dinheiro
              $cliente2=""; //nome cliente
              if(isset($_SESSION['tabelaComprasTemp'])):
                $i2=0;
                foreach (@$_SESSION['tabelaComprasTemp'] as $key) {

                  $m2=explode("||", @$key);
                  ?>
                  <tr>
                  <td><?php echo $m2[0] ?></td>
                  <td><?php echo $m2[1] ?></td>
                  <td><?php echo $m2[3] ?></td>
                  <td  style="text-align: center;">
                  <i class="btn btn-danger btn-sm" onclick="atualizarEstoque('<?=$m2[5]?>',' <?=$m2[2]?>','<?=$m2[8]?>'),removerItem('<?=$i2?>',' <?=$m2[0]?>')">
              <i class='fa fa-close'></i>
              </i>
                  </td>
                </tr>

                  <?php 
              $calc2 = $m2[1] * $m2[3];
              $total2=$total2 + $calc2;
              $i2++;
              
                }
              endif; 
              ?>
  
              </tbody>
               
            </table>       

          </div>
        </form>
          
        </div>
      </div>
      <div class="col-md-5">
        <div id="chart_div2" class="chart">
         
<div class="card card-price">
  <div class="card-img">
    <a href="#">
     
      
    </a>
  </div>
      <div class="card-body">
      <br>
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-multi">
              <div class="input-group-addon"><label>Sub-total</label> </div>
              <div class="col-xs-12"><input readonly="" type="text" class="form-control">
              </div>
              <div class="input-group-addon"><label>MZN</label> </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-multi">
              <div class="input-group-addon"><label>Tipo de Pagamento</label> 

              </div>
              <div class="col-xs-12">
                   <select  style=" text-align: right; font-size: 1em" class="form-control" id="fpagamento" name="fpagamento">
          <?php
              
              $query = $pdo->query("SELECT id,
                forma
                from forma_pagamento");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                  $total_reg = @count($res);
                  if($total_reg > 0){
                    for($i=0; $i < $total_reg; $i++){
                    foreach ($res[$i] as $key => $value){}
                    echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['forma'].'</option>';
                    }
                  }else{
                      echo '<option value="0">Cadastre um Pagamento</option>';
                    }

            ?>
          s

        </select>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-multi">
              <div class="input-group-addon"><label>Desconconto</label> </div>
              <div class="col-xs-12"><input  type="text" class="form-control">
              </div>
              <div class="input-group-addon"><label>MZN</label> </div>
            </div>
          </div>
        </div>

        <br>
         <div class="row">
          <div class="col-md-12">
           
        <div class="form-group" >
          <label for="exampleInputEmail1"></label>
          <span style="float: right;"  class="input-group btn btn-primary " id="btnAddVenda"><span > </span>Finalizar Ordem <span class="glyphicon glyphicon-triangle-right"></span></span>
        </div>
           
          </div>
        </div>

        <br>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>

<script src="js/sweetalert2@11.js"></script>
<script type="text/javascript">
  $('#produtoVenda').change(function(){

    
    $("#msgp").hide();
    
      $.ajax({
        type:"POST",
        data:"idproduto=" + $('#produtoVenda').val(),
        url:"../painel/procedimentos/obterDadosProduto.php",
        success:function(r){

          //alert(r)
          dado=jQuery.parseJSON(r);
              $('#status').val(dado['status']);
          $('#estoque').val(dado['quantidade']);
          $('#preco').val(dado['preco']);
          $('#target').attr('src','img/produtos/' + dado['url']);
          
          
        }


      });
    });
</script>


<script type="text/javascript">
  $(document).ready(function(){
 
         $('#qtd').keyup(function(){
            $('#msgqtd').hide();
        });


    $('#btnAddVenda').click(function(){
          alert("teste") 
        produto=$('#produtoVenda').val();
        qty=$('#qtd').val();
        
            
        if(produto == "A"){
                          
              $("#msgp").text("Selecione um produto");
           
          return false;
        }

        if(qty == ""){
                    $("#msgqtd").text("Informe a Quantidade!");
          
          
        
          frmVendasProdutos.qtd.focus();
          
          return false;
        }

      dados=$('#frmVendasProdutos').serialize();
    
      $.ajax({
          type:"POST",
          data:dados,
          url:"../painel/procedimentos/adicionarProdutoTemp.php",
          success:function(r){
            //alert(r);
            if (r=1) {
              $('#target').attr('src','img/produtos/sem-foto.jpg');
              $('#frmVendasProdutos')[0].reset();
              //refresh da tabela
              $("#tabela").load(" #tabela > *");
              $('#produtoVenda').val(null).trigger('change');
            }

          },
            error: function(r) {
      
                Swal.fire({
                  position: 'bottom-end',
                  title: "Alerta de Stock",
                  text: "Quantidade inesistente!!",
                  icon: "warning"
                });
                                    
              }

        });
      });
  });
</script>

<script >
  $('#vRecebido').keyup(function (event){
           
    total=parseFloat($('#totalP').val())||0;
    valorR=parseFloat($('#vRecebido').val())||0;
      
    if (total<=valorR) {
    troco=0;
    troco=valorR-total;
    $('#change').val(troco+".00");
    $('#msgvalor').hide();
    }
            
           
  });
</script>

<script type="text/javascript">
  function fecharVenda(){
    

    $('#msgfpago').show();
      $('#msgvalor').show();

        $('#fpagamento').change(function (){
      $('#msgfpago').hide();
        });

        $('#vRecebido').keyup(function (event){
      $('#msgvalor').hide();
        });
      

      fpagamento= $('#fpagamento').val();
      vRecebido= $('#vRecebido').val();
        if(fpagamento == "Selecione"){
          $('#msgfpago').text("Selecione");
          $('#msgvalor').hide();
          formFecharVenda.fpagamento.focus();
          return false;
        }if(vRecebido == ""){
          $('#msgvalor').text("Infome o Valor!");
           $('#msgfpago').hide();
          formFecharVenda.valorR.focus();
          return false;
        }
      
      
      $('#msgfpago').hide();
       $('#msgvalor').hide();

        var formData = new FormData(document.getElementById("formFecharVenda"));
        //alert(formData)

              $.ajax({
                url:"../painel/procedimentos/fecharVenda.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,

                success:function(r){
            
                  //alertify.alert(r);
                if(r > 0){
              $('#formFecharVenda')[0].reset();
              $("#tabela").load(" #tabela > *");
              $("#refresh").load(" #refresh > *");
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  showConfirmButton: false,
                  text:"Venda realizada com Sucesso!!",
                  timer: 1500
                });
          
        }else if(r==0){
          alert("Não possui lista de Vendas");
          alertify.alert('Ready!');
          
        }else{
          alertify.error("Venda não efetuada");
            
        }
      
          }
        });
        }
          
   
</script>

<script type="text/javascript">
  function atualizarEstoque(id,estoque,status){
      
      $.ajax({
        type:"POST",
        data:"id="+ id+"&estoque="+estoque+"&status="+status,
        url:"../painel/procedimentos/atualizarEstoque.php",
        success:function(r){
          
          //alert(r)
        }
      });
    }

   function removerItem(index,produto){
   
    //alert(produto);
    $.ajax({
      type:"POST",
      data:"i=" + index,
      url:"../painel/procedimentos/removerItem.php",
      success:function(r){
        alert("fsafa")
        $("#tabela").load(" #tabela > *");
                swal.fire({
                  position:"top",
                  title: "Remove alert!",
                  text: ""+produto+" foi removido da lista!",
                  timer: 2000
                });
        
      }
    });
  }
</script>