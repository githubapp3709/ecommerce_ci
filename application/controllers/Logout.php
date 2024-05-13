<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function index()
    {
        $this->session->sess_destroy('login_id');
        $this->session->sess_destroy('username');
        redirect(base_url());
    }
}
