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
$valorC_Mv = file_get_contents("api/files/cozinha/movimento/valor.txt");
$horaC_Mv = file_get_contents("api/files/cozinha/movimento/hora.txt");

	//Sensor Temperatura
$valorC_T = file_get_contents("api/files/cozinha/temperatura/valor.txt");
$horaC_T = file_get_contents("api/files/cozinha/temperatura/hora.txt");

//Quarto
	//Sensor Gás Fumo
$valorQ_GF = file_get_contents("api/files/quarto/gas_fumo/valor.txt");
$horaQ_GF = file_get_contents("api/files/quarto/gas_fumo/hora.txt");
	
	//Sensor Luminosidade
$valorQ_L = file_get_contents("api/files/quarto/luminosidade/valor.txt");
$horaQ_L = file_get_contents("api/files/quarto/luminosidade/hora.txt");

	//Motor Janelas
$valorQ_MJ = file_get_contents("api/files/quarto/motor_janelas/valor.txt");
$horaQ_MJ = file_get_contents("api/files/quarto/motor_janelas/hora.txt");

	//Motor Ventoinhas
$valorQ_MV = file_get_contents("api/files/quarto/motor_ventoinha/valor.txt");
$horaQ_MV = file_get_contents("api/files/quarto/motor_ventoinha/hora.txt");

	//Motor Porta
$valorQ_MP = file_get_contents("api/files/quarto/motor_porta/valor.txt");
$horaQ_MP = file_get_contents("api/files/quarto/motor_porta/hora.txt");
	
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

	//Motor Porta
$valorWC_MP = file_get_contents("api/files/wc/motor_porta/valor.txt");
$horaWC_MP = file_get_contents("api/files/wc/motor_porta/hora.txt");
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

<body class="">
	<br>
	<div class='container'>
		<div class='card'>
			<div class='card-body mainColorBG'>
				<img src='Photos/abibiHotel.png' class='float-end' alt='Hotel icon' id='hotelImg'>	
				<img src="Photos/Banner.png" class='' id="banner" alt="">
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
					<div class="card-header"><b>Luminosidade: <?php echo $valorQ_L?></b></div>
					<div class="card-body ">
						<img src="Photos/dia.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer ">
						Atualização: <?php echo $horaQ_L?> <a href="api/files/quarto/luminosidade/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Temperatura: <?php echo $valorQ_T?></b></div>
					<div class="card-body">
						<img src="Photos/temperature.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_T?> <a href="api/files/quarto/temperatura/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Porta: <?php echo $valorQ_MP?></b></div>
					<div class="card-body">
						<img src="Photos/door.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_MP?> <a href="api/files/quarto/motor_porta/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Fumo e Gás: <?php echo $valorQ_GF?></b></div>
					<div class="card-body">
						<img src="Photos/fire_gas.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_GF?> <a href="api/files/quarto/gas_fumo/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Movimento: <?php echo $valorQ_Mv?></b></div>
					<div class="card-body">
						<img src="Photos/movimento.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_Mv?> <a href="api/files/quarto/movimento/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Ventoinha: <?php echo $valorQ_MV?></b></div>
					<div class="card-body">
						<img src="Photos/fan.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_MV?> <a href="api/files/quarto/motor_ventoinha/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Janelas: <?php echo $valorQ_MJ?></b></div>
					<div class="card-body">
						<img src="Photos/window.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_MJ?> <a href="api/files/quarto/motor_janelas/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>


	<!--WC-->

	
	<br>
	<div class="container text-center">
	<div class="card-header col-sm-12">
		<b>WC</b>
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
						Atualização: <?php echo $horaWC_GF?> <a href="api/files/wc/gas_fumo/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Movimento: <?php echo $valorWC_Mv?> </b></div>
					<div class="card-body">
						<img src="Photos/movimento.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_Mv?> <a href="api/files/wc/movimento/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Porta: <?php echo $valorWC_MP?></b></div>
					<div class="card-body">
						<img src="Photos/door.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_MP?> <a href="api/files/wc/motor_porta/log.txt" target="_blank">History</a>
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
					<div class="card-header"><b>Fumo e Gás: <?php echo $valorC_GF?></b></div>
					<div class="card-body">
						<img src="Photos/fire_gas.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_GF?> <a href="api/files/cozinha/fumo_gas/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Movimento: <?php echo $valorC_Mv?></b></div>
					<div class="card-body">
						<img src="Photos/movimento.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_Mv?> <a href="api/files/cozinha/movimento/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Temperatura: <?php echo $valorC_T?></b></div>
					<div class="card-body">
						<img src="Photos/temperature.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_T?> <a href="api/files/cozinha/temperatura/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
		</div>
		<br>
</body>

</html>