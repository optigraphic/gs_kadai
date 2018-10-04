<?php
//POST取得
$name = $_POST["name"];
$writer = $_POST["writer"];
$datetime = $_POST["datetime"];
$publisher = $_POST["publisher"];
$publishedDate = $_POST["publishedDate"];
$url = $_POST["url"];
$comme = $_POST["comme"];
$isbn = $_POST["isbn"];
$thumbnail = $_POST["thumbnail"];
$id = $_POST["id"];

// DBへ接続
include "funcs.php";
$pdo = db_con();

// DBへ登録
$sql = "UPDATE gs_bm_table SET name=:name,writer=:writer,publisher=:publisher,publishedDate=:publishedDate,url=:url,comme=:comme,isbn=:isbn,datetime=:datetime,thumbnail=:thumbnail WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':writer', $writer, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':datetime', $datetime, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':publisher', $publisher, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':publishedDate', $publishedDate, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comme', $comme, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':isbn', $isbn, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':thumbnail', $thumbnail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

// エラー表示、リダイレクト、DB接続解除
if($status==false){
    sqlError($stmt);
  }else{
    header("Location: select.php");
    exit;
}

  ?>