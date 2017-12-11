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
		redirect('c_index/deliver');
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
		if($this->session->userdata('status') !== 'login') {
			redirect('c_index');
			return;
		}
		$this->load->view('deliver-now');
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
		$barang = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'berat_barang' => $this->input->post('berat_barang')
			);
		$transaksi = array(
			'alamat_pengirim' => $this->input->post('alamat_pengirim'),
			'nama_penerima' => $this->input->post('nama_penerima'),
			'telp_penerima' => $this->input->post('telp_penerima'),
			'alamat_penerima' => $this->input->post('alamat_penerima')
			);
		$tujuan = array(
			'kota1' => $this->input->post('kota1'),
			'kota2' =>  ($this->input->post('kota2'))
		);

		if($this->users->deliv($barang,$transaksi) == TRUE)
		{
			redirect(base_url('index.php/c_index/resi'));
		}
		else
		{
			//harus di isi error nya mau gmn
		}

		
	}

	public function resi()
	{
		$this->load->view('resi');
	}

}

