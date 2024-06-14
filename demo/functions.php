<?php
  // echo "<pre>";
  // print_r(get_template_directory_uri());
  // print_r(get_stylesheet_uri());
  // CSSを新しく追加してリロードするたびに最新のタイムスタンプになる
  // 自動で出力されるlinkタグのstyle.cssの後にバージョン名として入る予定
  // print_r(filemtime(get_template_directory() . "/style.css"));
  // wp_die();


  function my_scripts(){
    // 他にもCSSを読み込んでstyle.cssに依存関係を作るためにはこちら（依存関係に指定したものが先に読み込まれる仕組み）
    wp_enqueue_style("sub-css", get_template_directory_uri() . "sub.css", ["stylesheet"]);
    // style.cssだけならこちらのみでOK（依存関係がなければ空の配列）
    // filemtimeはタイムスタンプを表示する関数（キャッシュを回避して最新バージョンを読み込める）
    // メディアタイプは指定がなければallを選択しておく
    wp_enqueue_style("stylesheet", get_stylesheet_uri(), [], filemtime(get_template_directory() . "/style.css"),"all");
  }
  add_action("wp_enqueue_scripts", "my_scripts");
?>
