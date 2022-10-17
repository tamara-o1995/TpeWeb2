-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2022 a las 18:49:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`, `imagen`) VALUES
(1, 'Terror', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/terror.png'),
(2, 'Comedia', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/comedia.png'),
(3, 'Acción', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/accion.png'),
(4, 'Drama', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/drama.png'),
(5, 'Romance', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/romance.png'),
(6, 'Animación', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/animacion.png'),
(8, 'Musical', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/musical.png'),
(10, 'Thriller', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/thriller.png'),
(11, 'Suspenso', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/suspenso.png'),
(12, 'Fantasía', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/fantasia.png'),
(13, 'Ciencia Ficción', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/cs_ficcion.png'),
(14, 'Documental', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/documental.png'),
(15, 'Crimen', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/crimen.png'),
(16, 'Bélico', 'https://raw.githubusercontent.com/tamara-o1995/Imagenes/main/belico.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `duracion` int(3) NOT NULL,
  `anio` int(4) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `sinopsis` varchar(500) NOT NULL,
  `video` varchar(500) NOT NULL,
  `director` varchar(40) NOT NULL,
  `elenco` varchar(150) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `duracion`, `anio`, `imagen`, `sinopsis`, `video`, `director`, `elenco`, `id_genero`) VALUES
(1, 'El Conjuro 2', 134, 2016, 'https://www.tematika.com/media/catalog/Ilhsa/Imagenes/622990.jpg', 'Secuela de la exitosa «Expediente Warren» (2013), que lleva de nuevo a la pantalla otro caso real de los expedientes de los renombrados demonólogos Ed y Lorraine Warren. En este caso ambos viajarán al norte de Londres para ayudar a una madre soltera que tiene a su cargo cuatro hijos y que vive sola con ellos en una casa plagada de espíritus malignos.', 'https://www.youtube.com/watch?v=kCNAor73fVA&ab_channel=TrailersInSpanish', 'James Wan', 'Abhi Sinha, Annie Young, Benjamin Haigh, Bob Adrian.', 1),
(4, 'Black Phone', 102, 2022, 'https://restaurantdelamente.com/portal/wp-content/uploads/2021/09/242752040_245560294167877_5177835023590251774_n-819x1024.jpg', 'En una ciudad de Colorado, en los años 70, un enmascarado secuestra a Finney Shaw, un chico tímido e inteligente de 13 años, y le encierra en un sótano insonorizado donde de nada sirven sus gritos. Cuando un teléfono roto y sin conexión empieza a sonar, Finney descubre que a través de él puede oír las voces de las anteriores víctimas, las cuales están decididas a impedir que Finney acabe igual que ellas.', 'https://www.youtube.com/watch?v=jbP6pWB9PbA&ab_channel=TrailersInSpanish', 'Alex Beaver', 'Andrew Farmer, Bay Allebach, Brady Hepner, Brady Ryan', 1),
(8, 'Inseparables', 104, 2016, 'https://noescinetodoloquereluce.com/wp-content/uploads/2017/07/2A1ab2ajIWcaoTlgEsPqDSytpC3.jpg', 'Un adinerado hombre de negocios con tetraplejia contrata a un jardinero impulsivo como su asistente terapéutico. Basada en hechos reales.', 'https://www.youtube.com/watch?v=k7E3MtBLf6U&ab_channel=ArgentinaSonoFilm', 'Marcos Carnevale', 'Oscar Martínez,Rodrigo de la Serna,Alejandra Flechner', 2),
(9, 'Nobody', 92, 2021, 'https://es.web.img3.acsta.net/pictures/20/12/10/18/02/5803944.jpg', 'Hutch Mansell, un padre de familia que aguanta con resignación y sin defenderse los golpes de la vida. Un don nadie. Una noche, cuando dos ladrones entran en su casa, Hutch decide no actuar y no trata de defenderse ni al él mismo ni a su familia, convencido de que solo así evitará una escalada de violencia. Tras el ataque, su hija adolescente Blake no oculta su decepción, y su esposa Becca se aleja todavía más.', 'https://www.youtube.com/watch?v=0wDj8jukSvA&ab_channel=CineMovsTrailers', 'Ilya Naishuller', 'Alain Moussi, Alan Wong, Aleksandr Pal, Aleksey Serebryakov', 3),
(10, 'The Batman', 176, 2022, 'https://www.quepeliculaver.com/uploads/2021/12/7YncShtIGNJP5euTPSZGxGsImaN.jpg', 'Cuando un asesino se dirige a la élite de Gotham con una serie de maquinaciones sádicas, un rastro de pistas crípticas envía Batman a una investigación en los bajos fondos. A medida que las pruebas comienzan a acercarse a su casa y se hace evidente la magnitud de los planes del autor, Batman debe forjar nuevas relaciones, desenmascarar al culpable y hacer justicia al abuso de poder y la corrupción que durante mucho tiempo han asolado Gotham City.', 'https://www.youtube.com/watch?v=FUP3P9_mqvA&ab_channel=SensaCineTRAILERS', 'Bradley Parker', 'Robert Pattinson, Adam Rojko Vega, Albert Giannitelli, Alex Ferns, Alfredo Tavares,', 3),
(11, 'Django unchained', 165, 2012, 'https://i.pinimg.com/originals/f6/22/a7/f622a7e876f7d768f07f2af092a23e40.jpg', 'En Texas, dos años antes de estallar la Guerra Civil Americana, King Schultz (Christoph Waltz), un cazarrecompensas alemán que sigue la pista a unos asesinos para cobrar por sus cabezas, le promete al esclavo negro Django (Jamie Foxx) dejarlo en libertad si le ayuda a atraparlos. Él acepta, pues luego quiere ir a buscar a su esposa Broomhilda (Kerry Washington), esclava en una plantación del terrateniente Calvin Candie (Leonardo DiCaprio).', 'https://www.youtube.com/watch?v=k7E3MtBLf6U&ab_channel=ArgentinaSonoFilm', 'Quentin Tarantino', 'Jamie Foxx, Christoph Waltz, Leonardo DiCaprio, Kerry Washington', 4),
(12, 'El curioso caso de Benjamin Button', 146, 2008, 'https://i.pinimg.com/originals/85/a5/37/85a537ee17775b31afa53ca9c736a190.jpg', 'David Fincher dirige este relato ganador del Óscar, en el que Benjamin Button, un hombre que nació viejo y arrugado, rejuvenece a medida que pasan los años.', 'https://www.youtube.com/watch?v=wWNP3DyWrOk&ab_channel=TadziuArriola', 'David Fincher', 'Brad Pitt,Cate Blanchett,Taraji P. Henson', 4),
(13, 'El Gran Gatsby', 143, 2013, 'https://cdn.shopify.com/s/files/1/0482/3452/8936/products/The-Great-Gatsby-Poster-Films-Vibez-1617655101.jpg?v=1617655165', 'Nueva York, años 20. En la alta sociedad norteamericana, llama la atención la presencia de Jay Gatsby, un hombre misterioso e inmensamente rico, al que todos consideran un advenedizo, lo que no impide que acudan a sus fastuosas fiestas en su gran mansión de Long Island. Gatsby vive obsesionado con la idea de recuperar al amor que dejó escapar años atrás. Para ello se hará amigo de su vecino recién llegado, el joven Nick Carraway', 'https://www.youtube.com/watch?v=lQHqvEPCjaA&ab_channel=WarnerBros.PicturesM%C3%A9xico', 'Baz Luhrmann', 'Leonardo DiCaprio, Tobey Maguire, Carey Mulligan, Joel Edgerton, Isla Fisher', 5),
(14, 'Luca', 101, 2021, 'https://modogeeks.com/wp-content/uploads/2021/04/luca-poster.jpg', 'Ambientada en un precioso pueblo costero de la Riviera italiana, narra la historia sobre el paso a la edad adulta de un chico que vive un verano inolvidable lleno de helados, pasta e infinitos paseos en scooter. Luca comparte estas aventuras con su nuevo mejor amigo, pero toda la diversión se ve amenazada por un secreto muy profundo: él es un monstruo marino de un mundo que yace bajo la superficie del agua.', 'https://www.youtube.com/watch?v=EJk_Z-OasXc&ab_channel=SensaCineTRAILERS', 'Enrico Casarosa', 'Emma Berman, Jack Dylan Grazer, Jacob Tremblay, Jim Gaffigan.', 6),
(16, 'La invitación', 105, 2022, 'https://es.web.img2.acsta.net/pictures/22/07/01/12/26/1883048.jpg', 'Una joven es cortejada y deslumbrada solo para descubrir que una conspiración gótica está en marcha.', '', 'Jessica M. Thompson', 'Alana Boden, Carol Ann Crawford, Christine Grace Szarko, Courtney Taylor,', 1),
(17, 'Nope', 130, 2022, 'https://cloudfront-us-east-1.images.arcpublishing.com/copesa/IICPTBEC4VA57IZISNDUBSELD4.jpg', 'Dos rancheros de un remoto pueblo del interior de California hacen un descubrimiento tan insólito como escalofriante.', '', 'Jordan Peele', '	 Daniel Kaluuya Keke Palmer Steven Yeun Michael Wincott', 1),
(18, 'El señor de los anillos', 105, 444, 'https://es.web.img2.acsta.net/pictures/22/07/01/12/26/1883048.jpg', 'ddddddddddddddd', '', 'ddddddddddddd', 'ddddddddddddd', 9),
(19, 'El señor de los anillos: La comunidad de', 180, 2001, 'https://i.pinimg.com/originals/f4/7e/a5/f47ea5c518f38b55f48ff13f1c0a6fb2.jpg', 'En la Tierra Media, el Señor Oscuro Saurón creó los Grandes Anillos de Poder, forjados por los herreros Elfos. Tres para los reyes Elfos, siete para los Señores Enanos, y nueve para los Hombres Mortales. Secretamente, Saurón también forjó un anillo maestro, el Anillo Único, que contiene en sí el poder para esclavizar a toda la Tierra Media. Con la ayuda de un grupo de amigos y de valientes aliados, Frodo emprende un peligroso viaje con la misión de destruir el Anillo Único. Pero el Señor Oscuro ', '', 'Peter Jackson', 'Alan Howard, Andy Serkis, Billy Boyd, Brent McIntyre.', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `pass`, `admin`) VALUES
(1, 'tamara@tudai.com', '$2y$10$ax37x2ceuAYr3PbImu.IwO1kMzwLV9YyVcOYNxsuwTSxXMk.HzJtO', 1),
(3, 'omelaniuk@tudai.com', '$2y$10$ADgW0aUmjMVy0mo2aIF.WuLxFRNwceOrz/NvqGw7L3U1Z2O1KnsfC', 0),
(4, 'tami@omelaniuk.com', '$2y$10$ax37x2ceuAYr3PbImu.IwO1kMzwLV9YyVcOYNxsuwTSxXMk.HzJtO', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id`) REFERENCES `generos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
