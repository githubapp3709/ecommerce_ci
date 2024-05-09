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
        $data['cart'] =  $this->CartModel->get_cart();
        $this->load->view('front/cart', $data);
    }
    public function add_to_cart()
    {
        $post = $this->input->post();
        $check =  $this->CartModel->add_to_cart($post);
        if ($check) {
            $this->session->set_flashdata('succMsg', 'Product added to cart');
            redirect('cart');
        } else {
            $this->session->set_flashdata('errMsg', 'Product already added to cart');
            redirect('cart');
        }
    }
}
