<?php

$dirs = scandir("./");
foreach ($dirs as $value):
	if(preg_match('/^\d+$/',$value)):
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<p>
		<a href="./<?= $value ?>"><?= $value ?></a>
	</p>

</body>
</html>

<?php
	endif;
endforeach;