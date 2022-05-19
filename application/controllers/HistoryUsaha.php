<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class historyUsaha extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_historyUsaha');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['query'] = $this->m_historyUsaha->tampil_data();
		$this->load->view('header2', $data);
		$this->load->view('history/historyUsaha', $data);
		$this->load->view('footer', $data);
	}
}
