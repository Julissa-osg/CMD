<?php namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Reportes extends BaseController
{
    public function excel()
    {
        // Cargar PHPSpreadsheet (ya está en vendor/)
        require_once ROOTPATH . 'vendor/autoload.php';
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        // Datos
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Nombre');
        $sheet->setCellValue('C1', 'Email');
        
        $sheet->setCellValue('A2', '1');
        $sheet->setCellValue('B2', 'Juan Pérez');
        $sheet->setCellValue('C2', 'juan@email.com');
        
        // Estilos
        $sheet->getStyle('A1:C1')->getFont()->setBold(true);
        
        // Descargar
        $writer = new Xlsx($spreadsheet);
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="reporte.xlsx"');
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');
        exit;
    }
    
    public function pdf()
    {
        // Cargar FPDF
        require_once ROOTPATH . 'fpdf186/fpdf.php';
        
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, 'Reporte PDF');
        $pdf->Ln(20);
        $pdf->Cell(40, 10, 'Generado: ' . date('Y-m-d H:i:s'));
        
        $pdf->Output('D', 'reporte.pdf'); // Descargar
        exit;
    }
}