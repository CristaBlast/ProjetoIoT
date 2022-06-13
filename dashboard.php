<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])) {
	header("Location: http://127.0.0.1/ProjetoIoT/");
	die("acesso restrito");
}

//Cozinha

//Ar Condicionado
$valorC_C = file_get_contents("api/files/cozinha/ar_condicionado/valor.txt");
$horaC_C = file_get_contents("api/files/cozinha/ar_condicionado/hora.txt");

//Aspersor Do Teto
$valorC_A = file_get_contents("api/files/cozinha/aspersor/valor.txt");
$horaC_A = file_get_contents("api/files/cozinha/aspersor/hora.txt");

//Sensor De Fumo
$valorC_F = file_get_contents("api/files/cozinha/fumo/valor.txt");
$horaC_F = file_get_contents("api/files/cozinha/fumo/hora.txt");

//Janela Up
$valorC_JU = file_get_contents("api/files/cozinha/janelaUp/valor.txt");
$horaC_JU = file_get_contents("api/files/cozinha/janelaUp/hora.txt");

//Janela Left
$valorC_JL = file_get_contents("api/files/cozinha/janelaLeft/valor.txt");
$horaC_JL = file_get_contents("api/files/cozinha/janelaLeft/hora.txt");

//Luzes Da Cozinha
$valorC_L = file_get_contents("api/files/cozinha/luz/valor.txt");
$horaC_L = file_get_contents("api/files/cozinha/luz/hora.txt");

//Sensor De Movimento
$valorC_M = file_get_contents("api/files/cozinha/movimento/valor.txt");
$horaC_M = file_get_contents("api/files/cozinha/movimento/hora.txt");

//Sensor De Temperatura
$valorC_T = file_get_contents("api/files/cozinha/temperatura/valor.txt");
$horaC_T = file_get_contents("api/files/cozinha/temperatura/hora.txt");


//Entrada

//Sensor De Movimento
$valorE_M = file_get_contents("api/files/entrada/movimento/valor.txt");
$horaE_M = file_get_contents("api/files/entrada/movimento/hora.txt");

//Luz
$valorE_L = file_get_contents("api/files/entrada/luz/valor.txt");
$horaE_L = file_get_contents("api/files/entrada/luz/hora.txt");

//Porta De Entrada Do Apartamento
$valorE_P = file_get_contents("api/files/entrada/porta/valor.txt");
$horaE_P = file_get_contents("api/files/entrada/porta/hora.txt");

//RFID para abrir a porta
$valorE_R = file_get_contents("api/files/entrada/rfid/valor.txt");
$horaE_R = file_get_contents("api/files/entrada/rfid/hora.txt");


//Quarto

//Ar Condicionado
$valorQ_C = file_get_contents("api/files/quarto/ar_condicionado/valor.txt");
$horaQ_C = file_get_contents("api/files/quarto/ar_condicionado/hora.txt");

//Aspersor Do Teto
$valorQ_A = file_get_contents("api/files/quarto/aspersor/valor.txt");
$horaQ_A = file_get_contents("api/files/quarto/aspersor/hora.txt");

//Sensor De Fumo
$valorQ_F = file_get_contents("api/files/quarto/fumo/valor.txt");
$horaQ_F = file_get_contents("api/files/quarto/fumo/hora.txt");

//Janela
$valorQ_J = file_get_contents("api/files/quarto/janela/valor.txt");
$horaQ_J = file_get_contents("api/files/quarto/janela/hora.txt");

//Luzes Do Quarto
$valorQ_L = file_get_contents("api/files/quarto/luz/valor.txt");
$horaQ_L = file_get_contents("api/files/quarto/luz/hora.txt");

//Sensor De Movimento
$valorQ_M = file_get_contents("api/files/quarto/movimento/valor.txt");
$horaQ_M = file_get_contents("api/files/quarto/movimento/hora.txt");

//Sensor De Temperatura
$valorQ_T = file_get_contents("api/files/quarto/temperatura/valor.txt");
$horaQ_T = file_get_contents("api/files/quarto/temperatura/hora.txt");


//WC
//Ar Condicionado
$valorWC_C = file_get_contents("api/files/wc/ar_condicionado/valor.txt");
$horaWC_C = file_get_contents("api/files/wc/ar_condicionado/hora.txt");

//Aspersor Do Teto
$valorWC_A = file_get_contents("api/files/wc/aspersor/valor.txt");
$horaWC_A = file_get_contents("api/files/wc/aspersor/hora.txt");

//Sensor De Fumo
$valorWC_F = file_get_contents("api/files/wc/fumo/valor.txt");
$horaWC_F = file_get_contents("api/files/wc/fumo/hora.txt");

//Sensor de humidade
$valorWC_H = file_get_contents("api/files/wc/humidade/valor.txt");
$horaWC_H = file_get_contents("api/files/wc/humidade/hora.txt");

//Luzes Do WC
$valorWC_L = file_get_contents("api/files/wc/luz/valor.txt");
$horaWC_L = file_get_contents("api/files/wc/luz/hora.txt");

//Monitor LCD Da Porta
$valorWC_LCD = file_get_contents("api/files/wc/monitor_porta/valor.txt");
$horaWC_LCD = file_get_contents("api/files/wc/monitor_porta/hora.txt");

//Sensor De Movimento
$valorWC_M = file_get_contents("api/files/wc/movimento/valor.txt");
$horaWC_M = file_get_contents("api/files/wc/movimento/hora.txt");

//Porta
$valorWC_P = file_get_contents("api/files/wc/porta/valor.txt");
$horaWC_P = file_get_contents("api/files/wc/porta/hora.txt");

//Sensor De Temperatura
$valorWC_T = file_get_contents("api/files/wc/temperatura/valor.txt");
$horaWC_T = file_get_contents("api/files/wc/temperatura/hora.txt");
?>

<!doctype html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="4">
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
		<img src='Photos/
			<?php if ($_SESSION['user'] == 'admin' && $_SESSION['pass'] == 'admin') {
				echo 'hotel_plant';
			} else {
				echo 'room_plant';
			}
			?>.jpg' alt='plant'>
	</div>
	<br><br>

	<div class="container text-center">
		<img src="Photos\hallway.PNG" alt="">
	</div>
	<br>

	<!--Entrada-->


	<br>
	<div class="container text-center">
		<div class="card-header col-sm-12">
			<b>Entrada</b>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Sensor de Movimento: <?php if ($valorE_M == 0) {
																			echo 'Desligado';
																		} else {
																			echo 'Ligado';
																		} ?></b></div>
					<div class="card-body ">
						<img src="Photos/arCondicionado.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer ">
						Atualização: <?php echo $horaE_M ?> <a href="api/files/quarto/ar_condicionado/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Luz: <?php if ($valorE_L == 0) {
															echo 'Desligada';
														} else {
															echo 'Ligada';
														} ?></b></div>
					<div class="card-body">
						<img src="Photos/aspersor.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaE_L ?> <a href="api/files/quarto/aspersor/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Porta: <?php if ($valorE_P == '1') {
															echo 'Porta Aberta';
														} else {
															echo 'Porta Fechada';
														} ?></b></div>
					<div class="card-body">
						<img src='Photos/<?php if ($valorE_P == '1') {
												echo 'doorO';
											} else {
												echo 'door';
											} ?>.png' class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaE_P ?> <a href="api/files/quarto/fumo/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>RFID: <?php if ($valorE_R == 4) {
															echo 'Não Permitido';
														} else {
															echo 'Permitido';
														} ?></b></div>
					<div class="card-body">
						<img src="Photos/rfid.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaE_R ?> <a href="api/files/quarto/fumo/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>


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
					<div class="card-header"><b>Ar Condicionado: <?php if ($valorQ_C == 0) {
																		echo 'Desligado';
																	} else {
																		echo 'Ligado';
																	} ?></b></div>
					<div class="card-body ">
						<img src="Photos/arCondicionado.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer ">
						Atualização: <?php echo $horaQ_C ?> <a href="api/files/quarto/ar_condicionado/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Aspersor De Teto: <?php if ($valorQ_A == 0) {
																		echo 'Não Ativo';
																	} else {
																		echo 'Ativo';
																	} ?></b></div>
					<div class="card-body">
						<img src="Photos/aspersor.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_A ?> <a href="api/files/quarto/aspersor/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Sensor De Fumo: <?php if ($valorQ_F == 0) {
																	echo 'Não Ativo';
																} else {
																	echo 'Ativo';
																} ?></b></div>
					<div class="card-body">
						<img src="Photos/smoke.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_F ?> <a href="api/files/quarto/fumo/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Janela: <?php if ($valorQ_J == 0) {
															echo 'Fechada';
														} else {
															echo 'Aberta';
														} ?></b></div>
					<div class="card-body">
						<img src="Photos/window.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_J ?> <a href="api/files/quarto/janela/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Luz: <?php if ($valorQ_L == 0) {
															echo 'Desligada';
														} else {
															echo 'Ligada';
														} ?></b></div>
					<div class="card-body">
						<img src="Photos/dia.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_L ?> <a href="api/files/quarto/luz/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Sensor De Movimento: <?php if ($valorQ_M == 0) {
																			echo 'Não Ativo';
																		} else {
																			echo 'Ativo';
																		} ?></b></div>
					<div class="card-body">
						<img src="Photos/movimento.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_M ?> <a href="api/files/quarto/movimento/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Temperatura: <?php echo round($valorQ_T, 2) . '°C' ?></b></div>
					<div class="card-body">
						<img src="Photos/temperature.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaQ_T ?> <a href="api/files/quarto/temperatura/log.txt" target="_blank">History</a>
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
					<div class="card-header"><b>Ar Condicionado: <?php if ($valorWC_C == 0) {
																		echo 'Desligado';
																	} else {
																		echo 'Ligado';
																	} ?></b></div>
					<div class="card-body ">
						<img src="Photos/arCondicionado.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer ">
						Atualização: <?php echo $horaWC_C ?> <a href="api/files/quarto/ar_condicionado/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Aspersor De Teto: <?php if ($valorWC_A == 0) {
																		echo 'Não Ativo';
																	} else {
																		echo 'Ativo';
																	} ?></b></div>
					<div class="card-body">
						<img src="Photos/aspersor.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_A ?> <a href="api/files/quarto/aspersor/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Sensor De Fumo: <?php if ($valorWC_F == 0) {
																	echo 'Não Ativo';
																} else {
																	echo 'Ativo';
																} ?></b></div>
					<div class="card-body">
						<img src="Photos/smoke.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_F ?> <a href="api/files/quarto/fumo/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Humidade: <?php echo $valorWC_H ?></b></div>
					<div class="card-body">
						<img src="Photos/humidity.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_H ?> <a href="api/files/quarto/humidade/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Luz: <?php if ($valorWC_L == 0) {
															echo 'Desligada';
														} else {
															echo 'Ligada';
														} ?></b></div>
					<div class="card-body">
						<img src="Photos/dia.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_L ?> <a href="api/files/quarto/luz/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Sensor De Movimento: <?php if ($valorWC_M == 0) {
																			echo 'Não Ativo';
																		} else {
																			echo 'Ativo';
																		} ?></b></div>
					<div class="card-body">
						<img src="Photos/movimento.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_M ?> <a href="api/files/quarto/movimento/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Temperatura: <?php echo round($valorWC_T, 2) . '°C' ?></b></div>
					<div class="card-body">
						<img src="Photos/temperature.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_T ?> <a href="api/files/quarto/temperatura/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Porta: <?php if ($valorWC_P == '1,0') {
															echo 'Porta Aberta';
														} elseif ($valorWC_P == '1,1' || $valorWC_P == '0,1') {
															echo 'Porta Trancada';
														} else {
															echo 'Porta Fechada';
														} ?></b></div>
					<div class="card-body">
						<img src='Photos/<?php if ($valorWC_P == '1,0') {
												echo 'doorO';
											} else {
												echo 'door';
											} ?>.png' class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaWC_T ?> <a href="api/files/quarto/temperatura/log.txt" target="_blank">History</a>
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
					<div class="card-header"><b>Ar Condicionado: <?php if ($valorC_C == 0) {
																		echo 'Desligado';
																	} else {
																		echo 'Ligado';
																	} ?></b></div>
					<div class="card-body ">
						<img src="Photos/arCondicionado.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer ">
						Atualização: <?php echo $horaC_C ?> <a href="api/files/quarto/ar_condicionado/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Aspersor De Teto: <?php if ($valorC_A == 0) {
																		echo 'Não Ativo';
																	} else {
																		echo 'Ativo';
																	} ?></b></div>
					<div class="card-body">
						<img src="Photos/aspersor.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_A ?> <a href="api/files/quarto/aspersor/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Sensor De Fumo: <?php if ($valorC_F == 0) {
																	echo 'Não Ativo';
																} else {
																	echo 'Ativo';
																} ?></b></div>
					<div class="card-body">
						<img src="Photos/smoke.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_F ?> <a href="api/files/quarto/fumo/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Janela Da Direita: <?php if ($valorC_JU == 0) {
																		echo 'Fechada';
																	} else {
																		echo 'Aberta';
																	} ?></b></div>
					<div class="card-body">
						<img src="Photos/window.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_JU ?> <a href="api/files/quarto/janela/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Janela Da Frente: <?php if ($valorC_JL == 0) {
																		echo 'Fechada';
																	} else {
																		echo 'Aberta';
																	} ?></b></div>
					<div class="card-body">
						<img src="Photos/window.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_JL ?> <a href="api/files/quarto/janela/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Luz: <?php if ($valorC_L == 0) {
															echo 'Desligada';
														} else {
															echo 'Ligada';
														} ?></b></div>
					<div class="card-body">
						<img src="Photos/dia.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_L ?> <a href="api/files/quarto/luz/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Sensor De Movimento: <?php if ($valorC_M == 0) {
																			echo 'Não Ativo';
																		} else {
																			echo 'Ativo';
																		} ?></b></div>
					<div class="card-body">
						<img src="Photos/movimento.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_M ?> <a href="api/files/quarto/movimento/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-header"><b>Temperatura: <?php echo round($valorC_T, 2) . '°C' ?></b></div>
					<div class="card-body">
						<img src="Photos/temperature.png" class="card-img-top" alt="sun icon" id="icons">
					</div>
					<div class="card-footer">
						Atualização: <?php echo $horaC_T ?> <a href="api/files/quarto/temperatura/log.txt" target="_blank">History</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>


</body>

</html>