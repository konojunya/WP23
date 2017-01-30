<?php
//+------------------------------------------------------------------+
//|　クラス記号:IH12A621　出席No:21
//|　氏名: 河野純也
//|　課題No:08　　課題名:会員登録システム
//+------------------------------------------------------------------+

require "./errorUtil.php";
require "./FileUtil.php";
session_start();

define("COUNT_FILE_PATH","./count.dat");
define("DATA_FILE_PATH","./data.csv");

$fileUtil = new FileUtil(COUNT_FILE_PATH,DATA_FILE_PATH);

$get_data = [];

// セッションを持っているかチェック
if(count($_SESSION) <= 0){
	do_not_has_session_error();
}

foreach($_SESSION as $key => $value){
	$get_data[$key] = $value;
}

$fileUtil->set_consumer_data($get_data);

// 現在のidを取得（ゼロサプレス済み）
$id = $fileUtil->get_zero_suppressed_id();

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

	<p>会員登録完了画面</p>
	<table border="1">
		<tr>
			<th>会員番号</th>
			<td><?= $id ?></td>
		</tr>
		<tr>
			<th>氏名</th>
			<td>
				<p><?= $get_data["name"] ?></p>
			</td>
		</tr>
		<tr>
			<th>郵便番号</th>
			<td>
				<p><?= $get_data["postal_code"] ?></p>
			</td>
		</tr>
		<tr>
			<th>住所</th>
			<td>
				<p><?= $get_data["address"] ?></p>
			</td>
		</tr>
		<tr>
			<th>電話番号</th>
			<td>
				<p><?= $get_data["tel"] ?></p>
			</td>
		</tr>
	</table>
	<p>上記の内容で登録しました。</p>

</body>
</html>