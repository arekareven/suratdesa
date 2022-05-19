<?php
class M_historyKtp extends CI_Model {
	function tampil_data() {
		return $this->db->get('surat');
	}
}	