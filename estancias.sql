-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2022 a las 16:18:58
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estancias`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_alumno` (IN `matri` INT(11), IN `nom` VARCHAR(40), IN `pat` VARCHAR(40), IN `mat` VARCHAR(40), IN `dom` VARCHAR(150), IN `sex` VARCHAR(8), IN `ims` VARCHAR(12), IN `cp` VARCHAR(14), IN `correo` VARCHAR(30), IN `id_g` INT(11), IN `id_cuat` INT(11), IN `id_cam` INT(11))  BEGIN
  UPDATE alumno
  SET 
  Nombre_alumno = nom,
  Ap_paterno_alumno = pat,
  Ap_materno_alumno = mat,
  Domicilio = dom,
  Sexo = sex,
  IMSS = ims,
  CURP = cp,
  Correo_electronico = correo,
  id_grupo_fk = id_g,
  id_cuatrimestre_fk = id_cuat,
  id_campus_fk = id_cam
  WHERE Matricula = matri;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_asesor` (IN `id` INT(11), IN `nom` VARCHAR(40), IN `pat` VARCHAR(40), IN `mat` VARCHAR(40))  BEGIN
UPDATE asesor_academico
SET
Nombre_asesor = nom,
Ap_paterno_asesor = pat,
Ap_materno_asesor = mat
WHERE Id_asesor = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_empresa` (IN `id` INT(11), IN `nom` VARCHAR(50), IN `dom` VARCHAR(150), IN `tel` DOUBLE, IN `correo` VARCHAR(50))  begin
update empresa set id_empresa = id, Nombre_empresa = nom, Domicilio_empresa = dom, Telefono_empresa=tel, Correo_electronico=correo where id_empresa=id;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_alumno` (IN `mat` INT(11))  BEGIN
  SELECT * FROM alumno WHERE Matricula = mat;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_alumnos` ()  BEGIN
SELECT * FROM alumno;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_asesor` (IN `id` INT(11))  BEGIN
  SELECT * FROM asesor_academico WHERE Id_asesor = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_asesores` ()  BEGIN
  SELECT * FROM asesor_academico;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_empresas` ()  BEGIN
SELECT
  *
FROM empresa;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_alumno` (IN `mat` INT(11))  BEGIN
  DELETE FROM alumno WHERE Matricula = mat;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_asesor` (IN `id_ase` INT(11))  BEGIN
  DELETE FROM asesor_academico WHERE Id_asesor = id_ase;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_empresa` (IN `id` INT(11))  BEGIN
DELETE FROM empresa WHERE id_empresa = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_alumno` (IN `mat` INT(11), IN `nom` VARCHAR(40), IN `pat` VARCHAR(40), IN `mate` VARCHAR(40), IN `dom` VARCHAR(40), IN `sex` VARCHAR(8), IN `ss` VARCHAR(12), IN `cu` VARCHAR(14), IN `co` VARCHAR(30), IN `gr` INT(11), IN `ct` INT(11), IN `cm` INT(11))  BEGIN
  insert into alumno(Matricula,Nombre_alumno,Ap_paterno_alumno,Ap_materno_alumno,Domicilio,Sexo,IMSS,CURP,Correo_electronico,id_grupo_fk,id_cuatrimestre_fk,id_campus_fk) values(mat,nom,pat,mate,dom,sex,ss,cu,co,gr,ct,cm);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_asesor` (IN `nom` VARCHAR(40), IN `pat` VARCHAR(40), IN `mat` VARCHAR(40))  BEGIN
INSERT INTO asesor_academico(Nombre_asesor,Ap_paterno_asesor,Ap_materno_asesor) VALUES(nom,pat,mat);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_empresa` (IN `nom` VARCHAR(50), IN `dom` VARCHAR(150), IN `tel` DOUBLE, IN `correo` VARCHAR(50))  begin
insert into
  empresa(
    Nombre_empresa,
    Domicilio_empresa,
    Telefono_empresa,
    Correo_electronico
  )
VALUES
(nom, dom, tel, correo);

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PA_alumno` (IN `Mat` INT(11))  BEGIN
  SELECT * FROM alumno_telefono WHERE alumno_telefono.Matricula = Mat;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `Matricula` int(11) NOT NULL,
  `Nombre_alumno` varchar(40) NOT NULL,
  `Ap_paterno_alumno` varchar(40) NOT NULL,
  `Ap_materno_alumno` varchar(40) NOT NULL,
  `Domicilio` varchar(150) NOT NULL,
  `Sexo` varchar(8) NOT NULL,
  `IMSS` varchar(12) NOT NULL,
  `CURP` varchar(14) NOT NULL,
  `Correo_electronico` varchar(30) NOT NULL,
  `id_grupo_fk` int(11) NOT NULL,
  `id_cuatrimestre_fk` int(11) NOT NULL,
  `id_campus_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Matricula`, `Nombre_alumno`, `Ap_paterno_alumno`, `Ap_materno_alumno`, `Domicilio`, `Sexo`, `IMSS`, `CURP`, `Correo_electronico`, `id_grupo_fk`, `id_cuatrimestre_fk`, `id_campus_fk`) VALUES
(1915031202, 'Mariana', 'Lopez', 'Padilla', 'Tepatepec, Tepatepec', 'Mujer', '1234567890', '1234567890', 'mariana@gmail.com', 2, 1, 1),
(1915031203, 'Raquel', 'Gomez', 'Ramirez', 'Cañada Aviación, Actopan, Hidalgo', 'mujer', '123789456', '123789456', 'raquel@gmail.com', 1, 1, 1),
(1915031204, 'Chantaleee', 'Paredes', 'Rolando', 'Encino, Arenal, Hidalgo', 'mujer', '123456', '123456', 'chantal@gmail.com', 1, 1, 1),
(1915031205, 'Erick', 'Rol', 'alelto', 'que', 'hombre', '123', '123', 'erick@gmail.com', 1, 1, 1),
(1915031206, 'Mario', 'Delgado', 'Soto', 'cda chuiquihuite, dcmx, mexico', 'hombre', '123', '142', 'mario@gmail.com', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `alumno_telefono`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `alumno_telefono` (
`Matricula` int(11)
,`Nombre_alumno` varchar(40)
,`Ap_paterno_alumno` varchar(40)
,`Ap_materno_alumno` varchar(40)
,`Domicilio` varchar(150)
,`Sexo` varchar(8)
,`IMSS` varchar(12)
,`CURP` varchar(14)
,`Correo_electronico` varchar(30)
,`id_grupo_fk` int(11)
,`id_cuatrimestre_fk` int(11)
,`id_campus_fk` int(11)
,`id_telefono_alumno` int(11)
,`Telefono_casa_al` double
,`Telefono_celular_al` double
,`Matricula_fk` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor_academico`
--

CREATE TABLE `asesor_academico` (
  `Id_asesor` int(11) NOT NULL,
  `Nombre_asesor` varchar(30) NOT NULL,
  `Ap_paterno_asesor` varchar(30) NOT NULL,
  `Ap_materno_asesor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asesor_academico`
--

INSERT INTO `asesor_academico` (`Id_asesor`, `Nombre_asesor`, `Ap_paterno_asesor`, `Ap_materno_asesor`) VALUES
(3, 'Ernesto', 'Inclan', 'Padilla'),
(4, 'Armando', 'Pardo', 'Lopez'),
(5, 'asdas', 'sdfsdf', 'sdfs'),
(6, 'Francisco', 'Fernandez', 'De Luz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor_programaeducativo`
--

CREATE TABLE `asesor_programaeducativo` (
  `id_asesorpe` int(11) NOT NULL,
  `id_programaed_FK` int(11) NOT NULL,
  `id_asesoracad_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campus`
--

CREATE TABLE `campus` (
  `Id_campus` int(11) NOT NULL,
  `Descripcion_campus` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campus`
--

INSERT INTO `campus` (`Id_campus`, `Descripcion_campus`) VALUES
(1, 'francisco i. madero'),
(2, 'meztitlan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencias`
--

CREATE TABLE `competencias` (
  `id_competencia` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuatrimestre`
--

CREATE TABLE `cuatrimestre` (
  `Id_cuatrimestre` int(11) NOT NULL,
  `Descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuatrimestre`
--

INSERT INTO `cuatrimestre` (`Id_cuatrimestre`, `Descripcion`) VALUES
(1, 'cuarto'),
(2, 'septimo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directores`
--

CREATE TABLE `directores` (
  `id_director` int(11) NOT NULL,
  `Nombre_director` varchar(30) NOT NULL,
  `Ap_paterno_director` varchar(30) NOT NULL,
  `Ap_materno_director` varchar(30) NOT NULL,
  `id_programa_educativo_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `Nombre_empresa` varchar(50) NOT NULL,
  `Domicilio_empresa` varchar(150) NOT NULL,
  `Telefono_empresa` double NOT NULL,
  `Correo_electronico` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `Nombre_empresa`, `Domicilio_empresa`, `Telefono_empresa`, `Correo_electronico`) VALUES
(4, 'FLEXY', 'Texcoco, Mexico', 56498721, 'Puma@gmail.com'),
(5, 'ADIDAS', 'nose', 5464, 'adidas@gmail.com'),
(6, 'converse', 'pachuca', 234234, 'conversewgmailcom'),
(7, 'REEKBOOK', 'CDMX, MEXICO', 5566778899, 'RB@GMAIL.COM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

CREATE TABLE `expediente` (
  `Id_expediente` int(11) NOT NULL,
  `Matricula_alumno_fk` int(11) NOT NULL,
  `id_documento_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `Descripcion_grupo` varchar(6) NOT NULL,
  `id_programa_ed_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `Descripcion_grupo`, `id_programa_ed_fk`) VALUES
(1, '4SCG1', 1),
(2, '4SCG2', 1),
(3, '7SCG1', 1),
(4, '7SCG2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id_modalidad` int(11) NOT NULL,
  `Descripcion_modalidad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_educativo`
--

CREATE TABLE `programa_educativo` (
  `Id_programa_educativo` int(11) NOT NULL,
  `Descripcion_pe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa_educativo`
--

INSERT INTO `programa_educativo` (`Id_programa_educativo`, `Descripcion_pe`) VALUES
(1, 'Ingenieria en Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_estancia`
--

CREATE TABLE `solicitud_estancia` (
  `id_solicitud` int(11) NOT NULL,
  `Nombre_alumno_sol` varchar(40) NOT NULL,
  `Ap_paterno_alumno_sol` varchar(40) NOT NULL,
  `Ap_materno_alumno` varchar(40) NOT NULL,
  `Domicilio_alumno` varchar(150) NOT NULL,
  `Sexo_alumno` varchar(8) NOT NULL,
  `IMSS` varchar(12) NOT NULL,
  `CURP` varchar(14) NOT NULL,
  `Matricula_fk` int(11) NOT NULL,
  `correo_electronico_fk` varchar(30) NOT NULL,
  `id_telefono_al_fk` double NOT NULL,
  `Fecha_elaboracion` date NOT NULL,
  `Programa_educativo` varchar(50) NOT NULL,
  `Cuatrimestre` varchar(10) NOT NULL,
  `Grupo` varchar(10) NOT NULL,
  `Modalidad` varchar(15) NOT NULL,
  `Nombre_asesor` varchar(40) NOT NULL,
  `Ap_paterno_asesor` varchar(40) NOT NULL,
  `Ap_materno_asesor` varchar(40) NOT NULL,
  `Nombre_proyecto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_alumno`
--

CREATE TABLE `telefono_alumno` (
  `id_telefono_alumno` int(11) NOT NULL,
  `Telefono_casa_al` double NOT NULL,
  `Telefono_celular_al` double NOT NULL,
  `Matricula_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_documento` int(11) NOT NULL,
  `Descripcion_documento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura para la vista `alumno_telefono`
--
DROP TABLE IF EXISTS `alumno_telefono`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alumno_telefono`  AS SELECT `a`.`Matricula` AS `Matricula`, `a`.`Nombre_alumno` AS `Nombre_alumno`, `a`.`Ap_paterno_alumno` AS `Ap_paterno_alumno`, `a`.`Ap_materno_alumno` AS `Ap_materno_alumno`, `a`.`Domicilio` AS `Domicilio`, `a`.`Sexo` AS `Sexo`, `a`.`IMSS` AS `IMSS`, `a`.`CURP` AS `CURP`, `a`.`Correo_electronico` AS `Correo_electronico`, `a`.`id_grupo_fk` AS `id_grupo_fk`, `a`.`id_cuatrimestre_fk` AS `id_cuatrimestre_fk`, `a`.`id_campus_fk` AS `id_campus_fk`, `telefono_alumno`.`id_telefono_alumno` AS `id_telefono_alumno`, `telefono_alumno`.`Telefono_casa_al` AS `Telefono_casa_al`, `telefono_alumno`.`Telefono_celular_al` AS `Telefono_celular_al`, `telefono_alumno`.`Matricula_fk` AS `Matricula_fk` FROM (`alumno` `a` join `telefono_alumno` on(`a`.`Matricula` = `telefono_alumno`.`Matricula_fk`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `idgrupo` (`id_grupo_fk`),
  ADD KEY `idcuatrimestre` (`id_cuatrimestre_fk`),
  ADD KEY `idcampus` (`id_campus_fk`);

--
-- Indices de la tabla `asesor_academico`
--
ALTER TABLE `asesor_academico`
  ADD PRIMARY KEY (`Id_asesor`);

--
-- Indices de la tabla `asesor_programaeducativo`
--
ALTER TABLE `asesor_programaeducativo`
  ADD PRIMARY KEY (`id_asesorpe`),
  ADD KEY `PE` (`id_programaed_FK`),
  ADD KEY `AE` (`id_asesoracad_FK`);

--
-- Indices de la tabla `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`Id_campus`);

--
-- Indices de la tabla `competencias`
--
ALTER TABLE `competencias`
  ADD PRIMARY KEY (`id_competencia`);

--
-- Indices de la tabla `cuatrimestre`
--
ALTER TABLE `cuatrimestre`
  ADD PRIMARY KEY (`Id_cuatrimestre`);

--
-- Indices de la tabla `directores`
--
ALTER TABLE `directores`
  ADD PRIMARY KEY (`id_director`),
  ADD KEY `idprogramaed` (`id_programa_educativo_fk`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`Id_expediente`),
  ADD KEY `matricula` (`Matricula_alumno_fk`),
  ADD KEY `documento` (`id_documento_fk`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD KEY `programaed` (`id_programa_ed_fk`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`id_modalidad`);

--
-- Indices de la tabla `programa_educativo`
--
ALTER TABLE `programa_educativo`
  ADD PRIMARY KEY (`Id_programa_educativo`);

--
-- Indices de la tabla `solicitud_estancia`
--
ALTER TABLE `solicitud_estancia`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `matricula` (`Matricula_fk`);

--
-- Indices de la tabla `telefono_alumno`
--
ALTER TABLE `telefono_alumno`
  ADD PRIMARY KEY (`id_telefono_alumno`),
  ADD KEY `matricula` (`Matricula_fk`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesor_academico`
--
ALTER TABLE `asesor_academico`
  MODIFY `Id_asesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `asesor_programaeducativo`
--
ALTER TABLE `asesor_programaeducativo`
  MODIFY `id_asesorpe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `campus`
--
ALTER TABLE `campus`
  MODIFY `Id_campus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `competencias`
--
ALTER TABLE `competencias`
  MODIFY `id_competencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuatrimestre`
--
ALTER TABLE `cuatrimestre`
  MODIFY `Id_cuatrimestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `directores`
--
ALTER TABLE `directores`
  MODIFY `id_director` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `expediente`
--
ALTER TABLE `expediente`
  MODIFY `Id_expediente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id_modalidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programa_educativo`
--
ALTER TABLE `programa_educativo`
  MODIFY `Id_programa_educativo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `telefono_alumno`
--
ALTER TABLE `telefono_alumno`
  MODIFY `id_telefono_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_campus_fk`) REFERENCES `campus` (`Id_campus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`id_grupo_fk`) REFERENCES `grupos` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`id_cuatrimestre_fk`) REFERENCES `cuatrimestre` (`Id_cuatrimestre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asesor_programaeducativo`
--
ALTER TABLE `asesor_programaeducativo`
  ADD CONSTRAINT `asesor_programaeducativo_ibfk_1` FOREIGN KEY (`id_programaed_FK`) REFERENCES `programa_educativo` (`Id_programa_educativo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asesor_programaeducativo_ibfk_2` FOREIGN KEY (`id_asesoracad_FK`) REFERENCES `asesor_academico` (`Id_asesor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `directores`
--
ALTER TABLE `directores`
  ADD CONSTRAINT `directores_ibfk_1` FOREIGN KEY (`id_programa_educativo_fk`) REFERENCES `programa_educativo` (`Id_programa_educativo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD CONSTRAINT `expediente_ibfk_1` FOREIGN KEY (`Matricula_alumno_fk`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expediente_ibfk_2` FOREIGN KEY (`id_documento_fk`) REFERENCES `tipo_documento` (`id_documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`id_programa_ed_fk`) REFERENCES `programa_educativo` (`Id_programa_educativo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud_estancia`
--
ALTER TABLE `solicitud_estancia`
  ADD CONSTRAINT `solicitud_estancia_ibfk_1` FOREIGN KEY (`Matricula_fk`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefono_alumno`
--
ALTER TABLE `telefono_alumno`
  ADD CONSTRAINT `telefono_alumno_ibfk_1` FOREIGN KEY (`Matricula_fk`) REFERENCES `alumno` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
