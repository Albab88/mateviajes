# MATEVIAJES 

# Integrantes del grupo 
Barragán, Alba -->  albabarragan88@gmail.com  
Rebainera, Maximiliano -->  maxi.reba@gmail.com

# Temática del trabajo
 Sitio de viajes y turismo en Argentina

# Descripción de la temática
 El sitio permite observar y administrar los viajes que se planifican en una empresa de turismo, en la misma el usuario administrador podrá asignar destinos a los distintos vehículos con los que cuenta la compañía, mediante una relación 1 a N, en la cual un vehículo puede realizar más de un viaje en un cierto periodo de tiempo.
 La base de datos cuenta con dos tablas, una que está destinada a la descripción de los viajes, contando con destino, fecha, horario de salida y lugares disponibles, como así un id y una fk para vincular con el vehículo. Por otro lado, la tabla vehículos cuenta con la decripción de marca, modelo, patente, año y cantidad de asientos con los que cuenta.

 Diagrama entidad relación de la DB: https://drive.google.com/file/d/1eCGeWGdwTbnnSBwuByZrAwfO_8q1pYvo/view?usp=sharing

 # Usuario administrador
*La DB ahora cuenta con 3 tablas habiendo incorporado una tabla de usuarios*

 Usuario --> webadmin     
 Contraseña --> admin
