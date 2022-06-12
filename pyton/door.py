import sys
import requests
import time
import msvcrt

def data_hora():
	print(time.strftime("%m/%d/%Y, %H:%M:%S"))


def send_to_api():
	url='http://127.0.0.1/ProjetoIoT/api/api.php'
	valores={'nome':'porta','valor':1,'hora':data_hora()}
	try:
		print("Prima CTRL+C para terminar")
		while True: # ciclo para o programa executar sem parar…
			import requests
			r=requests.post(url,valores)
			if(r.status_code==200):
				print("Ok: POST realizado com sucesso")
				print(r)
				time.sleep (2)
			else:
				print("ERRO: Não foi possivel realizar o pedido")
				print( "Ocorreu um erro:", sys.exc_info() )
				print(r)
				time.sleep (2)
	except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C
		print( "Programa terminado pelo utilizador")
	except : # caso haja um erro qualquer
		print( "Ocorreu um erro:", sys.exc_info() )
	finally : # executa sempre, independentemente se ocorreu exception
		print( "Fim do programa")

send_to_api()