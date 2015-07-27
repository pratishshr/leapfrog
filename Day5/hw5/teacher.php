<?php
 	require_once("models/teacher.class.php");
 	require_once("repository/teacherrepository.class.php");

 	$teacher1 = new Teacher();
 	$teacher1->initiate(1,"Dixanta","Shrestha","dixanta@gmail.com","PHP");

 	$teacher2 = new Teacher();
 	$teacher2->initiate(2,"Ram","Shrestha","ram@gmail.com",".NET");

 	$teacher3 = new Teacher();
 	$teacher3->initiate(3,"Shyam","Shrestha","shyam@gmail.com","JAVA");

	$teacher4 = new Teacher();
 	$teacher4->initiate(4,"Hari","Shrestha","hari@gmail.com","Python");

 	$teacherrepository = new TeacherRepository();
 	$teacherrepository->add($teacher1);
 	$teacherrepository->add($teacher2);
 	$teacherrepository->add($teacher3);
 	$teacherrepository->add($teacher4);

?>

<?php include("header.php"); ?>
	<div class="page-header">
	  <h1>Student List <small> Students currently involved</small></h1>
	</div>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th><input type="checkbox" name="stdcheck"></th>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Faculty</th>
			<th>Action</th>		
		</tr>
	
	<?php foreach($teacherrepository->get_all() as $value){ ?>

		<tr>
			<td><input type="checkbox" name="stdcheck"></td>
			<td><?php echo $value->get_id();?></td>
			<td><?php echo $value->get_first_name();?> <?php echo $value->get_last_name(); ?></td>
			<td><?php echo $value->get_email();?></td>
			<td><?php echo $value->get_faculty(); ?></td>
			<td><a href="teacheredit.php?id=<?php echo $value->get_id();?>" class="btn btn-primary btn-sm">Edit</a> <a href="studentdelete.php" class="btn btn-danger btn-sm">Delete</a></td>
		</tr>

	<?php 
		}
	?>		