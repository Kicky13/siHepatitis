<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	public function __construct() {
		parent::__construct();
	}

	public function checkuser($username, $password){
		$sql = $this->db->query("select * from tb_user where username = '".$username."' and password = '".$password."'")->num_rows();
		return $sql;
	}
}
