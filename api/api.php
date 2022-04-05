<?php

    header('Content-Type: text/html; charset=utf-8');
	echo $_SERVER['REQUEST_METHOD']."<br>";
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST['valor']) && isset($_POST['hora']) && isset($_POST['nome']) && isset($_POST['hora']))
		{
			file_put_contents("files/".$_POST['nome']."/valor.txt",$_POST['valor']);
			file_put_contents("files/".$_POST['nome']."/hora.txt",$_POST['hora']);
			file_put_contents("files/".$_POST['nome']."/nome.txt",$_POST['nome']);
			file_put_contents("files/".$_POST['nome']."/log.txt",$_POST['hora']);
		}
		if(isset($_POST['valor']) && isset($_POST['hora']) && isset($_POST['nome']) && isset($_POST['hora']))
		{
			file_put_contents("files/".$_POST['nome']."/valor.txt",$_POST['valor']);
			file_put_contents("files/".$_POST['nome']."/hora.txt",$_POST['hora']);
			file_put_contents("files/".$_POST['nome']."/nome.txt",$_POST['nome']);
			file_put_contents("files/".$_POST['nome']."/log.txt",$_POST['hora']);
		}
		if(isset($_POST['valor']) && isset($_POST['hora']) && isset($_POST['nome']) && isset($_POST['hora']))
		{
			file_put_contents("files/".$_POST['nome']."/valor.txt",$_POST['valor']);
			file_put_contents("files/".$_POST['nome']."/hora.txt",$_POST['hora']);
			file_put_contents("files/".$_POST['nome']."/nome.txt",$_POST['nome']);
			file_put_contents("files/".$_POST['nome']."/log.txt",$_POST['hora']);
		}
	}
	elseif($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		
		if(isset($_GET['nome']) && file_exists("files/cozinha/".$_GET['nome']."/valor.txt"))
		{
			echo file_get_contents("files/cozinha/".$_GET['nome']."/valor.txt");

			echo "oi";
		}
		if(isset($_GET['nome']) && file_exists("files/quarto/".$_GET['nome']."/valor.txt"))
		{
			echo file_get_contents("files/quarto/".$_GET['nome']."/valor.txt");

			echo "oiI";
		}
		if(isset($_GET['nome']) && file_exists("files/wc/".$_GET['nome']."/valor.txt"))
		{
			echo file_get_contents("files/wc/".$_GET['nome']."/valor.txt");

			echo "oiII	";
		}
		else
		{
			http_response_code(403);
		}
	}
	else
	{
		http_response_code(400);
	}
