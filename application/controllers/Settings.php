<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('settingsModel');
    }

    public function pincode()
    {
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|trim');
        $this->form_validation->set_rules('deliver_charge', 'Delivery Charge', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if ($this->form_validation->run()) {
            $post = $this->input->post();
            $check = $this->settingsModel->add_pincode($post);
            if ($check) {
                $this->session->set_flashdata('succMsg', 'Data inserted successfully');
                redirect('settings/pincode');
            }
        } else {

            $this->load->view('pincode');
        }
    }
    public function banner()
    {
        if (empty($_FILES['bann_image']['name'])) {

            $this->form_validation->set_rules('bann_image', 'banner image', 'required|trim');
        }
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        if ($this->form_validation->run()) {
            $post = $this->input->post();
            $config = array(
                'upload_path' => './uploads',
                'allowed_types' => "gif|jpg|png|jpeg",
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload('bann_image');
            $image = $this->upload->data();
            $post['bann_image'] = $image['file_name'];
            $check = $this->settingsModel->add_banner($post);
            if ($check) {
                $this->session->set_flashdata('succMsg', 'Data inserted successfully');
                redirect('settings/banner');
            }
        } else {

            $this->load->view('banner');
        }
    }
}
