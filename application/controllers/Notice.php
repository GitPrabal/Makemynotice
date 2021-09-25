<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notice extends CI_Controller
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

    public function defendantView()
    {

        $this->load->library('session');
        $this->load->helper('url');

        $basic_details_filled = $this->session->userdata('basic_details_filled');
        $user_login = $this->session->userdata('user_login');
        $page_name = $this->session->userdata('page_name');

        if ($user_login) {

            if ($basic_details_filled) {
                $this->load->view('login_header');
                $this->load->view('datepicker');
                $this->load->view('Employee/' . $page_name);
                $this->load->view('footer');
            } else {
                $this->load->view('login_header');
                $this->load->view('datepicker');
                $this->load->view('basic_details');
                $this->load->view('footer');
            }

        } else {

            if (isset($basic_details_filled) || ($basic_details_filled == '1')) {
                $this->load->view('header');
                $this->load->view('datepicker');
                $this->load->view('Employee/' . $page_name);
                $this->load->view('footer');
                return;
            } else {
                $this->load->view('header');
                $this->load->view('datepicker');
                $this->load->view('Employee/home');
                $this->load->view('footer');
            }

        }

    }

    public function add_notice_in_db()
    {
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('upload');
        $this->load->helper('save');
        $this->load->model('notice_model');

        if (!isset($_SESSION['basic_details'])) {
            redirect(base_url('/'));
        }

        $basic_details_array = $_SESSION['basic_details'];
        $final_data_array = $_SESSION['final_data'];
        $final_pdf = $_SESSION['final_pdf'];
        $adhar_front_name = $this->session->userdata('adhar_front_name');
        $adhar_back_name = $this->session->userdata('adhar_back_name');
        $details = array_merge($basic_details_array, $final_data_array);
        $user_login = $this->session->userdata('user_login');
        $payment_initiated = $this->session->userdata('payment_initiated');

        if ($user_login) {

            if ($payment_initiated) {
                $user_id = $this->session->userdata('user_id');
                $user_id = array('user_id' => $user_id, 'adhar_front' => $adhar_front_name, 'adhar_back' => $adhar_back_name);
                $details = array_merge($details, $user_id);
                $save = save($details, $final_pdf);
                $table_name = $details['data-table'];
                $register = array();
                $notice_model = $this->notice_model->addWithRegister($register, $save, $table_name);
                $this->destroy_session();
                redirect(base_url('/Home/congoPage'));
            } else {
                $this->destroy_session();
                $this->load->view('login_header');
                $this->load->view('datepicker');
                $this->load->view('home');
                $this->load->view('footer');
            }

        } else {

            $user_id = uniqid();
            $user_id = array('user_id' => $user_id, 'adhar_front' => $adhar_front_name, 'adhar_back' => $adhar_back_name);
            $details = array_merge($details, $user_id);
            if (isset($payment_initiated) || ($payment_initiated == '1')) {
                $register = register($details);
                $save = save($details, $final_pdf);
                $table_name = $details['data-table'];
                $notice_model = $this->notice_model->addWithRegister($register, $save, $table_name);
                $this->destroy_session();
                $this->session->set_userdata('final_filled', '1');
                redirect(base_url('/Home/congoPage'));

            } else {

                $this->destroy_session();
                $this->load->view('header');
                $this->load->view('datepicker');
                $this->load->view('home');
                $this->load->view('footer');
            }

        }

    }

    public function destroy_session()
    {

        $this->session->unset_userdata('basic_details_filled');
        $this->session->unset_userdata('payment_initiated');
        $this->session->unset_userdata('basic_details');
        $this->session->unset_userdata('final_pdf');
        $this->session->unset_userdata('adhar_front_name');
        $this->session->unset_userdata('adhar_back_name');
        $this->session->unset_userdata('final_data');
        $this->session->unset_userdata('consumer_last_insert_id');
        $this->session->unset_userdata('notice_filled');
        $final_filled = $this->session->unset_userdata('final_filled');

    }
}
