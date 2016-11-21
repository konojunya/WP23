<?php
//******************************
//
//	クラス記号: 	IH-12A-621
//  出席番号:			21
//  名前: 				河野純也
//  日付: 				2016/11/07
//  課題No:			03
//
//******************************
$database = array( // ユーザーDB
	"naga" => 123,
	"kawa" => 234,
	"tani" => 345
);

$user = $_POST['user'];
$password = $_POST['password'];

if($user != ""){ // ユーザーが空白かどうか
	if($password != ""){ //パスワードが空白かどうか
		if(array_key_exists($user, $database)){
			if($database[$user] == $password){
				$msg = "${user}さん、こんにちは。";
			}else{
				$msg = "${user}さん、パスワードが違います。";
			}
		}else{ // IDが存在しない
			$msg = "${user}さん、IDが存在しません。<br/>ゴメンナサイ><";
		}
	}else{ // パスワードが入力されてない場合
		$msg = "パスワードが入力されていません。";
	}
}else{ // ユーザー名が入力されてない場合
	$msg = "ユーザー名が入力されていません。";
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