<?php
//単純な代入
//$numberに20を代入
$number = 20;

//複合代入演算子
$number += 10;//$numberに10を加える ( $number = $number + 10と同じ) 30
$number -= 6;//$numberから6を引く ( $number = $number - 6と同じ) 24
$number *= 2;//$numberを2倍する ( $number = $number * 2と同じ) 48
$number /= 8;//$numberを8で割る ( $number = $number / 8と同じ) 6
$number %= 4;//$numberを4で割った余りを代入 ( $number = $number % 4と同じ) 2

//結果を出力
echo $number;//出力:2
?>