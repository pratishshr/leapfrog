<html>
<head>
	<title> Array addition and multiplication </title>
</head>
<body>
	<h1> Array Addition and Multiplication </h1>

	<?php
		$array = array(10,20,30,50,80);
		echo "Given array is: ";
		$add = 0;
		$multi = 1;
		foreach($array as $value){
			echo " $value ";
			$add = $add + $value;
			$multi = $multi * $value;
		}
		echo "<br/>";
		echo "Total sum = " . $add;
		echo "<br/>";
		echo "Total product = " . $multi;
	?>
</body>
</html>