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
<form name="myprofilesearch" class="form-myprofile" action="/myProfile/search" method="post">
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
			<h3>MyProfile検索</h3>
			</div>
		<div class="col-md-6">
		</div>
	</div>

	<?php if ($resultList != null && $resultList =="none"): ?>
		<div class="alert alert-danger">
			<?php print("検索結果は0件です。"); ?>
		</div>
	<?php endif; ?>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<tr>
					<th class="success" style="width: 300px;">社員番号</th>
					<td><input type="text" style="ime-mode: disabled" class="form-control input-sm" name="empNo" maxlength="4" value="<?php echo $empNo; ?>" /></td>
				</tr>
				<tr>
					<th class="success" style="width: 300px;">氏名</th>
					<td><input type="text" class="form-control input-sm" name="empName" value="<?php echo $empName; ?>" /></td>
				</tr>
				<tr>
					<th class="success" style="width: 300px;">入社年月</th>
					<td><input type="text" style="ime-mode: disabled" class="form-control input-sm" name="joinedDate" maxlength="6" value="<?php echo $joinedDate; ?>" /></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12" align="right">
			<input type="submit" class="btn btn-primary" value="検索">
			<a href="/myProfile/update"><input type="button" class="btn btn-primary" value="新規作成"/></a>
		</div>
	</div>

	</br>

	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr class="success">
							<th>No.</th>
							<th>社員番号</th>
							<th>氏名</th>
							<th>入社年月</th>
							<th>更新年月日</th>
						</tr>
					</thead>
					<tbody>
						<!--条件分岐(検索結果があればという条件)-->
						<?php if ($resultList != null && $resultList !="none"): ?>
						<?php $count =1 ;?>
						<?php foreach ($resultList as $profileData): ?>
							<tr>
								<td><?php echo $count; ?></td>
								<td><a href="/myProfileDetail?empNo=<?php echo $profileData['TEmployeeData']['emp_no']; ?>"><?php echo $profileData['TEmployeeData']['emp_no']; ?></td></a>
								<td><?php echo $profileData['TEmployeeData']['emp_nm_kanji_lastname']; ?>　<?php echo $profileData['TEmployeeData']['emp_nm_kanji_name']; ?></td>
								<td><?php echo(date('Y年n月j日', strtotime($profileData['TEmployeeData']['joined_date']))); ?></td>
								<td><?php echo(date('Y年n月j日', strtotime($profileData['TProfileData']['update_ymd']))); ?></td>
							</tr>
						<?php $count++; ?>
						<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
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
