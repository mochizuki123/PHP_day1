<html>

<head>
    <meta charset="utf-8">
    <style>
        .form {
            border: 1px solid black;
            height: 600px;
            width: 60%;
            padding: 10px;
            background-color: #F5F5F5;

        }
        .menu {
            color: white;
            background-color: #2FA6E9;
            width:100%;
        }
        .item1 {
            color: blue;
          
        }
        
        .icon {
            width: auto;
            height: 5%;

        }
    </style>
    <title>投票フォーム</title>
</head>

<body class="form">
    <div class="menu">
        <img class="icon" src="./Gs icon.png" alt="">
        <h1>GGA 投票フォーム</h1>
        <p>プレゼンターの審査と、温かいコメントをお願いします！！</p>
        
            <!-- <li><a href="index.php">index.php</a></li> -->
    </div>

    <form action="write.php" method="post">
        <span class=item1>発表者:</span><input type="text" name="presenter">
        投票者: <input type="text" name="voter">
        EMAIL: <input type="text" name="email" placeholder = "xx@xx.com">
        <br><br>
        評価  :  <select name="score" style="width:100px;">
                    <option value = "A"> A </option>
                    <option value = "B"> B </option>
                    <option value = "C"> C </option>
                    <option value = "D"> D </option>
                </select>
        <br><br>
        <textarea name="comment" style="width: 700px; "height: 600px; placeholder = "コメントを記入下さい"></textarea>
        <!-- パスワード欄を追加してみる。 -->
        <br><br>
        <input type="submit" value="送信" style="width: 100px;"> 

     
     </form>   


    </form>
</body>

</html>
