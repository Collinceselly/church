<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Portal Login
 *
 * @author https://www.roytuts.com
 */
class Portal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginModel');
        require_once APPPATH . "third_party/AfricasTalkingGateway.php";
        $username = "";
        $apikey = "";
        $gateway = new AfricasTalkingGateway($username, $apikey);
    }

    public function index()
    {
        $data['title'] = 'Portal| Home';
        $this->load->view('portal/portal_home', $data);
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));

        $checklogin=$this->loginModel->loginUser($username, $password);

        if ($checklogin) {
            $this->session->set_flashdata('account_succ', 'Successful Login');
            $this->session->set_userdata($checklogin);
        } else {
            $checkInactive = $this->loginModel->loginCheck($username, $password);
            if ($checkInactive) {
                $this->session->set_flashdata('account_error', 'Your Account is Inactive');
                $data['title'] = 'Account Activate';
                $data['title'] = $checkInactive->PHONE_NUMBER;
                $this->load->view('portal/account_activate', $data);
            } else {
                $this->session->set_flashdata('account_error', 'Create an Account with Us today');
                $data['title'] = 'Portal| Home';
                $this->load->view('portal/portal_home', $data);
            }
        }
    }

    public function activateAccount()
    {
        $phone_number = $this->input->post('phone_number');
        $recipients = $phone_number;
    }
}
