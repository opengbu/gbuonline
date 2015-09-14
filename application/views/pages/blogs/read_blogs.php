<script>
    var count_comments = true;
	
	//activate the tooltips
	$(function () {
	$('[data-toggle="tooltip"]').tooltip()
	})
	
</script>
<?php
$blog_id = $this->input->get('blog_id');
$user_id = $this->session->userdata("user_id");

$blog_q = $this->db->query("select blog.*, full_name, roll_number from blog,users where id = '$blog_id' and blog.user_id = users.user_id");
$result = $blog_q->row();
$like_count_q = $this->db->query("select count(*) as like_count from blog_likes where blog_id = '$result->id'");
$like_count = $like_count_q->row();

$numb = $this->db->query("select * from blog_likes where blog_id = '$blog_id' and user_id = '$user_id'");
        if ($numb->num_rows() == 0)
		{
			$clor = "primary";
			$txt = "Like this blog";
		}
		else
		{
			$clor = "warning";
			$txt = "Un-Like this blog";
		}
?>
<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;" id="myDiv">

            <div  style=" color: white; background-color: #222; padding-top:19px; padding-bottom:19px; padding-left:19px; border-radius: 3px; font-size: 20px;">
                <?= $result->title ?>
            </div>
            <br>
			
            <div class="well" style="font-size: 16px;  text-align: justify; ">
                
				<?= $result->description ?>
				<div id="koment"></div>
                <hr style="border-top: 1px solid rgba(0, 0, 0, 0.1); border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
				
                <div class="row"> 
                    <div class="col-md-4">
                        <a href="<?= site_url('blogs/like?blog_id=' . $result->id . '&redirect2=' . current_url()) . "?" . $_SERVER['QUERY_STRING'] ?>" class="btn btn-<?=$clor?> btn-md" data-toggle="tooltip" data-placement="top" title="<?=$txt?>">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;
                            <span class="badge"><?= $like_count->like_count ?></span>
                        </a>&nbsp;

                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".share">
                            <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> &nbsp;
                            <span class="badge">Share</span>
                        </button>&nbsp;
                        <button type="button" class="btn btn-primary btn-md" onclick="location.href='#koment'">
                            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> &nbsp;
                            <span class="badge"><a href="<?php echo site_url('blogs/read_blogs?blog_id=' . $result->id) ?>#disqus_thread" data-disqus-identifier="blog_<?= $result->id ?>"></a></span>
                        </button>
                    </div>
                    <div class="col-md-8" style="text-align: right;  ">
                        <button type="button" class="btn btn-primary btn-md"><span><?= $result->full_name ?></span> &nbsp;
                            <?php
                            if ($result->roll_number != NULL) {
                                ?>
                                <span class="badge"><?= $result->roll_number ?></span>
                                <?php
                            }
                            ?>

                        </button>
                    </div>
                </div>

            </div><!--for well-->

            <!--disqus code begins-->

            <div id="disqus_thread"></div>
            <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES * * */
                var disqus_shortname = 'gbuonline';
                var disqus_identifier = 'blog_<?= $result->id ?>';

                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function () {
                    var dsq = document.createElement('script');
                    dsq.type = 'text/javascript';
                    dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();

            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

            <!--disqus code ends-->
            <br>


        </div ><!--for colmd9-->
        <!--row ends in extras.php-->
        <!--container ends in extras.php-->

        <!--Blog Share MODAL begins-->
        <div class="modal fade share" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-sm" id="shm">
                <div class="modal-content">
                    <center>
                        <br>
                        <b>Share on Social Media</b>
                        <br><br>
                        <!-- Place this tag where you want the share button to render. -->
						<div class="g-plus" data-action="share" data-annotation="bubble" data-height="50" data-width="100" data-href="http://www.gbuonline.in/blogs/read_blogs?blog_id=<?= $result->id ?>"></div>
                        <br>
                        <br>
                    </center>
                </div>
            </div>
        </div>
        <!--Blog Share MODAL ends-->

	<!-- Place this tag in your head or just before your close body tag. -->
	<script src="https://apis.google.com/js/platform.js" async defer></script>	