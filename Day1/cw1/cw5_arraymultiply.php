<html>
<head>
<title>	array multiply </title>
</head>
<body>
	<?php
		$total = 1;
		$array = array(10,20,30,50,80);
		foreach ($array as $value){
			$total = $total * $value;
		}
		echo $total;
	?>
</body>
</html>