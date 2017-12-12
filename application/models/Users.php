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

	public function deliv($barang,$transaksi,$dimensi){
		//$q = $this->db->select('barang.id_barang, transaksi.id_barang') //select what we need
                      //->join('transaksi', 'barang.id_barang = transaksi.id_transaksi') //do join
                      //->where('barang.id_barang = transaksi.id_transaksi') //where clause
                      //->get('barang');

        //return ($q->num_rows() > 0) ? $q->result_array() : array();

       // $this->db->insert(transaksi ('id_barang'))
        		 //->where('id_transaksi=id_barang');

        //$this->db->insert(barang ('dimensi'), $dimensi);
        //$this->db->insert('transaksi',array('id_barang'=>'id_barang'))
                 //->where('id_transaksi = id_barang');//specify column name

		if ($this->db->insert('barang',$barang) && $this->db->insert('transaksi',$transaksi)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function cek_kota($tujuan){
		$hasil = $this->db->get_where('tujuan', 
			array(
				'kota1' => $tujuan['kota1'],
				'kota2' => $user_input['kota2']
			));
		return $hasil->result();
	}

	public function tampilByUser($username){
		$query = $this->db->get_where('users', array('username' => $username));
		return $query;
	}

	public function tampilBarang(){
		$query = $this->db->get('barang');
		return $query;
	}

}