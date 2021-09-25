<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_Disputes extends CI_Controller {

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


    /*-------------------------------- Health Insurance Claim ------------------------ */

    public function health_insurance_basic_details(){

          $this->load->helper('url');

        $this->load->library('session');
        $this->session->unset_userdata('notice_initiated');

        $user_login = $this->session->userdata('user_login');

        if( $user_login ){

            $data = array('user_id' => $this->session->userdata('user_id'));
            $this->load->view('Headers/login_header');
            $this->load->view('Insurance_Disputes/health_insurance_basic_details', $data);

        }else{

            $this->session->sess_destroy();
            $this->load->view('Headers/header');
            $this->load->view('Insurance_Disputes/health_insurance_basic_details');

        }


    }

    public function health_insurance_defendant(){

        $this->load->model('user_model');
        $this->load->helper('url');
        $this->load->library('session');

        $notice_initiated = $this->session->userdata('notice_initiated');

        $user_login = $this->session->userdata('user_login');

        if( $user_login ){

             $session_user_id = $this->session->userdata('user_id');

             if( !isset($notice_initiated) || ($notice_initiated == "0") ){

                $data = array('user_id' => $this->session->userdata('user_id'));
                $this->load->view('Headers/login_header');
                $this->load->view('Insurance_Disputes/health_insurance_defendant',$data);
                return;
            }else{

                $userData = $this->user_model->retriveUserData($session_user_id);
                $data =  array( 'data' => $userData );
                $this->load->view('Headers/login_header');
                $this->load->view('Insurance_Disputes/health_insurance_defendant',$data);
            }

        }else{

            $session_user_id = $this->session->userdata('user_id');

            if( !isset($notice_initiated) || empty($notice_initiated) ){

                $data = array('user_id' => $this->session->userdata('user_id'));
                $this->load->view('Headers/header');
                $this->load->view('Insurance_Disputes/life_insurance_claim_basic_details',$data);
                return;
            }else{

                $userData = $this->user_model->retriveUserData($session_user_id);
                $data =  array( 'data' => $userData );
                $this->load->view('Headers/header');
                $this->load->view('Insurance_Disputes/health_insurance_defendant',$data);

            }

         }

    }


    public function add_health_insurance_defendant(){


          $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('Employee_model');
        $this->load->model('Insurance_Disputes_model');

        $this->load->helper('url');
        $notice_initiated = $this->session->userdata('notice_initiated');
        $user_login      = $this->session->userdata('user_login');
        $session_user_id = $this->session->userdata('user_id');
       
        $uniqid = uniqid();



        if(isset($_FILES['insurance_copy']['name'])){

            $insurance_copy  =  $this->uploadFiles($_FILES['insurance_copy']);

        }else{

            $insurance_copy = "";
        }

        if(isset($_FILES['document']['name'])){

            $disputed_bill  =  $this->uploadFiles($_FILES['document']);

        }else{

            $disputed_bill = "";
        }


         if(isset($_FILES['communication']['name'])){

            $communication  =  $this->uploadFiles($_FILES['communication']);

        }else{

            $communication = "";
        }

     
 
        $insurer_name    = $_POST['insurer_name'];
        $address_company = $_POST['address_company'];
        $complaint       = $_POST['complaint'];
        $relief          = $_POST['relief'];


        $adhar_front_name    = $this->session->userdata('adhar_front_name');
        $adhar_back_name     = $this->session->userdata('adhar_back_name');

        if( !$user_login ){

                $register = array(

                    'user_id'    => $uniqid,
                    'first_name' => $_SESSION['basic_details']['fname'],
                    'last_name'  => $_SESSION['basic_details']['lname'],
                    'email'      => $_SESSION['basic_details']['email'],
                    'phone'      => $_SESSION['basic_details']['phone'],
                    'password'   => '123456',
                    'dob'        => $_SESSION['basic_details']['dob'],
                    'age'        => '',
                    'gender'     => '',
                    'adhar_front'=> $adhar_front_name,
                    'adhar_back' => $adhar_back_name

                );

                $health_insurance = array(

                    'user_id'           => $uniqid,
                    'first_name'        => $_SESSION['basic_details']['fname'],
                    'last_name'         => $_SESSION['basic_details']['lname'],
                    'dob'               => $_SESSION['basic_details']['dob'],
                    'email'             => $_SESSION['basic_details']['email'],
                    'phone'             => $_SESSION['basic_details']['phone'],
                    'pincode'           => $_SESSION['basic_details']['pincode'],
                    'state'             => $_SESSION['basic_details']['state'],
                    'address'           => $_SESSION['basic_details']['address'],
                    'adhar_front'       => $adhar_front_name,
                    'adhar_back'        => $adhar_back_name,
                    'insurer_name'      => $insurer_name, 
                    'address_company'   => $address_company,
                    'insurance_copy'    => $insurance_copy,
                    'disputed_bill'     => $disputed_bill,
                    'communication'     => $communication,
                    'complaint'         => $complaint,
                    'relief'            => $relief

            );

            $userData = $this->Insurance_Disputes_model->addHealthInsuranceClaimWithoutLogin($register,$health_insurance);

                   if($userData){
                         echo  "1";
                    }
                    else{
                         echo "2";
                    }

            }else{

            $health_insurance = array(

                    'user_id'                  => $session_user_id,
                    'first_name'               => $_SESSION['basic_details']['fname'],
                    'last_name'                => $_SESSION['basic_details']['lname'],
                    'dob'                      => $_SESSION['basic_details']['dob'],
                    'email'                    => $_SESSION['basic_details']['email'],
                    'phone'                    => $_SESSION['basic_details']['phone'],
                    'pincode'                  => $_SESSION['basic_details']['pincode'],
                    'state'                    => $_SESSION['basic_details']['state'],
                    'address'                  => $_SESSION['basic_details']['address'],
                    'adhar_front'              => $adhar_front_name,
                    'adhar_back'               => $adhar_back_name,
                    'insurer_name'             => $insurer_name, 
                    'address_company'          => $address_company,
                    'insurance_copy'           => $insurance_copy,
                    'disputed_bill'     => $disputed_bill,
                    'communication'     => $communication,
                    'complaint'         => $complaint,
                    'relief'            => $relief

            );
                 
                $userData = $this->Insurance_Disputes_model->addHealthInsuranceClaimWithLogin($health_insurance);

                 if($userData){
                     echo  "1";
                }
                else{
                     echo "2";
                }
         }


    }

    /*-------------------------- Life Insurance Claim --------------------------------- */


    public function addLifeInsurance(){

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('Employee_model');
        $this->load->model('Insurance_Disputes_model');
        $this->load->helper('url');
        $this->load->helper('upload');

        $insurer_name = $_POST['insurer_name'];
        $address_insurer =$_POST['address_insurer'];
        $issue = $_POST['issue'];
        $relief = $_POST['relief'];

        $notice_initiated = $this->session->userdata('notice_initiated');
        $user_login      = $this->session->userdata('user_login');
        $session_user_id = $this->session->userdata('user_id');
       
        $uniqid = uniqid();

        if(isset($_FILES['insurance_policy']['name'])){
            $insurance_policy  =  uploadFiles($_FILES['insurance_policy']);
        }else{
            $insurance_policy = "";
        }

        if(isset($_FILES['insurance_premium']['name'])){
            $insurance_premium  =  uploadFiles($_FILES['insurance_premium']);
        }else{
            $insurance_premium = "";
        }

        if(isset($_FILES['communication']['name'])){
            $communication  =  uploadFiles($_FILES['communication']);
        }else{
            $communication = "";
        }

        if(isset($_FILES['necessary_doc']['name'])){
            $document  =  uploadFiles($_FILES['necessary_doc']);
        }else{
            $document = "";
        }

        $adhar_front_name    = $this->session->userdata('adhar_front_name');
        $adhar_back_name     = $this->session->userdata('adhar_back_name');

        if( !$user_login ){

                $register = array(

                    'user_id'    => $uniqid,
                    'first_name' => $_SESSION['basic_details']['firstname'],
                    'last_name'  => $_SESSION['basic_details']['lastname'],
                    'email'      => $_SESSION['basic_details']['email'],
                    'phone'      => $_SESSION['basic_details']['phone'],
                    'password'   => '123456',
                    'dob'        => $_SESSION['basic_details']['dob'],
                    'age'        => '',
                    'gender'     => '',
                    'adhar_front'=> $adhar_front_name,
                    'adhar_back' => $adhar_back_name

                );

                $life_insurance = array(

                    'user_id'        => $uniqid,
                    'first_name'     => $_SESSION['basic_details']['firstname'],
                    'last_name'      => $_SESSION['basic_details']['lastname'],
                    'dob'            => $_SESSION['basic_details']['dob'],
                    'email'          => $_SESSION['basic_details']['email'],
                    'phone'          => $_SESSION['basic_details']['phone'],
                    'pincode'        => $_SESSION['basic_details']['pincode'],
                    'state'          => $_SESSION['basic_details']['state'],
                    'address'        => $_SESSION['basic_details']['address'],
                    'adhar_front'    => $adhar_front_name,
                    'adhar_back'     => $adhar_back_name,
                    'insurer_name'   => $insurer_name, 
                    'address_company'=> $address_insurer,
                    'insurance_copy' => $insurance_policy,
                    'proof_payment' => $insurance_premium,
                    'document'      =>  $document,
                    'communication' => $communication,
                    'issue'         => $issue,
                    'relief'        => $relief

            );

            $userData = $this->Insurance_Disputes_model->addLifeInsuranceClaimWithoutLogin($register,$life_insurance);

                   if($userData){
                         echo  "1";
                    }
                    else{
                         echo "2";
                    }

            }else{

                $life_insurance = array(

                    'user_id'        => $session_user_id,
                    'first_name'     => $_SESSION['basic_details']['firstname'],
                    'last_name'      => $_SESSION['basic_details']['lastname'],
                    'dob'            => $_SESSION['basic_details']['dob'],
                    'email'          => $_SESSION['basic_details']['email'],
                    'phone'          => $_SESSION['basic_details']['phone'],
                    'pincode'        => $_SESSION['basic_details']['pincode'],
                    'state'          => $_SESSION['basic_details']['state'],
                    'address'        => $_SESSION['basic_details']['address'],
                    'adhar_front'    => $adhar_front_name,
                    'adhar_back'     => $adhar_back_name,
                    'insurer_name'   => $insurer_name, 
                    'address_company'=> $address_insurer,
                    'insurance_copy' => $insurance_policy,
                    'proof_payment' => $insurance_premium,
                    'document'      =>  $document,
                    'communication' => $communication,
                    'issue'         => $issue,
                    'relief'        => $relief

            );
                 
                $userData = $this->Insurance_Disputes_model->addHealthInsuranceClaimWithLogin($life_insurance);

                 if($userData){
                     echo  "1";
                }
                else{
                     echo "2";
                }
         }

}



    /*********** -----------------------  Motor Vehicle Claim ----------------------------- */







    public function motorFinal(){

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('Employee_model');
        $this->load->model('Insurance_Disputes_model');
        $this->load->helper('url');
        $this->load->helper('upload');

        $insurer_name = $_POST['insurer_name'];
        $address_insurer =$_POST['address_insurer'];
        $issue = $_POST['issue'];
        $relief = $_POST['relief'];

        $notice_initiated = $this->session->userdata('notice_initiated');
        $user_login      = $this->session->userdata('user_login');
        $session_user_id = $this->session->userdata('user_id');
       
        $uniqid = uniqid();

        if(isset($_FILES['insurance_policy']['name'])){

            $insurance_policy  =  uploadFiles($_FILES['insurance_policy']);

        }else{

            $insurance_policy = "";
        }

        if(isset($_FILES['insurance_premium']['name'])){

            $insurance_premium  =  uploadFiles($_FILES['insurance_premium']);


        }else{

            $insurance_premium = "";
        }

        if(isset($_FILES['communication']['name'])){

            $communication  =  uploadFiles($_FILES['communication']);

        }else{

            $communication = "";
        }

        $adhar_front_name    = $this->session->userdata('adhar_front_name');
        $adhar_back_name     = $this->session->userdata('adhar_back_name');

        if( !$user_login ){

                $register = array(

                    'user_id'    => $uniqid,
                    'first_name' => $_SESSION['basic_details']['firstname'],
                    'last_name'  => $_SESSION['basic_details']['lastname'],
                    'email'      => $_SESSION['basic_details']['email'],
                    'phone'      => $_SESSION['basic_details']['phone'],
                    'password'   => '123456',
                    'dob'        => $_SESSION['basic_details']['dob'],
                    'age'        => '',
                    'gender'     => '',
                    'adhar_front'=> $adhar_front_name,
                    'adhar_back' => $adhar_back_name

                );

                $motor_vehicle_claim = array(

                    'user_id'                  => $uniqid,
                    'first_name'               => $_SESSION['basic_details']['firstname'],
                    'last_name'                => $_SESSION['basic_details']['lastname'],
                    'dob'                      => $_SESSION['basic_details']['dob'],
                    'email'                    => $_SESSION['basic_details']['email'],
                    'phone'                    => $_SESSION['basic_details']['phone'],
                    'pincode'                  => $_SESSION['basic_details']['pincode'],
                    'state'                    => $_SESSION['basic_details']['state'],
                    'address'                  => $_SESSION['basic_details']['address'],
                    'adhar_front'              => $adhar_front_name,
                    'adhar_back'               => $adhar_back_name,
                    'insurer_name'             => $insurer_name, 
                    'address_company'          => $address_insurer,
                    'insurance_copy'           => $insurance_policy,
                    'proof_payment' => $insurance_premium,
                    'communication' => $communication,
                    'issue'         => $issue,
                    'relief'        => $relief

            );

            $userData = $this->Insurance_Disputes_model->addMotorVehicleClaimWithoutLogin($register,$motor_vehicle_claim);

                   if($userData){
                         echo  "1";
                    }
                    else{
                         echo "2";
                    }

            }else{

                $motor_vehicle_claim = array(

                    'user_id'                  => $uniqid,
                    'first_name'               => $_SESSION['basic_details']['firstname'],
                    'last_name'                => $_SESSION['basic_details']['lastname'],
                    'dob'                      => $_SESSION['basic_details']['dob'],
                    'email'                    => $_SESSION['basic_details']['email'],
                    'phone'                    => $_SESSION['basic_details']['phone'],
                    'pincode'                  => $_SESSION['basic_details']['pincode'],
                    'state'                    => $_SESSION['basic_details']['state'],
                    'address'                  => $_SESSION['basic_details']['address'],
                    'adhar_front'              => $adhar_front_name,
                    'adhar_back'               => $adhar_back_name,
                    'insurer_name'             => $insurer_name, 
                    'address_company'          => $address_insurer,
                    'insurance_copy'           => $insurance_policy,
                    'proof_payment' => $insurance_premium,
                    'communication' => $communication,
                    'issue'         => $issue,
                    'relief'        => $relief

            );


                 
                $userData = $this->Insurance_Disputes_model->addMotorVehicleClaimWithLogin($motor_vehicle_claim);

                 if($userData){
                     echo  "1";
                }
                else{
                     echo "2";
                }
         }

    }


}



    

    