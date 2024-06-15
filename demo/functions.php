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
?>
