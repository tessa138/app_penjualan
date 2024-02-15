<?php
class Customer extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_customer');
		chek_session();
	}

	function index() {
		$data['customer'] = $this->m_customer->list_customer()->result();
		$this->template->load('template','customer/list', $data);
	}

	function tambah() {
		$nama  = $this->input->post('nama_customer');
		$alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');

		$data = array(
			'nama_customer' => $nama,
			'alamat'       => $alamat,
            'no_telepon'       => $no_telepon,
			);

		$this->m_customer->tambah($data, 'customer');
		redirect('customer');
	}

	function hapus($id) {
		$where = array('id_customer' => $id);
		$this->m_customer->hapus($where, 'customer');
		redirect('customer');
	}

	function edit($id) {
		$where 			= array('id_customer' => $id);
		$data['customer'] = $this->m_customer->edit($where, 'customer')->result();
		$this->template->load('template','customer/edit', $data);
	}

	function load_edit() {
		$id    = $this->input->post('id_customer');
		$nama  = $this->input->post('nama_customer');
		$alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');

		$data = array(
			'id_customer'   => $id,
			'nama_customer' => $nama,
			'alamat' 	  => $alamat,
            'no_telepon' 	  => $no_telepon,
		);

		$where = array(
			'id_customer' => $id
		);

		$this->m_customer->load_edit($where, $data, 'customer');
		redirect('customer');
	}

}


?>

