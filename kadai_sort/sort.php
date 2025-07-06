<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
<?php

// ソート対象の配列を用意
$nums = [15, 4, 18, 23, 10];

// sort_2way 関数定義
function sort_2way(array &$array, bool $order): void {
    if ($order) {
        sort($array);
    } else {
        rsort($array);
    }
}

// 昇順ソート
echo "昇順:<br>";
sort_2way($nums, true);
foreach ($nums as $num) {
    echo $num . "<br>";
}

// 降順ソート
echo "降順:<br>";
sort_2way($nums, false);
foreach ($nums as $num) {
    echo $num . "<br>";
}
?>


  </p>
  
</body>
</html>