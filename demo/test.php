<?php
 trait Say_World{
  public function say_hello(){
    echo "Hello";
  }
 }
//  通常のクラスのようにインスタンス化するものではない
//  new Say_World()

  class Base{
    // traitを使う合図
    use Say_World;
  }
  // traitを使うと複数クラスある時に継承の連鎖になりづらくなる
  $base = new Base();
  $base->say_hello();
?>
