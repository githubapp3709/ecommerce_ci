<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CartModel');
    }
    public function index()
    {
    }
    public function add_to_cart()
    {
        $post = $this->input->post();
        $check =  $this->CartModel->add_to_cart($post);
        print_r($check);
    }
}
