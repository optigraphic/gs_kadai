<?php
session_start();
// select.phpからIDを受け取る
$id = $_GET["id"];

// DB接続
include "funcs.php";
chkSsid();
$pdo = db_con();

// DBからIDの１行を取得
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt -> bindValue(":id",$id ,PDO::PARAM_INT);
$status = $stmt->execute();

// エラーが無ければ$rowに配列を格納
if ($status == false) {
    sqlError($stmt);
} else {
    $row = $stmt->fetch();
}
?>


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
    <div class="navbar-header"><p class="navbar-brand">書籍更新</p></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<form method="POST" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新：BOOKS DATE BASE</legend>
    <table>
     <tr><td>書籍名</td><td><input type="text" name="name" size="40" id="name" value="<?=$row["name"]?>"></td></tr>
     <tr><td>著者</td><td><input type="text" name="writer" size="40" id="writer" value="<?=$row["writer"]?>"></td></tr>
     <tr><td>出版社</td><td><input type="text" name="publisher" size="40" id="publisher" value="<?=$row["publisher"]?>"></td></tr>
     <tr><td>出版日</td><td><input type="text" name="publishedDate" size="40" id="publishedDate" value="<?=$row["publishedDate"]?>"></td></tr>
     <tr><td>URL</td><td><input type="text" name="url" size="40" id="url" value="<?=$row["url"]?>"></td></tr>
     <tr><td>概要</td><td><textArea name="comme" rows="4" cols="40" id="comme"><?=$row["comme"]?></textArea></td></tr>
     <tr><td>ISBN</td><td><input type="text" name="isbn" size="40" id="isbn" value="<?=$row["isbn"]?>" placeholder="ハイフン(-)は入れずに入力で自動入力" ></td><td><div id="isbngo">ISBN検索</div></td></tr>
     <tr><td></td><td><input type="submit" value="送信"><span id="txdel">　入力消去</span></td></tr>
     </table>
     <input type="hidden" name="id" value="<?=$row["id"]?>">
    </fieldset>
    <input type="hidden" name="thumbnail" id="thumbnail" value="<?=$row["thumbnail"]?>">
    <input type="hidden" name="datetime" id="datetime" value="<?=$row["datetime"]?>">
    <a class="navbar-brand" href="select.php">MY本棚へ</a>
  </div>
  <div id="noisbn">
  </div>
</form>


<script>
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
      $("#noisbn").html('<p class="nobooks" id="nobooks">該当する書籍がないか、ISBNが間違ってます。</p>');
      $('#noisbn > p').fadeOut(3000);

    } else {

// 書籍が存在したら、JSONデータを取得
      $("#thumbnail").val(bdata.items[0].volumeInfo.imageLinks.smallThumbnail);
      $("#name").val(bdata.items[0].volumeInfo.title);
      $("#writer").val(bdata.items[0].volumeInfo.authors);
      // $("#publisher").val(bdata.items[0].volumeInfo.publisher);
      $("#publishedDate").val(bdata.items[0].volumeInfo.publishedDate);
      $("#url").val(bdata.items[0].volumeInfo.infoLink);
      $("#comme").val(bdata.items[0].volumeInfo.description);

      console.log(bdata.items[0].volumeInfo.imageLinks.smallThumbnail);
      console.log(bdata.items[0].volumeInfo.authors);
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
        console.log(iddata.volumeInfo.publisher);
        if(!iddata){
          $("#publisher").text("");
        }else{
          $("#publisher").val(iddata.volumeInfo.publisher);
        }
      });
    });

});

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

</script>

<style>
#isbngo{
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
#isbngo:active {
    border-bottom: solid 2px #ccc;
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.30);
}
#txdel{
  font-size:12px;
}
</style>

</body>
</html>