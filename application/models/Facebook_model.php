<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook_model extends CI_Model {

function __construct() {
  parent::__construct();
}

  public function facebookAdd($facebook){

      $this->load->database();
      $this->load->library('form_validation');
      $this->load->helper('form');

      $this->db->select('first_name');
      $this->db->from('facebook_login');
      $this->db->where('user_id',$facebook['user_id']);
      $query   = $this->db->get();
      $result  = $query->num_rows();

      if($result > 0){

       
        $this->db->set('first_name',$facebook['first_name']);
        $this->db->set('last_name',$facebook['last_name']);
        $this->db->set('email',$facebook['email']);
        $this->db->set('gender',$facebook['gender']);
        $this->db->set('picture',$facebook['picture']);
        $this->db->set('link',$facebook['link']);
        $this->db->set('modified',$facebook['modified']);

        $this->db->where('user_id', $facebook['user_id']);
        $this->db->where('oauth_provider', $facebook['oauth_provider']);
        $result = $this->db->update('facebook_login');

      }else{
          $register = array(
              'user_id'=>$facebook['user_id'],
              'first_name'=>$facebook['first_name'],
              'last_name'=>$facebook['last_name'],
              'email'=>$facebook['email']
          );

        $result = $this->db->insert('facebook_login', $facebook);
        $result = $this->db->insert('register', $register);
       
       
      }
     
  }

}


?>
