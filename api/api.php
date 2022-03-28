<?php

    header('Content-Type: text/html; charset=utf-8');
	echo $_SERVER['REQUEST_METHOD']."<br>";
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		echo "Recebi um POST <br>";
		$a = array($_POST);
		print_r($_POST);
		//$a = array($_POST);
		file_put_contents("files/".$_POST['nome']."/valor.txt",$_POST['valor']);
		file_put_contents("files/".$_POST['nome']."/hora.txt",$_POST['hora']);
		file_put_contents("files/".$_POST['nome']."/nome.txt",$_POST['nome']);
		file_put_contents("files/".$_POST['nome']."/log.txt",$_POST['hora']);

	}
	elseif($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		echo "Recebi um GET";
	}
	else
	{
		echo "Na tás a fazer nada de jeito";
	}
  ?>