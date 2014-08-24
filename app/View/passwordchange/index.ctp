<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My Wiss1</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/passwordchange.css" rel="stylesheet">

	<script src="../js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/docs.min.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
<form name="passwordchange" class="form-signin" action="/passwordchange/update" method="post">
	<h3 class="form-signin-heading">パスワード変更</h3>
	<p><h4 class="form-signin-heading"><?php echo($errMsg); ?></h4></p>
	<input type="text" class="form-control" name="mailAddress" placeholder="メールアドレス" value="<?php echo($mailAddress); ?>" required/>
	<input type="password" class="form-control" name="nowPassword" placeholder="変更前パスワード" value="<?php echo($nowPassword); ?>" required/>
	<input type="password" class="form-control" name="newPassword" placeholder="変更後パスワード" value="<?php echo($newPassword); ?>" required/>
	<input type="password" class="form-control" name="newPasswordConfirm" placeholder="変更後パスワード(再入力)" value="<?php echo($newPasswordConfirm); ?>" required/>
	<input type="submit" class="btn btn-lg btn-primary btn-block" value="変更"/>
	<input type="reset" class="btn btn-lg btn-primary btn-block" value="クリア"/>
</form>
</div>
</body>
</html>