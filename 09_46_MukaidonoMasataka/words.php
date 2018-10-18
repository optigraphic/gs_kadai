<?PHP
$words = $_GET["words"];
$url = "https://www.googleapis.com/books/v1/volumes?q=".$words;
// print($w_url);
// SSL証明書が無い時の回避。そもそもSSLって何？
$options['ssl']['verify_peer']=false;
$options['ssl']['verify_peer_name']=false;
$json = file_get_contents($url, false, stream_context_create($options));
// $w_json = file_get_contents($w_url);　SSL証明書があればこの一文。そもそもSSLって何？
// jsonをUTF8に変換
$wjson = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
// jsonをデコード。ってことはこれ以前はjsonではない？
$json_arr = json_decode($wjson,false);

// 取れてるか確認。printは文字列。print_rは配列に使う
// print_r($json_arr);

// 配列内のitem数を数える
$witem = $json_arr->items;
$cnt = count($witem);
$view = "";
for($i=0; $i<$cnt; $i++){
    $wtitle = $json_arr->items[$i]->volumeInfo->title;
    $wwriter = $json_arr->items[$i]->volumeInfo->authors[0];
    $wpub = $json_arr->items[$i]->volumeInfo->publisher;
    $wpubd = $json_arr->items[$i]->volumeInfo->publishedDate;
    $wcomme = $json_arr->items[$i]->volumeInfo->description;
    $wurl = $json_arr->items[$i]->volumeInfo->infoLink;
    $wisbn = $json_arr->items[$i]->volumeInfo->industryIdentifiers[1]->identifier;
    // print_r($cnt);
    $view .= "<div id='tbl'><table border= '1px'>";
    $view .= "<tr><td>"."タイトル：". $wtitle . "</tr></td>";
    $view .= "<tr><td>"."著者：". $wwriter . "</tr></td>";
    $view .= "<tr><td>"."出版社：". $wpub . "</tr></td>";
    $view .= "<tr><td>"."ISBN：". $wisbn . "</td></tr>";
    $view .= "<tr><td>";
    $view .= "<form method='POST' action='index2.php'>";
    $view .= "<input type='hidden' name='wname' value='". $wtitle ."'>";
    $view .= "<input type='hidden' name='wwriter' value='". $wwriter . "'>";
    $view .= "<input type='hidden' name='wpublisher' value='". $wpub . "'>";
    $view .= "<input type='hidden' name='wpublishedDate' value='". $wpubd . "'>";
    $view .= "<input type='hidden' name='wcomme' value='". $wcomme . "'>";
    $view .= "<input type='hidden' name='wurl' value='". $wurl . "'>";
    $view .= "<input type='hidden' name='wisbn' value='". $wisbn . "'>";
    $view .= "<td><input type='submit' value='選択'></td>";
    $view .= "</form>";
    $view .= "</td></tr>";
    $view .= "</table></div>";

    
    // print_r($wtitle);
    // print_r($wwriter);
    // print_r($wpub);
    // print_r($wisbn);
};




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
      <p class="navbar-brand">【検索語句：<?=$words?>】</p>
      </div>
    </div>
  </nav>
</header>




<p>PHPでAPIからJSONを取得はできましたが、</p>
<p>google booksの表記が統一されていないのか、僕の取得の仕方が悪いのか、</p>
<p>itemsによって項目が有ったり無かったりでエラーが出てしまします。</p>
<p>項目が存在しないときは空欄にする方法はどうしたら良いでしょう？</p>
<p>if文で「無かった場合は空欄」という命令が書けませんでした。。。</p>


<?=$view?>

<a class="navbar-brand" href="index.php">index.phpへ</a>

<script>

// jsでもAPIからJSONを取得してみた
// とりあえずコンソールに表示
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
  #link,#url{width:24px; padding:2px;}
  #tbl{padding:5px;}
</style>

</body>
</html>
