<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編課題11</title>
</head>
<body>
  <p>
    <?php
    $product_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    // 連想配列$product_dataの値を1つずつ順番に出力する
    foreach ($product_data as $key => $value) {
      echo "{$key}:{$value}<BR>";
    }
    ?>

  </p>  
</body>
</html>