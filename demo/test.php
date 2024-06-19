<?php
  // include "includes/Person.php";
  // include "includes//Student.php";

  // include文をテンプレート化して自動で読み込みをかけられる
  spl_autoload_register(function($class){
    include "includes" . $class . ".php";
  });

  new Person();
  new Student();
?>
