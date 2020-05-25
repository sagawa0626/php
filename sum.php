<?php

// ここは課題１です。
function sum($result){
  return $result * 2;
}
echo sum(10);
echo "\n";

// ここは課題２です。
function f($a, $b) {
  return $a + $b;
}

echo f(3, 4);
echo "\n";

// ここは課題３です。
function multiplication($a) {
  $number = 1;
  foreach($a as $b) {
    $number *= $b;
  }
  return $number;
}
echo multiplication(array(1, 3, 5, 7, 9));
echo "\n";

// ここは課題４です。
function max_array($arr) {
  $max_number = $arr[0];
  foreach($arr as $a) {
    if ($a > $max_number) {
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array(array(9, 12, 5, 13));
echo "\n";

// ここは課題５です。
$str = '<a href=" ">strip_tagsはタグを削除する関数</a>';
echo 'タグ削除前:' .$str ."\n";
$aftstr = strip_tags($str);
echo 'タグ削除後:' .$aftstr ."\n";

$animals = ['dog', 'cat', 'bird'];
array_push($animals, 'array_pushは', '要素を追加できる');
print_r($animals);
echo "\n";

$array1 = ['array_merge', 'とは'];
$array2 = ['配列と配列を', '電車のように'];
$array3 = ['結合', 'できる'];

$arrays = array_merge($array1, $array2, $array3);
print_r($arrays);

echo 'timeは現在のタイムスタンプを取得できる関数→' .time();
echo "\n";

date_default_timezone_set('UTC');
$timestamp = mktime(10, 22, 30, 5, 25, 2020);
echo 'mktimeは指定した日時でタイムスタンプを取得できる関数→' .$timestamp ."\n";
echo 'dateは取得したタイムスタンプを実際に日時で表してくれる関数→' .date('Y年m月d日 H時m分s秒', $timestamp);