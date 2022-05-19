<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	public function index(){
		if($this->session->userdata('nama_user')) redirect(base_url(''));
		else $this->load->view('login');
	}
//	public function index(){
//		if($this->session->userdata('nama_user') == NULL){
//			$this->load->view('login');
//		}else{
//			redirect(base_url('beranda'));
//		}
//	}
	function aksi_login(){

		$nama_user = $this->input->post('username'); //Ambil dari input text
		$pass_user = $this->input->post('pass');
		$where = array(
			'nama_user' => $nama_user,
			'pass_user' => md5($pass_user)
		);
		$cek = $this->m_login->cek_login("user_2", $where)->num_rows();
		if($cek > 0){

			//$data['user'] = $this->m_login->data_login()->result();
			//foreach ($data as $tampil){
				//echo $tampil->namaLengkapUser;
				$data_session = array(
					'nama_user' => $nama_user,
					'status' => "Aktif"
				);
			//}

			$this->session->set_userdata($data_session);
			redirect(base_url(''));
		}else{
			echo '<script language="javascript">';
			echo 'alert("Username / Password Salah!");';
			echo 'window.location = "../login";</script>';
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
