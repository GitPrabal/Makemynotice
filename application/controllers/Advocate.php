<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advocate extends CI_Controller {

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

    /* Send Replu Notice */

    

	public function index() {
        $this->load->view('Advocate/login');
    }


    public function new_notices_uploaded(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        $this->load->helper('url'); 

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }
            $new_notices_uploaded = $this->advocate_model->new_notices_uploaded();

            $new_notices_uploaded = array('new_notices_uploaded' => $new_notices_uploaded);
            $this->load->view('Advocate/header');
            $this->load->view('Advocate/sidebar');
            $this->load->view('Advocate/new_notices_uploaded',$new_notices_uploaded);
            $this->load->view('Advocate/footer');


    }

    public function advocate_pulled_notice_list(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        $this->load->helper('url'); 

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }
            $advocate_pulled_notice_list = $this->advocate_model->advocate_pulled_notice_list();

            $advocate_pulled_notice_list = array('advocate_pulled_notice_list' => $advocate_pulled_notice_list);

            $this->load->view('Advocate/header');
            $this->load->view('Advocate/sidebar');
            $this->load->view('Advocate/advocate_pulled_notice_list',$advocate_pulled_notice_list);
            $this->load->view('Advocate/modal');
            $this->load->view('Advocate/footer');
    }

  

    public function login(){

    	$this->load->model('admin_model');
        $this->load->model('advocate_model');
        $this->load->helper('url'); 
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        
        $result = $this->advocate_model->login($data);

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
        $this->load->view('Advocate/login',$data); 

    }

    public function advocate_home(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');
        $advocate_user_id = $this->session->userdata('advocate_user_id');

        $this->load->model('admin_model');
        $this->load->model('advocate_model');

        $newNoticeCount    = $this->advocate_model->newNoticeCount();
        $newNoticeCount    = $newNoticeCount["count"];
        $pulledNoticeCount = $this->advocate_model->pulledNoticeCount($advocate_user_id);
        $pulledNoticeCount    = $pulledNoticeCount["count"];

        $data = array( 'newNoticeCount' => $newNoticeCount , 'pulledNoticeCount' => $pulledNoticeCount );

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

            $this->load->view('Advocate/header');
            $this->load->view('Advocate/sidebar');
            $this->load->view('Advocate/advocate_home',$data);
            $this->load->view('Advocate/footer');

    }

    /**---------------------------------------- Employee ----------------------------- */


       public function pf_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        

        $pf_claim_list = $this->advocate_model->pf_claim_list();

        $advocate_user_id = $this->session->userdata('advocate_user_id');

        $pf_claim_list = array( 'pf_claim_list' => $pf_claim_list ,"advocate_user_id" =>$advocate_user_id);

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employee/pf_claim_list',$pf_claim_list);
        $this->load->view('Advocate/modal');


    }

    public function esi_claim_list(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');

        $esi_claim_list = $this->advocate_model->esi_claim_list();

        $esi_claim_list = array( 'esi_claim_list' => $esi_claim_list );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employee/esi_claim_list',$esi_claim_list);

    }

    public function salary_dues(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        $salary_dues = $this->advocate_model->salary_dues();

        $salary_dues = array( 'salary_dues' => $salary_dues );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employee/salary_dues',$salary_dues);


    }

    public function sexual_harrasment(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        $sexual_harrasment = $this->advocate_model->sexual_harrasment();

        $sexual_harrasment = array( 'sexual_harrasment' => $sexual_harrasment );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employee/sexual_harrasment',$sexual_harrasment);

    }

    public function voilation_aggrement(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        $voilation_aggrement = $this->advocate_model->voilation_aggrement();

        $voilation_aggrement = array( 'voilation_aggrement' => $voilation_aggrement );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employee/voilation_aggrement',$voilation_aggrement);

    }        


    public function gratuity_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        $gratuity_claim = $this->advocate_model->gratuity_claim();

        $gratuity_claim = array( 'gratuity_claim' => $gratuity_claim );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employee/gratuity_claim',$gratuity_claim);

    }

    public function wrongful_termination(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        
        $wrongful_termination = $this->advocate_model->wrongful_termination();

        $wrongful_termination = array( 'wrongful_termination' => $wrongful_termination );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employee/wrongful_termination',$wrongful_termination);

    }

    public function abuse_power_list(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        $abuse_power_list = $this->advocate_model->abuse_power_list();

        $abuse_power_list = array( 'abuse_power_list' => $abuse_power_list );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employee/abuse_power_list',$abuse_power_list);

    }

    public function non_payment_salary(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        $non_payment_salary = $this->advocate_model->non_payment_salary();

        $non_payment_salary = array( 'non_payment_salary' => $non_payment_salary );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employee/non_payment_salary',$non_payment_salary);
    }


    /*------------------------------- Employer  ------------------------------------ */


    public function misconduct_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');
        $misconduct_notice = $this->advocate_model->misconduct_notice();

        $misconduct_notice = array( 'misconduct_notice' => $misconduct_notice );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employer/misconduct_notice',$misconduct_notice);
    }

    public function suspension_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');

        $suspension_notice = $this->advocate_model->suspension_notice();

        $suspension_notice = array( 'suspension_notice' => $suspension_notice );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employer/suspension_notice',$suspension_notice);
    }

    public function termination_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $this->load->model('advocate_model');

        $termination_notice = $this->advocate_model->termination_notice();

        $termination_notice = array( 'termination_notice' => $termination_notice );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employer/termination_notice',$termination_notice);

    }

    public function retrenchment_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        
        $retrenchment_notice = $this->admin_model->retrenchment_notice();

        $retrenchment_notice = array( 'retrenchment_notice' => $retrenchment_notice );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Employer/retrenchment_notice',$retrenchment_notice);

    }

    /*--------------------------------- Rental Disputes  ---------------------- */


    public function lessor_dispute(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        
        $lessor_dispute = $this->admin_model->lessor_dispute();

        $lessor_dispute = array( 'lessor_dispute' => $lessor_dispute );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Rental_Disputes/lessor_dispute',$lessor_dispute);

    }


     public function termination_rental(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        $termination_rental = $this->admin_model->termination_rental();

        $termination_rental = array( 'termination_rental' => $termination_rental );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Rental_Disputes/termination_notice',$termination_rental);

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

    }


    /*--------------------------------- Insurance Disputes --------------------------------- */


    public function motor_vehicle_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        
        $motor_vehicle_claim = $this->admin_model->motor_vehicle_claim();

        $motor_vehicle_claim = array( 'motor_vehicle_claim' => $motor_vehicle_claim );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Insurance_Disputes/motor_vehicle_claim',$motor_vehicle_claim);


    }

    /*----------------------------------------- Bank Conflicts --------------------------------- */



    public function life_insurance_claim(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $life_insurance_claim = $this->admin_model->life_insurance_claim();

        $life_insurance_claim = array( 'life_insurance_claim' => $life_insurance_claim );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Insurance_Disputes/life_insurance_claim',$life_insurance_claim);

    }


    public function health_insurance(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $health_insurance = $this->admin_model->health_insurance();

        $health_insurance = array( 'health_insurance' => $health_insurance );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Insurance_Disputes/health_insurance',$health_insurance);

    }

    


    public function sarfaesi_notice(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $sarfaesi_notice = $this->admin_model->sarfaesi_notice();

        $sarfaesi_notice = array( 'sarfaesi_notice' => $sarfaesi_notice );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Bank_Conflicts/sarfaesi_notice',$sarfaesi_notice);

    }

    /*---------------------------------- Family Disputes ------------------- */

    public function divorce_application(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');
        
        $divorce_application = $this->admin_model->divorce_application();

        $divorce_application = array( 'divorce_application' => $divorce_application );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Family_Disputes/divorce_application',$divorce_application);

    }


    public function enroachment(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $enroachment = $this->admin_model->enroachment();

        $enroachment = array( 'enroachment' => $enroachment );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Revenue_Disputes/enroachment',$enroachment);

    }


    public function trespassing(){

        $this->load->library('session');
        $this->load->helper('url');
        $session_email = $this->session->userdata('email');

        if( !isset($session_email) ){

            $data = array('user_id'=>'');
            $this->load->view('Advocate/login',$data);
            return;
        }

        $this->load->model('admin_model');

        $trespassing = $this->admin_model->trespassing();

        $trespassing = array( 'trespassing' => $trespassing );

        $this->load->view('Advocate/header');
        $this->load->view('Advocate/sidebar');
        $this->load->view('Advocate/Revenue_Disputes/trespassing',$trespassing);

    }




}
