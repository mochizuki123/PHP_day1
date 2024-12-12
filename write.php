データ登録
<?php
//form から受け取る情報
$voter = $_POST ["voter"];
$presenter = $_POST ["presenter"];
$email = $_POST ["email"];
$score = $_POST ["score"];
$comment = $_POST ["comment"];

$time = date("Y/m/d H:i:s");

$data = $time . "/" . $voter .  "/" . $presenter . "/" . $email . "/" . $score . "/" . $comment . "\n";   // \nで改行
file_put_contents("data/data.txt", $data, FILE_APPEND); // 上書きされないようにAppend
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>DBへ書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>

    <!-- データ削除用のボタン -->
    <form action="delete.php" method="post" >
    <input type="submit" value="データ削除">

</body>

</html>
