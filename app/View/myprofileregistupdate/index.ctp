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
<body>
<form action="/myprofileregistupdate/regist" method="post">
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
			<h3>MyProfile作成</h3>
			</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th class="success" style="width: 400px;">社員番号</th>
					<td><input type="text" class="form-control input-sm" name="empNo" value="<?php echo($empNo); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">趣味</th>
					<td><input type="text" class="form-control input-sm" name="hobby" value="<?php echo($hobby); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">最寄り駅</th>
					<td><input type="text" class="form-control input-sm" name="nearestStation" value="<?php echo($nearestStation); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">好きな食べ物</th>
					<td><input type="text" class="form-control input-sm" name="favoriteFood" value="<?php echo($favoriteFood); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">嫌いな食べ物</th>
					<td><input type="text" class="form-control input-sm" name="leastFavoriteFood" value="<?php echo($leastFavoriteFood); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">出身地</th>
					<td><input type="text" class="form-control input-sm" name="birthPlace" value="<?php echo($birthPlace); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">長所</th>
					<td><input type="text" class="form-control input-sm" name="advantage" value="<?php echo($advantage); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">短所</th>
					<td><input type="text" class="form-control input-sm" name="shortcoming" value="<?php echo($shortcoming); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問１：あなたの座右の銘はなんですか？</th>
					<td><input type="text" class="form-control input-sm" name="question1" value="<?php echo($question1); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問２：最近のマイブームはなんですか？</th>
					<td><input type="text" class="form-control input-sm" name="question2" value="<?php echo($question2); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問３：透明人間になれたら何をしますか？</th>
					<td><input type="text" class="form-control input-sm" name="question3" value="<?php echo($question3); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問４：異性に言われたい一言は？</th>
					<td><input type="text" class="form-control input-sm" name="question4" value="<?php echo($question4); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問５：宝くじ３億円があたったら何に使いますか？</th>
					<td><input type="text" class="form-control input-sm" name="question5" value="<?php echo($question5); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問６：あなたに影響を与えた人はどんな人ですか？</th>
					<td><input type="text" class="form-control input-sm" name="question6" value="<?php echo($question6); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問７：生きている間に１度はやってみたいことは？</th>
					<td><input type="text" class="form-control input-sm" name="question7" value="<?php echo($question7); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問８：あなたの泣ける歌はなんですか？</th>
					<td><input type="text" class="form-control input-sm" name="question8" value="<?php echo($question8); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問９：次の文に対して、○○に適当な言葉をいれて下さい。</th>
					<td><input type="text" class="form-control input-sm" name="question9" value="<?php echo($question9); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問１０：スポーツは何かやっていましたか？</th>
					<td><input type="text" class="form-control input-sm" name="question10" value="<?php echo($question10); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問１１：お酒は好きなほうですか？</th>
					<td><input type="text" class="form-control input-sm" name="question11" value="<?php echo($question11); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問１２：休日はどのように過ごしますか？</th>
					<td><input type="text" class="form-control input-sm" name="question12" value="<?php echo($question12); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問１３：経験してきた仕事・アルバイトはありますか？</th>
					<td><input type="text" class="form-control input-sm" name="question13" value="<?php echo($question13); ?>" ></td>
				</tr>
				<tr>
					<th class="success" style="width: 400px;">質問１４：社会人に必要なことは何だと思いますか？</th>
					<td><input type="text" class="form-control input-sm" name="question14" value="<?php echo($question14); ?>" ></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12" align="right">
			<input type="submit" class="btn btn-primary" value="登録">
			<a href="/MyProfile"><input type="button" class="btn btn-primary" value="キャンセル"/></a>
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
