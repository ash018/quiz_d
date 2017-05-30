<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registration_controller extends CI_Controller {

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
	 
	 
	 function __construct() {
		parent::__construct();
		$this->load->database();
		
		$this->load->library('form_validation');
		
		$this->load->library('session');
		
		$this->load->model('login_database');
		
		$this->load->model('quizmodel');
		
	}
	 
	 
	 
	public function medquizRegistration()
	{
		
		$this->load->model('Common_m');
		$this->data['districts'] = $this->Common_m->getDistrict();
		
		$this->load->view('registration_form',$this->data);
	}
        
        public function question_form()
        {
            
            //var_dump($this->input->post('details'));
            //exit();
            $questionSave = array(
                'details' => $this->input->post('details'),
                'id' =>$this->input->post('id'),
                'option'=>$this->input->post('option1'),
                'option2'=>$this->input->post('option2'),
                'option3'=>$this->input->post('option3')
                
            );
            
            //var_dump($questionSave);
            //exit();
            
            $this->quizmodel->saveQuestion($questionSave);
            //redirect('registration_controller/question_form');
            $this->load->view('setQuestions');
            
        }
	
	public function user_form()
	{
				
		//$this->load->library('session');
		
		$save = array(
			'user_name'  => $this->input->post('user_name'),
			'user_email' => $this->input->post('user_email'),
			'user_password' => $this->input->post('user_password'),
			'Address' => $this->input->post('Address'),
			'designation' => $this->input->post('designation'),
			'contact' => $this->input->post('contact'),
			'district' => $this->input->post('district'),
			'DateOfBirth' => $this->input->post('DateOfBirth'),
			'sex' => $this->input->post('sex')
		);
		
		//exit();
		var_dump($save);
		//exit();
	  $this->quizmodel->saveUser($save);
	
	   //$un = array($save['user_name']);
		
		$s = array (
			'uid' => $uid 
		);
		
		//var_dump($s);
	//exit();
	//exit();
		
		//$this->session->set_userdata($s);
	  redirect('registration_controller/volumeDisplay');
	}
	
	public function volumeDisplay()
	{
		
		//$uidVar = $this->session->userdata('uid');
		
		//var_dump($uidVar);
		//exit();

        $myVar = $this->session->userdata('uname');
        //var_dump($myVar);
        //exit();

        $data['name'] = $myVar;
        //var_dump($myVar);
        //exit();

		$this->load->view('vol_display',$data);
	}
	
	public function Admin_Login(){
		
		if(isset($this->session->userdata['logged_in'])){
			
			$this->load->view('admin_page');
		}
		else{
				
		$this->load->view('login_form');
		
		
		}
	}
	
	public function User_Login(){
		
		if(isset($this->session->userdata['logged_in'])){
			
			$this->load->view('admin_page');
		}
		else{
				
		$this->load->view('user_login_form');
		
		
		}
	}
	
	public function admin_login_process() {
		
		
			
			//$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			//$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			$userName = $this->input->post('username');
			$password = $this->input->post('password');
			
			
			
			$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			
			$result = $this->login_database->login($data);
			if ($result == TRUE) {

			$username = $this->input->post('username');
			$result = $this->login_database->read_user_information($username);
			
			if ($result != false) {
				
			$session_data = array(
			'username' => $result[0]->user_name,
			//'email' => $result[0]->user_email,
			);
			// Add user data in session
			//$this->session->set_userdata('logged_in', $session_data);
			//var_dump($session_data);
			
			$data['id'] = $session_data;
			$data2['id2'] = $session_data;
			
			echo "<pre>";
			//print_r($session_data[1]);
			
			echo "<h1>Hello ";
			print $session_data['username'];
			echo "</pre>";
			$this->load->view('adminview',$data);
			//$this->load->view('result_display',$data2);
			}
			} else {
			$data = array(
			'error_message' => 'Invalid Username or Password'
			);
			$this->load->view('login_form', $data);
			}
			
	}
	
	
	public function user_login_process() {
		
		
			
			//$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			//$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			$userName = $this->input->post('username');
			$password = $this->input->post('password');
			
			
			
			$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
			
			$result = $this->login_database->user_login_m($data);
			if ($result == TRUE) {
			
			$username = $this->input->post('username');
			$result = $this->login_database->read_user_information2($username);
			

			$session_data = array(
			//'username' => $result[0]->user_name,
			//'email' => $result[0]->user_email,
                'id' => $result[0]->id
			);
			// Add user data in session
			//$this->session->set_userdata('logged_in', $session_data);
			//var_dump($session_data);
			
			$data['id'] = $session_data;
			$data2['id2'] = $session_data;

			$this->session->set_userdata('uname', $session_data);
			
			echo "<pre>";
			//print_r($session_data[1]);
			
			echo "<h1>Hello ";
			//print $session_data['username'];
                print $session_data['id'];
			echo "</pre>";
			//var_dump($data);
			//exit();
			$this->load->view('userview',$data);
			//$this->load->view('result_display',$data2);
			//}
			} else {
			$data = array(
			'error_message' => 'Invalid Username or Password'
			);
			$this->load->view('user_login_form', $data);
			}
			
	}
	
	public function  userdisPlay()
	{
		
		
		
		
		$this->load->model('quizmodel');
		$this->data['users'] = $this->quizmodel->getRegisteredUser();
		$uidVar = $this->session->userdata('uid');
		
		//var_dump($uidVar);
		//exit();
		$this->load->view('userdisplay', $this->data);
		
		
		
	}
	
	public function   userdisplay2()
	{
		
		//var_dump($uidVar);
		//exit();
		$this->load->view('question');
		
	}
        
        public function setQuestionsview()
        {
            $this->load->view('setQuestions');
        }
	
	
	
	
	
	
	
}
