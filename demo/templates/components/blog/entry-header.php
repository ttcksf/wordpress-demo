<header class="entry-header">
  <?php
    $the_post_id = get_the_ID();
    $has_post_thumbnail = get_the_post_thumbnail($the_post_id);
    if(has_post_thumbnail()):
  ?>
    <div class="entry-image mb-3">
      <a href="<?php echo esc_url(get_permalink());?>">
        <?php $attr = ['class' => 'img'];?>
        <!-- 第一引数はサイズ(3種類のサイズを細かく設定するには設定→メディアで数字を変更しておく) -->
         <!-- functions.phpでカスタムサイズを作って引数に入れてもOK -->
        <?php the_post_thumbnail("custom-thumbnail",$attr);?>
      </a>
    </div>
  <?php else:?>
    <div class="no-image">
      <img src="https://dummyimage.com/150x150/000/fff">
    </div>
  <?php endif;?>
</header>
