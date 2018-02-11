<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataJenis extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_datajenis');
    }

	public function index()
	{
        $data = $this->m_datajenis->datajenis();
        $this->load->view('datajenis', array('data' => $data));
	}

	public function tambahjenis() {
		$this->load->view('tambahjenis');
	}

    public function submitdatajenis() {
        if ('submit') {
            $jenis = $_POST['jenis_penyakit'];
            $solusi = $_POST['solusi'];
            $tindakan = $_POST['tindakan'];
            $pencegahan = $_POST['pencegahan'];
            $this->m_datajenis->submit($jenis, $solusi, $tindakan, $pencegahan);
            echo '<script>alert("Data berhasil ditambahkan", window.location="' . base_url('index.php/datajenis') . '")</script>';
        }
    }

    public function editjenis($id){
        $data = $this->m_datajenis->detailjenis($id);
        $this->load->view('editjenis', array('data' => $data));
    }

    public function editdatajenis($id){
        if('edit'){
            $jenis = $_POST['jenis_penyakit'];
            $solusi = $_POST['solusi'];
            $tindakan = $_POST['tindakan'];
            $pencegahan = $_POST['pencegahan'];
            $this->m_datajenis->edit($id, $jenis, $solusi, $tindakan, $pencegahan);
            echo '<script>alert("Data berhasil diubah", window.location="' . base_url('index.php/datajenis') . '")</script>';
        }
    }

    public function delete($id){
        $this->m_datajenis->delete($id);
        echo '<script>alert("Data berhasil dihapus", window.location="' . base_url('index.php/datajenis') . '")</script>';
    }
}