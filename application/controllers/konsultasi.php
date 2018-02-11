<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_konsultasi');
    }

    public function index() {
        $data = $this->m_konsultasi->konsultasi();
        $this->load->view('konsultasi', array('data' => $data));
    }

	public function konsultasi() {
		$this->load->view('konsultasi');
	}
	public function hasilDiagnosis(){
        if ('diagnosis') {
            $data = $this->input->post('gejala');
            $x = count($data);
            if ($x <= 0) {
                $this->index();
                echo '<div class="alert alert-danger">
                        <strong>Maaf!</strong> Form tidak boleh kosong.
                      </div>';
            } else {
                $nilaiCF = $this->ambilCF($data);
                if ($x == 1) {
                    $rekapCom = $this->akumulasiCF1($nilaiCF);
                } else {
                    $rekapCom = $this->akumulasiCF($nilaiCF);
                }
                $hasilAkhir = $this->diagnosa($rekapCom);
                $this->createHistory($data, $hasilAkhir['angka'], $hasilAkhir['penyakit']['jenis_penyakit']);
                $this->load->view('hasildiagnosis', array('hasil' => $hasilAkhir));
            }
        }
    }
    public function diagnosa($hasil = array()){
	    $n = count($hasil);
	    for ($i = 0; $i < $n - 1; $i++){
	        $j = $i + 1;
	        if ($hasil[$i] < $hasil[$j]){
	            $nilai['angka'] = $hasil[$j];
	            $nilai['penyakit'] = $this->m_konsultasi->ambilJenis($j+1);
            } else {
	            $nilai['angka'] = $hasil[$i];
                $nilai['penyakit'] = $this->m_konsultasi->ambilJenis($j);
            }
        }
        return $nilai;
    }
    public function ambilCF($jawab = array()){
        $jenisA = array();
        $jenisB = array();
        foreach ($jawab as $data){
            $jenisA[] = $this->m_konsultasi->ambilCF(1, $data);
            $jenisB[] = $this->m_konsultasi->ambilCF(2, $data);
        }
        $data = array();
        $data[] = $jenisA;
        $data[] = $jenisB;
        return $data;
    }
    public function akumulasiCF1($cf = array()){
        $nilai = array();
        foreach ($cf as $value){
            foreach ($value as $key){
                $temp = $key;
                $nilai[] = $temp*100;
            }
        }
        return $nilai;
    }
    public function akumulasiCF($cf = array()){
        $nilai = array();
        foreach ($cf as $value){
            $temp = $this->hitungCom($value);
            $nilai[] = $temp*100;
        }
        return $nilai;
    }
    public function hitungCom($cf = array()){
        $tempCF = null;
        $n = count($cf);
        for ($i = 0; $i < $n - 1; $i++){
            $j = $i+1;
            if ($tempCF == null){
                $tempCF = $cf[$i];
                $tempCF = $this->hitung($tempCF, $cf[$j]);
            } else {
                $tempCF = $this->hitung($tempCF, $cf[$j]);
            }
        }
        return $tempCF;
    }
    public function hitung($x, $y){
        $t = $x + $y*(1-$x);
        return $t;
    }

    public function createHistory($gejala = array(), $nilai, $jenis_penyakit) {
        $g = "";
        foreach ($gejala as $gejala) {
            $m = $this->m_konsultasi->getGejala($gejala);
            $g .= $m."; ";
        }
        $this->m_konsultasi->createHistory($g, $jenis_penyakit, $nilai);
    }
}