<?php
class Transaksi extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model(array('m_barang','m_transaksi','m_customer'));
        chek_session();
    }
    
    function index() {
        if(isset($_POST['submit'])) {
            $this->m_transaksi->simpan_barang();
            redirect('transaksi');
        }
        else{
            $data['customer'] = $this->m_customer->list_customer();
            $data['barang'] = $this->m_barang->list_barang();
            $data['detail'] = $this->m_transaksi->tampil_transaksi_dtl()->result();
            $this->template->load('template','transaksi/form_transaksi',$data);
        }
    }

    function selesai() {
        $tanggal = date('Y-m-d');
        $user 	 = $this->session->userdata('username');
        $id_op   = $this->db->get_where('operator',array('username'=>$user))->row_array();
        $data    = array('operator_id'=>$id_op['operator_id'],'tanggal_transaksi'=>$tanggal);
        $this->m_transaksi->selesai($data);
        redirect('transaksi');
    }

    function hapusitem($id) {
		$where = array('id_transaksi_dtl' => $id);
		$this->m_transaksi->hapus($where, 'transaksi_dtl');
		redirect('transaksi');
	}

}

?>