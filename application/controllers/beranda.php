<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	

	public function index()
	{
		if($this->session->userdata('nama_user') != NULL){
			$this->load->view('header2');
			$this->load->view('beranda');
			$this->load->view('footer');
		}else{
			redirect(base_url('login'));
		}
	}

	public function tes_welcome() {
		echo "Latihan codeigniter";
	}
}
