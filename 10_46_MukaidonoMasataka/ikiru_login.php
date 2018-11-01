<?php
session_start();
include("funcs.php");
$pdo = db_con();

// IDが現会員と一致する行を$sqlに入れる。なければ空を入れる。というSQL文を作る。
$sql="SELECT * FROM gs_route_user WHERE idnum=:idnum AND life_flg=1";
// $sqlに入れたSQL文を$stmtに装填
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':idnum', $_POST["idnum"], PDO::PARAM_STR);
$res = $stmt->execute();

if($res==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
  }
  // $stmtをサーバーに発射！取得した行を$valに格納！
$val = $stmt->fetch();

// $valのidnumが空でなければ(!=)〜のif文
if( $val["idnum"] != "" ){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["life_flg"] = $val['life_flg'];
    $_SESSION["name"]     = $val['name'];
    $_SESSION["idnum"]    = $val["idnum"];
    $_SESSION["add1"]      = $val['add1'];
    $_SESSION["add2"]      = $val['add2'];
    // header("Location: ikiru.php");
    header("Location: ikiru_form.php");
  }else{
    //非会員用ページへ
    header("Location: not_member.php");
  }

?>