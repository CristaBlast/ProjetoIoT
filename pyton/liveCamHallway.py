import cv2
import keyboard

bruh=1

while bruh==1:
    camera = cv2.VideoCapture('http://192.168.1.105:4747/video')
    ret, image = camera.read()
    cv2.imwrite('..\Photos\hallway.png',image)
    camera.release()
    cv2.destroyAllWindows()
    if keyboard.is_pressed('x'):
        bruh=0
        break
    cv2.waitKey(1000)

print("program Ended")


