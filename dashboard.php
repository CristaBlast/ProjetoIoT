<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])) {
	header("Location: http://127.0.0.1/ProjetoIoT/");
	die("acesso restrito");
}

//Cozinha
	//Sensor Gás Fumo
$valorC_GF = file_get_contents("api/files/cozinha/gas_fumo/valor.txt");
$horaC_GF = file_get_contents("api/files/cozinha/gas_fumo/hora.txt");

	//Sensor Movimento
$valorC_M = file_get_contents("api/files/cozinha/movimento/valor.txt");
$horaC_M = file_get_contents("api/files/cozinha/movimento/hora.txt");


//Quarto
	//Sensor Gás Fumo
$valorQ_GF = file_get_contents("api/files/quarto/gas_fumo/valor.txt");
$horaQ_GF = file_get_contents("api/files/quarto/gas_fumo/hora.txt");
	
	//Sensor Luminosidade
$valorQ_L = file_get_contents("api/files/quarto/luminosidade/valor.txt");
$horaQ_L = file_get_contents("api/files/quarto/luminosidade/hora.txt");

	//Motor
$valorQ_M = file_get_contents("api/files/quarto/motor/valor.txt");
$horaQ_M = file_get_contents("api/files/quarto/motor/hora.txt");
	
	//Sensor Movimento
$valorQ_Mv = file_get_contents("api/files/quarto/movimento/valor.txt");
$horaQ_Mv = file_get_contents("api/files/quarto/movimento/hora.txt");

	//Sensor Temperatura
$valorQ_T = file_get_contents("api/files/quarto/temperatura/valor.txt");
$horaQ_T = file_get_contents("api/files/quarto/temperatura/hora.txt");


//WC
	//Sensor Gás Fumo
$valorWC_GF = file_get_contents("api/files/wc/gas_fumo/valor.txt");
$horaWC_GF = file_get_contents("api/files/wc/gas_fumo/hora.txt");

	//Sensor Movimento
$valorWC_Mv = file_get_contents("api/files/wc/movimento/valor.txt");
$horaWC_Mv = file_get_contents("api/files/wc/movimento/hora.txt");

	//Sensor Temperatura
$valorWC_T = file_get_contents("api/files/wc/temperatura/valor.txt");
$horaWC_T = file_get_contents("api/files/wc/temperatura/hora.txt");
?>

<!doctype html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="5">
	<link rel="stylesheet" href="CSS\style.css">
	<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
	<script src="bootstrap\js\bootstrap.bundle.min.js"></script>
	<title>Plataforma IoT</title>
</head>

<body class="mainProfile">
	<br>
	<div class='container'>
		<div class='card'>
			<div class='card-body mainProfile'>
				<img src='Photos/abibiHotel.png' class='float-end' alt='Hotel icon' id='hotelImg'>
				<h1 class='card-title'>The Abibi</h1>
				<p>Bem-vindo <b><?php echo $_SESSION['user'] ?> </b><a href='logout.php'>logout</a></p>
				<small>The Abibi - Smart Hotel</small>
			</div>
		</div>
	</div>
	<br>
	<div class="container text-center">
		<img src='Photos/room_plant.png' alt='room plant'>
	</div>


	<!--Quarto-->

	
	<br>
	<div class="container text-center">
	<div class="card-header col-sm-12">
		<b>Quarto</b>
	</div>
	<br>
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Luminusidade: 80%</b></div>
					<div class="card-body mainProfile">
						<img src="Photos/dia.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer ">
						Atualização: <a href="">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
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
			<div class="col-sm-3">
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
			<div class="col-sm-3">
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
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
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
			<div class="col-sm-3">
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
			<div class="col-sm-3">
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
	<br><br>


	<!--Cozinha-->

	
	<br>
	<div class="container text-center">
	<div class="card-header col-sm-12">
		<b>WC</b>
	</div>
	<br>
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Fumo e Gás: <?php echo $valorC_GF?></b></div>
					<div class="card-body">
						<img src="Photos/fire_gas.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_GF?> <a href="">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Movimento: <?php echo $valorC_M?> </b></div>
					<div class="card-body">
						<img src="Photos/movimento.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_M?> <a href="">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
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
	<br><br>


	<!--Cozinha-->

	
	<br>
	<div class="container text-center">
	<div class="card-header col-sm-12">
		<b>Cozinha</b>
	</div>
	<br>
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Fumo e Gás: <?php echo $valorWC_GF?></b></div>
					<div class="card-body">
						<img src="Photos/fire_gas.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_GF?> <a href="">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Movimento: <?php echo $valorWC_Mv?></b></div>
					<div class="card-body">
						<img src="Photos/movimento.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_Mv?> <a href="">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Temperatura: <?php echo $valorWC_T?></b></div>
					<div class="card-body">
						<img src="Photos/temperature.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_T?> <a href="">History</a>
					</div>
				</div>
			</div>
		</div>
		<br>
</body>

</html>