<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SK_usaha extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('m_sk_usaha');
		$this->load->library('pdf');
		
	}
	public function index()
	{
        $x['invoice']=$this->m_sk_usaha->get_no_invoice();
		$this->load->view('header2');
		$this->load->view('surat/sk_usaha',$x);
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
        $nmr = $this->db->query("SELECT MAX(no_surat) AS get_no_invoice FROM surat WHERE MID(no_surat,1,5) = '486.6'");
        foreach ($nmr->result() as $row){
        $pdf->Cell(190,7,'SURAT KETERANGAN USAHA',0,1,'C');
        $pdf->Cell(190,7,'Nomor : '.$row->get_no_invoice,0,1,'C');      
        }  
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(200,7,'Yang Bertanda tangan di bawah ini Kepala Desa Sidorejo, Kecamatan Geneng, ',0,1,'C');
        $pdf->Cell(120,7,'Kabupaten Ngawi, menerangkan dengan sebenarnya :',0,1,'C');
        $pdf->SetMargins(25.4,0, 25.4);
        $pdf->Cell(10,7,'',0,1);
        $nik = $_GET['nik'];
        $warga = $this->db->query("SELECT * FROM warga JOIN kk ON kk.no_kk=warga.no_kk WHERE nik='$nik'");
        foreach ($warga->result() as $row){
        $pdf->Cell(42,6,'Nama                         :',0,0,'');
        $pdf->Cell(42,6,$row->nama_lengkap,0,1);
        $pdf->Cell(42,6,'Tempat Tgl. Lahir     :',0,0,'');
        $pdf->Cell(20,6,$row->tempat_lahir.','.$row->tanggal_lahir,0,1);
        $pdf->Cell(42,6,'Jenis Kelamin            :                     :',0,0,'');
        $pdf->Cell(42,6,$row->jenis_kelamin,0,1);
        $pdf->Cell(42,6,'NIK                            :',0,0,'');
        $pdf->Cell(20,6,$row->nik,0,1);
        $pdf->Cell(42,6,'Kebangsaan / Agama :',0,0,'');
        $pdf->Cell(20,6,'Indonesia / '.$row->agama,0,1);
        $pdf->Cell(42,6,'Pekerjaan                    :',0,0,'');
        $pdf->Cell(20,6,$row->jenis_pekerjaan,0,1);
        $pdf->Cell(42,6,'Alamat                        :',0,0,'');
        $pdf->Cell(20,6,'Dsn. '.$row->dusun.', Rt/Rw '.$row->rt.'/'.$row->rw.', Desa Sidorejo',0,1);
        $pdf->Cell(10,6,'                                        Kec. Geneng, Kab. Ngawi',0,1);
        $pdf->Cell(10,6,'',0,1);
         $surat = $this->db->query("SELECT * FROM surat ORDER BY id_surat DESC LIMIT 1");
        foreach ($surat->result() as $row){
        $pdf->Cell(150,7,'Orang tersebut diatas betul-betul penduduk Desa Sidorejo, Kecamatan Geneng, Kabupaten',0,1,'C');
        $pdf->Cell(128,7,'Ngawi memiliki '.$row->alasan.' pada saat ini Usaha nya masih berjalan lancar.',0,1,'C');
        $pdf->Cell(133,7,'Surat keterangan ini diberikan sebagai persyaratan untuk '.$row->keperluan,0,1,'C');
        $pdf->Cell(10,6,'',0,1);
        $pdf->Cell(140,7,'Demikian surat Keterangan ini dibuat untuk menjadikan periksa.',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(270,7,'Sidorejo, '.date("d M Y"),0,1,'C');
        $pdf->Cell(270,7,'An.Kepala Desa Sidorejo',0,1,'C'); 
        $pdf->Cell(270,7,'Sekretaris Desa',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','U',12);
        $pdf->Cell(270,7,'Sekdes',0,1,'C');
        
        $pdf->Output();
    }}
}
 
    function get_warga(){
        $nik=$this->input->post('nik');
        $data=$this->m_sk_usaha->get_data_warga_bynik($nik);
        echo json_encode($data);
    }

    function redirectLaporan(){
        $nama_surat = $this->input->post('nama_surat');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama_lengkap');
        $alasan = $this->input->post('alasan');
        $keperluan = $this->input->post('keperluan');
        $tanggal_surat = $this->input->post('tanggal_surat');
        $no_surat = $this->input->post('no_surat');

        $data = array(
            'nama_surat'              => $nama_surat,
            'nik'              => $nik,
            'nama'             => $nama,
            'alasan'             => $alasan,
            'keperluan'             => $keperluan,
            'tanggal_surat'       => $tanggal_surat,
            'no_surat'       => $no_surat,
            );

            $this->m_sk_usaha->tambah_data($data, 'surat');
    	redirect('SK_usaha/suratpdf?nik='.$this->input->post('nik2'));
    }

}
