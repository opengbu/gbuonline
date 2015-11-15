
<?php
	$like_count_q = $this->db->query("select count(*) as like_count from blog_likes where blog_id = '$blogid'");
  	$like_count = $like_count_q->row();
			
	$numb = $this->db->query("select * from blog_likes where blog_id = '$blogid' and user_id = '$userid';");
	$clor = "primary";
	$txt = "Like this blog";
					
	if($this->session->userdata('loggedin') == 1 && $numb->num_rows() > 0)
	{
		$clor = "warning";
		$txt = "Un-Like this blog";
	}
?>

<button onclick="log(<?=$blogid?>)" class="btn btn-sm btn-<?=$clor?> btn-md a" data-toggle="tooltip" data-placement="top" title="<?=$txt?>">
    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;
    <span class="badge"><?=$like_count->like_count ?></span>
</button>&nbsp;
