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
        // print_r($data['banner']);
        // die();
        $this->load->view('front/index.php', $data);
    }
}
