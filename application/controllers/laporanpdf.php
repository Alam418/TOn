<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(190,7,'LAPORAN BARANG NatureS',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR BARANG',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'ID PRODUK',1,0);
        $pdf->Cell(40,6,'NAMA BARANG',1,0);
        $pdf->Cell(27,6,'HARGA',1,0);
        $pdf->Cell(80,6,'DESKRIPSI',1,1);
        $pdf->SetFont('Arial','',10);
        $products = $this->db->get('products')->result();
        foreach ($products as $row){
            $pdf->Cell(30,6,$row->product_id,1,0);
            $pdf->Cell(40,6,$row->name,1,0);
            $pdf->Cell(27,6,$row->price,1,0);
            $pdf->Cell(80,6,$row->description,1,1); 
        }
        $pdf->Output();
    }
}