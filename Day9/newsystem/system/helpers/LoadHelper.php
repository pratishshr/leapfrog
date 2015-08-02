<?php

class LoadHelper{


	public static function model($class_name)
	{
		include_once(ROOT_PATH."system/model/". $class_name. ".class.php");
	}

	public static function repository($class_name){
		include_once(ROOT_PATH."system/repository/". $class_name. ".class.php");
	}
	
}