<?php
require_once('config/config.php');

//Crea la conexión a la DB

class Model{

    protected $db;
    
    public function __construct() {
        global $configuracion;

            $user = $configuracion['usuario'];
            $password = $configuracion['password'];
            $database = $configuracion['basenombre'];
            $host = $configuracion['host'];
        $this->db = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8",$user,$password);
        $this->deploy();
    }

    protected function crearConexion () {
            
        global $configuracion;

        $user = $configuracion['usuario'];
        $password = $configuracion['password'];
        $database = $configuracion['basenombre'];
        $host = $configuracion['host'];
        
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
        } catch (\Throwable $th) {
            die($th);
            }
        return $pdo;
    }

    private function deploy() {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if (count($tables) == 0) {
            
            $hashed_password = '$2y$10$fOmfNDoBopb2.lQpbRmFLOIY5wMR.zoWNl154xeCtZkue4s4es2sq';
            
            $sql = "
            
                -- phpMyAdmin SQL Dump
                -- version 5.2.1
                -- https://www.phpmyadmin.net/
                --
                -- Servidor: 127.0.0.1
                -- Tiempo de generación: 13-10-2024 a las 01:55:10
                -- Versión del servidor: 10.4.32-MariaDB
                -- Versión de PHP: 8.2.12

                SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
                START TRANSACTION;
                SET time_zone = '+00:00';


                /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
                /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
                /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
                /*!40101 SET NAMES utf8mb4 */;

                --
                -- Base de datos: `db_mateviajes`
                --

                -- --------------------------------------------------------

                --
                -- Estructura de tabla para la tabla `usuarios`
                --

                CREATE TABLE `usuarios` (
                `id` int(11) NOT NULL,
                `usuario` varchar(20) NOT NULL,
                `password` varchar(100) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

                --
                -- Volcado de datos para la tabla `usuarios`
                --

                INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
                (1, 'webadmin', '$hashed_password');

                -- --------------------------------------------------------

                --
                -- Estructura de tabla para la tabla `vehiculos`
                --

                CREATE TABLE `vehiculos` (
                `id` int(11) NOT NULL,
                `marca` varchar(50) NOT NULL,
                `modelo` varchar(50) NOT NULL,
                `patente` varchar(7) NOT NULL,
                `anio` int(4) NOT NULL,
                `asientos` int(2) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

                --
                -- Volcado de datos para la tabla `vehiculos`
                --

                INSERT INTO `vehiculos` (`id`, `marca`, `modelo`, `patente`, `anio`, `asientos`) VALUES
                (1, 'Ford', 'Transit', 'DUG111', 2001, 16),
                (2, 'Mercedes Benz', 'Sprinter', 'GTO243', 2008, 17),
                (3, 'Mercedez Bens', 'Sprinter', 'AA738AO', 2016, 20),
                (4, 'Fiat', 'Ducato', 'AB287AI', 2018, 20),
                (5, 'Mercedez Bens', 'Marcopolo', 'AC111AA', 2018, 37),
                (6, 'Scania', 'K280', 'AD876HS', 2021, 50),
                (7, 'Scania', 'k230', 'NDF234', 2015, 48),
                (13, 'Ford', 'Cargo', 'AA456SS', 2016, 50);

                -- --------------------------------------------------------

                --
                -- Estructura de tabla para la tabla `viajes`
                --

                CREATE TABLE `viajes` (
                `id` int(11) NOT NULL,
                `destino` varchar(50) NOT NULL,
                `fecha` date NOT NULL,
                `horario` time NOT NULL,
                `pasajeros` int(2) NOT NULL,
                `fk_vehiculo` int(11) NOT NULL,
                `descripcion` text NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

                --
                -- Volcado de datos para la tabla `viajes`
                --

                INSERT INTO `viajes` (`id`, `destino`, `fecha`, `horario`, `pasajeros`, `fk_vehiculo`, `descripcion`) VALUES
                (1, 'Tandil', '2024-12-05', '08:00:00', 15, 1, '¡Escapate a Tandil por 3 días y disfrutá de la tranquilidad de la sierra! Te ofrecemos un paquete completo con alojamiento, desayuno y visitas guiadas a los principales atractivos de la ciudad. Descubrí la Piedra Movediza, el Cristo de las Sierras y la exquisita gastronomía local. ¡No te lo pierdas, reservá ahora tu lugar para una experiencia inolvidable!'),
                (2, 'Tandil', '2024-11-22', '09:00:00', 16, 3, 'Viví una escapada única de 2 días en Tandil, donde explorarás maravillas naturales como el Centinela, la famosa Piedra Movediza y la encantadora Sierra de las Ánimas. Disfrutá de paisajes impresionantes y sumergite en la tranquilidad de la sierra, con alojamiento incluido. ¡No te pierdas esta oportunidad de desconectar y descubrir lo mejor de Tandil en solo dos días!'),
                (3, 'Tigre', '2024-11-30', '07:00:00', 34, 5, 'Disfrutá de un día inolvidable en Tigre. Te llevamos a recorrer el Delta en una relajante navegación, con vistas increíbles y paradas en islas emblemáticas. Además, incluimos almuerzo y tiempo libre para explorar el famoso Puerto de Frutos. ¡Vení a vivir una experiencia única en Tigre, ideal para desconectar en un solo día!'),
                (4, 'Mar del Plata', '2025-01-11', '07:00:00', 48, 6, 'Pasá un día espectacular en Mar del Plata, disfrutando de sus playas, gastronomía y ambiente costero. Te ofrecemos un viaje con traslados cómodos, tiempo libre para recorrer el centro, el puerto y los principales puntos turísticos. Relajate bajo el sol o descubrí la magia de la ciudad junto al mar. ¡No te pierdas esta escapada ideal para desconectar y disfrutar al máximo en un solo día!'),
                (5, 'Mar del Plata', '2025-01-18', '07:00:00', 48, 6, 'Pasá un día espectacular en Mar del Plata, disfrutando de sus playas, gastronomía y ambiente costero. Te ofrecemos un viaje con traslados cómodos, tiempo libre para recorrer el centro, el puerto y los principales puntos turísticos. Relajate bajo el sol o descubrí la magia de la ciudad junto al mar. ¡No te pierdas esta escapada ideal para desconectar y disfrutar al máximo en un solo día!'),
                (7, 'Córdoba', '2024-11-14', '12:00:00', 12, 2, 'Te proponemos un viaje de 5 días a Córdoba, donde podrás disfrutar de sus imponentes sierras, ríos cristalinos y encantadores pueblos serranos como La Cumbrecita. Relajate en plena naturaleza, saboreá su deliciosa gastronomía local y desconectate del estrés. ¡Una experiencia inolvidable para recargar energías y disfrutar al máximo!\r\n'),
                (9, 'Ruinas de San Ignacio', '2024-11-15', '09:30:00', 20, 3, '¡Vive 15 días en las históricas Ruinas de San Ignacio! Explora las misiones jesuíticas rodeadas de selva, con recorridos guiados llenos de historia. Disfruta de la naturaleza exuberante, relájate en un entorno tranquilo y visita las cercanas Cataratas del Iguazú. Una combinación perfecta de cultura, aventura y paisajes increíbles.'),
                (10, 'El Bolsón', '2024-10-25', '12:45:00', 37, 5, ''),
                (11, 'La Plata', '7654-08-09', '08:59:00', 16, 1, 'kjhbgv bnm,l');

                --
                -- Índices para tablas volcadas
                --

                --
                -- Indices de la tabla `usuarios`
                --
                ALTER TABLE `usuarios`
                ADD PRIMARY KEY (`id`);

                --
                -- Indices de la tabla `vehiculos`
                --
                ALTER TABLE `vehiculos`
                ADD PRIMARY KEY (`id`);

                --
                -- Indices de la tabla `viajes`
                --
                ALTER TABLE `viajes`
                ADD PRIMARY KEY (`id`),
                ADD KEY `fk_vehiculos` (`fk_vehiculo`);

                --
                -- AUTO_INCREMENT de las tablas volcadas
                --

                --
                -- AUTO_INCREMENT de la tabla `usuarios`
                --
                ALTER TABLE `usuarios`
                MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

                --
                -- AUTO_INCREMENT de la tabla `vehiculos`
                --
                ALTER TABLE `vehiculos`
                MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

                --
                -- AUTO_INCREMENT de la tabla `viajes`
                --
                ALTER TABLE `viajes`
                MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

                --
                -- Restricciones para tablas volcadas
                --

                --
                -- Filtros para la tabla `viajes`
                --
                ALTER TABLE `viajes`
                ADD CONSTRAINT `fk_vehiculos` FOREIGN KEY (`fk_vehiculo`) REFERENCES `vehiculos` (`id`);
                COMMIT;

                /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
                /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
                /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

                ";
        $this->db->query($sql);
        }
    }
}