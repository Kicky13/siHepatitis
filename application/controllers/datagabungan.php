<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataGabungan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_datagabungan');
    }

	public function index()
    {
        $data = $this->m_datagabungan->datagabungan();
        $this->load->view('datagabungan', array('data' => $data));
    }

	public function tambahgabungan() {
        $jenis = $this->m_datagabungan->loadjenispenyakit();
        $gejala = $this->m_datagabungan->loadgejala();
		$this->load->view('tambahgabungan', array('jenis' => $jenis, 'gejala' => $gejala));

	}

    public function submitdatagabungan() {
        if ('simpan') {
            $jenis = $_POST['jenis_penyakit'];
            $gejala = $_POST['gejala'];
            $mb = $_POST['nilai_mb'];
            $md = $_POST['nilai_md'];
            $cf = $mb - $md;
            $this->m_datagabungan->submit($jenis, $gejala, $mb, $md, $cf);
            echo '<script>alert("Data berhasil ditambahkan", window.location="' . base_url('index.php/datagabungan') . '")</script>';
        }
    }

    public function editgabungan($id){
        $jenis = $this->m_datagabungan->loadjenispenyakit();
        $gejala = $this->m_datagabungan->loadgejala();
        $data = $this->m_datagabungan->detailgabungan($id);
        $this->load->view('editgabungan', array('data' => $data, 'jenis' => $jenis, 'gejala' => $gejala));
    }

    public function editdatagabungan($id){
        if('edit'){
            $jenis = $_POST['jenis_penyakit'];
            $gejala = $_POST['gejala'];
            $mb = $_POST['nilai_mb'];
            $md = $_POST['nilai_md'];
            $cf = $mb - $md;
            $this->m_datagabungan->edit($id, $jenis, $gejala, $mb, $md, $cf);
            echo '<script>alert("Data berhasil diubah", window.location="' . base_url('index.php/datagabungan') . '")</script>';
        }
    }

    public function delete($id){
        $this->m_datagabungan->delete($id);
        echo '<script>alert("Data berhasil dihapus", window.location="' . base_url('index.php/datagabungan') . '")</script>';
    }
}