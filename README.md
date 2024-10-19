# MATEVIAJES 

# Integrantes del grupo 
Barragán, Alba -->  albabarragan88@gmail.com  
Rebainera, Maximiliano -->  maxi.reba@gmail.com

# Temática del trabajo
 Sitio de viajes y turismo en Argentina

# Descripción de la temática
 El sitio permite observar y administrar los viajes que se planifican en una empresa de turismo, en la misma el usuario administrador podrá asignar destinos a los distintos vehículos con los que cuenta la compañía, mediante una relación 1 a N, en la cual un vehículo puede realizar más de un viaje en un cierto periodo de tiempo.
 La base de datos cuenta con dos tablas, una que está destinada a la descripción de los viajes, contando con destino, fecha, horario de salida y lugares disponibles, como así un id y una fk para vincular con el vehículo. Por otro lado, la tabla vehículos cuenta con la decripción de marca, modelo, patente, año y cantidad de asientos con los que cuenta.

# Despliegue

Para el despliegue de este sitio web del repositorio se deben realizar los siguientes pasos:

1. Clonar el repositorio en su ordenador, al usar un servidor local Apache y MySQL será necesario hacerlo dentro de la carpeta "htdocs" en la ruta donde se encuentra instalado Xammp.
   Los métodos pueden ser descomprimiento el archivo ZIP o mediante el clonado mediante aplicaciones como GIT.

3. Iniciar los servidores Apache y MySQL.

4. Se debe crear una base de datos en el cliente local MySQL, en nuestro caso phpMyAdmin. La base de datos deberá llevar el nombre *db_mateviajes*.

5. Se debe abrir el navegador web a utilizar y colocar en la barra de dirección "http://localhost/mateviajes" (suponiendo que la carpeta del proyecto fue colocada en la carpeta hthost, de lo contrario agregar el nombre de la subcarpeta).


 Diagrama entidad relación de la DB: https://drive.google.com/file/d/1eCGeWGdwTbnnSBwuByZrAwfO_8q1pYvo/view?usp=sharing

 # Usuario administrador
*La DB ahora cuenta con 3 tablas habiendo incorporado una tabla de usuarios*

 Usuario --> webadmin     
 Contraseña --> admin
