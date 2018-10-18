<?php
session_start();

//1.  DB接続します
include "funcs.php";
chkSsid();
$pdo = db_con();

// DBにデータ消してって言う
$sql = "DELETE FROM gs_bm_user_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_SESSION["id"], PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
// 上３行命令登録＞下１行命令実行（executeする）
$status = $stmt->execute();


// 消したからDB閉じてtopに戻るよ
if ($status == false) {
    sqlError($stmt);
} else {
    header("Location: login.php");
    exit;
}
