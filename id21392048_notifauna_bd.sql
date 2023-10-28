-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-10-2023 a las 12:39:13
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id21392048_notifauna_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `copete` text NOT NULL,
  `cuerpo` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `id_usuario`, `titulo`, `copete`, `cuerpo`, `imagen`, `fecha`, `categoria`, `autor`) VALUES
(1, 4, 'Rescataron a un aguará guazú del techo de una casa en Santa Fe', 'Ocurrió este jueves en la ciudad de Recreo. El dueño de la vivienda alertó a las seguridades de la presencia del animal.', '<p>Efectivos de la Sección Seguridad Vial “Recreo” de Gendarmería Nacional, dependientes del Escuadrón Núcleo Santa Fe Norte Dos, rescataron un ejemplar de aguará guazú. El animal se encontraba en el techo de una vivienda de la mencionada ciudad santafesina. El hecho ocurrió este jueves.</p><p><span style=\"background-color: var(--bs-body-bg); color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Durante la mañana, el dueño de la casa alertó a los gendarmes de la presencia de una criatura en el tejado de su domicilio. Ante esto, los efectivos llegaron al lugar y constataron que se trataba de un agurá guazú, también conocido como lobo de crin.</span></p><div><br></div>', '1696341447-guazu.webp', '2023-10-03', 'Fauna', 'Cristian'),
(4, 4, 'Centros de rescate de pumas tienen cada vez más demanda en Córdoba', 'Algunos de estos espacios albergan a más de 20 ejemplares. Este año ya se rescataron siete animales en la provincia.  La mayor dificultad está relacionada con el desmonte y la domesticación.', '<p>Con más de 10 pumas rescatados por año, el tráfico y tenencia ilegal de estos felinos es una de las problemáticas que más preocupa a centros de albergue de fauna en Córdoba. Algunos de estos espacios albergan hoy a más de 20 pumas, a quienes deben alimentar y asistir diariamente.</p><p>En lo que va del año, la Policía Ambiental de Córdoba ya rescató siete pumas –cinco cachorros y dos adultos–, los cuales fueron alojados en los centros de rescate de fauna “Proyecto Carayá”, en la localidad de La Cumbre, y “Reserva Tatú Carreta”, en Casa Grande.</p><div><br></div>', '1696370120-puma.jpg', '2023-10-03', 'Fauna', 'Emma'),
(5, 4, 'Aparecieron zorros en un barrio privado de Canning: recomendaciones...', 'Desde diciembre reclaman para que los saquen del lugar...', '<p>En Canning, vecinos del Country Los Rosales denuncian la presencia de una familia de zorros salvajes en el barrio. </p><p>Desde diciembre reclaman que estos animales silvestres “aparecen” en las propiedades y, al igual que en su momento los carpinchos en Nordelta, la situación generó controversia.</p><p>“Buenas noches. Tengo a un zorro en mi casa, hace una semana aparece acá. ¿Alguien sabe con quién debo comunicarme?”, publicó desesperada una vecina en un grupo de Facebook. Las respuestas ingeniosas no faltaron pero, entre tanta broma, hubo una usuaria que intentó explicarle por qué circulaba el animal por ahí: “Este es su hábitat natural y, con la cantidad de casas y personas que invadieron ‘el hogar de ellos’, se sienten amenazados. </p><p>La culpa no la tienen los animales”, contestó.</p>', '1696368910-zorro.avif', '2023-10-03', 'Fauna', 'Carlos'),
(6, 4, 'Cuáles son los animales más peligrosos que hay en la Argentina', 'Si estás pensando explorar el país, lo mejor es leer atentamente esta lista para estar preparado y evitar cualquier grave accidente.', '<p>Argentina es un país que lo tiene todo: una cultura que despierta curiosidad, paisajes naturales que enamoran desde el primer momento y gran variedad de especies animales.</p><p>Aunque la emoción por conocer cada rincón del país pueda llevar a cometer errores capaz de costar una vida. Y es que muchas zonas argentinas que no están supervisadas o son difíciles de cuidar de los turistas curiosos, y poseen animales peligrosos que de amigables tienen poco.</p><p>-</p>', '1696370163-serpiente.jpg', '2023-10-03', 'Fauna', 'Fani'),
(7, 4, 'Bio Animalis realizó una cirugía de alta complejidad en una yegua', 'Aurora fue intervenida por un equipo de profesionales y afronta ahora un período de rehabilitación.', '<p><span style=\"color: rgb(33, 33, 33); font-family: \"PT Serif\", Georgia; font-size: 19px;\">En estos días, la </span><strong style=\"color: rgb(33, 33, 33); font-family: \"PT Serif\", Georgia; font-size: 19px;\">Fundación Bio Animalis </strong><span style=\"color: rgb(33, 33, 33); font-family: \"PT Serif\", Georgia; font-size: 19px;\">encaró una cirugía de alta complejidad para darle una mejor calidad de vida a una yegua, Aurora, que padece retracción de tendones por lo que se le dificulta caminar con normalidad. Lo hizo junto a un equipo de médicos veterinarios conformado por </span><span style=\"color: rgb(33, 33, 33); font-family: \"PT Serif\", Georgia; font-size: 19px;\"><strong>Nicolas Dilascio</strong> y <strong>Leandro Dutruel</strong>, y el anestesista <strong>Juan Carlos Genolet</strong>, que se llegó desde la ciudad de Córdoba solo con ese fin.</span><br></p>', '1696601692-caballo.webp', '2023-10-06', 'Fauna', 'Fani'),
(8, 4, ' Tras dos años de cuidados, un oso melero rescatado en Córdoba', 'En Córdoba fue rescatado y liberado tras un arduo trabajo de recuperación, un oso melero, también conocido como “mielero” u “hormiguero chico. La Provincia y la Reserva Natural Tatú Carreta asistieron al animal hasta reinsertarlo a su hábitat.', '<p style=\"color: rgb(33, 33, 33); font-family: \"PT Serif\", Georgia; font-size: 19px;\">En Argentina se eligió el 29 de abril para celebrar el Día del Animal en conmemoración del fallecimiento de Ignacio Lucas Albarracín, un abogado que no solo fue presidente de la Sociedad Protectora de Animales, sino también uno de los pioneros en el país en la lucha por los derechos de las distintas especies, e impulsor de la Ley Nacional de Protección de Animales, promulgada el 25 de julio de 1891, conocida como la “Ley Sarmiento”.</p><p style=\"color: rgb(33, 33, 33); font-family: \"PT Serif\", Georgia; font-size: 19px;\">El Gobierno de Córdoba, a través de la Secretaría de Ambiente trabaja para concientizar sobre la fauna silvestre negando su rol doméstico y sosteniendo que cada animal cumple su rol ecológico, intransferible e importante en la naturaleza.</p>', '1696601905-hormiguero.jpg', '2023-10-06', 'Fauna', 'Carlos'),
(12, 6, 'El milagro de Tally, la tortuga marina que sobrevivió al invierno', 'El reptil fue encontrado en un estado grave, pasó varios meses en tratamientos intensivos y está cerca de llegar a EEUU', '<p><span style=\"font-weight: 700; color: rgb(31, 31, 31); font-family: Roboto, sans-serif; font-size: 22px;\">Tally </span><span style=\"color: rgb(31, 31, 31); font-family: Roboto, sans-serif; font-size: 22px;\">es una </span><span style=\"font-weight: 700; color: rgb(31, 31, 31); font-family: Roboto, sans-serif; font-size: 22px;\">tortuga marina</span><span style=\"color: rgb(31, 31, 31); font-family: Roboto, sans-serif; font-size: 22px;\"> del Golfo de México que terminó siendo arrastrada por una corriente hasta una playa invernal de Gales, esta situación puso en peligro su vida, pues fue encontrada en un hábitat completamente distinto al suyo, llenó de peligros y con temperaturas bajas.</span><br></p>', '1696888337-tortugas.jpg', '2023-10-09', 'Fauna', 'Emma'),
(13, 54, 'Alta costura para perros y gatos: Semana de la Moda de Nueva York', 'Una mañana dedicada a los diseños para felinos y caninos y a beneficio.', '<p class=\"paragraph\" style=\"font-family: Roboto; font-size: 1.125rem; line-height: 1.875rem; color: rgb(66, 66, 66); margin-right: 0px; margin-bottom: 2rem; margin-left: 0px; overflow-wrap: break-word; padding: 0px; background-color: rgb(250, 250, 250);\">El&nbsp;<span style=\"font-weight: bolder;\">modisto de perros Anthony</span>&nbsp;Rubio quería recuperar el brillo y el glamour después de la pausa de la pandemia con su colección Otoño/Invierno 2023, que se mostró en Nueva York el lunes.</p><div class=\"teads-passback\" style=\"color: rgb(0, 0, 0); font-family: Roboto, Helvetica, &quot;sans-serif&quot;; font-size: medium; background-color: rgb(250, 250, 250);\"></div><div class=\"infeed-container\" id=\"ad-slot-infeed\" style=\"max-height: 25rem; color: rgb(0, 0, 0); font-family: Roboto, Helvetica, &quot;sans-serif&quot;; font-size: medium; background-color: rgb(250, 250, 250);\"></div><p class=\"paragraph\" style=\"font-family: Roboto; font-size: 1.125rem; line-height: 1.875rem; color: rgb(66, 66, 66); margin-right: 0px; margin-bottom: 2rem; margin-left: 0px; overflow-wrap: break-word; padding: 0px; background-color: rgb(250, 250, 250);\">Rubio se inspiró en el viejo Hollywood y optó por los metalizados, las lentejuelas y el trabajo de cuentas cosidas en telas elásticas.</p>', '1697141011-perro.jpg', '2023-10-12', 'Moda', 'Liliana'),
(14, 55, 'Gastó más de 30 mil dólares para tratar el asma de su gato y no se arrepiente', 'Rascal comenzó con una tos leve pero luego pasó a tener hasta seis ataques por día.', '<h2 class=\"article__dropline\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-size: 1.5rem; font-family: Roboto; line-height: 2rem; color: rgb(66, 66, 66); width: 595.333px; background-color: rgb(250, 250, 250);\">Rascal comenzó con una tos leve pero luego pasó a tener hasta seis ataques por día. La dueña de la mascota ahora da consejos en las redes sociales para el cuidado de animales.</h2>', '1697141192-gato.avif', '2023-10-12', 'Sociales', 'Noelia'),
(15, 56, 'Un mono le robó una caja de leche a una turista en China ', 'Las autoridades locales advirtieron del peligro de acercarse a los animales del lugar.', '<p><span style=\"color: rgb(66, 66, 66); font-family: Roboto; font-size: 18px; background-color: rgb(250, 250, 250);\">Un</span><span style=\"font-weight: bolder; color: rgb(66, 66, 66); font-family: Roboto; font-size: 18px; background-color: rgb(250, 250, 250);\">&nbsp;mono hambriento</span><span style=\"color: rgb(66, 66, 66); font-family: Roboto; font-size: 18px; background-color: rgb(250, 250, 250);\">&nbsp;se robó el corazón de los usuarios en las redes sociales. El descarado animal se trepó por la pierna de una mujer hasta llegar a su bolsillo. La mujer estaba totalmente desprevenida cuando en una violenta maniobra</span><span style=\"font-weight: bolder; color: rgb(66, 66, 66); font-family: Roboto; font-size: 18px; background-color: rgb(250, 250, 250);\">&nbsp;rompió la caja de leche&nbsp;</span><span style=\"color: rgb(66, 66, 66); font-family: Roboto; font-size: 18px; background-color: rgb(250, 250, 250);\">que llevaba escondida. Sin importarle nada se empinó el envase mientras bebía enloquecido. Las imágenes fueron grabadas en el Parque Forestal Nacional de Zhangjiajie de China.</span><br></p>', '1697141488-mono.jpg', '2023-10-12', 'Sociales', 'Lucas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `password`, `fecha`) VALUES
(38, 'Fani', 'Casco', 'fanymar', '1MfP59PC4A==', '2023-10-05'),
(43, 'Emma', 'Castaño', 'emmita', '0tLa1tnO', '2023-10-08'),
(53, 'Cristian ', 'Castaño', 'pachu', '09HEy+U=', '2023-10-12'),
(54, 'Liliana', 'Villa', 'lili', '2NXV1Q==', '2023-10-12'),
(55, 'Noelia', 'Morales', 'noelia', '093U', '2023-10-12'),
(56, 'Lucas', 'Garcia', 'lucas', 'z+HYxN8=', '2023-10-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
