<html>
<head>
<title>File Upload Example</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file"/>
<input type="submit" name="submit" value="Upload"/>
</form>

<?php
	if(isset($_POST['submit'])){
		print_r($_FILES['file']);

		$file_type=$_FILES['file']['type'];

		$valid=false;

		switch($file_type){
			case "image/jpeg":
			case "image/png":
			case "image/jpg":
			case "image/gif":
				
				$valid=true;
				break;
			default:
				break;

		}

		if($valid){



			$path=$_SERVER['DOCUMENT_ROOT'] ."leapfrog/Day9/newsystem/uploads/";

			$file_name=$_FILES['file']['name'];

			move_uploaded_file($_FILES['file']['tmp_name'], $path.$file_name);
			echo "File uploaded Successfully";


			
		}
		else{
			echo "Invalid file type";
		}

		
	}
?>
</body>
</html>