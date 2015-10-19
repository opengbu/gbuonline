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
            $status=1;
            $owner=$_POST['owner'];
        }
		$this->db->query("INSERT into romm_change (UserName,userid,branch,alloted_room,requested_room,status,owner) VALUES('$name','$roll','$branch','$alloted_room','$requested_room','$status','$owner');");
	
        }
    }
?>