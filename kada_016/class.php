<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編課題016</title>
</head>
<body>
  <p>
    <?php
    // foodクラスを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッドを定義する
      public function show_price() {
        echo $this->price . PHP_EOL;

      }

    }


   // Animalクラスを定義する
   class Animal {

    // プロパティを定義する
    private $name;
    private $height;
    private $weight;

     // コンストラクタを定義する
     public function __construct($name, $height, $weight) {
     $this->name = $name;
     $this->height = $height;
     $this->weight = $weight;
     }

     // メソッドを定義する
     public function show_height() {
    echo $this->height . PHP_EOL;

     }
   }

   // インスタンスを作成
   $food = new Food('potato', 250);
   $animal = new Animal('dog', 60, 5000);

   // オブジェクトの出力
   print_r($food);
   echo '<br>';
   print_r($animal);
   echo '<br>';

   // メソッドの実行
   $food->show_price();
   echo '<br>';
   $animal->show_height();
   echo '<br>';
   ?>

  </p>
</body>
</html>