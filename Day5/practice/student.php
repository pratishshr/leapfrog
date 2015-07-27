<?php
	require_once('models/student.class.php');
	require_once("repository/studentrepository.class.php");

	$student1 = new Student();
	$student2 = new Student();

	$student1->initiate(1,"Ram","Shah","ram@gmail.com");
	$student2->initiate(2,"Shyam","Ram","shyam@gmail.com");

	$repository = new StudentRepository();

	$repository->add($student1);
	$repository->add($student2);





?>

<html>
<head>
	<title> student </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">

	<script src="assets/js/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<table class="table table-hover table-striped">

			<tr>
					<th><input type="checkbox" id="checkbox" name="selectall"></th>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>

		<?php 
			foreach($repository->get_all() as $value){
		?>	

			
				<tr>
					<td><input type="checkbox" id="checkbox" name="selectall"></td>
					<td><?php echo $value->get_id();?></td>
					<td><?php echo $value->get_first_name();?> <?php echo $value->get_last_name();?></td>
					<td><?php echo $value->get_email();?></td>
					<td><a href="editstudent.php?id=<?php echo $value->get_id();?>" class="btn btn-primary btn-sm">EDIT</a> <a href="delete.php" class="btn btn-danger btn-sm">DELETE</a></td>
				</tr>
			</div>
			
		<?php
			}
		?>
</table>
</body>
</html>