<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Collince extends CI_Controller {

    public function index(){
        // load base_url
        $this->load->helper('url');
        $this->load->helper('form');

        //load model
        $this->load->model('collince_model');

        // Get 
        $edit = $this->input->get('edit'); 

        if(!isset($edit)){
            // get data
            $data['response'] = $this->collince_model->getUsersList();
            $data['view'] = 1;

            // load view
            $this->load->view('collince_view',$data);
        }else{

            // Check submit button POST or not
            if($this->input->post('submit') != NULL ){
                // POST data
                $postData = $this->input->post();

                //load model
                $this->load->model('collince_model');

                // Update record
                $this->collince_model->updateUser($edit,$postData);

                // Redirect page
                #redirect('collince/');
                echo "update successful";

            }else{

                // get data by id
                $data['response'] = $this->collince_model->getUserById($edit);
                $data['view'] = 2;

                // load view
                $this->load->view('collince_view',$data);

            }
        }
    }
}
