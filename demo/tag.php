<?php get_header();?>
  <div id="primary">
    <main id="main" class="site-main mt-5" role="main">
      <?php if(have_posts()):?>
        <div class="container">
          <!-- ページが変わったため条件分岐を変えておく -->
          <?php if(is_tag() && !is_front_page()): ?>
            <header class="mb-5">
              <!-- ページタイトルの関数も変わる -->
              <h1><?php the_archive_title();?></h1>
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
    </main>
  </div>
<?php get_footer();?>
