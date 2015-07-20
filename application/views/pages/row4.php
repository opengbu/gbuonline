 
<div class="row">
    <div class = "container-fluid">
        <div class="col-md-4" >
            <h2 align="center"><font face="Times New Roman"><b>News and Updates</b></font></h2>
            <hr>
            <?php
            $news_q = $this->db->query("select id,title,slug from news order by id desc");
            $count = 0;
            foreach ($news_q->result() as $row) {
                $count ++;
                if ($count > 4)
                    break;
                ?>
                <div class="list-group ">
                    <a href="<?php echo site_url('News/view?id=' . $row->id) ?>" class="list-group-item">
                        <h4 class="list-group-item-heading"><b><?= $row->title ?></b></h4>
                        <p class="list-group-item-text"><?= $row->slug ?></p>
                    </a>
                </div>
                <?php
            }
            ?>

            <ul class="pager">
                <li><a href="<?php echo site_url('News/index') ?>"><font color="black">More</font></a></li>

            </ul>
        </div>
        <div class="col-md-5" >
            <h2 align="center"><font face="Times New Roman"><b>Technological Updates</b></font></h2>
            <hr>

            <?php
            $info = parse_url(base_url());
            $host = $info['host']; //example extract gbuonline.in from http://www.gbuonline.in/sdsds
            if ($host == "gbuonline.in") {
                $xml = ("https://gbuonline.wordpress.com/feed");
                $xmlDoc = new DOMDocument();
                $xmlDoc->load($xml);

                $x = $xmlDoc->getElementsByTagName('item');
                for ($i = 0; $i <= 2; $i++) {
                    $item_title = $x->item($i)->getElementsByTagName('title')
                                    ->item(0)->childNodes->item(0)->nodeValue;
                    $item_link = $x->item($i)->getElementsByTagName('link')
                                    ->item(0)->childNodes->item(0)->nodeValue;
                    $item_desc = $x->item($i)->getElementsByTagName('description')
                                    ->item(0)->childNodes->item(0)->nodeValue;
                    //   echo ("<p><a href='" . $item_link
                    //  . "'>" . $item_title . "</a>");
                    //   echo ("<br>");
                    //   echo ($item_desc . "</p>");
                    ?>
                    <div class="list-group">
                        <a href="<?php echo $item_link ?>" class="list-group-item ">
                            <h4 class="list-group-item-heading"><b><?= $item_title ?></b></h4>
                            <p class="list-group-item-text"><?= $item_desc ?></p>
                        </a>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="list-group">
                    <a href="<?php echo base_url() ?>" class="list-group-item ">
                        <h4 class="list-group-item-heading"><b>Section Unavailable</b></h4>
                        <p class="list-group-item-text">Due to connection issues for some users, 
                            this section will only be available when domain = gbuonline.in</p>
                    </a>
                </div>

                <?php
            }
            ?>
        </div>

        <!--code for extras begins-->

        <div class="col-md-3">
            <h2 align="center"><font face="Times New Roman"><b>Extras</b></font></h2>
            <hr>

            <?php require 'master_extras.php'; ?>

            <!--code for extras ends-->

        </div>
    </div>
