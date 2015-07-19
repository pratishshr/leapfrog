<html>
<head>
<title> Percentage Calculator </title>
</head>
<body>
	<h1> Percentage Calculator </h1>

	<table>
		<?php
		$marks = array ("maths" => "80", "english" => "70" , "nepali" => "50", "physics" => "60", "chemistry" => "60");
		$total = 0;
		foreach($marks as $key => $value){
			$total = $total + $value;
		?>
		<tr>
			<td><?php echo ucfirst($key); ?></td>
			<td>=</td>
			<td><?php echo "$value"; ?></td>
		</tr>	


		<?php		
			} //end of foreach
			$percentage = (($total/500)*100);
		?>

		<tr>	
			<td>Percentage</td>
			<td>=</td>
			<td><?php echo $percentage . "%";?></td>
		</tr>
	</table>	
<hr>

<!-- Using data given by user -->
<p><u> Using User Given Data </u></p>
<form action = "hw5_percentage.php" method = "post">
	<table>
		<tr>
			<td>Maths </td>
			<td>=</td>
			<td><input type = "number" name = "marks2[maths]" min = "0" max="100" required> </td>
		</tr>
		<tr>
			<td>English </td>
			<td>=</td>
			<td><input type = "number" name = "marks2[english]"  min = "0" max="100" required> </td>
		</tr>
		<tr>	
			<td>Nepali </td>
			<td>=</td>
			<td><input type = "number" name = "marks2[nepali]"  min = "0" max="100" required> </td>
		</tr>
		<tr>	
			<td>Physics </td>
			<td>=</td>
			<td><input type = "number" name = "marks2[physics]"  min = "0" max="100" required></td>
		</tr>	
		<tr>
			<td>Chemistry </td>
			<td>=</td>
			<td><input type = "number" name = "marks2[chemistry]" min = "0" max="100" required> </td>
		</tr>	
		<tr>
			<td></td>
			<td></td>
			<td> <input type="submit" name="submit" value = "Calculate" required> </td>
		</tr>
	</table>
</form>	
<?php
	if(isset($_POST['submit'])){
		$marks2 = $_POST['marks2'];
		$total2 = 0;
		foreach($marks2 as $value2){
			$total2 = $total2 + $value2;
		}
		$percentage2 = (($total2 / 500)*100);
		echo "Percentage = ". $percentage2 . "%";
	}

?>

</body>
</html>