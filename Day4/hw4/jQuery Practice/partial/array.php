<?php
	$array = array("pratish","sujan","ram","shyam","hari","gopal");
	$value = $_GET['value'];
	$found= "false";
	foreach($array as $name){
	if($value == $name){
		$found= "true";
		break;
	}

}
	echo $found;
