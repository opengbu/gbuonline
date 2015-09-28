<?php
			
		
		
			$user=$_POST['username'];
			$flag=$_POST['flag'];
			
			foreach(array_combine($user,$flag) as $key=>$value) {
			
			echo "key".$key;
			echo "value".$value;
			$q=$this->db->query("update users Set flag='$key' where username='$value'");
			//echo $q;
			}
			
	
		
		
		?>