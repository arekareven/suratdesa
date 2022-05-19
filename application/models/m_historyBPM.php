<?php
class M_historyBPM extends CI_Model {
	function tampil_data() {
		return $this->db->get('surat');
	}
}	