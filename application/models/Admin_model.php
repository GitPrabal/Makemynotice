<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

function __construct() {
parent::__construct();
}




public function retrenchment_notice(){
  
    $this->load->database();
    $this->db->select('*');
    $this->db->from('retrenchment_notice');
    $query = $this->db->get();
    $retrenchment_notice  = $query->result();
    return $retrenchment_notice;
}

public function divorce_application(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('divorce_application');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;

}
public function administration(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('administration');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;
}

public function trespassing(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('trespassing');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;

}

public function enroachment(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('encroachment');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;

}

public function title_deed(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('title_deed');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;

}

public function sarfaesi_notice(){
  
    $this->load->database();
    $this->db->select('*');
    $this->db->from('sarfaesi_notice');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;
}

public function health_insurance(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('health_insurance');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;
}



public function life_insurance_claim(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('life_insurance_claim');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;
}

public function motor_vehicle_claim(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('motor_vehicle_claim');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;

}

public function wrongful_termination(){
  
    $this->load->database();
    $this->db->select('*');
    $this->db->from('wrongful_termination');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;
}

public function agreement_draft(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('agreement_draft');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;

}

public function non_payment_salary(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('non_payment_salary');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;

}

public function abuse_power_list(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('abuse_power');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;

}

public function gratuity_claim(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('gratuity_claim');
    $query = $this->db->get();
    $gratuity_claim  = $query->result();
    return $gratuity_claim;


}

public function misconduct_list(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('misconduct_notice');
    $query = $this->db->get();
    $misconduct_notice  = $query->result();

    return $misconduct_notice;

}

public function suspension_list(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('suspension_notice');
    $query = $this->db->get();
    $suspension_notice  = $query->result();

    return $suspension_notice;

}

public function termination_notice(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('termination_notice');
    $query = $this->db->get();
    $termination_notice  = $query->result();

    return $termination_notice;

}


public function delay_constuction(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('delay_in_construction');
    $query = $this->db->get();
    $delay_in_construction  = $query->result();

    return $delay_in_construction;

}

public function voilation_aggrement(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('voilation_aggrement');
    $query = $this->db->get();
    $voilation_aggrement  = $query->result();
    return $voilation_aggrement;
  
}

public function sexual_harrasment(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('harrashment');
    $query = $this->db->get();
    $harrashment  = $query->result();
    return $harrashment;
  
}

public function salary_dues(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('salary_dues');
    $query = $this->db->get();
    $salary_dues  = $query->result();
    return $salary_dues;
  
}


public function esi_claim_list(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('esi_claim');
    $query = $this->db->get();
    $esi_claim_list  = $query->result();
    return $esi_claim_list;
  
}

public function pf_claim_list(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('pf_claim');
    $query = $this->db->get();
    $pf_claim_list  = $query->result();
    return $pf_claim_list;
  
}

public function arbitration_notice(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('arbitration_rental');
    $query = $this->db->get();
    $enterpriseDetails  = $query->result();
    return $enterpriseDetails;
  
}

public function termination_rental(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('termination_rental');
    $query = $this->db->get();
    $enterpriseDetails  = $query->result();
    return $enterpriseDetails;

}



public function lessor_dispute(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('lessor_dispute');
    $query = $this->db->get();
    $enterpriseDetails  = $query->result();
    return $enterpriseDetails;
}

public function accidental_claim_list(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('accidental_claim');
    $this->db->join('register', 'register.user_id = accidental_claim.user_id');
    $query = $this->db->get();
    $enterpriseDetails  = $query->result();
    return $enterpriseDetails;
}

public function consumerList(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('consumernotice');
    $this->db->join('consumer_defendant', 'consumernotice.id = consumer_defendant.consumer_last_id');
    $this->db->where('consumer_defendant.consumer_last_id is NOT NULL',  NULL, FALSE);
    $query = $this->db->get();
    $enterpriseDetails  = $query->result();
    return $enterpriseDetails;
}


 public function advocateList(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('advocate');
    $query = $this->db->get();
    $enterpriseDetails  = $query->result();
    return $enterpriseDetails;
 }

 public function userList(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('register');
    $query = $this->db->get();
    $enterpriseDetails  = $query->result();
    return $enterpriseDetails;
 }


 public function addAdvocateData($data){

    $this->load->database();
    $this->load->library('session');

    $this->db->select('email');
    $this->db->from('advocate');
    $this->db->where('email',$data['email']);
    $query   = $this->db->get();
    $result  = $query->num_rows();

      if($result > 0){
        return "2";
      }


  $this->db->select('phone');
  $this->db->from('advocate');
  $this->db->where('phone',$data['phone']);
  $query   = $this->db->get();
  $result  = $query->num_rows();

  if($result > 0){
    return "3";
  }


    $result1 = $this->db->insert('advocate', $data);
    return $result1;

  }

  public function  login($data){


  $email    = $data['email'];
  $password = $data['password'];
    
  $this->load->database();
  $this->load->library('form_validation');
  $this->load->helper('form');
  $this->load->library('session');

  $this->db->select('email');
  $this->db->select('password');
  $this->db->from('admin');
  $this->db->where('email',$email);
  $this->db->where('password',$password);
  $query   = $this->db->get();
  $row = $query->row();
  $result  = $query->num_rows();


    if( $result == 1 || $result == '1' ){
      $email = $row->email;
      $this->session->set_userdata('email',$email);
        return 1;
    }else{
      return 2;
    }


  }

  public function retriveNotices(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('notices');
    $query   = $this->db->get();

    /* Fetch All Records */

    $row     = $query->result();
    $result  = $query->num_rows();
    return $row;

  }

  public function retriveUserData($user_id){
    
    $this->load->database();
    $this->db->select('*');
    $this->db->from('register');
    $this->db->where('user_id',$user_id);
    
    $query   = $this->db->get();
    $row     = $query->result();
    return $row;
  }



      public function submitBreachNotice($data){

      $this->load->database();
      $this->load->library('session');

      $user_id                         =  $data['user_id'];
      $breachName                      =  $data['breachName'];
      $breachDetailsCounter            =  $data['breachDetailsCounter'];
      $breachFatherName                =  $data['breachFatherName'];
      $breachCommunicationDetails      =  $data['breachCommunicationDetails'];
      $breachAddress                   =  $data['breachAddress'];
      $breachAge                       =  $data['breachAge'];
      $breachTotalValuation            =  $data['breachTotalValuation'];
      $breachDateOfStamp               =  $data['breachDateOfStamp'];
      $breachContactSender             =  $data['breachContactSender'];
      $breachEmailSender               =  $data['breachEmailSender'];
      $breachMouDetails                =  $data['breachMouDetails'];
      $breachEmailRecipient            =  $data['breachEmailRecipient'];
      $breachWitnessName               =  $data['breachWitnessName'];
      $breachContactRecipient          =  $data['breachContactRecipient'];
      $breachAddressWitnessTransaction =  $data['breachAddressWitnessTransaction'];


      $email_sender      =  $data['breachEmailSender'];
      $email_recipeient  =  $data['breachEmailRecipient'];

      $number_sender     =  $data['breachContactSender'];
      $number_recipient  =  $data['breachContactRecipient'];

      $this->session->set_userdata('email_sender',$email_sender);
      $this->session->set_userdata('number_sender',$number_sender);

      $this->session->set_userdata('email_recipeient',$email_recipeient);
      $this->session->set_userdata('number_recipient',$number_recipient);  

      $result = $this->db->insert('breach_notice', $data);
      $last_insert_id = $this->db->insert_id();
      $this->session->set_userdata('last_insert_id',$last_insert_id);
      $true = 'true';
      $this->session->set_userdata('goto_basic_details',$true);

      return $result;

  }

    public function submitLabourNotice($data){

      $this->load->database();
      $this->load->library('session');

      $result = $this->db->insert('labour_notice', $data);
      $last_insert_id = $this->db->insert_id();
      $this->session->set_userdata('last_insert_id',$last_insert_id);
      $true = 'true';
      $this->session->set_userdata('goto_basic_details',$true);
        return $result;
  }

  public function uploadMotorDocs($data)
  {

    $this->load->database();
    $this->load->library('session');

    $motor_fir_certificate           = $data['motor_fir_certificate'];
    $motor_registration_certificate  = $data['motor_registration_certificate'];
    $motor_driving_license           = $data['motor_driving_license'];
    $emission_copy                   = $data['emission_copy'];
    $insurance_copy                  = $data['insurance_copy'];
    $medical_copy                    = $data['medical_copy'];
    $last_id                         = $this->session->userdata('last_insert_id');

    $dbdata = array(
          "registration_copy" => $motor_registration_certificate,
          "fir_copy"          => $motor_fir_certificate,
          "emission_copy"     => $emission_copy,
          "medical_copy"      => $medical_copy,
          "insurance_copy"    => $insurance_copy
     ); 
 
    $this->db->where("id",$last_id);
    $result =  $this->db->update("motor_notice",$dbdata);

    return $result;

  }

  public function uploadConsumerDocs($data)
  {

    $this->load->database();
    $this->load->library('session');

    $consumer_invoice_copy   = $data['consumer_invoice_copy'];
    $consumer_warranty_copy  = $data['consumer_warranty_copy'];
   
    $last_id                         = $this->session->userdata('last_insert_id');

    $dbdata = array(
          "consumer_invoice_copy"  => $consumer_invoice_copy,
          "consumer_warranty_copy" => $consumer_warranty_copy
     ); 
 
    $this->db->where("id",$last_id);
    $result =  $this->db->update("consumernotice",$dbdata);

    return $result;

  }

  public function uploadDivorceDocs($data)
  {

    $this->load->database();
    $this->load->library('session');

    $divorce_invitation_copy  = $data['divorce_invitation_copy'];   
    $last_id                  = $this->session->userdata('last_insert_id');

    $dbdata = array(
          "divorce_invitation_copy"  => $divorce_invitation_copy
     ); 
 
    $this->db->where("id",$last_id);
    $result =  $this->db->update("divorce_notice",$dbdata);
    
    return $result;

  }

  public function uploadChequeDocs($data)
  {

     $this->load->database();
     $this->load->library('session');


     $cheque_invoice_doc   =  $data['cheque_invoice_doc'];
     $cheque_picture       =  $data['cheque_picture'];
     $cheque_return_slip   =  $data['cheque_return_slip'];

     $last_id               = $this->session->userdata('last_insert_id');

    $dbdata = array(
          "cheque_invoice_doc"  => $cheque_invoice_doc,
          "cheque_picture"      => $cheque_picture,
          "cheque_return_slip"  => $cheque_return_slip
     ); 
 
    $this->db->where("id",$last_id);
    $result =  $this->db->update("chqbouncenotice",$dbdata);
    
    return $result;

  }

  public function uploadBreachDocs($data){

     $this->load->database();
     $this->load->library('session');

     $breach_mou_copy   =  $data['breach_mou_copy'];
     $breach_other_doc  =  $data['breach_other_doc'];

     $last_id           = $this->session->userdata('last_insert_id');

     $dbdata = array(
          "breach_mou_copy"  => $breach_mou_copy,
          "breach_other_doc" => $breach_other_doc
     ); 
 
     $this->db->where("id",$last_id);
     $result =  $this->db->update("breach_notice",$dbdata);
    
     return $result;

  }

    public function uploadLabourDocs($data){

     $this->load->database();
     $this->load->library('session');

     $oppointment_letter =  $data['oppointment_letter'];

     $last_id           = $this->session->userdata('last_insert_id');

     $dbdata = array(
          "oppointment_letter"  => $oppointment_letter
     ); 
 
     $this->db->where("id",$last_id);
     $result =  $this->db->update("labour_notice",$dbdata);
    
     return $result;

  }

  public function submitVacateNotice($data){

      $this->load->database();
      $this->load->library('session');

      $result = $this->db->insert('vacate_notice', $data);
      $last_insert_id = $this->db->insert_id();
      $this->session->set_userdata('last_insert_id',$last_insert_id);
      $true = 'true';
      $this->session->set_userdata('goto_basic_details',$true);
      return $result;
  }

  public function uploadVacateDocs($data){

     $this->load->database();
     $this->load->library('session');

     $vacate_correspondence  =  $data['vacate_correspondence'];
     $vacate_rent_paid       =  $data['vacate_rent_paid'];
     $vacate_lease_agreement =  $data['vacate_lease_agreement'];


     $last_id            = $this->session->userdata('last_insert_id');

     $dbdata = array(
          "vacate_correspondence"   => $vacate_correspondence,
          "vacate_rent_paid"        => $vacate_rent_paid,
          "vacate_lease_agreement"  => $vacate_lease_agreement
     ); 
 
     $this->db->where("id",$last_id);
     $result =  $this->db->update("vacate_notice",$dbdata);
    
     return $result;
  }

  
}
?>