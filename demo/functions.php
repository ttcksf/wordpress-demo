<?php
  function my_scripts(){
    wp_register_style("stylesheet", get_stylesheet_uri(), [], filemtime(get_template_directory() . "/style.css"),"all");
    // bootstrapのダウンロード
    // https://getbootstrap.jp/docs/5.3/getting-started/download/
    // ライブラリを自分たちで変更することはないのでバージョン情報（タイムスタンプ）はfalse
    wp_register_style("bs-stylesheet", get_template_directory_uri() . "/assets/src/lib/css/bootstrap.min.css", [], false,"all");

    wp_register_script("script", get_template_directory_uri() . "/assets/script.js", [], filemtime(get_template_directory() . "/assets/script.js"), true);
    // jqueryは最初から読み込まれているため読み込みコードは不要
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
  }
  add_action("after_setup_theme", "theme_init");
  // 外観にメニューが追加される
  function register_menus(){
    register_nav_menus([
        "header_menu" => "ヘッダー",
        "footer_menu" => "フッター"
    ]);
  }
  add_action("init", "register_menus");
?>
