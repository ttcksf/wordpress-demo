<?php
  // $published_date = get_the_date();
  // $published_date = get_the_date("Y/m/d");
  $published_date = get_the_date("Y/m/d l");
  $published_time = get_the_time();
?>
<div class="date">
  <h3><?php echo $published_date;?><span><?php echo $published_time;?></span></h3>
</div>
