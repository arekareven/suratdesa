<?php
class M_sk_ktp extends CI_Model
{


    function get_data_warga_bynik($nik)
    {
        $hsl = $this->db->query("SELECT * FROM warga JOIN kk ON kk.no_kk=warga.no_kk WHERE nik='$nik'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
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

    function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function get_no_invoice()
    {
        $sql = "SELECT MAX(MID(no_surat,7,3)) AS get_no_invoice
        FROM surat
        WHERE MID(no_surat,1,5) = '474.2' ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = ((int)$data->get_no_invoice) + 1;
            $no = sprintf("%'.03d", $kode);
        } else {
            $no = "001";  //cek jika kode belum terdapat pada table
        }
        $tgl = date('Y');
        //$batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
        $kodetampil = "474.2/" . $no . "/404.319.04/" . $tgl;  //format kode
        return $kodetampil;
    }

    /*
    public function getMax($prefix= null, $table= null, $field= null){
        $this->db->select('no_surat');
        $this->db->like($field, $prefix, 'after');
        $this->db->order_by($field, 'desc');
        $this->db->limit(1);

        return $this->db->get($table)->row_array()[$field];
    }
*/
}
