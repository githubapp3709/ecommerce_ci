<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model
{
    public function add_category($post)
    {
        $post['added_on'] = date('d M, Y');
        $post['cate_id'] = mt_rand(11111, 99999);
        if (empty($post['parent_id'])) {
            $post['parent_id'] = null;
        }
        $q = $this->db->insert('ec_category', $post);
        if ($q) {
            return true;
        } else {
            return false;
        }
    }
}
