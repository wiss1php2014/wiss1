<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>My Wiss1</title>

	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/login.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
		<script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<div class="container">
<h1 class="text-center">パスワード通知</h1>
<form action="/passwordinform/send" method="post">
	<h5 class="form-signin-heading">メールアドレスを入力してください。</h5>
	<h5 class="form-signin-heading">パスワードが記載されたメールを送信します。</h5>

	<?php if (!empty($errMsg) ){ ?>
		<div class="alert alert-danger">
			<?php echo($errMsg); ?>
		</div>
	<?php } ?>

	<input type="text" class="form-control" name="mailAddress" placeholder="メールアドレス" value="<?php echo($mailAddress); ?>" required autofocus/>
	<input type="submit" class="btn btn-lg btn-primary btn-block" value="送信"/>
	<a href="/login"><span class="glyphicon glyphicon-chevron-left"></span> ログイン画面に戻る</a>
</form>
</div>
</body>
</html>
