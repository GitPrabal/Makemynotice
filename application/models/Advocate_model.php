<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advocate_model extends CI_Model {

function __construct() {
parent::__construct();
}

  
 

  public function newNoticeCount(){

    $this->load->database();
    $this->load->library('session');
    $this->load->helper('url');
    $advocate_user_id = $this->session->userdata('advocate_user_id');

    $this->db->select('count(*) as count');
    $this->db->from('user_notice_filled');
    $this->db->where('pulled', "0");
    $query = $this->db->get();
    $pf_claim_list  = $query->result_array();
    return $pf_claim_list["0"];

  }

  public function pulledNoticeCount($id){

    $this->load->database();
    $this->load->library('session');
    $this->load->helper('url');
    $advocate_user_id = $this->session->userdata('advocate_user_id');

    $this->db->select('count(*) as count');
    $this->db->from('advocate_pulled_notice');
    $this->db->where('pulled', "1");
    $this->db->where('advocate_id', $id);

    $query = $this->db->get();
    $pf_claim_list  = $query->result_array();

    return $pf_claim_list["0"];

  }

  
  /*--------------------------- Employee -------------------------------------- */

  public function new_notices_uploaded(){

    $this->load->database();
    $this->load->library('session');
    $this->load->helper('url');
    $advocate_user_id = $this->session->userdata('advocate_user_id');

    $this->db->select('notice_id,table_name');
    $this->db->from('user_notice_filled');
    $this->db->where('pulled', "0");
    $query = $this->db->get();
    $pf_claim_list  = $query->result();

    //echo "<pre>";print_r($pf_claim_list);die;

    $result =  array();

    if( count( $pf_claim_list ) > 0 ){

    for( $i = 0; $i < count($pf_claim_list);$i++){

          $result[] = $this->newNoticeUploadedById($pf_claim_list[$i]->notice_id,$pf_claim_list[$i]->table_name);
    }

       return $result;

   }else{

        return $result;

    }


  }

  public function newNoticeUploadedById($id,$table_name){

        $this->db->select('
        advocate_pulled_notice.reply_notice,
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,
        advocate_pulled_notice.approved_by_user,'.$table_name.'.id as notice_id,'.$table_name.'.id,first_name,last_name,email,phone,added_date,table_head');
        $this->db->from($table_name)->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = '.$table_name.'.id','left');
        $this->db->where('advocate_pulled_notice.notice_id', $id);
        $this->db->where($table_name.'.id', $id);
        $this->db->where('advocate_pulled_notice.table_name', $table_name);
        $query = $this->db->get();
        $pf_claim_list  = $query->result();
        return $pf_claim_list;


  }

  public function advocate_pulled_notice_list(){

    $this->load->database();
    $this->load->library('session');
    $this->load->helper('url');
    $advocate_user_id = $this->session->userdata('advocate_user_id');

    $this->db->select('notice_id,table_name');
    $this->db->from('advocate_pulled_notice');
    $this->db->where('advocate_id', $advocate_user_id);
    $this->db->where('pulled', "1");

    $query = $this->db->get();
    $pf_claim_list  = $query->result();

    $resultant =  array();

    $result =  array();

    for( $i = 0; $i < count($pf_claim_list);$i++){
        $result[] = $this->detailNoticeById($pf_claim_list[$i]->notice_id,$pf_claim_list[$i]->table_name);
    }

    return $result;

  }

  public function detailNoticeById($id,$table_name){

        $this->db->select('
        advocate_pulled_notice.reply_notice,
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,advocate_pulled_notice.approved_by_user,'.$table_name.'.id as notice_id,'.$table_name.'.id,first_name,last_name,email,phone,added_date,table_head');
        $this->db->from($table_name)->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = '.$table_name.'.id','left');
        $this->db->where('advocate_pulled_notice.notice_id', $id);
        $this->db->where($table_name.'.id', $id);
        $this->db->where('advocate_pulled_notice.table_name', $table_name);
        $query = $this->db->get();
        $pf_claim_list  = $query->result();
        return $pf_claim_list;


  }

  public function wrongful_termination(){

     $this->load->database();
    $this->db->select('
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,advocate_pulled_notice.approved_by_user,wrongful_termination.id as notice_id,wrongful_termination.id,first_name,last_name,email,phone,added_date,table_head');
    $this->db->from('wrongful_termination')->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = wrongful_termination.id','left');
    $this->db->where('advocate_pulled_notice.pulled','0');
    $this->db->where('advocate_pulled_notice.table_name','wrongful_termination');
    $query = $this->db->get();
    $pf_claim_list  = $query->result();
    return $pf_claim_list;

  }

  public function pf_claim_list(){

    $this->load->database();
    $this->db->select('
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,advocate_pulled_notice.approved_by_user,pf_claim.id as notice_id,pf_claim.id,first_name,last_name,email,phone,added_date,table_head');
    $this->db->from('pf_claim')->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = pf_claim.id','left');
    $this->db->where('advocate_pulled_notice.pulled','0');
    $this->db->where('advocate_pulled_notice.table_name','pf_claim');
    $query = $this->db->get();
    $pf_claim_list  = $query->result();
    return $pf_claim_list;
}

public function esi_claim_list(){

    $this->load->database();
    $this->db->select('
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,advocate_pulled_notice.approved_by_user,esi_claim.id as notice_id,esi_claim.id,first_name,last_name,email,phone,added_date,table_head');
    $this->db->from('esi_claim')->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = esi_claim.id','left');
    $this->db->where('advocate_pulled_notice.pulled','0');
    $this->db->where('advocate_pulled_notice.table_name','esi_claim');
    $query = $this->db->get();
    $esi_claim_list  = $query->result();
        return $esi_claim_list;
}


public function voilation_aggrement(){

    $this->load->database();
    $this->db->select('
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,advocate_pulled_notice.approved_by_user,voilation_aggrement.id as notice_id,voilation_aggrement.id,first_name,last_name,email,phone,added_date,table_head');
    $this->db->from('voilation_aggrement')->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = voilation_aggrement.id','right');
    $this->db->where('advocate_pulled_notice.pulled','0');
    $this->db->where('advocate_pulled_notice.table_name','voilation_aggrement');
    $query = $this->db->get();
    $voilation_aggrement  = $query->result();
    return $voilation_aggrement;
  
}

public function sexual_harrasment(){

    $this->load->database();
    $this->db->select('
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,advocate_pulled_notice.approved_by_user,harrashment.id as notice_id,harrashment.id,first_name,last_name,email,phone,added_date,table_head');
    $this->db->from('harrashment')->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = harrashment.id','right');
    $this->db->where('advocate_pulled_notice.pulled','0');
    $this->db->where('advocate_pulled_notice.table_name','harrashment');
    $query = $this->db->get();
    $harrashment  = $query->result();
    return $harrashment;
  
}

public function salary_dues(){

    $this->load->database();
    $this->db->select('
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,advocate_pulled_notice.approved_by_user,salary_dues.id as notice_id,salary_dues.id,first_name,last_name,email,phone,added_date,table_head');
    $this->db->from('salary_dues')->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = salary_dues.id','right');
    $this->db->where('advocate_pulled_notice.pulled','0');
    $this->db->where('advocate_pulled_notice.table_name','salary_dues');
    $query = $this->db->get();
    $salary_dues  = $query->result();
    return $salary_dues;
  
}

public function abuse_power(){

    $this->load->database();
    $this->db->select('
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,advocate_pulled_notice.approved_by_user,abuse_power.id as notice_id,abuse_power.id,first_name,last_name,email,phone,added_date');
    $this->db->from('abuse_power')->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = abuse_power.id','left');
    $this->db->where('advocate_pulled_notice.pulled','0');
    $this->db->where('advocate_pulled_notice.table_name','abuse_power');

    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;

}

public function gratuity_claim(){

    $this->load->database();
    $this->db->select('
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,advocate_pulled_notice.approved_by_user,gratuity_claim.id as notice_id,gratuity_claim.id,first_name,last_name,email,phone,added_date');
    $this->db->from('gratuity_claim')->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = gratuity_claim.id','left');
    $this->db->where('advocate_pulled_notice.pulled','0');
    $this->db->where('advocate_pulled_notice.table_name','gratuity_claim');

    $query = $this->db->get();
    $gratuity_claim  = $query->result();
    return $gratuity_claim;
}

public function non_payment_salary(){

    $this->load->database();
    $this->db->select('
        advocate_pulled_notice.id as advocate_pulled_id,
        advocate_pulled_notice.user_id,advocate_pulled_notice.table_name,
        advocate_pulled_notice.pulled_by,advocate_pulled_notice.pulled,advocate_pulled_notice.approved_by_user,non_payment_salary.id as notice_id,non_payment_salary.id,first_name,last_name,email,phone,added_date');
    $this->db->from('non_payment_salary')->join('advocate_pulled_notice','advocate_pulled_notice.notice_id = non_payment_salary.id','left');
    $this->db->where('advocate_pulled_notice.pulled','0');
    $this->db->where('advocate_pulled_notice.table_name','non_payment_salary');
    $query = $this->db->get();
    $data  = $query->result();
    return $data;
}


/*******************************  Employer *******************************************/


public function misconduct_notice(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('misconduct_notice');
    $query = $this->db->get();
    $gratuity_claim  = $query->result();
    return $gratuity_claim;

}

public function suspension_notice(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('suspension_notice');
    $query = $this->db->get();
    $gratuity_claim  = $query->result();
    return $gratuity_claim;

}


public function termination_notice(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('termination_notice');
    $query = $this->db->get();
    $gratuity_claim  = $query->result();
    return $gratuity_claim;

}

public function arbitration_notice(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('arbitration_rental');
    $query = $this->db->get();
    $enterpriseDetails  = $query->result();
    return $enterpriseDetails;
  
}

public function delay_constuction(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('delay_in_construction');
    $query = $this->db->get();
    $delay_in_construction  = $query->result();

    return $delay_in_construction;

}

/*--------------------------------------- Rental Dispute -------------------------- */

public function lessor_dispute(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('lessor_dispute');
    $query = $this->db->get();
    $gratuity_claim  = $query->result();
    return $gratuity_claim;

}

public function termination_rental(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('termination_rental');
    $query = $this->db->get();
    $enterpriseDetails  = $query->result();
    return $enterpriseDetails;

}

/*------------------------- Insurance Disputes ------------------------------*/

public function motor_vehicle_claim(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('motor_vehicle_claim');
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


public function health_insurance(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('health_insurance');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;
}


/*------------------------------------------------ Bank Conflicts  -------------------------------- */


public function sarfaesi_notice(){
  
    $this->load->database();
    $this->db->select('*');
    $this->db->from('sarfaesi_notice');
    $query = $this->db->get();
    $abuse_power_list  = $query->result();
    return $abuse_power_list;
}


/*-------------------------------------------------- Family Disputes ----------------------------------- */


public function divorce_application(){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('divorce_application');
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


  public function  login($data){

      $email    = $data['email'];
      $password = $data['password'];
        
      $this->load->database();
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->library('session');

      $this->db->select('email');
      $this->db->select('password');
      $this->db->select('advocate_user_id');
      $this->db->from('advocate');
      $this->db->where('email',$email);
      $this->db->where('password',$password);
      $query   = $this->db->get();
      $data  = $query->result();
      $advocate_user_id = $data["0"]->advocate_user_id;
      $row = $query->row();
      $result  = $query->num_rows();

    if( $result == 1 || $result == '1' ){

      $email = $row->email;
      $this->session->set_userdata('email',$email);
      $this->session->set_userdata('advocate_user_id',$advocate_user_id);
      
        return 1;
    }else{
      return 2;
    }


  }


 


  
}
?>