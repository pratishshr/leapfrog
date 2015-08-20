<h1>HELLO WORLD!</h1>

<?php
	if($categories->num_rows()>0)
		foreach($categories->result() as $cat):
?>

		<li><?php echo $cat->category_name?></li>
<?php
		endforeach;
?>	