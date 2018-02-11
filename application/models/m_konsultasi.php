<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konsultasi extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function konsultasi(){
        $this->db->select('*');
        $this->db->from('tb_gejala');
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function ambilJenispenyakit(){
        $data = $this->db->query('SELECT * FROM tb_jenispenyakit');
        return $data['jenis_penyakit'];
    }
    public function ambilCF($jenis, $gejala){
        $data = $this->db->query('SELECT * FROM tb_gabungan WHERE id_jenispenyakit = '.$jenis.' AND id_gejala = '.$gejala)->result_array();
        return $data[0]['nilai_cf'];
    }
    public function ambilJenis($id){
        $data = $this->db->query('SELECT * FROM tb_jenispenyakit WHERE id_jenispenyakit = '.$id)->result_array();
        return $data[0];
    }
    public function createHistory($gejala, $jenispenyakit, $nilai){
        $data = array(
            'id_konsultasi' => null,
            'gejala' => $gejala,
            'jenis_penyakit' => $jenispenyakit,
            'presentase' => $nilai
        );
        $this->db->set('tanggal', 'NOW()', FALSE);
        $this->db->insert('tb_diagnosis', $data);
    }
    public function getGejala($gejala){
        $data = $this->db->query('SELECT * FROM tb_gejala WHERE id_gejala = '.$gejala)->result_array();
        return $data[0]['gejala'];
    }

}