import cv2
camera = cv2.VideoCapture('http://192.168.1.105:4747/video')
ret, image = camera.read()
print ("Resultado da Camera=" + str(ret))
cv2.imwrite('opencv_image.png', image)
camera.release()
cv2.destroyAllWindows()