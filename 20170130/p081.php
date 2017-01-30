<?php
//+------------------------------------------------------------------+
//|　クラス記号:IH12A621　出席No:21
//|　氏名: 河野純也
//|　課題No:08　　課題名:会員登録システム
//+------------------------------------------------------------------+

require "./errorUtil.php";
session_start();

// データ受取
$name = $_GET["name"];
$postal_code = $_GET["postal_code"];
$address = $_GET["address"];
$tel = $_GET["tel"];

// 未入力チェック
if(empty($name)) not_yet_entered_error("氏名");
if(empty($postal_code)) not_yet_entered_error("郵便番号");
if(empty($address)) not_yet_entered_error("住所");
if(empty($tel)) not_yet_entered_error("電話番号");

// session write
$_SESSION["name"] = $name;
$_SESSION["postal_code"] = $postal_code;
$_SESSION["address"] = $address;
$_SESSION["tel"] = $tel;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		p{
			padding: 0;
			margin: 0;
		}
	</style>
</head>
<body>

	<form action="http://localhost:8000/20170130/p082.php" method="GET">
		<p>会員登録確認画面</p>
		<table border="1">
			<tr>
				<th>氏名</th>
				<td>
					<p><?= $name ?></p>
				</td>
			</tr>
			<tr>
				<th>郵便番号</th>
				<td>
					<p><?= $postal_code ?></p>
				</td>
			</tr>
			<tr>
				<th>住所</th>
				<td>
					<p><?= $address ?></p>
				</td>
			</tr>
			<tr>
				<th>電話番号</th>
				<td>
					<p><?= $tel ?></p>
				</td>
			</tr>
		</table>
		<p>上記の内容で登録します。よろしいですか？</p>
		<input type="submit" value="送信">
	</form>

</body>
</html>