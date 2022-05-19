<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class historyTKI extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_historyTKI');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['query'] = $this->m_historyTKI->tampil_data();
		$this->load->view('header2', $data);
		$this->load->view('history/historyTKI', $data);
		$this->load->view('footer', $data);
	}
}