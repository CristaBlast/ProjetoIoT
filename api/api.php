	<?php

    header('Content-Type: text/html; charset=utf-8');
	//echo $_SERVER['REQUEST_METHOD']."<br>";
	//F	t: place=quarto&valor=42&nome=temperatura&hora=2021/03/25 00:31

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST['valor']) && isset($_POST['hora']) && isset($_POST['nome']) && isset($_POST['place']))
		{
			file_put_contents("files/".$_POST['place']."/".$_POST['nome']."/valor.txt",$_POST['valor']);
			file_put_contents("files/".$_POST['place']."/".$_POST['nome']."/nome.txt",$_POST['nome']);
			file_put_contents("files/".$_POST['place']."/".$_POST['nome']."/hora.txt",$_POST['hora']);
		}

	}


	
	//Format http://127.0.0.1/ProjetoIoT/api/api.php?place=quarto&nome=temperatura
	elseif($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		if(isset($_GET['place']) && isset($_GET['nome']) && file_exists("files/".$_GET['place']."/".$_GET['nome']."/valor.txt"))
		{
			echo file_get_contents("files/".$_GET['place']."/".$_GET['nome']."/valor.txt");
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
