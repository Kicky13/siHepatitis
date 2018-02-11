<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datajenis extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function datajenis(){
        $this->db->select('*');
        $this->db->from('tb_jenispenyakit');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function submit($jenis, $solusi, $tindakan, $pencegahan) {
        $data = array(
            'id_jenispenyakit' => null,
            'jenis_penyakit' => $jenis,
            'solusi' => $solusi,
            'tindakan' => $tindakan,
            'pencegahan' => $pencegahan
        );
        $this->db->insert('tb_jenispenyakit', $data);
    }

    public function detailjenis($id){
        $this->db->select('*');
        $this->db->from('tb_jenispenyakit');
        $this->db->where('id_jenispenyakit', $id);
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function edit($id, $jenis, $solusi, $tindakan, $pencegahan){
        $this->db->set('jenis_penyakit', $jenis);
        $this->db->set('solusi', $solusi);
        $this->db->set('tindakan', $tindakan);
        $this->db->set('pencegahan', $pencegahan);
        $this->db->where('id_jenispenyakit', $id);
        $this->db->update('tb_jenispenyakit');
    }

    public function delete($id){
        $this->db->where('id_jenispenyakit', $id);
        $this->db->delete('tb_jenispenyakit');
    }
}