-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2024 a las 02:16:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


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
(1, 'webadmin', '$2y$10$fOmfNDoBopb2.lQpbRmFLOIY5wMR.zoWNl154xeCtZkue4s4es2sq');

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
(3, 'Mercedes Benz', 'Sprinter', 'AA738AO', 2016, 20),
(4, 'Fiat', 'Ducato', 'AB287AI', 2018, 20),
(5, 'Mercedes Benz', 'Marcopolo', 'AC111AA', 2018, 37),
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
(3, 'Tigre', '2024-11-30', '07:00:00', 34, 5, 'Disfrutá de un día inolvidable en Tigre. Te llevamos a recorrer el Delta en una relajante navegación, con vistas increíbles y paradas en islas emblemáticas. Además, incluimos almuerzo y tiempo libre para explorar el famoso Puerto de Frutos. ¡Vení a vivir una experiencia única en Tigre, ideal para desconectar en un solo día!'),
(4, 'Mar del Plata', '2025-01-11', '07:00:00', 48, 6, 'Pasá un día espectacular en Mar del Plata, disfrutando de sus playas, gastronomía y ambiente costero. Te ofrecemos un viaje con traslados cómodos, tiempo libre para recorrer el centro, el puerto y los principales puntos turísticos. Relajate bajo el sol o descubrí la magia de la ciudad junto al mar. ¡No te pierdas esta escapada ideal para desconectar y disfrutar al máximo en un solo día!'),
(12, 'Glaciar Perito Moreno', '2024-11-30', '12:30:00', 18, 3, 'Explorá la majestuosidad del Glaciar Perito Moreno y sus alrededores en un viaje inolvidable de 8 días. Te ofrecemos un recorrido completo con visitas a los paisajes más impresionantes de la Patagonia, incluyendo el Parque Nacional Los Glaciares, el Lago Argentino y navegaciones por los canales. Disfrutá de la comodidad del alojamiento y las excursiones guiadas que te conectarán con la naturaleza en su máxima expresión. ¡Viví una aventura única en uno de los destinos más espectaculares del mundo!'),
(13, 'Mar del Plata', '2025-01-17', '07:30:00', 50, 13, 'Disfrutá de una escapada de 3 días a Mar del Plata, la ciudad balnearia más famosa del país. Relajate en sus playas, disfrutá de su vibrante vida nocturna y recorré sus puntos turísticos como el Puerto, el Torreón y la Rambla. Incluimos alojamiento con desayuno y tiempo libre para que vivas la ciudad a tu ritmo. ¡No te pierdas esta oportunidad de desconectar y disfrutar de la costa en su máxima expresión!'),
(14, 'Cataratas de Iguazú', '2025-07-07', '10:00:00', 20, 3, 'Descubrí la maravilla natural de las Cataratas del Iguazú en un viaje de 7 días lleno de aventura y paisajes impactantes. Te ofrecemos un paquete completo con alojamiento, traslados y visitas guiadas a ambos lados del Parque Nacional, argentino y brasileño. Además, disfrutá de excursiones a la Garganta del Diablo, paseos en lancha y caminatas por la selva. ¡Sumergite en la naturaleza y viví una experiencia inolvidable en las Cataratas!'),
(15, 'La Plata', '2024-11-18', '05:30:00', 37, 5, 'Descubrí La Plata en un increíble viaje de 1 día, explorando sus principales atractivos históricos y culturales. Visitá la majestuosa Catedral, el fascinante Museo de Ciencias Naturales y el imponente Paseo del Bosque. Con traslados cómodos y tiempo libre para disfrutar de la ciudad, esta escapada es ideal para sumergirte en la arquitectura y cultura de la capital bonaerense. ¡No te lo pierdas y reservá tu lugar hoy!'),
(16, 'Mendoza', '2025-05-15', '06:00:00', 50, 6, 'Descubrí Mendoza en un viaje de 7 días lleno de paisajes, vino y aventura. Visitá sus famosas bodegas con degustaciones exclusivas, recorriendo los viñedos que hacen de esta región un ícono mundial. Además, explorá la imponente Cordillera de los Andes, con excursiones a sitios como el Aconcagua y el Cañón del Atuel. ¡Sumate a esta experiencia única y disfrutá lo mejor de Mendoza con todo incluido!'),
(17, 'El Chaltén', '2025-03-22', '13:00:00', 20, 4, 'Recibí el otoño en El Chaltén con un viaje de 5 días, rodeado de paisajes patagónicos que se visten de colores cálidos. Caminá entre montañas, glaciares y lagunas mientras disfrutás del cambio de estación en un entorno mágico. El paquete incluye alojamiento, excursiones guiadas y tiempo libre para conectar con la naturaleza. ¡No te pierdas esta oportunidad de vivir el otoño en la capital del trekking argentino!');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
