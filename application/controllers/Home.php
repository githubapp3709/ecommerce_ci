<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel');
    }
    public function index()
    {
        $data['banner'] = $this->HomeModel->get_banner();
        $data['categ'] = $this->HomeModel->get_categ();
        $data['products'] = $this->HomeModel->get_products();
        $this->load->view('front/index.php', $data);
    }
}
