<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        check_user_login();
        $this->load->model('common_m');
    }

    public function index() {
        $data = array();
        $data['page'] = "question";
        $data['page_title'] = "question";
        $data['EmpCode'] = $this->session->userdata('EmpCode');
        $data['Name'] = $this->session->userdata('Name');
      
        $data['question'] = $this->common_m->select('question');
        $data['question_option'] = $this->common_m->select('question_option');
        $data['question_details'] = $this->common_m->select_details();
        //echo '<pre/>';print_r($data['question_details']);exit();
        $data['main_content'] = $this->load->view('question', $data, TRUE);
        $this->load->view('index', $data);
    }
    
    public function process(){    
        $this->load->view('question');
    }
}