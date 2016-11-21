<?php
//******************************
//
//	クラス記号: IH-12A-621
//  名前: 河野純也
//  日付: 2016/11/21
//
//******************************
session_start();
require "./phplib.php";

$data_array = ["id","password","name","name_kana","address","tel","mail","birthday","subject"];
$show_array;

for($i = 0; $i < count($data_array); $i++){
	if(!isset($_SESSION[$data_array[$i]])) throw_error("エラー","不正アクセス","セッション情報が確認できません。");
	$show_array[$data_array[$i]] = $_SESSION[$data_array[$i]];
	unset($_SESSION[$data_array[$i]]);
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		<table class="table">
			<tr>
				<td>ユーザー</td>
				<td><?= $show_array["id"] ?></td>
			</tr>
			<tr>
				<td>パスワード</td>
				<td><?= $show_array["password"] ?></td>
			</tr>
			<tr>
				<td>氏名</td>
				<td><?= $show_array["name"] ?></td>
			</tr>
			<tr>
				<td>氏名カナ</td>
				<td><?= $show_array["name_kana"] ?></td>
			</tr>
			<tr>
				<td>住所</td>
				<td><?= $show_array["address"] ?></td>
			</tr>
			<tr>
				<td>TEL</td>
				<td><?= $show_array["tel"] ?></td>
			</tr>
			<tr>
				<td>Mail</td>
				<td><?= $show_array["mail"] ?></td>
			</tr>
			<tr>
				<td>生年月日</td>
				<td><?= $show_array["birthday"] ?></td>
			</tr>
			<tr>
				<td>専攻</td>
				<td><?= $show_array["subject"] ?></td>
			</tr>
		</table>
	</div>
	<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>