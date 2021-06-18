<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function index() {
        $this->load->view('Admin/login');
    }

    public function divorce_application(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        
        $divorce_application = $this->admin_model->divorce_application();

        $divorce_application = array( 'divorce_application' => $divorce_application );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Family_Disputes/divorce_application',$divorce_application);
        $this->load->view('Admin/footer');


    }

    public function retrenchment_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        
        $retrenchment_notice = $this->admin_model->retrenchment_notice();

        $retrenchment_notice = array( 'retrenchment_notice' => $retrenchment_notice );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employer/retrenchment_notice',$retrenchment_notice);
        $this->load->view('Admin/footer');

    }


    public function motor_vehicle_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        
        $motor_vehicle_claim = $this->admin_model->motor_vehicle_claim();

        $motor_vehicle_claim = array( 'motor_vehicle_claim' => $motor_vehicle_claim );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Insurance_Disputes/motor_vehicle_claim',$motor_vehicle_claim);
        $this->load->view('Admin/footer');
    }

    public function wrongful_termination(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        
        $wrongful_termination = $this->admin_model->wrongful_termination();

        $wrongful_termination = array( 'wrongful_termination' => $wrongful_termination );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employee/wrongful_termination',$wrongful_termination);
        $this->load->view('Admin/footer');
    }

    public function agreement_draft(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $agreement_draft = $this->admin_model->agreement_draft();

        $agreement_draft = array( 'agreement_draft' => $agreement_draft );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Agreement/agreement_draft',$agreement_draft);
        $this->load->view('Admin/footer');
    }

    public function non_payment_salary(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $non_payment_salary = $this->admin_model->non_payment_salary();

        $non_payment_salary = array( 'non_payment_salary' => $non_payment_salary );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employee/non_payment_salary',$non_payment_salary);
        $this->load->view('Admin/footer');
    }

    public function abuse_power_list(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $abuse_power_list = $this->admin_model->abuse_power_list();

        $abuse_power_list = array( 'abuse_power_list' => $abuse_power_list );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employee/abuse_power_list',$abuse_power_list);
        $this->load->view('Admin/footer');
    }

    public function arbitration_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $arbitration_notice = $this->admin_model->arbitration_notice();

        $arbitration_notice = array( 'arbitration_notice' => $arbitration_notice );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Rental_Disputes/arbitration_notice',$arbitration_notice);
        $this->load->view('Admin/footer');
    }

    public function gratuity_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $gratuity_claim = $this->admin_model->gratuity_claim();

        $gratuity_claim = array( 'gratuity_claim' => $gratuity_claim );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employee/gratuity_claim',$gratuity_claim);
        $this->load->view('Admin/footer');


    }

    public function termination_rental(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $termination_rental = $this->admin_model->termination_rental();

        $termination_rental = array( 'termination_rental' => $termination_rental );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Rental_Disputes/termination_notice',$termination_rental);
        $this->load->view('Admin/footer');
    }

    public function lessor_dispute(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $lessor_dispute = $this->admin_model->lessor_dispute();

        $lessor_dispute = array( 'lessor_dispute' => $lessor_dispute );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Rental_Disputes/lessor_dispute',$lessor_dispute);
        $this->load->view('Admin/footer');


    }

    public function accidental_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $accidental_claim_list = $this->admin_model->accidental_claim_list();

        $consumerList = array( 'accidental_claim_list' => $accidental_claim_list );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/accidental_claim_list',$consumerList);
        $this->load->view('Admin/footer');
    }

    public function advocate(){

        $this->load->library('session');
        $this->load->helper('url');

        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }
       

        $this->load->model('admin_model');

        $advocateList = $this->admin_model->advocateList();

        $data = array(
            'advocateList'=>$advocateList
        );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/advocate',$data);

    }

    public function login(){

    	$this->load->model('admin_model');
        $this->load->helper('url'); 
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        
        $result = $this->admin_model->login($data);

        if($result){
           echo $result;
        }else{
            $result  = array("msg"=>"Invalid Credentials","status"=>"300");
            $result  = json_encode($result);
            echo $result;
        }

    }

    public function logout(){

        $this->load->library('session');
        $this->load->helper('url');
      
        $this->session->sess_destroy();
        $data =array();
        $data['user_id'] = '';
        $this->load->view('Admin/login',$data); 

    }

    public function adminHome(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');
        if( !isset($session_email) ){
            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/admin_home');
        $this->load->view('Admin/footer');

    }

    public function userList(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $userList = $this->admin_model->userList();

        $data = array(
            'userList'=>$userList
        );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/user_list',$data);
        $this->load->view('Admin/footer');


    }

    public function consumer_list(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){
            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $consumerList = $this->admin_model->consumerList();
        $consumerList = array( 'consumerList' => $consumerList );
        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/consumer_list',$consumerList);
        $this->load->view('Admin/footer');

    }

    public function addAdvocateData(){


        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $this->load->helper('url');

        $certificate  =  $this->uploadFiles($_FILES['certificate']);

        $unique_id = uniqid();

        
        $data = array(

            'advocate_user_id' => $unique_id,
            'first_name'      => $_POST['name'],
            'email'           => $_POST['email'],
            'phone'           => $_POST['phone'],
            'password'        => $_POST['advocatePass'],
            'gender'          => $_POST['advocateGender'],
            'registration_no' => $_POST['registrationNumber'],
            'certificate'     => $certificate
        );

        $result = $this->admin_model->addAdvocateData($data);

        if($result){
           echo $result;
        }else{
           echo  "2";
        }

    }


    public function advocateList(){

        $this->load->library('session');
        $this->load->database();
        $userid  = $this->session->userdata('email');
        if($userid!=''){

        $this->load->model('admin_model');

        $advocateList = $this->admin_model->advocateList();


        $data = array(
            'advocateList'=>$advocateList
            );

        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('Admin/advocate' , $data);
     
       } else{
        $this->load->view('login');
       }

    }


    public function consumerNoticeDetails(){

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $advocateList = $this->admin_model->consumerList();

        echo  '<table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>Consumer Name</th>
               <td>'.$advocateList['0']->consumer_name.' '.$advocateList['0']->consumer_lname.'</td>
            </tr>
            <tr>
               <th>Last Name</th>
               <td>'.$advocateList['0']->consumer_lname.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$advocateList['0']->consumer_email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$advocateList['0']->consumer_phone.'</td>
            </tr>
            <tr>
               <th>Consumer Pincode</th>
               <td>'.$advocateList['0']->consumer_pincode.'</td>
            </tr>
            <tr>
               <th>Consumer State</th>
               <td>'.$advocateList['0']->consumer_state.'</td>
            </tr>
            <tr>
               <th>Consumer Address</th>
               <td>'.$advocateList['0']->consumer_address.'</td>
            </tr>
            <tr>
               <th>Filled Date</th>
               <td>'.$advocateList['0']->added_date.'</td>
            </tr>
            <tr>
               <th>Aadhar Front Side</th></td>
               <td><a href=../../notice_images/consumer_notice/'.$advocateList['0']->aadhar_front.'?file=pdffilename>Download</a></td>
            </tr>
              </table>

              <center><h3>Defendant Details</h3></center>

              <table class="table table-bordered table-striped" style="overflow:scroll">
            <tr>
               <th>Consumer Name</th>
               <td>'.$advocateList['0']->consumer_name.' '.$advocateList['0']->consumer_lname.'</td>
            </tr>
            <tr>
               <th>Last Name</th>
               <td>'.$advocateList['0']->consumer_lname.'</td>
            </tr>
            <tr>
               <th>Email</th>
               <td>'.$advocateList['0']->consumer_email.'</td>
            </tr>
            <tr>
               <th>Consumer Phone</th>
               <td>'.$advocateList['0']->consumer_phone.'</td>
            </tr>
            <tr>
               <th>Consumer Pincode</th>
               <td>'.$advocateList['0']->consumer_pincode.'</td>
            </tr>
            <tr>
               <th>Consumer State</th>
               <td>'.$advocateList['0']->consumer_state.'</td>
            </tr>
            <tr>
               <th>Consumer Address</th>
               <td>'.$advocateList['0']->consumer_address.'</td>
            </tr>
              </table>

              '; 

    }



    public function pf_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $pf_claim_list = $this->admin_model->pf_claim_list();

        $pf_claim_list = array( 'pf_claim_list' => $pf_claim_list );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employee/pf_claim_list',$pf_claim_list);
        $this->load->view('Admin/footer');
    }

    public function esi_claim_list(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $esi_claim_list = $this->admin_model->esi_claim_list();

        $esi_claim_list = array( 'esi_claim_list' => $esi_claim_list );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employee/esi_claim_list',$esi_claim_list);
        $this->load->view('Admin/footer');

    }

    public function salary_dues(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $salary_dues = $this->admin_model->salary_dues();

        $salary_dues = array( 'salary_dues' => $salary_dues );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employee/salary_dues',$salary_dues);
        $this->load->view('Admin/footer');


    }

    public function sexual_harrasment(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $sexual_harrasment = $this->admin_model->sexual_harrasment();

        $sexual_harrasment = array( 'sexual_harrasment' => $sexual_harrasment );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employee/sexual_harrasment',$sexual_harrasment);
        $this->load->view('Admin/footer');

    }

    public function voilation_aggrement(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $voilation_aggrement = $this->admin_model->voilation_aggrement();

        $voilation_aggrement = array( 'voilation_aggrement' => $voilation_aggrement );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employee/voilation_aggrement',$voilation_aggrement);
        $this->load->view('Admin/footer');

    }


    public function delay_constuction(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $delay_constuction = $this->admin_model->delay_constuction();

        $delay_constuction = array( 'delay_constuction' => $delay_constuction );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Rental_Disputes/delay_in_construction',$delay_constuction);
        $this->load->view('Admin/footer');

    }


    public function suspension_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $suspension_list = $this->admin_model->suspension_list();

        $suspension_list = array( 'suspension_list' => $suspension_list );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employer/suspension_list',$suspension_list);
        $this->load->view('Admin/footer');

    }

    public function misconduct_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $misconduct_list = $this->admin_model->misconduct_list();

        $misconduct_list = array( 'misconduct_list' => $misconduct_list );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employer/misconduct_notice',$misconduct_list);
        $this->load->view('Admin/footer');


    }

     public function termination_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $termination_notice = $this->admin_model->termination_notice();

        $termination_notice = array( 'termination_notice' => $termination_notice );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Employer/termination_notice',$termination_notice);
        $this->load->view('Admin/footer');


    }

    public function life_insurance_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $life_insurance_claim = $this->admin_model->life_insurance_claim();

        $life_insurance_claim = array( 'life_insurance_claim' => $life_insurance_claim );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Insurance_Disputes/life_insurance_claim',$life_insurance_claim);
        $this->load->view('Admin/footer');

    }

    public function health_insurance(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $health_insurance = $this->admin_model->health_insurance();

        $health_insurance = array( 'health_insurance' => $health_insurance );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Insurance_Disputes/health_insurance',$health_insurance);
        $this->load->view('Admin/footer');

    }

    public function sarfaesi_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $sarfaesi_notice = $this->admin_model->sarfaesi_notice();

        $sarfaesi_notice = array( 'sarfaesi_notice' => $sarfaesi_notice );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Bank_Conflicts/sarfaesi_notice',$sarfaesi_notice);
        $this->load->view('Admin/footer');

    }

    public function title_deed(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $title_deed = $this->admin_model->title_deed();

        $title_deed = array( 'title_deed' => $title_deed );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Revenue_Disputes/title_deed',$title_deed);
        $this->load->view('Admin/footer');

    }

    public function enroachment(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $enroachment = $this->admin_model->enroachment();

        $enroachment = array( 'enroachment' => $enroachment );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Revenue_Disputes/enroachment',$enroachment);
        $this->load->view('Admin/footer');

    }

    public function trespassing(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $trespassing = $this->admin_model->trespassing();

        $trespassing = array( 'trespassing' => $trespassing );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Revenue_Disputes/trespassing',$trespassing);
        $this->load->view('Admin/footer');

    }

    public function administration(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Admin/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $administration = $this->admin_model->administration();

        $administration = array( 'administration' => $administration );

        $this->load->view('Admin/header');
        $this->load->view('Admin/sidebar');
        $this->load->view('Admin/Revenue_Disputes/administration',$administration);
        $this->load->view('Admin/footer');

    }

     public function uploadFiles($data){

            $str  = microtime();
            $str  = str_replace(' ','',$str);
            $name = str_replace('.','',$str);
            $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
            $imageName = $name;
            $result =   move_uploaded_file($data["tmp_name"],"advocate_certificate/".$imageName.".".$extension);
            return $adhar_back_name =  $imageName.".".$extension;
    }









}
