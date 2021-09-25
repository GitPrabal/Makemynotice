<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notice_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function addWithRegister($register,$save,$table_name)
    {

        $this->load->database();
        $this->load->library('session');
        $user_login = $this->session->userdata('user_login');
        if(!$user_login ){ 
         
          $register = $this->db->insert('register', $register);
        }
        $result = $this->db->insert($table_name, $save);
        $notice_id = $this->db->insert_id();
        $user_id = $save['user_id'];

        $user_notice_filled = array(

            'user_id' => $user_id,
            'notice_id' => $notice_id,
            'table_name' => $table_name,
            'table_heading' => '',
        );

        $user_notice_filled = $this->db->insert('user_notice_filled', $user_notice_filled);

        $advocate_pulled_notice = array(

            'user_id' => $user_id,
            'notice_id' => $notice_id,
            'table_name' => $table_name,
            'pulled' => '0',
        );

        $advocate_pulled_notice = $this->db->insert('advocate_pulled_notice', $advocate_pulled_notice);
        return $advocate_pulled_notice;

    }

}
