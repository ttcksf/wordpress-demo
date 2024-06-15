<?php


  function my_scripts(){
    // wp_enqueue_style("stylesheet", get_stylesheet_uri(), [], filemtime(get_template_directory() . "/style.css"),"all");
    wp_register_style("stylesheet", get_stylesheet_uri(), [], filemtime(get_template_directory() . "/style.css"),"all");

    // 第四引数はtrueにするとbodyタグの閉じタグで読み込まれて、falseにするとheadタグの閉じタグで読み込まれる
    // wp_enqueue_script("script", get_template_directory_uri() . "/assets/script.js", [], filemtime(get_template_directory() . "/assets/script.js"), true);
    wp_register_script("script", get_template_directory_uri() . "/assets/script.js", [], filemtime(get_template_directory() . "/assets/script.js"), true);

    wp_enqueue_style("stylesheet");
    wp_enqueue_script("script");

    // 複数ファイルをページごとに出力し分けたい時に短くかけるので、一度wp_registerで登録して、ハンドルネームのみでwp_enqueueを呼び出す形が効率的
    // if(is_archive()){
    //   wp_enqueue_style("stylesheet");
    // }elseif(is_page()){
    //   wp_enqueue_style("sub");
    // }
    // 最後にscreenshotを登録して終わる
  }
  add_action("wp_enqueue_scripts", "my_scripts");
?>
