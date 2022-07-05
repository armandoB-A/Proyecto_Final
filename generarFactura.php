<?php
session_start();
if (isset($_SESSION['usuario'])) {

    $folio = $_GET['folio'];

    include("proyectoP/coneccion/conn.php");
    $queryP = "call MostrarFactura ('" . $_SESSION['usuario'] . "', '" . $folio . "');";
    $exeqQuery = mysqli_query($conn, $queryP);

    require('fpdf/fpdf.php');

    class PDF extends FPDF
    {
        // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image('img/titulo.png', 10, 8, 70);
            // Arial bold 15
            $this->SetFont('Arial', 'B', 15);
            // Movernos a la derecha
            $this->Cell(160);
            // Título
            $this->Cell(120, 10, 'FACTURA', 1, 0, 'C');
            $this->Cell(0);
            // Salto de línea
            $this->Ln(20);
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial', 'I', 8);
            // Número de página
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }

    // Creación del objeto de la clase heredada
    $pdf = new PDF('l');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont("Arial", 'B', 12);
    $pdf->Ln(0);
    //
    $pdf->SetXY(30, 27);
    $pdf->Cell(10, 10, 'SH company ', 0, 1);
    //
    $pdf->SetXY(30, 36);
    $pdf->SetFont("Arial", 'I', 9);
    $texto = utf8_decode("menos es más");
    $pdf->Cell(10, 5, $texto, 0, 1);
    //
    $pdf->SetXY(10, 50);
    $pdf->SetFont("Arial", '', 10);
    $texto = utf8_decode("Dirección: Xhixhata, Jilotepec");
    $pdf->Cell(10, 0, $texto, 0);
    //
    $pdf->SetXY(10, 55);
    $texto = utf8_decode("Ciudad y código postal: Mexico, 54365");
    $pdf->Cell(10, 0, $texto, 0);
    //
    $pdf->SetXY(10, 60);
    $texto = utf8_decode("Teléfono: 5535878129");
    $pdf->Cell(10, 0, $texto, 0);
    //
    $pdf->SetXY(10, 65);
    $pdf->SetFont('Times', '', 12);
    //// Array de Cabecera
    $header = array("folio", "Producto", "fecha.", "Precio", "cantidad", "total");
    //// Arrar de Productos
    /*$products = array(
        array("0010", "Producto 1", 2, 120, 0, 1),
        array("0024", "Producto 2", 5, 80, 0, 1),
        array("0001", "Producto 3", 1, 40, 0, 1),
        array("0001", "Producto 3", 5, 80, 0, 1),
        array("0001", "Producto 3", 4, 30, 0, 1),
        array("0001", "Producto 3", 7, 80, 0, 1),
    );*/
    // Column widths
    $w = array(40, 75, 60, 45, 25, 25);
    // Header
    for ($i = 0; $i < count($header); $i++)
        $pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C');
    $pdf->Ln();
    // Data
    $total = 0;
    while ($row = mysqli_fetch_array($exeqQuery)) {
        $pdf->Cell($w[0], 6, "".$row[0], 1);
        $pdf->Cell($w[1], 6, "".$row[1], 1);
        $pdf->Cell($w[2], 6, "".$row[2], 1);
        $pdf->Cell($w[3], 6, "$".$row[3], 1);
        $pdf->Cell($w[4], 6, "".$row[4], 1);
        $pdf->Cell($w[5], 6, "$".$row[5], 1);
        $pdf->Ln();
        //$total += $row[3] * $row[2];
    }
    $pdf->Output();
}
