<?php
  $published_date = get_the_date();
  // ユーザーから追加して記事に設定しておく
  $post_author = get_the_author();
?>
<div class="date">
  <h3><?php echo $published_date;?></h3>
  <h6>投稿者：<?php echo $post_author;?></h6>
</div>
