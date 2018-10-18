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
include("funcs.php");
$pdo = db_con();

$name_j = $_POST["name_j"];
$lid_j = $_POST["lid_j"];
$lpw_j = $_POST["lpw_j"];

$sql = "INSERT INTO gs_bm_user_table(name,lid,lpw,kanri_flg,life_flg)VALUES(:name_j,:lid_j,:lpw_j,'0','0')";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name_j', $name_j, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid_j', $lid_j, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw_j', $lpw_j, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

if($status==false){
    sqlError($stmt);
  }else{
    //５．index.phpへリダイレクト
    header("Location: login.php");
    exit;
  
  }
?>


</body>
</html>