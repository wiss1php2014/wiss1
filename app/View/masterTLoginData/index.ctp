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

	<script src="../js/jquery-2.1.1.js"></script>
	<script language="Javascript">
	$().ready(function() {

		// 行クリック時
		$("#loginDataList tr").click(function() {

			// クリック行を保持
			var recordIndex = $("#loginDataList tr").index($(this));
			if (recordIndex < 0) return;

			// 背景色初期化
			$("#loginDataList tr").each(function(){
				$(this).css("background-color", '#FFFFFF');
			});

			// 社員番号をhiddenに設定
			var empNo = $(this).find("td").eq(1).text();
			$("[name='hidden_upd_no']").val(empNo);
			$("[name='hidden_del_no']").val(empNo);

			// 背景色設定
			$(this).css("background-color", '#DFF0D8');
		});

	});
	</script>
</head>
<body>
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
			<h3>ユーザ一覧</h3>
			</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-bordered table-hover" id="table_main">
					<thead>
						<tr class="success">
							<th>No.</th>
							<th>社員番号</th>
							<th>メールアドレス</th>
							<th>パスワード</th>
							<th>権限</th>
							<th>登録者</th>
							<th>登録年月日</th>
							<th>更新者</th>
							<th>更新年月日</th>
						</tr>
					</thead>
					<tbody id="loginDataList">
						<?php if ($loginDatas != null && $loginDatas !="none"): ?>
						<?php $count =1 ;?>
						<?php foreach ($loginDatas as $loginData): ?>
							<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $loginData['TLoginData']['emp_no']; ?></td></a>
								<td><?php echo $loginData['TLoginData']['mail_address']; ?></td></a>
								<td><?php echo $loginData['TLoginData']['password']; ?></td></a>
								<td><?php echo $loginData['TLoginData']['authority']; ?></td></a>
								<td><?php echo $loginData['TLoginData']['create_user']; ?></td></a>
								<td><?php echo(date('Y年n月j日', strtotime($loginData['TLoginData']['create_date']))); ?></td>
								<td><?php echo $loginData['TLoginData']['update_user']; ?></td></a>
								<td><?php echo(date('Y年n月j日', strtotime($loginData['TLoginData']['update_ymd']))); ?></td>
							</tr>
						<?php $count++; ?>
						<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
				<h5>※更新/削除時は対象レコードを選択してください。</h5>
				<br/>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12" align="right">
			<a href="javascript:document.update_btn.submit()"><input type="button" class="btn btn-primary" value="更新"/></a>
			<a href="javascript:document.delete_btn.submit()"><input type="button" class="btn btn-primary" value="削除"/></a>
			<a href="/menu"><input type="button" class="btn btn-primary" value="戻る"/></a>
		</div>
	</div>
</div>

<form name="update_btn" action="/masterTLoginData/preUpdate" method="post">
	<input type="hidden" name="hidden_upd_no" value="0000" />
</form>

<form name="delete_btn" action="/masterTLoginData/delete" method="post">
	<input type="hidden" name="hidden_del_no" value="0000" />
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
