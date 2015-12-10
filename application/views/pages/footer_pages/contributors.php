<script>
var xmlhttp_contr = new XMLHttpRequest();
var url_contr = "https://api.github.com/repos/opengbu/gbuonline/contributors";

xmlhttp_contr.onreadystatechange = function() {
    if (xmlhttp_contr.readyState == 4 && xmlhttp_contr.status == 200) {
        var myArr = JSON.parse(xmlhttp_contr.responseText);
        myFunction(myArr);
    }
}
xmlhttp_contr.open("GET", url_contr, true);
xmlhttp_contr.send();

function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i < arr.length; i++) {
        out += '<div class="col-sm-4"><img src="' + arr[i].avatar_url + '" width="120" style="height: 150px;"/><br/><b>' + arr[i].login + '</b><br/><i>Contributions: ' + arr[i].contributions + '</i><br/><br/><br/></div>';
    }
    document.getElementById("tech").innerHTML = out;
}
</script>

<center> 
    <hr>
    We are a group of students working under guidance of <br><b>Dr. Amit K. Awasthi.</b>
</center>

<div class="container-fluid">
    <center>
        <hr/>   
        <h3>Technical Team</h3>				  
        <hr/>				
        <div id = "tech">
            <b><i>Crunching the latest data, just for you. Hang tight.....</i></b>
        </div>
        <br/>
        <hr/>
    </center> 
</div>

<div class="container-fluid">
<center>
    <hr>
    <h3>Content Team</h3>
    <hr>
</center>
<?php
$content = $this->db->query("SELECT * FROM users WHERE type='cw' OR type = 'cm' ORDER BY type");
foreach ($content->result() as $row) {
    if(empty($row->profile_picture))
    {
        $pic = $this->cdn->res_url('resources/images/default-user.png');
    }
    else 
    {
        $pic = base_url($row->profile_picture);
    }
    ?>
    <div class="col-sm-4">
        <center>
            <img src="<?=$pic?>"  width="120" style="height: 150px;"/><br><b><?= $row->full_name ?></b>
			<?php if($row->type=='cm')
			{
				echo "<br/>(Content Head)";
			}
			else 
			{
				echo "<br/>(Content Writer)";
			}
			?>
            <br/><br/><br/>
        </center>
    </div>

    <?php
}
?>
<br/><br/>
<hr>
</div>

