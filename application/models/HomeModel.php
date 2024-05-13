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

    public function get_categ()
    {
        $q = $this->db->where('status', '1')->order_by('id', 'asc')->get('ec_category');
        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }


    public function category_name($cate_id)
    {

        $q = $this->db->where('cate_id', $cate_id)->get('ec_category');
        if ($q->num_rows()) {
            return $q->row()->cate_name;
        } else {
            return false;
        }
    }
    public function get_products()
    {
        $q = $this->db->where('status', '1')->order_by('id', 'asc')->get('ec_product');
        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }
    public function product_details($slug)
    {

        $q = $this->db->where(['slug' => $slug, 'status' => 1])->get('ec_product');
        if ($q->num_rows()) {
            return $q->row();
        } else {
            return false;
        }
    }

    public function get_category_nav()
    {
        $q = $this->db->where(['status' => 1, 'parent_id' => ''])->get('ec_category');
        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }
    public function get_subcat_check($cate_id)
    {
        $q = $this->db->where(['status' => 1, 'parent_id' => $cate_id])->get('ec_category');
        if ($q->num_rows()) {
            return true;
        } else {
            return false;
        }
    }
    public function get_subcategory($cate_id)
    {
        $q = $this->db->where(['status' => 1, 'parent_id' => $cate_id])->get('ec_category');
        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }
}
