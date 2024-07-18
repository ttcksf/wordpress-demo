<?php get_header();?>
  <div id="primary">
    <main id="main" class="site-main mt-5" role="main">
      <?php if(have_posts()):?>
        <div class="container">
          <?php if(is_home() && !is_front_page()): ?>
            <header class="mb-5">
              <h1><?php single_post_title();?></h1>
              <!-- 投稿に設定されたカテゴリーのみが取得される -->
               <!-- デフォルトはulとliによる箇条書き -->
              <!-- <?php the_category();?> -->
               <!-- 引数に「,」を入れるとulとliがなくなる -->
              <p>カテゴリー一覧：<?php the_category(",");?></p>
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
