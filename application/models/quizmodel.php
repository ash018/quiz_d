<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class quizmodel extends CI_Model {

	public function getQuestions()
	{
		$this->db->select("quizID, question, choice1, choice2, choice3, choice4, choice5, answer");
		$this->db->from("quiz");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
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
        
        public function saveQuestion($data)
        {
           
           //$this->db->update('question',$data);
           //$where = " result= 'a' ";
          // $this->db->where($where); 
            //var_dump($data);
            //exit();
            $details = $data['details'];
            //var_dump
            $id = (int)$data['id'];
           
            //var_dump($id);
            //exit();
            
            $option = $data['option'];
            $option2 = $data['option2'];
            $option3 = $data['option3'];
            
            $sql = "UPDATE `question` set details = '$details'  WHERE id = $id ";
            $sql2 = "UPDATE `question_option` set options = '$option' WHERE question_id= $id and value = 'a' ";
            $sql3 = "UPDATE `question_option` set options = '$option2' WHERE question_id= $id and value = 'b' ";
            $sql4 = "UPDATE `question_option` set options = '$option3' WHERE question_id= $id and value = 'c' ";
            $query = $this->db->query($sql);
            $query2 = $this->db->query($sql2);
            $query3 = $this->db->query($sql3);
            $query4 = $this->db->query($sql4);
            return true;
            //return $query->result();
            //return $query->result();
            
        }
	
	
	public function getRegisteredUser()
	{
		$this->db->select("id, user_name, user_email, Address, designation,contact, district, DateOfBirth,sex");
		$this->db->from("user_login");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}
	
	
}

?>

