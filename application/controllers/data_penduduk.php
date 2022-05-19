<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_penduduk extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_datakk');
		$this->load->model('m_datapenduduk');
		$this->load->helper('url');
	}

	public function index() {
		$data['query'] = $this->m_datapenduduk->tampil_data();
		$this->load->view('header2', $data);
		$this->load->view('data_penduduk/data_penduduk', $data);
		$this->load->view('footer', $data);
	}

	public function search(){
		$nama_lengkap = $this->input->post('q');
		$data['query'] = $this->m_datapenduduk->tampil_data_cari($nama_lengkap);
		
		$this->load->view('header2', $data);
		$this->load->view('data_penduduk/data_penduduk', $data);
		$this->load->view('footer', $data);
	}
	
	public function detail() {
		$data = $this->m_datakk->get_data_detail($this->input->get('no_kk'));
		$data['query'] = $this->m_datapenduduk->tampil_data_kk($data['no_kk']);

		$this->load->view('header2', $data);
		$this->load->view('data_penduduk/data_penduduk_kk', $data);
		$this->load->view('footer', $data);
	}

	public function add() {
        $id_warga = $this->input->post('nik');

        $query = $this->m_datapenduduk->cek_nik($id_warga)->num_rows();
        if(empty($query))
            $this->m_datapenduduk->tambah_data();
        else 
            $this->m_datapenduduk->ubah_data($id_warga);
    }

	public function delete(){
        $id_warga = $this->input->post('id_warga2');
                     $this->m_datapenduduk->hapus_data($id_warga);
    }
}
