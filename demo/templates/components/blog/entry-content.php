<h2><?php the_title();?></h2>
<?php if(is_single()):?>
  <?php the_content();?>
  <?php wp_link_pages([
    "pagelink" => '<button class="btn btn-info text-white">%</button>'
  ]);?>
  <div class="mt-4 mb-4">
    <?php previous_post_link();?>
    <?php next_post_link();?>
  </div>
<?php else:?>
  <?php the_excerpt();?>
<?php endif;?>
