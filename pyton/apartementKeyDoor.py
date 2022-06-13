import sys
import requests
import time

def data_hora():
	print(time.strftime("%m/%d/%Y, %H:%M:%S"))


def send_to_api():
	url='http://127.0.0.1/ProjetoIoT/api/api.php'
	valores={'place':'entrada','valor':'0','nome':'rfid','hora': data_hora()}
	try:
		print("Prima CTRL+C para terminar")
		while True: # ciclo para o programa executar sem parar…
			r=requests.post(url, valores)
			if(r.status_code==200):
				print("Ok: POST realizado com sucesso")
				print(r.text)
			else:
				print("ERRO: Não foi possivel realizar o pedido")
				print( "Ocorreu um erro:", sys.exc_info() )
				print(r)
	except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C
		print( "Programa terminado pelo utilizador")
	except : # caso haja um erro qualquer
		print( "Ocorreu um erro:", sys.exc_info() )
	finally : # executa sempre, independentemente se ocorreu exception
        #valores={'place':'entrada','nome':'rfid','valor':'0','hora':data_hora()}
        #r=requests.post(url,valores)
		print( "Fim do programa")

send_to_api()