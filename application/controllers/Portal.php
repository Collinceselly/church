<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Portal Login
 *
 * @author https://www.roytuts.com
 */
class Portal extends CI_Controller
{
    private static $username;
    // private static $password;
    private static $apikey;

    public function __construct()
    {
        parent::__construct();
        require_once APPPATH . "third_party/AfricasTalkingGateway.php";
        $this->load->model('loginModel');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        
        self::$username = "collinsto";
        // self::$password= "";
        self::$apikey = "e0ce12a49718ee1bb5f3ec6804580de2e5b4395ed782b914b847e145f4a36d3c";
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

            redirect(base_url('portal/Home'));
        } else {
            $checkInactive = $this->loginModel->loginCheck($username, $password);
            if ($checkInactive) {
                $this->session->set_flashdata('errorpassword', 'Your Account is inactive. Set Password');
                $data['title'] = 'Account Activate';
                foreach ($checkInactive as $check) {
                    $data['phone_number'] = $check->PHONE_NUMBER;
                    $data['id'] = $check->ID;
                }
                $this->load->view('portal/set_password', $data);
            } else {
                $this->session->set_flashdata('account_error', 'Create an Account with Us today');
                $data['title'] = 'Portal| Home';
                $this->load->view('portal/portal_home', $data);
            }
        }
    }

    public function setPassword()
    {
        $data['title'] = 'Port| Set Password';
        $data['id'] = $this->input->post('id');
        $data['phone_number'] = $this->input->post('phone_number');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password_conf', 'Password Confirmation', 'required|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('errorpassword', 'Password Don\'t match');
            $this->load->view('portal/set_password', $data);
        } else {
            $data = array(
                'PASSWORD' => sha1($this->input->post('password')));
            $id = $this->input->post('id');
            $this->loginModel->updateUserPassword($id, $data);
            $this->activateAccount($id, $this->input->post('phone_number'));
        }
    }

    public function activateAccount($id = "", $phone_number = "")
    {
        $id = $this->input->post('id');
        $phone_number = $this->input->post('phone_number');
        if (isset($_POST['v_code'])) {
            $actives = $this->loginModel->checkCodeExists($phone_number, $this->input->post('v_code'));
            foreach ($actives as $active) {
                if ($active->expires_at >= ($active->created_at  + 10)) {
                    //verify the account
                    $this->loginModel->activeUser($id, $phone_number, $this->input->post('v_code'));
                    $this->index();
                } else {
                    //resend Code
                    $this->session->set_flashdata('errorpassword', 'The Code has expired');
                    $this->activateAccount($id, $phone_number);
                }
            }
        } else {
            $userCode = $this->checkIfRandExists($phone_number);
            $gateway = new AfricasTalkingGateway(self::$username, self::$apikey);
            $data['title'] = 'Portal| Account Activate';
            $data['phone_number'] = $phone_number;
            $data['id'] = $id;
            try {
                $results = $gateway->sendMessage($phone_number, $userCode);
                foreach ($results as $result) {
                    if ($result->status) {
                        $this->session->set_flashdata('errorpassword', 'A Code has been sent on your Phone');
                        $this->load->view('portal/account_activate', $data);
                    }
                }
            } catch (AfricasTalkingGatewayException $e) {
                $this->session->set_flashdata('errorpassword', 'Error Encountered. Contact Your System Admin');
                $this->load->view('portal/account_activate', $data);
            }
        }
    }


    public static function randomNumber($length = 4)
    {
        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $result .= mt_rand(0, 9);
        }

        return $result;
    }

    public function checkIfRandExists($phone_number)
    {
        $randnumber = self::randomNumber();
        $number = $this->loginModel->checkCodeExists($phone_number, $randnumber);

        if ($number) {
            $data = array(
                "phone_number" => $phone_number,
                "verification_code" => $randnumber,
                "verified" => 0,
                "created_at" => microtime(true),
                "expires_at" => microtime(true) + 10
            );

            $this->loginModel->insertCode($data);
            return $randnumber;
        } else {
            $this->checkIfRandExists($phone_number);
        }
    }
}
