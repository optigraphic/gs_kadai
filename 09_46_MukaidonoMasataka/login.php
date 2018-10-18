<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<title>ログイン</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
  <div class="navbar-header"><p class="navbar-brand">ログイン</p></div>
  </nav>
  
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
ID:<input type="text" name="lid">
PW:<input type="password" name="lpw">
<input type="submit" value="LOGIN">
<div><p class="navbar-brand"><a href ="join.php">＞新規登録はこちら</a></p></div>
</form>


</body>
</html>