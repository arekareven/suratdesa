<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('P','mm','A4');
        $pdf->SetAutoPageBreak(false);
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',12);
        // mencetak string 
        $pdf->Image('application/third_party/fpdf/ngawi.png',20,10,18,'R');
        $pdf->Cell(190,7,'PEMERINTAH KABUPATEN NGAWI',0,1,'C');        
        $pdf->Cell(190,7,'KECAMATAN GENENG',0,1,'C');
        $pdf->Cell(190,7,'DESA SIDOREJO',0,1,'C'); 
        $pdf->Cell(190,7,'__________________________________________________________________________________',0,1,'C');        
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','U',12);
        $pdf->Cell(190,7,'SURAT KETERANGAN',0,1,'C');
        $pdf->Cell(190,7,'Nomor : .../.../.../...',0,1,'C');        
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(200,7,'Yang Bertanda tangan di bawah ini, Kami Kepala Desa Sidorejo Kecamatan Geneng ',0,1,'C');
        $pdf->Cell(135,7,'Kabupaten Ngawi, menerangkan dengan sebenarnya bahwa :',0,1,'C');
        $pdf->SetMargins(25.4,0, 25.4);
        $pdf->Cell(10,7,'',0,1);
        $nik = $_GET['nik'];
        $warga = $this->db->query("SELECT * FROM warga JOIN kk ON kk.no_kk=warga.no_kk WHERE nik='$nik'");
        //$warga = $this->db->get();
        foreach ($warga->result() as $row){
        $pdf->Cell(42,6,'Nama                       :',0,0,'');
        $pdf->Cell(42,6,$row->nama_lengkap,0,1);
        $pdf->Cell(42,6,'Tempat Tgl. Lahir   :',0,0,'');
        $pdf->Cell(20,6,$row->tempat_lahir.','.$row->tanggal_lahir,0,1);
        $pdf->Cell(42,6,'Status                       :',0,0,'');
        $pdf->Cell(20,6,$row->status_perkawinan,0,1);
        $pdf->Cell(42,6,'Agama                     :',0,0,'');
        $pdf->Cell(20,6,$row->agama,0,1);        
        $pdf->Cell(42,6,'Kewarganegaraan    :',0,0,'');
        $pdf->Cell(20,6,$row->kewarganegaraan,0,1);
        $pdf->Cell(42,6,'Alamat                     :',0,0,'');
        $pdf->Cell(20,6,'Dsn. '.$row->dusun.', Rt/Rw '.$row->rt.'/'.$row->rw.', Desa Sidorejo',0,1);
        $pdf->Cell(10,6,'                                        Kec. Geneng, Kab. Ngawi',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(180,7,'Orang tersebut diatas adalah penduduk Desa Sidorejo, Kecamatan Geneng, Kabupaten Ngawi,',0,1,'C');
        $pdf->Cell(115,7,'yang sampai pada saat ini belum pernah menerima KTP Elektronik.',0,1,'C');
        $pdf->Cell(125,7,'Surat Keterangan ini digunakan sebagai persyaratan Pengambilan E-KTP.',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(270,7,'Sidorejo, '.date("d M Y"),0,1,'C');
        $pdf->Cell(270,7,'Kepala Desa Sidorejo',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','U',12);
        $pdf->Cell(270,7,'HARSONO',0,1,'C');
        
        $pdf->Output();
        }
    }
}