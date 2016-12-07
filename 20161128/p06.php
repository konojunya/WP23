<?php

$cnt = 1;
if(isset($_COOKIE["count"])) $cnt = $_COOKIE["count"];
setcookie("count",$cnt+1,time() + 2);

?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
	<style type="text/css">
		body,html{
			width: 100%;
			height: 100%;
			position: relative;
		}
		p{
			width: 100%;
			position: absolute;
			top: 50%;
			left: 0;
			transform: translateY(-50%);
			font-size: 5rem;
			text-align: center;
		}
	</style>
</head>
<body>
	
		<p><?= $cnt != 1 ? "こんにちは、あなたは" . $cnt . "回目です。" : "始めまして！" ?></p>

	<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>
