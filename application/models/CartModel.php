<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CartModel extends CI_Model
{

    public function get_userid()
    {
        return $this->session->userdata('user_id');
    }

    public function get_cart()
    {
        $q = $this->db->where('user_id', $this->get_userid())->get('ec_cart');
        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }

    public function add_to_cart($post)
    {
        $user_id = $this->get_userid();
        $exist = $this->db->where(['pro_id' => $post['pro_id'], 'user_id' => $user_id])->get('ec_cart');
        if ($exist->num_rows()) {
            return false;
        } else {
            $q = $this->db->select('pro_name, mrp, slug, pro_main_image')->where('pro_id', $post['pro_id'])->get('ec_product');
            if ($q->num_rows()) {
                $prod = $q->row();
                $data['cart_id'] = mt_rand(11111, 99999);
                $data['user_id'] = $user_id;
                $data['pro_id'] = $post['pro_id'];
                $data['pro_qty'] = $post['pro_qty'];
                $data['pro_name'] = $prod->pro_name;
                $data['pro_price'] = $prod->mrp;
                $data['slug'] = $prod->slug;
                $data['pro_image'] = $prod->pro_main_image;
                $data['added_on'] = date('Y - m - d');
                $this->db->insert('ec_cart', $data);
                return true;
            } else {

                return false;
            }
        }
    }
    public function cart_update($post)
    {


        $count = count($post);
        for ($i = 0; $i < $count; $i++) {
            $q = $this->db->where(['pro_id' => $post['up_pro_id'][$i], 'user_id' => $this->get_userid()])->update('ec_cart', ['pro_qty' => $post['up_qty'][$i]]);
        }
        return true;
        // print_r($this->db->last_query());
    }
}
