<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_index extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['message'] = 'Welcome';
		$this->load->view('index',$data);
	}
	public function login() 
	{
		$user_input = array(
			'username' => $this->input->post('username'),
			'password' =>  ($this->input->post('password'))
		);
		// test isi $user_input
		// var_dump($user_input); die();
		$response = $this->users->cek_user($user_input);
		// var_dump($response); die();
		if(!$response) {
			$data['message'] = "Please Login or Signup";
			redirect('c_index',$data);
			return;
		}
		// user session
		$sess_user = array(
			'username' => $user_input['username'],
			'status' => 'login' 
		);
		$this->session->set_userdata($sess_user);
		redirect(base_url('index.php/c_index/deliver'));
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/c_index'));
	}

	public function signup()
	{
		$validaton = array(
			array(
				'field' => 'username',
				'label' => 'username',
				'rules' => 'required',
				'errors' => array(
					'required' => 'anda harus mengisi $s.'
				),
			),
			array(
				'field' => 'password',
				'label' => 'password',
				'rules' => 'required',
				'errors' => array(
					'required' => 'anda harus mengisi $s.'
				),
			),
			array(
				'field' => 'c_password',
				'label' => 'c_password',
				'rules' => 'required|matches[password]',
				'errors' => array(
					'required' => 'anda harus mengisi $s.', 'matches' => 'tidak sesuai dengan password'
				),
			),
		);

		$this->form_validation->set_rules($validaton);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('index');
		}

		else
		{
			$users_user = array(
				'username' => $this->input->post('username'),
				'password' => ($this->input->post('password')),
				'nama' => $this->input->post('nama'),
				'no_telp' => $this->input->post('phone')
			);
		}

		if($this->users->input($users_user))
		{
			redirect(base_url('index.php/c_index'));
		}
		else
		{
			//harus di isi error nya mau gmn
		}
		
	}

	public function deliver()
	{
		//if($this->session->userdata('status') !== 'login') {
			//redirect('c_index');
			//return;
		//}
		//$this->load->view('deliver-now');

		$data["kota"] = $this->users->getKota();

		if($this->session->userdata('status') !== 'login') {
			redirect(base_url('index.php/c_index'));
			return;
		}
		else {
			$username = $this->session->userdata('username');
			$data["users"] = $this->users->tampilByUser($username)->result();
		}
		//var_dump($data['users']); die();
		$this->load->view('deliver-now', $data);
	}

	public function about()
	{
		$this->load->view('about-us');
	}

	public function prohibited()
	{
		$this->load->view('prohibited');
	}

	public function transaksi()
	{
		$L = $this->input->post('L');
		$W = $this->input->post('W');
		$H = $this->input->post('H');
		$dimensi = $L*$W*$H;

		$berat_barang = $this->input->post('berat_barang');
		$harga_berat = 10000*$berat_barang;
		$nama_barang = $this->input->post('nama_barang');

		$barang = array(
			'username' => $this->session->userdata('username'),
			'nama_barang' => $nama_barang,
			'berat_barang' => $berat_barang,
			'harga' => $harga_berat,
			'dimensi' => $dimensi
			);
		$this->users->insert_barang($barang);
		$id_barang = $this->users->ambilId_barang($this->session->userdata('username'),$nama_barang,$berat_barang,$dimensi,$harga_berat)->id_barang;
		$kota1 = $this->input->post('kota1');
		$kota2 = $this->input->post('kota2');
		//$id_tujuan = $this->users->ambilId_tujuan($kota1,$kota2);
		$id_tujuan = $this->users->ambilId_tujuan($kota1,$kota2)->id_tujuan;
		$harga_jarak = $this->users->harga_jarak($id_tujuan)->harga;
		//$harga_jarak = $this->users->harga_jarak($id_tujuan);
		$total_harga = $harga_berat + $harga_jarak;

		$transaksi = array(
			'alamat_pengirim' => $this->input->post('alamat_pengirim'),
			'nama_penerima' => $this->input->post('nama_penerima'),
			'telp_penerima' => $this->input->post('telp_penerima'),
			'alamat_penerima' => $this->input->post('alamat_penerima'),
			'id_barang' => $id_barang,
			'id_tujuan' => $id_tujuan,
			'total_harga' => $total_harga
			);

		// $this->resi($transaksi);
		/*
		$tujuan = array(
			'kota1' => $this->input->post('kota1'),
			'kota2' => $this->input->post('kota2')
		);*/
		$id_transaksi = $this->users->getIdTransaksi($id_barang)->row()->id_transaksi;
		 var_dump($id_transaksi); die();

		// $data_resi = array(
		// 	// 'username' => $this->session->userdata('username'),
		// 	// '$id_barang' => $id_barang,
		// 	'id_transaksi' => $id_transaksi;
		// );

		if($this->users->deliv($barang,$transaksi,$dimensi) == TRUE)
		{
			// $this->resi($id_transaksi);
			redirect(base_url('index.php/c_index/resi?id_transaksi=' . $id_transaksi));
		}
		else
		{
			//harus di isi error nya mau gmn
		}
		
	}

	public function resi()
	{
		if($this->session->userdata('status') !== 'login') {
			redirect(base_url('index.php/c_index'));
			return;
		}
		else {
			$this->load->model('Users');

			$username = $this->session->userdata('username');
			// $id = $this->input->post['id'];
			// $id_barang = $this->input->post['id_barang'];
			// $id_transaksi = $this ->input->post['id_transaksi'];
			

			$id_transaksi = $this->input->get('id_transaksi');
			$data_transaksi = $this->users->getDataTransaksi($id_transaksi)->row();
			$id_barang = $data_transaksi->id_barang;
			$data['barang'] = $this->users->tampilBarangById($id_barang)->row();
			$data['users'] = $this->users->tampilByUser($username)->row();
			// $data['barang'] = $this->users->tampilBarang($username)->result();
			// $data['tampil'] = $this->users->tampilTransaksi($id_transaksi)->row();
			$data['transaksi'] = $data_transaksi;
			$data['tujuan'] = $this->users->getDataTujuan($data_transaksi->id_tujuan)->row();

			// echo "<pre> Tujuan <br>";
			// print_r($data['barang']); echo "<br> data transaksi <br><hr>";
			// var_dump($data_transaksi); 
			// echo "</pre>";
			// die();


		}
		//var_dump($data['barang']); die();
		$this->load->view('resi', $data);
		//$this->load->view('resi', $data2);
	}

	//hiraukan aja fungsi ini sama bawahnya
	public function check(){
		$L = $this->input->post('L');
		$W = $this->input->post('W');
		$H = $this->input->post('H');
		$dimensi = $L*$W*$H;

		$berat_barang = $this->input->post('berat_barang');
		$harga_berat = 10000*$berat_barang;

		$kota1 = $this->input->post('kota1');
		$kota2 = $this->input->post('kota2');
		//$id_tujuan = $this->users->ambilId_tujuan($kota1,$kota2);
		$id_tujuan = $this->users->ambilId_tujuan($kota1,$kota2)->id_tujuan;
		// var_dump($id_tujuan); die();
		$harga_jarak = $this->users->harga_jarak($id_tujuan)->harga;
		//$harga_jarak = $this->users->harga_jarak($id_tujuan);
		$data['total_harga'] = $harga_berat + $harga_jarak;

		$this->load->view('check', $data);

		// redirect(base_url('index.php/c_index/check'));
	}

	public function track(){
		$id_transaksi = $this->input->post('id_transaksi');
		redirect(base_url('index.php/c_index/resi?id_transaksi=' . $id_transaksi));
	}

	public function tampil_check(){
		$this->load->view('check');
	}

}

