<?php
$nav['1']="";
$nav['2']="";
$nav['3']="";
$nav['4']="";
$nav['5']="";
$nav['6']="";
$nav[$x]="active";
?>

<div class="well well-sm">
		<ul class="nav nav-pills nav-justified">
  <li role="presentation" class="<?= $nav['1'] ?>"><a href="<?= site_url('alumni');?>">Alumni Home</a></li>
  <li role="presentation" class="<?= $nav['2'] ?>"><a href="<?= site_url('alumni/distinguished');?>">Distinguished Alumni</a></li>
  <li role="presentation" class="<?= $nav['3'] ?>"><a href="<?= site_url('alumni/alumniList');?>">Alumni List</a></li>
  <li role="presentation" class="<?= $nav['4'] ?>"><a href="<?= site_url('alumni/events');?>">Alumni Events</a></li>
  <li role="presentation" class="<?= $nav['5'] ?>"><a href="<?= site_url('alumni/gallery');?>">Alumni Gallery</a></li>
  <li role="presentation" class="<?= $nav['6'] ?>"><a href="<?= site_url('alumni_profile');?>">Alumni Profiles</a></li>
		</ul>
</div>