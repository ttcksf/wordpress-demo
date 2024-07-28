<?php get_header();?>
  <div id="primary">
    <main id="main" class="site-main mt-5" role="main">
      <?php if(have_posts()):?>
        <div class="container">
          <?php if(is_home() && !is_front_page()): ?>
            <header class="mb-5">
              <h1><?php single_post_title();?></h1>
              <p>カテゴリー一覧：<?php the_category(",");?></p>
              <?php the_tags("タグ一覧：");?>

            </header>
            <div class="row">
              <?php while(have_posts()):
                      the_post();
              ?>
                <?php get_template_part("templates/content-post");?>
              <?php endwhile;?>
            </div>            
          <?php endif;?>
        </div>
      <?php endif;?>
      <?php if(paginate_links()):?>
        <div class="pagination container mb-4">
            <?php
            echo paginate_links(array(
                'show_all' => true,
                'prev_next' => true,
            ));
            ?>
        </div>
      <?php endif;?>
    </main>
  </div>
<?php get_footer();?>
