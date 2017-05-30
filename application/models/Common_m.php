<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_m extends CI_Model{ 


    function select($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('id','DESC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
    
    function validate_user(){           
            
        $this->db->select('*');
        $this->db->from('user_info');
        $this->db->where('EmpCode', $this->input->post('EmpCode')); 
        $this->db->where('Password', $this->input->post('Password'));
        $this->db->limit(1);
        $query = $this->db->get();
        if($query -> num_rows() == 1){                 
            return $query->result();
        }
        else{
            return false;
        }
    }
    
    public function select_details() {
        $this->db->select('opf.*');
        $this->db->from('question as opf');
//        $this->db->where('opf.question', $bid_id);
        $this->db->order_by('opf.id', 'ASC');
        $query = $this->db->get();
        $query = $query->result_array();
        foreach ($query as $key => $value) {
            $this->db->select();
            $this->db->from('question_option');
            $this->db->where('question_id', $value['id']);
            $query2 = $this->db->get();
            $query2 = $query2->result_array();
            $query[$key]['details_option'] = $query2;
        }
        return $query;
    }
	
	public function getDistrict()
	{
		$this->db->select("districtID, districtName");
		$this->db->from("district");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}
	
	public function saveUser($data)
	{
		$this->db->insert('user_login',$data);
		$user_id = $this->db->insert_id();
		
		return $user_id;
	}

    public function insert($data, $table) {
        $query = $this->db->insert($table, $data);
        return true;
    }

    public function selectq1()
    {
        $sql = "SELECT `result`,COUNT(`result`) AS `count_result` FROM exam_result WHERE question = 'q1' GROUP BY `result`";
        $query = $this->db->query($sql);
        $query = $query->row_array();
        return $query;
    }

    public function selectq2()
    {
        $sql = "SELECT `result`,COUNT(`result`) AS `count_result` FROM exam_result WHERE question = 'q2' GROUP BY `result`";
        $query = $this->db->query($sql);
        $query = $query->row_array();
        return $query;
    }

    public function select_dq1()
    {
        //$this->db->select("DrName , ContactNo");
        //$this->db->from("dr_information");

        $uname = $this->session->userdata('uname');


        $sql = "SELECT `user_name`,`contact` FROM user_login WHERE id IN (".$uname['id'].")";

        //$query = $this->db->get();
        $query = $this->db->query($sql);

        //print_r($query->num_rows());        exit();



        if ($query->num_rows() < 0) {
            echo "There is no data in the database";
            exit();
        }else{
            //return $query->result();
            return $query->row();
        }
    }


    public function select_dq2()
    {
        $sql = "SELECT * FROM question ";
        $query = $this->db->query($sql);
        $query = $query->result_array();
        foreach ($query as $key => $value) {
            $sql2 = "SELECT * FROM question_option  WHERE question_id = '" . $value['id'] . "'";
            $query2 = $this->db->query($sql2);
            $query2 = $query2->result_array();
            $query[$key]['question_option'] = $query2;
        }
        return $query;

     }

}