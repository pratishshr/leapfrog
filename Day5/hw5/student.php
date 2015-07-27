<?php
	require_once("models/student.class.php");
	require_once("repository/studentrepository.class.php");

	$student1 = new Student();
	$student1->initiate(1,"Pratish","Shrestha","vanroshr@gmail.com");

	$student2 = new Student();
	$student2->initiate(2,"Sujan","Malakar","malakar@live.com");

	$student3 = new Student();
	$student3->initiate(3,"Sujan","Shrestha","sujan@live.com");
	
	$student4 = new Student();
	$student4->initiate(4,"Ram","Shah","ram@live.com");

	$studentrepository = new StudentRepository();
	$studentrepository->add($student1); 
	$studentrepository->add($student2);
	$studentrepository->add($student3);
	$studentrepository->add($student4);

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
			<th>Action</th>		
		</tr>
		
	<?php
		foreach ($studentrepository->get_all() as  $value) {
		
			

	?>

		
		<tr>
			<td><input type="checkbox" name="stdcheck"></td>
			<td><?php echo $value->get_id(); ?></td>
			<td><?php echo $value->get_first_name();?> <?php echo $value->get_last_name();?></td>
			<td><?php echo $value->get_email(); ?></td>
			<td><a href="studentedit.php?id=<?php echo $value->get_id();?>" class="btn btn-primary btn-sm">Edit</a> <a href="studentdelete.php" class="btn btn-danger btn-sm">Delete</a></td>

			
		</tr>
	<?php
		}
	?>	


	</table>



<?php include("footer.php"); ?>