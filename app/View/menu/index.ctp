<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My Wiss1</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/menu.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

	<script src="../js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/docs.min.js" type="text/javascript"></script>
	<script src="../js/menu.js" type="text/javascript"></script>
</head>

<body>
<form name="menu">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<h1 class="site_title">My Wiss1</h1>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/menu/back">ログアウト</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="sidebar">
				<h2 class="menu_title" >メニュー</h2>
				<ul class="nav nav-sidebar">
					<li>
						<a href="/menu/master" target="main_area">マスタメンテナンス</a>
					</li>
					<li>
						<a href="/myProfile" target="main_area">My Profile</a>
					</li>
					<li>
						<a href="/menu/career" target="main_area">経歴書</a>
					</li>
					<li>
						<a href="/passwordchange/" target="main_area">パスワード変更</a>
					</li>
				</ul>
			</div>

			<div class="main">
				<iframe frameborder="0" id="main_area" name="main_area" scrolling="auto" seamless="">iframe非対応</iframe>
			</div>
		</div>
	</div>
</form>
</body>
</html>