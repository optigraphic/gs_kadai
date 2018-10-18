<?php
session_start();

//1.  DB接続します
include "funcs.php";
chkSsid();


?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>本棚</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body id="main">


<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <p class="navbar-brand">登録情報　<?=$_SESSION["name"]?>さんでログイン中</p>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>

      <table>
        <tr><td>名前：</td><td><?=$_SESSION["name"]?></td></tr>
        <tr><td>ID：</td><td><?=$_SESSION["lid"]?></td></tr>
     </table>
     <a href="liddelete.php" onclick="return confirm('登録情報を抹消します（ログインするには再登録が必要です）')">＜登録削除＞</a>
     <a href="select.php">書籍一覧へ</a>
        </tr>
    </div>
</div>
<!-- Main[End] -->

</body>
</html>


<!-- ."<a href ='delete.php?id=".$result["id"]."'>" -->