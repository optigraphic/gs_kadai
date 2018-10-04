<?PHP
$words = $_GET["words"];

// try {
//     return new PDO('mysql:dbname=gs_db; charset=utf8; host=localhost','root','');
//   } catch (PDOException $e) {
//     exit('DB_CONECTION_ERROR:'.$e->getMessage());
//   }
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <title>本棚</title>
</head>
<body>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <p class="navbar-brand">書籍検索</p>
      </div>
    </div>
  </nav>
</header>

<input type="hidden" name="wordlink" id="wordslink" value="https://www.googleapis.com/books/v1/volumes?q=<?=$words?>">

<form method="POST" action="words2.php.php">
    <input type="hidden" name="name" size="40" id="titleT" value="">
    <input type="hidden" name="writer" size="40" id="writerT" value="">
    <input type="hidden" name="publisher" size="40" id="publisherT" value="">
    <input type="hidden" name="publishedDate" size="40" id="publishedDateT" value="">
    <input type="hidden" name="isbnT" value="">
</form>

<p>APIから値を取得しconsol.logには出せるけど、</p>
<p>そこから検索結果一覧　＞選択　＞入力画面へ自動入力</p>
<p>への流れをどうすれば良いやら・・・。いろいろ試したけどうまく動かず。</p>

<a class="navbar-brand" href="index.php">index.phpへ</a>

<script>
$(window).on("load",function(){
    // alert("読んだで");
    const wordsurl = $("#wordslink").val();
    console.log(wordsurl);
    $.getJSON(wordsurl ,function(wdata){
        console.log(wdata);
        console.log(wdata.items.length);
        const long=wdata.items.length;
        if(!wdata){
                alert("検索結果はありません");
            }else{
            for (var i=0; i<long; i++) {
                console.log(i);
                console.log(wdata.items[i].volumeInfo.title);
                console.log(wdata.items[i].volumeInfo.authors);
                console.log(wdata.items[i].volumeInfo.publisher);
                console.log(wdata.items[i].volumeInfo.publishedDate);
                console.log(wdata.items[i].volumeInfo.isbn);
                // for文を使う？
                $("#titleT").text(wdata.items[i].volumeInfo.title);
                $("#writerT").text(wdata.items[i].volumeInfo.authors);
                $("#publisherT").text(wdata.items[i].volumeInfo.publisher);
                $("#publishedDateT").text(wdata.items[i].volumeInfo.publishedDate);
                $("#isbnT").text(wdata.items[0].volumeInfo.isbn);
            };
        };
    });
});
</script>

<style>
  td{padding:0 5px;}
  #titleT{color:#009; font-size: 14px; font-weight: bold; padding: 0 5px;}
  #writer{color:#900; font-size: 14px; font-weight: bold; padding: 0;}
  #cho #pan #kan{color:#000; font-size: 8px; padding: 0; font-weight: normal;}
  #isbn{font-size: 8px; padding: 0;}
  #comme{font-size: 12px; padding: 0 5px;}
  #datetime{font-size: 6px; padding: 0;}
  #titleout{padding: 5px; width:25%;}
  #thumb{width:64px; padding:0;}
  img{width:100%;}
  #link,#url{width:24px; padding:2px}
</style>

</body>
</html>
