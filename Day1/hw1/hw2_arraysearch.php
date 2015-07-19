<html>
<head>
<title> Array Search </title>
</head>
<body>
	<h1> Array Search </h1>
	<p><u> Without using value from the user </u></p>
	<?php
		$search = 30;
		$array = array(10,20,30,50,80);
		$found = false;

		echo "array:";
		foreach($array as $value){
			echo " $value " ;
			if($search == $value){
				$found = true;
				
			}
		}
		echo "<br/>";
		echo "value to search = ". $search;
		echo "<br/>";
		echo ($found)?"It is found in the array":"Not found in the array";
	?>

	<hr>
	<!-- Using value from the user -->

	<p><u> Using value from the user </u></p>
	<form action = "hw2_arraysearch.php" method = "post">
		Enter value to be searched in the array: <br/>
		<input type = "text" name = "search"> <br/>
		<input type = "submit" name = "submit" value="Check">

	</form>

	<?php
		if(isset($_POST['submit'])){
			$search2 = $_POST['search'];
			$found2 = false;
			foreach($array as $value){
				if($search2 == $value){
					$found2 = true;
				}
			}
			echo ($found2)?"It is found in the array":"It is not found in the array";
	   }
	?>



</body>
</html>