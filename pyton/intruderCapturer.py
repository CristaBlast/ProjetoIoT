import cv2
import sys
import time

try :
    print("Prima CTRL+C para terminar")
    while True: # ciclo para o programa executar sem parar…
        import requests
        r=requests.get('http://127.0.0.1/ProjetoIoT/api/api.php?place=entrada&nome=porta')
        date = time.strftime("%m_%d_%Y_%H_%M_%S")
        if(r.status_code == 200):
            time.sleep (2)
            if(int(r.text)==1):
                print("Person Detected")
                camera = cv2.VideoCapture('http://192.168.1.105:4747/video')
                ret, image = camera.read()
                name = '..\Intruders\_' + date + '.png'
                cv2.imwrite(name,image)
                cv2.imshow('Entrance', image)
                cv2.waitKey(0)
                camera.release()
                
            else:
                print("Nothing to report")
                
                
                
        
except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C
    print( "Programa terminado pelo utilizador")
except : # caso haja um erro qualquer
    print( "Ocorreu um erro:", sys.exc_info() )
finally : # executa sempre, independentemente se ocorreu exception
    print( "Fim do programa") 
    
    
