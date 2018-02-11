<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datagejala extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function datagejala(){
        $this->db->select('*');
        $this->db->from('tb_gejala');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function submit($gejala) {
        $data = array(
            'id_gejala' => null,
            'gejala' => $gejala
        );
        $this->db->insert('tb_gejala', $data);
    }

    public function detailgejala($id){
        $this->db->select('*');
        $this->db->from('tb_gejala');
        $this->db->where('id_gejala', $id);
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function cekGejala($gejala){
        $data = $this->db->query('SELECT * FROM tb_gejala WHERE gejala = "'.$gejala.'"')->num_rows();
        return $data;
    }

    public function edit($id, $gejala){
        $this->db->set('gejala', $gejala);
        $this->db->where('id_gejala', $id);
        $this->db->update('tb_gejala');
    }

    public function deletegejala($id){
        $this->db->where('id_gejala', $id);
        $this->db->delete('tb_gejala');
    }
    public function deletegabungan($id){
        $this->db->where('id_gejala', $id);
        $this->db->delete('tb_gabungan');
    }
}