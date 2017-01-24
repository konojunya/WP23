<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php

$dirs = scandir("./");
foreach ($dirs as $value):
	if(preg_match('/^\d+$/',$value)):
?>
	<p>
		<a href="./<?= $value ?>"><?= $value ?></a>
	</p>
<?php
	endif;
endforeach;
?>

</body>
</html>