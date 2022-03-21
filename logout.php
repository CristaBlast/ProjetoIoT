<!DOCTYPE html>
<html lang="pt">
<head>
<title>Logout</title>
<meta charset="utf-8">
</head>
<body>
	<?php
		session_start();
		session_unset();
		session_destroy();
		header("Location: http://127.0.0.1/IOT/index.php");
	?>
</body>
</html>
