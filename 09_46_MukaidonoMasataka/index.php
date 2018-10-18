<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><p class="navbar-brand">書籍登録</p></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<?php
session_start();
include "funcs.php";
chkSsid();
?>

<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>BOOKS DATE BASE</legend>
    <table>
     <tr><td>書籍名</td><td><input type="text" name="name" size="41" id="name" ></td></tr>
     <tr><td>著者</td><td><input type="text" name="writer" size="41" id="writer" ></td></tr>
     <tr><td>出版社</td><td><input type="text" name="publisher" size="41" id="publisher" ></td></tr>
     <tr><td>出版日</td><td><input type="text" name="publishedDate" size="41" id="publishedDate" ></td></tr>
     <tr><td>URL</td><td><input type="text" name="url" size="41" value="http://" id="url" ></td></tr>
     <tr><td>概要</td><td><textArea name="comme" rows="4" cols="40" id="comme" ></textArea></td></tr>
     <tr><td>ISBN</td><td><input type="text" name="isbn" size="41" id="isbn" placeholder="ハイフン(-)は入れずに入力で自動入力" ></td><td><div id="isbngo">ISBN検索</div></td></tr>
     <tr><td>語句検索</td><td><input type="text" name="words" size="41" id="words" placeholder="フリーワード検索（機能してません）" ></td><td><div id="wordsgo">語句検索</div></td></tr>
     <tr><td></td><td><input type="submit" value="送信"><span id="txdel">　入力消去</span></td></tr>
     </table>
    </fieldset>
    <input type="hidden" name="thumbnail" id="thumbnail">
    <a class="navbar-brand" href="select.php">MY本棚へ</a>
  </div>
  <div id="noisbn">
  </div>
</form>

<!-- *************要検討／あとでやる！*******************************************************************
＜＜＜解決済み＞＞＞
<button>のonclickでgoogle books API関数発動させたいのにformのactionのせいで送信されてしまい発動しないのをどうにかする 
解決方法＞＞buttonじゃなくボタン風装飾の文字列にしてclick関数使用？

＜＜＜解決済み＞＞＞
google books APIへISBNで問い合わせると出版社が存在しない。個別IDで問い合わせると出版社が存在する。
APIへの問い合わせの仕方でJSONの内容が若干変わる仕様？
解決方法＞＞ISBNからJSON取得＞取得したJSONから個別IDを取得し、再度個別IDでJSON再取得＞してからformに反映？
******************************************************************************************************-->

<!-- Main[End] -->

<script>
// **************ISBN検索**************
 $("#isbngo").on("click",function(){
  const isbn =$("#isbn").val();
  console.log(isbn);
    // const isbn = $(this).val();
    // console.log(isbn);
    // google books APIに接続
  const Burl = "https://www.googleapis.com/books/v1/volumes?q=isbn:" + isbn;
  console.log(Burl);
    $.getJSON(Burl, function(bdata) {
          // bdataが(!)なければ
        if(!bdata.totalItems) {
          $("#thumbnail").text("");
          $("#name").text("");
          $("#writer").text("");
          // $("#publisher").text("");
          $("#publishedDate").text("");
          $("#url").text("");
          $("#comme").text("");
          $("#isbn").text("");
          $("#noisbn").html('<p class="nobooks" id="nobooks">該当する書籍がないか、ISBNが間違ってます。</p>');
          $('#noisbn > p').fadeOut(5000)
        } else {
    // 書籍が存在したら、JSONデータを取得
          $("#thumbnail").val(bdata.items[0].volumeInfo.imageLinks.smallThumbnail);
          $("#name").val(bdata.items[0].volumeInfo.title);
          $("#writer").val(bdata.items[0].volumeInfo.authors);
          // $("#publisher").val(bdata.items[0].volumeInfo.publisher);
          $("#publishedDate").val(bdata.items[0].volumeInfo.publishedDate);
          $("#url").val(bdata.items[0].volumeInfo.infoLink);
          $("#comme").val(bdata.items[0].volumeInfo.description);

          console.log(bdata.items[0].selfLink);
          console.log(bdata.items[0].volumeInfo.imageLinks.smallThumbnail);
          console.log(bdata.items[0].volumeInfo.authors[0]);
          // console.log(bdata.items[0].volumeInfo.publisher);
          console.log(bdata.items[0].volumeInfo.publishedDate);
          console.log(bdata.items[0].volumeInfo.infoLink);
          console.log(bdata.items[0].volumeInfo.description);
        }
    });
  
    $.getJSON(Burl, function(adata){
    const Bid = adata.items[0].selfLink;
    console.log(Bid);
      $.getJSON(Bid,function(iddata){
        console.log(iddata);
        if(!iddata){
          $("#publisher").text("");
        }else{
          $("#publisher").val(iddata.volumeInfo.publisher);
        }
      });
    });

});

// **************テキスト一斉消去**************
$("#txdel").on("click",function(){
  // alert("おしたで");  
  $("#thumbnail").val("");
  $("#name").val("");
  $("#writer").val("");
  $("#publisher").val("");
  $("#publishedDate").val("");
  $("#url").val("");
  $("#comme").val("");
  $("#isbn").val("");
});

// **************フリーワード検索**************
$("#wordsgo").on("click",function(){
  // alert("おしたで");
  const words ="words.php?words=" + $("#words").val();
  window.location.href = words;
  // console.log(words);
  // const Wurl = "https://www.googleapis.com/books/v1/volumes?q=" + words;
  // console.log(Wurl);
});


</script>
  
<style>
#isbngo,#wordsgo{
  position: relative;
  display: inline-block;
  padding: 0.1em 0.5em;
  text-decoration: none;
  color: #000;
  background: #ddd;/*背景色*/
  border-bottom: solid 2px #bbb;/*少し濃い目の色に*/
  border-radius: 0px;/*角の丸み*/
  box-shadow: inset 0 2px 0 rgba(255,255,255,0.2), 0 2px 2px rgba(0, 0, 0, 0.19);
  /* font-weight: bold; */
}
#isbngo:active ,#wordsgo:active{
    border-bottom: solid 2px #ccc;
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.30);
}
#txdel{
  font-size:12px;
}
</style>


</body>
</html>
