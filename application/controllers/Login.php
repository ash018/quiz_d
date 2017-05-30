<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
            if ($this->input->post()) {

            $this->load->model('common_m');
            $query = $this->common_m->validate_user();
            if ($query) {
                $data = array();
                foreach ($query as $row) {
                    $data = array(
                        'Id' => $row->Id,
                        'EmpCode' => $row->EmpCode,
                        'DeptCode' => $row->DeptCode,
                        'DesgCode' => $row->DesgCode,
                        'Name' => $row->Name,
                        'DeptName' => $row->DeptName,
                        'DesgName' => $row->DesgName,
                        'EmailID' => $row->EmailID,
                        'is_log_user' => TRUE
                    );
                    $this->session->set_userdata($data);
                }
                redirect('home');
            } else {
                $msg['message'] = "<div class=\"alert fade alert-error in\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button><strong>Incorrect Username or Password</strong></div>";
                $this->session->set_userdata($msg);
               // redirect(base_url('login'));
			   redirect(base_url('quiz_game'));
            }
        } else {
            $data = array();
            $data['page'] = 'Login';
            //$this->load->view('login', $data);
			$this->load->view('quiz_game', $data);
        }
    }
	
	public function index2()
	{
            if ($this->input->post()) {

            $this->load->model('common_m');
            $query = $this->common_m->validate_user();
            if ($query) {
                $data = array();
                foreach ($query as $row) {
                    $data = array(
                        'Id' => $row->Id,
                        'EmpCode' => $row->EmpCode,
                        'DeptCode' => $row->DeptCode,
                        'DesgCode' => $row->DesgCode,
                        'Name' => $row->Name,
                        'DeptName' => $row->DeptName,
                        'DesgName' => $row->DesgName,
                        'EmailID' => $row->EmailID,
                        'is_log_user' => TRUE
                    );
                    $this->session->set_userdata($data);
                }
                redirect('home');
            } else {
                $msg['message'] = "<div class=\"alert fade alert-error in\"><button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button><strong>Incorrect Username or Password</strong></div>";
                $this->session->set_userdata($msg);
                redirect(base_url('login'));
			   //redirect(base_url('quiz_game'));
            }
        } else {
            $data = array();
            $data['page'] = 'Login';
            $this->load->view('login', $data);
			//$this->load->view('quiz_game', $data);
        }
    }
    
    function logout() {
        $this->session->sess_destroy();
        $this->session->set_userdata($msg);
        redirect(base_url('login'));
    }

}
