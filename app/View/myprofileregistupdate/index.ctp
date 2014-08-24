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
<form name="myprofilesearch" class="form-myprofile" action="/myprofileregistupdate/regist" method="post">
	<h3>MyProfile作成</h3>
	<h4 class="form-signin-heading"><?php echo($errMsg); ?></h4>
	<input type="text" class="form-control" name="joinedDate" placeholder="社員番号" value="<?php echo($empNo); ?>" disabled/>
	<input type="text" class="form-control" name="hobby" placeholder="趣味" value="<?php echo($hobby); ?>"/>
	<input type="text" class="form-control" name="nearestStation" placeholder="最寄駅" value="<?php echo($nearestStation); ?>"/><br>
	<input type="text" class="form-control" name="favoriteFood" placeholder="好きな食べ物" value="<?php echo($favoriteFood); ?>"/>
	<input type="text" class="form-control" name="leastFavoriteFood" placeholder="嫌いな食べ物" value="<?php echo($leastFavoriteFood); ?>"/>
	<input type="text" class="form-control" name="birthPlace" placeholder="出身地" value="<?php echo($birthPlace); ?>"/><br>
	<input type="text" class="form-control" name="advantage" placeholder="長所" value="<?php echo($advantage); ?>"/>
	<input type="text" class="form-control" name="shortcoming" placeholder="短所" value="<?php echo($shortcoming); ?>"/>
	<input type="text" class="form-control" style="visibility:hidden" />
	<input type="text" class="form-control2" name="question1" placeholder="質問１：あなたの座右の銘はなんですか？" value="<?php echo($question1); ?>"/><br>
	<input type="text" class="form-control2" name="question2" placeholder="質問２：最近のマイブームはなんですか？" value="<?php echo($question2); ?>"/><br>
	<input type="text" class="form-control2" name="question3" placeholder="質問３：透明人間になれたら何をしますか？" value="<?php echo($question3); ?>"/><br>
	<input type="text" class="form-control2" name="question4" placeholder="質問４：異性に言われたい一言は？" value="<?php echo($question4); ?>"/><br>
	<input type="text" class="form-control2" name="question5" placeholder="質問５：宝くじ３億円があたったら何に使いますか？" value="<?php echo($question5); ?>"/><br>
	<input type="text" class="form-control2" name="question6" placeholder="質問６：あなたに影響を与えた人はどんな人ですか？" value="<?php echo($question6); ?>"/><br>
	<input type="text" class="form-control2" name="question7" placeholder="質問７：生きている間に１度はやってみたいことは？" value="<?php echo($question7); ?>"/><br>
	<input type="text" class="form-control2" name="question8" placeholder="質問８：あなたの泣ける歌はなんですか？" value="<?php echo($question8); ?>"/><br>
	<input type="text" class="form-control2" name="question9" placeholder="質問９：次の文に対して、○○に適当な言葉をいれて下さい。" value="<?php echo($question9); ?>"/><br>
	<input type="text" class="form-control2" name="question10" placeholder="質問１０：スポーツは何かやっていましたか？" value="<?php echo($question10); ?>"/><br>
	<input type="text" class="form-control2" name="question11" placeholder="質問１１：お酒は好きなほうですか？" value="<?php echo($question11); ?>"/><br>
	<input type="text" class="form-control2" name="question12" placeholder="質問１２：休日はどのように過ごしますか？" value="<?php echo($question12); ?>"/><br>
	<input type="text" class="form-control2" name="question13" placeholder="質問１３：経験してきた仕事・アルバイトはありますか？" value="<?php echo($question13); ?>"/><br>
	<input type="text" class="form-control2" name="question14" placeholder="質問１４：社会人に必要なことは何だと思いますか？" value="<?php echo($question14); ?>"/><br>
	<input type="submit" class="btn btn-primary regist_btn" value="登録　"/>
	<input type="reset" class="btn btn-primary regist_btn" value="クリア"/>
</form>
</body>
</html>