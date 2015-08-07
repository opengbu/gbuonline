<script>
    var count_comments = true;
</script>

<!--This page is sorted according to the "Time" of a blog-->

<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;" id="myDiv">
            <div class="well well-sm"> 
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo site_url('blogs/recent_blogs') ?>'">Recent Blogs</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" onclick="location.href = '<?php echo site_url('blogs/write_blogs') ?>'">Write Blogs</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" onclick="location.href = '<?php echo site_url('blogs/best_blogs') ?>'">Best Blogs</button>
                    </div>
                </div>
            </div>        
            <br>

            <!--Loop Starts-->

            <?php
            $get_blogs_q = $this->db->query("select blog.*, full_name,roll_number from blog,users where status = 1 and blog.user_id = users.user_id order by id desc");
            $count = 0;
            foreach ($get_blogs_q->result() as $row) {
                $count ++;
                if ($count > 4)
                    break;
                
                $like_count_q = $this->db->query("select count(*) as like_count from blog_likes where blog_id = '$row->id'");
                $like_count = $like_count_q->row();
                ?>
                
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b><a href="<?php echo site_url('blogs/read_blogs?blog_id=' . $row->id) ?>">
                                    <font color="black"><?= $row->title ?></font>
                                </a></b></h3>
                    </div>
                    <div class="panel-body" style="text-align: justify;">
                        <?= $row->description ?> ... 
                        <a href="<?php echo site_url('blogs/read_blogs?blog_id=' . $row->id) ?>">Read More</a><br>

                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="<?=site_url('blogs/like?blog_id='.$row->id. '&redirect2='.  current_url() )?>" class="btn btn-primary btn-md" >
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> &nbsp;
                                    <span class="badge"><?=$like_count->like_count ?></span>
                                </a>&nbsp;
                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".share<?= $row->id ?>">
                                    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> &nbsp;
                                    <span class="badge">Share</span>
                                </button>&nbsp;
                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".blogs">
                                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> &nbsp;
                                    <span class="badge"><a href="<?php echo site_url('blogs/read_blogs?blog_id=' . $row->id) ?>#disqus_thread" data-disqus-identifier="blog_<?= $row->id ?>"></a></span>
                                </button>
                            </div>
                            <div class="col-md-8" style="text-align: right;">
                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target=".blogs"><span><?= $row->full_name ?></span> &nbsp;
                                    <?php
                                    if ($row->roll_number != NULL) {
                                        ?>
                                        <span class="badge"><?=$row->roll_number?></span>
                                        <?php
                                    }
                                    ?>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>		

                <!--Blog Share MODAL begins-->
                <div class="modal fade share<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-sm" id="shm">
                        <div class="modal-content">
                            <center>
                                <br>
                                <b>Share on Social Media</b>
                                <br><br>
                                Under Construction
                                <br>
                                <br>
                            </center>
                        </div>
                    </div>
                </div>
                <!--Blog Share MODAL ends-->


                <?php
            }
            ?>

            <!--Loop Ends-->

        </div >	

        <!--row ends in extras-->
        <!--container ends in extras-->
