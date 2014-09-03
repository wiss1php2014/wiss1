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
			<h3>MyProfile詳細</h3>
		</div>
	</div>

	<?php if (empty($result)) : ?>
		<div class="alert alert-danger">
			<?php print("MyProfile情報が存在しません。"); ?>
		</div>
	<?php else : ?>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered table-striped table-hover">
					<tr>
						<th class="success" style="width: 300px;">社員番号</th>
						<td><?php echo($result['TEmployeeData']['emp_no']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">社員名漢字（姓）</th>
						<td><?php echo($result['TEmployeeData']['emp_nm_kanji_lastname']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">社員名漢字（名）</th>
						<td><?php echo($result['TEmployeeData']['emp_nm_kanji_name']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">社員名カナ（姓）</th>
						<td><?php echo($result['TEmployeeData']['emp_nm_kana_lastname']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">社員名カナ（名）</th>
						<td><?php echo($result['TEmployeeData']['emp_nm_kana_name']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">生年月日</th>
						<td><?php echo(date('Y年n月j日', strtotime($result['TEmployeeData']['date_of_birth']))); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">入社年月日</th>
						<td><?php echo(date('Y年n月j日', strtotime($result['TEmployeeData']['joined_date']))); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">血液型</th>
						<td><?php echo($bloodTypeName); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">趣味</th>
						<td><?php echo($result['TProfileDatas']['hobby']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">最寄駅</th>
						<td><?php echo($result['TProfileDatas']['nearest_station']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">好きな食べ物</th>
						<td><?php echo($result['TProfileDatas']['favorite_food']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">嫌いな食べ物</th>
						<td><?php echo($result['TProfileDatas']['least_favorite_food']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">出身地</th>
						<td><?php echo($result['TProfileDatas']['birth_place']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">長所</th>
						<td><?php echo($result['TProfileDatas']['advantage']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">短所</th>
						<td><?php echo($result['TProfileDatas']['shortcoming']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問１</th>
						<td><?php echo($result['TProfileDatas']['question1']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問２</th>
						<td><?php echo($result['TProfileDatas']['question2']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問３</th>
						<td><?php echo($result['TProfileDatas']['question3']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問４</th>
						<td><?php echo($result['TProfileDatas']['question4']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問５</th>
						<td><?php echo($result['TProfileDatas']['question5']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問６</th>
						<td><?php echo($result['TProfileDatas']['question6']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問７</th>
						<td><?php echo($result['TProfileDatas']['question7']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問８</th>
						<td><?php echo($result['TProfileDatas']['question8']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問９</th>
						<td><?php echo($result['TProfileDatas']['question9']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問１０</th>
						<td><?php echo($result['TProfileDatas']['question10']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問１１</th>
						<td><?php echo($result['TProfileDatas']['question11']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問１２</th>
						<td><?php echo($result['TProfileDatas']['question12']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問１３</th>
						<td><?php echo($result['TProfileDatas']['question13']); ?></td>
					</tr>
					<tr>
						<th class="success" style="width: 300px;">質問１４</th>
						<td><?php echo($result['TProfileDatas']['question14']); ?></td>
					</tr>
				</table>
			</div>
		</div>
	<?php endif; ?>

	<div class="row">
		<div class="col-md-12" align="right">
			<a href="/myprofileregistupdate?empNo=<?php echo($result['TEmployeeData']['emp_no']); ?>"><input type="button" class="btn btn-primary" value="変更"></a>
			<a href="/MyProfile"><input type="button" class="btn btn-primary" value="戻る"/></a>
		</div>
	</div>
</div>

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
