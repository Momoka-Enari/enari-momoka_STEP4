<?php
//ユーザー定義関数を定義「二つの引数アリ」
function name($cytech, $engineer) {
    $result = $cytech + $engineer;
    return $result;
}

//関数を呼び起こして結果を表示する
echo name(2, 3);
?>