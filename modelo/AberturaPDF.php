<?php
$url_sistema = 'http://localhost/modelo/';


$html = file_get_contents($url_sistema ."relatorios/relatorio1.php");
//carregar DOMPDF

require_once('./dompdf/autoload.inc.php');
use Dompdf\Dompdf;
use Dompdf\Options;

header("Content-Transfer-Encoding:binary");
header("Content-Type:image/png");

//INICIALIZAR A CLASSE DOMPDF
$options = new Options();
$options->set('isRemoteEnabled',TRUE);
$pdf = new DOMPDF($options);
//Definir o tamanho do papel e orientação da página
$pdf->set_paper('A4', 'landscape');

//carregar o conteúdo html
$pdf->loadHTML($html);

//RENDERIZAR O PDF
$pdf->render();

//NOMEAR O PDF GERADO
$pdf->stream(
    'Clientes' . date('d-m-Y-H-i-s') . '.pdf',
    array("Attachment" => false)
);


?>