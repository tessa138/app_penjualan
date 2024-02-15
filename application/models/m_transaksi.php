<?php
class M_transaksi extends CI_Model {

	function simpan_barang() {
        $nama_customer  = $this->input->post('customer');
        $nama_barang    = $this->input->post('barang');
        $qty            = $this->input->post('qty');
        $id_customer    = $this->db->get_where('customer',array('nama_customer'=>$nama_customer))->row_array();
        $idbarang       = $this->db->get_where('barang',array('nama_barang'=>$nama_barang))->row_array();
        $data           = array('id_customer' => $id_customer['id_customer'],
                                'id_barang' => $idbarang['id_barang'],
                                'qty' 		=> $qty,
                                'harga' 	=> $idbarang['harga'],
                                'status' 	=> '0');
        $this->db->insert('transaksi_dtl', $data);
    }
    
    function tampil_transaksi_dtl() {
 //       $query  ="SELECT td.id_transaksi_dtl,td.qty,td.harga,b.nama_barang,c.nama_customer
 //               FROM transaksi_dtl as td, barang as b, customer as c
 //               WHERE b.id_barang = td.id_barang and td.status = '0'";
        $query ="SELECT * from transaksi_dtl join customer on transaksi_dtl.id_customer=customer.id_customer
                join barang on transaksi_dtl.id_barang=barang.id_barang";
        return $this->db->query($query);
    }

    function selesai($data) {
        $this->db->insert('transaksi',$data);
        $last_id=  $this->db->query("select id_transaksi from transaksi order by id_transaksi desc")->row_array();
        $this->db->query("update transaksi_dtl set id_transaksi='".$last_id['id_transaksi']."' where status='0'");
        $this->db->query("update transaksi_dtl set status='1' where status='0'");
    }

    function hapus($where, $table) {
		$this->db->where($where);
		$this->db->delete($table);
	}

}

?>