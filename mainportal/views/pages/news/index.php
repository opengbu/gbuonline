<div class="container-fluid" style=" margin-right: 10px; margin-left: 10px;" >
    <div class="row">
        <div class="col-md-9" style="padding-right:30px; border-right: 2px solid #ccc;">   
            <div class="well" style="font-size: 16px;  text-align: justify; ">
                <?php foreach ($news as $news_item): ?>
                    <div class="well" style="background-color: #222; color: white; font-size: 20px;">
                        <?php echo $news_item['title'] ?>
                    </div>
                    <div class="main">
                        <?php echo $news_item['text'] ?>
                    </div>
                    <p><a href="<?php echo site_url() . 'news/view?id=' . $news_item['id'] ?>">View article</a></p>
                    <br /><br />
                <?php endforeach ?>
            </div><!--for well-->


        </div >
