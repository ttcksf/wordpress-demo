<?php get_header();?>
  <div id="primary">
    <main id="main" class="site-main mt-5" role="main">
      <?php global $wp_query;?>
      <h1 class="container">
        「<?php the_search_query();?>」による検索結果：<?php echo $wp_query->found_posts;?>件
      </h1>
      <?php if(have_posts()):?>
        <div class="container">
          <header class="mb-5">
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
        </div>
      <?php endif;?>
      <?php if(paginate_links()):?>
        <div class="container mb-4">
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
