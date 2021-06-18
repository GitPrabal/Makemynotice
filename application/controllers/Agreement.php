<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agreement extends CI_Controller {

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

    public function agreementFinalSubmit(){

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('Employee_model');
        $this->load->model('Agreement_model');

        $this->load->helper('url');
        $this->load->helper('upload');

        $notice_initiated = $this->session->userdata('notice_initiated');
        $user_login      = $this->session->userdata('user_login');
        $session_user_id = $this->session->userdata('user_id');
       
        $uniqid = uniqid();
 
       $company_name    =  $_POST['company_name'];
       $address_company =  $_POST['address_company'];
       $purpose_anement =  $_POST['purpose_anement'];
       $term_agreement  =  $_POST['term_agreement'];
       $lock_period     =  $_POST['lock_period'];
       $jurisdiction    =  $_POST['jurisdiction'];
       $rent            =  $_POST['rent'];
       $deposit         =  $_POST['deposit'];

       $adhar_front_name  = $this->session->userdata('adhar_front_name');
       $adhar_back_name   = $this->session->userdata('adhar_back_name');

       if(isset($_FILES['adhar_copy']['name'])){
            $adhar_copy  =  uploadFiles($_FILES['adhar_copy']);
        }else{
            $adhar_copy = "";
        }


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

                $agreement_draft = array(

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
                    'company_name'             => $company_name, 
                    'address_company'          => $address_company,
                    'purpose_anement' => $purpose_anement,
                    'term_agreement'  => $term_agreement,
                    'lock_period'     => $lock_period,
                    'jurisdiction'    => $jurisdiction,
                    'rent'            => $rent,
                    'deposit'         => $deposit,
                    'adhar_copy'      => $adhar_copy

            );

            $userData = $this->Agreement_model->addAgreementDraftWithoutLogin($register,$agreement_draft);

                   if($userData){
                         echo  "1";
                    }
                    else{
                         echo "2";
                    }

            }else{

                  $agreement_draft = array(

                    'user_id'                  => $session_user_id,
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
                    'company_name'             => $company_name, 
                    'address_company'          => $address_company,
                    'purpose_anement' => $purpose_anement,
                    'term_agreement'  => $term_agreement,
                    'lock_period'     => $lock_period,
                    'jurisdiction'    => $jurisdiction,
                    'rent'            => $rent,
                    'deposit'         => $deposit,
                    'adhar_copy'      => $adhar_copy

            );


                 
                $userData = $this->Agreement_model->addAgreementDraftWithLogin($agreement_draft);

                 if($userData){
                     echo  "1";
                }
                else{
                     echo "2";
                }
         }
         
    }
     
}
