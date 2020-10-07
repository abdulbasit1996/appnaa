<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

  // public function index()
  // {
  //   $this->load->view('template/header');
  //   $this->load->view('mahrom/data_mahrom');
  //   $this->load->view('template/footer');
  // }

  public function pilih($menu = 'beranda')
  {
    $this->load->view('template/header');
    $this->load->view('mahrom/' . $menu);
    $this->load->view('template/footer');
  }
}
