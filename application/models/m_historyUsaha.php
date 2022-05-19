<?php
class M_historyUsaha extends CI_Model {
	function tampil_data() {
		return $this->db->get('surat');
	}
}	