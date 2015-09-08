<?php

class feedback_model extends CI_Model
{
public function fb() 
	{    
        $name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$category=$_POST['category'];
		$message=$_POST['message'];
		$this->db->query("INSERT into feedback (name,email,subject,category,message) VALUES('$name','$email','$subject','$category','$message');");
		
    }
	
}