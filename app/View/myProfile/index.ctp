<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>My Wiss1</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/myprofile.css" rel="stylesheet">

	<script src="../js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/docs.min.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
<form name="myprofilesearch" class="form-myprofile" action="/myProfile/search" method="post">
	<h3>MyProfile検索</h3>
	<input type="text" class="form-control" name="empNo" placeholder="社員番号" maxlength="4" value="<?php echo $empNo; ?>" /><br>
	<input type="text" class="form-control" name="empName" placeholder="氏名" value="<?php echo $empName; ?>" /><br>
	<input type="text" class="form-control" name="joinedDate" placeholder="入社年月" maxlength="6" value="<?php echo $joinedDate; ?>" /><br>
	<input type="submit" class="btn btn-primary search_btn" value="検索"/>
</form>

<div class="myprofile_table_wrap">
	<table align="center" class="myprofile_table">
		<tr>
			<th>No.</th>
			<th>社員番号</th>
			<th>氏名</th>
			<th>入社年月日</th>
			<th>更新年月日</th>
		</tr>

		<!--条件分岐(検索結果があればという条件)-->
		<?php if ($resultList != null && $resultList !="none"): ?>
		<?php $count =1 ;?>
		<?php foreach ($resultList as $profileData): ?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><a href="/myProfile/update"><?php echo $profileData['TEmployeeData']['emp_no']; ?></td></a>
			<td><?php echo $profileData['TEmployeeData']['emp_nm_kanji_lastname']; ?>　<?php echo $profileData['TEmployeeData']['emp_nm_kanji_name']; ?></td>
			<td><?php echo $profileData['TEmployeeData']['joined_date']; ?></td>
			<td><?php echo $profileData['TProfileData']['update_ymd']; ?></td>
		</tr>
		<?php $count++; ?>
		<?php endforeach; ?>
		<?php endif; ?>
	</table>
	<?php if ($resultList != null && $resultList =="none"): ?>
		<br><?php print("検索結果は0件です。"); ?>
	<?php endif; ?>
	<a href="/myProfile/update"><input type="button" class="btn btn-primary regist_btn" value="新規登録"/></a>
</div>
</div>
</body>
</html>