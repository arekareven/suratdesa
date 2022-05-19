<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class historyKematian extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_historyKematian');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['query'] = $this->m_historyKematian->tampil_data();
		$this->load->view('header2', $data);
		$this->load->view('history/historyKematian', $data);
		$this->load->view('footer', $data);
	}
}
