<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat datang.. Selamat belajar web programing";

    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hasil : " . $n1 . " + " . $n2 . "=" . $hasil;
    }
}