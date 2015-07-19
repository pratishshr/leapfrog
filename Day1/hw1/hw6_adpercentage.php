<html>
<head>
<title> </title>
</head>
<body>
	<table>
	<?php
		$total = 0;
		$fail = false;
		$marks = array("maths" => "50","english" => "60","nepali" => "70","physics" => "80","chemistry" => "30");
		foreach($marks as $key => $value){
			if($value < 40){
				$fail = true;
			}
			$total = $total + $value;
	?>
		<tr>
			<td><?php echo ucfirst($key)?></td>
			<td>=</td>
			<td><?php echo $value?></td>
		</tr>


		
	<?php
		}	// ending of foreach
	$percentage = (($total/500)*100);
	?>
		<tr>
			<td>Percentage</td>
			<td>=</td>
			<td><?php echo ($fail)?"Failed":"{$percentage}%";?></td>
		</tr>
	</table>

	<!-- Using User Given Data -->
	<hr>
	<p><u>Using User Given Data</u></p>
	<form action = "hw6_adpercentage.php" method = "post">
		<table>
			<tr>
				<td>Maths</td>
				<td>=</td>
				<td><input type="number" name="marks2[maths]" min="0" max="100" required></td>
			</tr>
			<tr>
				<td>English</td>
				<td>=</td>
				<td><input type="number" name="marks2[maths]" min="0" max="100" required></td>
			</tr>
			<tr>
				<td>Nepali</td>
				<td>=</td>
				<td><input type="number" name="marks2[maths]" min="0" max="100" required></td>
			</tr>
			<tr>
				<td>Physics</td>
				<td>=</td>
				<td><input type="number" name="marks2[maths]" min="0" max="100" required></td>
			</tr> 
			<tr>
				<td>Chemistry</td>
				<td>=</td>
				<td><input type="number" name="marks2[maths]" min="0" max="100" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Submit" name="submit"></td>
			</tr>
		</table>
	</form>

	<?php
		if(isset($_POST['submit'])){
			$total2 = 0;
			$percentage2 = 0;
			$marks2 = $_POST['marks2'];
			$fail2 = false;
			foreach ($marks2 as $key2 => $value2) {
				if($value2 < 40){
					$fail2 = true;
				}
				$total2 = $total2 + $value2;
			}
			
			$percentage2 = (($total2/500)*100);
			if($fail2){
				echo "Failed";
			}else{
			echo " Percentage = " . $percentage2 . "%";
			}
		}
	?>

</body>
</html>