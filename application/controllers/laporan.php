<?php
class Laporan extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_laporan');
        $this->load->helper('url');
        chek_session();
    }

	function index() {
        if(isset($_POST['submit'])) {
            $tanggal1 		= $this->input->post('tanggal1');
            $tanggal2 		= $this->input->post('tanggal2');
            $data['record'] = $this->m_laporan->laporan_periode($tanggal1, $tanggal2);
            $this->template->load('template','laporan/list', $data);
        }
        else {
            $data['record']=  $this->m_laporan->lpr_default();
            $this->template->load('template','laporan/list', $data);
    	}   
    }

    function pdf() {
        $this->load->library('cfpdf');
        $pdf=new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(14);
        $pdf->Text(10, 10, 'LAPORAN TRANSAKSI');
        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Cell(10, 10,'','',1);
        $pdf->Cell(10, 8, 'No', 1,0);
        $pdf->Cell(27, 8, 'Tanggal', 1,0);
        $pdf->Cell(50, 8, 'Operator', 1,0);
        $pdf->Cell(50, 8, 'Total Transaksi', 1,1);
        // tampilkan dari database
        $pdf->SetFont('Arial','','L');
        $data=  $this->m_laporan->lpr_default();
        $no=1;
        $total=0;
        foreach ($data->result() as $r) {
            $pdf->Cell(10, 8, $no, 1,0);
            $pdf->Cell(27, 8, $r->tanggal_transaksi, 1,0);
            $pdf->Cell(50, 8, $r->nama_lengkap, 1,0);
            $pdf->Cell(50, 8, $r->total, 1,1);
            $no++;
            $total=$total+$r->total;
        }
        // end
        $pdf->Cell(87,9,'Total',1,0,'R');
        $pdf->Cell(50,9,$total,1,0);
        $pdf->Output();
    }

}


?>