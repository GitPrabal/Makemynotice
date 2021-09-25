<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook extends CI_Controller {

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
   
    public function facebookAdd(){
    
    

        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('Facebook_model');

        $oauth_provider = $_POST['oauth_provider'];
        $userData = json_decode($_POST['userData']);

        $link = !empty($userData->link)?$userData->link:''; 
        $gender = !empty($userData->gender)?$userData->gender:'';

        $user_id  = $userData->id;
        $first_name = $userData->first_name;
        $last_name = $userData->last_name;
        $email = $userData->email;
        $picture = $userData->picture->data->url;
        $created = date("d-m-Y h:i:s a");
        $modified = date("d-m-Y h:i:s a");

            $facebook = array(

                'oauth_provider'    => $oauth_provider,
                'user_id' => $user_id,
                'first_name'  => $first_name,
                'last_name'  => $last_name,
                'email'      => $email,
                'gender'   => $gender,
                'picture' => $picture,
                'link'    => $link,
                'created' => $created,
                'modified'=> $modified

            );

            $userData = $this->Facebook_model->facebookAdd($facebook);
            
            $this->session->set_userdata('user_id',$facebook['user_id']);
            $this->session->set_userdata('email',$facebook['email']);
            $this->session->set_userdata('user_login',"true");
            $this->session->set_userdata('social_login',"true");
            
    }
   
}







