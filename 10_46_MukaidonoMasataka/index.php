<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>ROUTE216専用</title>
</head>
<body>

<?php
session_start();
?>


<header>
    <div class="head_title_L">
        <p class="stage_title">ROUTE216会員専用ページ</p>
    </div>
    <!-- <div class="head_title_R">
        <img src="img/footlogo.png" alt="生きるロゴ" class="logo">
    </div> -->
</header>
<div class="text-center">
    <div>
        <img src="img/route216_logo.png" alt="ROUTE216ロゴ">
    </div>
    <div>
        <form method="POST" action="ikiru_login.php">
            <div class ="font-l white">
                会員番号を入力してください
            </div>
            <div>
                <!-- テスト用番号 -->
                <!-- 0000で現行会員 -->
                <!-- それ以外非会員 -->
                <input type="text" name ="idnum" class ="font-l">
                <input type="submit" class ="font-l">
            </div>
        </form>
    </div>
</div>

<footer>
    <form method="POST" action="ikiru_kanri_login.php">
        <div class="flex footer">
            <div class ="font-s white">
                【管理用】
            </div>
            <div>
                <!-- テスト用番号 -->
                <!-- 0000で現行会員 -->
                <!-- それ以外非会員 -->
                <input type="text" name ="idnum" class ="font-s kanri"><input type="text" name ="pass" class ="font-s kanri">
            </div>
            <div>
                <input type="submit" class ="font-s">
            </div>
        </div>    
    </form>
</footer>

</body>
</html>