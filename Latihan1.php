<?php
Class Latihan1 extends CI_Controller
{
    Public function index()
{
    echo "Selamat Datang.. Selamat Belajar Web Programming";
    //$this->load->('view-Latihan1');
}

    Public function penjumlahan($nil1, $nil2)
{
    $this->load->model('Model_Latihan1');
    $data['nilai1'] = $nil1;
    $data ['nilai2'] = $nil2;
    $data['hasil'] =$this->Model_Latihan1->jumlah($nil1, $nil2);

    $this->load->view('Latihan_view', $data);
    } 
}

