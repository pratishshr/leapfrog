<?php require_once("models/teacher.class.php"); ?>
<?php require_once("repository/teacherrepository.class.php"); ?>

<?php
	$teacher1 = new Teacher();
	$teacher2 = new Teacher();
	$teacher3 = new Teacher();
	$teacher4 = new Teacher();

	$teacherrepository = new TeacherRepository();

	$teacher1->initialize(1,"dixanta","shrestha","dixanta@gmail.com","php");
	$teacher2->initialize(2,"ram","shah","dixanta@gmail.com",".net");
	$teacher3->initialize(3,"shyam","malakar","dixanta@gmail.com","java");
	$teacher4->initialize(4,"hari","shrestha","dixanta@gmail.com","ruby");

	$teacherrepository->add_teacher($teacher1);
	$teacherrepository->add_teacher($teacher2);
	$teacherrepository->add_teacher($teacher3);
	$teacherrepository->add_teacher($teacher4);

?>


<?php include_once("header.php"); ?>

<table class="table table-bordered table-hover table-striped">
	<tr>
		<th><input type="checkbox" name="checkbox" id="checkall"></th>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>FACULTY</th>
		<th>ACTION</th>
	</tr>

<?php foreach($teacherrepository->get_all() as $teacher){ ?>
	<tr>
		<td><input type="checkbox" name="checkbox" class="checkthis"></td>
		<td><?php echo $teacher->get_id();?></td>
		<td><?php echo ucfirst($teacher->get_first_name());?> <?php echo ucfirst($teacher->get_last_name());?></td>
		<td><?php echo $teacher->get_email();?></td>
		<td><?php echo strtoupper($teacher->get_faculty());?></td>
		<td><a href="teacheredit.php?id=<?php echo $teacher->get_id();?>" class="btn btn-primary btn-sm">Edit</a> <a href="teachersave.php" class="btn btn-danger btn-sm">Delete</a></td>
	</tr>
<?php 
	} //end of for each;
?>


</table>

<script>
$(document).on("ready",function(){
	$("#checkall").on("click",function(event){
		if(this.checked){
			$(".checkthis").each(function(){
				this.checked =true;
			});
		}else{
			$(".checkthis").each(function(){
				this.checked= false;
			});
		}
	});
});
</script>


<?php include_once("footer.php"); ?>

