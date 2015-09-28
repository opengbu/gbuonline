<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        		
		<br/>
		<?php
			$q=$this->db->query("select * from users where type='cw'");
                        $results=$q->result();
                        foreach ($results as $row)
                        {
		
		?>
		<form action = "<?=site_url().'feat/contr_update/'.$row->user_id?>" method="POST">
		<table>
			<tr>
				<td align="center"><b>Name</b></td>
				<td align="center"><b>Flag</b></td>
				<td align="center"><b>Action</b></td>
			</tr>
			<tr>
				<td width="200px" height="40px;" align="center"><input type="text" name="username" value="<?php echo $row->username ?>"></td>
				<td width="200px" align="center"><input type="text" size="10px" name="flag" value="<?php echo $row->flag ?>"></td>
				<td width="200px" align="center"><button type="submit" class="btn btn-xs btn-primary">Update</button></td>
			</tr>
		</table>
		</form>
		<?php
		}
		?>

		
		
		
	</div>
</div>