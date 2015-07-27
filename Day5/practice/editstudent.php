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


	$std = $repository->get_by_id($_GET['id']);

	if(is_null($std)){
		header("Location:student.php");
		exit;
	}

?>

<html>
<head>
	<title> student </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<script src="//code.jquery.com/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="savestudent.php" method="post" >
		  <div class="form-group">
		    <label for="firstname">First Name</label> 
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="first name" value="<?php echo  $std->get_first_name();?> ">
		  </div>
		  <div class="form-group">
		    <label for="lastname">Last Name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" name="last name" value="<?php echo $std->get_last_name();?>">
		  </div>
		   <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="<?php echo $std->get_email();?>">
		  </div>
		  
		  <button type="submit" class="btn btn-default" name="btnsubmit">Submit</button>
		  <a href="student.php" class="btn btn-danger">Cancel</a>
		</form>
	</div>
</table>
</body>
</html>