<html>
<head>
<title>multiplication</title>
</head>
<body>

<?php
	for($i=1;$i<=10;$i++){
		for($j=1;$j<=10;$j++){
			$total = $i * $j;
			echo $i."*".$j."=".$total;
			echo "<br/>";
		}
		echo "<p></p>";
		
	}
?>

</body>
</html>