<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datagabungan extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function datagabungan()
    {
        $this->db->select('*');
        $this->db->from('tb_gabungan');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function loadjenispenyakit(){
        $this->db->select('*');
        $this->db->from('tb_jenispenyakit');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function loadgejala(){
        $this->db->select('*');
        $this->db->from('tb_gejala');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function submit($jenis, $gejala, $mb, $md, $cf) {
        $data = array(
            'id_gabungan' => null,
            'id_jenispenyakit' => $jenis,
            'id_gejala' => $gejala,
            'nilai_mb' => $mb,
            'nilai_md' => $md,
            'nilai_cf' => $cf
        );
        $this->db->insert('tb_gabungan', $data);
    }

    public function detailgabungan($id){
        $this->db->select('*');
        $this->db->from('tb_gabungan');
        $this->db->where('id_gabungan', $id);
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function edit($id, $jenis, $gejala, $mb, $md, $cf){
        $this->db->set('id_jenispenyakit', $jenis);
        $this->db->set('id_gejala', $gejala);
        $this->db->set('nilai_mb', $mb);
        $this->db->set('nilai_md', $md);
        $this->db->set('nilai_cf', $cf);
        $this->db->where('id_gabungan', $id);
        $this->db->update('tb_gabungan');
    }

    public function delete($id){
        $this->db->where('id_gabungan', $id);
        $this->db->delete('tb_gabungan');
    }
}