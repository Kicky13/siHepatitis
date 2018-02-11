<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataGejala extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_datagejala');
    }

	public function index()
	{
	    $data = $this->m_datagejala->datagejala();
		$this->load->view('datagejala', array('data' => $data));
	}

	public function tambahgejala() {
		$this->load->view('tambahgejala');
	}

	public function submitdata()
    {
        if ('submit') {
            $gejala = $_POST['gejala'];
            $cekGejala = $this->m_datagejala->cekGejala($gejala);
            if ($cekGejala > 0){
                $this->tambahgejala();
            } else {
                $this->m_datagejala->submit($gejala);
                echo '<script>alert("Data berhasil ditambahkan", window.location="' . base_url('index.php/datagejala') . '")</script>';
            }
        }
    }

    public function editgejala($id){
        $data = $this->m_datagejala->detailgejala($id);
        $this->load->view('editgejala', array('data' => $data));
    }

    public function editdata($id){
        if('edit'){
            $gejala = $_POST['gejala'];
            $this->m_datagejala->edit($id, $gejala);
            echo '<script>alert("Data berhasil diubah", window.location="' . base_url('index.php/datagejala') . '")</script>';
        }
    }

    public function delete($id){
        $this->m_datagejala->deletegejala($id);
        $this->m_datagejala->deletegabungan($id);
        echo '<script>alert("Data berhasil dihapus", window.location="' . base_url('index.php/datagejala') . '")</script>';
    }

}