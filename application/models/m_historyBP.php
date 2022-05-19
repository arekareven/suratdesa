<?php
class M_historyBP extends CI_Model {
	function tampil_data() {
		return $this->db->get('surat');
	}

	
}	