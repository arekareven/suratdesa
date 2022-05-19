<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class historyBPM extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_historyBPM');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['query'] = $this->m_historyBPM->tampil_data();
		$this->load->view('header2', $data);
		$this->load->view('history/historyBPM', $data);
		$this->load->view('footer', $data);
	}
}
