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

	<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
	<script>
	<!--
	$(function(){

		// 個別メニューのボタンIDと領域IDの連想配列定義
		var defs = {
				"master_btn": "master_menu",
				"myprofile_btn": "myprofile_menu",
				"career_btn": "career_menu"
		};

		// 個別メニューの初期状態とイベント登録
		for (var btnId in defs) {
			var button = $("#" + btnId);
			button.attr("myToggleState", "minus");
			button.children("span").attr("class", "glyphicon glyphicon-minus");
			button.on("click", function(){
				$("#" + defs[$(this).prop("id")]).slideToggle("fast");
				var state = $(this).attr("myToggleState");
				if (state == "plus") {
					$(this).attr("myToggleState", "minus");
					$(this).children("span").attr("class", "glyphicon glyphicon-minus");
				}
				else if (state == "minus") {
					$(this).attr("myToggleState", "plus");
					$(this).children("span").attr("class", "glyphicon glyphicon-plus");
				}
			});
		}

		// ALLプラスボタンのイベント登録
		var expandBtn = $("#expand_btn");
		expandBtn.children("span").attr("class", "glyphicon glyphicon-plus");
		expandBtn.on("click", function(){
			for (var key in defs) {
				$("#" + defs[key]).slideDown("fast");
				$("#" + key).attr("myToggleState", "minus");
				$("#" + key).children("span").attr("class", "glyphicon glyphicon-minus");
			}
		});

		// ALLマイナスボタンのイベント登録
		var collapseBtn = $("#collapse_btn");
		collapseBtn.children("span").attr("class", "glyphicon glyphicon-minus");
		collapseBtn.on("click", function(){
			for (var key in defs) {
				$("#" + defs[key]).slideUp("fast");
				$("#" + key).attr("myToggleState", "plus");
				$("#" + key).children("span").attr("class", "glyphicon glyphicon-plus");
			}
		});

	});
	//-->
	</script>
</head>
<body>
<form name="menu">
<div class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a href="/menu" class="navbar-brand"><span class="glyphicon glyphicon-user"></span> My Wiss1</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="/menu"><span class="glyphicon glyphicon-home"></span> ホーム</a></li>
				<li><a href="/passwordchange"><span class="glyphicon glyphicon-cog"></span> パスワード変更</a></li>
				<li><a href="/logout"><span class="glyphicon glyphicon-share"></span> ログアウト</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="container">

	<div class="row">
		<div class="col-md-12 text-right">
			<span class="badge">ALL</span>
			<button type="button" class="btn btn-default" id="expand_btn">
				<span></span>
			</button>
			<button type="button" class="btn btn-default" id="collapse_btn">
				<span></span>
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6" style="display: inline-block; _display: inline;">
			<button type="button" class="btn btn-default" id="master_btn">
				<span></span>
			</button>
			<h3 style="display: inline-block; _display: inline;">　マスタ管理</h3>
		</div>
	</div>
	<div id="master_menu">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">ユーザ情報管理</div>
					<div class="panel-body">
						<ul>
							<li><a href="/menu/master">ユーザマスタ登録</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">コード情報管理</div>
					<div class="panel-body">
						<ul>
							<li><a href="/menu/master">コードマスタ登録</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">社員情報管理</div>
					<div class="panel-body">
						<ul>
							<li><a href="/menu/master">社員マスタ登録</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6" style="display: inline-block; _display: inline;">
			<button type="button" class="btn btn-default" id="myprofile_btn">
				<span></span>
			</button>
			<h3 style="display: inline-block; _display: inline;">　MyProfile管理</h3>
		</div>
	</div>
	<div id="myprofile_menu">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">MyProfile情報管理</div>
					<div class="panel-body">
						<ul>
							<li><a href="/myProfile">MyProfile検索</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6" style="display: inline-block; _display: inline;">
			<button type="button" class="btn btn-default" id="career_btn">
				<span></span>
			</button>
			<h3 style="display: inline-block; _display: inline;">　経歴書管理</h3>
		</div>
	</div>
	<div id="career_menu">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">経歴書情報管理</div>
					<div class="panel-body">
						<ul>
							<li><a href="/careeroutput">経歴書出力</a></li>
						</ul>
					</div>
				</div>
			</div>
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
