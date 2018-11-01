
<?php
session_start();
//1.  DB接続します
include "funcs.php";
chkSsid();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>ROUTE216専用「生きる」チケットについて</title>
</head>
<body>
    
<header>
    <div class="head_title_L">
        <p class="stage_title">舞台『生きる』ROUTE216チケット優先予約について</p>
        <div class="red text-center">※予約受付は<span class="bold">2018年10月1日9：00〜2018年10月10日23：59</span>です。<br>
        ※<span class="bold">受付期間外の応募はすべて無効となります。</span>ご注意ください。</div>
        <div class="red font-l text-center bold">【今回の募集は抽選ではありません。】</div>
    </div>
    <!-- <div class="head_title_R">
        <img src="img/footlogo.png" alt="生きるロゴ" class="logo">
    </div> -->
</header>

<div class="form_outer">
    <div class="form">
            <div>
                公演の詳細がだだーっと書かれます。
            </div>
    </div>
</div>
<div class="form_outer">
    <div class="form">
            <div>    
                チケット優先予約についての規約がだだーと書かれます。
            </div>
        </div>
</div>

</body>
</html>