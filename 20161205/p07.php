<?php
//+------------------------------------------------------------------+
//|　クラス記号:IH12A621　出席No:37
//|　氏名:西川和希
//|　課題No:07　　課題名:ファイルアクセスカウンタ
//+------------------------------------------------------------------+

	require '../lib/php_lib.php';

	$filepointer = fopen('./count.txt', 'r');
	$count = fgets($filepointer);
	fclose($filepointer);

	$filepointer = fopen('./count.txt', 'w');
	if (!$filepointer) {
		//Err_sub("エラー","");
	}
	else {
		$count++;
		fputs($filepointer,$count);
	}
	fclose($filepointer);

	
	$tbl = str_split(str_pad($count, 6, '0', STR_PAD_LEFT));

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>ファイルアクセスカウンタ</title>
</head>

<body>
	
	<?php
		foreach ($tbl as $value) {
			$img = 'images/'. $value .'.jpg';
			?>
			<img src="<?= $img ?>">
			<?php
		}
		print "人目です"
	?>

</body>
</html>