<?php
    class roomChangeModel extends CI_Model
    {
        public function rc()
        {
            
            
        $name=$_POST['name'];
		$branch=$_POST['branch'];
		$alloted_room=$_POST['alloted_room'];
		$requested_room=$_POST['requested_room'];
        $roll=$this->session->userdata('roll_number');
            
        if(empty($_POST['owner']))
        {
            $status = 0;
            $owner="NULL";
        }
        else
        {
            //Status is for occupied rooms
            $status=1;
            $owner=$_POST['owner'];
        }
        
        $query1=$this->db->query("Select * from stuinfo where UPPER(roll_number)=UPPER('$roll') and room_no='$alloted_room';");    
        $query2=$this->db->query("Select * from stuinfo where room_no='$requested_room';");
        
        if($query1->num_rows()>0)
        {
            if(($query2->num_rows()>0 && $status==1) || $status==0){
           $this->db->query("INSERT into romm_change (UserName,userid,branch,alloted_room,requested_room,status,owner) VALUES('$name','$roll','$branch','$alloted_room','$requested_room','$status','$owner');");
            }
	
        }
        
        else{
                
        }
        
		
        }
    }
?>