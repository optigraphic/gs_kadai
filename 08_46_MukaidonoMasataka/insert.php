<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name = $_POST["name"];
$writer = $_POST["writer"];
$publisher = $_POST["publisher"];
$publishedDate = $_POST["publishedDate"];
$url = $_POST["url"];
$comme = $_POST["comme"];
$isbn = $_POST["isbn"];
$thumbnail = $_POST["thumbnail"];



//2. DB接続します
// try {
//   $pdo = new PDO('mysql:dbname=データベース名; charset=utf8; host=ホスト名','ID','パスワード');
// } catch (PDOException $e) {
//   exit('エラー時のメッセージ:'.$e->getMessage());
// }

// function化させる
// try {
//   $pdo = new PDO('mysql:dbname=gs_db; charset=utf8; host=localhost','root','');
// } catch (PDOException $e) {
//   exit('DB_CONECTION_ERROR:'.$e->getMessage());
// }

include "funcs.php";
$pdo = db_con();


//３．データ登録SQL作成
// SQLを関数化
$sql = "INSERT INTO gs_bm_table(name,writer,publisher,publishedDate,url,comme,isbn,datetime,thumbnail)VALUES(:name,:writer,:publisher,:publishedDate,:url,:comme,:isbn,sysdate(),:thumbnail)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':writer', $writer, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':publisher', $publisher, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':publishedDate', $publishedDate, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comme', $comme, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':isbn', $isbn, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':thumbnail', $thumbnail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  sqlError($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;

}
?>


<!-- 
PHPによるDB操作は
DB開いて接続　＞　操作　＞DB接続解除　閉じる 
-->