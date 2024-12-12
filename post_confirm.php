// POSTを受け取る
// POSTの場合はパスワードも送ってみる。

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<?php
var_dump($_POST);
?>


<body>
    お名前：<echo $name ?> <br>
    EMAIL：<?= $email ?> <br>
    パスワード：<?= $password ?> <br>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
