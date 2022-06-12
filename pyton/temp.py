import sys
import time

def play_sound(ficheiro):
    wave_obj = simpleaudio.WaveObject.from_wave_file(ficheiro)
    play_obj = wave_obj.play() # tocar o audio
    play_obj.wait_done() # espera ate o audio terminar 

try :
    print("Prima CTRL+C para terminar")
    while True: # ciclo para o programa executar sem parar…
        import requests
        r=requests.get('http://127.0.0.1/IOT/api/api.php?nome=temperatura')
        if(r.status_code     == 200):
            time.sleep (2)
            if(int(r.text)>20):
                print("Temperatura HIGH: " + r.text)
                """play_sound("ficheiro_audio")"""
            else:
                print("Temperatura LOW: " + r.text)
        
except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C
    print( "Programa terminado pelo utilizador")
except : # caso haja um erro qualquer
    print( "Ocorreu um erro:", sys.exc_info() )
finally : # executa sempre, independentemente se ocorreu exception
    print( "Fim do programa") 