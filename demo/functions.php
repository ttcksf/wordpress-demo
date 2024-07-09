<?php
  function my_scripts(){
    wp_register_style("stylesheet", get_stylesheet_uri(), [], filemtime(get_template_directory() . "/style.css"),"all");
    wp_register_style("bs-stylesheet", get_template_directory_uri() . "/assets/src/lib/css/bootstrap.min.css", [], false,"all");

    wp_register_script("script", get_template_directory_uri() . "/assets/script.js", [], filemtime(get_template_directory() . "/assets/script.js"), true);
    wp_register_script("bs-script", get_template_directory_uri() . "/assets/src/lib/js/bootstrap.min.js", ["jquery"], false, true);

    wp_enqueue_style("stylesheet");
    wp_enqueue_style("bs-stylesheet");
    wp_enqueue_script("script");
    wp_enqueue_script("bs-script");

  }
  add_action("wp_enqueue_scripts", "my_scripts");

  function theme_init(){
    add_theme_support("automatic-feed-links");
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo',[
      "width" => 400,
      "height" => 100,
      "flex-width" => true,
      "flex-height" => true,
      "header-text" => ["site-title","site-description"]
    ]);
    add_theme_support("custom-background",[
      "default-color" => "#fff",
      "default-image" => "",
      "default-repeat" => "no-repeat"
    ]);

    add_image_size("custom-thumbnail", 1000, 300, true);
  }
  add_action("after_setup_theme", "theme_init");
  function register_menus(){
    register_nav_menus([
        "header_menu" => "ヘッダー",
        "footer_menu" => "フッター"
    ]);
  }
  add_action("init", "register_menus");

  function custom_excerpt(){
    return "...";
  }
  add_filter("excerpt_more","custom_excerpt");
?>
