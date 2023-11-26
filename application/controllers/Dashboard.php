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
}
