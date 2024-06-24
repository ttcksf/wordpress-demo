<?php get_header();?>
  <div id="primary">
    <main id="main" class="site-main mt-5" role="main">
      <?php if(have_posts()):?>
        <div class="container">
          <?php while(have_posts()):
                  the_post();
          ?>
            <?php the_title();?>
            <!-- 抜粋文 -->
            <?php the_excerpt();?>
            <!-- 画像なども含めた全文 -->
            <?php the_content();?>
          <?php endwhile;?>
        </div>
      <?php endif;?>
    </main>
  </div>
<?php get_footer();?>
