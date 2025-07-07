<?php
//これは単一行のコメントです。
/*これは複数行のコメントです。
よろしくお願いいたします。*/
print("This is cytech2.php");
echo "こんにちは<br>";
echo "おはよう<br>";
//defineの使い方
define('TAX',1.10);
$price =100;

//出力
echo "税込".$price * TAX."円<br>";

//constの使い方
//クラス定数
class Cytech{
    const PHP = 'Hello';
}

echo Cytech::PHP . "<br>";
?>