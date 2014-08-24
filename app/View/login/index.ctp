<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My Wiss1</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/login.css" rel="stylesheet">

	<script src="../js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/docs.min.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
<form name="login" class="form-signin" action="/login/auth" method="post">
	<h3 class="form-signin-heading">My Wiss1</h3>
	<input type="text" class="form-control" name="mailAddress" placeholder="メールアドレス" required/>
	<input type="password" class="form-control" name="password" placeholder="パスワード" required/>
	<input type="submit" class="btn btn-lg btn-primary btn-block" value="ログイン"/>
	<p align="right"><a href="/passwordinform">パスワードを忘れた方はコチラ</a></p>
</form>
</div>
</body>
</html>