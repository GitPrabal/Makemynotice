<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_Disputes_model extends CI_Model {

function __construct() {
parent::__construct();
}

public function addHealthInsuranceClaimWithoutLogin($register,$health_insurance){

      $this->load->database();
      $this->load->library('session');
      $uniqid =  $register['user_id'];
      $register  = $this->db->insert('register', $register);
      $result    = $this->db->insert('health_insurance', $health_insurance);
      $notice_id  = $this->db->insert_id();
      $extraDetail = array(

        'user_id'     => $uniqid,
        'notice_id'   => $notice_id,
        'table_name'  => 'health_insurance',
        'table_head'  => 'Health Insurance',
        'pulled'      => '0'

      );

      $addExtraDetail =  $this->addExtraDetail($extraDetail);
      $this->session->set_userdata('final_filled',"1");
      $this->session->set_userdata('notice_initiated',"0");
      $this->session->set_userdata('session_data',"");
      return $result;
      
}

public function addHealthInsuranceClaimWithLogin($health_insurance){

      $this->load->database();
      $this->load->library('session');
      $uniqid =  $health_insurance['user_id'];
      $result = $this->db->insert('health_insurance', $health_insurance);
      $notice_id  = $this->db->insert_id();
      $extraDetail = array(

        'user_id'     => $uniqid,
        'notice_id'   => $notice_id,
        'table_name'  => 'health_insurance',
        'table_head'  => 'Health Insurance',
        'pulled'      => '0'

      );

      $addExtraDetail =  $this->addExtraDetail($extraDetail);
      $this->session->set_userdata('final_filled',"1");
      $this->session->set_userdata('notice_initiated',"0");
      $this->session->set_userdata('session_data',"");
      return $result;
}


public function addLifeInsuranceClaimWithoutLogin($register,$life_insurance_claim){

      $this->load->database();
      $this->load->library('session');
      $uniqid =  $register['user_id'];
      $register         = $this->db->insert('register', $register);
      $result = $this->db->insert('life_insurance_claim', $life_insurance_claim);
      $notice_id  = $this->db->insert_id();
      $extraDetail = array(

        'user_id'     => $uniqid,
        'notice_id'   => $notice_id,
        'table_name'  => 'life_insurance_claim',
        'table_head'  => 'Life Insurance Claim',
        'pulled'      => '0'

      );

      $addExtraDetail =  $this->addExtraDetail($extraDetail);


      $this->session->set_userdata('final_filled',"1");
      $this->session->set_userdata('notice_initiated',"0");
      $this->session->set_userdata('session_data',"");

      return $result;

  }

  public function addLifeInsuranceClaimWithLogin($life_insurance_claim){

      $this->load->database();
      $this->load->library('session');
      $uniqid =  $life_insurance_claim['user_id'];
      $result = $this->db->insert('life_insurance_claim', $life_insurance_claim);
      $notice_id  = $this->db->insert_id();
      $extraDetail = array(

        'user_id'     => $uniqid,
        'notice_id'   => $notice_id,
        'table_name'  => 'life_insurance_claim',
        'table_head'  => 'Life Insurance Claim',
        'pulled'      => '0'

      );

      $addExtraDetail =  $this->addExtraDetail($extraDetail);

      $this->session->set_userdata('final_filled',"1");
      $this->session->set_userdata('notice_initiated',"0");
      $this->session->set_userdata('session_data',"");

      return $result;

  }

  public function addMotorVehicleClaimWithLogin($motor_vehicle_claim){

      $this->load->database();
      $this->load->library('session');
      $uniqid = $motor_vehicle_claim['user_id'];
      $result = $this->db->insert('motor_vehicle_claim', $motor_vehicle_claim);
      $notice_id  = $this->db->insert_id();
      $extraDetail = array(

        'user_id'     => $uniqid,
        'notice_id'   => $notice_id,
        'table_name'  => 'product_service',
        'table_head'  => 'Product / Service',
        'pulled'      => '0'

      );

      $addExtraDetail =  $this->addExtraDetail($extraDetail);


      $this->session->set_userdata('final_filled',"1");
      $this->session->set_userdata('notice_initiated',"0");
      $this->session->set_userdata('session_data',"");
      return $result;
  }

  public function addMotorVehicleClaimWithoutLogin($register,$motor_vehicle_claim){

      $this->load->database();
      $this->load->library('session');
      $uniqid =  $register['user_id'];
      $register         = $this->db->insert('register', $register);
      $result = $this->db->insert('motor_vehicle_claim', $motor_vehicle_claim);

      $notice_id  = $this->db->insert_id();
      $extraDetail = array(

        'user_id'     => $uniqid,
        'notice_id'   => $notice_id,
        'table_name'  => 'product_service',
        'table_head'  => 'Product / Service',
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