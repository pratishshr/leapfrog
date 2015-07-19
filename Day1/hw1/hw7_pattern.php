<html>
<head>
	<title> Pattern </title>
</head>
<body>
	<?php
		for($i=1;$i<=5;$i++){
			for($j=1;$j<=$i;$j++){
				echo $j;
			}
			echo "<br/>";
		}

		for($i=5;$i>=1;$i--){
			for($j=1;$j<=$i;$j++){
				echo $j;

			}
			echo "<br/>";
		}

		echo "<br/>";

		for($i=1;$i<=5;$i++){
			for($j=5;$j>=$i;$j--){
				echo $j;
			}
			echo "<br/>";

		}

		for($i=5;$i>=1;$i--){
			for($j=5;$j>=$i;$j--){
				echo $j;
			}
			echo "<br/>";
		}

		echo "<br/>";
		
		for($i=5;$i>=1;$i--){
			for($k=1;$k<$i;$k++){
				echo "&nbsp;&nbsp;";
			}
			for($j=$i;$j<=5;$j++){
				echo $j;
			}
			echo "<br/>";

		}

		echo "<br/>";

		for($i=1;$i<=10;$i+=2){
			for($k=10;$k>=$i;$k-=2){
				echo "&nbsp;&nbsp;";
			}
			
			for($j=1;$j<=$i;$j++){
				echo $j;
			}
			echo "<br/>";
		}
		
	?>
</body>
</html>