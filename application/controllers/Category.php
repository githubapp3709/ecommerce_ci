<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CategoryModel');
    }

    public function index()
    {
        $this->form_validation->set_rules('cate_name', 'Category Name', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if ($this->form_validation->run()) {
            $post = $this->input->post();

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');
            $data = $this->upload->data();
            $post['image'] = $data['raw_name'] . $data['file_ext'];
            $check = $this->CategoryModel->add_category($post);
            if ($check) {
                $this->session->set_flashdata('succMsg', 'Data inserted successfully');
                redirect('category');
            }
        } else {
            $data['categories'] = $this->CategoryModel->all_category();
            // print_r($data);
            // die();
            $this->load->view('category', $data);
        }
    }

    public function get_sub_cate()
    {
        $cate_id = $this->input->post('cate_id');
        $q = $this->CategoryModel->get_sub_cate($cate_id);
        echo $q;
    }
}
