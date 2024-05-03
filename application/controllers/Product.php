<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CategoryModel');
    }

    public function index()
    {
        $this->form_validation->set_rules('pro_id', 'Product ID', 'required|trim');
        $this->form_validation->set_rules('category', 'Category', 'required|trim');
        $this->form_validation->set_rules('pro_name', 'Product Name', 'required|trim');
        $this->form_validation->set_rules('brand', 'Brand', 'required|trim');
        $this->form_validation->set_rules('featured', 'Featured', 'required|trim');
        $this->form_validation->set_rules('highlights', 'Highlights', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $this->form_validation->set_rules('stock', 'Stock', 'required|trim');
        $this->form_validation->set_rules('mrp', 'MRP', 'required|trim');
        $this->form_validation->set_rules('selling_price', 'Selling Price', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if (empty($_FILES['pro_main_image']['name'])) {
            $this->form_validation->set_rules('pro_main_image', 'Product Image', 'required|trim');
        }

        if ($this->form_validation->run()) {
        } else {
            $data['categories'] = $this->CategoryModel->all_category();
            $this->load->view('product', $data);
        }
    }
}
