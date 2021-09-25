<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BasicDetails extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {
        $this->load->view('Admin/login');
    }

    public function saveBasicDetails()
    {

        $this->load->helper('url');
        $this->load->helper('upload');
        $this->load->library('session');
        $this->load->model('user_model');
        $user_login = $this->session->userdata('user_login');

        $phone = $_POST['phone'];
        $email = $_POST['email'];

        if (!isset($user_login) && empty($user_login)) {
            $result = $this->user_model->checkRegisteredUser($phone, $email);
            if ($result > 0) {
                echo "3";
                return;
            }
        }

        $_SESSION['basic_details'] = $_POST;
        $this->session->set_userdata('basic_details_filled', "1");
        $adhar_front_name = uploadFiles($_FILES['adhar_front']);
        $adhar_back_name = uploadFiles($_FILES['adhar_back']);
        $this->session->set_userdata('adhar_front_name', $adhar_front_name);
        $this->session->set_userdata('adhar_back_name', $adhar_back_name);
    }

}
