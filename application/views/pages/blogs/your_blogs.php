
<?php
$user_id = $this->session->userdata("user_id");
?>

<!--This page is allows the user to edit his blogs-->

<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;" id="myDiv">
            <div class="well well-sm"> 
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" onclick="location.href = '<?php echo site_url('blogs/recent_blogs') ?>'">Recent Blogs</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" onclick="location.href = '<?php echo site_url('blogs/write_blogs') ?>'">Write Blogs</button>
                    </div>
					<div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo site_url('blogs/your_blogs') ?>'">Edit Blogs</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" onclick="location.href = '<?php echo site_url('blogs/best_blogs') ?>'">Best Blogs</button>
                    </div>
                </div>
            </div>        
            <br>
			<div class="panel panel-default">
			
            <!--Loop Starts-->
			
            <?php
            $author_blogs = $this->db->query("select id,title,status from blog where user_id = '$user_id' order by id desc");
			if($author_blogs->num_rows() == 0)
			{
				echo "<br/><center>You have not written any blogs !!</center><br/>";
			}
			else
			{
			?>
			<table class="table">
			<tr>
			<td align="center"><b>S.No.</b></td>
			<td align="center"><b>Blog Title</b></td>
			<td align="center"><b>Status</b></td>
			<td align="center"><b>Action</b></td>
			</tr>
			<?php
			$count = 0;
            foreach ($author_blogs->result() as $row) {
                $count ++;
            ?>
			
			
				<tr>
				<td align="center"><?=$count.'.'?></td>
				<td><?=$row->title?></td>
				<td align="center" style="padding-top:16px;">
				<?php 
				if ($row->status == 0)
                        echo "<span class='label label-info'>Pending</span>";
                else if ($row->status == 1)
                        echo "<span class='label label-info'>Accepted</span>";    
				else if ($row->status == 2)
                        echo "<span class='label label-info'>Rejected</span>";   
				else if ($row->status == 3)
                        echo "<span class='label label-info'>Pending (E)</span>";
				?>
				</td>
				<td align="center">
					<a type="button" class="btn btn-xs btn-success" href="<?=site_url().'blogs/edit_blogs/'.$row->id?>">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp;Edit</a>
					
					<a type="button" class="btn btn-xs btn-danger" style="margin-left: 15px;" onclick="del(<?=$row->id?>)">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> &nbsp;Delete</a>
				</td>
				</tr>
			


                <?php
            }
			}
            ?>

            <!--Loop Ends-->
		</table>
        </div >
		</div>

        <!--row ends in extras-->
        <!--container ends in extras-->
<?php
echo $this->session->flashdata('edit_msg');
echo $this->session->flashdata('del_msg');
?>
<script>
function del(blid)
{
	var verify = confirm("Do you really want to DELETE this blog ??");
	if(verify == true)
	{
		location.href="<?=site_url('blogs/delete/')?>"+'/'+blid;
	}
	
}
</script>