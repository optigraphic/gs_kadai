<?php
$id = $_GET["id"];

// DB接続
include "funcs.php";
$pdo = db_con();

// DBにデータ消してって言う
$sql = "DELETE FROM gs_bm_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
// 上３行命令登録＞下１行命令実行（executeする）
$status = $stmt->execute();


// 消したからDB閉じて一覧に戻るよ
if ($status == false) {
    sqlError($stmt);
} else {
    header("Location: select.php");
    exit;
}
