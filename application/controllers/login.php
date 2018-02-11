<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('page-login');
	}
	public function login(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$check = $this->m_login->checkuser($username, $password);
		if($check > 0){
		    echo '<script>alert("Anda berhasil Login", window.location="'.base_url('index.php/homepakar').'")</script>';

		} else {
			echo '<script>alert("Username/Password tidak cocok, masukkan lagi", window.location="'.base_url('index.php/login').'")</script>';

		}
	}
}
