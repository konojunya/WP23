<?php
//+------------------------------------------------------------------+
//|　クラス記号:IH12A621　出席No:21
//|　氏名: 河野純也
//|　課題No:08　　課題名:会員登録システム
//+------------------------------------------------------------------+
function not_yet_entered_error($error_type){ ?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
		<h1><?= $error_type ?>が未入力です</h1>
		<button onClick="history.back();">戻る</button>
</body>
</html>

<?php exit;}

function do_not_has_session_error(){ ?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
		<h1>セッションをもっていません。</h1>
		<a href="http://localhost:8000/20170130">戻る</a>
</body>
</html>	

<?php exit;}