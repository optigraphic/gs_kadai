

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>【受付完了】ROUTE216専用「生きる」チケット申し込み</title>
</head>
<body>
<div class="body">
        
    <header>
    <div class="head_title_L">
        <p class="stage_title">【受付完了】ROUTE216専用「生きる」チケット申し込み</p>
        <div class="red text-center bold uketsuke">受付を完了しました。</div>
        <div class="red font-l text-center bold">内容を確認の上、<br>１週間以内にROUTE216事務局より改めて受付確認のメールをお送りさせていただきます。
        </div>
        <div class="red font-l text-center bold">しばらくお待ちください。</div>
    </div>
    <!-- <div class="head_title_R">
        <img src="img/footlogo.png" alt="生きるロゴ" class="logo">
    </div> -->
    </header>

<div class="form_outer">
    <div class="form chuui">
<!-- **************会員情報入力form************** -->

        ご入力いただいたアドレスに自動送信の確認メールをお送りいたしました。<br>
        もし<span class = "bold">『【自動返信】ROUTE216チケット申し込み』</span>という件名のメールが届かない場合は、<br>
        ご入力されたアドレスが間違っている可能性があります。<br>
        その場合は通常のチケット申し込みアドレスまでご連絡ください。<br>
    </div>
</div>
    <div class = "red font-l text-center bold pdd1020">手続きはこれで終了です。</div>
    <div class="text-center">
    <form><input type="button" value="このウィンドウを閉じる" id="fin"></form>
    </div>
</div>


<?php
session_start();
include "funcs.php";
chkSsid();
//SESSIONを初期化（空っぽにする）（arrayする）
$_SESSION = array();

//Cookieに保存してある"SessionIDの保存期間を過去にして破棄
if (isset($_COOKIE[session_name()])) { //session_name()は、セッションID名を返す関数
    setcookie(session_name(), '', time()-42000, '/');
}

//サーバ側での、セッションIDの破棄
session_destroy();

?>

<script>
$("#fin").on("click",function(){
    window.open('about:blank','_self').close();
});
</script>
</body>
</html>