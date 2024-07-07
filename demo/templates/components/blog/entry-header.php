<header class="entry-header">
  <?php
    // サムネイル画像が設定されているか
    $the_post_id = get_the_ID();
    $has_post_thumbnail = get_the_post_thumbnail($the_post_id);
    if(has_post_thumbnail()):
  ?>
    <div class="entry-image mb-3">
      <a href="<?php echo esc_url(get_permalink());?>">
        <?php the_post_thumbnail("thumbnail");?>
      </a>
    </div>
  <?php endif;?>
</header>
