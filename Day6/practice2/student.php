<?php require_once("models/student.class.php"); ?>
<?php require_once("repository/studentrepository.class.php"); ?>
<?php
	$student1 = new Student();
	$student2 = new Student();
	$student3 = new Student();
	$student4 = new Student();

	$studentrepository = new StudentRepository();

	$student1->initiate(1,"Pratish","Shrestha","vanroshr@gmail.com");
	$student2->initiate(2,"Sujan","Shrestha","sujanshr@gmail.com");
	$student3->initiate(3,"Sujan","Malakar","sujanbm@gmail.com");
	$student4->initiate(4,"Ram","Shah","ram@live.com");

	$studentrepository->add_student($student1);
	$studentrepository->add_student($student2);
	$studentrepository->add_student($student3);
	$studentrepository->add_student($student4);

?>



<?php include_once("header.php"); ?>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th><input type="checkbox" id="checkall"  name="checkall"></th>
			<th>ID</th>
			<th>NAME</th>
			<th>E-MAIL</th>
			<th>ACTION</th>
		</tr>

<?php 
	foreach($studentrepository->get_all() as $student ){
?>
	<tr>
		<td><input type="checkbox" class="checkbox" name="checkbox"></td>
		<td><?php echo $student->get_id(); ?></td>
		<td><?php echo $student->get_first_name(); ?> <?php echo $student->get_last_name(); ?></td>
		<td><?php echo $student->get_email(); ?></td>
		<td><a href="studentedit.php?id=<?php echo $student->get_id(); ?>" class="btn btn-primary btn-sm">Edit</a> <a href="" class="btn btn-danger btn-sm">Delete</a></td>
	</tr>

<?php

	} //end of foreach

?>	

	</table> <!-- end of table -->

<script>
	$(document).ready(function() {
	
    $('#checkall').on("click",function(event) {  //on click 
        if(this.checked) { // check select status
        	
            $('.checkbox').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});

</script>

<?php include_once("footer.php"); ?>