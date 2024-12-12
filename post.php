<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
        .item1 {
         color: blue;
          
        }
    </style>
    <title>投票フォーム</title>
</head>

<body>
    <div class="menu">
        <h1>GGA 投票フォーム</h1>
        <ul>
            <li>プレゼンターの審査と、温かいコメントをお願いします！！</li>
            
            <!-- <li><a href="index.php">index.php</a></li> -->
        </ul>
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
