<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel ="stylesheet" href ="style_confirm.css">
</head>
<body>
    <h1>入力内容確認</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=== "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $phone = $_POST["phone"];
        $mail = $_POST["mail"];
        $address = $_POST["address"];
        $question = $_POST["question"];
        $gender = $_POST["gender"];
    }
    
//バリデーション
if (!preg_match('/^[\p{Hiragana}\p{Katakana}\p{Han}a-zA-Z]+$/u', $name)) {
    echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
} elseif (!is_numeric($age) || $age < 0 || $age > 150) {
    echo "<p>年齢は0から150の間で入力してください。</p>";
} elseif (!preg_match('/^[0-9\-]+$/', $phone)) {
    echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
} elseif (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    echo "<p>メールアドレスの形式が正しくありません。</p>";
} elseif (!preg_match('/^[\p{Hiragana}\p{Katakana}\p{Han}a-zA-Z]+$/u', $address)) {
    echo "<p>住所はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
}   
else {
    echo "<p>名前：{$name}</p>";
    echo "<p>年齢：{$age}</p>";
    echo "<p>電話番号：{$phone}</p>";
    echo "<p>メールアドレス：{$mail}</p>";
    echo "<p>住所：{$address}</p>";
    echo "<p>質問：{$question}</p>";
    echo "<p>性別：{$gender}</p>";
}
?>
</body>
</html>