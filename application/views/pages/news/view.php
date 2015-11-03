<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-8" style="padding-right:30px;" id="myDiv">

            <div class="well" style="background-color: #222; color: white; font-size: 20px;">
                <?php echo $news_item['title']; ?>
            </div>

            <div class="well" style="font-size: 16px;  text-align: justify; ">
                <?php echo $news_item['text']; ?> 
            </div><!--for well-->


        </div ><!--for colmd9-->

        <div class="col-md-3" style="padding-right:30px; border-left: 2px solid #ccc; border-right: 2px solid #ccc;" id="myDiv">

            <ui>
                <?php foreach ($news as $news_item): ?> 
                    <?php echo "<li>" . $news_item['title'] . "</li>" ?>
                    <p><a href="<?php echo site_url() . 'news/view?id=' . $news_item['id'] ?>">View article</a></p>

                <?php endforeach ?>
            </ui>


        </div >
    </div>
</div>

