<html>
<head>
<title> Multiplication </title>
</head>
<body>
	<h1> Multiplication Table</h1>
	<?php
		$tablecolor = array("red","blue","green","cyan","magenta","yellow","brown","grey","purple","pink");
		$count=0;
		for($i=1;$i<=10;$i++){
	

	?>
	
	<table style = "border:1px solid black; background:<?php echo $tablecolor[$count++]?>">

	<?php
			for($j=1;$j<=10;$j++){
	?>
	
	
			<tr>
				<td> <?php echo $i; ?> </td>
				<td> * </td>
				<td> <?php echo $j; ?> </td>
				<td> = </td>
				<td> <?php echo $i*$j; ?> </td>

			</tr>	

	
	
	<?php			
			} // j ko end
	?>
	
	<br/>
	</table>	


	<?php		
		} // i ko end
	?>

</body>
</html>