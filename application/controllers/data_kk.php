<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_kk extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_datakk');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['query'] = $this->m_datakk->tampil_data();
		$this->load->view('header2', $data);
		$this->load->view('data_penduduk/data_kk', $data);
		$this->load->view('footer', $data);
	}

	public function add() {
        $id_kk = $this->input->post('no_kk');

        $query = $this->m_datakk->cek_nokk($id_kk)->num_rows();
        if(empty($query))
            $this->m_datakk->tambah_data();
        else 
            $this->m_datakk->ubah_data($id_kk); 
    }

	public function delete(){
        $id_kk = $this->input->post('id_kk2');
                     $this->m_datakk->hapus_data($id_kk);
    }
}
