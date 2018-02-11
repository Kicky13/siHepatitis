<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePakar extends CI_Controller {

	public function index()
	{
		$this->load->view('homepakar');
	}
}