<?php
	require_once('models/student.class.php');
	require_once('repository/studentrepository.class.php');

	$repository=new StudentRepository();

	$student=new Student();
	$student->initialize(1,"sujan","malakar","sujan@gmail.com");

	$repository->add($student);

	$student1=new Student();
	$student1->initialize(2,"Pratish","Shrestha","pratish@gmail.com");

	$repository->add($student1);

	$student2=new Student();
	$student2->initialize(3,"Pratasdfadish","asdf","pratish@gmail.com");

	$repository->add($student2);

	

?>
<?php include_once("header.php") ?>

<table class="table table-bordered table-hover table-striped">
<tr>
	<th><input type="checkbox" id="select-all"/></th>
	<th>Id</th>
	<th>Name</th>
	<th>Email</th>
	<th>Action</th>
</tr>

<?php
	$repository->delete(3);
	foreach($repository->get_all() as $s){
?>
<tr>
	<td><input type="checkbox" name="id[]" value="<?php echo $s->get_id()?>"/></td>
	<td><?php echo $s->get_id();?></td>
	<td><?php echo $s->get_first_name();?> <?php echo $s->get_last_name();?></td>
	<td><?php echo $s->get_email();?></td>
	<td><a href="studentedit.php?id=<?php echo $s->get_id()?>" class="btn btn-success btn-sm">Edit</a> <a href=""  class="btn btn-danger btn-sm">Delete</a>
</tr>
<?php
}
?>
</table>
<?php include_once("footer.php") ?>
