<?php get_header();?>
  <div id="primary">
    <main id="main" class="site-main mt-5" role="main">
      <?php if(have_posts()):?>
        <div class="container">
          <!-- 固定ページで/topと/blogを作成して、表示設定でトップページを/topに投稿ページを/blogにしておく -->
           <!-- ヘッダーメニューに/blogを追加しておく -->
          <?php if(is_home() && !is_front_page()): ?>
            <header class="mb-5">
              <h1><?php single_post_title();?></h1>
            </header>
            <?php while(have_posts()):
                    the_post();
            ?>
              <?php the_title();?>
              <?php the_excerpt();?>
              <?php the_content();?>
            <?php endwhile;?>
          <?php endif;?>
        </div>
      <?php endif;?>
    </main>
  </div>
<?php get_footer();?>
