<?php

echo'Hello Cytech';

//右辺に'Cytech'を変数$nameに代入する
$name = 'Cytech';

//右辺に'100'を変数$numに代入する
$num = 100;

echo $name;
echo $num;

$cytech = 100;
$total = $cytech * $cytech;
echo $total;

//出力結果: 10000

//整数型
$int = 100;
echo $int;

//小数型
// 小数型
$float_one = 3.14;
$float_two = 2.71;

echo $float_one . "<br>";
echo $float_two . "<br>";

//文字列型
$str = "Hello Cytech<br>";
echo $str;

//配列
$num = array(100, 200, 300, 400);
echo $num[0];

//多次元配列
$data = array(
array(1,2,3),//int型
array("Cytech", "Toro", "PHP")//string型
);

//出力
echo $data[0][0] . "<br>";
echo $data[1][0] . "<br>";
echo $data[0][1] . "<br>";
echo $data[1][2] . "<br>";

?>