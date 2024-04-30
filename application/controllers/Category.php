<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('cate_name', 'Category Name', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if ($this->form_validation->run()) {
            $post = $this->input->post();
            print_r($post);
        } else {
            $this->load->view('category');
        }
    }
}
