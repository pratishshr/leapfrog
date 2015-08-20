<?php

/*
$_POST=file_get_contents("php://input");
print_r($_POST);*/

$students=array();
$students[]=array("id"=>1,"firstName"=>"Sujan","lastName"=>'Shrestha',"email"=>"sujan@gmail.com","status"=>true);
$students[]=array("id"=>2,"firstName"=>"Sujan","lastName"=>'Malakar',"email"=>"sujan.malakar@gmail.com","status"=>false);

if(!isset($_GET['id'])){
echo json_encode($students);
}
else{
	$student=null;
	foreach($students as $std){
		if($std['id']==$_GET['id']){
			$student=$std;
			break;
		}
	}
	echo json_encode($student);
}