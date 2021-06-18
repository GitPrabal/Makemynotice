<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Family_Disputes_model extends CI_Model {

function __construct() {
parent::__construct();
}

  public function addDivorceWithoutLogin($register,$divorce_application){
    
      $this->load->database();
      $this->load->library('session');
      $uniqid =  $register['user_id'];
      $result = $this->db->insert('divorce_application', $divorce_application);
      $notice_id  = $this->db->insert_id();
      $result = $this->db->insert('register', $register);

      $extraDetail = array(

        'user_id'     => $uniqid,
        'notice_id'   => $notice_id,
        'table_name'  => 'divorce_application',
        'table_head'  => 'Divoce Notice',
        'pulled'      => '0'

      );

      $addExtraDetail =  $this->addExtraDetail($extraDetail);


      $this->session->set_userdata('final_filled',"1");
      $this->session->set_userdata('notice_initiated',"0");
      $this->session->set_userdata('session_data',"");
      return $result;

  }

  public function addDivorceWithLogin($divorce_application){

      $this->load->database();
      $this->load->library('session');
      $uniqid =  $divorce_application['user_id'];
      $result = $this->db->insert('divorce_application', $divorce_application);
      $notice_id  = $this->db->insert_id();

      $extraDetail = array(

        'user_id'     => $uniqid,
        'notice_id'   => $notice_id,
        'table_name'  => 'divorce_application',
        'table_head'  => 'Divoce Notice',
        'pulled'      => '0'

      );

      $addExtraDetail =  $this->addExtraDetail($extraDetail);


      $this->session->set_userdata('final_filled',"1");
      $this->session->set_userdata('notice_initiated',"0");
      $this->session->set_userdata('session_data',"");
      return $result;

  }




  public function addExtraDetail($data){

     $uniqid     = $data['user_id'];
     $notice_id  = $data['notice_id'];
     $table_name = $data['table_name'];
     $table_head = $data['table_head'];


     $user_notice_filled = array(

                'user_id'       => $uniqid,
                'notice_id'     => $notice_id,
                'table_name'    => $table_name,
                'table_heading' => $table_head
      );

      $advocate_pulled_notice = array(

                'user_id'       => $uniqid,
                'notice_id'     => $notice_id,
                'table_name'    => $table_name,
                'pulled'        => '0'
      );

      $user_notice_filled     = $this->db->insert('user_notice_filled', $user_notice_filled);
      $advocate_pulled_notice = $this->db->insert('advocate_pulled_notice', $advocate_pulled_notice);

      return $advocate_pulled_notice;
  }


}
?>