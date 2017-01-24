<?php
//+------------------------------------------------------------------+
//|　クラス記号:IH12A621　出席No:21
//|　氏名: 河野純也
//|　課題No:09　　課題名:BBS作成
//+------------------------------------------------------------------+

require "./error.php";
require "./Util.php";

$util = new Util("data.csv");

// GET
$name = $_GET["name"];
$text_data = $_GET["text"];

// 未入力チェック
if(empty($name)) errorView("名前");
if(empty($text_data)) errorView("本文");

$write_data = $util->convertEscape($name,$text_data);

// file処理
$util->fwrite($write_data);
$content = $util->fread();

$util->setChatData(array_reverse(explode("\n",$content)));
$chats = $util->getChatData();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
	<title></title>
</head>
<body style="background: #f0f0f0;">

	<div class="container" style="position: relative; top: 50px;">
		
		<?php foreach($chats as $data): ?>
	
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<?= $data["text"] ?>
			  	<p style="text-align: right;"><?= $data["name"] ?></p>
			  </div>
			</div>
		
		<?php endforeach;?>

	</div>

<script src="../asset/js/jquery.min.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// echo nl2br(htmlspecialchars_decode($content));