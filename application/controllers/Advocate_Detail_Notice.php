<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advocate_Detail_Notice extends CI_Controller {

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


   public function product_service(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Advocate_Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Advocate_Detail_Notice_model->product_service($id);

        

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>
           
           
            ';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$data['0']->address_defendant.'</td>
            </tr>

            <tr>
               <th>Service Provided</th>
               <td>'.$data['0']->service_provided.'</td>
            </tr>
          
            ';

            if ( strpos($data['0']->service_voucher_attachment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Service Voucher Attachment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->service_voucher_attachment.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Service Voucher Attachment</th></td>
               <td><img src="/notice_images/'.$data['0']->service_voucher_attachment.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->service_voucher_attachment.'" download>Download</a></td>
            </tr>';

            }


            if ( strpos($data['0']->other_attachment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Other Attachment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->other_attachment.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Other Attachment</th></td>
               <td><img src="/notice_images/'.$data['0']->other_attachment.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->other_attachment.'" download>Download</a></td>
            </tr>';

            }

            
           $rsultString .='

           <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>
            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;

   }


  public function lessor_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Advocate_Detail_Notice_model');

        $id =  $_POST["id"];

        $accidental_claim_list = $this->Detail_Notice_model->termination_rental($id);

        $target_file   = APPPATH."notice_images/consumer_notice/";
         

        echo  '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$accidental_claim_list['0']->first_name.' '.$accidental_claim_list['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$accidental_claim_list['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$accidental_claim_list['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer Pincode</th>
               <td>'.$accidental_claim_list['0']->dob.'</td>
            </tr>
            <tr>
               <th>Filled Date</th>
               <td>'.$accidental_claim_list['0']->added_on.'</td>
            </tr>
            <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src=../../notice_images/consumer_notice/'.$accidental_claim_list['0']->adhar_front.'></img></td>
               <td><a href="">Download</a></td>
            </tr>
            <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src=../../notice_images/consumer_notice/'.$accidental_claim_list['0']->adhar_back.'></img></td>
               <td><a href="">Download</a></td>
            </tr>
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>Company Name</th>
               <td>'.$accidental_claim_list['0']->company_name.'</td>
            </tr>
            
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$accidental_claim_list['0']->address_defendant.'</td>
            </tr>
            <tr>
               <th>Complaint</th>
               <td>'.$accidental_claim_list['0']->reason_termination.'</td>
            </tr>
            <tr>
               <th>Relief Required</th>
               <td>'.$accidental_claim_list['0']->relief.'</td>
            </tr>
            <tr>
               <th>Added Date</th>
               <td>'.$accidental_claim_list['0']->added_date.'</td>
            </tr>
              </table>';



  }

    public function termination_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->termination_notice($id);


         $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>
           
           
            ';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Name Of Employee</th>
               <td>'.$data['0']->employee_name.'</td>
            </tr>

            

            <tr>
               <th>Address Of Employee</th>
               <td>'.$data['0']->address_employee.'</td>
            </tr>
          
            ';

            if ( strpos($data['0']->employment_letter, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Agreement Attachment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Agreement Attachment</th></td>
               <td><img src="/notice_images/'.$data['0']->employment_letter.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
            </tr>';

            }

            
           $rsultString .='

           <tr>
               <th>Reason Of Termination</th>
               <td>'.$data['0']->reason_termination.'</td>
            </tr>
             <tr>
               <th>Date Of Termination</th>
               <td>'.$data['0']->date_termination.'</td>
            </tr>
             <tr>
               <th>Item Handed</th>
               <td>'.$data['0']->item_handed  .'</td>
            </tr>

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;



  }

  public function arbitration_rental(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->arbitration_notice($id);

         $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>
           
           
            ';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$data['0']->address_defendant.'</td>
            </tr>
          
            ';

            if ( strpos($data['0']->attachment_agreement, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Agreement Attachment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->attachment_agreement.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Agreement Attachment</th></td>
               <td><img src="/notice_images/'.$data['0']->attachment_agreement.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->attachment_agreement.'" download>Download</a></td>
            </tr>';

            }

             if ( strpos($data['0']->previous_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Previous Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->previous_notice.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Previous Notice</th></td>
               <td><img src="/notice_images/'.$data['0']->previous_notice.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->previous_notice.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='

           <tr>
               <th>Name</th>
               <td>'.$data['0']->name.'</td>
            </tr>
             <tr>
               <th>Position</th>
               <td>'.$data['0']->position.'</td>
            </tr>
             <tr>
               <th>Compaint</th>
               <td>'.$data['0']->compaint.'</td>
            </tr>

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
            

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;

  }

    public function accidental_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $accidental_claim_list = $this->Detail_Notice_model->accidental_claim_list_by_id($id);

        $target_file   = APPPATH."notice_images/consumer_notice/";

         

        echo  '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$accidental_claim_list['0']->first_name.' '.$accidental_claim_list['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$accidental_claim_list['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$accidental_claim_list['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer Pincode</th>
               <td>'.$accidental_claim_list['0']->dob.'</td>
            </tr>
            <tr>
               <th>Filled Date</th>
               <td>'.$accidental_claim_list['0']->added_on.'</td>
            </tr>
            <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src=../../notice_images/consumer_notice/'.$accidental_claim_list['0']->adhar_front.'></img></td>
               <td><a href="">Download</a></td>
            </tr>
            <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src=../../notice_images/consumer_notice/'.$accidental_claim_list['0']->adhar_back.'></img></td>
               <td><a href="">Download</a></td>
            </tr>
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>Company Name</th>
               <td>'.$accidental_claim_list['0']->company_name.'</td>
            </tr>
            
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$accidental_claim_list['0']->address_defendant.'</td>
            </tr>
            <tr>
               <th>Accident Type</th>
               <td>'.$accidental_claim_list['0']->accident_type.'</td>
            </tr>
            <tr>
               <th>Date Of Accident</th>
               <td>'.$accidental_claim_list['0']->date_accident.'</td>
            </tr>
            <tr>
               <th>Complaint</th>
               <td>'.$accidental_claim_list['0']->complaint.'</td>
            </tr>
            <tr>
               <th>Relief Required</th>
               <td>'.$accidental_claim_list['0']->relief.'</td>
            </tr>
            <tr>
               <th>Added Date</th>
               <td>'.$accidental_claim_list['0']->added_date.'</td>
            </tr>
              </table>'; 

    }          


    public function pf_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Advocate_Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Advocate_Detail_Notice_model->pfNoticeDetail($id);

        $rsultString = "";

        $rsultString .=  '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';
             if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }


            $rsultString .='

        
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>PF Office</th>
               <td>'.$data['0']->pf_office.'</td>
            </tr>
            
            <tr>
               <th>Address Of Office</th>
               <td>'.$data['0']->address_office.'</td>
            </tr>
            <tr>
               <th>PF Complaint</th>
               <td>'.$data['0']->pf_complaint.'</td>
            </tr>';

            if ( strpos($data['0']->communication_attachment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->communication_attachment.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->communication_attachment.'" height="20" width="20" id="communication_attachment" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->communication_attachment.'" download>Download</a></td>
            </tr>';

            }

            if ( !empty($data['0']->query)  ){ 

              $rsultString .='

              <tr>
                 <th>Query</th></td>
                 <td>'.$data['0']->query.'</td>
              </tr>';

            }

            $rsultString .=

            '
            <tr>
               <th>Relief Required</th>
               <td>'.$data['0']->relief.'</td>
            </tr>
            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>

              <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';
         echo $rsultString;

    }

    public function esi_claim(){


       $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Advocate_Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Advocate_Detail_Notice_model->esiClaimList($id);


        $target_file   = APPPATH."notice_images/consumer_notice/";

        $rsultString = "";

        

        $rsultString .=  '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';
             if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
             <tr>
               <th>Local Office</th>
               <td>'.$data['0']->local_esi_office.'</td>
            </tr>
              
            <tr>
               <th>Address Office</th>
               <td>'.$data['0']->address_office.'</td>
            </tr>

            <tr>
               <th>ESI Compaint</th>
               <td>'.$data['0']->esi_complaint.'</td>
            </tr>';

            if ( strpos($data['0']->communication_attachment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->communication_attachment.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->communication_attachment.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->communication_attachment.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
            <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>
            <tr>
               <th>Relief Required</th>
               <td>'.$data['0']->relief.'</td>
            </tr>
            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>

              <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';
          }

         $rsultString .=' </table>';
         echo $rsultString;
    }

    public function salary_dues(){

       $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->salary_dues($id);


        $target_file   = APPPATH."notice_images/consumer_notice/";

        $rsultString = "";


        $rsultString .=  '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

             if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString  .='
         
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
             <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
              
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$data['0']->address_defendant.'</td>
            </tr>

            <tr>
               <th>Date Of Employment</th>
               <td>'.$data['0']->date_emp.'</td>
            </tr>';

             if ( strpos($data['0']->salary_slip, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Salary Attachment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->salary_slip.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Salary Attachment</th></td>
               <td><img src="/notice_images/'.$data['0']->salary_slip.'" height="20" width="20" id="salary_slip" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->salary_slip.'" download>Download</a></td>
            </tr>';

            }



         if ( strpos($data['0']->communication_attachment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->communication_attachment.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->communication_attachment.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->communication_attachment.'" download>Download</a></td>
            </tr>';

            }
            

            $rsultString .='
          
            <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>
            <tr>
               <th>Relief Required</th>
               <td>'.$data['0']->relief.'</td>
            </tr>
            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>

               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';
              echo  $rsultString;

    }

    public function harrashment(){

       $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->sexual_harrashment($id);


        $target_file   = APPPATH."notice_images/consumer_notice/";

        $rsultString = "";


        $rsultString .=  '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

             if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';
            
            }

            $rsultString .= '
          
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
             <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
              
            <tr>
               <th>Defendant Name</th>
               <td>'.$data['0']->defendant_name.'</td>
            </tr>

            <tr>
               <th>Defendant Designation</th>
               <td>'.$data['0']->defendant_designation.'</td>
            </tr>';

             if ( strpos($data['0']->complaint_harrashment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Harrasment Attachment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->complaint_harrashment.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Harrasment Attachment</th></td>
               <td><img src="/notice_images/'.$data['0']->complaint_harrashment.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->complaint_harrashment.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
            
            <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>
            <tr>
               <th>Relief Required</th>
               <td>'.$data['0']->relief.'</td>
            </tr>
            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>
               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';

          echo  $rsultString;

    }

    public function voilation_aggrement(){

       $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->voilation_aggrement($id);

        //echo "<pre>";print_r($data);die;


        $target_file   = APPPATH."notice_images/consumer_notice/";

        $rsultString = "";

        $rsultString .=  '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';
             if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

             if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='

              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
             <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
              
            <tr>
               <th>Address Of Company</th>
               <td>'.$data['0']->address_company.'</td>
            </tr>

            <tr>
               <th>Date Of Employment</th>
               <td>'.$data['0']->date_employment.'</td>
            </tr>';

            if ( strpos($data['0']->aggrement_employment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->aggrement_employment.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->aggrement_employment.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->aggrement_employment.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
            
            <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>
            <tr>
               <th>Relief Required</th>
               <td>'.$data['0']->relief.'</td>
            </tr>
            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>
               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';

              echo  $rsultString;

    }




    public function suspension_notice(){

       $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->suspension_list($id);


         $target_file   = "../../notice_images/consumer_notice/";

         $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

         if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }


            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Back Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
            
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Name Of Employee</th>
               <td>'.$data['0']->employee_name.'</td>
            </tr>

            <tr>
               <th>Address Of Employee</th>
               <td>'.$data['0']->address_employee.'</td>
            </tr>

             <tr>
               <th>Duration Of Suspension</th>
               <td>'.$data['0']->duration_suspension.'</td>
            </tr>

             <tr>
               <th>Reason Of Suspension</th>
               <td>'.$data['0']->reason_suspension.'</td>
            </tr>
            
             <tr>
               <th>Reprimondent Advice</th>
               <td>'.$data['0']->reprimondent.'</td>
            </tr>

            ';

            if ( strpos($data['0']->employment_letter, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Employment Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->employment_letter.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Employment Letter</th></td>
               <td><img src="/notice_images/'.$data['0']->employment_letter.'" height="20" width="20" id="employment_letter" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>
               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';
         echo  $rsultString;

    }





    public function gratuity_claim(){

       $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->gratuity_claim($id);
        $target_file   = "../../notice_images/consumer_notice/";

        $rsultString = "";


        $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

         if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }


            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Back Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
            
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Address Of Company</th>
               <td>'.$data['0']->address_company.'</td>
            </tr>

            <tr>
               <th>Gratuity Calculation</th>
               <td>'.$data['0']->gratuity_calculation.'</td>
            </tr>';

            if ( strpos($data['0']->employment_letter, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Employment Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->employment_letter.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Employment Letter</th></td>
               <td><img src="/notice_images/'.$data['0']->employment_letter.'" height="20" width="20" id="employment_letter" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
            </tr>';

            }


              if ( strpos($data['0']->relieving_letter, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Relieving Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->relieving_letter.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Relieving Letter</th></td>
               <td><img src="/notice_images/'.$data['0']->relieving_letter.'" height="20" width="20" id="relieving_letter" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->relieving_letter.'" download>Download</a></td>
            </tr>';

            }


            if ( strpos($data['0']->communication_attachment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Communication Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->communication_attachment.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Communication Letter</th></td>
               <td><img src="/notice_images/'.$data['0']->communication_attachment.'" height="20" width="20" id="communication_attachment" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->communication_attachment.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
             <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>
               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';

         echo  $rsultString;

    }
   


    public function abuse_power(){

       $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->abuse_power($id);
        $target_file   = "../../notice_images/consumer_notice/";

        $rsultString = "";

       

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Address Of Company</th>
               <td>'.$data['0']->address_company.'</td>
            </tr>';

             if ( strpos($data['0']->employment_letter, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Employment Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Employment Letter</th>
               <td><img src="/notice_images/'.$data['0']->employment_letter.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
            </tr>';

            }

          
            
           $rsultString .='
             <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>
               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';
          }

         $rsultString .=' </table>';
         echo $rsultString;

    }


    public function non_payment_salary(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->non_payment_salary($id);


        $rsultString = "";

       

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Address Of Company</th>
               <td>'.$data['0']->address_company.'</td>
            </tr>';

             if ( strpos($data['0']->employment_letter, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Employment Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Employment Letter</th>
               <td><img src="/notice_images/'.$data['0']->employment_letter.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->bank_statement, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Employment Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->bank_statement.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Employment Letter</th>
               <td><img src="/notice_images/'.$data['0']->bank_statement.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->bank_statement.'" download>Download</a></td>
            </tr>';

            }


            if ( strpos($data['0']->communication, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Employment Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->communication.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Employment Letter</th>
               <td><img src="/notice_images/'.$data['0']->communication.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->communication.'" download>Download</a></td>
            </tr>';

            }

          
            
           $rsultString .='
           
            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>

               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';

          echo $rsultString;

    }

    public function agreement_draft(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->agreement_draft($id);


        $rsultString = "";

       

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Address Of Company</th>
               <td>'.$data['0']->address_company.'</td>
            </tr>

             <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Purpose Of Anement</th>
               <td>'.$data['0']->purpose_anement.'</td>
            </tr>

            <tr>
               <th>Term Of Agreement</th>
               <td>'.$data['0']->term_agreement.'</td>
            </tr>

            <tr>
               <th>Lock In Period</th>
               <td>'.$data['0']->lock_period.'</td>
            </tr>

             <tr>
               <th>Jurisdiction</th>
               <td>'.$data['0']->jurisdiction.'</td>
            </tr>

            <tr>
               <th>Financial Rent</th>
               <td>'.$data['0']->rent.'</td>
            </tr>

            <tr>
               <th>Financial Deposit</th>
               <td>'.$data['0']->deposit.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_copy, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_copy.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_copy.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_copy.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>
               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';
         echo $rsultString;

    }

    public function wrongful_termination(){


       $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->wrongful_termination($id);



        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Address Of Company</th>
               <td>'.$data['0']->address_company.'</td>
            </tr>

             <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Ground Termination</th>
               <td>'.$data['0']->ground_termination.'</td>
            </tr>

         
            <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>';

            if ( strpos($data['0']->employment_letter, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Employment Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Employment Letter</th></td>
               <td><img src="/notice_images/'.$data['0']->employment_letter.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>
               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';
         echo $rsultString;

    }

    public function motor_vehicle_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->motor_vehicle_claim($id);



        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Insurer Name</th>
               <td>'.$data['0']->insurer_name.'</td>
            </tr>
            <tr>
               <th>Address Of Company</th>
               <td>'.$data['0']->address_company.'</td>
            </tr>';

            if ( strpos($data['0']->insurance_copy, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Insurance Copy</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->insurance_copy.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Insurance Copy</th></td>
               <td><img src="/notice_images/'.$data['0']->insurance_copy.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->insurance_copy.'" download>Download</a></td>
            </tr>';

            }


             if ( strpos($data['0']->proof_payment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Proof Of Payment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->proof_payment.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Proof Of Payment</th></td>
               <td><img src="/notice_images/'.$data['0']->proof_payment.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->proof_payment.'" download>Download</a></td>
            </tr>';

            }

             if ( strpos($data['0']->communication, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Communication Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->communication.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Communication Letter</th></td>
               <td><img src="/notice_images/'.$data['0']->communication.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->communication.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='

            <tr>
               <th>Issue</th>
               <td>'.$data['0']->issue.'</td>
            </tr>
             <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>
               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';
         echo $rsultString;


    }


    public function life_insurance_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->life_insurance_claim($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Insurer Name</th>
               <td>'.$data['0']->insurer_name.'</td>
            </tr>
            <tr>
               <th>Address Of Company</th>
               <td>'.$data['0']->address_company.'</td>
            </tr>';

            if ( strpos($data['0']->insurance_copy, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Insurance Copy</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->insurance_copy.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Insurance Copy</th></td>
               <td><img src="/notice_images/'.$data['0']->insurance_copy.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->insurance_copy.'" download>Download</a></td>
            </tr>';

            }


             if ( strpos($data['0']->proof_payment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Proof Of Payment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->proof_payment.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Proof Of Payment</th></td>
               <td><img src="/notice_images/'.$data['0']->proof_payment.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->proof_payment.'" download>Download</a></td>
            </tr>';

            }

             if ( strpos($data['0']->communication, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Communication Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->communication.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Communication Letter</th></td>
               <td><img src="/notice_images/'.$data['0']->communication.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->communication.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='

            <tr>
               <th>Issue</th>
               <td>'.$data['0']->issue.'</td>
            </tr>
             <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>

               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';


              echo $rsultString;


    }


    public function health_insurance(){


           $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->health_insurance($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Insurer Name</th>
               <td>'.$data['0']->insurer_name.'</td>
            </tr>
            <tr>
               <th>Address Of Company</th>
               <td>'.$data['0']->address_company.'</td>
            </tr>';

            if ( strpos($data['0']->insurance_copy, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Insurance Copy</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->insurance_copy.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Insurance Copy</th></td>
               <td><img src="/notice_images/'.$data['0']->insurance_copy.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->insurance_copy.'" download>Download</a></td>
            </tr>';

            }


             if ( strpos($data['0']->disputed_bill, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Disputed Bill</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->disputed_bill.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Disputed Bill</th></td>
               <td><img src="/notice_images/'.$data['0']->disputed_bill.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->disputed_bill.'" download>Download</a></td>
            </tr>';

            }

             if ( strpos($data['0']->communication, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Communication Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->communication.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Communication Letter</th></td>
               <td><img src="/notice_images/'.$data['0']->communication.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->communication.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='

            <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>
             <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;

    }
   
   

   public function sarfaesi_notice(){


        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->sarfaesi_notice($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Branch Name</th>
               <td>'.$data['0']->branch_name.'</td>
            </tr>
            <tr>
               <th>Address Of Bank</th>
               <td>'.$data['0']->address_bank.'</td>
            </tr>';

            if ( strpos($data['0']->sarfaesi_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Insurance Copy</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->sarfaesi_notice.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Insurance Copy</th></td>
               <td><img src="/notice_images/'.$data['0']->sarfaesi_notice.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->sarfaesi_notice.'" download>Download</a></td>
            </tr>';

            }


             if ( strpos($data['0']->reply_notices, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Disputed Bill</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->reply_notices.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Disputed Bill</th></td>
               <td><img src="/notice_images/'.$data['0']->reply_notices.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->reply_notices.'" download>Download</a></td>
            </tr>';

            }

            
           $rsultString .='

            <tr>
               <th>Contention</th>
               <td>'.$data['0']->contention.'</td>
            </tr>
            

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;

   }

   public function title_deed(){


        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->title_deed($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Defendant Name</th>
               <td>'.$data['0']->defendant_name.'</td>
            </tr>
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$data['0']->address_defendant.'</td>
            </tr>';

            if ( strpos($data['0']->title_deed, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Insurance Copy</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->title_deed.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Insurance Copy</th></td>
               <td><img src="/notice_images/'.$data['0']->title_deed.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->title_deed.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='
           
            <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
            

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;

   }

   public function encroachment(){


        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->encroachment($id);


        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Defendant Name</th>
               <td>'.$data['0']->defendant_name.'</td>
            </tr>
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$data['0']->address_defendant.'</td>
            </tr>';

            if ( strpos($data['0']->title_deed, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Insurance Copy</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->title_deed.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Insurance Copy</th></td>
               <td><img src="/notice_images/'.$data['0']->title_deed.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->title_deed.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='
           
            <th>Detail Of Property Encroachment</th>
               <td>'.$data['0']->propert_encroached.'</td>
            </tr>

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
            

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;

   }

   public function trespassing(){


        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->trespassing($id);


        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Defendant Name</th>
               <td>'.$data['0']->defendant_name.'</td>
            </tr>
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$data['0']->address_defendant.'</td>
            </tr>

            <tr>
               <th>Nature Of Trespassing</th>
               <td>'.$data['0']->nature_trespassing.'</td>
            </tr>

            <tr>
               <th>Property To Which Trespassing Occured</th>
               <td>'.$data['0']->trespassing_occured.'</td>
            </tr>

            

            ';

            if ( strpos($data['0']->title_deed, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Insurance Copy</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->title_deed.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Insurance Copy</th></td>
               <td><img src="/notice_images/'.$data['0']->title_deed.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->title_deed.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='
           
            <th>Detail Of Trespassing</th>
               <td>'.$data['0']->detail_trespassing.'</td>
            </tr>

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
            

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;

   }
   
   public function administration(){


        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->administration($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Defendant Name</th>
               <td>'.$data['0']->department_name.'</td>
            </tr>
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$data['0']->address_department.'</td>
            </tr>';

            if ( strpos($data['0']->communication, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Insurance Copy</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->communication.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Insurance Copy</th></td>
               <td><img src="/notice_images/'.$data['0']->communication.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->communication.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='
           
            <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
            

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;

   }

   public function divorce_application(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->divorce_application($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Name Of Spouse</th>
               <td>'.$data['0']->name_spouse.'</td>
            </tr>
            <tr>
               <th>Address Of Spouse</th>
               <td>'.$data['0']->address_spouse.'</td>
            </tr>
            <tr>
               <th>Reason Of Divoce</th>
               <td>'.$data['0']->reason_divorce.'</td>
            </tr>
            ';

            if ( strpos($data['0']->marriage, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Marriage Proof</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->marriage.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Marriage Proof</th></td>
               <td><img src="/notice_images/'.$data['0']->marriage.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->marriage.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
            

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;

   }

   public function lessor_dispute(){


        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->lessor_dispute($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>
            <tr>
               <th>Complaint Basic</th>
               <td>'.$data['0']->complainant_basic.'</td>
            </tr>
            <tr>
               <th>Detail Of Complaint Basic</th>
               <td>'.$data['0']->details_complainant_basic.'</td>
            </tr>
            ';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$data['0']->address_defendant.'</td>
            </tr>
          
            ';

            if ( strpos($data['0']->aggreement_attachment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Agreement Attachment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->aggreement_attachment.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Agreement Attachment</th></td>
               <td><img src="/notice_images/'.$data['0']->aggreement_attachment.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->aggreement_attachment.'" download>Download</a></td>
            </tr>';

            }

             if ( strpos($data['0']->previous_attachment, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Previous Attachment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->previous_attachment.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Previous Attachment</th></td>
               <td><img src="/notice_images/'.$data['0']->previous_attachment.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->previous_attachment.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='

           <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
            

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;
   }

   public function termination_rental(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->termination_rental($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>
           
           
            ';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$data['0']->address_defendant.'</td>
            </tr>
          
            ';

            if ( strpos($data['0']->attachment_agreement, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Agreement Attachment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->attachment_agreement.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Agreement Attachment</th></td>
               <td><img src="/notice_images/'.$data['0']->attachment_agreement.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->attachment_agreement.'" download>Download</a></td>
            </tr>';

            }

             if ( strpos($data['0']->previous_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Previous Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->previous_notice.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Previous Notice</th></td>
               <td><img src="/notice_images/'.$data['0']->previous_notice.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->previous_notice.'" download>Download</a></td>
            </tr>';

            }
            
           $rsultString .='

           <tr>
               <th>Reason Of Termination</th>
               <td>'.$data['0']->reason_termination.'</td>
            </tr>

            <tr>
               <th>Relief</th>
               <td>'.$data['0']->relief.'</td>
            </tr>

            <tr>
            

            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;
   }

   public function delay_in_construction(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->delay_in_constuction($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>
           
           
            ';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
           
              
              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Address Of Defendant</th>
               <td>'.$data['0']->address_defendant.'</td>
            </tr>

            <tr>
               <th>Detail Of Project</th>
               <td>'.$data['0']->details_project.'</td>
            </tr>
          
            ';

            if ( strpos($data['0']->attachment_agreement, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Agreement Attachment</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->attachment_agreement.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Agreement Attachment</th></td>
               <td><img src="/notice_images/'.$data['0']->attachment_agreement.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->attachment_agreement.'" download>Download</a></td>
            </tr>';

            }

            
           $rsultString .='

           <tr>
               <th>Complaint</th>
               <td>'.$data['0']->complaint.'</td>
            </tr>
            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;

   }

   public function misconduct_notice(){


        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Advocate_Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Advocate_Detail_Notice_model->misconduct_list($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>
           
           
            ';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">

              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Name Of Employee</th>
               <td>'.$data['0']->employee_name.'</td>
            </tr>
            <tr>
               <th>Address Of Employee</th>
               <td>'.$data['0']->address_employee.'</td>
            </tr>
            <tr>
               <th>Type Of Misconduct</th>
               <td>'.$data['0']->type_misconduct.'</td>
            </tr>
            <tr>
               <th>Details Of Misconduct</th>
               <td>'.$data['0']->details_misconduct.'</td>
            </tr>

            ';

            if ( strpos($data['0']->employment_letter, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Employment Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Employment Letter</th></td>
               <td><img src="/notice_images/'.$data['0']->employment_letter.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
            </tr>';

            }

            
           $rsultString .='

           <tr>
               <th>Reprimand Advice</th>
               <td>'.$data['0']->reprimand_advice.'</td>
            </tr>
            <tr>
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>

               <center><h3>Other Details</h3></center>

               <table class="table table-bordered table-striped" style="overflow:scroll">';

          if ( !empty($data['0']->reply_notice) ) {

             if ( strpos($data['0']->reply_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Advocate Reply</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->reply_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td><img src="/reply_images/'.$data['0']->reply_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->reply_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Advocate Reply</th></td>
               <td>No Reply Yet</td>
            </tr>';

          }

           if ( !empty($data['0']->query) ) {

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>'.$data['0']->query.'</td>
            </tr>';

          }else{

             $rsultString .='

              <tr>
               <th>Query By User</th></td>
               <td>No Query Raised</td>
            </tr>';

          }


      if ( !empty($data['0']->final_notice) ) {

          if ( strpos($data['0']->final_notice, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Final Notice</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->final_notice.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td><img src="/reply_images/'.$data['0']->final_notice.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->final_notice.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Final Notice</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }


  if ( !empty($data['0']->recieved_note) ) {

      if ( strpos($data['0']->recieved_note, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Recieved Note</th></td>
                 <td>PDF File</td>
                 <td><a href="/reply_images/'.$data['0']->recieved_note.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td><img src="/reply_images/'.$data['0']->recieved_note.'" height="20" width="20" style="cursor:pointer;" ></img></td>
               <td><a href="/reply_images/'.$data['0']->recieved_note.'" download>Download</a></td>
            </tr>';

            }

          }else{

             $rsultString .='

              <tr>
               <th>Recieved Note</th></td>
               <td>No Notice Yet</td>
            </tr>';

          }

         $rsultString .=' </table>';


              echo $rsultString;

   }


   public function retrenchment_notice(){


           $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('Detail_Notice_model');

        $id =  $_POST["id"];

        $data = $this->Detail_Notice_model->retrenchment_notice($id);

        $rsultString = "";

         $rsultString .= '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>First Name</th>
               <td>'.$data['0']->first_name.' '.$data['0']->last_name.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$data['0']->email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$data['0']->phone.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->dob.'</td>
            </tr>
            <tr>
               <th>Consumer DOB</th>
               <td>'.$data['0']->pincode.'</td>
            </tr>
             <tr>
               <th>Consumer State</th>
               <td>'.$data['0']->state.'</td>
            </tr>
             <tr>
               <th>Consumer Address</th>
               <td>'.$data['0']->address.'</td>
            </tr>
           
           
            ';

            if ( strpos($data['0']->adhar_front, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_front.'" download >Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_front.'" height="20" width="20" id="adhar_back" style="cursor:pointer;" ></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_front.'" download>Download</a></td>
            </tr>';

            }

            if ( strpos($data['0']->adhar_back, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Aadhar Front Side</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Aadhar Front Side</th></td>
               <td><img src="/notice_images/'.$data['0']->adhar_back.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->adhar_back.'" download>Download</a></td>
            </tr>';

            }

            $rsultString .='
           
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">

              <tr>
               <th>Company Name</th>
               <td>'.$data['0']->company_name.'</td>
            </tr>
            <tr>
               <th>Name Of Employee</th>
               <td>'.$data['0']->employee_name.'</td>
            </tr>
            <tr>
               <th>Address Of Employee</th>
               <td>'.$data['0']->address_employee.'</td>
            </tr>
            <tr>
               <th>Retrenchment Reason</th>
               <td>'.$data['0']->retrenchment_reason.'</td>
            </tr>
            <tr>
               <th>Compensation</th>
               <td>'.$data['0']->compensation.'</td>
            </tr>
            <tr>
               <th>Item Handed</th>
               <td>'.$data['0']->item_handed.'</td>
            </tr>

            ';

            if ( strpos($data['0']->employment_letter, "pdf") == true  ){ 

              $rsultString .='

              <tr>
                 <th>Employment Letter</th></td>
                 <td>PDF File</td>
                 <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
              </tr>';

            }else{

              $rsultString .='

              <tr>
               <th>Employment Letter</th></td>
               <td><img src="/notice_images/'.$data['0']->employment_letter.'" height="20" width="20"></img></td>
               <td><a href="/notice_images/'.$data['0']->employment_letter.'" download>Download</a></td>
            </tr>';

            }

            
           $rsultString .='
               <th>Added Date</th>
               <td>'.$data['0']->added_date.'</td>
            </tr>
              </table>';
              echo $rsultString;



   }





}



    

