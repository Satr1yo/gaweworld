<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function bost()
    {
        $this->load->view('dashboard/bost');
    }

    public function promo()
    {
        $this->load->view('dashboard/promo');
    }

    public function news()
    {
        $this->load->view('dashboard/news');
    }

    public function produk()
    {
        $this->load->view('dashboard/produk');
    }

    public function akun()
    {
        $this->load->view('dashboard/akun');
    }

    public function detailproduk()
    {
        $this->load->view('dashboard/detailproduk');
    }

    public function keranjang()
    {
        $this->load->view('dashboard/keranjang');
    }

    public function notifikasi()
    {
        $this->load->view('dashboard/notifikasi');
    }

    public function pembayaran()
    {
        $this->load->view('dashboard/pembayaran');
    }

    public function pusatbantuan()
    {
        $this->load->view('dashboard/pusatbantuan');
    }

    public function tentangkami()
    {
        $this->load->view('dashboard/tentangkami');
    }
}
