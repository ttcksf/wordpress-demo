<?php
  trait Singleton{
    public static function get_instance(){
      static $instance = [];
      // 呼び出されたクラスの名前を返す
      $called_class = get_called_class();
      // 一度もインスタンス化されてない時
      if(!isset($instance[$called_class])){
        echo "Hello";
        // $instance["User"] = new User;が実行される
        $instance[$called_class] = new $called_class;
      }
      return $instance[$called_class];
    }
  }
  class User{
    // traitを使う合図
    use Singleton;
    public function __construct()
    {
      echo "User";
    }
  }
  // 自由に複製できるのがクラスの便利な点だが余計なインスタンス化を防ぎたい時
  $user1 = User::get_instance();
  $user2 = User::get_instance();
?>
