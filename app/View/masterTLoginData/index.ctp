<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>ログインデータ管理</title>
</head>

<!-- Javascriptで実装。他の方法がわからんのです。 -->
<script language="Javascript">
// ログインデータ一覧クリック時処理
function Click_Sub(obj) {

	// 選択行位置を取得
	var pos = obj.rowIndex;
	// 本体部分のコントロールを取得
	var myTbl = document.getElementById("table_main");

	// まず、全体の背景色を初期化（白色）する。
	for (var i=0; i<myTbl.rows.length; i++) {
		myTbl.rows[i].style.backgroundColor="#FFFFFF";
	}

	// 従業員番号を隠し項目に設定
	// 共通化ができなかったので、各イベント毎に隠し項目を用意
	document.forms.update_btn.hidden_upd_no.value = myTbl.rows[pos].cells[0].firstChild.data;
	document.forms.delete_btn.hidden_del_no.value = myTbl.rows[pos].cells[0].firstChild.data;

	// 選択行のみ色を変更する。
	obj.style.backgroundColor="#cccccc";
}
</script>

<table width="1170"; border="1"; cellpadding="2"; cellspacing="0"; >
<CAPTION>ログインデータ</CAPTION>

<!-- 一覧のヘッダ部を宣言 -->
<!-- 各項目のサイズは適当です。 -->
<THEAD>
	<tr>
	<th width="100">従業員番号</th>
	<th width="200">アドレス</th>
	<th width="150">パスワード</th>
	<th width="60">権限</th>
	<th width="150">登録者</th>
	<th width="150">登録年月日</th>
	<th width="150">更新者</th>
	<th width="150">更新年月日</th>
	<th width="15"></th>　<!-- スクロールバーの領域 -->
	</tr>
</THEAD>

<!-- DBの取得結果から一覧の本体部分を作成 -->
<TBODY>
	<TR>
	<TD colspan="9">
	<DIV style="height:200px; overflow:auto;">

	<!-- スクロールバーを出すため、本体部分は別テーブルとして宣言 -->
	<!-- 各項目はヘッダ部と同サイズとしています。 -->
	<table border="1"; cellspacing="0" id="table_main">
	<colgroup span="1" width="100"></colgroup>
	<colgroup span="1" width="200"></colgroup>
	<colgroup span="1" width="150"></colgroup>
	<colgroup span="1" width="60"></colgroup>
	<colgroup span="1" width="150"></colgroup>
	<colgroup span="1" width="150"></colgroup>
	<colgroup span="1" width="150"></colgroup>
	<colgroup span="1" width="150"></colgroup>

	<!-- 取得結果をループで回して表示用の領域に設定 -->
	<TBODY>
	<?php foreach ($loginDatas as $loginData): ?>

		<!-- 各行にクリック時イベントを実装 -->
		<TR onclick="Click_Sub(this)">
		<td width="100"><?php echo $loginData['TLoginData']['emp_no']; ?>
		</td>
		<td width="200"><?php echo $loginData['TLoginData']['mail_address']; ?>
		</td>
		<td width="150"><?php echo $loginData['TLoginData']['password']; ?>
		</td>
		<td width="60"><?php echo $loginData['TLoginData']['authority']; ?>
		</td>
		<td width="150"><?php echo $loginData['TLoginData']['create_user']; ?>
		</td>
		<td width="150"><?php echo $loginData['TLoginData']['create_date']; ?>
		</td>
		<td width="150"><?php echo $loginData['TLoginData']['update_user']; ?>
		</td>
		<td width="150"><?php echo $loginData['TLoginData']['update_ymd']; ?>
		</td>
		</TR>
	<?php endforeach; ?>
	</TBODY></TABLE>
	</DIV>
	</TD>
	</TR>
</TBODY>
</TABLE>

<form action="/masterTLoginData/preUpdate" method="post" name="update_btn">
	<input type="hidden" name="hidden_upd_no" value="0000" />
	<p><input type="submit" value="更新" /></p>
</form>

<form action="/masterTLoginData/delete" method="post" name="delete_btn">
	<input type="hidden" name="hidden_del_no" value="0000" />
	<p><input type="submit" value="削除" /></p>
</form>

<form action="/masterTLoginData/back" method="post">
	<p><input type="submit" value="戻る" /></p>
</form>

</html>