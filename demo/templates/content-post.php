<article id="post-<?php the_ID();?>" <?php post_class('mb-5');?>>
    <?php get_template_part("templates/components/blog/entry-header");?>
    <?php get_template_part("templates/components/blog/entry-meta");?>
    <?php get_template_part("templates/components/blog/entry-content");?>
    <?php get_template_part("templates/components/blog/entry-footer");?>
</article>
