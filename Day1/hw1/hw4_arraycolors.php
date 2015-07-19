<html>
<head>
<title> Array colors </title>
</head>
<body>
	<h1> Array Colors </h1>
	<p> <u> Not Using value from the user </u></p>
	<ul style = "list-style-type: none;">
	<?php
		$colors = array("red","blue","green","cyan","magenta","yellow","purple","pink");
		$search = "red";
		
		foreach($colors as $value){
			$found = false;
			if($search == $value){
				$found = true;
			}
	?>
	
		<li style = "background: <?php echo $value; ?>"> <?php echo strtoupper($value); ?> <?php echo ($found)?"is found":""; ?> </li>
		<br/>


	<?php 
		} //end of foreach
	?>		
	</ul>

	<!-- Using value from the user -->
	<hr>
	<p> <u> Using value from the user </u></p>
	<form action = "hw4_arraycolors.php" method = "post">
		Enter the color you want to search:</br>
		<input type = "text" name = "search2">
		<input type = "submit" name = "submit" value = "Check">
	</form>

	<?php
		//assigning the value from the user

		if(isset($_POST['submit'])){
			$search2 = strtolower($_POST['search2']);
		} else {
			$search2 = "";
		}
	?>

	<ul style = "list-style-type:none;">
	<?php
		$colors2 = array("red","blue","green","cyan","magenta","yellow","purple","pink");
		foreach($colors2 as $value2){
			$found2 = false;
			if($search2 == $value2){
				$found2 = true;
			}
	?>
		<li style="background: <?php echo $value2;?>"> <?php echo ucfirst($value2); ?> <?php echo ($found2)?"is found":""; ?></li>
		<br/>


	<?php
		} //end of second foreach
	?>
	</ul>

</body>
</html>