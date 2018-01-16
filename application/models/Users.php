<?php
class Users extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	// array $user_input
	public function cek_user($user_input)
	{
		$response = $this->db->get_where('users', 
			array(
				'username' => $user_input['username'],
				'password' => $user_input['password']
			));
		return $response->result();
	}

	public function input($users){
		if ($this->db->insert('users',$users)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function ambilId_barang($username,$nama_barang,$berat_barang,$dimensi,$harga_berat){
		$id_barang = $this->db->select('id_barang')
					          ->where('username',$username)
					          ->where('nama_barang',$nama_barang)
					          ->where('berat_barang',$berat_barang)
					          ->where('dimensi',$dimensi)
					          ->where('harga',$harga_berat)
					          ->get('barang'); 
		return $id_barang->row();
	}
	
	public function ambilId_transaksi($id_transaksi,$alamat_pengirim,$nama_penerima,$telp_penerima,$alamat_penerima,$total_harga){
		$id_transaksi = $this->db->select('id_transaksi')
								 ->where('alamat_pengirim',$alamat_pengirim)
								 ->where('nama_penerima',$nama_penerima)
								 ->where('telp_penerima',$telp_penerima)
								 ->where('alamat_penerima',$alamat_pemerima)
								 ->where('total_harga',$total_harga)
								 ->get('transaksi');
		return $id_transaksi->row();
	}



	public function deliv($barang,$transaksi,$dimensi){
		//$q = $this->db->select('barang.id_barang, transaksi.id_barang') //select what we need
                      //->join('transaksi', 'barang.id_barang = transaksi.id_transaksi') //do join
                      //->where('barang.id_barang = transaksi.id_transaksi') //where clause
                      //->get('barang');

        //return ($q->num_rows() > 0) ? $q->result_array() : array();

       // $this->db->insert(transaksi ('id_barang'))
        		 //->where('id_transaksi=id_barang');

        //$this->db->insert(barang ('dimensi'), $dimensi);
        //$id_barang = $this->db->select('id_barang')->where('username',$username)->get('barang'); 
        //$this->db->insert('transaksi',array('id_barang'=>$id_barang));
                 //->where('i = id_barang');//specify column name

		if ($this->db->insert('barang',$barang) && $this->db->insert('transaksi',$transaksi)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function ambilId_tujuan($kota1, $kota2){
		$id_tujuan = $this->db->select('id_tujuan')->where('kota1',$kota1)->where('kota2',$kota2)->get('tujuan');
		return $id_tujuan->row();
	}

	public function harga_jarak($id_tujuan){
		$harga_jarak = $this->db->select('harga')->where('id_tujuan',$id_tujuan)->get('tujuan');
		return $harga_jarak->row();
	}

	public function tampilByUser($username){
		$query = $this->db->get_where('users', array('username' => $username));
		return $query;
	}

	public function tampilBarang($username){
		$query = $this->db->get('barang');
		return $query;
	}

	public function getKota(){
		$response = $this->db->get('tujuan');
		return $response;
	}

	public function tampilBarangById($id_barang){
		$this->db->where('id_barang', $id_barang);
		return $this->db->get('barang');
	}

	public function getIdTransaksi($id_barang) {
		return $this->db->get_where('transaksi', array('id_barang' => $id_barang));
	}

	public function getDataTransaksi($id_transaksi) {
		return $this->db->get_where('transaksi', array('id_transaksi' => $id_transaksi));
	}

	public function getDataTujuan($id_tujuan) {
		return $this->db->get_where('tujuan', array('id_tujuan' => $id_tujuan));
	}

	public function tampilTransaksi($id_transaksi){
		$this->db->where('id_transaksi', $id_transaksi);
		return $this->db->get('transaksi');
	}

	public function insert_barang($barang){
  $query = $this->db->insert('barang',$barang);
  return $query;
 }


}