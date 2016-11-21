<?php
//******************************
//
//	クラス記号: 	IH-12A-621
//  名前: 				河野純也
//  日付: 				2016/10/31
//  課題No:			02
//
//******************************

$user = $_POST['user'];
$password = $_POST['password'];

if($user == ""){
	$msg = "ユーザー名が入力されていません。";
}else if($password == ""){
	$msg = "パスワードが入力されていません。";
}else{
	if($password == "123"){
		$msg = "${user}さん、こんにちは";
	}else{
		$msg = "パスワードが間違っています。";
	}
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<p><?= $msg ?></p>
</body>
</html>