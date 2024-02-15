<?php
class Barang extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_barang');
		chek_session();
	}

	function index() {
		$data['barang'] = $this->m_barang->list_barang()->result();
		$this->template->load('template','barang/list', $data);
	}

	function tambah() {
		$nama  = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');

		$data = array(
			'nama_barang' => $nama,
			'harga'       => $harga,
			);

		$this->m_barang->tambah($data, 'barang');
		redirect('barang');
	}

	function hapus($id) {
		$where = array('id_barang' => $id);
		$this->m_barang->hapus($where, 'barang');
		redirect('barang');
	}

	function edit($id) {
		$where 			= array('id_barang' => $id);
		$data['barang'] = $this->m_barang->edit($where, 'barang')->result();
		$this->template->load('template','barang/edit', $data);
	}

	function load_edit() {
		$id    = $this->input->post('id_barang');
		$nama  = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');

		$data = array(
			'id_barang'   => $id,
			'nama_barang' => $nama,
			'harga' 	  => $harga,
		);

		$where = array(
			'id_barang' => $id
		);

		$this->m_barang->load_edit($where, $data, 'barang');
		redirect('barang');
	}

}


?>

