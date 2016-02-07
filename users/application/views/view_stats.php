<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Hits Begins
/* created by Rajat and Shobhit
/* -->
<div class = "container">
    <!--Total Hits-->
    <br/><label style="font-size:20px;margin-left:30px;">Total Hits :</label>   
    <?php
    $hits_q = $this->db->query("select count(*) as hits_count from analysis");
    $hits = $hits_q->row();
    echo "<font size='10px'>" . $hits->hits_count . "</font>";
    ?>
    <!--Today's Hits-->
    <br/><label style="font-size:20px;margin-left:30px;">Today's Hits :</label>   
    <?php
    $date = date('Y-m-d');
    $x = $this->db->query("select count(*) as today from analysis where date='$date'");
    $day_hits = $x->row();
    echo "<font size='5'><b>" . $day_hits->today . "</b></font>";
    ?>
     <!--Per Day Average-->
    <br/><label style="font-size:20px;margin-left:30px;">Average:</label>   
    <?php
    $x = $this->db->query("select count(distinct date) as days from analysis");
    $num_days = $x->row();
    $avg = round($hits->hits_count/$num_days->days, 2);
    echo "<font size='5'><b>" . $avg . "</b></font>&nbsp;hits per day";
    ?>
</div>
<!--Hits Ends-->