<?php
class M_historyTKI extends CI_Model {
	function tampil_data() {
		return $this->db->get('surat');
	}
}	