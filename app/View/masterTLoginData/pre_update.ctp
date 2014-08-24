<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>登録データ更新</title>
</head>

<body>
	<p>従業員番号<br>
		<input type="text" value="<?php print($loginData[0]['TLoginData']['emp_no']); ?>" required/><br>
	</p>
	<p>メールアドレス<br>
		<input type="text" value="<?php print($loginData[0]['TLoginData']['mail_address']); ?>" required/>
	</p>
	<p>パスワード<br>
		<input type="text" value="<?php print($loginData[0]['TLoginData']['password']); ?>" required/>
	</p>
	<p>権限<br>
		<input type="text" value="<?php print($loginData[0]['TLoginData']['authority']); ?>" required/>
	</p>

	<form action="/masterTLoginData/update" method="post">
		<p><input type="submit" value="更新" /></p>
	</form>

	<form action="/masterTLoginData/index" method="post">
		<p><input type="submit" value="戻る" /></p>
	</form>
</body>

</html>