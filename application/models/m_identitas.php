<?php
class M_identitas extends CI_Model {
	
	function list_identitas() {
		return $this->db->get('identitas');
	}

	function tambah($data, $table) {
		$this->db->insert($table, $data);
	}

	function hapus($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit($where, $table) {
		return $this->db->get_where($table, $where);
	}

	function load_edit($where, $data, $table) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

}

?>
