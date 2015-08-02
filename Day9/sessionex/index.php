<?php

	session_start();

	$_SESSION['name'] = "Dixanta Shrestha";
	$_SESSION['logged_in'] = "1";

?>
<html>
<head>
<title>Session</title>
</head>
<body>

<?php echo $_SESSION['name'];?>
</body>
</html>