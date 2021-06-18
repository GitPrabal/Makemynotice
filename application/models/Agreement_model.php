<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agreement_model extends CI_Model {

function __construct() {
  parent::__construct();
}

  public function addAgreementDraftWithoutLogin($register,$agreement_draft){

      $this->load->database();
      $this->load->library('session');
      $uniqid    = $register['user_id'];
      $register         = $this->db->insert('register', $register);
      $result = $this->db->insert('agreement_draft', $agreement_draft);
      $notice_id  = $this->db->insert_id();

      $user_notice_filled = array(

                'user_id'       => $uniqid,
                'notice_id'     => $notice_id,
                'table_name'    => 'agreement_draft',
                'table_heading' => 'Agreement Draft'
      );

      $advocate_pulled_notice = array(

                'user_id'       => $uniqid,
                'notice_id'     => $notice_id,
                'table_name'    => 'agreement_draft',
                'pulled'        => '0'
      );

     $user_notice_filled     = $this->db->insert('user_notice_filled', $user_notice_filled);
     $advocate_pulled_notice = $this->db->insert('advocate_pulled_notice', $advocate_pulled_notice);


      $this->session->set_userdata('final_filled',"1");
      $this->session->set_userdata('notice_initiated',"0");
      return $result;
  }


   public function addAgreementDraftWithLogin($agreement_draft){

      $this->load->database();
      $this->load->library('session');
      $result = $this->db->insert('agreement_draft', $agreement_draft);

      $uniqid    = $agreement_draft['user_id'];
      $user_notice_filled = array(

                'user_id'       => $uniqid,
                'notice_id'     => $notice_id,
                'table_name'    => 'agreement_draft',
                'table_heading' => 'Agreement Draft'
      );

      $advocate_pulled_notice = array(

                'user_id'       => $uniqid,
                'notice_id'     => $notice_id,
                'table_name'    => 'agreement_draft',
                'pulled'        => '0'
      );

     $user_notice_filled     = $this->db->insert('user_notice_filled', $user_notice_filled);
     $advocate_pulled_notice = $this->db->insert('advocate_pulled_notice', $advocate_pulled_notice);


      $this->session->set_userdata('final_filled',"1");
      $this->session->set_userdata('notice_initiated',"0");
      return $result;
  }

}


?>