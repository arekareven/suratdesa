<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class historyBP extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_historyBP');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['query'] = $this->m_historyBP->tampil_data();
		$this->load->view('header2', $data);
		$this->load->view('history/historyBP', $data);
		$this->load->view('footer', $data);
	}
}
