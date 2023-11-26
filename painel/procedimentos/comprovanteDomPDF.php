<?php
// Carregar dompdf
require_once '../../painel/dompdf/autoload.php';

use Dompdf\Dompdf;

$id=$_GET['idv'];

echo $id;

 $html=file_get_contents("http://localhost/sistema/painel/paginas/comprovantePago.php?idvenda=".$id);
 $html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');



 
// Instanciamos um objeto da classe DOMPDF.
$pdf = new DOMPDF();
 
// Definimos o tamanho do papel e orientação.
$pdf->set_paper(array(0,0,230,2000));
 
// Carregar o conteúdo html.
$pdf->load_html(utf8_decode($html));
 
// Renderizar PDF.
$pdf->render();
 
// Enviamos pdf para navegador.
//$pdf->stream('relatorioVenda.pdf');

return $pdf->stream('comprovante.pdf', array( 'Attachment' => 0 ));
exit;



