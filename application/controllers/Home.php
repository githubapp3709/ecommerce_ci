<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_id')) {
        } else {
            $this->session->set_userdata('user_id', mt_rand(11111, 99999));
        }
        $this->load->model('HomeModel');
    }
    public function index()
    {
        $data['banner'] = $this->HomeModel->get_banner();
        $data['categ'] = $this->HomeModel->get_categ();
        $data['products'] = $this->HomeModel->get_products();
        $data['get_category_nav'] = $this->HomeModel->get_category_nav();

        $this->load->view('front/index.php', $data);
    }

    public function product_details($slug)
    {
        $data['arr'] = $this->HomeModel->product_details($slug);
        $this->load->view('front/product-details', $data);
    }
}
