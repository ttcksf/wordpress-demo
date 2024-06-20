<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
  <meta charset="<?php bloginfo("charset");?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 手動のタイトルタグは消しておく -->
  <!-- <title>Document</title> -->
  <?php wp_head();?>
</head>
<body>
<!-- https://getbootstrap.jp/docs/5.3/components/navbar/ -->
  <div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
      <!-- ディレクトリまでのパスは自動出力される。ファイル名の拡張子はつけない -->
      <?php get_template_part("templates/header/nav");?>
    </header>
    <div id="content" class="site-content">

    </div>
  </div>
