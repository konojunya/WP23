<?php
//******************************
//
//	クラス記号: IH-12A-621
//  名前: 河野純也
//  日付: 2016/11/21
//
//******************************

//******************************
//
//  関数名: throw_error
//  機能: エラーを受け取る
//  引数:	$title { string } エラータイトル
//  引数:	$err_type { string } エラーの種類
//  引数:	$err_content { string } エラーの中身
//  返り値: Void
//
//******************************
function throw_error($title,$err_type,$err_content){ ?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css">
	<style>
		.err-type{
			font-size: 1.6rem;
		}
		.err-content{
			font-size: 2rem;
		}
	</style>
	<title></title>
</head>
<body>
	<div class="container">
		<h1><?= $title ?></h1>
		<table class="table">
			<tr>
				<td class="alert alert-danger err-type"><?= $err_type ?></td>
			</tr>
			<tr>
				<td class="err-content"><?= $err_content ?></td>
			</tr>
		</table>
		<a class="btn btn-info" href="/20161121/">BACK</a>
	</div>
	<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>

<?php exit; }