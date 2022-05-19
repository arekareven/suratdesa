<?php
class M_sk_tki extends CI_Model {

    function get_data_warga_bynik($nik){
        $hsl=$this->db->query("SELECT * FROM warga JOIN kk ON kk.no_kk=warga.no_kk WHERE nik='$nik'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'nik' => $data->nik,
			        'nama_lengkap' => $data->nama_lengkap,
			        'tempat_lahir' => $data->tempat_lahir,
                    'tanggal_lahir' => $data->tanggal_lahir,
                    'jenis_kelamin' => $data->jenis_kelamin,
                    'jenis_pekerjaan' => $data->jenis_pekerjaan,
                    'kewarganegaraan' => $data->kewarganegaraan,
                    'status_perkawinan' => $data->status_perkawinan,
			        'agama' => $data->agama,
                    'dusun' => $data->dusun,
                    'rt' => $data->rt,
                    'rw' => $data->rw,
                    );
            }
        }
        return $hasil;
    }
     function tambah_data($data,$table) {
        $this->db->insert($table,$data);
    }

    function get_no_invoice(){
        $sql = "SELECT MAX(MID(no_surat,7,3)) AS get_no_invoice
        FROM surat
        WHERE MID(no_surat,1,5) = '425.1' ";
        $query = $this->db->query($sql);
		  if($query->num_rows() > 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = ((int)$data->get_no_invoice) + 1; 
               $no = sprintf("%'.03d", $kode);
		  }
		  else{      
			   $no = "001";  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('Y'); 
			  //$batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "425.1/".$no."/404.319.04/".$tgl;  //format kode
			  return $kodetampil;
    }

/*    function get_no_invoice(){
        $this->db->select('RIGHT(surat.no_surat,2) as no_surat', FALSE);
		  $this->db->order_by('no_surat','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('surat');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->no_surat) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('Y'); 
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "474.2"."/".$batas."/404.319.04/".$tgl;  //format kode
			  return $kodetampil;
    }
*/
}