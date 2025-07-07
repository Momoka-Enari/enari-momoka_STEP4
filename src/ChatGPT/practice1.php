<?php
//PHPで表示する「商品一覧ページ」
$products = [
    "りんご" => 100;
    "バナナ" => 80;
    "メロン" => 150;
];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品一覧</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .product {
            border-bottom: 1px solid
#css;
            margin-bottom: 1em;
            padding-bottom: 1em;
        }
        .highlight {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>商品一覧</h1>

    <?php foreach ($products as $name => $price): ?>
        <div class="product">
            <h2>商品名:<?php echo $name; ?></h2>
            <p>価格:<?php echo $price ?>円 (税抜) </P>
            <p>税込価格:<?php echo $price * 1.1; ?>円</p>

            <?php if ($price >= 100): ?>
                <p class="highlight">おすすめ商品です!</p>
                <?php endif; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>