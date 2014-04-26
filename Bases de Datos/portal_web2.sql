-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2014 a las 15:54:17
-- Versión del servidor: 5.6.12
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `portal_web2`
--
CREATE DATABASE IF NOT EXISTS `portal_web2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `portal_web2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abecedario`
--

CREATE TABLE IF NOT EXISTS `abecedario` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `letra` varchar(10) NOT NULL,
  `detalles` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `abecedario`
--

INSERT INTO `abecedario` (`id`, `letra`, `detalles`) VALUES
(1, 'A', ''),
(2, 'B', ''),
(3, 'C', ''),
(4, 'D', ''),
(5, 'E', ''),
(6, 'F', ''),
(7, 'G', ''),
(8, 'H', ''),
(9, 'I', ''),
(10, 'J', ''),
(11, 'K', ''),
(12, 'L', ''),
(13, 'M', ''),
(14, 'N', ''),
(15, 'Ñ', ''),
(16, 'O', ''),
(17, 'P', ''),
(18, 'Q', ''),
(19, 'R', ''),
(20, 'S', ''),
(21, 'T', ''),
(22, 'U', ''),
(23, 'V', ''),
(24, 'W', ''),
(25, 'X', ''),
(26, 'Y', ''),
(27, 'Z', ''),
(28, '#', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alertas_ce`
--

CREATE TABLE IF NOT EXISTS `alertas_ce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_seccion` int(11) NOT NULL,
  `cod_tipo_alerta` int(11) NOT NULL,
  `cod_ambito` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `numero` varchar(12) NOT NULL,
  `titulo` text NOT NULL,
  `adjunto` varchar(40) NOT NULL,
  `numero_registro_sanitario` varchar(20) NOT NULL,
  `lote` varchar(20) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  `fecha_recepcion` date NOT NULL,
  `hora_recepcion` time NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `hora_publicacion` time NOT NULL,
  `nombre_publicador` varchar(50) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `numero_control` varchar(10) NOT NULL,
  `siglas_unidad_solicitante` varchar(2) NOT NULL,
  `responsable_solicitud` varchar(50) NOT NULL,
  `email_solicitante` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Alertas del CENAVIF' AUTO_INCREMENT=113 ;

--
-- Volcado de datos para la tabla `alertas_ce`
--

INSERT INTO `alertas_ce` (`id`, `cod_seccion`, `cod_tipo_alerta`, `cod_ambito`, `fecha`, `numero`, `titulo`, `adjunto`, `numero_registro_sanitario`, `lote`, `cod_estado`, `fecha_recepcion`, `hora_recepcion`, `fecha_publicacion`, `hora_publicacion`, `nombre_publicador`, `fecha_solicitud`, `numero_control`, `siglas_unidad_solicitante`, `responsable_solicitud`, `email_solicitante`) VALUES
(2, 1, 1, 1, '2012-07-04', '015/2012 ', 'NORVASC 5MG TABLETAS', '015_2012_AC.pdf', 'E.F. 26.852/11', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(3, 1, 1, 1, '2012-06-14', '014/2012 ', 'ATROPINA SULFATO 0,5 MG/ 2 ML SOLUCI', '014_2012_AC.pdf', 'E.F.G. 32.659/11', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(4, 1, 1, 1, '2012-06-13', '013/2012 ', 'DIFENILHIDANTO', '013_2012_AC.pdf', 'E.F.38.010/10', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(5, 1, 1, 1, '2012-05-21', '012/2012 ', 'CURAM 1000 MG TABLETAS RECUBIERTAS', '012_2012_AC.pdf', 'E.F.31.906/11', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(6, 1, 1, 1, '2012-05-09', '011/2012', 'PARSEL PLUS 500 MG- 65 MG COMPRIMIDOS RECUBIERTOS', '011_2012_AC.pdf', 'E.F.G. 37.865/09', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(7, 1, 1, 1, '2012-05-09', '010/2012 ', 'PARSEL FORTE COMPRIMIDOS RECUBIERTOS', '010_2012_AC.pdf', 'E.F.G. 35.525', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(8, 1, 1, 1, '2012-05-09', '009/2012 ', 'ACETOMINOFEN 120 MG/ 5 ML JARABE', '009_2012_AC.pdf', 'E.F.G. 37.446/08', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(9, 1, 1, 1, '2012-03-19', '008/2012 ', 'CLARITROMICINA 250 MG/ 5 ML POLVO PARA SUSPENSION ORAL ', '008_2012_AC.pdf', 'E.F.G. 31.198/10', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(10, 1, 1, 1, '2012-02-23', '007/2012', 'ALVONAL 500 MG ', '007_2012_AC.pdf', 'E.F. 39.127/10', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(11, 1, 1, 1, '2012-02-23', '006/2012 ', 'ENALAPRIL MALEATO 20 MG TABLETAS', '006_2012_AC.pdf', 'E.F.G. 27.590/08', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(12, 1, 1, 1, '2012-02-02', '005/2012 ', 'CLORURO DE SODIO AL 0,9 % SOLUCI', '005_2012_AC.pdf', 'E.F.G. 37.435/08', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(13, 1, 1, 1, '2012-02-02', '004/2012', 'CLORURO DE SODIO AL 0,45 % SOLUCI', '004_2012_AC.pdf', 'E.F.G. 38.038/10', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(14, 1, 1, 1, '2012-01-27', '003/2012', 'DIFENILHIDATO', '003_2012_AC.pdf', 'E.F.G. 38.010/10/11', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(15, 1, 1, 1, '2012-01-19', '002/2012', 'SINOGAN 25 MG / ML SOLUCI', '002_2012_AC.pdf', 'E.F. 9.675/11', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(16, 1, 1, 1, '2012-01-19', '001/2012', 'TERACEZINC 500 MG - 7,5 MG C', '001_2012_AC.pdf', 'E.F. 33.736/11', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(17, 1, 1, 1, '2011-11-16', '004/2011 ', 'TEMPRA 500 MG TABLETAS ', '004_2011_AC.pdf', 'E.F. 18.118/10', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(18, 1, 1, 1, '2011-11-16', '003/2011 ', 'CLORURO DE SODIO - DEXTROSA ANHIDRA 0,45 % - 5 % SOLUCI', '003_2011_AC.pdf', 'E.F.G. 37.701/09', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(19, 1, 1, 1, '2011-11-16', '002/2011 ', 'TRILEPTAL 6% SUSPENSION ORAL', '002_2011_AC.pdf', 'E.F. 28.881', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(20, 1, 1, 1, '2011-11-16', '001/2011 ', 'CIFARCA', '001_2011_AC.pdf', 'E.F. 9.190', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(21, 3, 1, 1, '2012-00-00', '011/2012 ', 'ALIVETNOC ACETAMINOF', '011_2012_MI.pdf', 'E.F. 32.123', 'L113', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(22, 3, 1, 1, '2012-00-00', '010/2012 ', 'NOTOLAC 30MG/ML KETROLACO TROMETAMINA. SOLUCI', '010_2012_MI.pdf', 'EXP FEB 13', 'A10070', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(23, 3, 1, 1, '2012-00-00', '009/2012 ', 'MERONEM IV MEROPONEM POLVO. POLVO PARA SOLUCI', '009_2012_MI.pdf', '', 'GN477', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(24, 3, 1, 1, '2012-00-00', '008/2012 ', 'NORDOTROPIN NORDILET PFIZER 100 UI, SOMATROPINA 5MG/ 1,5 ML HORMONA DE CRECIMIENTO RECOMBINANTE SOLUCI', '008_2012_MI.pdf', '', '06-2010/07-2013/TF05', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(25, 3, 1, 1, '2012-00-00', '007/2012', 'TERAGRIPFORTE NOCHE 650 MG- 4MG GRANULADO PARA SOLUCI', '007_2012_MI.pdf', '', 'L008791', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(26, 3, 1, 1, '2012-00-00', '006/2012 ', 'TERAGRIPFORTE 650 MG- 2 MG GRANULADO PARA SOLUCI', '006_2012_MI.pdf', '', '6555', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(27, 3, 1, 1, '2012-00-00', '005/2012 ', 'TERAGRIPFORTE 650 MG- 30 MG GRANULADO PARA SOLUCI', '005_2012_MI.pdf', '', 'L008791, 128298', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(28, 3, 1, 1, '2012-00-00', '004/2012 ', 'MINOXIDIL 5% LOCI', '004_2012_MI.pdf', '', '4101190', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(29, 3, 1, 1, '2012-00-00', '003/2012', 'MINOXIDIL 5% CHAMP', '003_2012_MI.pdf', '', '10101115', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(30, 3, 1, 1, '2012-00-00', '002/2012 ', 'VICK VAPORUB  UNG', '002_2012_MI.pdf', '', '82102709H1', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(31, 3, 1, 1, '2012-00-00', '001/2012 ', '', '001_2012_MI.pdf', '', '0079, 0080, 0084, 00', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(32, 3, 1, 1, '2011-00-00', '007/2011 ', 'ACEPHEN 120 MG SUPPOSITORIES USP PEDIATRIC', '007_2011_MI.pdf', 'NDC 0713-0118-12', '11809011', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(33, 3, 1, 1, '2011-00-00', '006/2011', 'BUSCAPINA PLUS COMPRIMIDOS RECUBIERTOS', '006_2011_MI.pdf', '', 'R0497H', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(34, 3, 1, 1, '2011-00-00', '005/2011', 'NORDOTROPIN', '005_2011_MI.pdf', '', 'TC85331', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(35, 3, 1, 1, '2011-00-00', '004/2011', 'RACEPINEPHRINE, USP 2,25 % INHALATION SOLUTION', '004_2011_MI.pdf', 'NDC 0487-5901-99', 'R0062A', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(36, 3, 1, 1, '2011-00-00', '003/2011', 'POLICITRA SOLUCI', '003_2011_MI.pdf', '', '22108', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(37, 3, 1, 1, '2011-00-00', '002/2011', 'NUBAIN 10 MG / ML INJECTION', '002_2011_MI.pdf', 'INV M-006731R1', 'MRL 802B', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(38, 3, 1, 1, '2011-00-00', '001/2011', 'PANTOP 40 MG POLVO LIOFILIZADO PARA SOLUCI', '001_2011_MI.pdf', '', 'LH24210', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(39, 1, 1, 1, '2012-12-21', '016/2012 ', 'ACETAMINOFEN 500 mg TABLETAS ALERTA DE DESVIO DE CALIDAD EN MEDICAMENTO', '016_2012_AS.pdf', 'E.F.G. 37.751/08 ', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(40, 2, 1, 1, '2012-04-12', '007/2012 ', 'LA DROSPIRENONA COMO PRINCIPIO ACTIVO EN ANTICONCEPTIVOS ORALES Y RIESGO DE EVENTOS TROMBOEMB', '007_2012_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(41, 2, 1, 1, '2012-03-31', '006/2012 ', 'BEVACIZUMAB EN COMBINACI', '006_2012_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(42, 2, 1, 1, '2012-02-22', '005/2012 ', 'PIOGLITAZONA Y RIESGO DE CÁNCER DE VEJIGA', '005_2012_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(43, 2, 1, 1, '2012-02-22', '004/2012 ', 'KALETRA', '004_2012_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(44, 2, 1, 1, '2011-12-15', '003/2012 ', 'DRONEDARONA Y RIESGO DE DAÑO HEPATOCELULAR', '003_2012_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', 'CE', '', ''),
(45, 2, 1, 1, '2012-03-29', '002/2012', 'ADVERTENCIA SOBRE USO NO AUTORIZADO DE METFORMINA', '002_2012_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(46, 2, 1, 1, '2012-01-30', '001/2012 ', 'ALISKIRENO: SUSPENDIDA SU COMERCIALIZACION', '001_2012_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(47, 2, 1, 1, '2011-00-00', '010/2011', 'REUMARTRIT PLUS Y SIMPLEX: MEDICAMENTOS IL', '010_2011_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(48, 2, 1, 1, '2011-00-00', '009/2011 ', 'BENZOCAINA: SUSPENSION INMEDIATA DE FABRICACI', '009_2011_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(49, 2, 1, 1, '2011-00-00', '008/2011 ', 'ACTUALIZACION DE LA FICHA TECNICA O INFORMACION AL GREMIO MEDICO DEL DASATINIB', '008_2011_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(50, 2, 1, 1, '2011-00-00', '007/2011 ', 'ACTUALIZACION DE LA FICHA TECNICA O INFORMACION AL GREMIO MEDICO DE LENALIDOMIDA', '007_2011_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(51, 2, 1, 1, '2011-00-00', '006/2011 ', 'ACTUALIZACION DE LA FICHA TECNICA O INFORMACION AL GREMIO MEDICO DEL ADALIMUMAB', '006_2011_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(52, 2, 1, 1, '2011-00-00', '005/2011 ', 'ACTUALIZACION DE LA FICHA TECNICA O INFORMACION AL GREMIO MEDICO DEL ZANAMIVIR', '005_2011_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(53, 2, 1, 1, '2011-00-00', '004/2011 ', 'ACTUALIZACION DE LA FICHA TECNICA O INFORMACION AL GREMIO MEDICO DEL ALBENDAZOL', '004_2011_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(54, 2, 1, 1, '2011-00-00', '003/2011 ', 'ACTUALIZACION DE LA FICHA TECNICA O INFORMACION AL GREMIO MEDICO DE LAMOTRIGINA', '003_2011_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(55, 2, 1, 1, '2011-00-00', '002/2011 ', 'ACTUALIZACION DE LA FICHA TECNICA O INFORMACION AL GREMIO MEDICO DE LA CABERGOLINA', '002_2011_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(56, 2, 1, 1, '2011-00-00', '001/2011 ', 'ACTUALIZACION DE LA FICHA TECNICA O INFORMACION AL GREMIO MEDICO DEL HALOPERIDOL DECANOATO', '001_2011_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(57, 2, 1, 1, '2010-00-00', '001/2010 ', 'SIBUTRAMINA: SUSPENDIDA SU COMERCIALIZACION', '001_2010_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(58, 2, 1, 2, '2012-07-20', '022/2012 ', 'CALCINONINA: USO RESTRINGIDO A TRATAMIENTOS DE CORTA DURACIÓN', '022_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(59, 2, 1, 2, '2012-06-29', '021/2012 ', 'ONDANSETRON IV : PROLONGACIÓN DE INTERVALO QT', '021_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(60, 2, 1, 2, '2012-06-15', '020/2012 ', 'UTILIZACIÓN DE EMLA® CREMA (LIDOCAÍNA Y PRILOCAÍNA) SOBRE SUPERFICIES EXTENSAS DE PIEL: RIESGO DE METAHEMOGLOBINEMIA', '020_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(61, 2, 1, 2, '2012-00-00', '019/2012 ', 'RETIRADA DEL PRODUCTO NUEZ DE LA INDIA MAGICNUEZ', '019_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(62, 2, 1, 2, '2012-00-00', '018/2012 ', 'RETIRADA DE PRODUCTOS ILEGALES PARA LA DISFUNCI', '018_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(63, 2, 1, 2, '2012-00-00', '017/2012', 'PROTOPIC', '017_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(64, 2, 1, 2, '2012-00-00', '016/2012 ', 'HORMONA DE CRECIMIENTO: RECOMENDACIONES PARA LA NO UTILIZACI', '016_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(65, 2, 1, 2, '2012-00-00', '015/2012', 'ZITROMAX : PEQUE', '015_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(66, 2, 1, 2, '2012-00-00', '014/2012 ', 'DOMPERIDONA: PEQUE', '014_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(67, 2, 1, 2, '2012-00-00', '013/2012 ', 'REVLIMID', '013_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(68, 2, 1, 2, '2012-00-00', '012/2012 ', 'CELEXA', '012_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(69, 2, 1, 2, '2012-00-00', '011/2012', 'LA RESTRICCI', '011_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(70, 2, 1, 2, '2012-00-00', '010/2012 ', 'AUMENTO EN EL REPORTE DE EFECTOS ADVERSOS POR TAXORERE', '010_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(71, 2, 1, 2, '2012-00-00', '009/2012 ', 'ONGLYZA', '009_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(72, 2, 1, 2, '2012-00-00', '008/2012 ', 'RETIRADA DE PRODUCTO ILEGAL L-5HTP 60 CAPSULAS QUE CONTIENE L-5 HIDROXITRIPTOFANO', '008_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(73, 2, 1, 2, '2012-00-00', '007/2012 ', 'LA INTERACCI', '007_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(74, 2, 1, 2, '2012-00-00', '006/2012 ', 'RETIRADA DE PRODUCTOS ILEGALES QUE CONTIENEN FENTOLAMINA, SILDENAFILO Y TADALAFILO ASI COMO SUS DERIVADOS', '006_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(75, 2, 1, 2, '2012-00-00', '005/2012 ', 'ALISKIRENO: CONCLUSIONES DE LA REVALUACI', '005_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(76, 2, 1, 2, '2012-00-00', '004/2012 ', 'INHIBIDORES DE LA BOMBA DE PROTONES (IBP) PUEDEN ESTAR RELACIONADOS CON UN MAYOR RIESGO DE DIARREA ASOCIADA A CLOSTRIDIUM DIFFICILE (DACD)', '004_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(77, 2, 1, 2, '2012-00-00', '003/2012 ', 'RETIRADA DE PRODUCTOS ILEGALES PARA LA PERDIDA DE PESO', '003_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(78, 2, 1, 2, '2012-00-00', '002/2012 ', 'RETIRADA DE PRODUCTOS ILEGALES QUE CONTIENEN SILDENAFILO Y TADALAFILO ASI COMO SUS DERIVADOS', '002_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(79, 2, 1, 2, '2012-00-00', '001/2012 ', 'ALISKIRENO: REVALUACI', '001_2012_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(80, 2, 1, 2, '2011-00-00', '016/2011 ', 'METOCLOPRAMIDA Y RESTRICCIONES DE USO EN NI', '016_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(81, 2, 1, 2, '2011-00-00', '015/2011', 'REEVALUACI', '015_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(82, 2, 1, 2, '2011-00-00', '014/2011 ', 'DRONEDARONA (MULTAQQ', '014_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(83, 2, 1, 2, '2011-00-00', '013/2011 ', 'VARENICLINA (CHAMPIX', '013_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(84, 2, 1, 2, '2011-00-00', '012/2011 ', 'PIOGLITAZONA Y EVALUACI', '012_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(85, 2, 1, 2, '2011-00-00', '011/2011 ', 'NIZORAL (KETOCONAZOLE) SUSPENSI', '011_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(86, 2, 1, 2, '2011-00-00', '010/2011 ', 'LOS INHIBIDORES DE LA 5-ALFA REDUCTASA (5-ARI) PUEDE AUMENTAR EL RIESGO DE UNA FORMA M', '010_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(87, 2, 1, 2, '2011-00-00', '009/2011 ', 'EL RIESGO DE TROMBOEMBOLISMO VENOSO CON EL USO DE ETINILESTRADIOL+ DROSPIRENONA QUE CONTIENEN LOS ANTICONCEPTIVOS ORALES (YASMIN', '009_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(88, 2, 1, 2, '2011-00-00', '008/2011 ', 'PLANTAGO OVATA Y REACCIONES DE HIPERSENSIBILIDAD POR INAHALACI', '008_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(89, 2, 1, 2, '2011-00-00', '007/2011 ', 'CILOSTAZOL (EKISTOL', '007_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(90, 2, 1, 2, '2011-00-00', '006/2011', 'BUFLOMEDIL (LOFTON', '006_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(91, 2, 1, 2, '2011-00-00', '005/2011 ', 'BIFOSFONATOS Y RIESGO DE FRACTURAS AT', '005_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(92, 2, 1, 2, '2011-00-00', '004/2011 ', 'BLOQUEADORES DEL FACTOR DE NECROSIS TUMORAL (FNT), AZATIOPRINA Y/O MERCAPTOPURINE, ACTUALIZACI', '004_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(93, 2, 1, 2, '2011-00-00', '003/2011 ', 'LOS REPORTES DE UN EFECTO ADVERSO RARO, PERO GRAVE Y POTENCIALMENTE FATAL CON EL USO SIN PRESCRIPCI', '003_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(94, 2, 1, 2, '2011-00-00', '002/2011 ', 'ABACAVIR Y POSIBLE INCREMENTO DE RIESGOS DE ATAQUES CARDIACOS', '002_2011_ASI.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(95, 2, 1, 2, '2012-08-30', '001/2013 ', 'REVATIO (RECOMENDACIÓN EN CONTRA DEL USO EN NIÑOS)', '001_2013_ASI.pdf', '', '', 1, '2013-02-06', '09:24:00', '2013-02-19', '08:51:00', 'EMILY VIVAS', '2013-02-01', 'CE-0001', 'CE', 'MARIA TERESA IBARZ', 'cenavif@gmail.com'),
(96, 2, 1, 2, '2012-09-19', '002/2013', 'MIRAPEX (REVISIÓN DE SEGURIDAD EN CURSO, POSIBLE RIESGO DE INSUFICIENCIA CARDÍACA)', '002_2013_ASI.pdf', '', '', 1, '2013-02-06', '09:24:00', '2013-02-19', '08:51:00', 'EMILY VIVAS', '2013-02-01', 'CE-0001', 'CE', 'MARIA TERESA IBARZ', 'cenavif@gmail.com'),
(97, 2, 1, 2, '2012-02-11', '003/2013', 'PRADAXA (REVISION DE SEGURIDAD POSTERIOR A LA COMERCIALIZACION DE EPISODIOS HEMORRAGICOS GRAVES)', '003_2013_ASI.pdf', '', '', 1, '2013-02-06', '09:24:00', '2013-02-19', '08:51:00', 'EMILY VIVAS', '2013-02-01', 'CE-0001', 'CE', 'MARIA TERESA IBARZ', 'cenavif@gmail.com'),
(98, 2, 1, 2, '2012-12-04', '004/2013', 'ZOFRAN (DOSIS UNICA VIA INTRAVENOSA. ELIMINACION DEL PRODUCTO DEBIDO A LA POSIBILIDAD DE GRAVES RIESGOS CARDIACOS)', '004_2013_ASI.pdf', '', '', 1, '2013-02-06', '09:24:00', '2013-02-19', '08:51:00', 'EMILY VIVAS', '2013-02-01', 'CE-0001', 'CE', 'MARIA TERESA IBARZ', 'cenavif@gmail.com'),
(99, 2, 1, 2, '2012-12-12', '005/2013', 'CHANTIX (REVISION DE SEGURIDAD ACTUALIZADA SOBRE EL RIESGO DE EVENTOS CARDIOVASCULARES ADVERSOS)', '005_2013_ASI.pdf', '', '', 1, '2013-02-06', '09:24:00', '2013-02-19', '08:51:00', 'EMILY VIVAS', '2013-02-01', 'CE-0001', 'CE', 'MARIA TERESA IBARZ', 'cenavif@gmail.com'),
(100, 2, 1, 2, '2012-12-19', '006/2013', 'PRADAXA (NO DEBE SER USADO EN PACIENTES CON PROTESIS VALVULARES CARDIACAS ADVERSOS)', '006_2013_ASI.pdf', '', '', 1, '2013-02-06', '09:24:00', '2013-02-19', '08:51:00', 'EMILY VIVAS', '2013-02-01', 'CE-0001', 'CE', 'MARIA TERESA IBARZ', 'cenavif@gmail.com'),
(101, 2, 1, 2, '2013-01-10', '007/2013', 'PRODUCTOS QUE CONTIENEN ZOLPIDEM (REQUIERE DOSIS MÁS BAJAS EN MUJERES)', '007_2013_ASI.pdf', '', '', 1, '2013-02-06', '09:24:00', '2013-02-19', '08:51:00', 'EMILY VIVAS', '2013-02-01', 'CE-0001', 'CE', 'MARIA TERESA IBARZ', 'cenavif@gmail.com'),
(102, 2, 1, 2, '2013-01-18', '008/2013', 'AGENCIA EUROPEA DEL MEDICAMENTO CONFIRMA LA RECOMENDACION DE SUSPENDER TREDAPTIVE, PELSONT, TREVACLYN (ACIDO NICOTINICO Y LAPOPIRANT)', '008_2013_ASI.pdf', '', '', 1, '2013-02-06', '09:24:00', '2013-02-19', '08:51:00', 'EMILY VIVAS', '2013-02-01', 'CE-0001', 'CE', 'MARIA TERESA IBARZ', 'cenavif@gmail.com'),
(103, 2, 1, 2, '2013-01-28', '009/2013', 'REVISION DE LOS ANTICONCEPTIVOS ORALES COMBINADOS DE TERCERA Y CUARTA GENERACION', '009_2013_ASI.pdf', '', '', 1, '2013-02-06', '09:24:00', '2013-02-19', '08:51:00', 'EMILY VIVAS', '2013-02-01', 'CE-0001', 'CE', 'MARIA TERESA IBARZ', 'cenavif@gmail.com'),
(104, 2, 1, 2, '2013-01-30', '010/2013', 'INICIO DE UN PROCESO PARA SUSPENDER LA AUTORIZACION DE COMERCIALIZACION DE DIANE 35 Y SU GENERICO EN FRANCIA', '010_2013_ASI.pdf', '', '', 1, '2013-02-06', '09:24:00', '2013-02-19', '08:51:00', 'EMILY VIVAS', '2013-02-01', 'CE-0001', 'CE', 'MARIA TERESA IBARZ', 'cenavif@gmail.com'),
(105, 2, 1, 1, '2013-00-00', '001/2013', 'LA CIPROTERONA ACETATO - ETINILESTRADIOL COMO PRINCIPIOS ACTIVOS A DOSIS FIJA EN ANTICONCEPTIVOS ORALES Y RIESGO DE EVENTOS TROMBOEMBOLICOS', '001_2013_AS.pdf', '', '', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(106, 1, 1, 1, '2013-04-11', '001/2013', 'RANITIDINA 50 MG / 2ML SOLUCION INYECTABLE E.F.G.33.996/11', '001-2013-AC.pdf', 'E.F.G.33.996/11', '', 1, '2013-04-10', '10:00:00', '2013-04-10', '12:17:00', 'EMILY VIVAS', '2013-03-22', '', 'CE', 'MARIA EUGENIA DIAZ', 'maediaz@inhrr.gob.ve'),
(107, 3, 1, 1, '2013-04-18', '001/2013', 'VICK VAPORUB UNGUENTO TOPICO', '001-2013-MI.pdf', '', '03022709H1', 1, '2013-04-18', '10:54:00', '2013-04-18', '11:16:00', 'EMILY VIVAS', '2013-04-11', '', 'CE', 'MARIA EUGENIA DIAZ', 'maediaz@inhrr.gob.ve'),
(108, 1, 1, 1, '2013-04-23', '002/2013', 'OMEZ 40 MG POLVO LIOFILIZADO PARA SOLUCION INYECTABLE ', '002-2013-AC.pdf', 'E.F. 34.974', '', 1, '2013-04-24', '09:00:00', '2013-04-24', '12:07:00', 'EMILY VIVAS', '2013-04-17', '', 'CE', 'MARIA EUGENIA DIAZ', 'maediaz@inhrr.gob.ve'),
(109, 3, 1, 1, '2013-04-29', '002/2013', 'UMAN ALBUMIN 200g/L SOLUTION FOR INFUSION 50 mL, Lotes declarados: "131430K, 181982F"', '002-2013-MI.pdf', '', '', 1, '2013-05-03', '07:35:00', '2013-05-03', '08:44:00', 'EMILY VIVAS', '2013-04-25', '', 'CE', 'MARIA EUGENIA DIAZ', 'maediaz@inhrr.gob.ve'),
(110, 3, 1, 1, '2013-12-06', '004/2013', 'Celovan 500 mg Polvo Liofilizado Para Solución Inyectable, Lote declarado: 7630220', '004-2013-MI.pdf', '', '7630220', 1, '2013-12-10', '10:07:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2013-12-06', '', 'CE', 'MARIA EUGENIA DIAZ', 'maediaz@inhrr.gob.ve'),
(111, 3, 1, 1, '2013-12-06', '005/2013', 'Atromax 500 mg Polvo Liofilizado para Solución Inyectable, Lote declarado: 7601542', '005-2013-MI.pdf', '', '7601542', 1, '2013-12-10', '10:07:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2013-12-06', '', 'CE', 'MARIA EUGENIA DIAZ', 'maediaz@inhrr.gob.ve'),
(112, 3, 1, 1, '2013-12-12', '006/2013', 'COLIXIN 1.000.000 UI POLVO PARA SOLUCIÓN INYECTABLE O PARA SOLUCIÓN PARA INHALACIÓN POR NEBULIZADOR, LOTE DECLARADO: F-02', '006-2013-AS.pdf', '', 'F-02', 1, '2013-12-12', '11:52:00', '2013-12-12', '12:52:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2013-12-10', '', 'CE', 'MARIA EUGENIA DIAZ', 'maediaz@inhrr.gob.ve');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambito_ce`
--

CREATE TABLE IF NOT EXISTS `ambito_ce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ambito` varchar(15) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tipos de ambitos - Alertas del CENAVIF ' AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ambito_ce`
--

INSERT INTO `ambito_ce` (`id`, `ambito`, `descripcion`) VALUES
(1, 'Nacional', 'Ambito Nacional'),
(2, 'Internacional', 'Ambito Internacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion_ciudadano`
--

CREATE TABLE IF NOT EXISTS `atencion_ciudadano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `tema` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `mensaje` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `atencion_ciudadano`
--

INSERT INTO `atencion_ciudadano` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `tema`, `titulo`, `mensaje`) VALUES
(1, 'sdads', 'dsadsa', 'dsadsadasds', 'adsad', 'Denuncia', 'sasadas', 'dsad'),
(2, '11111', '1111', '11111', '11', 'Queja', '111', '1111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletines_jr`
--

CREATE TABLE IF NOT EXISTS `boletines_jr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(4) NOT NULL,
  `fecha` date NOT NULL,
  `adjunto` varchar(20) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  `fecha_recepcion` date NOT NULL,
  `hora_recepcion` time NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `hora_publicacion` time NOT NULL,
  `nombre_publicador` varchar(50) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `numero_control` varchar(10) NOT NULL,
  `siglas_unidad_solicitante` varchar(2) NOT NULL,
  `responsable_solicitud` varchar(50) NOT NULL,
  `email_solicitante` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Boletines de la Junta Revisora' AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `boletines_jr`
--

INSERT INTO `boletines_jr` (`id`, `numero`, `fecha`, `adjunto`, `cod_estado`, `fecha_recepcion`, `hora_recepcion`, `fecha_publicacion`, `hora_publicacion`, `nombre_publicador`, `fecha_solicitud`, `numero_control`, `siglas_unidad_solicitante`, `responsable_solicitud`, `email_solicitante`) VALUES
(1, '54', '2011-07-29', '54.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'DR. SANTOS YNOJOSA', 'synojosa@inhrr.gob.ve'),
(2, '53', '2010-12-10', '53.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'DR. SANTOS INOJOSA', 'synojosa@inhrr.gob.ve'),
(3, '52', '2009-11-29', '52.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'MIRNA BAFFI', 'mbaffi@inhrr.gob.ve'),
(4, '51', '2009-01-28', '51.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'MIRNA BAFFI', 'mbaffi@inhrr.gob.ve'),
(5, '50', '0000-00-00', '50.pdf', 0, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'MIRNA BAFFI', 'mbaffi@inhrr.gob.ve'),
(6, '49', '0000-00-00', '49.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'MIRNA BAFFI', 'mbaffi@inhrr.gob.ve'),
(7, '48', '2007-01-31', '48.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'MIRNA BAFFI', 'mbaffi@inhrr.gob.ve'),
(8, '47', '2006-09-22', '47.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'MIRNA BAFFI', 'mbaffi@inhrr.gob.ve'),
(9, '46', '0000-00-00', '46.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'YM', ''),
(10, '45', '0000-00-00', '45.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'YM', ''),
(11, '44', '0000-00-00', '44.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'YM', ''),
(12, '43', '0000-00-00', '43.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'YM', ''),
(13, '42', '0000-00-00', '42.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'YM', ''),
(14, '41', '0000-00-00', '41.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'YM', ''),
(15, '40', '0000-00-00', '40.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'YM', ''),
(16, '39', '0000-00-00', '39.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'YM', ''),
(17, '38', '0000-00-00', '38.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'YM', ''),
(18, '37', '0000-00-00', '37.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(19, '36', '0000-00-00', '36.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(20, '35', '0000-00-00', '35.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '00:00:00', 'JR', '', ''),
(21, '34', '0000-00-00', '34.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(22, '33', '0000-00-00', '33.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(23, '32', '0000-00-00', '32.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(24, '31', '1999-10-13', '31.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(25, '30', '1999-07-00', '30.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(26, '29', '0000-00-00', '29.pdf', 2, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAs', '0000-00-00', '', 'JR', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circulares_rc`
--

CREATE TABLE IF NOT EXISTS `circulares_rc` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `tipo_circular` varchar(200) NOT NULL,
  `numero` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `asunto` varchar(300) NOT NULL,
  `adjunto` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Ciculares Registro y Control' AUTO_INCREMENT=73 ;

--
-- Volcado de datos para la tabla `circulares_rc`
--

INSERT INTO `circulares_rc` (`id`, `tipo_circular`, `numero`, `fecha`, `asunto`, `adjunto`) VALUES
(1, 'EF', 'RC-6593-2012', '2012-09-12', 'MODIFICACION DEL SISTEMA DE CITAS PARA ENTREGA DE SOLICITUDES DE ESPECIALIDADES FARMACEUTICAS Y MATERIALES MEDICOS.', 'RC_6593_2012.pdf'),
(2, 'EF', 'RC-5767-2012', '2012-08-08', 'CITAS PARA ENTREGA DE SOLICITUDES DE ESPECIALIDADES FARMACEUTICAS ', 'RC_5767_2012.pdf'),
(3, 'EF', 'RC-C-5766-2012', '2012-08-08', 'ESTUDIOS CLINICOS DE BIODISPONIBILIDAD Y BIOEQUIVALENCIA.', 'RC_C_5766_2012.pdf'),
(4, 'EF', 'RC-C-0005-2012', '2012-03-05', 'FORMULARIO PARA LA SOLICITUD DE MODIFICACION DE ASPECTOS LEGALES EN LAS SOLICITUDES DE REGISTRO SANITARIO DE PRODUCTOS FARMACEUTICOS (E.F Y P.B)', 'RC_C_0005_2012.pdf'),
(5, 'EF', 'RC-C-003-2012', '2012-02-16', 'TEXTOS DE PRODUCTOS FARMACEUTICOS (E.F. Y P.B.)', 'RC_C_003_2012.pdf'),
(6, 'EF', 'RC-C-0004-2012', '2012-03-05', 'CAMBIO EN FORMULARIO PARA SOLICITUD DEL REGISTRO NACIONAL DE ESPECIALIDADES FARMACEUTICAS.', 'RC_C_0004_2012.pdf'),
(7, 'EF', 'RC-C-014-2011', '2011-12-20', 'NUMERO DE REGISTRO SANITARIO DE PRODUCTOS FARMACEUTICOS.', 'RC_C_014_2011.pdf'),
(8, 'EF', 'RC-C-10-2011', '2011-10-17', 'CAMBIO EN FORMULARIO PARA RENOVACION DEL REGISTRO SANITARIO DE ESPECIALIDADES FAMACEUTICAS. ', 'RC_C_10_2011.pdf'),
(9, 'EF', 'RC-C-09-2011', '2011-08-15', 'CIRCULAR RC-C-09-2011. ', 'RC_C_09_2011.pdf'),
(10, 'EF', 'RC-C-08-2011', '2011-07-25', 'CAMBIOS POSTREGISTRO TIPO IA. ', 'RC_C_08_2011.pdf'),
(11, 'EF', 'RC-C-07-2011', '2011-03-25', 'PROGRAMA ANUAL DE ESPECIALIDADES FARMACEUTICAS', 'RC_C_07_2011.pdf'),
(12, 'EF', 'RC-C-06-2011', '2011-03-10', 'TODA ESPECIALIDAD FARMACEUTICA A REGISTRAR QUE CONTENGA DIFERENTES SABORES DEBERA REALIZAR LA SOLICITUD DE REGISTRO EN FORMA INDIVIDUAL PARA CADA SABOR. ', 'RC_C_06_2011.pdf'),
(13, 'EF', 'RC-C-04-2011', '2011-02-14', 'LAS SOLICITUDES DE AUTORIZACION DE PUBLICIDAD Y PROMOCION DEBEN SER REALIZADAS EN IDIOMA ESPANNNOL. ', 'RC_C_04_2011.pdf'),
(14, 'EF', 'RC-C-01-2011', '2011-01-19', 'LAS SOLICITUDES DE REGISTRO SANITARIO UNA VEZ RECIBIDAS, SERAN REVISADAS APLICANDO EL FORMULARIO "INFORME PARA LA ADMISION DE LAS SOLICITUDES DE REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS.', 'RC_C_01_2011.pdf'),
(15, 'EF', 'RC-012-2010', '2010-12-03', 'FORMULARIO PARA SOLICITUD DE AUTORIZACION DE PROTOCOLOS CLINICOS PARA ESPECIALIDADES FARMACETICAS Y REPORTES DE REACCIONES ADVERSOS SERIOS. ', 'RC_012_2010.pdf'),
(16, 'EF', 'RC-011-2010', '2010-11-29', 'RECEPCION DE COMUNICACIONES Y NOTIFICACIONES DE COMERCIALIZACION DE PRODUCTOS COSMETICOS', 'RC_011_2010.pdf'),
(17, 'EF', 'RC-010-2010', '2010-11-15', 'NUMERO DE REGISTRO SANITARIO DE PRODUCTOS FARMACETICOS. ', 'RC_010_2010.pdf'),
(18, 'EF', 'DMUV-001-10', '2010-10-08', 'LISTA DE NUMERO DE MUESTRAS DE ESPECIALIDADES FARMACETICA QUE SERAN CAPTADAS PARA ANALISIS. ', 'DMUV_001_10.pdf'),
(19, 'EF', 'DM-004-10', '2010-06-21', 'ASPETOS QUE SE DEBEN TOMAR EN CUENTA PARA TODAS LAS CATEGORIAS DE SOLICITUDES DE REGISTRO SANITARIO ESPECIALIDADES FARMACEUTICAS. ', 'DM_004_10.pdf'),
(20, 'EF', 'S/N', '2010-06-21', 'EXTENSION DEL PLAZO PARA INCORPORACION DEL ANNNO EN LOS TEXTOS DEL NUMERO DE REGISTRO SANITARIO. ', 'SN1.pdf'),
(21, 'EF', 'S/N', '2010-06-21', 'EXTENSION DEL PLAZO PARA DAR RESPUESTA A LA CIRCULAR DM-003/10 DE FECHA 28/04/2010. ', 'SN2.pdf'),
(22, 'EF', 'DM-003-10', '2010-04-28', 'RESUMEN DE CARACTERISTICAS DE LA ESPECIALIDAD FARMACEUTICA Y DESCARGUE AQUI EL FORMATO, EL CUAL DEBE TRAER EN UN ARCHIVO DIGITAL DE MICROSOFT WORD COMPATIBLE VERSION 97-2003.', 'DM_003_10.pdf'),
(23, 'EF', 'DM-002-10', '2010-04-21', 'PROTOCOLOS CLINICOS DE ESPECIALIDADES FARMACEUTICAS - REACCIONES ADVERSAS.', 'DM_002_10.pdf'),
(24, 'EF', 'RC-C-007-2010', '2010-05-03', 'FORMULARIOS PARA CAMBIOS POST-REGISTRO LEGALES Y CLINICOS DE ESPECIALIDADES FARMACEUTICAS.', 'RC_C_007_2010.pdf'),
(25, 'EF', 'UV-003-09', '2009-07-16', 'PRORROGAS DE COMERCIALIZACION.', 'UV_003_09.pdf'),
(26, 'EF', 'CN-002-09', '2009-06-09', 'SOLICITUD DE REGISTRO O POST-REGISTRO ANTE LA DIVISION DE ESPECIALIDADES FARMACEUTICAS. (PODRA DESCARGAR EL FORMULARIO EN EL VINCULO DE REGISTRO SANITARIO, CAMBIOS DE POST-REGISTRO O EN RENOVACION DE REGISTRO SANITARIO)', 'CN_002_09.pdf'),
(27, 'EF', 'RC-C-003-2009', '2009-05-25', 'EXTENSION PERIODO DE RECEPCION DE RENOVACION REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS.', 'RC_C_003_2009.pdf'),
(28, 'EF', 'RC-001-2009', '2009-04-01', 'TALLER DE CAPACITACION EN EL USO DEL SISTEMA DE NOTIFICACION DE REACCIONES ADVERSAS VIA INTERNET, DEL CENTRO NACIONAL DE FARMACOVIGILANCIA (CENAVIF).', 'RC_001_2009.pdf'),
(29, 'EF', 'DM-001-2009', '2009-03-04', 'REMITIR EN FORMATO DIGITAL Y FISICO LAS METODOLOGIAS DE ANALISIS.', 'DM_001_2009.pdf'),
(30, 'EF', 'CE-001-09', '2009-02-09', 'DOCUMENTACION A SER CONSIGNANDA PARA EL CENAVIF.', 'CE_001_09.pdf'),
(31, 'EF', 'UV-001-09', '2009-02-09', 'GARANTIZAR LA EXISTENCIA DE MUESTRAS EN EL SITIO DE FABRICACION O DISTRIBUCION.', 'UV_001_09.pdf'),
(32, 'EF', 'RC-015-2008', '2008-12-01', 'PRORROGA SOLICITUD DE RENOVACIONES DE REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS.', 'RC_015_2008.pdf'),
(33, 'EF', 'DM-009-08', '2008-10-06', 'A PARTIR DEL 20/10/2008 LA SOLICITUD DE REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS DEBEN PRESENTARSE CON RECAUDOS DIGITALIZADOS EN CD.', 'DM_009_08.pdf'),
(34, 'EF', 'RC-C-08-05', '2008-08-14', 'RENOVACION DEL REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS.', 'RC_C_08_05.pdf'),
(35, 'EF', 'RC-C-09-05', '2008-08-14', 'REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS Y PRODUCTOS BIOLOGICOS.', 'RC_C_09_05.pdf'),
(36, 'EF', 'RC-C-011-2008', '2008-09-10', 'PROCESO RENOVACION DEL REGISTRO SANITARIO DE ESPECIALIDADES FARMCEUTICAS.', 'RC_C_011_2008.pdf'),
(37, 'EF', 'RC-C-012-2008', '2008-09-10', 'OFICIO DE APROBACION DEL REGISTRO SANITARIO DE ESPECIALIDADES FARMCEUTICAS Y PRODUCTOS BIOLOGICOS.', 'RC_C_012_2008.pdf'),
(38, 'EF', 'RC-C-013-2008', '2008-09-10', 'ELIMINACION DEL REQUISITO DE RESPUESTA A COMPROMISOS DEL REGISTRO SANITARIO DE ESPECIALIDADES FARMCEUTICAS Y PRODUCTOS BIOLOGICOS.', 'RC_C_013_2008.pdf'),
(39, 'PB', 'RC-C-09-2010', '2011-08-15', 'CIRCULAR RC-09-2011. ', 'RC_C_09_2010.pdf'),
(40, 'PB', 'RC-C-08-2010', '2011-07-25', 'CAMBIOS POSTREGISTRO TIPO IA. ', 'RC_C_08_2010.pdf'),
(41, 'PB', 'RC-010-2010', '2010-11-15', 'NUMERO DE REGISTRO SANITARIODE PRODUCTOS FARMACEUTICOS. ', 'RC_010_2010.pdf'),
(42, 'PB', 'S/N', '2010-06-21', 'EXTENSION DEL PLAZO PARA INCORPORACION DEL ANNNO EN LOS TEXTOS DEL NUMERO DE REGISTRO SANITARIO. ', 'SN3.pdf'),
(43, 'PB', 'PB-002-10', '2010-01-15', 'INFORMACION CLINICA DIGITAL PARA SOLICITUDES DE REGISTRO DE PRODUCTOS BIOLOGICOS.', 'PB_002_10.pdf'),
(44, 'PB', 'PB-001-10', '2010-01-15', 'PROGRAMA NACIONAL DE CONTROL DE PRODUCTOS BIOLOGICOS.', 'PB_001_10.pdf'),
(45, 'PB', 'PB-006-09', '2009-10-27', 'FORMULARIO DE SOLICITUD DE AUTORIZACION DE PROTOCOLO CLINICO PARA PRODUCTOS BIOLOGICOS.', 'PB_006_09.pdf'),
(46, 'PB', 'PB-005-09', '2009-10-21', 'VIGENCIA DE REGISTRO SANITARIO DE PRODUCTOS BIOLOGICOS.', 'PB_005_09.pdf'),
(47, 'PB', 'PB-004-09', '2009-09-24', 'FORMULARIO DE LIBERACION DE LOTES DE PRODUCTOS BIOLOGICOS.', 'PB_004_09.pdf'),
(48, 'PB', 'PB-003-09', '2009-06-20', 'REMISION DE CONDICIONES DE COMERCIALIZACION.', 'PB_003_09.pdf'),
(49, 'PB', 'PB-002-09', '2009-06-20', 'NUEVO FORMULARIO DE SOLICITUD PARA EVALUACION DE KIT DE BIOLOGICOS PARA DIAGNOSTICO.', 'PB_002_09.pdf'),
(50, 'PB', 'RC-C-002-2009', '2009-05-11', 'CANCELACION DE SERVICIOS.', 'RC_C_002_2009.pdf'),
(51, 'PB', 'PB-001-09', '2009-05-04', 'AUTORIZACION PARA EL RETIRO DE CORRESPONDENCIA EN LA DIVISION CONTROL NACIONAL DE PRODUCTOS BIOLOGICOS.', 'PB_001_09.pdf'),
(52, 'PA', 'RC-006-2012', '2012-02-22', 'SOLICITUDES DE ENSAYO DE ALIMENTOS', 'RC_006_2012.pdf'),
(53, 'PA', 'DA001-09', '2009-02-18', 'HORARIO ENTREGA DE INFORME DE ENSAYO.', 'DA001_09.pdf'),
(54, 'PA', 'S/N', '2008-10-06', 'APROBACION DE MANUAL DE NORMAS Y PROCEDIMIENTO DE LA DIVISION DE CONTROL DE ALIMENTOS. ', 'SN4.pdf'),
(55, 'PA', 'S/N', '2008-04-01', 'SOLICITUDES DE AUDIENCIA, ESTATUS DE PRODUCTOS Y FORMULARIOS. ', 'SN5.pdf'),
(56, 'PC', 'RC-C-0008-2012', '2012-06-29', 'INFORMACION A LOS FARMACEUTICOS(AS) PATROCINANTES Y EMPRESAS FABRICANTES Y/O COMERCIALIZADORAS DE PRODUCTOS COSMETICOS.', 'RC_C_0008_2012.pdf'),
(57, 'PC', 'RC-C-0002-2012', '2012-01-18', 'INFORMACION A LOS FARMACEUTICOS(AS) PATROCINANTES DE PRODUCTOS COSMETICOS.', 'RC_C_0002_2012.pdf'),
(58, 'PC', 'RC-C-0007-2012', '2012-02-24', 'INFORMACION A LOS FARMACEUTICOS(AS) PATROCINANTES DE PRODUCTOS COSMETICOS.', 'RC_C_0007_2012.pdf'),
(59, 'PC', 'RC-C-0001-2012', '2012-01-18', 'INFORMACION A LOS FARMACEUTICOS(AS) PATROCINANTES DE PRODUCTOS COSMETICOS.', 'RC_C_0001_2012.pdf'),
(60, 'PC', 'RC-C-09-2011', '2011-08-15', 'INFORMACION CAMARAS FARMACEUTICAS, LABORATORIOS FARMACEUTICOS, CASAS DE REPRESENTACION, FARMACEUTICOS PATROCINANTES, INSTITUCIONES PUBLICAS EN GENERAL.', 'RC_C_09_2011.pdf'),
(61, 'PC', 'RC-C-08-2011', '2011-05-25', 'LISTADO DE PRODUCTOS COSMETICOS NOTIFICADOS', 'RC_C_08_2011.pdf'),
(62, 'PC', 'RC-C-05-2011', '2011-03-14', 'NOTIFICACION DE COMERCIALIZACION DE PRODUCTOS COSMETICOS. ', 'RC_C_05_2011.pdf'),
(63, 'PC', 'RC-C-002-2011', '2011-01-21', 'ACTUALIZACION DE DATOS', 'RC_C_002_2011.pdf'),
(64, 'PC', 'RC-C-03-2011', '2011-02-07', 'VIGENCIA DE LA NOTIFICACION SANITARIA OBLIGATORIA Y FECHA DE VENCIMIENTO DEL LOTE DE PRODUCTO CONSIGNADO. ', 'RC_C_03_2011.pdf'),
(65, 'CE', 'CE 004-09', '2009-12-02', 'REPORTES DE EVENTOS ADVERSOS APROBADOS POR LA JUNTA REVISORA DE PRODUCTOS FARMACEUTICOS SERAN REMITIDOS EN FORMA IMPRESA A LA SECCION DE FARMACOLOGIA CLINICA SANITARIA. ', 'CE_004_09.pdf'),
(66, 'CE', 'CE 003-09', '2009-08-10', 'CUMPLIMIENTO ARTICULO NO.32 CAPITULO V DE LA LEY DE MEDICAMENTOS.', 'CE_003_09.pdf'),
(67, 'CE', 'CE 002-09', '2009-04-20', 'DOCUMENTACION REDACTADA EN IDIOMA EXTRANJERO DEBERA INCLUIR SU TRADUCCION EN ESPANNNOL. ', 'CE_002_09.pdf'),
(68, 'EF', 'RC-3740-2013', '2013-11-15', 'RECEPCION DE SOLICITUDES DE SERVICIOS DE ESPECIALIDADES FARMACEUTICAS Y PRODUCTOS BIOLOGICOS', 'RC-3740-2013.pdf'),
(69, 'PB', 'RC-3740-2013', '2013-11-15', 'RECEPCION DE SOLICITUDES DE SERVICIOS DE ESPECIALIDADES FARMACEUTICAS Y PRODUCTOS BIOLOGICOS', 'RC-3740-2013.pdf'),
(70, 'PC', 'RC-3290-2013', '2013-10-23', 'EVALUACION CON FINES DE VIGILANCIA POST-COMERCIALIZACION DE COSMETICOS', 'RC-3290-2013.pdf'),
(71, 'PE', 'PE-178-2012', '2012-02-10', 'NORMATIVA PARA EL PAGO DE SERVICIOS', 'PE-178-2012.pdf'),
(72, 'PE', 'PE-333-2013', '2013-04-22', 'REEMBOLSO DE PAGOS POR SERVICIOS', 'PE-333-2013.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circulares_rc2`
--

CREATE TABLE IF NOT EXISTS `circulares_rc2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_circular` varchar(3) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `titulo` text NOT NULL,
  `resumen` text NOT NULL,
  `justificacion` text NOT NULL,
  `adjunto` varchar(20) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  `ubicacion_circular` varchar(25) NOT NULL,
  `fecha_recepcion` date NOT NULL,
  `hora_recepcion` time NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `hora_publicacion` time NOT NULL,
  `nombre_publicador` varchar(50) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `numero_control` varchar(10) NOT NULL,
  `siglas_unidad_solicitante` varchar(2) NOT NULL,
  `responsable_solicitud` varchar(50) NOT NULL,
  `email_solicitante` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Circulares de la Gerencia RC' AUTO_INCREMENT=80 ;

--
-- Volcado de datos para la tabla `circulares_rc2`
--

INSERT INTO `circulares_rc2` (`id`, `tipo_circular`, `numero`, `fecha_creacion`, `titulo`, `resumen`, `justificacion`, `adjunto`, `cod_estado`, `ubicacion_circular`, `fecha_recepcion`, `hora_recepcion`, `fecha_publicacion`, `hora_publicacion`, `nombre_publicador`, `fecha_solicitud`, `numero_control`, `siglas_unidad_solicitante`, `responsable_solicitud`, `email_solicitante`) VALUES
(1, 'EF', 'RC-6593-2012', '2012-09-12', 'MODIFICACION DEL SISTEMA DE CITAS PARA ENTREGA DE SOLICITUDES DE ESPECIALIDADES FARMACEUTICAS Y MATERIALES MEDICOS.', '', '', 'RC_6593_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(2, 'EF', 'RC-5767-2012', '2012-08-08', 'CITAS PARA ENTREGA DE SOLICITUDES DE ESPECIALIDADES FARMACEUTICAS ', '', '', 'RC_5767_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(3, 'EF', 'RC-C-5766-2012', '2012-08-08', 'ESTUDIOS CLINICOS DE BIODISPONIBILIDAD Y BIOEQUIVALENCIA.', '', '', 'RC_C_5766_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(4, 'EF', 'RC-C-0005-2012', '2012-03-05', 'FORMULARIO PARA LA SOLICITUD DE MODIFICACION DE ASPECTOS LEGALES EN LAS SOLICITUDES DE REGISTRO SANITARIO DE PRODUCTOS FARMACEUTICOS (E.F Y P.B)', '', '', 'RC_C_0005_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(5, 'EF', 'RC-C-003-2012', '2012-02-16', 'TEXTOS DE PRODUCTOS FARMACEUTICOS (E.F. Y P.B.)', '', '', 'RC_C_003_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(6, 'EF', 'RC-C-0004-2012', '2012-03-05', 'CAMBIO EN FORMULARIO PARA SOLICITUD DEL REGISTRO NACIONAL DE ESPECIALIDADES FARMACEUTICAS.', '', '', 'RC_C_0004_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(7, 'EF', 'RC-C-014-2011', '2011-12-20', 'NUMERO DE REGISTRO SANITARIO DE PRODUCTOS FARMACEUTICOS.', '', '', 'RC_C_014_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(8, 'EF', 'RC-C-10-2011', '2011-10-17', 'CAMBIO EN FORMULARIO PARA RENOVACION DEL REGISTRO SANITARIO DE ESPECIALIDADES FAMACEUTICAS. ', '', '', 'RC_C_10_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(9, 'EF', 'RC-C-09-2011', '2011-08-15', 'CIRCULAR RC-C-09-2011. ', '', '', 'RC_C_09_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(10, 'EF', 'RC-C-08-2011', '2011-07-25', 'CAMBIOS POSTREGISTRO TIPO IA. ', '', '', 'RC_C_08_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(11, 'EF', 'RC-C-07-2011', '2011-03-25', 'PROGRAMA ANUAL DE ESPECIALIDADES FARMACEUTICAS', '', '', 'RC_C_07_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(12, 'EF', 'RC-C-06-2011', '2011-03-10', 'TODA ESPECIALIDAD FARMACEUTICA A REGISTRAR QUE CONTENGA DIFERENTES SABORES DEBERA REALIZAR LA SOLICITUD DE REGISTRO EN FORMA INDIVIDUAL PARA CADA SABOR. ', '', '', 'RC_C_06_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(13, 'EF', 'RC-C-04-2011', '2011-02-14', 'LAS SOLICITUDES DE AUTORIZACION DE PUBLICIDAD Y PROMOCION DEBEN SER REALIZADAS EN IDIOMA ESPANNNOL. ', '', '', 'RC_C_04_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(14, 'EF', 'RC-C-01-2011', '2011-01-19', 'LAS SOLICITUDES DE REGISTRO SANITARIO UNA VEZ RECIBIDAS, SERAN REVISADAS APLICANDO EL FORMULARIO "INFORME PARA LA ADMISION DE LAS SOLICITUDES DE REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS.', '', '', 'RC_C_01_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(15, 'EF', 'RC-012-2010', '2010-12-03', 'FORMULARIO PARA SOLICITUD DE AUTORIZACION DE PROTOCOLOS CLINICOS PARA ESPECIALIDADES FARMACETICAS Y REPORTES DE REACCIONES ADVERSOS SERIOS. ', '', '', 'RC_012_2010.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(16, 'EF', 'RC-011-2010', '2010-11-29', 'RECEPCION DE COMUNICACIONES Y NOTIFICACIONES DE COMERCIALIZACION DE PRODUCTOS COSMETICOS', '', '', 'RC_011_2010.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(17, 'EF', 'RC-010-2010', '2010-11-15', 'NUMERO DE REGISTRO SANITARIO DE PRODUCTOS FARMACETICOS. ', '', '', 'RC_010_2010.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(18, 'EF', 'DMUV-001-10', '2010-10-08', 'LISTA DE NUMERO DE MUESTRAS DE ESPECIALIDADES FARMACETICA QUE SERAN CAPTADAS PARA ANALISIS. ', '', '', 'DMUV_001_10.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(19, 'EF', 'DM-004-10', '2010-06-21', 'ASPETOS QUE SE DEBEN TOMAR EN CUENTA PARA TODAS LAS CATEGORIAS DE SOLICITUDES DE REGISTRO SANITARIO ESPECIALIDADES FARMACEUTICAS. ', '', '', 'DM_004_10.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(20, 'EF', 'S/N', '2010-06-21', 'EXTENSION DEL PLAZO PARA INCORPORACION DEL ANNNO EN LOS TEXTOS DEL NUMERO DE REGISTRO SANITARIO. ', '', '', 'SN1.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(21, 'EF', 'S/N', '2010-06-21', 'EXTENSION DEL PLAZO PARA DAR RESPUESTA A LA CIRCULAR DM-003/10 DE FECHA 28/04/2010. ', '', '', 'SN2.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(22, 'EF', 'DM-003-10', '2010-04-28', 'RESUMEN DE CARACTERISTICAS DE LA ESPECIALIDAD FARMACEUTICA Y DESCARGUE AQUI EL FORMATO, EL CUAL DEBE TRAER EN UN ARCHIVO DIGITAL DE MICROSOFT WORD COMPATIBLE VERSION 97-2003.', '', '', 'DM_003_10.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(23, 'EF', 'DM-002-10', '2010-04-21', 'PROTOCOLOS CLINICOS DE ESPECIALIDADES FARMACEUTICAS - REACCIONES ADVERSAS.', '', '', 'DM_002_10.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(24, 'EF', 'RC-C-007-2010', '2010-05-03', 'FORMULARIOS PARA CAMBIOS POST-REGISTRO LEGALES Y CLINICOS DE ESPECIALIDADES FARMACEUTICAS.', '', '', 'RC_C_007_2010.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(25, 'EF', 'UV-003-09', '2009-07-16', 'PRORROGAS DE COMERCIALIZACION.', '', '', 'UV_003_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(26, 'EF', 'CN-002-09', '2009-06-09', 'SOLICITUD DE REGISTRO O POST-REGISTRO ANTE LA DIVISION DE ESPECIALIDADES FARMACEUTICAS. (PODRA DESCARGAR EL FORMULARIO EN EL VINCULO DE REGISTRO SANITARIO, CAMBIOS DE POST-REGISTRO O EN RENOVACION DE REGISTRO SANITARIO)', '', '', 'CN_002_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(27, 'EF', 'RC-C-003-2009', '2009-05-25', 'EXTENSION PERIODO DE RECEPCION DE RENOVACION REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS.', '', '', 'RC_C_003_2009.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(28, 'EF', 'RC-001-2009', '2009-04-01', 'TALLER DE CAPACITACION EN EL USO DEL SISTEMA DE NOTIFICACION DE REACCIONES ADVERSAS VIA INTERNET, DEL CENTRO NACIONAL DE FARMACOVIGILANCIA (CENAVIF).', '', '', 'RC_001_2009.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(29, 'EF', 'DM-001-2009', '2009-03-04', 'REMITIR EN FORMATO DIGITAL Y FISICO LAS METODOLOGIAS DE ANALISIS.', '', '', 'DM_001_2009.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(30, 'EF', 'CE-001-09', '2009-02-09', 'DOCUMENTACION A SER CONSIGNANDA PARA EL CENAVIF.', '', '', 'CE_001_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(31, 'EF', 'UV-001-09', '2009-02-09', 'GARANTIZAR LA EXISTENCIA DE MUESTRAS EN EL SITIO DE FABRICACION O DISTRIBUCION.', '', '', 'UV_001_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(32, 'EF', 'RC-015-2008', '2008-12-01', 'PRORROGA SOLICITUD DE RENOVACIONES DE REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS.', '', '', 'RC_015_2008.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(33, 'EF', 'DM-009-08', '2008-10-06', 'A PARTIR DEL 20/10/2008 LA SOLICITUD DE REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS DEBEN PRESENTARSE CON RECAUDOS DIGITALIZADOS EN CD.', '', '', 'DM_009_08.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(34, 'EF', 'RC-C-08-05', '2008-08-14', 'RENOVACION DEL REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS.', '', '', 'RC_C_08_05.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(35, 'EF', 'RC-C-09-05', '2008-08-14', 'REGISTRO SANITARIO DE ESPECIALIDADES FARMACEUTICAS Y PRODUCTOS BIOLOGICOS.', '', '', 'RC_C_09_05.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(36, 'EF', 'RC-C-011-2008', '2008-09-10', 'PROCESO RENOVACION DEL REGISTRO SANITARIO DE ESPECIALIDADES FARMCEUTICAS.', '', '', 'RC_C_011_2008.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(37, 'EF', 'RC-C-012-2008', '2008-09-10', 'OFICIO DE APROBACION DEL REGISTRO SANITARIO DE ESPECIALIDADES FARMCEUTICAS Y PRODUCTOS BIOLOGICOS.', '', '', 'RC_C_012_2008.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(38, 'EF', 'RC-C-013-2008', '2008-09-10', 'ELIMINACION DEL REQUISITO DE RESPUESTA A COMPROMISOS DEL REGISTRO SANITARIO DE ESPECIALIDADES FARMCEUTICAS Y PRODUCTOS BIOLOGICOS.', '', '', 'RC_C_013_2008.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(39, 'PB', 'RC-C-09-2010', '2011-08-15', 'CIRCULAR RC-09-2011. ', '', '', 'RC_C_09_2010.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(40, 'PB', 'RC-C-08-2010', '2011-07-25', 'CAMBIOS POSTREGISTRO TIPO IA. ', '', '', 'RC_C_08_2010.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(41, 'PB', 'RC-010-2010', '2010-11-15', 'NUMERO DE REGISTRO SANITARIODE PRODUCTOS FARMACEUTICOS. ', '', '', 'RC_010_2010.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(42, 'PB', 'S/N', '2010-06-21', 'EXTENSION DEL PLAZO PARA INCORPORACION DEL ANNNO EN LOS TEXTOS DEL NUMERO DE REGISTRO SANITARIO. ', '', '', 'SN3.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(43, 'PB', 'PB-002-10', '2010-01-15', 'INFORMACION CLINICA DIGITAL PARA SOLICITUDES DE REGISTRO DE PRODUCTOS BIOLOGICOS.', '', '', 'PB_002_10.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(44, 'PB', 'PB-001-10', '2010-01-15', 'PROGRAMA NACIONAL DE CONTROL DE PRODUCTOS BIOLOGICOS.', '', '', 'PB_001_10.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(45, 'PB', 'PB-006-09', '2009-10-27', 'FORMULARIO DE SOLICITUD DE AUTORIZACION DE PROTOCOLO CLINICO PARA PRODUCTOS BIOLOGICOS.', '', '', 'PB_006_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(46, 'PB', 'PB-005-09', '2009-10-21', 'VIGENCIA DE REGISTRO SANITARIO DE PRODUCTOS BIOLOGICOS.', '', '', 'PB_005_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(47, 'PB', 'PB-004-09', '2009-09-24', 'FORMULARIO DE LIBERACION DE LOTES DE PRODUCTOS BIOLOGICOS.', '', '', 'PB_004_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(48, 'PB', 'PB-003-09', '2009-06-20', 'REMISION DE CONDICIONES DE COMERCIALIZACION.', '', '', 'PB_003_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(49, 'PB', 'PB-002-09', '2009-06-20', 'NUEVO FORMULARIO DE SOLICITUD PARA EVALUACION DE KIT DE BIOLOGICOS PARA DIAGNOSTICO.', '', '', 'PB_002_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(50, 'PB', 'RC-C-002-2009', '2009-05-11', 'CANCELACION DE SERVICIOS.', '', '', 'RC_C_002_2009.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(51, 'PB', 'PB-001-09', '2009-05-04', 'AUTORIZACION PARA EL RETIRO DE CORRESPONDENCIA EN LA DIVISION CONTROL NACIONAL DE PRODUCTOS BIOLOGICOS.', '', '', 'PB_001_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(52, 'PA', 'RC-006-2012', '2012-02-22', 'SOLICITUDES DE ENSAYO DE ALIMENTOS', '', '', 'RC_006_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(53, 'PA', 'DA001-09', '2009-02-18', 'HORARIO ENTREGA DE INFORME DE ENSAYO.', '', '', 'DA001_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(54, 'PA', 'S/N', '2008-10-06', 'APROBACION DE MANUAL DE NORMAS Y PROCEDIMIENTO DE LA DIVISION DE CONTROL DE ALIMENTOS. ', '', '', 'SN4.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(55, 'PA', 'S/N', '2008-04-01', 'SOLICITUDES DE AUDIENCIA, ESTATUS DE PRODUCTOS Y FORMULARIOS. ', '', '', 'SN5.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(56, 'PC', 'RC-C-0008-2012', '2012-06-29', 'INFORMACION A LOS FARMACEUTICOS(AS) PATROCINANTES Y EMPRESAS FABRICANTES Y/O COMERCIALIZADORAS DE PRODUCTOS COSMETICOS.', '', '', 'RC_C_0008_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(57, 'PC', 'RC-C-0002-2012', '2012-01-18', 'INFORMACION A LOS FARMACEUTICOS(AS) PATROCINANTES DE PRODUCTOS COSMETICOS.', '', '', 'RC_C_0002_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(58, 'PC', 'RC-C-0007-2012', '2012-02-24', 'INFORMACION A LOS FARMACEUTICOS(AS) PATROCINANTES DE PRODUCTOS COSMETICOS.', '', '', 'RC_C_0007_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(59, 'PC', 'RC-C-0001-2012', '2012-01-18', 'INFORMACION A LOS FARMACEUTICOS(AS) PATROCINANTES DE PRODUCTOS COSMETICOS.', '', '', 'RC_C_0001_2012.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(60, 'PC', 'RC-C-09-2011', '2011-08-15', 'INFORMACION CAMARAS FARMACEUTICAS, LABORATORIOS FARMACEUTICOS, CASAS DE REPRESENTACION, FARMACEUTICOS PATROCINANTES, INSTITUCIONES PUBLICAS EN GENERAL.', '', '', 'RC_C_09_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(61, 'PC', 'RC-C-08-2011', '2011-05-25', 'LISTADO DE PRODUCTOS COSMETICOS NOTIFICADOS', '', '', 'RC_C_08_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(62, 'PC', 'RC-C-05-2011', '2011-03-14', 'NOTIFICACION DE COMERCIALIZACION DE PRODUCTOS COSMETICOS. ', '', '', 'RC_C_05_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(63, 'PC', 'RC-C-002-2011', '2011-01-21', 'ACTUALIZACION DE DATOS', '', '', 'RC_C_002_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(64, 'PC', 'RC-C-03-2011', '2011-02-07', 'VIGENCIA DE LA NOTIFICACION SANITARIA OBLIGATORIA Y FECHA DE VENCIMIENTO DEL LOTE DE PRODUCTO CONSIGNADO. ', '', '', 'RC_C_03_2011.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(65, 'CE', 'CE 004-09', '2009-12-02', 'REPORTES DE EVENTOS ADVERSOS APROBADOS POR LA JUNTA REVISORA DE PRODUCTOS FARMACEUTICOS SERAN REMITIDOS EN FORMA IMPRESA A LA SECCION DE FARMACOLOGIA CLINICA SANITARIA. ', '', '', 'CE_004_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(66, 'CE', 'CE 003-09', '2009-08-10', 'CUMPLIMIENTO ARTICULO NO.32 CAPITULO V DE LA LEY DE MEDICAMENTOS.', '', '', 'CE_003_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(67, 'CE', 'CE 002-09', '2009-04-20', 'DOCUMENTACION REDACTADA EN IDIOMA EXTRANJERO DEBERA INCLUIR SU TRADUCCION EN ESPANNNOL. ', '', '', 'CE_002_09.pdf', 1, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(69, 'PB', 'RC-3740-2013', '2013-11-15', 'RECEPCION DE SOLICITUDES DE SERVICIOS DE ESPECIALIDADES FARMACEUTICAS Y PRODUCTOS BIOLOGICOS', 'SE RECIBIRAN SOLICITUDES DE REGISTRO SANITARIO, RENOVACIONES Y CAMBIOS POSTREGISTRO DE ESPECIALIDADES FARMACEUTICAS Y PRODUCTOS BIOLOGICOS HASTA EL 29-11-2013, REINICIANDO DICHAS ACTIVIDADES EL DIA 03-02-2014', 'Información de Interés para las Cámaras Farmacéuticas, Laboratorios Farmacéuticos, Casas de Representación y Farmacéuticos Patrocinantes.', 'RC-3740-2013.pdf', 1, 'RC;PB', '2013-11-19', '00:00:00', '2013-11-19', '11:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2013-11-19', '', 'RC', 'DRA. MARIA TERESA IBARZ', 'mibarz@inhrr.gob.ve'),
(70, 'PC', 'RC-3290-2013', '2013-10-23', 'EVALUACION CON FINES DE VIGILANCIA POST-COMERCIALIZACION DE COSMETICOS', 'CUANDO LAS MUESTRAS A CONSIGNAR PARA EVALUACION CON FINES DE VIGILANCIA POST-COMERCIALIZACION DE COSMETICOS DIFIERE DE LO APROBADO POR EL MPPS, DEBEN VENIR ACOMPAÑADAS DE UNA CARTA EXPICATIVA', 'DEBE COINCIDIR LA MUESTRA CON LO APROBADO POR EL MINISTERIO POPULAR PARA LA SALUD', 'RC-3290-2013.pdf', 1, ' PC', '2013-10-28', '07:55:00', '2013-10-28', '10:30:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2013-10-28', 'PC-001', 'RC', 'DRA. MARIA TERESA IBARZ', 'mibarz@inhrr.gob.ve'),
(71, 'PE', 'PE-178-2012', '2012-02-10', 'NORMATIVA PARA EL PAGO DE SERVICIOS', '', '', 'PE-178-2012.pdf', 2, ' ', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '', '0000-00-00', '', '', '', ''),
(72, 'PE', 'PE-333-2013', '2013-04-22', 'REEMBOLSO DE PAGOS Y NOTIFICACIÓN ADMISION DE REGISTROS', 'Notificación a la Industria y tramitantes en general', 'Circular y Notificación', 'PE-333-2013.pdf', 1, 'RC;EF;PB', '2013-05-02', '09:00:00', '2013-05-02', '09:50:00', 'DOMINGO ILARRETA', '2013-04-22', 'RC', 'RC', 'MARIA TERESA IBARZ', 'mibarz@inhrr.gob.ve'),
(74, 'PE', 'RC-3575-2013', '2013-11-07', 'INCORPORACION DE ESPECIALIDADES FARMACEUTICAS Y PRODUCTOS BIOLOGICOS REGISTRADOS AL SISTEMA SIVERC <b class="verde nuevo_menu">NUEVO</b>', '', '', 'RC-3575-2013.pdf', 1, 'RC;EF;PB', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'RC', 'MARIA TERESA IBARZ', 'mibarz@inhrr.gob.ve'),
(75, 'PE', 'RC-3563-2013', '2013-11-07', 'PROYECTO DE NORMA PARA EL REGISTRO SANITARIO Y FARMACOVIGILANCIA DE PRODUCTOS BIOTERAPEUTICOS SIMILARES <b class="verde nuevo_menu">NUEVO</b>', '', '', 'RC-3563-2013.pdf''', 1, 'RC;PB', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'RC', 'MARIA TERESA IBARZ', 'mibarz@inhrr.gob.ve'),
(76, 'RC', 'RC-0395-2014', '2014-01-15', 'PROCESO DE ADMISIÓN DE SOLICITUDES DE REGISTRO SANITARIO DE ESPECIALIDADES FARMACÉUTICAS Y PRODUCTOS BIOLÓGICOS', '', '', 'RC-0395-2014.pdf', 1, 'RC;EF;PB', '2014-01-31', '12:00:00', '2014-01-31', '01:30:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2014-01-31', '', 'RC', 'MARIA TERESA IBARZ', 'mibarz@inhrr.gob.ve'),
(77, 'RC', 'RC-0397-2014', '2014-01-15', 'CERTIFICADO DE PRODUCTO FARMACÉUTICO', '', '', 'RC-0397-2014.pdf', 1, 'RC;EF', '2014-01-31', '12:00:00', '2014-01-31', '01:30:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2014-01-31', '', 'RC', 'MARIA TERESA IBARZ', 'mibarz@inhrr.gob.ve'),
(78, 'RC', 'RC-0121-2014', '2014-01-14', 'ESTUDIOS DE ESTABILIDAD DE PRODUCTOS FARMACÉUTICOS', 'Estudios de Estabilidad', 'Información de Interés para las Cámaras Farmacéuticas, Laboratorios Farmacéuticos, Casas de Representación y Farmacéuticos Patrocinantes.', 'RC-0121-2014.jpg', 1, 'RC', '2014-01-21', '12:00:00', '2014-01-21', '12:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2014-01-21', '', 'RC', 'MARIA TERESA IBARZ', 'mibarz@inhrr.gob.ve'),
(79, 'RC', 'PE-N-064-2014', '2014-02-10', 'CIRCULAR - NORMATIVA PARA EL PAGO DE SERVICIOS', '', '', 'PE-N-064-2014.jpg', 1, 'RC', '2014-02-11', '09:00:00', '2014-02-11', '09:50:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2014-02-11', '', 'RC', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision_contrataciones`
--

CREATE TABLE IF NOT EXISTS `comision_contrataciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(20) NOT NULL,
  `titulo` text NOT NULL,
  `detalles` text NOT NULL,
  `fecha` date NOT NULL,
  `adjunto` varchar(35) NOT NULL,
  `cod_estatus` int(11) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  `fecha_recepcion` date NOT NULL,
  `hora_recepcion` time NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `hora_publicacion` time NOT NULL,
  `nombre_publicador` varchar(50) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `numero_control` varchar(10) NOT NULL,
  `siglas_unidad_solicitante` varchar(2) NOT NULL,
  `responsable_solicitud` varchar(50) NOT NULL,
  `email_solicitante` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Comision de Contrataciones' AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `comision_contrataciones`
--

INSERT INTO `comision_contrataciones` (`id`, `numero`, `titulo`, `detalles`, `fecha`, `adjunto`, `cod_estatus`, `cod_estado`, `fecha_recepcion`, `hora_recepcion`, `fecha_publicacion`, `hora_publicacion`, `nombre_publicador`, `fecha_solicitud`, `numero_control`, `siglas_unidad_solicitante`, `responsable_solicitud`, `email_solicitante`) VALUES
(1, 'CC-INHRR-03-2013', 'SELECCION DE UNA EMPRESA PARA QUE REALICE LA REHABILITACION DE LA ESTRUCTURA EXTERNA DEL EDIFICIO SEDE DEL INSTITUTO NACIONAL DE HIGIENE "RAFAEL RANGEL"', 'Invitación Concurso Cerrado Nº CC-INHRR-03-2013', '2013-08-22', 'cc_inhrr_03_2013.pdf', 2, 1, '2013-08-23', '12:40:00', '2013-08-23', '02:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2013-08-22', 'CC-010', 'LC', 'MILITZA CABRERA', 'mcabrera@inhrr.gob.ve'),
(2, 'CA-INHRR-05-2013', 'NOTIFICACION DE ADJUDICACION: CONCURSO ABIERTO Nº CA-INHRR-05-2013, CONTRATACION DEL SERVICIO DE LIMPIEZA Y MANTENIMIENTO DEL EDIFICIO PLANTA DE VACUNAS, AREAS PERIFERICAS Y AREAS VERDES DEL INSTITUTO NACIONAL DE HIGIENE "RAFAEL RANGEL"', 'Cumpliendo con lo establecido en el artículo 42, del Reglamento de la Ley de Contrataciones Públicas', '0000-00-00', 'CC-INHRR-05-2013.pdf', 1, 1, '2013-05-30', '10:10:00', '2013-05-30', '01:00:00', 'EMILY VIVAS', '2013-05-28', 'CC-008', 'LC', 'MILITZA CABRERA', 'mcabrera@inhrr.gob.ve'),
(3, 'CA-INHRR-06-2013', 'CONTRATACIÓN DE UNA EMPRESA QUE REALICE LA REMODELACIÓN DEL PISO CUATRO (4) DEL EDIFICIO SEDE DEL INSTITUTO NACIONAL DE HIGIENE "RAFAEL RANGEL" ', 'LLAMADO A PARTICIPAR EN CONCURSO ABIERTO. Cumpliendo con lo previsto en el artículo 57 de la Ley de Contrataciones Públicas y su Reglamento.', '0000-00-00', 'CA-INHRR-06-2013.pdf', 1, 2, '2013-05-31', '08:25:00', '2013-05-31', '09:40:00', 'EMILY VIVAS', '2013-05-30', 'CC-009', 'LC', 'MILITZA CABRERA', 'mcabrera@inhrr.gob.ve'),
(4, 'CA-INHRR-02-2013', 'NOTIFICACIÓN DE LOS RESULTADOS DEL CONCURSO ABIERTO Nº CA-INHRR-02-2013, CONTRATACIÓN DEL SERVICIO DE LIMIPIEZA Y MANTENIMIENTO DEL EDIFICIO SEDE, PLANTA DE VACUNAS, ÁREAS PERIFÉRICAS Y AREAS VERDES DEL INSTITUTO NACIONAL DE HIGIENE "RAFAEL RANGEL". (DESIERTO)', 'Actualizar el aviso correspondiente a la apertura del mismo proceso. Justificación: Cumpliendo con los establecido en el artículo 42, del Reglamento de la Ley de Contrataciones Públicas.', '2013-04-10', 'CA_INHRR_02_2013_desierto.pdf', 3, 1, '2013-04-16', '08:49:00', '2013-04-17', '08:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2013-04-09', 'CC-005', 'LC', 'MILITZA CABRERA', 'mcabrera@inhrr.gob.ve'),
(5, 'CA-INHRR-01-2013', 'NOTIFICACIÓN DE LOS RESULTADOS DEL CONCURSO ABIERTO Nº CA-INHRR-01-2013, CONTRATACIÓN DEL SERVICIO DE TARJETAS ELECTRÓNICAS PARA EL CUMPLIMIENTO DEL BONO DE ALIMENTACIÓN DEL PERSONAL ADSCRITO AL INSTITUTO NACIONAL DE HIGIENE "RAFAEL RANGEL". (DESIERTO)', 'Actualizar el aviso correspondiente a la apertura del mismo proceso. Justificación: Cumpliendo con lo establecido en el artículo 42, del Reglamento de la Ley de Contrataciones Públicas.', '2013-04-10', 'CA_INHRR_01_2013_desierto.pdf', 3, 1, '2013-04-16', '08:44:00', '2013-04-17', '09:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2013-04-09', 'CC-004', 'LC', 'MILITZA CABRERA', 'mcabrera@inhrr.gob.ve'),
(6, 'CA-INHRR-04-2013', 'ADQUISICIÓN DE SESENTA MIL (60.000) PRUEBAS DE REACTIVOS PARA LA DETERMINACIÓN DE SUB POBLACIONES LINFOCITARIAS (CD4, CD8 Y CD3), NECESARIAS PARA GARANTIZAR SEGUIMIENTO  INMUNOLÓGICO A LOS PACIENTES (VIH) POSITIVOS', 'LLAMADO A PARTICIPAR EN CONCURSO ABIERTO. Justificación: Cumpliendo con lo previsto en el artículo 57 de la Ley de Reforma Parcial de la Ley de Contrataciones Públicas.', '0000-00-00', 'CA_INHRR_04_2013.pdf', 1, 1, '2013-04-16', '08:49:00', '2013-04-17', '08:00:00', 'EMILY VIVAS', '2013-04-15', 'CC-006', 'LC', 'MILITZA CABRERA', 'mcabrera@inhrr.gob.ve'),
(7, 'CA-INHRR-04-2012', 'ADQUISICIÓN DE REACTIVOS PARA LA DETERMINACIÓN DE INMUNOFENOTIPAJE (CD4 Y CD8) A PACIENTES INFECTADOS CON EL VIRUS DE LA INMUNODEFICIENCIA HUMANA (VIH)', '', '2011-10-02', 'CA-INHRR-04-2012-1.pdf', 4, 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'LC', '', ''),
(8, 'CA-INHRR-03-2012', 'PRÓRROGA DEL CONCURSO ABIERTO Nº CA-INHRR-03-2012, ADQUISICIÓN DE REACTIVOS PARA LA DETERMINACIÓN DE LA CARGA VIRAL A PACIENTES INFECTADOS CON EL VIRUS DE LA INMUNODEFICIENCIA HUMANA (VIH).', '', '0000-00-00', 'CA-INHRR-03-2012.pdf', 1, 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'LC', '', ''),
(9, 'CA-INHRR-02-2012', 'CONTRATACIÓN DEL SERVICIO DE LIMPIEZA Y MANTENIMIENTO DEL EDIFICIO SEDE, EDIFICIO DE LA NUEVA PLANTA DE VACUNAS, ÁREAS PERIFÉRICAS Y MANTENIMIENTO DE ÁREAS VERDES DEL INSTITUTO NACIONAL DE HIGIENE “RAFAEL RANGEL”.', '', '0000-00-00', 'CA-INHRR-02-2012.pdf', 1, 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'LC', '', ''),
(10, 'CA-INHRR-01-2012', 'CONTRATACIÓN DEL SERVICIO DE LAVADO Y PLANCHADO DE UNIFORMES Y LENCERÍA DEL PERSONAL DE LABORATORIO Y OTRAS UNIDADES DEL INSTITUTO NACIONAL DE HIGIENE “RAFAEL RANGEL”.', '', '0000-00-00', 'CA-INHRR-01-2012-desierto.pdf', 3, 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'LC', '', ''),
(11, 'CA-INHRR-07-2013', 'ADQUISICIÓN DE CONSUMIBLES (MEMBRANAS, FILTROS, PREFILTROS, CAPSULAS Y CARTUCHOS); NECESARIOS PARA LA PURIFICACIÓN, ESTERILIZACIÓN Y FILTRACIÓN EN PROCESOS DE PRODUCCIÓN REALIZADOS EN LOS LABORATORIOS DE ANÁLISIS DEL INHRR.', 'LLMADO A PARTICIPAR EN CONCURSO ABIERTO. Cumpliendo con lo previsto en el artículo 57 de la Ley de Contrataciones Públicas y su Reglamento.', '2014-01-20', 'CA-INHRR-07-2013.pdf', 1, 1, '2014-01-21', '11:00:00', '2014-01-21', '01:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2014-01-17', 'CC-001', 'LC', 'Militza Cabrera', 'mcabrera@inhrr.gob.ve'),
(12, 'CA-INHRR-01-2014', 'ADQUISICIÓN DE SESENTA MIL (60.000) PRUEBAS DE REACTIVOS PARA LA DETERMINACIÓN DE SUB-POBLACIONES LINFOCITARIAS (CD4, CD8 Y CD3), NECESARIAS PARA GARANTIZAR SEGUIMIENTO INMUNOLÓGICO A LOS PACIENTES (VIH) POSITIVOS.', 'LLAMADO A PARTICIPAR EN CONCURSO ABIERTO, Cumpliendo con lo previsto en el artículo 57 de la Ley de Contrataciones Públicas y su Reglamento.', '2014-01-30', 'CA-INHRR-01-2014.pdf', 1, 1, '2014-02-03', '12:26:00', '2014-02-03', '01:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2014-01-30', 'CC-002', 'LC', 'Militza Cabrera', 'mcabrera@inhrr.gob.ve'),
(13, 'CA-INHRR-02-2014', 'ADQUISICIÓN DE MATERIALES DE PAPELERÍA E INSUMOS DE OFICINA, PARA EL INSTITUTO NACIONAL DE HIGIENE "RAFAEL RANGEL"', 'Llamado a Participar en Concurso Abierto, Cumpliendo con lo previsto en el Artículo 57 de la Ley de Contrataciones Públicas y su Reglamento', '2014-02-10', 'CA-INHRR-02-2014.pdf', 1, 1, '2014-02-11', '10:22:00', '2014-02-11', '11:15:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '2014-02-10', 'CC-003', 'LC', 'MILITZA CABRERA', 'mcabrera@inhrr.gob.ve');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicaciones_jr`
--

CREATE TABLE IF NOT EXISTS `comunicaciones_jr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `fecha` date NOT NULL,
  `adjunto` varchar(60) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  `fecha_recepcion` date NOT NULL,
  `hora_recepcion` time NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `hora_publicacion` time NOT NULL,
  `nombre_publicador` varchar(50) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `numero_control` varchar(10) NOT NULL,
  `siglas_unidad_solicitante` varchar(2) NOT NULL,
  `responsable_solicitud` varchar(50) NOT NULL,
  `email_solicitante` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Comunicaciones de la Junta Revisora' AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `comunicaciones_jr`
--

INSERT INTO `comunicaciones_jr` (`id`, `titulo`, `fecha`, `adjunto`, `cod_estado`, `fecha_recepcion`, `hora_recepcion`, `fecha_publicacion`, `hora_publicacion`, `nombre_publicador`, `fecha_solicitud`, `numero_control`, `siglas_unidad_solicitante`, `responsable_solicitud`, `email_solicitante`) VALUES
(1, 'CIRCULAR SOBRE VIGENCIA DE PUBLICIDAD Y PROMOCIÓN DE MEDICAMENTOS', '2013-04-09', 'circular18042013.pdf', 1, '2013-04-18', '12:32:00', '2013-04-18', '01:07:00', 'EMILY VIVAS', '2013-04-16', '', 'JR', 'DR. SANTOS YNOJOSA', 'synojosa@inhrr.gob.ve'),
(2, 'CONSULTA PÚBLICA DEL ANTEPROYECTO DE "NORMAS DE BUENA PRÁCTICA CLÍNICA PARA ENSAYOS CLÍNICOS".<br><b class="verde nuevo_menu">DICHO DUCUMENTO TENDRÁ UNA PRÓRROGA DESDE EL 17-02-2014 HASTA 24-02-2014</b>', '2013-11-29', 'JR-1311-2013.pdf', 1, '2013-12-10', '12:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'DR. SANTOS YNOJOSA', 'synojosa@inhrr.gob.ve'),
(3, 'MODIFICACIÓN DE LA NORMA DE JUNTA REVISORA DE PRODUCTOS FARMACÉUTICOS SECCIÓN ESPECIAL DE LAS INVESTIGACIONES EN FARMACOLOGÍA CLÍNICA, REGLAMENTO DE INVESTIGACIÓN EN FARMACOLOGÍA CLÍNICA', '2013-11-29', 'JR-1313-2013.pdf', 1, '2013-12-10', '12:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'DR. SANTOS YNOJOSA', 'synojosa@inhrr.gob.ve'),
(4, 'CIRCULAR SOBRE PROSPECTOS', '2012-01-30', 'Circular_sobre_prospectos_30_01_2012.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'DR. SANTOS YNOJOSA', 'synojosa@inhrr.gob.ve'),
(5, 'PRODUCTOS CONSTITUIDOS POR ESTATINAS', '2011-06-06', 'Circular06Jun2011.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'DR. SANTOS YNOJOSA', 'synojosa@inhrr.gob.ve'),
(6, 'PRÓRROGA PARA CORRECIONES DE PROSPECTOS', '2010-05-04', 'Circular04May2010.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'MIRNA BAFFI', 'mbaffi@inhrr.gob.ve'),
(7, 'DEROGACIÓN DE PÁRRAFO ÚNICO NUMERAL 8 ARTÍCULO 32 DE LA NORMA GENERAL SOBRE PROSPECTOS', '2009-11-11', 'Circular_11Nov2009.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'MIRNA BAFFI', 'mbaffi@inhrr.gob.ve'),
(8, 'DECISIÓN PARA MEDICAMENTOS ANTIHIPERTENSIVOS', '2009-09-10', 'Circular_10Sep2009.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', 'MIRNA BAFFI', 'mbaffi@inhrr.gob.ve'),
(9, 'CIRCULAR NORMAS ETIQUETAS Y EMPAQUES', '2006-03-03', 'Circular_03Mar2006.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(10, 'NORMA GENERAL SOBRE PROSPECTO', '2006-09-19', 'Norma_General_Prospectos.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(11, 'NORMA SOBRE PUBLICIDAD Y PROMOCIÓN DE ESPECIALIDADES FARMACÉUTICAS', '0000-00-00', 'Normas_Promocion_y_Publicidad.pdf', 1, '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(12, 'NORMA DE JUNTA REVISORA DE PRODUCTOS FARMACÉUTICOS SECCIÓN ESPECIAL DE LAS INVESTIGACIONES EN FARMACOLOGÍA CLÍNICA, REGLAMENTO DE INVESTIGACIÓN EN FARMACOLOGÍA CLÍNICA', '2013-11-28', 'circular_28-11-2013.pdf', 1, '0000-00-00', '00:00:00', '2013-12-20', '07:59:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concurso_estatus`
--

CREATE TABLE IF NOT EXISTS `concurso_estatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Estatus de un Concurso - Comision de Contrataciones' AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `concurso_estatus`
--

INSERT INTO `concurso_estatus` (`id`, `estatus`) VALUES
(1, 'CONCURSO ABIERTO'),
(2, 'CONCURSO CERRADO'),
(3, 'DESIERTO'),
(4, 'AMPLIACIÓN DE LAPSO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `codestado` varchar(50) NOT NULL DEFAULT '',
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codestado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`codestado`, `estado`) VALUES
('AMA', 'AMAZONAS'),
('ANZ', 'ANZOATEGUI'),
('APU', 'APURE'),
('ARA', 'ARAGUA'),
('BAR', 'BARINAS'),
('BOL', 'BOLIVAR'),
('CAR', 'CARABOBO'),
('COJ', 'COJEDES'),
('DA', 'DELTA AMACURO'),
('DC', 'DISTRITO CAPITAL'),
('FAL', 'FALCON'),
('GUA', 'GUARICO'),
('LAR', 'LARA'),
('MER', 'MERIDA'),
('MIR', 'MIRANDA'),
('MON', 'MONAGAS'),
('NE', 'NUEVA ESPARTA'),
('POR', 'PORTUGUESA'),
('SUC', 'SUCRE'),
('TAC', 'TACHIRA'),
('TRU', 'TRUJILLO'),
('VAR', 'VARGAS'),
('YAR', 'YARACUY'),
('ZUL', 'ZULIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_documento`
--

CREATE TABLE IF NOT EXISTS `estado_documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Estados de un Documento' AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estado_documento`
--

INSERT INTO `estado_documento` (`id`, `estado`) VALUES
(1, 'Habilitado'),
(2, 'Inhabilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formularios`
--

CREATE TABLE IF NOT EXISTS `formularios` (
  `tipo_producto` varchar(100) NOT NULL,
  `tipo_tramite` varchar(300) NOT NULL,
  `cod_form` varchar(20) NOT NULL,
  `titulo_form` varchar(200) NOT NULL,
  `adjunto_form` varchar(100) NOT NULL,
  `adjunto_inst` varchar(100) NOT NULL,
  `titulo_otro` varchar(200) NOT NULL,
  `adjunto_otro` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formularios`
--

INSERT INTO `formularios` (`tipo_producto`, `tipo_tramite`, `cod_form`, `titulo_form`, `adjunto_form`, `adjunto_inst`, `titulo_otro`, `adjunto_otro`) VALUES
('EF', 'REGISTRO SANITARIO', 'F-RCDM-023', 'Solicitud para el Registro Nacional de Productos Farmaceuticos', 'F-RCDM-023_solicitud_para_el_registro_nacional_de_productos_famaceuticos.doc', 'INSTRUCTIVO_DE_LLENADO_F-RCDM-023.pdf', '', ''),
('EF', 'REGISTRO SANITARIO', 'F-PERC-038', 'Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (ALMACÉN)', 'F_PERC_038_Almacen_SR.doc', 'Instructivo_de_Llenado_F-PERC-038.pdf', '', ''),
('EF', 'REGISTRO SANITARIO', 'F-PERC-039', 'Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (FARMACÉUTICO ADJUNTO AL PATROCINANTE)', 'F_PERC_039_Farmaceutico_Adjunto_SR.doc', 'Instructivo-de-Llenado-F-PERC-039.pdf', '', ''),
('EF', 'REGISTRO SANITARIO', 'F-PERC-040', 'Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (FARMACÉUTICO PATROCINANTE)', 'F_PERC_040_Farmaceutico_Patrocinante_SR.doc', 'Instructivo-de-Llenado-F-PERC-040.pdf', '', ''),
('EF', 'REGISTRO SANITARIO', 'F-PERC-041', 'Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (PROPIETARIO)', 'F_PERC_041_Propietario_SR.doc', 'Instructivo-de-Llenado-F-PERC-041.pdf', '', ''),
('EF', 'REGISTRO SANITARIO', 'F-PERC-042', 'Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (RAZÓN SOCIAL)', 'F_PERC_042_Razon Social_SR.doc', 'Instructivo-de-Llenado-F-PERC-042.pdf', '', ''),
('EF', 'REGISTRO SANITARIO', 'F-PERC-043', 'Modificaciones de la Solicitud de Registro Sanitario de Productos Farmacéuticos Nacionales e importados. Aspectos Legales. (REPRESENTANTE)', 'F_PERC_043_Representante_SR.doc', 'Instructivo-de-Llenado-F-PERC-043.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-010', 'Cambio Postregistro Aspectos Legales Farmaceutico', 'F_PERC_010_Farmaceutico_Patrocinante.doc', 'Instructivo_F_PERC_010_Farmaceutico_Patrocinante.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-011', 'Cambio Postregistro Aspectos Legales Farmaceutico Adjunto al Patrocinante', 'F_PERC_011_Farmaceutico_Adjunto.doc', 'Instructivo_F_PERC_011_Farmaceutico_Adjunto.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-012', 'Cambio Postregistro Aspectos Legales Propietario', 'F_PERC_012_Propietario.doc', 'Instructivo_F_PERC_012_Propietario.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-013', 'Cambio Postregistro Aspectos Legales Razón Social', 'F_PERC_013_Razon_Social.doc', 'Instructivo_F_PERC_013_Razon_Social.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-014', 'Cambio Postregistro Aspectos Legales Representante', 'F_PERC_014_Representante.doc', 'Instructivo_F_PERC_014_Representante.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-031', 'Cambio Postregistro Aspectos Legales Almacén', 'F_PERC_031_Almacen.doc', 'Instructivo_F_PERC_031_Almacen.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-015', 'Cambio Postregistro Aspectos Clínicos-Incorporación de Advertencias Recomendadas por la OMS/OPS', 'F_PERC_015_Advertencias_OMS_OPS.doc', 'Instructivo_F_PERC_015_Advertencias_OMS_OPS.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-016', 'Cambio Postregistro Aspectos Clínicos-Incorporación de Advertencias sugeridas por una Organización No Gubernamental o Sociedad Científica Independiente Reconocida', 'F_PERC_016_Advertencias_ONG.doc', 'Instructivo_F_PERC_016_Advertencias_ONG.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-017', 'Cambio Postregistro Aspectos Clínicos-Grupo Etario', 'F_PERC_017_Grupo_Etario.doc', 'Instructivo_F_PERC_017_Grupo_Etario.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-018', 'Cambio Postregistro Aspectos Clínicos-Indicación', 'F_PERC_018_Indicacion.doc', 'Instructivo_F_PERC_018_Indicacion.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-019', 'Cambio Postregistro Aspectos Clínicos-Presentación Previamente Autorizada a otro Producto Farmacéutico', 'F_PERC_019_Representación_IA.doc', 'Instructivo_F_PERC_019_Representación_IA.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-020', 'Cambio Postregistro Aspectos Clínicos-Nueva Presentación', 'F_PERC_020_Presentacion_IB.doc', 'Instructivo_F_PERC_020_Presentacion_IB.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-021', 'Cambio Postregistro Aspectos Clínicos-Rango Posológico', 'F_PERC_021_Rango_Posologico.doc', 'Instructivo_F_PERC_021_Rango_Posologico.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-022', 'Cambio Postregistro Aspectos Clínicos-Agregar Restricciones de Uso', 'F_PERC_022_Restricciones_de_Uso_IA.doc', 'Instructivo_F_PERC_022_Restricciones_de_Uso_IA.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-023', 'Cambio Postregistro Aspectos Clínicos-Eliminar Restricciones de Uso', 'F_PERC_023_Restricciones_de_Uso_IB.doc', 'Instructivo_F_PERC_023_Restricciones_de_Uso_IB.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-024', 'Cambio Postregistro Aspectos Clínicos-Vía de Administración', 'F_PERC_024_Via_de_Administracion.doc', 'Instructivo_F_PERC_024_Via_de_Administracion.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-025', 'Cambio Postregistro Textos', 'F_PERC_025_Textos.doc', 'Instructivo_F_PERC_025_Textos.pdf', '', ''),
('EF', 'CAMBIO POST-REGISTRO', 'F-PERC-026', 'Cambio Postregistro Etiqueta Autoadhesiva o Impresión Provisional', 'F_PERC_026_Etiquetas_Autoadhesivas.doc', 'Instructivo_F_PERC_026_Etiquetas_Autoadhesivas.pdf', '', ''),
('EF', 'RENOVACION REGISTRO SANITARIO', 'F-RCDM-007', 'Solicitud para Renovación del Registro Sanitario de Especialidades Farmacéuticas', 'F-RCDM-007-FORMULARIO.doc', 'F-RCDM-007-INSTRUCTIVO.doc', '', ''),
('EF', 'PROTOCOLOS CLINICOS', 'F-RCDM-011', 'Solicitud de Autorización de Protocolos Clínicos para Especialidades Farmacéuticas', 'F-RCDM-011_SAPC.doc', 'F-RCDM-011_SAPC_Instructivo.doc', '', ''),
('EF', 'PROTOCOLOS CLINICOS', 'F-RCDM-014', 'Reporte de Eventos Adversos Serios Nacionales en Estudios Clínicosde Especialidades Farmacéuticas', 'F-RCDM-014_Reprte_Eventos_Adversos ECEF.doc', 'F-RCDM-014_Reprte_Eventos_Adversos ECEF.pdf', '', ''),
('PB', 'REGISTRO SANITARIO DE VACUNAS', 'F-RCPB-017', 'Solicitud para el Registro Sanitario de Vacunas', 'F-RCPB-017.doc', 'F-RCPB-017_Instructivo.doc', '', 'F-RCPB-017_AnexoI.doc'),
('PB', 'LIBERACION DE LOTE DE PRODUCTOS BIOLOGICOS', 'F-RCPB-029', 'Solicitud de liberación de lote de productos biológicos', 'F-RCPB-029.doc', 'F-RCPB-029_Instructivo.doc', '', ''),
('PB', 'REGISTRO SANITARIO DE HEMODERIVADOS Y AFINES', 'F-RCPB-034', 'Solicitud para el Registro Sanitario de Hemoderivados y Afines', 'F-RCPB-034.doc', 'F-RCPB-034_Instructivo.doc', '', 'F-RCPB-034_AnexoI.doc'),
('PB', 'REGISTRO SANITARIO DE PRODUCTOS ADN Y RECOMBINANTES', 'F-RCPB-035', 'Solicitud para el Registro Sanitario de Productos ADN Recombinantes, Anticuerpos Monoclonales y Terapéuticos', 'F-RCPB-035.doc', 'F-RCPB-035_Instructivo.doc', '', 'F-RCPB-035_AnexoI.doc'),
('PB', 'RENOVACION REGISTRO SANITARIO', 'F-RCPB-007', 'Renovación del Registro Sanitario de Productos Biológicos', 'F-RCPB-007.doc', 'F-RCPB-007_Instructivo.doc', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES FARMACEUTICO PATROCINANTE', 'F-PERC-010', 'Cambio Postregistro Aspectos Legales Farmacéutico Patrocinante', 'F_PERC_010_Farmaceutico_Patrocinante.doc', 'Instructivo_F_PERC_010_Farmaceutico_Patrocinante.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES PROPIETARIO', 'F-PERC-012', 'Cambio Postregistro Aspectos Legales Propietario', 'F_PERC_012_Propietario.doc', 'Instructivo_F_PERC_012_Propietario.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES REPRESENTANTE', 'F-PERC-01', 'Cambio Postregistro Aspectos Legales Representante', 'F_PERC_014_Representante.doc', 'Instructivo_F_PERC_014_Representante.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES FARMACEUTICO ADJUNTO AL PATROCINANTE', 'F-PERC-011', 'Cambio Postregistro Aspectos Legales Farmacéutico Adjunto al Patrocinante', 'F_PERC_011_Farmaceutico_Adjunto.doc', 'Instructivo_F_PERC_011_Farmaceutico_Adjunto.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES RAZON SOCIAL', 'F-PERC-013', 'Cambio Postregistro Aspectos Legales Razón Social', 'F_PERC_013_Razon_Social.doc', 'Instructivo_F_PERC_013_Razon_Social.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES ALMACEN', 'F-PERC-031', 'Cambio Postregistro Aspectos Legales Almacén', 'F_PERC_031_Almacen.doc', 'Instructivo_F_PERC_031_Almacen.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - INCORPORACION DE ADVERTENCIAS RECOMENDADAS POR LA OMS / OPS', 'F-PERC-015', 'Cambio Postregistro Aspectos Clínicos - Incorporación de Advertencias Recomendadas por la OMS / OPS.', 'F_PERC_015_Advertencias_OMS_OPS.doc', 'Instructivo_F_PERC_015_Advertencias_OMS_OPS.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - INCORPORACION DE ADVERTENCIAS SUGERIDAS POR UNA ORGANIZACION NO GUBERNAMENTAL O SOCIEDAD CIENTIFICA INDEPENDIENTE RECONOCIDA', 'F-PERC-016', 'Cambio Postregistro Aspectos Clínicos - Incorporación de Advertencias Sugeridas por una Organización No Gubernamental o Sociedad Científica Independiente Reconocida', 'F_PERC_016_Advertencias_ONG.doc', 'Instructivo_F_PERC_016_Advertencias_ONG.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS CLiNICOS - GRUPO ETARIO', 'F-PERC-017', 'Cambio Postregistro Aspectos Clínicos - Grupo Etario', 'F_PERC_017_Grupo_Etario.doc', 'Instructivo_F_PERC_017_Grupo_Etario.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - INDICACION', 'F-PERC-018', 'Cambio Postregistro Aspectos Clínicos - Indicación', 'F_PERC_018_Indicacion.doc', 'Instructivo_F_PERC_018_Indicacion.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - PRESENTACION PREVIAMENTE AUTORIZADA A OTRO PRODUCTO FARMACEUTICO', 'F-PERC-019', 'Cambio Postregistro Aspectos Clínicos - Presentación Previamente Autorizada A Otro Productos Farmacéutico.', 'F_PERC_019_Presentacion_IA.doc', 'Instructivo_F_PERC_019_Presentacion_IA.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - NUEVA PRESENTACION', 'F-PERC-020', 'Cambio Postregistro Aspectos Clínicos - Nueva Presentación', 'F_PERC_020_Presentacion_IB.doc', 'Instructivo_F_PERC_020_Presentacion_IB.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - RANGO POSOLOGICO', 'F-PERC-021', 'Cambio Postregistro Aspectos Clínicos - Rango Posológico', 'F_PERC_021_Rango_Posologico.doc', 'Instructivo_F_PERC_021_Rango_Posologico.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - AGREGAR RESTRICCIONES DE USO', 'F-PERC-022', 'Cambio Postregistro Aspectos Clínicos - Agregar Restricciones de Uso', 'F_PERC_022_Restricciones_de_Uso_IA.doc', 'Instructivo_F_PERC_022_Restricciones_de_Uso_IA.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - ELIMINAR RESTRICCIONES DE USO', 'F-PERC-023', 'Cambio Postregistro Aspectos Clínicos - Eliminar Restricciones de Uso', 'F_PERC_023_Restricciones_de_Uso_IB.doc', 'Instructivo_F_PERC_023_Restricciones_de_Uso_IB.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS CLINICOS - VIA DE ADMINISTRACION', 'F-PERC-024', 'Cambio Postregistro Aspectos Clínicos - Vía De Administración.', 'F_PERC_024_Via_de_Administracion.doc', 'Instructivo_F_PERC_024_Via_de_Administracion.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO TEXTOS', 'F-PERC-025', 'Cambio Postregistro Textos', 'F_PERC_025_Textos.doc', 'Instructivo_F_PERC_025_Textos.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ETIQUETA AUTOADHESIVA O IMPRESION PROVISIONAL', 'F-PERC-026', 'Cambio Postregistro Etiqueta Autoadhesiva o Impresión Provisional', 'F_PERC_026_Etiquetas_Autoadhesivas.doc', 'Instructivo_F_PERC_026_Etiquetas_Autoadhesivas.pdf', '', ''),
('PB', 'CAMBIO POSTREGISTRO ASPECTOS FARMACEUTICOS', 'F-RCPB-038', 'Solicitud de Cambio Post-Registro para Producto Biológico Nacional e Importado. Aspectos Farmacéuticos', 'F-RCPB-038.doc', 'F-RCPB-038_Instructivo.doc', '', ''),
('PB', 'REPORTE DE DESVIACIONES EN LA CALIDAD', 'F-RCPB-023', 'Reporte de Desviaciones en la Calidad de Productos Biológicos', 'F-RCPB-023.doc', 'F-RCPB-023_Instructivo.doc', '', ''),
('PB', 'EVALUACION DE PRODUCTOS DE TECNOLOGIA MEDICA DE ORIGEN BIOLOGICO', 'F-RCPB-046', 'Solicitud de Evaluación de Productos de Tecnología Médica de Origen Biológico', 'F-RCPB-046.doc', 'F-RCPB-046_Instructivo.doc', '', ''),
('PB', 'EVALUACION DE ACCIDENTES EN CADENA DE FRIO', 'F-RCPB-022', 'Evaluación de Accidentes de Cadena de Frío para Productos Biológicos', 'F-RCPB-022.doc', 'F-RCPB-022_Instructivo.doc', '', ''),
('PB', 'EVALUACION DE KITS BIOLOGICOS PARA DIAGNOSTICO', 'F-RCPB-066', 'Solicitud para Evaluación de Kit Biológico para Diagnóstico', 'F-RCPB-066.doc', 'F-RCPB-066_Instructivo.doc', '', ''),
('PB', 'AUTORIZACION DE PROTOCOLOS CLINICOS PARA PRODUCTOS BIOLOGICOS', 'F-RCPB-064', 'Solicitud para Autorización de Protocolos Clínicos para Productos Biológicos', 'F-RCPB-064.doc', 'F-RCPB-064_Instructivo.doc', '', ''),
('PB', 'MODIFICACION SOLICITUD REGISTRO - ALMACEN', 'F-PERC-038', 'ALMACÉN', 'F_PERC_038_Almacen_SR.doc', 'Instructivo_de_Llenado_F-PERC-038.pdf', '', ''),
('PB', 'MODIFICACION SOLICITUD REGISTRO - FARMACEUTICO ADJUNTO AL PATROCINANTE', 'F-PERC-039', 'FARMACÉUTICO ADJUNTO AL PATROCINANTE', 'F-PERC-039 FARMACEUTICO ADJUNTO.doc', 'Instructivo-de-Llenado-F-PERC-039.pdf', '', ''),
('PB', 'MODIFICACION SOLICITUD REGISTRO - FARMACEUTICO PATROCINANTE', 'F-PERC-040', 'FARMACÉUTICO PATROCINANTE', 'F_PERC_040_Farmaceutico_Patrocinante_SR.doc', 'Instructivo-de-Llenado-F-PERC-040.pdf', '', ''),
('PB', 'MODIFICACION SOLICITUD REGISTRO - PROPIETARIO', 'F-PERC-041', 'PROPIETARIO', 'F_PERC_041_Propietario_SR.doc', 'Instructivo-de-Llenado-F-PERC-041.pdf', '', ''),
('PB', 'MODIFICACION SOLICITUD REGISTRO - RAZON SOCIAL', 'F-PERC-042', 'RAZÓN SOCIAL', 'F_PERC_042_Razon Social_SR.doc', 'Instructivo-de-Llenado-F-PERC-042.pdf', '', ''),
('PB', 'MODIFICACION SOLICITUD REGISTRO - REPRESENTANTE', 'F-PERC-043', 'REPRESENTANTE', 'F_PERC_043_Representante_SR.doc', 'Instructivo-de-Llenado-F-PERC-043.pdf', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lab_salud_publica`
--

CREATE TABLE IF NOT EXISTS `lab_salud_publica` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `codestado` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `responsable` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `pruebas` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telefono` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefono2` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `lab_salud_publica`
--

INSERT INTO `lab_salud_publica` (`id`, `codestado`, `responsable`, `pruebas`, `direccion`, `telefono`, `telefono2`, `correo`) VALUES
(1, 'AMA', 'LIC. KENYA GONZALEZ', 'RUBEOLA, SARAMPION, DENGUE, HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS, EBV, TOXOPLASMA, CMV.', 'CAICET, AV. PERIMETRAL, CERRO EL CAICET, PUERTO  AYACUCHO.', '04149993916     ', '', 'keniagb@cantv.net'),
(2, 'ANZ', 'LIC. IGNELSY RIVERO', 'RUBEOLA, SARAMPION,  DENGUE. HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS, TSH, PKU, EBV, TOXOPLASMA, CMV.', 'FINAL AVENIDA JUNCAL, BARRIO 29 DE MARZO, EDIFICIO MALARIOLOGIA BARCELONA.', '04148081446', '02814193031', 'ignelsyriveros@hotmail.com'),
(3, 'APU', 'LIC. DARLENIS PAEZ', 'DENGUE, HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS, TSH, PKU.', 'HOSPITAL “DR. PABLO ACOSTA ORTIZ”, LABORATORIO DE SALUD PUBLICA, AV. CARACAS - SAN FERNANDO DE APURE.', '04124399298', '02432420637', 'esterperezpaz@hotmail.com'),
(4, 'ARA', 'LIC. ESTHER PEREZ PAZ', 'HEPATITIS.A, HEPATITIS B, HEPATITIS C, VIH, TSH, PKU', 'LABORATORIO  HOSPITAL CENTRAL MARACAY, AVENIDA SUCRE. PARA ENVIO DE REACTIVOS: CORPORACION DE SALUD, DIRECCION DE EPIDEMIOLOGIA Y ATENCION INTEGRAL, MODULO 07-UNIDAD PROGRAMATICA  DE BIOANALISIS, AVE. LAS DELICIAS, FRENTE AL CIRCULO MILITAR. MARACAY.', '04124399298', '', ''),
(5, 'ARA', 'LIC. MARITZA QUINTANA', 'RUBÉOLA, SARAMPION, DENGUE', 'AVENIDA  MIRANDA ESTE,FRENTE TEATRO LA OPERA HOSPITAL CIVIL DE MARACAY.', '04144399182', '', 'quintanaplus@hotmail.com'),
(6, 'BAR', 'LIC. ZERUR YAZZAN', 'RUBEOLA,SARAMPION, DENGUE, HEPATITIS.A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS.', 'LABORATORIO DE SALUD PUBLICA, ANTIGUA SANIDAD AV. SAN LUIS, CRUCE CON CALLE MERIDA, BARINAS. ESTADO BARINAS.', '04145734889', '', 'maggyb150947@hotmail.com'),
(7, 'BAR', 'LIC. ZERUR YAZZAN', 'TSH Y PKU', 'HOSPITAL GENERAL “DR. LUIS RAZZETTY” LABORATORIO DE RUTINA CALLE CEDEÑO, SECTOR CENTRO, BARINAS, ESTADO BARINAS', '04245347111', '', 'yazzankountar@hotmail.com'),
(8, 'BOL', 'DRA. CRUZ CORDERO', 'RUBEOLA,SARAMPION, DENGUE, HEPATITIS A, HEPATITIS B, HEP. C, VIH, CHAGAS, TSH,PKU', 'DISTRITO SANITARIO Nº 2 CALLE 5A BARRIO LA UNIDAD, SERVICIO DE EPIDEMIOLOGIA  DISTRITAL,  SAN FELIX. ESTADO BOLIVAR.', '04148922104', '', 'cruzcorba@hotmail.com'),
(9, 'BOL', 'LIC. LUISA GAMBOA', 'DENGUE, HEPATITIS B., HEPATITIS C, VIH, CHAGAS', 'HOSPITAL ROSARIO VERA ZURITA, MUNICIPIO GRAN SABANA, SANTA ELENA DE UAIREN, ESTADO BOLIVAR.', '04148998713', '', 'omv2009@hotmail.com'),
(10, 'BOL', 'LIC. ARELIS GUILARTE', 'RUBEOLA,SARAMPION, DENGUE, HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS', 'HOSPITAL DEL TORAX, UNIDAD DE INMUNOLOGIA, AL LADO DEL HOSPITAL RUIZ Y PAEZ, CIUDAD BOLIVAR. ESTADO BOLIVAR.', '04249314562', '02856323718', 'aregui62@hotmail.com'),
(11, 'BOL', 'LIC. NATHALY ROSAL', 'DENGUE, HEPATITIS B., HEPATITIS C, VIH, CHAGAS', 'HOSPITAL DR. JOSE GREGORIO HERNANDEZ FINAL AVENIDA LAS TRES ROSAS  TUMEREMO, ESTADO BOLIVAR.', '04166873834', '02887710217', 'nathaliejrlab@hotmail.com'),
(12, 'BOL', 'LIC. ZORAIDA HIGUERA', 'DENGUE, HEPATITIS B., HEPATITIS C, VIH, CHAGAS', 'HOSPITAL DR. ARNOLDO GABALDON, CAICARA DEL ORINOCO, ESTADO BOLIVAR.', '04168859373', '02846667976', 'francys.mata78@gmail.com'),
(13, 'CAR', 'LIC. GEORGINA BARRETO', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS  A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS, ROTAVIRUS, TSH, PKU, EBV, CMV, TOXOPLASMA.', 'DIRECCION GENERAL DE SANEAMIENTO AMBIENTAL Y CONTRALORIA SANITARIA, LABORATORIO REGIONAL DE APOYO EPIDEMIOLÓGICO, PISO 2, UNIVERSIDAD DE CARABOBO, BARBULA, ESTADO CARABOBO.', '04144191691', '', 'georgi_389@hotmail.com'),
(14, 'COJ', 'LIC. NELLYS MIRABAL', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS, TSH, PKU, EBV, CMV, TOXOPLASMA', 'MALARIOLOGIA, REGION 22, LABORATORIO DE SEROLOGÍA, SAN CARLOS, ESTADO COJEDES.', '04126904035', '02584331738', 'nellis_mirabal@hotmail.com'),
(15, 'DA', 'LIC. MELBIC PALMA', 'DENGUE,  HEPATITIS B, HEPATITIS C, VIH, CHAGAS, TOXOPLASMA.', 'HOSPITAL LUIS RAZETTI, FINAL AVENIDA BOLIVAR, SERVICIO DE LABORATORIO, TUCUPITA, ESTADO DELTA AMACURO.', '04249412653', '02877212660', 'mervicpalma2308@hotmail.com'),
(16, 'DC', 'LIC. MARIA VIDAL', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS  A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS, TOXOPLASMA, EBV, CMV', 'COMPLEJO HOSPITALARIO EL ALGODONAL, DIVISION DE TUBERCULOSIS, LABORATORIO DE TBC, CARACAS.', '04164153299', '02124724258', 'losvigas@hotmail.com'),
(17, 'DC', 'LIC. YASMIN SANTAELLA', 'VIH', 'HOSPITAL MILITAR DR. CARLOS ARVELO DEPARTAMENTO DE INFECTOLOGIA, ALA  NORTE, PISO 1', '04242435375', '02124061105', ''),
(18, 'DC', 'LIC. NEYDA LOBATO', 'TSH, PKU', 'MATERNIDAD CONCEPCION PALACIOS. AV. SAN MARTIN CARACAS.', '04142470444', '02124620244', 'lobatoneyda@hotmail.com'),
(19, 'FAL', 'LIC. LEYDA URBINA', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS A, HEPATITIS B, HEPATITIS  C, VIH, CHAGAS, TSH, TOXOPLASMA, EBV, CMV', ' HOSPITAL VAN GRIEKEN, EPIDEMIOLOGIA REGIONAL, EDIFICIO DE SALUD MENTAL, AVENIDA TENNIS, CORO, ESTADO FALCON', '04162675001', '02682524476', 'leidaurbina@hotmail.com'),
(20, 'FAL', 'LIC. NILDA PELAYO', 'DENGUE, HEPATITIS B, HEPATITIS C, VIH, CHAGAS, RUBÉOLA, SARAMPIÓN', 'UNIDAD SANITARIA, AVENIDA RAFAEL GONZALEZ, ESQUINA CON AVENIDA JACINTO LARA, AL LADO DEL AMBULATORIO I.V.S.S., PUNTO FIJO, ESTADO FALCON.', '04120694222', '04168692681', 'emeydys_13@hotmail.com'),
(21, 'GUA', 'LIC. GLORIA RIVAS', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS, TSH, PKU', 'DIRECCION REGIONAL DE SALUD ANTIGUA SEDE DE MALARIOLOGIA, AVENIDA LUIS APARICIO, SAN JUAN DE LOS MORROS, ESTADO GUARICO.', '04269411812', '02464315280', 'rivasarevalo@yahoo.com'),
(22, 'GUA', 'LIC. EMILIA HERNANDEZ', 'DENGUE,  HEPATITIS B, HEPATITIS C, VIH, CHAGAS', 'HOSPITAL  “RAFAEL ZAMORA AREVALO” , VALLE DE LA PASCUA.', '04143350631', '02355110487', 'hernandezfemilia@hotmail.com'),
(23, 'GUA', 'LIC. YASMIN RAMIREZ', 'DENGUE, HEPATITIS B, HEPATITIS C VIH, CHAGAS', 'HOSPITAL DR. JOSE FRANCISCO TORREALBA CALLE LIBERTAD, ALTAGRACIA DE ORITUCO.', '04145638466', '02383342381', 'yasminramirez31@hotmail.es'),
(24, 'GUA', 'LIC. BEATRIZ OSUNA', 'DENGUE, HEPATITIS B, HEPATITIS C VIH, CHAGAS', 'HOSPITAL FRANCISCO URDANETA 5TA. AVENIDA, CENTRO ADMINISTRATIVO CALABOZO  ', '04165470051', '02466621525', 'bosunag@hotmail.com'),
(25, 'LAR', 'LIC. BELKIS CAMACARO', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS B, HEPATITIS C, VIH', 'MINSTERIO DE SALUD Y DESARROLLO SOCIAL, AVENIDA VARGAS, ENTRE CALLE 29 Y 39, EDIFICIO EPIDEMIOLOGIA REGIONAL, BARQUISIMETO. ', '04161545100', '02512524469', 'anitafreitez@hotmail.com'),
(26, 'MER', 'DR. JOSE A. MENDOZA', 'RUBEOLA, SARAMPION, DENGUE, HEP.A, HEP. B, HEP.C, VIH, CHAGAS. TSH, PKU. ', 'LABORATORIO DE MICROBIOLOGIA, HOSPITAL SOR JUANA INES DE LA CRUZ, AMBULATORIO VENEZUELA, UNIDAD DE LARGA ESTANCIA, MERIDA ', '04247031767', '02742403545', 'joseandres@ula.ve'),
(27, 'MER', 'LIC.RONALD VARELA', 'RUBEOLA, SARAMPION, DENGUE, HEP.A, HEP. B, HEP.C, VIH, CHAGAS', 'HOSPITAL EL VIGIA,  CALLE BOLIVAR, EL VIGIA, ESTADO MERIDA', '04163701466', '02742403545', 'mariacorreia.c63@gmail.com'),
(28, 'MIR', 'LIC. Elvimar Zamora', 'ACTUALMENTE EN REACTIVACIÓN, NO TENÍA PERSONAL', 'CENTRO DE SALUD DISTRITO SANITARIO Nº 4, CALLE LAS COLONIAS, CON CALLE AGRARIO NACIONAL, CAUCAGUA.', '04147527419', '02344461775', 'elvirita_za@hotmail.com'),
(29, 'MIR', 'LIC. SILVANA ACOSTA', 'DENGUE, HEPATITIS B, HEPATITIS C,  VIH, CHAGAS', 'UNIDAD SANITARIA LOS TEQUES, CALLE RIVAS, DISTRITO SANITARIO Nro 1, LOS TEQUES', '04140125625', '02123648329', 'mercheven@hotmail.com'),
(30, 'MON', 'LIC. SOREIME CABALLERO', 'DENGUE, RUBÉOLA, SARAMPION, HEPATITIS A, HEPATITIS B, HEPATITIS  C, VIH, CHAGAS, CMV, TOXOPLASMA, EBV', 'AV. LIBERTADOR, EDF. MALABIOLOGIA AL LADO DEL HOTEL MONAGAS INTERNACIONAL. MATURIN. ', '04143919867', '04168905720', 'soreimeelena@gmail.com'),
(31, 'NE', 'LIC. ANA MICHINI', 'DENGUE, RUBÉOLA, SARAMPION, HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH', 'HOSPITAL “LUIS ORTEGA”, SERVICIO DE ITS/SIDA, AVENIDA 4 DE MAYO, PORLAMAR', '04147929030', '02952630291', 'anamichini@hotmail.com'),
(32, 'POR', 'LIC. FRANSHER TORREALBA', 'DENGUE, HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS. TSH, PKU. CMV.', 'CENTRO DE INVESTIGACIONES DE VIROSIS HEMORRAGICAS Y ENFERMEDADES TRANSMISIBLES (CIVIHET) SECTOR LA COLINA PARTE ALTA, VIA ESCUELA GRANJA OSCAR VILLANUEVA, GUANARE.', '04162577770', '02574154289', 'fransher103@hotmail.com'),
(33, 'SUC', 'LIC. CARMEN ROSA FLORES', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS, TSH, PKU, TOXOPLASMA, EBV, CMV', ' EPIDEMIOLOGIA DE CUMANA, AVENIDA BOLIVAR, EDIFICIO FUNDASALUD, PISO 2, DETRAS DEL HOSPITAL ANTONIO PATRICIO ALCALA, CUMANA.', '04143934606', '02934319351', 'carflor68@hotmail.com'),
(34, 'SUC', 'LIC. ANDREINA TOTESOUT', 'DENGUE, HEPATITIS B, HEPATITIS C, VIH, TSH, PKU', 'HOSPITAL DR. ANDRES GUTIERREZ, GUIRIA.', '04248342941', '', ''),
(35, 'SUC', 'LIC. APARICIA RIVAS', 'DENGUE, HEPATITIS C, HEPATITIS B,VIH, CHAGAS, TSH,PKU', 'SERVICIO DE SANEAMIENTO AMBIENTAL, MALARIOLOGIA, ZONA 11, CARÚPANO.', '04147806918', '02943328437', 'apariciarivas@hotmail.com'),
(36, 'TAC', 'LIC. LAURA HERNANDEZ', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS,  TSH, PKU, EBV', 'UNIDAD SANITARIA SAN CRISTOBAL, LABORATORIO DE SALUD PUBLICA, CARRERA 6, ENTRE CALLES 14 Y 15, SAN CRISTOBAL.', '04125088030', '02763447437', 'laurayudith@hotmail.com'),
(37, 'TRU', 'LIC. DUILIA MAYIRA FLORES', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS,  TSH, PKU', 'SECTOR LA MORITA, EDIFICIO FUNDASALUD, EPIDEMIOLOGIA REGIONAL, TRUJILLO.', '04265750454', '02722361634', 'mayiraflores@hotmail.com'),
(38, 'VAR', 'LIC. ANA PEREZ', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS  A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS,  TSH, PKU, CMV, EBV.', 'AMBULATORIO LA GUAIRA, AVENIDA SOUBLETTE, LA GUAIRA', '04142675089', '02123329732', 'aeperezp@hotmail.com'),
(39, 'YAR', 'LIC.MARIA ELENA MOTA', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS  A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS,  TSH, PKU, CMV, EBV, TOXOPLASMA', 'LABORATORIO REGIONAL, 4ta. AVENIDA, ENTRE CALLES 4 Y 5, EDIF.. ACACIA, LOCAL 3, SAN FELIPE.', '04245377862', '02542346160', 'majomi.es@hotmail.com'),
(40, 'ZUL', 'LIC. ELINA CASTILLO', 'DENGUE, RUBEOLA, SARAMPION, HEPATITIS  A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS,  TSH, PKU, CMV, EBV, TOXOPLASMA', 'AMBULATORIO “DR. FRANCISCO GOMEZ PADRON”, ANTIGUA UNIDAD SANITARIA, LABORATORIO DE SALUD PUBLICA, SOTANO, SECTOR EL TRANSITO, CALLE 96, MARACAIBO.', '04146130398', '02617197124', 'elimarg2002@yahoo.es'),
(41, 'ZUL', 'DRA. ASUNTA COSTAGLIOLA', 'HEP. A, HEPATITIS B, HEPATITIS C, VIH, CHAGAS, TSH, PKU', 'HOSPITAL DE ESPECIALIDADES PEDIATRICAS, PROLONGACIÓN CIRCUNVALACIÓN 2, SECTOR PLAZA DE TOROS, VIA CIUDADELA FARIAS, MARACAIBO. ESTADO ZULIA.', '04146309205', '02613005036', 'assuntac3562@hotmail.com'),
(42, 'ZUL', 'LIC. MIRNA DELGADO', 'VIH', 'HOSPITAL GENERAL SANTA BARBARA, DEPARTAMENTO DE  LABORATORIOS, AVENIDA SANTO DOMINGO, FRENTE AL COMANDO DE LA GUARDIA NACIONAL, SANTA BARBARA. ESTADO ZULIA.', '04143758408', '02755552441', 'marisolc65@hotmail.com'),
(43, 'ZUL', 'LIC. KARELIS TROMPIZ', 'HEPATITIS B, HEPATITIS C., VIH, CHAGAS', 'AMBULATORIO EL LUCERO, FINAL AVENIDA ORIENTAL, SECTOR EL LUCERO, CABIMAS. ESTADO ZULIA.', '04163610607', '02648088431', 'karelystrompis@hotmail.com'),
(44, 'ZULIA', 'LIC. RAQUEL NAVA', 'HEPATITIS B, HEPATITIS C, VIH, CHAGAS.', 'AVENIDA ARTE, HOSPITAL NUESTRA SEÑORA DEL CARMEN, FRENTE DEPOSITOS EMPRESAS POLAR, MACHIQUES.', '04127516709', '04164634219', 'ingryquelis.@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_oculto`
--

CREATE TABLE IF NOT EXISTS `menu_oculto` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `menu` varchar(5) NOT NULL,
  `seccion` varchar(200) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  `title` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `menu_oculto`
--

INSERT INTO `menu_oculto` (`id`, `menu`, `seccion`, `ruta`, `title`) VALUES
(1, 'RC', 'Acerca de la Gerencia', 'mision_rc.php', 'Misión de la Gerencia Sectorial de Registro y Control'),
(2, 'RC', 'Acerca de la Gerencia', 'vision_rc.php', 'Visión de la Gerencia Sectorial de Registro y Control'),
(3, 'RC', 'Acerca de la Gerencia', 'productos_evaluados_rc.php', 'Productos Evaluados'),
(4, 'RC', 'Acerca de la Gerencia', 'funciones_rc.php', 'Funciones de la Gerencia Sectorial de Registro y Control'),
(5, 'RC', 'Acerca de la Gerencia', 'basamento_legal_rc.php', 'Basamento Legal'),
(6, 'RC', 'Acerca de la Gerencia', 'organigrama_rc.php', 'Organigrama'),
(7, 'RC', 'Acerca de la Gerencia', 'contactanos_rc.php', 'Contáctanos'),
(8, 'RC', 'Acerca de la Gerencia', 'quejas_rc.php', 'Quejas'),
(9, 'RC', 'Acerca de la Gerencia', 'discusion_normativas_rc.php', 'Discusión de Normativas'),
(10, 'RC', 'Acerca de la Gerencia', 'reconsideracion_dictamen_rc.php', 'Reconsideración a Dictamen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `normas_jr`
--

CREATE TABLE IF NOT EXISTS `normas_jr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `fecha` date NOT NULL,
  `adjunto` varchar(90) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  `numero_gaceta_oficial` text NOT NULL,
  `fecha_recepcion` date NOT NULL,
  `hora_recepcion` time NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `hora_publicacion` time NOT NULL,
  `nombre_publicador` varchar(50) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `numero_control` varchar(10) NOT NULL,
  `siglas_unidad_solicitante` varchar(2) NOT NULL,
  `responsable_solicitud` varchar(50) NOT NULL,
  `email_solicitante` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Normas de la Junta Revisora' AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `normas_jr`
--

INSERT INTO `normas_jr` (`id`, `titulo`, `fecha`, `adjunto`, `cod_estado`, `numero_gaceta_oficial`, `fecha_recepcion`, `hora_recepcion`, `fecha_publicacion`, `hora_publicacion`, `nombre_publicador`, `fecha_solicitud`, `numero_control`, `siglas_unidad_solicitante`, `responsable_solicitud`, `email_solicitante`) VALUES
(1, 'NORMAS VENEZOLANAS DE BIODISPONIBILIDAD Y BIOEQUIVALENCIA DE PRODUCTOS FARMACÉUTICOS', '2006-08-14', 'norma_venezolana_de_biodisponibilidad_y_bioequivalencia_de_productos_farmaceuticos.pdf', 1, 'Nº 38.499', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(2, 'NORMA DE PUBLICIDAD', '2004-06-23', 'gaceta_37966_norma_de_publicidad.pdf', 1, 'Nº 37.966', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMNGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(3, 'LEY DE MEDICAMENTOS', '2000-08-03', 'ley_de_medicamentos.pdf', 1, '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(4, 'LEY SOBRE TRANSPLANTE DE ÓRGANOS Y MATERIALES ANATÓMICOS EN SERES HUMANOS', '1999-12-03', 'ley-sobre-transplante-de-organos-y-materiales-anatomicos-en-seres-humanos.pdf', 1, 'Nº 4.497', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(5, 'NORMA DE MEDICAMENTO DE SERVICIO', '2011-09-21', 'norma_de_medicamento_de_servicio_21-09-11.pdf', 1, '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(6, 'NORMA PARA EL REGISTRO SANITARIO DE COMBINACIONES DE PRODUCTOS FARMACÉUTICOS', '0000-00-00', 'norma_para_el_registro_sanitario_de_combinaciones_de_productos_farmaceuticos.pdf', 1, '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', ''),
(7, 'NORMAS DE BUENAS PRÁCTICAS DE DISTRIBUCIÓN', '0000-00-00', 'normas_de_buenas_practicas_de_distribucion.pdf', 1, 'Nº 37966-23.0', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', 'DOMINGO JOSE ILARRETA HEYDRAS', '0000-00-00', '', 'JR', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `siglas` varchar(200) COLLATE utf8_bin NOT NULL,
  `item_texto` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `siglas`, `item_texto`) VALUES
(1, 'EF', 'Especialidades Farmacéuticas'),
(2, 'PB', 'Productos Biológicos'),
(3, 'PC', 'Productos Cosméticos'),
(4, 'PA', 'División de Alimentos'),
(5, 'PN', 'Productos Naturales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_ce`
--

CREATE TABLE IF NOT EXISTS `seccion_ce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(30) NOT NULL,
  `siglas` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Secciones de las Alertas del CENAVIF' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `seccion_ce`
--

INSERT INTO `seccion_ce` (`id`, `seccion`, `siglas`) VALUES
(1, 'Alertas de Calidad', 'AC'),
(2, 'Alertas de Seguridad', 'AS'),
(3, 'Medicamentos Ilícitos', 'MI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_alerta_ce`
--

CREATE TABLE IF NOT EXISTS `tipo_alerta_ce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(40) NOT NULL,
  `siglas` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tipos del Alertas del CENAVIF' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo_alerta_ce`
--

INSERT INTO `tipo_alerta_ce` (`id`, `tipo`, `siglas`) VALUES
(1, 'Especialidades Farmacéuticas', 'EF'),
(2, 'Productos Biológicos y Vacunas', 'PB'),
(3, 'Productos Naturales', 'PN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_norma_jr`
--

CREATE TABLE IF NOT EXISTS `tipo_norma_jr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Tipos de Normas de la Junta Revisora' AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_norma_jr`
--

INSERT INTO `tipo_norma_jr` (`id`, `tipo`) VALUES
(1, 'Interna'),
(2, 'Externa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite`
--

CREATE TABLE IF NOT EXISTS `tramite` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_padre` varchar(200) COLLATE utf8_bin NOT NULL,
  `item_texto2` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `tramite`
--

INSERT INTO `tramite` (`id`, `id_padre`, `item_texto2`) VALUES
(1, 'EF', 'REGISTRO SANITARIO'),
(2, 'EF', 'CAMBIOS POST-REGISTRO'),
(3, 'EF', 'RENOVACIÓN DE REGISTRO'),
(4, 'EF', 'PROTOCOLOS CLÍNICOS'),
(5, 'PB', 'REGISTRO SANITARIO DE HEMODERIVADOS Y AFINES'),
(6, 'PB', 'REGISTRO SANITARIO DE PRODUCTOS ADN RECOMBINANTES'),
(7, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS, INDICACIÓN'),
(8, 'PB', 'RENOVACIÓN DE REGISTRO SANITARIO'),
(9, 'PB', 'REGISTRO SANITARIO DE VACUNAS'),
(10, 'PB', 'LIBERACIÓN DE LOTES DE PRODUCTOS BIOLÓGICOS'),
(11, 'PB', 'CAMBIO POST-REGISTRO, ASPECTOS LEGALES FARMACÉUTICO PATROCINANTE'),
(12, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS LEGALES FARMACEUTICO ADJUNTO AL PATROCINANTE'),
(13, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS LEGALES PROPIETARIO'),
(14, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS LEGALES RAZÓN SOCIAL'),
(15, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS LEGALES REPRESENTANTE'),
(16, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS LEGALES ALMACÉN'),
(17, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS - INCORPORACIÓN DE ADVERTENCIAS RECOMENDADAS POR LA OMS / OPS'),
(18, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS - INCORPORACIÓN DE ADVERTENCIAS SUGERIDAS POR UNA ORGANIZACIÓN NO GUBERNAMENTAL O SOCIEDAD CIENTÍFICA INDEPENDIENTE RECONOCIDA'),
(19, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS - GRUPO ETARIO'),
(20, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS - INDICACIÓN'),
(21, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS - PRESENTACIÓN PREVIAMENTE AUTORIZADA A OTRO PRODUCTO FARMACÉUTICO'),
(22, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS - NUEVA PRESENTACIÓN'),
(23, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS - RANGO POSOLÓGICO'),
(24, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS - AGREGAR RESTRICCIONES DE USO'),
(25, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS - ELIMINAR RESTRICCIONES DE USO'),
(26, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS CLÍNICOS - VÍA DE ADMINISTRACIÓN'),
(27, 'PB', 'CAMBIO POST-REGISTRO TEXTOS'),
(28, 'PB', 'CAMBIO POST-REGISTRO ETIQUETA AUTOADHESIVA O IMPRESIÓN PROVISIONAL'),
(29, 'PB', 'CAMBIO POST-REGISTRO ASPECTOS FARMACEUTICOS'),
(30, 'PB', 'REPORTE DE DESVIACIONES EN LA CALIDAD'),
(31, 'PB', 'EVALUACION DE PRODUCTOS DE TECNOLOGIA MEDICA DE ORIGEN BIOLOGICO'),
(32, 'PB', 'EVALUACION DE ACCIDENTES EN CADENA DE FRIO'),
(33, 'PB', 'EVALUACION DE KITS BIOLOGICOS PARA DIAGNOSTICO'),
(34, 'PB', 'AUTORIZACIÓN DE PROTOCOLOS CLÍNICOS PARA PRODUCTOS BIOLÓGICOS'),
(35, 'PB', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES (ALMACÉN)'),
(36, 'PB', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES (FARMACÉUTICO ADJUNTO AL PATROCINANTE)'),
(37, 'PB', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES (FARMACÉUTICO PATROCINANTE)'),
(38, 'PB', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES (PROPIETARIO)'),
(39, 'PB', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES (RAZÓN SOCIAL)'),
(40, 'PB', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES (REPRESENTANTE)'),
(41, 'PB', 'REGISTRO SANITARIO DE VACUNAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramites`
--

CREATE TABLE IF NOT EXISTS `tramites` (
  `siglas` varchar(100) NOT NULL,
  `tipo_producto` varchar(100) NOT NULL,
  `nomb_producto` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tramites`
--

INSERT INTO `tramites` (`siglas`, `tipo_producto`, `nomb_producto`) VALUES
('EF', 'ESPECIALIDADES FARMACEUTICAS', 'REGISTRO SANITARIO'),
('EF', 'ESPECIALIDADES FARMACEUTICAS', 'CAMBIOS POST REGISTRO'),
('EF', 'ESPECIALIDADES FARMACEUTICAS', 'RENOVACION DE REGISTRO'),
('EF', 'ESPECIALIDADES FARMACEUTICAS', 'PROTOCOLOS CLINICOS'),
('PN', 'PRODUCTOS NATURALES', 'TRAMITE EVALUACION'),
('PC', 'PRODUCTOS COSMETICOS', 'FORMULARIOS DE SERVICIOS'),
('PA', 'PRODUCTOS ALIMENTOS', 'FORMULARIOS DE SERVICIOS'),
('PB', 'PRODUCTOS BIOLOGICOS', 'REGISTRO SANITARIO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'RENOVACION REGISTRO SANITARIO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'LIBERACIÓN DE LOTE DE PRODUCTOS BIOLÓGICOS'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES FARMACEUTICO PATROCINANTE'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES FARMACEUTICO ADJUNTO AL PATROCINANTE'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES PROPIETARIO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES RAZÓN SOCIAL'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES REPRESENTANTE'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS LEGALES ALMACÉN'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS CLÍNICOS - INCORPORACIÓN DE ADVERTENCIAS RECOMENDADAS POR LA OMS / OPS'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS CLÍNICOS - INCORPORACIÓN DE ADVERTENCIAS SUGERIDAS POR UNA ORGANIZACIÓN NO GUBERNAMENTAL O SOCIEDAD CIENTÍÍFICA INDEPENDIENTE RECONOCIDA'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS CLÍNICOS - GRUPO ETARIO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS CLÍNICOS - INDICACIÓN'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS CLÍNICOS - PRESENTACIÓN PREVIAMENTE AUTORIZADA A OTRO PRODUCTO FARMACÉUTICO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS CLÍNICOS - NUEVA PRESENTACIÓN'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS CLÍNICOS - RANGO POSOLÓGICO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS CLÍNICOS - AGREGAR RESTRICCIONES DE USO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS CLÍNICOS - ELIMINAR RESTRICCIONES DE USO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS CLÍNICOS - VÍA DE ADMINISTRACIÓN'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO TEXTOS'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ETIQUETA AUTOADHESIVA O IMPRESIÓN PROVISIONAL'),
('PB', 'PRODUCTOS BIOLOGICOS', 'CAMBIO POSTREGISTRO ASPECTOS FARMACEUTICOS'),
('PB', 'PRODUCTOS BIOLOGICOS', 'REPORTE DE DESVIACIONES EN LA CALIDAD'),
('PB', 'PRODUCTOS BIOLOGICOS', 'EVALUACION DE PRODUCTOS DE TECNOLOGIA MEDICA DE ORIGEN BIOLOGICO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'EVALUACION DE ACCIDENTES EN CADENA DE FRIO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'EVALUACION DE KITS BIOLOGICOS PARA DIAGNOSTICO'),
('PB', 'PRODUCTOS BIOLOGICOS', 'AUTORIZACIÓN DE PROTOCOLOS CLÍNICOS PARA PRODUCTOS BIOLÓGICOS '),
('PB', 'PRODUCTOS BIOLOGICOS', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES. (ALMACÉN)'),
('PB', 'PRODUCTOS BIOLOGICOS', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES. (FARMACÉUTICO ADJUNTO AL PATROCINANTE)'),
('PB', 'PRODUCTOS BIOLOGICOS', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES. (FARMACÉUTICO PATROCINANTE)'),
('PB', 'PRODUCTOS BIOLOGICOS', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES. (PROPIETARIO)'),
('PB', 'PRODUCTOS BIOLOGICOS', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES. (RAZÓN SOCIAL)'),
('PB', 'PRODUCTOS BIOLOGICOS', 'MODIFICACIONES DE LA SOLICITUD DE REGISTRO SANITARIO DE PRODUCTOS FARMACÉUTICOS NACIONALES E IMPORTADOS. ASPECTOS LEGALES. (REPRESENTANTE)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE IF NOT EXISTS `unidades` (
  `codunidad` char(2) NOT NULL DEFAULT '',
  `unidad` varchar(70) NOT NULL DEFAULT '',
  `nivel` char(1) NOT NULL DEFAULT '',
  `extension` varchar(20) DEFAULT NULL,
  `codedif` char(1) NOT NULL DEFAULT '',
  `piso` char(1) NOT NULL DEFAULT '',
  `depende` varchar(12) NOT NULL DEFAULT '',
  `cijefe` varchar(8) DEFAULT NULL,
  `activo` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`codunidad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`codunidad`, `unidad`, `nivel`, `extension`, `codedif`, `piso`, `depende`, `cijefe`, `activo`) VALUES
('AI', 'OFICINA DE AUDITORIA INTERNA', '1', '1606', 'A', '4', 'CDAI', '568924', 'S'),
('CG', 'COORDINACION DE CONTROL DE GESTION', '2', '', 'A', '4', 'CDAICG', '568924', 'N'),
('CP', 'COORDINACION DE CONTROL POSTERIOR', '2', '', 'A', '4', 'CDAICP', '568924', 'N'),
('RA', 'COORDINACION DE DETERMINACION DE RESPONSABILIDAD ADMINISTRATIVA', '2', '', 'A', '4', 'CDAIRA', '568924', 'N'),
('BR', 'BRIGADA CONTROL DE EMERGENCIAS', '0', '1689', 'A', '4', 'BR', '10815747', 'N'),
('CD', 'CONSEJO DIRECTIVO', '1', '', 'A', '4', 'CD', '3476407', 'N'),
('CJ', 'CONSULTORIA JURIDICA', '1', '1619', 'A', '4', 'PECJ', '5521362', 'S'),
('DE', 'GERENCIA SECTORIAL DE DIAGNOSTICO Y EPIDEMIOLOGIA', '1', '1698', 'A', '1', 'DE', '3338433', 'S'),
('ET', 'DIVISION DE DIAGNOSTICO Y ENFERMEDADES TRANSMISIBLES', '2', '1734', 'A', '1', 'DEET', '5527108', 'S'),
('BA', 'DEPARTAMENTO DE BACTERIOLOGIA', '3', '1704', 'A', '3', 'DEETBA', '4659203', 'S'),
('LB', 'LABORATORIO AISLAMIENTO E IDENTIFICACION BACTERIANA', '4', '1739', 'A', '3', 'DEETBALB', '6169390', 'S'),
('LD', 'LABORATORIO DIAGNOSTICOS ESPECIALES', '4', '1737', 'A', '3', 'DEETBALD', '6817269', 'S'),
('LS', 'LABORATORIO INMUNOSEROLOGIA BACTERIANA', '4', '1735', 'A', '3', 'DEETBALS', '', 'S'),
('MI', 'DEPARTAMENTO DE MICOLOGIA', '3', '1707', 'H', '1', 'DEETMI', '13225771', 'S'),
('VI', 'DEPARTAMENTO DE VIROLOGIA', '3', '', 'A', '1', 'DEETVI', '', 'S'),
('LA', 'LABORATORIO DE AISLAMIENTO VIRAL', '4', '1702', 'A', '1', 'DEETVILA', '3427785', 'S'),
('LI', 'LABORATORIO DE INMUNOSEROLOGIA VIRAL', '4', '1705', 'A', '1', 'DEETVILI', '4580965', 'S'),
('LP', 'LABORATORIO DE PROGRAMAS ESPECIALES (HEPATITIS Y SIDA)', '4', '1705', 'A', '1', 'DEETVILP', '''7095552', 'S'),
('VE', 'DIVISION DE VIGILANCIA EPIDEMIOLOGICA', '2', '1744', 'A', '1', 'DEVE', '', 'S'),
('AP', 'UNIDAD DE TOMA DE MUESTRAS Y ATENCON AL PACIENTE', '3', '1733', 'A', '1', 'DEVEAP', '6470216', 'S'),
('GA', 'GERENCIA SECTORIAL DE ADMINISTRACION', '1', '1638', 'A', '4', 'GA', '', 'S'),
('DC', 'DIVISION DE COMPRAS', '2', '1773', 'A', '4', 'GADC', '3410649', 'S'),
('DF', 'DIVISION DE FINANZAS', '2', '1640', 'A', '4', 'GADF', '13640753', 'S'),
('CO', 'DEPARTAMENTO DE CONTABILIDAD', '3', '1517', 'A', '4', 'GADFCO', '13833901', 'S'),
('BN', 'SECCION DE BIENES NACIONALES', '4', '1646', 'A', '4', 'GADFCOBN', '2180868', 'S'),
('TE', 'DEPARTAMENTO DE TESORERIA', '3', '1642', 'A', '4', 'GADFTE', '11241343', 'S'),
('CA', 'AREA DE CAJA', '4', '1643', 'A', '1', 'GADFTECA', '6849291', 'S'),
('MT', 'DIVISION DE MANTENIMIENTO TECNICO', '2', '1657', 'D', '1', 'GAMT', '4168794', 'S'),
('ED', 'TALLER DE ELECTRICIDAD', '3', '', 'D', '1', 'GAMTED', '4168794', 'N'),
('EL', 'TALLER DE ELECTRONICA', '3', '', 'D', '1', 'GAMTEL', '4168794', 'N'),
('PH', 'TALLER DE PLOMERIA Y HERRERIA', '3', '', 'D', '1', 'GAMTPH', '4168794', 'N'),
('RF', 'TALLER DE AIRE ACONDICIONADO Y REFRIGERACION', '3', '1500', 'D', '1', 'GAMTRF', '4168794', 'N'),
('UA', 'DEPARTAMENTO DE ALMACEN', '3', '1631', 'B', '1', 'GAMTUA', '11690460', 'S'),
('MV', 'DIVISION DE MERCADEO Y VENTAS', '2', '1658', 'A', '4', 'GAMV', '4417507', 'S'),
('SG', 'DIVISION DE SERVICIOS GENERALES', '2', '1651', 'B', '1', 'GASG', '6156121', 'S'),
('IM', 'DEPARTAMENTO DE IMPRENTA', '3', '1652', 'A', '3', 'GASGIM', '4247984', 'S'),
('SE', 'DEPARTAMENTO DE SERVICIOS', '3', '1653', 'B', '1', 'GASGSE', '6156121', 'S'),
('TR', 'DEPARTAMENTO DE TRANSPORTE', '3', '1653', 'B', '1', 'GASGTR', '6156121', 'S'),
('VG', 'DEPARTAMENTO DE VIGILANCIA', '3', '1654', 'A', '1', 'GASGVG', '6156121', 'S'),
('GC', 'GERENCIA DE GESTION DE LA CALIDAD', '1', '1617', 'A', '4', 'GC', '3561451', 'S'),
('AU', 'DIVISION DE AUDITORIAS DE LA CALIDAD', '2', '', 'A', '4', 'GCAU', '3561451', 'N'),
('DR', 'DIVISION DE DOCUMENTACION Y CONTROL DE LOS REGISTROS', '2', '', 'A', '4', 'GCDR', '3561451', 'N'),
('RL', 'DEPARTAMENTO DE LIBERACION DE LOTES', '3', '', 'A', '4', 'GCDRRL', '3561451', 'N'),
('VA', 'DIVISION DE CALIBRACION Y VALIDACION', '2', '', 'A', '4', 'GCVA', '3561451', 'N'),
('GG', 'GERENCIA GENERAL', '1', '', 'A', '4', 'GG', '3476407', 'N'),
('GP', 'GERENCIA SECTORIAL DE PRODUCCION', '1', '1709', 'A', '4', 'GP', '8732661', 'S'),
('CI', 'DIVISION DE CONTROL INTERNO DE CALIDAD DE BIOLOGICO', '2', '1732', 'A', '2', 'GPCI', '3718589', 'S'),
('BL', 'LABORATORIO DE ANALISIS BIOLOGICOS', '3', '', 'A', '2', 'GPCIBL', '3718589', 'N'),
('FQ', 'LABORATORIO DE ANALISIS FISICO QUIMICOS', '3', '', 'A', '2', 'GPCIFQ', '3718589', 'N'),
('MB', 'LABORATORIO DE ANALISIS MICROBIOLOGICOS', '3', '', 'A', '2', 'GPCIMB', '3718589', 'N'),
('MR', 'DIVISION DE MEDIOS Y REACTIVOS', '2', '1715', 'A', '2', 'GPMR', '4834250', 'S'),
('CC', 'DEPARTAMENTO DE CULTIVO CELULAR', '3', '1716', 'A', '2', 'GPMRCC', '4834250', 'S'),
('AC', 'AREA DE CONTROL DE CALIDAD DE CULTIVO CELULAR', '4', '', 'A', '2', 'GPMRCCAC', '4834250', 'N'),
('AL', 'AREA DE LAVADO Y PREPARACION DE MATERIAL', '4', '', 'A', '2', 'GPMRCCAL', '4834250', 'N'),
('AM', 'AREA DE PREPARACION DE MEDIOS PARA EL CULTIVO CELULAR', '4', '', 'A', '2', 'GPMRCCAM', '4834250', 'N'),
('AT', 'AREA DE PRODUCCION DE CULTIVO CELULAR', '4', '', 'A', '2', 'GPMRCCAT', '4834250', 'N'),
('MC', 'DEPARTAMENTO DE MEDIOS DE CULTIVO Y REACTIVOS', '3', '1731', 'A', '1', 'GPMRMC', '4834250', 'S'),
('ME', 'SECCION DE PRODUCCION DE MEDIOS DE CULTIVO', '4', '1731', '', '', 'GPMRMCME', '4834250', 'S'),
('RE', 'SECCION DE REACTIVOS Y COLORANTES', '4', '1731', 'A', '1', 'GPMRMCRE', '4834250', 'N'),
('UC', 'UNIDAD DE CONTROL INTERNO DE CALIDAD DE MEDIOS Y REACTIVOS', '4', '', 'A', '1', 'GPMRMCUC', '4834250', 'N'),
('ST', 'DIVISION DE SERVICIOS TECNICOS AUXILIARES', '2', '1717', 'A', '3', 'GPST', '4293403', 'S'),
('BC', 'DEPARTAMENTO DE BIOTERIO', '3', '1721', 'E', '1', 'GPSTBC', '8928635', 'S'),
('BE', 'BIOTERIO DE ENSAYOS', '4', '1721', 'E', '1', 'GPSTBCBE', '8928635', 'S'),
('BG', 'GRANJA EXPERIMENTAL', '4', '', 'I', '1', 'GPSTBCBG', '9420460', 'S'),
('BP', 'BIOTERIO CENTRAL', '4', '1721', 'E', '1', 'GPSTBCBP', '8928635', 'S'),
('LE', 'DEPARTAMENTO DE LAVADO Y ESTERILIZACION', '3', '1719', 'A', '0', 'GPSTLE', '4680245', 'S'),
('AG', 'SECCION PROCESAMIENTO DE AGUA', '4', '', 'A', '0', 'GPSTLEAG', '4680245', 'N'),
('ES', 'SECCION DE PROCESOS DE ESTERILIZACIONES', '4', '', 'A', '0', 'GPSTLEES', '4680245', 'N'),
('PM', 'SECCION DE PROCESAMIENTO DE MATERIAL', '4', '', 'A', '0', 'GPSTLEPM', '4680245', 'N'),
('PT', 'DEPARTAMENTO DE PATOLOGIA', '3', '1718', 'A', '3', 'GPSTPT', '9515143', 'S'),
('VB', 'DIVISION DE VACUNAS BACTERIANAS', '2', '1713', 'A', '0', 'GPVB', '11405028', 'S'),
('EM', 'DEPARTAMENTO DE LLENADO Y EMBALAJE', '3', '1713', 'A', '0', 'GPVBEM', '11405028', 'S'),
('PA', 'DEPARTAMENTO DE PRODUCCION DE ANTIGENO', '3', '1713', 'A', '0', 'GPVBPA', '11405028', 'S'),
('TD', 'UNIDAD DE TOXOIDE DIFTERICO', '4', '', 'A', '3', 'GPVBPATD', '11405028', 'N'),
('TT', 'UNIDAD DE TOXOIDE TETANICO', '4', '', 'C', '1', 'GPVBPATT', '11405028', 'N'),
('VP', 'UNIDAD DE VACUNA PERTUSIS', '4', '', '', '', 'GPVBPAVP', '11405028', 'N'),
('VV', 'DIVISION DE VACUNAS VIRALES', '2', '1714', 'F', '1', 'GPVV', '6553870', 'S'),
('AH', 'UNIDAD DE PRODUCCION DE VACUNA ANTIRRABICA USO HUMANO', '3', '', 'F', '1', 'GPVVAH', '6553870', 'N'),
('AV', 'UNIDAD DE PRODUCCION DE VACUNA ANTIRRABICA USO VETERINARIO', '3', '', 'F', '1', 'GPVVAV', '6553870', 'N'),
('HA', 'CAJA DE AHORROS', '0', '1722', 'A', '1', 'HA', '', 'S'),
('ID', 'GERENCIA DE DOCENCIA E INVESTIGACION', '1', '1634', 'A', '4', 'ID', '4164825', 'S'),
('CT', 'COORDINACION DE COOPERACION TECNICA NACIONAL E INTERNACIONAL', '2', '1635', 'A', '4', 'IDCT', '4164825', 'N'),
('DO', 'COORDINACION DE POSTGRADO', '2', '', 'A', '4', 'IDDO', '4164825', 'N'),
('EG', 'COORDINACION DE EXTENSION NO CONDUCENTE A GRADO ACADEMICO', '2', '', 'A', '4', 'IDEG', '4164825', 'N'),
('IC', 'DEPARTAMENTO DE INFORMACION Y DIVULGACION CIENTIFICA', '3', '1636', 'A', '4', 'IDIC', '2644335', 'S'),
('IN', 'COORDINACION DE INVESTIGACION', '2', '', 'A', '4', 'IDIN', '4164825', 'N'),
('IE', 'SINDICATO DE EMPLEADOS', '0', '', 'A', '1', 'IE', '2180868', 'N'),
('IO', 'SINDICATO DE OBREROS', '0', '', 'B', '1', 'IO', '', 'N'),
('JR', 'JUNTA REVISORA DE PRODUCTOS FARMACEUTICOS', '1', '1609', 'A', '4', 'PEJR', '4354164', 'S'),
('LC', 'COMISION DE LICITACION', '1', '1607', 'A', '4', 'LC', '', 'S'),
('PE', 'PRESIDENCIA', '1', '1604', 'A', '4', 'CDPE', '3476407', 'S'),
('SP', 'SECRETARIA DE LA PRESIDENCIA', '2', '1762', 'A', '4', 'PESP', '3476407', 'S'),
('PP', 'GERENCIA DE PLANIFICACION Y PRESUPUESTO', '1', '1632', 'A', '4', 'PP', '4523967', 'S'),
('IF', 'AREA DE INFORMATICA', '2', '1612', 'A', '4', 'PEIF', '5529580', 'S'),
('OP', 'OFICINA DE PLANIFICACION Y PRESUPUESTO', '2', '1631', 'A', '4', 'PPOP', '4523967', 'S'),
('OS', 'AREA DE ORGANIZACION Y SISTEMAS', '2', '1522', 'A', '4', 'PPOS', '11550883', 'S'),
('PV', 'NUEVA PLANTA DE VACUNAS DEL INHRR', '1', '1712', 'J', '1', 'GPPV', '6122017', 'S'),
('RC', 'GERENCIA SECTORIAL DE REGISTRO Y CONTROL', '1', '1663', 'A', '4', 'RC', '4278632', 'S'),
('DA', 'DIVISION DE CONTROL DE ALIMENTOS', '2', '1730', 'A', '2', 'RCDA', '3850026', 'S'),
('MA', 'DEPARTAMENTO DE MICROBIOLOGIA DE ALIMENTOS', '3', '1669', 'A', '2', 'RCDAMA', '4022664', 'S'),
('UM', 'UNIDAD DE ANALISIS MICROBIOLOGICO', '4', '1748', 'A', '2', 'RCDAMAUM', '4022664', 'S'),
('UP', 'UNIDAD DE PARASITOLOGIA', '4', '1669', 'A', '2', 'RCDAMAUP', '4022664', 'S'),
('QA', 'DEPARTAMENTO DE QUIMICA DE ALIMENTOS', '3', '1664', 'A', '2', 'RCDAQA', '3803841', 'S'),
('RP', 'SECCION DE ANALISIS DE RESIDUOS DE PLAGUICIDAS EN ALIMENTOS', '4', '1665', 'A', '1', 'RCDAQARP', '4338078', 'S'),
('SC', 'SECCION DE PRODUCTOS CARNICOS', '4', '1666', 'A', '2', 'RCDAQASC', '3803841', 'S'),
('SD', 'SECCION DE PRODUCTOS DIVERSOS', '4', '1667', 'A', '2', 'RCDAQASD', '3803841', 'S'),
('SL', 'SECCION DE PRODUCTOS LACTEOS', '4', '1668', 'A', '2', 'RCDAQASL', '3803841', 'S'),
('RM', 'UNIDAD DE RECEPCION DE MUESTRAS DE ALIMENTOS', '3', '1670', 'A', '1', 'RCDARM', '9954723', 'S'),
('DM', 'DIVISION DE CONTROL DE MEDICAMENTOS Y COSMETICOS', '2', '1672', 'A', '3', 'RCDM', '4278632', 'S'),
('CE', 'CENAVIF', '3', '1691', 'A', '3', 'RCDMCE', '4106547', 'S'),
('CN', 'DEPARTAMENTO DE COORDINACION', '3', '1677', 'A', '3', 'RCDMCN', '6524665', 'S'),
('AR', 'UNIDAD DE ARCHIVO Y CORRESPONDENCIA', '4', '1679', 'A', '3', 'RCDMCNAR', '6443079', 'S'),
('RD', 'UNIDAD DE RECEPCION DE MEDICAMENTOS', '4', '1678', 'A', '1', 'RCDMCNRD', '4209442', 'S'),
('EC', 'DEPARTAMENTO DE EVALUACION CIENTIFICO LEGAL', '3', '1683', 'A', '3', 'RCDMEC', '', 'S'),
('CF', 'SECCION CALIDAD FARMACEUTICA', '4', '1685', 'A', '3', 'RCDMECCF', '6963156', 'S'),
('CL', 'SECCION DE CERTIFICACION LEGAL', '4', '1684', 'A', '3', 'RCDMECCL', '', 'S'),
('FG', 'DEPARTAMENTO DE FARMACOLOGIA', '3', '1680', 'A', '3', 'RCDMFG', '', 'S'),
('AF', 'SECCION ASESORIA FARMACOLOGICA', '4', '1682', 'A', '3', 'RCDMFGAF', '2151973', 'S'),
('FC', 'SECCION FARMACOLOGICA CLINICA', '4', '1681', 'A', '3', 'RCDMFGFC', '4192594', 'S'),
('PR', 'SECCION DE POST REGISTRO', '4', '', 'A', '3', 'RCDMFGPR', '', 'S'),
('FX', 'DEPARTAMENTO DE FARMACO TOXICOLOGIA', '3', '', 'A', '3', 'RCDMFX', '2524393', 'S'),
('BV', 'SECCION DE BIOQUIMICA Y VITAMINAS', '4', '1693', 'A', '3', 'RCDMFXBV', '5568106', 'S'),
('FD', 'SECCION FARMACODINAMIA', '4', '1694', 'A', '3', 'RCDMFXFD', '', 'S'),
('ML', 'DEPARTAMENTO DE MICROBIOLOGIA DE MEDICAMENTOS Y COSMETICOS', '3', '1690', 'A', '3', 'RCDMML', '', 'S'),
('PC', 'DEPARTAMENTO DE PRODUCTOS COSMETICOS', '3', '1727', 'A', '3', 'RCDMPC', '4886794', 'S'),
('QC', 'SECCION QUIMICA DE COSMETICOS', '4', '1543', 'A', '1', 'RCDMPCQC', '4886794', 'S'),
('RO', 'UNIDAD DE RECEPCION DE COSMETICOS', '4', '1676', 'A', '1', 'RCDMPCRO', '9480485', 'S'),
('PN', 'DEPARTAMENTO DE PRODUCTOS NATURALES', '3', '1536', 'A', '3', 'RCDMPN', '5542264', 'S'),
('QM', 'DEPARTAMENTO DE QUIMICA DE MEDICAMENTOS', '3', '1686', 'A', '1', 'RCDMQM', '', 'S'),
('LG', 'SECCION LIQUIDOS Y GASEOSOS', '4', '1688', 'A', '1', 'RCDMQMLG', '', 'S'),
('SM', 'SECCION SOLIDOS Y SEMISOLIDOS', '4', '1687', 'A', '1', 'RCDMQMSM', '', 'S'),
('PB', 'DIVISION DE CONTROL NACIONAL DE PRODUCTOS BIOLOGICOS', '2', '1696', 'A', '2', 'RCPB', '''7682214', 'S'),
('CH', 'DEPARTAMENTO DE CONTROL DE HEMODERIVADOS Y AFINES', '3', '1697', 'A', '2', 'RCPBCH', '''7682215', 'S'),
('CV', 'DEPARTAMENTO DE CONTROL DE VACUNAS Y RECOMBINANTES', '3', '1771', 'A', '2', 'RCPBCV', '''7682216', 'S'),
('UQ', 'UNIDAD DE EVALUACION QUIMICO FARMACEUTICO', '3', '1511', 'A', '2', 'RCPBUQ', '7682217', 'S'),
('RH', 'GERENCIA DE RECURSOS HUMANOS', '1', '1621', 'A', '4', 'RH', '6118944', 'S'),
('PD', 'DIVISION DE PLANIFICACION Y DESARROLLO', '2', '1624', 'A', '4', 'RHPD', '3407387', 'S'),
('AD', 'AREA DE ADIESTRAMIENTO', '3', '1624', 'A', '4', 'RHPDAD', '3407387', 'S'),
('BS', 'AREA DE BIENESTAR SOCIAL', '3', '1516', 'A', '4', 'RHPDBS', '3407387', 'S'),
('HC', 'PROGRAMA H.C.M.', '3', '1746', 'A', '4', 'RHPDHC', '3407387', 'S'),
('SA', 'UNIDAD DE SEGURIDAD LABORAL Y AMBIENTAL', '3', '1689', 'A', '4', 'RHPDSA', '3407387', 'S'),
('MD', 'UNIDAD MEDICO LABORAL', '3', '1628', 'A', '4', 'RHPDMD', '3407387', 'S'),
('SS', 'PROGRAMA S.S.O.', '3', '1624', 'A', '4', 'RHPDSS', '4577346', 'S'),
('RI', 'DIVISION DE RELACIONES INDUSTRIALES', '2', '1625', 'A', '4', 'RHRI', '6118944', 'S'),
('CR', 'UNIDAD DE CLASIFICACION Y REMUNERACION', '3', '1626', 'A', '4', 'RHRICR', '5098753', 'S'),
('NP', 'UNIDAD DE NOMINA Y PAGOS', '3', '1627', 'A', '4', 'RHRINP', '3809472', 'S'),
('RG', 'UNIDAD DE REGISTRO Y CONTROL', '3', '1629', 'A', '4', 'RHRIRG', '13851856', 'S'),
('RS', 'UNIDAD DE RECLUTAMIENTO Y SELECCION', '3', '1625', 'A', '4', 'RHRIRS', '9498868', 'S'),
('SI', 'SOCIEDAD CIENTIFICA', '0', '1745', 'A', '1', 'SI', '8744969', 'S'),
('SO', 'SOCIEDAD CORAL', '0', '', 'A', '4', 'SO', '3561451', 'N'),
('TI', 'ESTUDIANTINA', '0', '', 'A', '4', 'TI', '12259612', 'N'),
('UV', 'UNIDAD DE VERIFICADORAS', '3', '1674', 'A', '3', 'RCDMUV', '3566621', 'S'),
('CS', 'COMITE HIGIENE Y SEGURIDAD', '0', '1689', 'A', '4', 'CS', NULL, 'N'),
('TB', 'PROGRAMA DE PREVENCION Y CONTROL DEL TABAQUISMO', '3', '1695', 'A', '3', 'RCDMTB', NULL, 'S');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
