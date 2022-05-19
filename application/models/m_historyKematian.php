<?php
class M_historyKematian extends CI_Model {
	function tampil_data() {
		return $this->db->get('surat');
	}
}	