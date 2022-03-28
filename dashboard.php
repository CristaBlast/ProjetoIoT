<?php
	session_start();
	if(!isset($_SESSION['user']) && !isset($_SESSION['pass']))
	{
		header("Location: http://127.0.0.1/ProjetoIoT/");
		die("acesso restrito");
	}
?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS\style.css">
	<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
	<script src="bootstrap\js\bootstrap.bundle.min.js"></script>
	<title>Plataforma IoT</title>
  </head>
  <body>
    <div class='container'>
		<div class='card'>
			<div class='card-body'>
				<img src='Photos/estgLogo.png' class='float-end' alt='ESTG icon' id='estgImg'>
				<h1 class='card-title'>Servidor IoT</h1>
				<p>Bem vindo <b><?php $_SESSION['user'] ?> </b><a href='logout.php'>logout</a></p>
				<small>Tecnologias da Internet - Engenharia Informática</small>
			</div>
		</div>
	</div>
	
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header"><b>Luminusidade: 80%</b></div>
					<div class="card-body">
						<img src="Photos/dia.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <a href="">History</a>
					</div>
				</div>
		  </div>
		  <div class="col-sm-4">
			<div class="card">
					<div class="card-header"><b>Temperatura: 22º</b></div>
					<div class="card-body">
						<img src="Photos/temperature.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <a href="">History</a>
					</div>
				</div>
		  </div>
		  <div class="col-sm-4">
			<div class="card">
					<div class="card-header"><b>Porta: Fechada</b></div>
					<div class="card-body">
						<img src="Photos/door.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <a href="">History</a>
					</div>
				</div>
		  </div>
		</div>
	</div>
	<div class="card">
		<div class="card-header">
			<b>Tabela de Sensores</b>
		</div>
			<div class="card-body">
				<table class="table">
				  <thead>
					<tr>
					  <th scope="col">Tipo de Dispositivos IoT</th>
					  <th scope="col">Valor</th>
					  <th scope="col">Data de atualização</th>
					  <th scope="col">Estado de Alertas</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>Sensor de Luz</td>
					  <td>100%</td>
					  <td>-</td>
					  <td>@mdo</td>
					</tr>
					<tr>
					  <td>Temperatura</td>
					  <td>22º</td>
					  <td>-</td>
					  <td>@fat</td>
					</tr>
					<tr>
					  <td>Humidade</td>
					  <td>85%</td>
					  <td>-</td>
					  <td>-</td>
					</tr>
					<tr>
					  <td>luminusidade</td>
					  <td>80%</td>
					  <td>-</td>
					  <td>-</td>
					</tr>
				  </tbody>
				</table>
			</div>
		</div>
  </body>
</html>