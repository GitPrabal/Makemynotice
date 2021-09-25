<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Notice_model extends CI_Model {

function __construct() {
parent::__construct();
}

public function title_deed($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('title_deed');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function retrenchment_notice($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('retrenchment_notice');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function misconduct_list($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('misconduct_notice');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;
}

public function lessor_dispute($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('lessor_dispute');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

 }

public function delay_in_constuction($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('delay_in_construction');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

} 

public function termination_rental($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('termination_rental');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;


}

public function divorce_application($id){

     $this->load->library('session');
    $this->db->select('*');
    $this->db->from('divorce_application');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}


public function administration($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('administration');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;
}

public function trespassing($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('trespassing');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;
}

public function encroachment($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('encroachment');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function sarfaesi_notice($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('sarfaesi_notice');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function health_insurance($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('health_insurance');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function life_insurance_claim($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('life_insurance_claim');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function motor_vehicle_claim($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('motor_vehicle_claim');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function wrongful_termination($id){

    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('wrongful_termination');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function agreement_draft($id){

    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('agreement_draft');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function non_payment_salary($id){

    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('non_payment_salary');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function abuse_power($id){

    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('abuse_power');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function gratuity_claim($id){

    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('gratuity_claim');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;
}



public function suspension_list($id){

    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('suspension_notice');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;



}

public function voilation_aggrement($id){

    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('voilation_aggrement');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}

public function sexual_harrashment($id){
    
    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('harrashment');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

}
public function salary_dues($id){

    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('salary_dues');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $pfNoticeDetail  = $query->result();
    return $pfNoticeDetail;
}


  public function esiClaimList($id){

    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('esi_claim');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $pfNoticeDetail  = $query->result();
    return $pfNoticeDetail;

  }

  public function pfNoticeDetail($id){

    $this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('pf_claim');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $pfNoticeDetail  = $query->result();
    return $pfNoticeDetail;
   }



  public function accidental_claim_list_by_id($id){

  	$this->load->database();
    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('accidental_claim');
    $this->db->join('register', 'register.user_id = accidental_claim.user_id');
    $this->db->where('accidental_claim.id',$id);
    $query = $this->db->get();
    $enterpriseDetails  = $query->result();
    return $enterpriseDetails;


      return $result;
  }

  public function arbitration_notice($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('arbitration_rental');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;


  }

  public function termination_notice($id){

    $this->load->library('session');
    $this->db->select('*');
    $this->db->from('termination_notice');
    $this->db->where('id',$id);
    $query = $this->db->get();
    $data  = $query->result();
    return $data;

  }




}
?>