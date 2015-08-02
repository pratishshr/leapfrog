<?php require_once("config.php");?>
<?php require_once(ROOT_PATH."system/model/teachers.class.php");?>
<?php require_once(ROOT_PATH."system/repository/teacherrepository.class.php");?>
<?php require_once(ROOT_PATH."system/dbutil/dbconnection2.class.php");?>

<?php include_once(ROOT_PATH."teachers/header.php");?>
<?php
	$teacherrepository = new TeacherRepository();

?>
<?php
	if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action']=="delete"){
		$teacherrepository->delete($_GET['id']);
	}
?>

<div class="page-header">
	<h1>Teachers Table</h1>
</div>
<?php
	if(isset($_POST['order'])){
		$sort = $_POST['sort'];
	}else{
		$sort = null;
	}

?>
<?php
	if(isset($_GET['success']) && $_GET['success']==true){

?>
	<div class="alert alert-success">
		Successfull!
	</div>
<?php		
	}
?>
<form action="<?php echo BASE_URL."teachers/index.php"?>" method="post">
 <label for="sort">Order by:</label>
 <br/>
<select name="sort">
	
	<option value="id"> ID </option>
	<option value="first_name"> First Name</option>
	<option value="last_name"> Last Name</option>
	
</select>
	<input type="submit" class="btn btn-primary btn-sm" name="order" value="SORT">
</form>
<a href="<?php echo BASE_URL."teachers/add.php"?>" class="btn btn-primary pull-right"> Add Teacher </a>
<table class="table table-striped table-hover">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>E-MAIL</th>
		<th>CONTACT-NO</th>
		<th>FACULTY</th>
		<th>ACTION</th>
	</tr>

<?php
	foreach($teacherrepository->get_all($sort) as $teach){

?>	

	<tr>
		<td><?php echo $teach->get_id();?></td>
		<td><?php echo $teach->get_first_name();?> <?php echo $teach->get_last_name();?></td>
		<td><?php echo $teach->get_email();?></td>
		<td><?php echo $teach->get_contact_no();?></td>
		<td><?php echo $teach->get_faculty();?></td>
		<td><a href="<?php echo BASE_URL."teachers/edit.php";?>?id=<?php echo $teach->get_id();?>" class="btn btn-primary btn-sm">EDIT</a>
			<a href="index.php/?action=delete&id=<?php echo $teach->get_id();?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">DELETE</a></td>

	</tr>


<?php
	} // end og for each
?>
</table>


<?php include_once(ROOT_PATH."teachers/footer.php");?>

