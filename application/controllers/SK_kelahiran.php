<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SK_kelahiran extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('m_sk_kelahiran');
		$this->load->library('pdf');
		
	}
	public function index()
	{
		$this->load->view('header2');
		$this->load->view('surat/sk_kelahiran');
		$this->load->view('footer');
	}

	function suratpdf(){
        $pdf = new FPDF('P','mm','A4');
        $pdf->SetAutoPageBreak(false);
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',14);
        // mencetak string 
        $pdf->Image('application/third_party/fpdf/ngawi.png',25,10,18,'R');
        $pdf->Cell(190,7,'PEMERINTAH KABUPATEN NGAWI',0,1,'C');     
        $pdf->SetFont('Times','',12);   
        $pdf->Cell(190,7,'KECAMATAN GENENG',0,1,'C');
        $pdf->SetFont('Times','B',18);
        $pdf->Cell(190,7,'DESA SIDOREJO',0,1,'C'); 
        $pdf->SetLineWidth(1);
        $pdf->Line(43,36,170,36);
        $pdf->SetLineWidth(0);
        $pdf->Line(43,37,170,37);
    //    $pdf->Cell(190,7,'__________________________________________________________________________________',0,1,'C');        
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','U',12);
        $pdf->Cell(190,7,'SURAT KETERANGAN KELAHIRAN',0,1,'C');
        $pdf->Cell(190,7,'Nomor : 474/02/404.319.04/2019',0,1,'C');        
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(200,7,'Yang Bertanda tangan di bawah ini Kepala Desa Sidorejo, Kecamatan Geneng, ',0,1,'C');
        $pdf->Cell(120,7,'Kabupaten Ngawi, menerangkan dengan sebenarnya bahwa telah lahir :',0,1,'C');
        $pdf->SetMargins(25.4,0, 25.4);
        $pdf->Cell(10,7,'',0,1);
        $nik = $_GET['nik'];
        $warga = $this->db->query("SELECT * FROM warga JOIN kk ON kk.no_kk=warga.no_kk WHERE nik='$nik'");
        //$warga = $this->db->get();
        foreach ($warga->result() as $row){
        $pdf->Cell(42,6,'Pada Hari                         :',0,0,'');
        $pdf->Cell(42,6,'..........',0,1);;
        $pdf->Cell(42,6,'Tanggal Lahir     :',0,0,'');
        $pdf->Cell(20,6,$row->tanggal_lahir,0,1);
        $pdf->Cell(42,6,'Pukul                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Bertempat di                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Jenis Kelahiran                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Nama                         :',0,0,'');
        $pdf->Cell(42,6,'..........',0,1);
        $pdf->Cell(42,6,'Jenis Kelamin                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Anak ke                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(140,7,'Dari Seorang Ibu :',0,1,'C');
        $pdf->Cell(42,6,'Nama                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Tanggal Lahir/Umur                          :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Kewarganegaraan                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Pekerjaan                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Alamat                      :',0,0,'');
        $pdf->Cell(20,6,'Dsn. '.$row->dusun.', Rt/Rw '.$row->rt.'/'.$row->rw.', Desa Sidorejo',0,1);
        $pdf->Cell(10,6,'                                        Kec. Geneng, Kab. Ngawi',0,1);
        $pdf->Cell(10,6,'',0,1);
        $pdf->Cell(140,7,'Istri dari :',0,1,'C');
        $pdf->Cell(42,6,'Nama                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Tanggal Lahir/Umur                          :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Kewarganegaraan                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Pekerjaan                           :',0,0,'');
        $pdf->Cell(20,6,'...........',0,1);
        $pdf->Cell(42,6,'Alamat                      :',0,0,'');
        $pdf->Cell(20,6,'Dsn. '.$row->dusun.', Rt/Rw '.$row->rt.'/'.$row->rw.', Desa Sidorejo',0,1);
        $pdf->Cell(10,6,'                                        Kec. Geneng, Kab. Ngawi',0,1);
        $pdf->Cell(140,7,'Demikian surat Keterangan Kelahiran ini diberikan kepada yang bersangkutan untuk',0,1,'C');
        $pdf->Cell(140,7,'dipergunakan sebagaimana mestinya.',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(270,7,'Sidorejo, '.date("d M Y"),0,1,'C');
        $pdf->Cell(270,7,'An.Kepala Desa Sidorejo',0,1,'C'); 
        $pdf->Cell(270,7,'Sekretaris Desa',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','U',12);
        $pdf->Cell(270,7,'Muhammad Ilham',0,1,'C');
        
        $pdf->Output();
    }
}
 
    function get_warga(){
        $nik=$this->input->post('nik');
        $data=$this->m_sk_kelahiran->get_data_warga_bynik($nik);
        echo json_encode($data);
    }

    function redirectLaporan(){
    	redirect('SK_kelahiran/suratpdf?nik='.$this->input->post('nik2'));
    }

}
