<?php
function errorView($error){ ?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
	<style>
		.err-type{
			font-size: 3rem;
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translateY(-50%) translateX(-50%);
			width: 70%;
		}
		.err-content{
			font-size: 2rem;
		}
		.back-button{
			position: fixed;
			top: 65%;
			left: 20%;
			transform: translateY(-50%) translateX(-50%);
		}
	</style>
	<title></title>
</head>
<body>
	<div class="container">
		<h1 class="alert alert-danger err-type"><?= $error ?>が未入力です</h1>
		<button onClick="history.back();" class="btn btn-info back-button">戻る</button>
	</div>
	<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>

<?php exit;}