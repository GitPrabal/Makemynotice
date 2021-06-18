<?php

/*

nimisha.sajit@ibm.com

Hi Nimisha

With reference of Abhay Sanghavi ( Marked In CC ),
Sharing you my profile for further procedding

Sharin

asingavi@in.ibm.com


*/




defined('BASEPATH') OR exit('No direct script access allowed');

class Pulled_Notice_model extends CI_Model {

function __construct() {
parent::__construct();
}

    public function pull_notice($advocate_user_id,$data){


  		$this->load->library('session');
      $notice_id  =  $data["notice_id"];
      $table_name =  $data["table_name"];
      $user_id    =  $data["user_id"];

      $pulled_date =  date("d-m-Y");
      $pulled_time =  date("h:i:s A");

      $this->db->set('advocate_id',$advocate_user_id);
      $this->db->set('pulled',"1");
      $this->db->set('pulled_by',$advocate_user_id);
      $this->db->set('pulled_date',$pulled_date);
      $this->db->set('pulled_time',$pulled_time);
      $this->db->where('notice_id', $notice_id);
      $this->db->where('table_name', $table_name);
      $result = $this->db->update('advocate_pulled_notice');

      $this->db->set('pulled',"1");
      $this->db->where('notice_id', $notice_id);
      $this->db->where('table_name', $table_name);
      $result2 = $this->db->update('user_notice_filled');


      return $result;
    
    }

    public function sendReplyNotice($reply){

    $this->load->library('session');

		$result  = $this->db->insert('reply_notice', $reply);

		$reply_notice =  $reply['reply'];
		$table_name   =  $reply['table_name'];
		$notice_id    =  $reply['notice_id'];
    $advocate_id  =  $reply['advocate_id'];
    $user_id      =  $reply['user_id'];

    $reply_notice_date =  date("d-m-Y");
    $reply_notice_time =  date("h:i:s A");

    $this->db->set('reply_notice',$reply_notice);
    $this->db->set('reply_notice_date',$reply_notice_date);
    $this->db->set('reply_notice_time',$reply_notice_time);
    
    $this->db->where('notice_id', $notice_id);
    $this->db->where('user_id', $user_id);
    $this->db->where('table_name', $table_name);
    $this->db->where('advocate_id', $advocate_id);

    $result = $this->db->update('advocate_pulled_notice'); 
    return $result;

    }

    public function pulled_notice_list($advocate_user_id){

       $this->load->library('session');
       $this->db->select('*');
       $this->db->from('advocate_pulled_notice');
       $this->db->where('advocate_id',$advocate_user_id);
       $query = $this->db->get();
       $data  = $query->result();
       return $data;

    }

    public function uploadFinalNotice($data){

        $this->load->library('session');
        $final_notice       = $data['finalNotice'];
        $final_notice_time  = $data['final_notice_time'];
        $table_name   =  $data['table_name'];
        $notice_id    =  $data['notice_id'];
        $advocate_id  =  $data['advocate_id'];
        $user_id      =  $data['user_id'];
        $this->db->set('final_notice',$final_notice);
        $this->db->set('final_notice_time',$final_notice_time);
        $this->db->where('notice_id', $notice_id);
        $this->db->where('user_id', $user_id);
        $this->db->where('table_name', $table_name);
        $this->db->where('advocate_id', $advocate_id);

        $result = $this->db->update('advocate_pulled_notice'); 
        return $result;
    }

    public function uploadRecievedNote($data){

        $this->load->library('session');
        $recieved_note       = $data['recieved_note'];
        $recieved_note_time  = $data['recieved_note_time'];
        $table_name   =  $data['table_name'];
        $notice_id    =  $data['notice_id'];
        $advocate_id  =  $data['advocate_id'];
        $user_id      =  $data['user_id'];
        
        $this->db->set('recieved_note',$recieved_note);
        $this->db->set('recieved_note_time',$recieved_note_time);

        $this->db->where('notice_id', $notice_id);
        $this->db->where('user_id', $user_id);
        $this->db->where('table_name', $table_name);
        $this->db->where('advocate_id', $advocate_id);

        $result = $this->db->update('advocate_pulled_notice'); 
        return $result;

    }



}
?>