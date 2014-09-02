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
<h1 class="text-center">My Wiss1</h1>
<form name="login" class="form-signin" action="/login/auth" method="post">

	<?php if (!empty($errFlg)) : ?>
		<div class="alert alert-danger">
			<p>メールアドレスまたはパスワードに誤りがあります。</p>
		</div>
	<?php endif;?>

	<input type="text" class="form-control" name="mailAddress" value="<?php echo $email;?>" placeholder="メールアドレス" required autofocus/>
	<input type="password" class="form-control" name="password" placeholder="パスワード" required/>
	<input type="submit" class="btn btn-lg btn-primary btn-block" value="ログイン"/>
	<p align="right"><a href="/passwordinform"><span class="glyphicon glyphicon-hand-right"></span> パスワードを忘れた方はコチラ</a></p>
</form>
</div>
</body>
</html>
