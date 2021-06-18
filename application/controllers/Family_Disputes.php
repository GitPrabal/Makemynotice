<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Family_Disputes extends CI_Controller {




    public function divorceFinalSubmit(){

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('Family_Disputes_model');
        $this->load->helper('url');
        $notice_initiated = $this->session->userdata('notice_initiated');
        $user_login      = $this->session->userdata('user_login');
        $session_user_id = $this->session->userdata('user_id');
       
        $uniqid = uniqid();

         if(isset($_FILES['marriage']['name'])){
            $marriage  =  $this->uploadFiles($_FILES['marriage']);
        }else{
            $marriage = "";
        }

        if(isset($_FILES['audioFile']['name'])){
            $audioFile  =  $this->uploadFiles($_FILES['audioFile']);
        }else{
            $audioFile = "";
        }

        $name_spouse       = $_POST['name_spouse'];
        $address_spouse    = $_POST['address_spouse'];
        $reason_divorce    = $_POST['reason_divorce'];
        $relief            = $_POST['relief'];

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

                $divorce_application = array(

                    'user_id'            => $uniqid,
                    'first_name'         => $_SESSION['basic_details']['firstname'],
                    'last_name'          => $_SESSION['basic_details']['lastname'],
                    'dob'                => $_SESSION['basic_details']['dob'],
                    'email'              => $_SESSION['basic_details']['email'],
                    'phone'              => $_SESSION['basic_details']['phone'],
                    'pincode'            => $_SESSION['basic_details']['pincode'],
                    'state'              => $_SESSION['basic_details']['state'],
                    'address'            => $_SESSION['basic_details']['address'],
                    'adhar_front'        => $adhar_front_name,
                    'adhar_back'         => $adhar_back_name,
                    'name_spouse'        => $name_spouse, 
                    'address_spouse'     => $address_spouse,
                    'reason_divorce'     => $reason_divorce,
                    'relief'             => $relief,
                    'marriage'           => $marriage,
                    'audio_file'        =>  $audioFile


            );

            $userData = $this->Family_Disputes_model->addDivorceWithoutLogin($register,$divorce_application);

                   if($userData){
                         echo  "1";
                    }
                    else{
                         echo "2";
                    }

            }else{

            $divorce_application = array(

                    'user_id'            => $session_user_id,
                    'first_name'         => $_SESSION['basic_details']['firstname'],
                    'last_name'          => $_SESSION['basic_details']['lastname'],
                    'dob'                => $_SESSION['basic_details']['dob'],
                    'email'              => $_SESSION['basic_details']['email'],
                    'phone'              => $_SESSION['basic_details']['phone'],
                    'pincode'            => $_SESSION['basic_details']['pincode'],
                    'state'              => $_SESSION['basic_details']['state'],
                    'address'            => $_SESSION['basic_details']['address'],
                    'adhar_front'        => $adhar_front_name,
                    'adhar_back'         => $adhar_back_name,
                    'name_spouse'        => $name_spouse, 
                    'address_spouse'     => $address_spouse,
                    'reason_divorce'     => $reason_divorce,
                    'relief'             => $relief,
                    'marriage'           => $marriage,
                    'audio_file'        =>  $audioFile

            );
                $userData = $this->Family_Disputes_model->addDivorceWithLogin($divorce_application);

                 if($userData){
                     echo  "1";
                }
                else{
                     echo "2";
                }
         }

    }


    public function trespassing_defendant(){

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
                $this->load->view('Revenue_Disputes/trespassing_basic',$data);
                return;
            }else{
                $userData = $this->user_model->retriveUserData($session_user_id);
                $data =  array( 'data' => $userData );
                $this->load->view('Headers/login_header');
                $this->load->view('Revenue_Disputes/trespassing_defendant',$data);
            }

        }else{

            $session_user_id = $this->session->userdata('user_id');

            if( !isset($notice_initiated) || empty($notice_initiated) ){

                $data = array('user_id' => $this->session->userdata('user_id'));
                $this->load->view('Headers/header');
                $this->load->view('Revenue_Disputes/trespassing_basic',$data);
                return;
            }else{

                $userData = $this->user_model->retriveUserData($session_user_id);
                $data =  array( 'data' => $userData );
                $this->load->view('Headers/header');
                $this->load->view('Revenue_Disputes/trespassing_defendant',$data);

            }

         }

    }

    public function add_trespassing_defendant(){

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('Revenue_Disputes_model');
        $this->load->helper('url');
        $notice_initiated = $this->session->userdata('notice_initiated');
        $user_login      = $this->session->userdata('user_login');
        $session_user_id = $this->session->userdata('user_id');
       
        $uniqid = uniqid();

         if(isset($_FILES['title_deed']['name'])){
            $title_deed  =  $this->uploadFiles($_FILES['title_deed']);
        }else{
            $title_deed = "";
        }

        if(isset($_FILES['audio_file']['name'])){
            $audioFile  =  $this->uploadFiles($_FILES['audio_file']);
        }else{
            $audioFile = "";
        }
     
        $defendant_name      = $_POST['defendant_name'];
        $address_defendant   = $_POST['address_defendant'];
        $nature_trespassing  = $_POST['nature_trespassing'];
        $trespassing_occured = $_POST['trespassing_occured'];
        $detail_trespassing  = $_POST['detail_trespassing'];
        $relief              = $_POST['relief'];

        $adhar_front_name   = $this->session->userdata('adhar_front_name');
        $adhar_back_name    = $this->session->userdata('adhar_back_name');

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

                $trespassing = array(

                    'user_id'             => $uniqid,
                    'first_name'          => $_SESSION['basic_details']['firstname'],
                    'last_name'           => $_SESSION['basic_details']['lastname'],
                    'dob'                 => $_SESSION['basic_details']['dob'],
                    'email'               => $_SESSION['basic_details']['email'],
                    'phone'               => $_SESSION['basic_details']['phone'],
                    'pincode'             => $_SESSION['basic_details']['pincode'],
                    'state'               => $_SESSION['basic_details']['state'],
                    'address'             => $_SESSION['basic_details']['address'],
                    'adhar_front'         => $adhar_front_name,
                    'adhar_back'          => $adhar_back_name,
                    'defendant_name'      => $defendant_name, 
                    'address_defendant'   => $address_defendant,
                    'nature_trespassing'  => $nature_trespassing,
                    'trespassing_occured' => $trespassing_occured,
                    'detail_trespassing'  => $detail_trespassing,
                    'title_deed'          => $title_deed,
                    'relief'              => $relief,
                    'audio_file'        =>  $audioFile

            );


            $userData = $this->Revenue_Disputes_model->addTrespassingWithoutLogin($register,$trespassing);

                   if($userData){
                         echo  "1";
                    }
                    else{
                         echo "2";
                    }

            }else{

            $trespassing = array(

                    'user_id'            => $uniqid,
                    'first_name'         => $_SESSION['basic_details']['firstname'],
                    'last_name'          => $_SESSION['basic_details']['lastname'],
                    'dob'                => $_SESSION['basic_details']['dob'],
                    'email'              => $_SESSION['basic_details']['email'],
                    'phone'              => $_SESSION['basic_details']['phone'],
                    'pincode'            => $_SESSION['basic_details']['pincode'],
                    'state'              => $_SESSION['basic_details']['state'],
                    'address'            => $_SESSION['basic_details']['address'],
                    'adhar_front'        => $adhar_front_name,
                    'adhar_back'         => $adhar_back_name,
                    'defendant_name'     => $defendant_name, 
                    'address_defendant'  => $address_defendant,
                    'property_trespassing' => $property_trespassing,
                    'detail_property_trespassing' => $detail_property_trespassing,
                    'title_deed'         => $title_deed,
                    'relief'             => $relief,
                    'audio_file'        =>  $audioFile

            );

                $userData = $this->Revenue_Disputes_model->addTrespassingWithLogin($trespassing);

                 if($userData){
                     echo  "1";
                }
                else{
                     echo "2";
                }
         }


    }

    /*--------------------------------- Administration  ------------------------------- */

    public function administration_basic(){

        $this->load->helper('url');
        $this->load->library('session');
        $this->session->unset_userdata('notice_initiated');

        $user_login = $this->session->userdata('user_login');

        if( $user_login ){

            $data = array('user_id' => $this->session->userdata('user_id'));
            $this->load->view('Headers/login_header');
            $this->load->view('Revenue_Disputes/administration_basic', $data);

        }else{

            $this->session->sess_destroy();
            $this->load->view('Headers/header');
            $this->load->view('Revenue_Disputes/administration_basic');
        }

    }


    public function administration_defendant(){

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
                $this->load->view('Revenue_Disputes/administration_basic',$data);
                return;
            }else{

                $userData = $this->user_model->retriveUserData($session_user_id);
                $data =  array( 'data' => $userData );
                $this->load->view('Headers/login_header');
                $this->load->view('Revenue_Disputes/administration_defendant',$data);
            }

        }else{

            $session_user_id = $this->session->userdata('user_id');

            if( !isset($notice_initiated) || empty($notice_initiated) ){

                $data = array('user_id' => $this->session->userdata('user_id'));
                $this->load->view('Headers/header');
                $this->load->view('Revenue_Disputes/administration_basic',$data);
                return;
            }else{

                $userData = $this->user_model->retriveUserData($session_user_id);
                $data =  array( 'data' => $userData );
                $this->load->view('Headers/header');
                $this->load->view('Revenue_Disputes/administration_defendant',$data);

            }

         }

    }

    public function add_administration_defendant(){

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('Revenue_Disputes_model');
        $this->load->helper('url');
        $notice_initiated = $this->session->userdata('notice_initiated');
        $user_login      = $this->session->userdata('user_login');
        $session_user_id = $this->session->userdata('user_id');
       
        $uniqid = uniqid();

         if(isset($_FILES['communication']['name'])){
            $communication  =  $this->uploadFiles($_FILES['communication']);
        }else{
            $communication = "";
        }

        if(isset($_FILES['audioFile']['name'])){
            $audioFile  =  $this->uploadFiles($_FILES['audioFile']);
        }else{
            $audioFile = "";
        }
     
        $department_name      = $_POST['department_name'];
        $address_department   = $_POST['address_department'];
        $complaint            = $_POST['complaint'];
        $relief               = $_POST['relief'];

        $adhar_front_name   = $this->session->userdata('adhar_front_name');
        $adhar_back_name    = $this->session->userdata('adhar_back_name');

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

                $administration = array(

                    'user_id'             => $uniqid,
                    'first_name'          => $_SESSION['basic_details']['firstname'],
                    'last_name'           => $_SESSION['basic_details']['lastname'],
                    'dob'                 => $_SESSION['basic_details']['dob'],
                    'email'               => $_SESSION['basic_details']['email'],
                    'phone'               => $_SESSION['basic_details']['phone'],
                    'pincode'             => $_SESSION['basic_details']['pincode'],
                    'state'               => $_SESSION['basic_details']['state'],
                    'address'             => $_SESSION['basic_details']['address'],
                    'adhar_front'         => $adhar_front_name,
                    'adhar_back'          => $adhar_back_name,
                    'department_name'     => $department_name, 
                    'address_department'  => $address_department,
                    'complaint'           => $complaint,
                    'relief'              => $relief,
                    'communication'       => $communication,
                    'audio_file'        =>  $audioFile
            );

            $userData = $this->Revenue_Disputes_model->addAdministrationWithoutLogin($register,$administration);
                   if($userData){
                         echo  "1";
                    }
                    else{
                         echo "2";
                    }

            }else{

           $administration = array(

                    'user_id'             => $uniqid,
                    'first_name'          => $_SESSION['basic_details']['firstname'],
                    'last_name'           => $_SESSION['basic_details']['lastname'],
                    'dob'                 => $_SESSION['basic_details']['dob'],
                    'email'               => $_SESSION['basic_details']['email'],
                    'phone'               => $_SESSION['basic_details']['phone'],
                    'pincode'             => $_SESSION['basic_details']['pincode'],
                    'state'               => $_SESSION['basic_details']['state'],
                    'address'             => $_SESSION['basic_details']['address'],
                    'adhar_front'         => $adhar_front_name,
                    'adhar_back'          => $adhar_back_name,
                    'department_name'     => $department_name, 
                    'address_department'  => $address_department,
                    'complaint'           => $complaint,
                    'relief'              => $relief,
                    'communication'       => $communication,
                    'audio_file'        =>  $audioFile
            );


                $userData = $this->Revenue_Disputes_model->addAdministrationWithLogin($administration);

                 if($userData){
                     echo  "1";
                }
                else{
                     echo "2";
                }
         }



    }

    

    public function uploadFiles($data){

            $str  = microtime();
            $str  = str_replace(' ','',$str);
            $name = str_replace('.','',$str);
            $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
            $imageName = $name;
            $result =   move_uploaded_file($data["tmp_name"],"notice_images/".$imageName.".".$extension);
            return $adhar_back_name =  $imageName.".".$extension;
    }






}



    

    