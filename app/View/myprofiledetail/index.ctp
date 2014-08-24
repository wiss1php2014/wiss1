<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>MyProfile詳細画面</title>
	<script type="text/javascript">
	</script>
</head>
<body>
<div>
    <p>MyProfile詳細画面</p>
    <?php if(empty($result)) : ?>
		データがありません。
    <?php else :?>
      <table border ="1">
        <tr>
          <th>社員番号</th>
          <td><?php echo($result['TEmployeeData']['emp_no']); ?></td>
        </tr>
        <tr>
          <th>社員名漢字（姓）</th>
          <td><?php echo($result['TEmployeeData']['emp_nm_kanji_lastname']); ?></td>
        </tr>
        <tr>
          <th>社員名漢字（名）</th>
          <td><?php echo($result['TEmployeeData']['emp_nm_kanji_name']); ?></td>
        </tr>
        <tr>
          <th>社員名カナ（姓）</th>
          <td><?php echo($result['TEmployeeData']['emp_nm_kana_lastname']); ?></td>
        </tr>
        <tr>
          <th>社員名カナ（名）</th>
          <td><?php echo($result['TEmployeeData']['emp_nm_kana_name']); ?></td>
        </tr>
        <tr>
          <th>生年月日</th>
          <td><?php echo(date('Y年n月j日', strtotime($result['TEmployeeData']['date_of_birth']))); ?></td>
        </tr>
        <tr>
          <th>入社年月日</th>
          <td><?php echo(date('Y年n月j日', strtotime($result['TEmployeeData']['joined_date']))); ?></td>
        </tr>
        <tr>
          <th>血液型</th>
          <td><?php echo($bloodTypeName); ?></td>
        </tr>
        <tr>
          <th>趣味</th>
          <td><?php echo($result['TProfileDatas']['hobby']); ?></td>
        </tr>
        <tr>
          <th>最寄駅</th>
          <td><?php echo($result['TProfileDatas']['nearest_station']); ?></td>
        </tr>
        <tr>
          <th>好きな食べ物</th>
          <td><?php echo($result['TProfileDatas']['favorite_food']); ?></td>
        </tr>
        <tr>
          <th>嫌いな食べ物</th>
          <td><?php echo($result['TProfileDatas']['least_favorite_food']); ?></td>
        </tr>
        <tr>
          <th>出身地</th>
          <td><?php echo($result['TProfileDatas']['birth_place']); ?></td>
        </tr>
        <tr>
          <th>長所</th>
          <td><?php echo($result['TProfileDatas']['advantage']); ?></td>
        </tr>
        <tr>
          <th>短所</th>
          <td><?php echo($result['TProfileDatas']['shortcoming']); ?></td>
        </tr>
        <tr>
          <th>質問１</th>
          <td><?php echo($result['TProfileDatas']['question1']); ?></td>
        </tr>
        <tr>
          <th>質問２</th>
          <td><?php echo($result['TProfileDatas']['question2']); ?></td>
        </tr>
        <tr>
          <th>質問３</th>
          <td><?php echo($result['TProfileDatas']['question3']); ?></td>
        </tr>
        <tr>
          <th>質問４</th>
          <td><?php echo($result['TProfileDatas']['question4']); ?></td>
        </tr>
        <tr>
          <th>質問５</th>
          <td><?php echo($result['TProfileDatas']['question5']); ?></td>
        </tr>
        <tr>
          <th>質問６</th>
          <td><?php echo($result['TProfileDatas']['question6']); ?></td>
        </tr>
        <tr>
          <th>質問７</th>
          <td><?php echo($result['TProfileDatas']['question7']); ?></td>
        </tr>
        <tr>
          <th>質問８</th>
          <td><?php echo($result['TProfileDatas']['question8']); ?></td>
        </tr>
        <tr>
          <th>質問９</th>
          <td><?php echo($result['TProfileDatas']['question9']); ?></td>
        </tr>
        <tr>
          <th>質問１０</th>
          <td><?php echo($result['TProfileDatas']['question10']); ?></td>
        </tr>
        <tr>
          <th>質問１１</th>
          <td><?php echo($result['TProfileDatas']['question11']); ?></td>
        </tr>
        <tr>
          <th>質問１２</th>
          <td><?php echo($result['TProfileDatas']['question12']); ?></td>
        </tr>
        <tr>
          <th>質問１３</th>
          <td><?php echo($result['TProfileDatas']['question13']); ?></td>
        </tr>
        <tr>
          <th>質問１４</th>
          <td><?php echo($result['TProfileDatas']['question14']); ?></td>
        </tr>
      </table>
    <?php endif;?>
</div>
<p><a href="/myprofileregistupdate?empNo=<?php echo($result['TEmployeeData']['emp_no']); ?>" >変更する</a></p>
<p><a href="/MyProfile" >一覧に戻る</a></p>
</body>
</html>