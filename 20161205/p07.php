<?php
//+------------------------------------------------------------------+
//|　クラス記号:IH12A621　出席No:21
//|　氏名: 河野純也
//|　課題No:07　　課題名:ファイルアクセスカウンタ
//+------------------------------------------------------------------+

	$filepointer = fopen('./count.txt', 'r');
	$count = fgets($filepointer);
	fclose($filepointer);

	$filepointer = fopen('./count.txt', 'w');
	$count++;
	fputs($filepointer,$count);
	fclose($filepointer);

	
	$tbl = str_split(str_pad($count, 6, '0', STR_PAD_LEFT));

?>
<!DOCTYPE html>
<html>
<head>
	<title>ファイルアクセスカウンタ</title>
</head>

<body>
	
	<?php foreach ($tbl as $value): ?>
			<img src="<?= 'img/'. $value .'.png' ?>">
	<?php endforeach; ?>
	人目です

</body>
</html>
