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
}
