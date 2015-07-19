<?php

$names=array("sujan","srijan","sushil","neetu","pratish");

$found="false";
foreach($names as $name){
	if($name==$_GET['name']){
		$found="true";
		break;
	}

}

echo $found;