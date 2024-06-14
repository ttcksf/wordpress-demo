<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
  <meta charset="<?php bloginfo("charset");?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head();?>
</head>
<!-- class="home blog logged-in admin-bar  customize-support"が追加されCSSやJSを当てることができる -->
<!-- <body <?php body_class();?>> -->
<!-- 新たにクラス名を追加することも可能 -->
<body <?php body_class("test-class");?>>

  <!-- bodyタグの開始タグの直後にスクリプトタグを埋め込めるようになった(functions.phpで書く) -->
  <?php wp_body_open();?>
  <header>ヘッダー</header>
