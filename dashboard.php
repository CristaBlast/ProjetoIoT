<?php
	session_start();
	if(!isset($_SESSION['user']) && !isset($_SESSION['pass']))
	{
		header("Location: http://127.0.0.1/ProjetoIoT/");
		die("acesso restrito");
	}
	/*$valorT = file_get_contents("API/FILES/TEMPERATURA/valor.txt");
	$horaT = file_get_contents("API/FILES/TEMPERATURA/hora.txt");
	$nomeT = file_get_contents("API/FILES/TEMPERATURA/nome.txt");*/
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
	  <br>
	
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
	<br>

	





	<div class="card-header">
			<b>Quarto</b>
		</div>
		<br>
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
		<br>
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header"><b>Fumo e Gás: Não detetado </b></div>
					<div class="card-body">
						<img src="Photos/fire_gas.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <a href="">History</a>
					</div>
				</div>
		  </div>
		  <div class="col-sm-4">
			<div class="card">
					<div class="card-header"><b>Movimento: Não detetado</b></div>
					<div class="card-body">
						<img src="Photos/movimento.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <a href="">History</a>
					</div>
				</div>
		  </div>
		  <div class="col-sm-4">
			<div class="card">
					<div class="card-header"><b>Ventoinha: Desativada</b></div>
					<div class="card-body">
						<img src="Photos/fan.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <a href="">History</a>
					</div>
				</div>
		  </div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header"><b>Janelas: Fechadas </b></div>
					<div class="card-body">
						<img src="Photos/window.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <a href="">History</a>
					</div>
				</div>
		  </div>
		</div>
	</div>
	<br>
	<!--
	<div class="card">
		<div class="card-header">
			<b>Quarto</b>
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
	<br>
	<div class="card">
		<div class="card-header">
			<b>Cozinha</b>
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
	<br>
	<div class="card">
		<div class="card-header">
			<b>WC</b>
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
	<br>-->
  </body>
</html>