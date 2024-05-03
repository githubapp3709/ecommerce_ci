<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model
{
    public function add_category($post)
    {
        $post['added_on'] = date('d M, Y');
        $post['cate_id'] = mt_rand(11111, 99999);
        // if (empty($post['parent_id'])) {
        //     $post['parent_id'] = null;
        // }
        $q = $this->db->insert('ec_category', $post);
        if ($q) {
            return true;
        } else {
            return false;
        }
    }
    public function all_category()
    {
        $q = $this->db->where(['status' => '1', 'parent_id' => ''])->get('ec_category');
        if ($q->num_rows()) {
            return $q->result();
        }
    }

    public function get_sub_cate($cate_id)
    {

        $q = $this->db->where(['status' => '1', 'parent_id' => $cate_id])->get('ec_category');
        if ($q->num_rows()) {

            $output = '';
            foreach ($q->result() as $val) {
                $output .= " <option value='$val->cate_id'>$val->cate_name</option>";
            }
            echo $output;
        }
    }

    // public function testing()
    // {
    //     return "testing";
    // }
}
