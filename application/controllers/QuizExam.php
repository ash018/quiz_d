<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuizExam extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Common_m');
    }

	public function index()
	{
        $myVar = $this->session->userdata('uname');
        //var_dump($myVar);        exit();

	    $this->load->view('quiz_exam');
	}

	public function process()
    {
        //echo '<pre/>';print_r($_POST);exit();



        $question = $this->input->post('question', TRUE);
        $result = $this->input->post('result', TRUE);
        $data = array(
            'question' => $question,
            'result' => $result
        );
        $exam_result = $this->Common_m->insert($data, 'exam_result');
        if($exam_result){
            echo "<h2>1 record added</h2>";
        }
        else {
            echo "Error: Record does not add";
        }
    }

    public function chart()
    {
        $data = array();
        $data['row_q1'] = $this->Common_m->selectq1();
        $data['row_q2'] = $this->Common_m->selectq2();
        $this->load->view('chart',$data);
    }
}
