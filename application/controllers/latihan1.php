<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "selamat datang.. belajar web programing";

    }
    public function penjumlahan($n10, $n12)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n10, $n12);
    echo "hasil penjumlahan dari ". $n10 ." + ". $n12." = " .$hasil;
    }
}