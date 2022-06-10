<?php
    require('fpdf/fpdf.php');

    ob_end_clean();                           //limpia el buffer de salida para poder generar el pdf
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial", 'B', 16);
    $pdf->Cell(40, 10, utf8_decode('Pruebadecomprobantes'));
    $pdf->Output();
    /* LIBRERIA QIUE SE REQUIERE PARA GENERAR COMPROBANTE EN PDF */   
?>