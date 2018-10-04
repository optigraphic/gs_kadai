<?php
include "funcs.php";
$pdo = db_con();

$search = $_POST["search"];

// print($sql);

try{
	// データベースへの接続を表すPDOインスタンスを生成
	// $pdo = new PDO($name,$writer,$url,$comme,$isbn,sysdate());

	//  SQL文を作って
	$sql = "SELECT * FROM gs_bm_table WHERE CONCAT(name,writer,comme,isbn) LIKE '%".$search."%' ";

	// SQL文を装填
	$stmt = $pdo->prepare($sql);
    // $stmt -> bindParam(":comme",$comme);

	// SQL文をDBに発射
    // SQL文をDBで実行
	$stmt -> execute(); //実行

    // 1行ずつ取得
    $view="";
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
        $view .= "<td>"."<div id='link'>"."<a href =".$result["url"]." target=_blank>"."<img src='img/link_icon.png'>"."</a></div>"
                    ."<div id='link'>"."<a href ='detail.php?id=".$result["id"]."'>"."<img src='img/reload_icon.png'>"."</a></div>"
                    ."<div id='link' class='del'>"."<a href ='delete.php?id=".$result["id"]."'>"."<img src='img/delete_icon.png'>"."</a></div>"
                    ."</td>";
        $view .= "</tr>";
    
      }
	// 接続を閉じる
	$pdo = null;
}catch (PDOException $e) {
	// UTF8に文字エンコーディングを変換します
	echo mb_convert_encoding($e->getMessage(),'UTF-8','SJIS-win');
	die();
}
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
  #thumb{width:64px; padding:0;}
  img{width:100%;}
  #link{width:24px; padding:2px}
</style>
</head>

<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <p class="navbar-brand">MY 本棚</p>
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
        <tr><td><input type="text" name="search" size="40" id="search" value="<?=$search?>"></textArea></td>
            <td><input type="submit" value="語句検索"></td>
            <td><a class="navbar-brand" href="index.php">書籍登録</a></td>
            <td><a class="navbar-brand" href="select.php">書籍全表示</a></td>
        </tr>
     </table>
     </form>
    <table border= "1px">
        <?=$view?>
    </table>
    </div>
</div>
<!-- Main[End] -->

</body>
</html>
