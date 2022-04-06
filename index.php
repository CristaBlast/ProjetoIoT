<!DOCTYPE html>
<html lang="pt">
<head>
<title>The Abibi - Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
<link href="CSS\style.css" rel="stylesheet">
<script src="bootstrap\js\bootstrap.bundle.min.js"></script>
</head>
<body class="bgColor">
<?php 
	session_start();
	$_SESSION["user"]=$_POST['inputUser'];
	$_SESSION["pass"]=$_POST['inputPassword'];


	if(file_exists("login/".$_POST['inputUser'].".txt") && $_POST['inputPassword']==file_get_contents("login/".$_POST['inputUser'].".txt"))
	{
		header("Location: http://127.0.0.1/ProjetoIoT/dashboard.php");
	}
	
	else
	{
		echo "Login Não Sucedido";
	}

?>
	<div class="container">
		<form class="form_UP" method="post">
			<a href="http://127.0.0.1/ProjetoIoT/"><img src="Photos\abibiHotel.png" class="logo"></a>
		  <div class="mb-3">
			<label for="inputUser"class="form-label">Username:</label>
			<input type="text" placeholder="Username" class="form-control" id="inputUser" name="inputUser" required>
		  </div>
		  <div class="mb-3">
			<label for="inputPassword" class="form-label">Password:</label>
			<input type="password" placeholder="Password" class="form-control" id="inputPassword" name="inputPassword" required>
		  </div>
		  <button type="submit" class="btn btn-primary">Submeter</button>
		</form>
	<div>
</body>
</html>