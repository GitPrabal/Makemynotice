<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pulled_Notice extends CI_Controller {



	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

 public function uploadFiles($data){

            $str  = microtime();
            $str  = str_replace(' ','',$str);
            $name = str_replace('.','',$str);
            $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
            $imageName = $name;
            $result =   move_uploaded_file($data["tmp_name"],"reply_images/".$imageName.".".$extension);
            return $adhar_back_name =  $imageName.".".$extension;
}

public function sendReplyNotice(){

      date_default_timezone_set('Asia/Kolkata');

      $this->load->library('session');
      $this->load->helper('url');
      $this->load->database();

      $this->load->model('Pulled_Notice_model');

      echo  "<pre>";print_r($_POST);
      echo  "----------";
      echo "<pre>";print_r($_FILES);
      die;

      $advocate_user_id = $this->session->userdata('advocate_user_id');
      $table_name       = $_POST['table_name'];
      $user_id          = $_POST['user_id'];
      $notice_id        = $_POST['notice_id'];

      $reply  =  $this->uploadFiles($_FILES['replyNoticeAttachment']);

      $reply_date       = date("d-m-Y"); 
      $reply_time       = date("h:i:s a");

      $reply =  array(

        'user_id'     => $user_id,
        'advocate_id' => $advocate_user_id,
        'notice_id'   => $notice_id,
        'table_name'  => $table_name,
        'reply'       => $reply,
        'reply_date'  => $reply_date,
        'reply_time'  => $reply_time

        );
      
      $result = $this->Pulled_Notice_model->sendReplyNotice($reply);

      echo $result;
}   

public function pull_notice(){

        date_default_timezone_set('Asia/Kolkata');

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');


        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('Pulled_Notice_model');

        $advocate_user_id = $this->session->userdata('advocate_user_id');


        $notice_id         = $_POST["notice_id"];
        $table_name        = $_POST["table_name"];
        $user_id           = $_POST["user_id"];
        $pulled_date       = date("d-m-Y"); 
        $pulled_time       = date("h:i:s a");

        $post              =  array(

            'user_id'      => $user_id,
            'advocate_id'  => $advocate_user_id,
            'notice_id'    => $notice_id,
            'table_name'   => $table_name,
            'pulled_date'  => $pulled_date,
            'pulled_time'  => $pulled_time

        );



        $pull_notice = $this->Pulled_Notice_model->pull_notice($advocate_user_id,$post);

        return $pull_notice;

    }

    public function pulled_notice_list(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email    = $this->session->userdata('email');
        $advocate_user_id = $this->session->userdata('advocate_user_id');
        $this->load->model('Pulled_Notice_model');
        $pull_notice_list = $this->Pulled_Notice_model->pulled_notice_list($advocate_user_id);

        $notice_id =  array();

        $pull_notice_list = array( 'pull_notice_list' => $pull_notice_list );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/pull_notice_list',$pull_notice_list);

    }

    public function uploadFinalNotice(){

        date_default_timezone_set('Asia/Kolkata');

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');
        $advocate_user_id = $this->session->userdata('advocate_user_id');
        

        $final_notice_time = date("d-m-Y h:i:s a");

        $finalNotice    =  $this->uploadFiles($_FILES['finalNotice']);

        $this->load->model('Pulled_Notice_model');

        $post           =  array(

            'user_id'           => $_POST['user_id'],
            'advocate_id'       => $advocate_user_id,
            'notice_id'         => $_POST['notice_id'],
            'table_name'        => $_POST['table_name'],
            'finalNotice'       => $finalNotice,
            'final_notice_time' => $final_notice_time
        );

         $uploadFinalNotice = $this->Pulled_Notice_model->uploadFinalNotice($post);

         echo  $uploadFinalNotice;

    }


    public function uploadRecievedNote(){

        date_default_timezone_set('Asia/Kolkata');

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');
        $recieved_note_time = date("d-m-Y h:i:s a");
        $recieved_note    =  $this->uploadFiles($_FILES['recievedNote']);
        $advocate_user_id = $this->session->userdata('advocate_user_id');

        $this->load->model('Pulled_Notice_model');

        $post           =  array(

            'user_id'            => $_POST['user_id'],
            'advocate_id'        => $advocate_user_id,
            'notice_id'          => $_POST['notice_id'],
            'table_name'         => $_POST['table_name'],
            'recieved_note'      => $recieved_note,
            'recieved_note_time' => $recieved_note_time
        );

         $uploadRecievedNote = $this->Pulled_Notice_model->uploadRecievedNote($post);
         echo  $uploadRecievedNote;

    }



       
}



    

