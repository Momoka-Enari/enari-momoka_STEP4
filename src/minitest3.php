<?php
$number1 = 5;
$number2 = 8;
$number3 =12;
$number4 =15;

var_dump($number1 == $number2); //false
var_dump($number1 != $number2); //true

var_dump($number3 > $number2); //true
var_dump($number4 < $number1); //false

$string1 = 'good morning';
$string2 = 'good evening';

var_dump($string1 == $string2); //false
var_dump($string1 === $string2); //false
?>