<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My Wiss1</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<form action="masterTLoginData/update" method="post">
<div class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a href="/menu" class="navbar-brand"><span class="glyphicon glyphicon-user"></span> My Wiss1</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="/menu"><span class="glyphicon glyphicon-home"></span> ホーム</a></li>
				<li><a href="/passwordchange"><span class="glyphicon glyphicon-cog"></span> パスワード変更</a></li>
				<li><a href="/logout"><span class="glyphicon glyphicon-share"></span> ログアウト</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3>ユーザ更新</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th class="success" style="width: 300px;">社員番号</th>
					<td><input type="text" class="form-control input-sm" value="<?php print($loginData[0]['TLoginData']['emp_no']); ?>" required></td>
				</tr>
				<tr>
					<th class="success" style="width: 300px;">メールアドレス</th>
					<td><input type="text" class="form-control input-sm" value="<?php print($loginData[0]['TLoginData']['mail_address']); ?>" required></td>
				</tr>
				<tr>
					<th class="success" style="width: 300px;">パスワード</th>
					<td><input type="text" class="form-control input-sm" value="<?php print($loginData[0]['TLoginData']['password']); ?>" required></td>
				</tr>
				<tr>
					<th class="success" style="width: 300px;">権限</th>
					<td><input type="text" class="form-control input-sm" value="<?php print($loginData[0]['TLoginData']['authority']); ?>" required></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12" align="right">
			<input type="submit" class="btn btn-primary" value="更新">
			<a href="/masterTLoginData"><input type="button" class="btn btn-primary" value="キャンセル"/></a>
		</div>
	</div>
</div>
</form>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<hr>
			<p>Copyright &copy; Wiss1, Inc. All Rights Reserved.</p>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
