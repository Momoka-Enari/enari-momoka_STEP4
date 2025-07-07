<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>STEP4_テスト</title>
    <link rel ="stylesheet" href ="style.css">
</head>
<body>
    <h1>フォーム入力</h1>
    <form action="conform.php" method="post">
<div>
    <label for="name">名前:</label>
    <input type="text" id="name" name="name" required><br><br>
</div>
<div>
    <label for="age">年齢:</label>
    <input type="text" id="age" name="age" required><br><br>
</div>
<div>
    <label for="phone">電話番号 :</label>
    <input type="text" id="phone" name="phone" required><br><br>
</div>
<div>
    <label for="mail">メールアドレス :</label>
    <input type="text" id="mail" name="mail" required><br><br>
</div>
<div>
    <label for="address">住所 :</label>
    <input type="text" id="address" name="address" required><br><br>
</div>
<div>
    <label for="question">質問 :</label>
    <input type="text" id="question" name="question" required><br><br>
</div>
<div>
    <label for="gender">性別 :</label>
    <select type="text" id="gender" name="gender" required><br><br>
        <option value="男性">男性</option>
        <option value="女性">女性</option>
        <option value="その他">その他</option>
    </select>
</div>
<div>
    <button type="submit">送信</button>
</div>
    </form>
</body>
</html>