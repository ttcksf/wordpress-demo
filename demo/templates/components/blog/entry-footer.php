<?php
  // ユーザーから追加して記事に設定しておく
  $post_author = get_the_author();
?>
<div class="author">
  <h6>投稿者：<?php echo $post_author;?></h6>
</div>
