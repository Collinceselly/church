<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LiveSearch extends CI_Controller {

 function index()
 {
  $this->load->view('layout/header');
  $this->load->view('layout/footer');
  $this->load->view('live_search_view');
 }

 function fetch()
 {
  $output = '';
  $query = '';
  $this->load->model('live_search_model');
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->live_search_model->fetch_data($query);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>ID Card Number</th>
        <th>First Name</th>
        <th>Other Names</th>
        <th>Gender</th>
        <th>Occupation</th>
        <th>Position</th>
        <th>Phone Number</th>
        <th>E-Mail Address</th>
        <th>Place Of Residence</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->ID_CARD_NUMBER.'</td>
       <td>'.$row->FIRST_NAME.'</td>
       <td>'.$row->OTHER_NAMES.'</td>
       <td>'.$row->GENDER.'</td>
       <td>'.$row->OCCUPATION.'</td>
       <td>'.$row->CHURCH_LEADERSHIP_POST.'</td>
       <td>'.$row->PHONE_NUMBER.'</td>
       <td>'.$row->EMAIL_ADDRESS.'</td>
       <td>'.$row->RESIDENTIAL_ADDRESS.'</td>
      </tr>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 
}
