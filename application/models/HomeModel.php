<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model
{
    public function get_banner()
    {
        $q = $this->db->where('status', '1')->order_by('id', 'desc')->get('ec_banner');
        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }
}
