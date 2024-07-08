<header class="entry-header">
  <?php
    $the_post_id = get_the_ID();
    $has_post_thumbnail = get_the_post_thumbnail($the_post_id);
    if(has_post_thumbnail()):
  ?>
    <div class="entry-image mb-3">
      <a href="<?php echo esc_url(get_permalink());?>">
        <!-- 第二引数がclass名 -->
        <?php $attr = ['class' => 'img'];?>
        <?php the_post_thumbnail("thumbnail",$attr);?>
      </a>
    </div>
  <?php else:?>
    <!-- https://dummyimage.com/ -->
    <div class="no-image">
      <img src="https://dummyimage.com/150x150/000/fff">
    </div>
  <?php endif;?>
</header>
