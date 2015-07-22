<?php

if(isset($_POST['btnsubmit'])){

print_r($_POST);
}

header("location:student.php");
exit();