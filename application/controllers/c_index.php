<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_index extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
	public function deliver()
	{
		$this->load->view('deliver-now');
	}
	public function about()
	{
		$this->load->view('about-us');
	}
}
