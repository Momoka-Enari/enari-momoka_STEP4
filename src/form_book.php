<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>理解度チェック</title>
    <link rel ="stylesheet" href ="style_book.css">
</head>
<body>
    <h1>図書貸出申請フォーム</h1>
    <form action="confirm_book.php" method="post">
<div>
    <label for="username">利用者名:</label><br>
    <input type="text" id="username" name="username" required>
</div>
<div>
    <label for="bookTitle">書籍タイトル:</label><br>
    <input type="text" id="bookTitle" name="bookTitle" required>
</div>
<div>
    <label for="code">図書コード（例：A1234） :</label><br>
    <input type="text" id="code" name="code" required>
</div>
<div>
    <label for="period">貸出期間（日数）:</label><br>
    <input type="number" id="period" name="period" min="1" max="30" required>
</div>
<div>
    <label for="note">備考（任意）:</label><br>
    <textarea name="note" cols="20" rows="5"></textarea>
</div>
<div>
    <button type="submit">申請する</button>
</div>
    </form>
</body>
</html>
