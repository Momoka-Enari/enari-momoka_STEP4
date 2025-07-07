<?php
//入力があるかチェック
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["your_name"]);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お名前フォーム</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f0f8ff;
            text-align: center;
            margin-top: 50px;
        }
        form {
            background: #ffffff;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        input[type="text"] {
            padding: 10px;
            width: 200px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 10px;
            background: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>お名前を入力してください</h2>
<form method="post" action="">
    <input type="text" name="your_name" placeholder="例：ももか" required>
    <br>
    <input type="submit" value="送信">
</form>

<?php if ($name): ?>
    <p style="margin-top:20px; font-size:18px;">こんにちは、<?php echo $name;
<?php endif; ?>

</body>
</html>