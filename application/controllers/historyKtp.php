<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class historyKtp extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_historyKTP');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['query'] = $this->m_historyKTP->tampil_data();
		$this->load->view('header2', $data);
		$this->load->view('history/historyKtp', $data);
		$this->load->view('footer', $data);
	}
}
