-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-12-2020 a las 20:48:49
-- Versión del servidor: 8.0.22-0ubuntu0.20.04.2
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Proiectus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumne`
--

CREATE TABLE `Alumne` (
  `idAlumne` int NOT NULL,
  `idUsuari` int NOT NULL,
  `CodiAlumne` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Alumne`
--

INSERT INTO `Alumne` (`idAlumne`, `idUsuari`, `CodiAlumne`) VALUES
(1, 1, 903478179),
(2, 5, 269046178),
(3, 20, 791248102),
(4, 21, 123871842),
(5, 22, 327197225),
(6, 23, 231871302),
(7, 24, 387180213),
(8, 25, 312731292);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Article`
--

CREATE TABLE `Article` (
  `idArticle` int NOT NULL,
  `idWiki` int NOT NULL,
  `idUsuari` int NOT NULL,
  `Nom` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Cos` varchar(750) NOT NULL,
  `DataUltimaModificacio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Article`
--

INSERT INTO `Article` (`idArticle`, `idWiki`, `idUsuari`, `Nom`, `Cos`, `DataUltimaModificacio`) VALUES
(1, 1, 6, 'Delinternet Col·labora INS Montsia', 'Institut Montsia col·labora amb Delinternet', '2020-12-17 16:05:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Blog`
--

CREATE TABLE `Blog` (
  `idBlog` int NOT NULL,
  `idProjecte` int NOT NULL,
  `Nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Blog`
--

INSERT INTO `Blog` (`idBlog`, `idProjecte`, `Nom`) VALUES
(1, 1, 'Blog Delinternet');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categoria`
--

CREATE TABLE `Categoria` (
  `idCategoria` int NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Descripcio` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Categoria`
--

INSERT INTO `Categoria` (`idCategoria`, `Nom`, `Descripcio`) VALUES
(1, 'Informatica', 'Sector Informatic'),
(2, 'Disseny', 'Sector Disseny'),
(3, 'Hosteleria', 'Sector Hosteleria'),
(4, 'Marketing', 'Sector Marketing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Comentari`
--

CREATE TABLE `Comentari` (
  `idComentari` int NOT NULL,
  `idUsuari` int NOT NULL,
  `Contingut` varchar(300) NOT NULL,
  `idArticle` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Comentari`
--

INSERT INTO `Comentari` (`idComentari`, `idUsuari`, `Contingut`, `idArticle`) VALUES
(1, 5, 'Molt divertit!', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ComentariPost`
--

CREATE TABLE `ComentariPost` (
  `idComentariPost` int NOT NULL,
  `idPost` int NOT NULL,
  `idUsuari` int NOT NULL,
  `Contingut` varchar(300) NOT NULL,
  `Data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ComentariPost`
--

INSERT INTO `ComentariPost` (`idComentariPost`, `idPost`, `idUsuari`, `Contingut`, `Data`) VALUES
(1, 1, 5, 'Aixo va que vola!', '2020-12-17 16:11:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Departament`
--

CREATE TABLE `Departament` (
  `idDepartament` int NOT NULL,
  `idEmpresa` int NOT NULL,
  `idGerent` int NOT NULL,
  `Nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Departament`
--

INSERT INTO `Departament` (`idDepartament`, `idEmpresa`, `idGerent`, `Nom`) VALUES
(1, 1, 1, 'Informatic'),
(2, 1, 2, 'Marketing'),
(3, 2, 3, 'Informatic'),
(4, 2, 4, 'Marketing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DepartamentEmpleat`
--

CREATE TABLE `DepartamentEmpleat` (
  `idContracte` int NOT NULL,
  `idDepartment` int NOT NULL,
  `idEmpleat` int NOT NULL,
  `dataContractat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataFinalitzacio` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `DepartamentEmpleat`
--

INSERT INTO `DepartamentEmpleat` (`idContracte`, `idDepartment`, `idEmpleat`, `dataContractat`, `dataFinalitzacio`) VALUES
(1, 1, 4, '2020-12-17 16:21:57', NULL),
(2, 2, 3, '2020-12-17 16:22:53', NULL),
(3, 3, 1, '2020-12-17 16:23:11', NULL),
(4, 4, 2, '2020-12-17 16:23:19', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empleat`
--

CREATE TABLE `Empleat` (
  `idEmpleat` int NOT NULL,
  `idUsuari` int NOT NULL,
  `NSS` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Empleat`
--

INSERT INTO `Empleat` (`idEmpleat`, `idUsuari`, `NSS`) VALUES
(1, 4, 806436792),
(2, 8, 905815630),
(3, 19, 192038132),
(4, 18, 841792146);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresa`
--

CREATE TABLE `Empresa` (
  `idEmpresa` int NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Localitat` varchar(30) NOT NULL,
  `Adreça` varchar(30) NOT NULL,
  `Telefon` varchar(9) NOT NULL,
  `CIF` varchar(9) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Empresa`
--

INSERT INTO `Empresa` (`idEmpresa`, `Nom`, `Localitat`, `Adreça`, `Telefon`, `CIF`, `Email`) VALUES
(1, 'Delinternet', 'Deltebre', 'Carrer Comerç 1', '877990500', '982192488', 'delinternet@delinternet.com'),
(2, 'Eports', 'Tortosa', 'Plaça Alfons XII 7', '977588667', '829142684', 'eports@eports.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Fitxer`
--

CREATE TABLE `Fitxer` (
  `idFitxer` int NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Extensio` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tamany` varchar(30) NOT NULL,
  `dataPublicacio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUsuari` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Fitxer`
--

INSERT INTO `Fitxer` (`idFitxer`, `Nom`, `Extensio`, `Tamany`, `dataPublicacio`, `idUsuari`) VALUES
(1, 'Ubuntu 20.04 ISO', '.iso', '2Gb', '2020-12-17 16:26:35', 12),
(2, 'Xuletes Examen', '.txt', '10Mb', '2020-12-17 16:27:37', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Gerent`
--

CREATE TABLE `Gerent` (
  `idGerent` int NOT NULL,
  `idUsuari` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Gerent`
--

INSERT INTO `Gerent` (`idGerent`, `idUsuari`) VALUES
(1, 3),
(2, 7),
(3, 10),
(4, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `GrupClasse`
--

CREATE TABLE `GrupClasse` (
  `idGrup` int NOT NULL,
  `idInstitut` int NOT NULL,
  `idTutor (professor)` int NOT NULL,
  `Nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `GrupClasse`
--

INSERT INTO `GrupClasse` (`idGrup`, `idInstitut`, `idTutor (professor)`, `Nom`) VALUES
(1, 1, 1, 'DAW2'),
(2, 1, 2, 'ASIX1'),
(3, 2, 3, '1BATA'),
(4, 2, 6, '2BATB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Incidencia`
--

CREATE TABLE `Incidencia` (
  `idIncidencia` int NOT NULL,
  `idUsuari` int NOT NULL,
  `Estat` enum('Enviat','En Proces','Resolt') DEFAULT NULL,
  `Nom` varchar(30) NOT NULL,
  `Descripcio` varchar(300) NOT NULL,
  `registreData` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Incidencia`
--

INSERT INTO `Incidencia` (`idIncidencia`, `idUsuari`, `Estat`, `Nom`, `Descripcio`, `registreData`) VALUES
(1, 12, 'Enviat', 'Switch no operatiu', 'Ha explotat un switch del passillo principal', '2020-12-17 16:28:53'),
(2, 16, 'Enviat', 'Porta trencada', 'La porta de l\'aula 24 esta reventada', '2020-12-17 16:29:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Institut`
--

CREATE TABLE `Institut` (
  `idInstitut` int NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Localitat` varchar(30) NOT NULL,
  `Adreça` varchar(30) NOT NULL,
  `Telefon` varchar(9) NOT NULL,
  `CIF` varchar(9) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Institut`
--

INSERT INTO `Institut` (`idInstitut`, `Nom`, `Localitat`, `Adreça`, `Telefon`, `CIF`, `Email`) VALUES
(1, 'Institut Montsia', 'Amposta', 'Carrer Madrid 35', '977700043', '987123621', 'institutmontsia@iesmontsia.org'),
(2, 'Institut Berenguer IV', 'Amposta', 'Carrer Mestre Suñer 1', '977701556', '098276327', 'infoberenguer@insberenguer.org');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LiniaPressupost`
--

CREATE TABLE `LiniaPressupost` (
  `idLiniaPressupost` int NOT NULL,
  `idPressupost` int NOT NULL,
  `nomCost` varchar(30) NOT NULL,
  `preuCost` varchar(9) NOT NULL,
  `quantitatCost` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `LiniaPressupost`
--

INSERT INTO `LiniaPressupost` (`idLiniaPressupost`, `idPressupost`, `nomCost`, `preuCost`, `quantitatCost`) VALUES
(1, 1, 'Router', '50€', '3'),
(2, 1, 'Switch', '150€', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Matricula`
--

CREATE TABLE `Matricula` (
  `idMatricula` int NOT NULL,
  `idGrup` int NOT NULL,
  `idAlumne` int NOT NULL,
  `dataMatriculat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataDesmatriculat` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Matricula`
--

INSERT INTO `Matricula` (`idMatricula`, `idGrup`, `idAlumne`, `dataMatriculat`, `dataDesmatriculat`) VALUES
(2, 1, 1, '2020-12-17 16:55:49', NULL),
(3, 1, 2, '2020-12-17 16:56:04', NULL),
(4, 2, 3, '2020-12-17 16:56:20', NULL),
(5, 2, 4, '2020-12-17 16:56:41', NULL),
(6, 3, 5, '2020-12-17 16:57:02', NULL),
(7, 3, 6, '2020-12-17 16:57:21', NULL),
(8, 4, 7, '2020-12-17 16:57:29', NULL),
(9, 4, 8, '2020-12-17 16:57:36', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Missatge`
--

CREATE TABLE `Missatge` (
  `idMissatge` int NOT NULL,
  `idUsuari` int NOT NULL,
  `idXat` int NOT NULL,
  `Data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Estat` enum('Enviat','Rebut','Llegit') DEFAULT NULL,
  `Contingut` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Missatge`
--

INSERT INTO `Missatge` (`idMissatge`, `idUsuari`, `idXat`, `Data`, `Estat`, `Contingut`) VALUES
(1, 20, 1, '2020-12-17 17:08:20', 'Enviat', 'Mitja hora para contestar :('),
(2, 3, 1, '2020-12-17 17:10:16', 'Enviat', 'Ho sento, estava ocupat realitzant una tasca prioritaria xd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MissatgeEnviat`
--

CREATE TABLE `MissatgeEnviat` (
  `idMissatgeEnviat` int NOT NULL,
  `Remitent` varchar(50) NOT NULL,
  `dataHora` datetime DEFAULT CURRENT_TIMESTAMP,
  `Assumpte` varchar(30) NOT NULL,
  `Cos` varchar(750) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `MissatgeEnviat`
--

INSERT INTO `MissatgeEnviat` (`idMissatgeEnviat`, `Remitent`, `dataHora`, `Assumpte`, `Cos`) VALUES
(1, 'joelferragut@iesmontsia.org', '2020-12-17 17:11:39', 'Treballa Gos', 'Fes faena gos, dropo\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MissatgeRebut`
--

CREATE TABLE `MissatgeRebut` (
  `idMissatgeRebut` int NOT NULL,
  `Destinatari` varchar(50) NOT NULL,
  `idMissatgeEnviat` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `MissatgeRebut`
--

INSERT INTO `MissatgeRebut` (`idMissatgeRebut`, `Destinatari`, `idMissatgeEnviat`) VALUES
(1, 'joaquimbernaltes@iesmontsia.org', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Modul`
--

CREATE TABLE `Modul` (
  `id` int NOT NULL,
  `nom` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Modul`
--

INSERT INTO `Modul` (`id`, `nom`) VALUES
(1, 'Gestionar Empresa'),
(2, 'Gestionar institut'),
(3, 'Categories'),
(4, 'Centre de recursos'),
(5, 'Gestio administrador'),
(6, 'Projectes'),
(7, 'Incidencies'),
(8, 'Usuaris'),
(9, 'Gestor Central'),
(10, 'Gestors de institut'),
(11, 'Gestors de empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Permis`
--

CREATE TABLE `Permis` (
  `idPermis` int NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `idModul` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Permis`
--

INSERT INTO `Permis` (`idPermis`, `Nom`, `idModul`) VALUES
(1, 'Crear Empresa', 1),
(2, 'Editar Empresa', 1),
(3, 'Eliminar Empresa', 1),
(4, 'Crear Institut', 2),
(5, 'Editar Institut', 2),
(6, 'Eliminar Institut', 2),
(7, 'Crear Categoria', 3),
(8, 'Editar Categoria', 3),
(9, 'Eliminar Categoria', 3),
(10, 'Pujar Recursos', 4),
(11, 'Baixar Recursos', 4),
(12, 'Accès Panell Adm.', 5),
(13, 'Crear Projecte', 6),
(14, 'Editar Projecte', 6),
(15, 'Eliminar Projecte', 6),
(16, 'Crear incidencia', 7),
(17, 'Editar incidencia', 7),
(18, 'Eliminar incidencia', 7),
(19, 'Crear Usuari', 8),
(20, 'Editar Usuari', 8),
(21, 'Eliminar Usuari', 8),
(22, 'Acces Gestor Central', 9),
(23, 'Acces Gestors Institut', 10),
(24, 'Acces Gestors Empresa', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PermisRol`
--

CREATE TABLE `PermisRol` (
  `idPermisRol` int NOT NULL,
  `idPermis` int NOT NULL,
  `idRol` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PermisRol`
--

INSERT INTO `PermisRol` (`idPermisRol`, `idPermis`, `idRol`) VALUES
(19, 1, 5),
(20, 2, 5),
(21, 3, 5),
(22, 4, 5),
(23, 5, 5),
(24, 6, 5),
(25, 7, 5),
(26, 8, 5),
(27, 9, 5),
(28, 10, 5),
(29, 11, 5),
(30, 12, 5),
(31, 14, 5),
(32, 15, 5),
(33, 17, 5),
(34, 19, 5),
(35, 20, 5),
(36, 21, 5),
(37, 4, 2),
(38, 5, 2),
(39, 6, 2),
(40, 7, 2),
(41, 8, 2),
(42, 9, 2),
(43, 10, 2),
(44, 11, 2),
(45, 13, 2),
(46, 14, 2),
(47, 15, 2),
(48, 16, 2),
(49, 17, 2),
(50, 5, 3),
(51, 2, 3),
(52, 3, 3),
(53, 7, 3),
(54, 8, 3),
(55, 9, 3),
(56, 10, 3),
(57, 11, 3),
(58, 13, 3),
(59, 14, 3),
(60, 15, 3),
(61, 16, 3),
(62, 17, 3),
(63, 22, 5),
(64, 23, 5),
(65, 24, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Post`
--

CREATE TABLE `Post` (
  `idPost` int NOT NULL,
  `idBlog` int NOT NULL,
  `idUsuari` int NOT NULL,
  `Titol` varchar(30) NOT NULL,
  `Data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Post`
--

INSERT INTO `Post` (`idPost`, `idBlog`, `idUsuari`, `Titol`, `Data`) VALUES
(1, 1, 6, 'Routers Delinternet', '2020-12-17 16:10:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pressupost`
--

CREATE TABLE `Pressupost` (
  `idPressupost` int NOT NULL,
  `idProjecte` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Pressupost`
--

INSERT INTO `Pressupost` (`idPressupost`, `idProjecte`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Professor`
--

CREATE TABLE `Professor` (
  `idProfessor` int NOT NULL,
  `idUsuari` int NOT NULL,
  `codiProfessor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Professor`
--

INSERT INTO `Professor` (`idProfessor`, `idUsuari`, `codiProfessor`) VALUES
(1, 2, 946130568),
(2, 6, 692417653),
(3, 13, 471801234),
(4, 12, 981223782),
(5, 14, 721367919),
(6, 15, 128972957),
(7, 16, 317389312),
(8, 17, 918329264);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ProfessorGrup`
--

CREATE TABLE `ProfessorGrup` (
  `idProfessorGrup` int NOT NULL,
  `idGrup` int NOT NULL,
  `idProfessor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ProfessorGrup`
--

INSERT INTO `ProfessorGrup` (`idProfessorGrup`, `idGrup`, `idProfessor`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 2),
(4, 2, 7),
(5, 3, 3),
(6, 3, 5),
(7, 4, 6),
(8, 4, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Projecte`
--

CREATE TABLE `Projecte` (
  `idProjecte` int NOT NULL,
  `idProposta` int NOT NULL,
  `DataInici` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DataFinal` datetime DEFAULT NULL,
  `NomProjecte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Projecte`
--

INSERT INTO `Projecte` (`idProjecte`, `idProposta`, `DataInici`, `DataFinal`, `NomProjecte`) VALUES
(1, 1, '2020-12-17 15:55:21', NULL, 'Hosting Delinternet');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proposta`
--

CREATE TABLE `Proposta` (
  `idProposta` int NOT NULL,
  `idDepartament` int DEFAULT NULL,
  `idGrup` int DEFAULT NULL,
  `idCategoria` int NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Descripcio` varchar(300) NOT NULL,
  `Estat` enum('Realitzat','Acceptat','No acceptat') DEFAULT NULL,
  `DataPublicacio` datetime DEFAULT CURRENT_TIMESTAMP,
  `DataAcceptacio` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Proposta`
--

INSERT INTO `Proposta` (`idProposta`, `idDepartament`, `idGrup`, `idCategoria`, `Nom`, `Descripcio`, `Estat`, `DataPublicacio`, `DataAcceptacio`) VALUES
(1, 1, 2, 1, 'Hosting', 'Ens oferim a fer Hosting amb un institut de la zona.', 'Acceptat', '2020-12-17 15:27:45', NULL),
(5, 2, NULL, 4, 'Cartell Publicitari', 'Necessitem realitzar un cartell publicitari', 'Realitzat', '2020-12-17 15:52:45', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rol`
--

CREATE TABLE `Rol` (
  `idRol` int NOT NULL,
  `Nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Rol`
--

INSERT INTO `Rol` (`idRol`, `Nom`) VALUES
(1, 'Alumne'),
(2, 'Gestor Institut'),
(3, 'Gestor Empresa'),
(4, 'Empleat'),
(5, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuari`
--

CREATE TABLE `Usuari` (
  `idUsuari` int NOT NULL,
  `idRol` int NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Cognom` varchar(30) NOT NULL,
  `SegonCognom` varchar(30) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Tipus` enum('Alumne','Professor','Gerent','Empleat') DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefon` varchar(9) NOT NULL,
  `DataNaixement` date DEFAULT NULL,
  `Estat` enum('actiu','inactiu') NOT NULL DEFAULT 'actiu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuari`
--

INSERT INTO `Usuari` (`idUsuari`, `idRol`, `Nom`, `Cognom`, `SegonCognom`, `DNI`, `UserName`, `Password`, `Tipus`, `Email`, `Telefon`, `DataNaixement`, `Estat`) VALUES
(1, 1, 'Joel', 'Ferragut', 'Garcia', '67851613B', 'joelferragut', 'joelferragut', 'Alumne', 'joelferragut@iesmontsia.org', '693859056', '1999-03-14', 'actiu'),
(2, 2, 'Joan', 'Iglesias', 'Marca', '45890712C', 'joaniglesias', 'joaniglesias', 'Professor', 'joaniglesias@iesmontsia.org', '694703154', '1989-06-20', 'actiu'),
(3, 3, 'Pepe', 'Jimenez', 'Garcia', '89061256A', 'pepejimenez', 'pepejimenez', 'Gerent', 'pepejimenez@delinternet.com', '356789130', '1979-03-14', 'actiu'),
(4, 4, 'Marc', 'Bernaltes', 'Reverte', '50862481F', 'marcbernaltes', 'marcbernaltes', 'Empleat', 'marcbernaltes@eports.com', '693568105', '1987-10-01', 'actiu'),
(5, 1, 'Joaquim', 'Bernaltes', 'Jimenez', '79045812U', 'joaquimbernaltes', 'joaquimbernaltes', 'Alumne', 'joaquimbernaltes@iesmontsia.org', '693581690', '2000-09-09', 'actiu'),
(6, 2, 'Alejandro ', 'Milian', 'Sanguesa', '01368361P', 'alejandromilian', 'alejandromilian', 'Professor', 'alejandromilian@iesmontsia.org', '695158201', '1983-02-02', 'actiu'),
(7, 3, 'Manolo', 'Perez', 'Gomez', '16492361M', 'manoloperez', 'manoloperez', 'Gerent', 'manoloperez@delinternet.com', '693018310', '1970-10-01', 'actiu'),
(8, 4, 'Josep', 'Gonzalez', 'Arbo', '17502649B', 'josepgonzalez', 'josepgonzalez', 'Empleat', 'josepgonzalez@eports.com', '693019038', '2003-12-24', 'actiu'),
(9, 1, 'Anwar', 'El Khattabi', 'Gatai', '47483900D', 'Anwar95', 'anwaret95', 'Alumne', 'anwar@hotmail.com', '684071540', '1995-09-12', 'actiu'),
(10, 3, 'Manolo', 'Lama', 'Jimenez', '12341826P', 'manololama', 'manololama', 'Gerent', 'manololama@eports.com', '912362840', '1962-01-03', 'actiu'),
(11, 3, 'Faisal', 'Ahmed', 'Tahira', '92314725H', 'faisalahmed', 'faisalahmed', 'Gerent', 'faisalahmed@eports.com', '928127901', '1998-08-22', 'actiu'),
(12, 2, 'Jaume', 'Miralles', 'Viñals', '98712362H', 'jaumemiralles', 'jaumemiralles', 'Professor', 'jaumemiralles@iesmontsia.org', '098123728', '1980-12-24', 'actiu'),
(13, 2, 'Alicia', 'Vericat', 'Pla', '09812379J', 'aliciavericat', 'aliciavericat', 'Professor', 'aliciavericat@iesberenguer.org', '678912395', '1970-02-23', 'actiu'),
(14, 2, 'Toni', 'Morant', 'Fornes', '89712362H', 'tonimorant', 'tonimorant', 'Professor', 'tonimorant@iesberenguer.org', '098123628', '1989-12-25', 'actiu'),
(15, 2, 'Miguel', 'Bose', 'Luchino', '09231762R', 'miguelbose', 'miguelbose', 'Professor', 'miguelbose@iesberenguer.org', '987124825', '1960-03-02', 'actiu'),
(16, 2, 'Joan', 'Alfred', 'Noll', '09812371N', 'joannoll', 'joannoll', 'Professor', 'joannoll@iesmontsia.org', '892416361', '1966-05-20', 'actiu'),
(17, 2, 'Lucrecia', 'Bernaltes', 'Tenesa', '67212962H', 'lucreciabernaltes', 'lucreciabernaltes', 'Professor', 'lucreciabernaltes@iesberenguer.org', '098127265', '1966-06-02', 'actiu'),
(18, 4, 'Hideo', 'Kojima', 'Stranding', '91823237H', 'hideokojima', 'hideokojima', 'Empleat', 'hideokojima@delinternet.com', '098731264', '1962-08-24', 'actiu'),
(19, 4, 'Morad', 'Sobra', 'Calle', '12345687P', 'moradsobra', 'moradsobra', 'Empleat', 'moradsobra@delinternet.com', '098123635', '1999-01-01', 'actiu'),
(20, 1, 'Alberto', 'Dos', 'Santos', '81247911Y', 'albertodos', 'albertodos', 'Alumne', 'albertodos@iesmontsia.org', '179311379', '2001-10-12', 'actiu'),
(21, 1, 'Isaac', 'Brull', 'Llao', '12837189D', 'isaacbrull', 'isaacbrull', 'Alumne', 'isaacbrull@iesmontsia.org', '189327112', '1999-03-16', 'actiu'),
(22, 1, 'Pepe', 'Lopez', 'Martinez', '18923722J', 'pepelopez', 'pepelopez', 'Alumne', 'pepelopez@iesberenguer.org', '182731212', '2000-02-28', 'actiu'),
(23, 1, 'Ronaldo', 'Matamoros', 'Gustavo', '12836911K', 'ronaldomatamoros', 'ronaldomatamoros', 'Alumne', 'ronaldomatamoros@iesberenguer.org', '812734911', '1995-06-02', 'actiu'),
(24, 1, 'Antonio', 'Mingorance', 'Bachata', '12874127H', 'antoniomingorance', 'antoniomingorance', 'Alumne', 'antoniomingorance@iesberenguer.org', '189273412', '1970-08-19', 'actiu'),
(25, 1, 'Eric', 'Gomez', 'Arbo', '12874184J', 'ericgomez', 'ericgomez', 'Alumne', 'ericgomez@iesberenguer.org', '189247918', '1999-06-01', 'actiu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VersioAnterior`
--

CREATE TABLE `VersioAnterior` (
  `idVersioAnterior` int NOT NULL,
  `idArticle` int NOT NULL,
  `idUsuari` int NOT NULL,
  `Nom` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Cos` varchar(750) NOT NULL,
  `DataUltimaModificacio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `VersioAnterior`
--

INSERT INTO `VersioAnterior` (`idVersioAnterior`, `idArticle`, `idUsuari`, `Nom`, `Cos`, `DataUltimaModificacio`) VALUES
(1, 1, 6, 'Delinternet Col·labora INS Montsia', 'Institut Montsia colabora amb Delinternet', '2020-12-17 17:17:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Wiki`
--

CREATE TABLE `Wiki` (
  `idWiki` int NOT NULL,
  `idProjecte` int NOT NULL,
  `Nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Wiki`
--

INSERT INTO `Wiki` (`idWiki`, `idProjecte`, `Nom`) VALUES
(1, 1, 'Proces Hosting');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Xat`
--

CREATE TABLE `Xat` (
  `idXat` int NOT NULL,
  `idProjecte` int NOT NULL,
  `Nom` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Xat`
--

INSERT INTO `Xat` (`idXat`, `idProjecte`, `Nom`) VALUES
(1, 1, 'Xat Delinternet - INS Montsia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alumne`
--
ALTER TABLE `Alumne`
  ADD PRIMARY KEY (`idAlumne`),
  ADD KEY `idUsuari_idx` (`idUsuari`);

--
-- Indices de la tabla `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`idArticle`),
  ADD KEY `idWiki_idx` (`idWiki`),
  ADD KEY `idUsuari_idx` (`idUsuari`);

--
-- Indices de la tabla `Blog`
--
ALTER TABLE `Blog`
  ADD PRIMARY KEY (`idBlog`),
  ADD KEY `idProjecteBlog_idx` (`idProjecte`);

--
-- Indices de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `Comentari`
--
ALTER TABLE `Comentari`
  ADD PRIMARY KEY (`idComentari`),
  ADD KEY `idUsuariComentari_idx` (`idUsuari`),
  ADD KEY `idArticleComentari_idx` (`idArticle`);

--
-- Indices de la tabla `ComentariPost`
--
ALTER TABLE `ComentariPost`
  ADD PRIMARY KEY (`idComentariPost`),
  ADD KEY `idPostComentari_idx` (`idPost`),
  ADD KEY `idUsuriComentari_idx` (`idUsuari`);

--
-- Indices de la tabla `Departament`
--
ALTER TABLE `Departament`
  ADD PRIMARY KEY (`idDepartament`),
  ADD KEY `idEmpresaDepartament_idx` (`idEmpresa`),
  ADD KEY `idGerentDepartament_idx` (`idGerent`);

--
-- Indices de la tabla `DepartamentEmpleat`
--
ALTER TABLE `DepartamentEmpleat`
  ADD PRIMARY KEY (`idContracte`),
  ADD KEY `idDepaetamentEmpleat_idx` (`idDepartment`),
  ADD KEY `idDepartamentEmpleatx2_idx` (`idEmpleat`);

--
-- Indices de la tabla `Empleat`
--
ALTER TABLE `Empleat`
  ADD PRIMARY KEY (`idEmpleat`),
  ADD KEY `idUsuariEmpleat_idx` (`idUsuari`);

--
-- Indices de la tabla `Empresa`
--
ALTER TABLE `Empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `Fitxer`
--
ALTER TABLE `Fitxer`
  ADD PRIMARY KEY (`idFitxer`),
  ADD KEY `fk_fitxer_idx` (`idUsuari`);

--
-- Indices de la tabla `Gerent`
--
ALTER TABLE `Gerent`
  ADD PRIMARY KEY (`idGerent`),
  ADD KEY `idUserGerent_idx` (`idUsuari`);

--
-- Indices de la tabla `GrupClasse`
--
ALTER TABLE `GrupClasse`
  ADD PRIMARY KEY (`idGrup`),
  ADD KEY `idInstiGrupClasse_idx` (`idInstitut`),
  ADD KEY `idTutorGrupClasse_idx` (`idTutor (professor)`);

--
-- Indices de la tabla `Incidencia`
--
ALTER TABLE `Incidencia`
  ADD PRIMARY KEY (`idIncidencia`),
  ADD KEY `idUserIncidencia_idx` (`idUsuari`);

--
-- Indices de la tabla `Institut`
--
ALTER TABLE `Institut`
  ADD PRIMARY KEY (`idInstitut`);

--
-- Indices de la tabla `LiniaPressupost`
--
ALTER TABLE `LiniaPressupost`
  ADD PRIMARY KEY (`idLiniaPressupost`),
  ADD KEY `idPressupostLinia_idx` (`idPressupost`);

--
-- Indices de la tabla `Matricula`
--
ALTER TABLE `Matricula`
  ADD PRIMARY KEY (`idMatricula`),
  ADD KEY `idGrupMatricula_idx` (`idGrup`),
  ADD KEY `idAlumneMatricula_idx` (`idAlumne`);

--
-- Indices de la tabla `Missatge`
--
ALTER TABLE `Missatge`
  ADD PRIMARY KEY (`idMissatge`),
  ADD KEY `idUsuariMissatge_idx` (`idUsuari`),
  ADD KEY `idXatMissatge_idx` (`idXat`);

--
-- Indices de la tabla `MissatgeEnviat`
--
ALTER TABLE `MissatgeEnviat`
  ADD PRIMARY KEY (`idMissatgeEnviat`),
  ADD KEY `emailMissatgeEnviat_idx` (`Remitent`);

--
-- Indices de la tabla `MissatgeRebut`
--
ALTER TABLE `MissatgeRebut`
  ADD PRIMARY KEY (`idMissatgeRebut`),
  ADD KEY `remitentMissatgeRebut_idx` (`Destinatari`),
  ADD KEY `MissatgeRebutMissatgeEnviat_idx` (`idMissatgeEnviat`);

--
-- Indices de la tabla `Modul`
--
ALTER TABLE `Modul`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Permis`
--
ALTER TABLE `Permis`
  ADD PRIMARY KEY (`idPermis`),
  ADD KEY `idmodul_idx` (`idModul`);

--
-- Indices de la tabla `PermisRol`
--
ALTER TABLE `PermisRol`
  ADD PRIMARY KEY (`idPermisRol`),
  ADD KEY `idpermis_idx` (`idPermis`),
  ADD KEY `idrol_idx` (`idRol`);

--
-- Indices de la tabla `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `idBlogPost_idx` (`idBlog`),
  ADD KEY `idUsuariPost_idx` (`idUsuari`);

--
-- Indices de la tabla `Pressupost`
--
ALTER TABLE `Pressupost`
  ADD PRIMARY KEY (`idPressupost`),
  ADD KEY `idPresuProj_idx` (`idProjecte`);

--
-- Indices de la tabla `Professor`
--
ALTER TABLE `Professor`
  ADD PRIMARY KEY (`idProfessor`),
  ADD KEY `idUserProfessor_idx` (`idUsuari`);

--
-- Indices de la tabla `ProfessorGrup`
--
ALTER TABLE `ProfessorGrup`
  ADD PRIMARY KEY (`idProfessorGrup`),
  ADD KEY `idGrupProfessor_idx` (`idGrup`),
  ADD KEY `idProfessorGru_idx` (`idProfessor`);

--
-- Indices de la tabla `Projecte`
--
ALTER TABLE `Projecte`
  ADD PRIMARY KEY (`idProjecte`),
  ADD KEY `idPropostaProjecte_idx` (`idProposta`);

--
-- Indices de la tabla `Proposta`
--
ALTER TABLE `Proposta`
  ADD PRIMARY KEY (`idProposta`),
  ADD KEY `idDepartment_idx` (`idDepartament`),
  ADD KEY `idGrupProposta_idx` (`idGrup`),
  ADD KEY `idCategoriaProposta_idx` (`idCategoria`);

--
-- Indices de la tabla `Rol`
--
ALTER TABLE `Rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `Usuari`
--
ALTER TABLE `Usuari`
  ADD PRIMARY KEY (`idUsuari`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`),
  ADD KEY `idRolUsuari_idx` (`idRol`);

--
-- Indices de la tabla `VersioAnterior`
--
ALTER TABLE `VersioAnterior`
  ADD PRIMARY KEY (`idVersioAnterior`),
  ADD KEY `idArticleVersio_idx` (`idArticle`),
  ADD KEY `idUsuariVersio_idx` (`idUsuari`);

--
-- Indices de la tabla `Wiki`
--
ALTER TABLE `Wiki`
  ADD PRIMARY KEY (`idWiki`),
  ADD KEY `idProjWiki_idx` (`idProjecte`);

--
-- Indices de la tabla `Xat`
--
ALTER TABLE `Xat`
  ADD PRIMARY KEY (`idXat`),
  ADD KEY `idXatProj_idx` (`idProjecte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Alumne`
--
ALTER TABLE `Alumne`
  MODIFY `idAlumne` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `Article`
--
ALTER TABLE `Article`
  MODIFY `idArticle` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Blog`
--
ALTER TABLE `Blog`
  MODIFY `idBlog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `idCategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Comentari`
--
ALTER TABLE `Comentari`
  MODIFY `idComentari` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ComentariPost`
--
ALTER TABLE `ComentariPost`
  MODIFY `idComentariPost` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Departament`
--
ALTER TABLE `Departament`
  MODIFY `idDepartament` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `DepartamentEmpleat`
--
ALTER TABLE `DepartamentEmpleat`
  MODIFY `idContracte` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Empleat`
--
ALTER TABLE `Empleat`
  MODIFY `idEmpleat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Empresa`
--
ALTER TABLE `Empresa`
  MODIFY `idEmpresa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Fitxer`
--
ALTER TABLE `Fitxer`
  MODIFY `idFitxer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Gerent`
--
ALTER TABLE `Gerent`
  MODIFY `idGerent` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `GrupClasse`
--
ALTER TABLE `GrupClasse`
  MODIFY `idGrup` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Incidencia`
--
ALTER TABLE `Incidencia`
  MODIFY `idIncidencia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Institut`
--
ALTER TABLE `Institut`
  MODIFY `idInstitut` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `LiniaPressupost`
--
ALTER TABLE `LiniaPressupost`
  MODIFY `idLiniaPressupost` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Matricula`
--
ALTER TABLE `Matricula`
  MODIFY `idMatricula` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `Missatge`
--
ALTER TABLE `Missatge`
  MODIFY `idMissatge` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `MissatgeEnviat`
--
ALTER TABLE `MissatgeEnviat`
  MODIFY `idMissatgeEnviat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `MissatgeRebut`
--
ALTER TABLE `MissatgeRebut`
  MODIFY `idMissatgeRebut` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Modul`
--
ALTER TABLE `Modul`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `Permis`
--
ALTER TABLE `Permis`
  MODIFY `idPermis` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `PermisRol`
--
ALTER TABLE `PermisRol`
  MODIFY `idPermisRol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `Post`
--
ALTER TABLE `Post`
  MODIFY `idPost` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Pressupost`
--
ALTER TABLE `Pressupost`
  MODIFY `idPressupost` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Professor`
--
ALTER TABLE `Professor`
  MODIFY `idProfessor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ProfessorGrup`
--
ALTER TABLE `ProfessorGrup`
  MODIFY `idProfessorGrup` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `Projecte`
--
ALTER TABLE `Projecte`
  MODIFY `idProjecte` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Proposta`
--
ALTER TABLE `Proposta`
  MODIFY `idProposta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Rol`
--
ALTER TABLE `Rol`
  MODIFY `idRol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Usuari`
--
ALTER TABLE `Usuari`
  MODIFY `idUsuari` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `VersioAnterior`
--
ALTER TABLE `VersioAnterior`
  MODIFY `idVersioAnterior` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Wiki`
--
ALTER TABLE `Wiki`
  MODIFY `idWiki` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Xat`
--
ALTER TABLE `Xat`
  MODIFY `idXat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Alumne`
--
ALTER TABLE `Alumne`
  ADD CONSTRAINT `idUsuari` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Article`
--
ALTER TABLE `Article`
  ADD CONSTRAINT `fkIdUsuariArticle` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idWiki` FOREIGN KEY (`idWiki`) REFERENCES `Wiki` (`idWiki`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Blog`
--
ALTER TABLE `Blog`
  ADD CONSTRAINT `idProjecteBlog` FOREIGN KEY (`idProjecte`) REFERENCES `Projecte` (`idProjecte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Comentari`
--
ALTER TABLE `Comentari`
  ADD CONSTRAINT `idArticleComentari` FOREIGN KEY (`idArticle`) REFERENCES `Article` (`idArticle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idUsuariComentari` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ComentariPost`
--
ALTER TABLE `ComentariPost`
  ADD CONSTRAINT `idPostComentari` FOREIGN KEY (`idPost`) REFERENCES `Post` (`idPost`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idUsuriComentari` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Departament`
--
ALTER TABLE `Departament`
  ADD CONSTRAINT `idEmpresaDepartament` FOREIGN KEY (`idEmpresa`) REFERENCES `Empresa` (`idEmpresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idGerentDepartament` FOREIGN KEY (`idGerent`) REFERENCES `Gerent` (`idGerent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `DepartamentEmpleat`
--
ALTER TABLE `DepartamentEmpleat`
  ADD CONSTRAINT `idDepaetamentEmpleat` FOREIGN KEY (`idDepartment`) REFERENCES `Departament` (`idDepartament`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idDepartamentEmpleatx2` FOREIGN KEY (`idEmpleat`) REFERENCES `Empleat` (`idEmpleat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Empleat`
--
ALTER TABLE `Empleat`
  ADD CONSTRAINT `idUsuariEmpleat` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Fitxer`
--
ALTER TABLE `Fitxer`
  ADD CONSTRAINT `fk_fitxer` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`);

--
-- Filtros para la tabla `Gerent`
--
ALTER TABLE `Gerent`
  ADD CONSTRAINT `idUserGerent` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `GrupClasse`
--
ALTER TABLE `GrupClasse`
  ADD CONSTRAINT `idInstiGrupClasse` FOREIGN KEY (`idInstitut`) REFERENCES `Institut` (`idInstitut`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idTutorGrupClasse` FOREIGN KEY (`idTutor (professor)`) REFERENCES `Professor` (`idProfessor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Incidencia`
--
ALTER TABLE `Incidencia`
  ADD CONSTRAINT `idUserIncidencia` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `LiniaPressupost`
--
ALTER TABLE `LiniaPressupost`
  ADD CONSTRAINT `idPressupostLinia` FOREIGN KEY (`idPressupost`) REFERENCES `Pressupost` (`idPressupost`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Matricula`
--
ALTER TABLE `Matricula`
  ADD CONSTRAINT `idAlumneMatricula` FOREIGN KEY (`idAlumne`) REFERENCES `Alumne` (`idAlumne`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idGrupMatricula` FOREIGN KEY (`idGrup`) REFERENCES `GrupClasse` (`idGrup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Missatge`
--
ALTER TABLE `Missatge`
  ADD CONSTRAINT `idUsuariMissatge` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idXatMissatge` FOREIGN KEY (`idXat`) REFERENCES `Xat` (`idXat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `MissatgeEnviat`
--
ALTER TABLE `MissatgeEnviat`
  ADD CONSTRAINT `emailMissatgeEnviat` FOREIGN KEY (`Remitent`) REFERENCES `Usuari` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `MissatgeRebut`
--
ALTER TABLE `MissatgeRebut`
  ADD CONSTRAINT `MissatgeRebutMissatgeEnviat` FOREIGN KEY (`idMissatgeEnviat`) REFERENCES `MissatgeEnviat` (`idMissatgeEnviat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `remitentMissatgeRebut` FOREIGN KEY (`Destinatari`) REFERENCES `Usuari` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Permis`
--
ALTER TABLE `Permis`
  ADD CONSTRAINT `idmodul` FOREIGN KEY (`idModul`) REFERENCES `Modul` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `PermisRol`
--
ALTER TABLE `PermisRol`
  ADD CONSTRAINT `idpermis` FOREIGN KEY (`idPermis`) REFERENCES `Permis` (`idPermis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idrol` FOREIGN KEY (`idRol`) REFERENCES `Rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Post`
--
ALTER TABLE `Post`
  ADD CONSTRAINT `idBlogPost` FOREIGN KEY (`idBlog`) REFERENCES `Blog` (`idBlog`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idUsuariPost` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Pressupost`
--
ALTER TABLE `Pressupost`
  ADD CONSTRAINT `idPresuProj` FOREIGN KEY (`idProjecte`) REFERENCES `Projecte` (`idProjecte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Professor`
--
ALTER TABLE `Professor`
  ADD CONSTRAINT `idUserProfessor` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ProfessorGrup`
--
ALTER TABLE `ProfessorGrup`
  ADD CONSTRAINT `idGrupProfessor` FOREIGN KEY (`idGrup`) REFERENCES `GrupClasse` (`idGrup`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idProfessorGru` FOREIGN KEY (`idProfessor`) REFERENCES `Professor` (`idProfessor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Projecte`
--
ALTER TABLE `Projecte`
  ADD CONSTRAINT `idPropostaProjecte` FOREIGN KEY (`idProposta`) REFERENCES `Proposta` (`idProposta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Proposta`
--
ALTER TABLE `Proposta`
  ADD CONSTRAINT `idCategoriaProposta` FOREIGN KEY (`idCategoria`) REFERENCES `Categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idDepartment` FOREIGN KEY (`idDepartament`) REFERENCES `Departament` (`idDepartament`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idGrupProposta` FOREIGN KEY (`idGrup`) REFERENCES `GrupClasse` (`idGrup`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Usuari`
--
ALTER TABLE `Usuari`
  ADD CONSTRAINT `idRolUsuari` FOREIGN KEY (`idRol`) REFERENCES `Rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `VersioAnterior`
--
ALTER TABLE `VersioAnterior`
  ADD CONSTRAINT `idArticleVersio` FOREIGN KEY (`idArticle`) REFERENCES `Article` (`idArticle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idUsuariVersio` FOREIGN KEY (`idUsuari`) REFERENCES `Usuari` (`idUsuari`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Wiki`
--
ALTER TABLE `Wiki`
  ADD CONSTRAINT `idProjWiki` FOREIGN KEY (`idProjecte`) REFERENCES `Projecte` (`idProjecte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Xat`
--
ALTER TABLE `Xat`
  ADD CONSTRAINT `idXatProj` FOREIGN KEY (`idProjecte`) REFERENCES `Projecte` (`idProjecte`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
