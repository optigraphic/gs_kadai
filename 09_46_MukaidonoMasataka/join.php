<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>会員登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><p class="navbar-brand">会員登録</p></div>
    </div>
  </nav>
</header>
<div>会員登録をお願いします。</div>
<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="join_act.php" method="post">
NAME:<input type="text" name="name_j">
ID:<input type="text" name="lid_j" placeholder="半角英数のみ" >
PW:<input type="password" name="lpw_j" placeholder="半角英数のみ" >
<input type="submit" value="LOGIN" id="join">
</form>

<script>
$("#join").on("click",function(){
    alert("登録しました");
});
</script>

</body>
</html>