<?php
//******************************
//
//	クラス記号: IH-12A-621
//  名前: 河野純也
//  日付: 2016/11/14
//
//******************************

require "./phplib.php";
require_once "./database.php";

$id = $_POST['id'];
$password = $_POST['password'];
$name = $_POST['name'];
$name_kana = $_POST['name_kana'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$birthday = $_POST['birthday'];
$subject = $_POST['subject'];

/*
*		未入力チェック
*/
if($id == "") throw_error("エラー","未入力エラー","IDが入力されていません");
if($password == "") throw_error("エラー","未入力エラー","パスワードが入力されていません");
if($name == "") throw_error("エラー","未入力エラー","氏名が入力されていません");
if($name_kana == "") throw_error("エラー","未入力エラー","氏名（カナ）が入力されていません");
if($address == "") throw_error("エラー","未入力エラー","住所が入力されていません");
if($tel == "") throw_error("エラー","未入力エラー","TELが入力されていません");
if($mail == "") throw_error("エラー","未入力エラー","メールが入力されていません");
if($birthday == "") throw_error("エラー","未入力エラー","生年月日が入力されていません");
if($subject == "") throw_error("エラー","未入力エラー","専攻が入力されていません");

/*
*		在籍チェック
*/
if(!(array_key_exists($id, $database))) throw_error("エラー","在籍エラー",$id."は、存在しません");

/*
*		パスワードチェック
*/
if($database[$id] != $password) throw_error("エラー","パスワードエラー","パスワードが一致しません");

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
				<td><?= $id ?></td>
			</tr>
			<tr>
				<td>パスワード</td>
				<td><?= $password ?></td>
			</tr>
			<tr>
				<td>氏名</td>
				<td><?= $name ?></td>
			</tr>
			<tr>
				<td>氏名カナ</td>
				<td><?= $name_kana ?></td>
			</tr>
			<tr>
				<td>住所</td>
				<td><?= $address ?></td>
			</tr>
			<tr>
				<td>TEL</td>
				<td><?= $tel ?></td>
			</tr>
			<tr>
				<td>Mail</td>
				<td><?= $mail ?></td>
			</tr>
			<tr>
				<td>生年月日</td>
				<td><?= $birthday ?></td>
			</tr>
			<tr>
				<td>専攻</td>
				<td><?= $subject ?></td>
			</tr>
		</table>
		<a class="btn btn-info" href="/20161114">BACK</a>
	</div>
	<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>