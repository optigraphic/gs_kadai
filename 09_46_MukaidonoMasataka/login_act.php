<?php
session_start();
include("funcs.php");
$pdo = db_con();

// ユーザー名とIDと現会員が一致する行を$sqlに入れる。なければ空を入れる。というSQL文を作る。
$sql="SELECT * FROM gs_bm_user_table WHERE lid=:lid AND lpw=:lpw AND life_flg=0";
// $sqlに入れたSQL文を$stmtに装填
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $_POST["lid"], PDO::PARAM_STR);
$stmt->bindValue(':lpw', $_POST["lpw"], PDO::PARAM_STR);
$res = $stmt->execute();

if($res==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
  }
  // $stmtをサーバーに発射！取得した行を$valに格納！
$val = $stmt->fetch();

// $valのIDが空でなければ(!=)〜のif文
if( $val["id"] != "" ){
    $_SESSION["chk_ssid"]  = session_id();
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"]      = $val['name'];
    $_SESSION["id"]        = $val["id"];
    $_SESSION["lid"]       = $val["lid"];
    header("Location: select.php");
  }else{
    //logout処理を経由して全画面へ
    header("Location: join.php");
  }

?>