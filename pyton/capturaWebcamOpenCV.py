import cv2
import time

try:
	while keyboard.is_pressed('s')
		camera = cv2.VideoCapture('http://192.168.1.105:4747/video')
		ret, image = camera.read()
		print ("Resultado da Camera=" + str(ret))
		cv2.imwrite('webcam.jpg', image)
		cv2.waitKey(100)
except:KeyboardInterrupt
	print("prgram Ended")

camera.release()
cv2.destroyAllWindows()