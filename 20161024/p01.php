<?php
//******************************
//
//	クラス記号: 	IH-12A-621
//  名前: 				河野純也
//  日付: 				2016/10/24
//  課題No: 			01
//
//******************************

$class_room = $_GET['class_room'];
$room_class = $_GET['room_number'];
$name = $_GET['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<p>クラス: <?= $class_room ?></p>
	<p>出席: <?= $room_class ?></p>
	<p>氏名: <?= $name ?></p>
</body>
</html>