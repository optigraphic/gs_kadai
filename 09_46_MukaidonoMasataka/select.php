<?php
session_start();

//1.  DB接続します
include "funcs.php";
chkSsid();
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
    sqlError($stmt);
  // $error = $stmt->errorInfo();
  // exit("SQL_ERROR:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= "<tr>";
    $view .= "<td>"."<div id='thumb'>"."<img src=".$result["thumbnail"].">"."</div>"."</td>";
    $view .= "<td id='titleout'>".
                    "<div id='title'>".$result["name"]."</div>".
                    "<div id='writer'>".$result["writer"]."<span id='cho'>著</span></div>".
                    "<div id='isbn'>"."出版社：".$result["publisher"]."</div>".
                    "<div id='isbn'>"."出版日：".$result["publishedDate"]."</div>".
                    "<div id='isbn'>"."ISBN：".$result["isbn"]."</div>".
                    "<div id='datetime'>"."登録日：".$result["datetime"]."</div>"."</td>";
    $view .= "<td>"."<div id='comme'>".$result["comme"]."</div>"."</td>";
    // 書籍URL、更新、削除のリンク設置
    $view .= "<td>"."<div id='link'>"."<a href =".$result["url"]." target=_blank>"."<img src='img/link_icon.png'>"."</a></div>";
    if($_SESSION["kanri_flg"]=="1"){ 
    $view .=       "<div id='link'>"."<a href ='detail.php?id=".$result["id"]."'>"."<img src='img/reload_icon.png'>"."</a></div>"
                   ."<div id='link' class='del'>"."<a href ='delete.php?id=".$result["id"]."'";
    $view .= ' onclick="return confirm';
    $view .= "('完全に消去されます。元には戻りません！');";
    $view .= '">';
    $view .= "<img src='img/delete_icon.png'>". "</a></div>";
    }
    $view .= "</td></tr>";

        //  "<tr>".
        //      "<td>".$result["name"]."</td>".
        //      "<td>".$result["writer"]."</td>".
        //      "<td>".$result["url"]."</td>".
        //      "<td>".$result["comme"]."</td>".
        //      "<td>".$result["isbn"]."</td>".
        //      "<td>".$result["datetime"]."</td>"."</tr>";

  }
}
$idsend = $result["id"];

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
<style>
  #title{color:#009; font-size: 16px; font-weight: bold; padding: 0;}
  #writer{color:#900; font-size: 14px; font-weight: bold; padding: 0;}
  #cho{color:#000; font-size: 8px; padding: 0; font-weight: normal;}
  #isbn{font-size: 8px; padding: 0;}
  #comme{font-size: 12px; padding: 0 5px;}
  #datetime{font-size: 6px; padding: 0;}
  #titleout{padding: 5px; width:25%;}
  #thumb{width:64px; padding:0 1px;}
  img{width:100%;}
  #link{width:24px; padding:2px;}
  .logout{font-size:10px;}
</style>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body id="main">


<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <p class="navbar-brand">MY 本棚　<?=$_SESSION["name"]?>さんでログイン中</p>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron">
    <form method="post" action="search.php">
      <table>
        <tr><td><input type="text" name="search" size="40" id="search"></textArea></td>
            <td><input type="submit" value="登録検索"></td>
            <?php if($_SESSION["kanri_flg"]=="1"){ ?>
            <td><a class="navbar-brand" href="index.php">書籍登録</a></td>
            <?php } ?>
            <td><a class="logout" href="logout.php">＜ログアウト＞</a></td>
            <td><a class="logout" href="member.php">＜登録情報＞</a></td>
        </tr>
     </table>
     </form>
    <table border= "1px">
    <?=$view?>
    <!-- <tr>
        <td><div id="title">書籍名</div>
            <div id="writer">著者名</div>
            <div id="isbn">ISBN</div>
            <div id="datetime">登録日時</div>
        </td>
        <td>
            <div id="comme">詳細</div>
        </td>
        <td>
            <div id="link">LINK</div>
        </td>
    </tr> -->
    </table>
    </div>
</div>
<!-- Main[End] -->

</body>
</html>


<!-- ."<a href ='delete.php?id=".$result["id"]."'>" -->