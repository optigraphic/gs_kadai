<?php
session_start();
//＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊DB接続＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
include "funcs.php";
chkSsid();
$pdo = db_con();



$sql = "INSERT INTO gs_route_ikiru
(idnum,name,email,tel,zip,add1,add2,13_1230,14_1230,11_1330,12_1330,16_1330,17_1330,18_1330,08_1500,09_1500,13_1730,07_1830,11_1830,16_1830,18_1830,20_1230,21_1230,27_1230,28_1230,19_1330,23_1330,24_1330,25_1330,26_1330,20_1730,27_1730,23_1830,25_1830,ttlcnt,ttlchrg,datetime)VALUES
(:idnum,:name,:email,:tel,:zip,:add1,:add2,:13_1230,:14_1230,:11_1330,:12_1330,:16_1330,:17_1330,:18_1330,:08_1500,:09_1500,:13_1730,:07_1830,:11_1830,:16_1830,:18_1830,:20_1230,:21_1230,:27_1230,:28_1230,:19_1330,:23_1330,:24_1330,:25_1330,:26_1330,:20_1730,:27_1730,:23_1830,:25_1830,:ttlcnt,:ttlchrg,sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':idnum', $_SESSION['idnum'], PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $_SESSION['name'], PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $_SESSION['email'], PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':tel', $_SESSION['tel'], PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':zip', $_SESSION['zip'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':add1', $_SESSION['add1'], PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':add2', $_SESSION['add2'], PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':13_1230', $_SESSION['13_1230'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':14_1230', $_SESSION['14_1230'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':11_1330', $_SESSION['11_1330'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':12_1330', $_SESSION['12_1330'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':16_1330', $_SESSION['16_1330'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':17_1330', $_SESSION['17_1330'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':18_1330', $_SESSION['18_1330'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':08_1500', $_SESSION['08_1500'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':09_1500', $_SESSION['09_1500'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':13_1730', $_SESSION['13_1730'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':07_1830', $_SESSION['07_1830'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':11_1830', $_SESSION['11_1830'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':16_1830', $_SESSION['16_1830'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':18_1830', $_SESSION['18_1830'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':20_1230', $_SESSION['20_1230'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':21_1230', $_SESSION['21_1230'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':27_1230', $_SESSION['27_1230'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':28_1230', $_SESSION['28_1230'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':19_1330', $_SESSION['19_1330'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':23_1330', $_SESSION['23_1330'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':24_1330', $_SESSION['24_1330'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':25_1330', $_SESSION['25_1330'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':26_1330', $_SESSION['26_1330'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':20_1730', $_SESSION['20_1730'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':27_1730', $_SESSION['27_1730'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':23_1830', $_SESSION['23_1830'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':25_1830', $_SESSION['25_1830'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':ttlcnt', $_SESSION['ttlcnt'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':ttlchrg', $_SESSION['ttlchrg'], PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)


$status = $stmt->execute();

// ＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊データ登録処理後＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊

if($status==false){
    sqlError($stmt);
    }else{
    //５．index.phpへリダイレクト
    header("Location: ikiru_mailto.php");
    exit;
    }
    


?>