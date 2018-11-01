<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
session_start();
include "funcs.php";
$pdo = db_con();
chkSsid();

$date = new DateTime();
$datetime = $date->format('Y-m-d H:i:s');


// ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊メール作成＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊

mb_language("ja");
mb_internal_encoding("UTF-8");

$subject = "【自動送信】チケット申し込み確認";

$body .="";
$body .= <<< EOM

{$_SESSION['name']}　様

お申し込みありがとうございます。
以下のお申し込み内容を承りました。
内容を確認の上、１週間以内にROUTE216事務局より改めて受付確認のメールをお送りさせていただきます。
しばらくお待ちください。
===================================================
【ROUTE216会員番号】 {$_SESSION['idnum']}
【 お名前 】 {$_SESSION['name']}　様
【 メール 】 {$_SESSION['email']}

【 発送先住所 】 
〒{$_SESSION['zip']}
{$_SESSION['add1']}
{$_SESSION['add2']}

【 お申し込み内容 】 
合計枚数：{$_SESSION['ttlcnt']}枚
合計金額：{$_SESSION['ttlchrg']}円 
===================================================\n
EOM;


if($_SESSION['07_1830']!==""){ 
  $body .="10月07日　18：30　".$_SESSION['07_1830']."枚"."\n";}
if($_SESSION['08_1500']!==""){ 
  $body .="10月08日　15：00　".$_SESSION['08_1500']."枚"."\n";}
if($_SESSION['09_1500']!==""){ 
  $body .="10月09日　15：00　".$_SESSION['09_1500']."枚"."\n";}
if($_SESSION['11_1330']!==""){ 
  $body .="10月11日　13：30　".$_SESSION['11_1330']."枚"."\n";}
if($_SESSION['11_1830']!==""){ 
  $body .="10月11日　18：30　".$_SESSION['11_1830']."枚"."\n";}
if($_SESSION['12_1330']!==""){ 
  $body .="10月12日　13：30　".$_SESSION['12_1330']."枚"."\n";}
if($_SESSION['12_1330']!==""){ 
  $body .="10月12日　13：30　".$_SESSION['12_1330']."枚"."\n";}
if($_SESSION['13_1230']!==""){ 
  $body .="10月13日　12：30　".$_SESSION['13_1230']."枚"."\n";}
if($_SESSION['13_1730']!==""){ 
  $body .="10月13日　17：30　".$_SESSION['13_1730']."枚"."\n";}
if($_SESSION['14_1230']!==""){ 
  $body .="10月14日　12：30　".$_SESSION['14_1230']."枚"."\n";}
if($_SESSION['16_1330']!==""){ 
  $body .="10月16日　13：30　".$_SESSION['16_1330']."枚"."\n";}
if($_SESSION['16_1830']!==""){ 
  $body .="10月16日　18：30　".$_SESSION['16_1830']."枚"."\n";}
if($_SESSION['17_1330']!==""){ 
  $body .="10月17日　13：30　".$_SESSION['17_1330']."枚"."\n";}
if($_SESSION['18_1330']!==""){ 
  $body .="10月18日　13：30　".$_SESSION['18_1330']."枚"."\n";}
if($_SESSION['18_1830']!==""){ 
  $body .="10月18日　18：30　".$_SESSION['18_1830']."枚"."\n";}
if($_SESSION['19_1330']!==""){ 
  $body .="10月19日　13：30　".$_SESSION['19_1330']."枚"."\n";}
if($_SESSION['20_1230']!==""){ 
  $body .="10月20日　12：30　".$_SESSION['20_1230']."枚"."\n";}
if($_SESSION['20_1730']!==""){ 
  $body .="10月20日　17：30　".$_SESSION['20_1730']."枚"."\n";}
if($_SESSION['21_1230']!==""){ 
  $body .="10月21日　12：30　".$_SESSION['21_1230']."枚"."\n";}
if($_SESSION['23_1330']!==""){ 
  $body .="10月23日　13：30　".$_SESSION['23_1330']."枚"."\n";}
if($_SESSION['23_1830']!==""){ 
  $body .="10月23日　18：30　".$_SESSION['23_1830']."枚"."\n";}
if($_SESSION['24_1330']!==""){ 
  $body .="10月24日　13：30　".$_SESSION['24_1330']."枚"."\n";}
if($_SESSION['25_1330']!==""){ 
  $body .="10月25日　13：30　".$_SESSION['25_1330']."枚"."\n";}
if($_SESSION['25_1830']!==""){ 
  $body .="10月25日　18：30　".$_SESSION['25_1830']."枚"."\n";}
if($_SESSION['26_1330']!==""){ 
  $body .="10月26日　13：30　".$_SESSION['26_1330']."枚"."\n";}
if($_SESSION['27_1230']!==""){ 
  $body .="10月27日　12：30　".$_SESSION['27_1230']."枚"."\n";}
if($_SESSION['27_1730']!==""){ 
  $body .="10月27日　17：30　".$_SESSION['27_1730']."枚"."\n";}
if($_SESSION['28_1230']!==""){ 
  $body .="10月28日　12：30　".$_SESSION['28_1230']."枚"."\n";}

$body .=<<< EOM
===================================================
受付日時：{$datetime}


※このメールは自動送信ですので返信はしないでください。
※ご連絡は通常のチケット申し込みアドレスまでおねがします。

ROUTE216事務職

EOM;

$mail ="dono_m@yahoo.co.jp";

// 送信元のメールアドレス
$fromEmail = "dono.mm@gmail.com";

// 送信元の名前
$fromName = "【自動返信】ROUTE216事務局";

// ヘッダ情報      
$header = "From:" .mb_encode_mimeheader($fromEmail);
$header .= "\r\n";
$header .= "Bcc: dono.mm@gmail.com";
// $header .= "\r\n";
// $header .= "Content-type: text/html; charset=UTF-8";

// メール送信
if(mail($_SESSION['email'] , $subject, $body, $header)){
    echo "メールを送信しました";
    // サンクスページに画面遷移させる
   header("Location: ikiru_thanks.php");
   exit;
  } else {
    echo "メールの送信に失敗しました。ROUTE216チケット窓口までお問い合わせください。";
  }



?>
<!-- $_SESSION['email'] -->


</body>
</html>

