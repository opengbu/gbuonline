
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

    $likers_q = $this->db->query("select users.full_name from users,blog_likes where users.user_id = blog_likes.user_id AND blog_id = '$blogid'");
    $likers = $likers_q->result();
                 
?>

<button onclick="log(<?=$blogid?>)" class="btn btn-sm btn-<?=$clor?> btn-md a" data-toggle="tooltip" data-placement="top" title="<?=$txt?>">
    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;
    <span class="badge"><?=$like_count->like_count ?></span>
</button>&nbsp;

<button type="button" class="btn btn-sm btn-primary btn-md b" data-toggle="popover"
                                 data-placement="top" title="This blog is liked by :"
                                 data-content="<?php
                                                foreach($likers as $eachl)
                                                {
                                                    echo $eachl->full_name.'<br>';
                                                }
                                                ?>">
                                    <span class="glyphicon glyphicon-signal" aria-hidden="true"></span> &nbsp;
                                    <span class="badge">Likers</span>
</button>&nbsp;
