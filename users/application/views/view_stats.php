<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Hits Begins
/* created by Rajat and Shobhit
/* -->
<div class = "container">
    <br/><label style="font-size:20px;margin-left:30px;">Total Hits :</label>   
    <?php
    $hits_q = $this->db->query("select count(*) as hits_count from analysis");
    $hits = $hits_q->row();
    echo "<font size='10px'>" . $hits->hits_count . "</font>";
    ?>
    <br/><label style="font-size:20px;margin-left:30px;">Today's Hits :</label>   
    <?php
    $date = date('Y-m-d');
    $x = $this->db->query("select count(*) as today from analysis where date='$date'");
    $day_hits = $x->row();
    echo "<font size='5'><b>" . $day_hits->today . "</b></font>";
    ?>                     
</div>
<!--Hits Ends-->