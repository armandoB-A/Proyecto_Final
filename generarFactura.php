<?php
//include("proyectoP/coneccion/conn.php");
require_once ("pdf/pdf/vendor/autoload.php");
use Dompdf\Dompdf;
ob_start();
include(dirname(__FILE__)).'/factura.php';
$html=ob_get_clean();
$dompdf=new Dompdf();
$dompdf->getOptions()->setChroot('/path/to/common/assets-directory');
$dompdf->loadHtml($html);
//$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("factura.pdf", array('Attachmend'=>0));
exit;
?>