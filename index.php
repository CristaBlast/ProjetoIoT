<!DOCTYPE html>
<html lang="pt">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
<link href="CSS\style.css" rel="stylesheet">
<script src="bootstrap\js\bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
	session_start();
	$_SESSION["user"]=$_POST['inputUser'];
	$_SESSION["pass"]=$_POST['inputPassword'];
	$username="Babuska";
	$password="TheMaschine";

	if($_POST['inputUser']=="Babuska" && $_POST['inputPassword']=="TheMaschine")
	{
		header("Location: http://127.0.0.1/IOT/dashboard.php");
	}
	
	else
	{
		echo "F*ck";
	}

	/*
	if(isset($_POST['username']))
	{
		echo "O username foi submetido foi: ".$POST['username']."<br>";
	}
	
	if(isset($_POST['password']))
	{
		echo "A passaword foi submetido foi: ".$POST['password']."<br>";
	}
	*/
	
	/*
	echo"<h1>Olá Mundo</h1>";
	$dia=21;
	$mes=3;
	$ano=2022;
	echo "Today's date: ".$dia."/".$mes."/".$ano;
	*/
?>
	<div class="container">
		<form class="form_UP" method="post">
			<a href="http://127.0.0.1/IOT/"><img src="Photos\estg.png"></a>
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