<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way(array $arr, $order = 'ASC') {
        if (strtoupper($order) === 'ASC') {
            sort($arr);
        } else {
            rsort($arr);
        }
        return $arr;
    }

    $nums = [15, 4, 18, 23, 10];

    echo "昇順にソートします。<br>";
    $asc = sort_2way($nums, 'ASC');
    foreach ($asc as $n) {
        echo $n . "<br>";
    }

    echo "降順にソートします。<br>";
    $desc = sort_2way($nums, 'DESC');
    foreach ($desc as $n) {
        echo $n . "<br>";
    }
    ?>
  </p>
</body>

</html>