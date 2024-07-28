<h2><?php the_title();?></h2>
<?php if(is_single()):?>
  <?php the_content();?>
  <?php wp_link_pages([
    "pagelink" => '<button class="btn btn-info text-white">%</button>'
  ]);?>

<?php else:?>
  <?php the_excerpt();?>
<?php endif;?>
