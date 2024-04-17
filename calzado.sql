-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2024 a las 07:44:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `COD_CARGO` int(11) NOT NULL,
  `NOM_CARGO` enum('ADMINISTRADOR','VENDEDOR') NOT NULL,
  `UBICACION_CARGO` varchar(50) NOT NULL,
  `SALARIO_BASE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `COD_CLIENTE` int(11) NOT NULL,
  `NOMBRE_CLIENTE` varchar(30) NOT NULL,
  `APELLIDO_CLIENTE` varchar(30) NOT NULL,
  `TIPO_DOCUMENTO` enum('CC','CE','PASAPORTE','PPT') NOT NULL,
  `NO_DOCUMENTO` varchar(15) NOT NULL,
  `TELEFONO` varchar(15) NOT NULL,
  `DIRECCION` varchar(50) NOT NULL,
  `CORREO_ELECTRONICO` varchar(50) NOT NULL,
  `SEXO` enum('FEMENINO','MASCULINO') NOT NULL,
  `EDAD` varchar(3) NOT NULL,
  `ESTADO_CIVIL` enum('SOLTERO','CASADO','SEPARADO','VIUDO','UNION LIBRE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `COD_EMPLEADO` int(11) NOT NULL,
  `NOMBRE_EMPLEADO` varchar(30) NOT NULL,
  `APELLIDO_EMPLEADO` varchar(30) NOT NULL,
  `ESTADO_CIVIL` enum('SOLTERO','CASADO','SEPARADO','VIUDO','UNION_LIBRE') NOT NULL,
  `TIPO_DOCUMENTO` enum('CC','CE','PASAPORTE','PPT') NOT NULL,
  `NO_DOCUMENTO` varchar(15) NOT NULL,
  `DIRECCION_RESIDENCIA` varchar(50) NOT NULL,
  `FECHA_NACIMIENTO` date NOT NULL,
  `SEXO` enum('FEMENINO','MASCULINO') NOT NULL,
  `CORREO_ELECTRONICO` varchar(50) NOT NULL,
  `TIPO_CONTRATO` enum('INDEFINIDO','CONTRATO') NOT NULL,
  `JORNADA` enum('DIURNA','NOCTURNA','FESTIVA') NOT NULL,
  `RH` enum('A') NOT NULL,
  `FORMACION` enum('PRIMARIA','BACHILLER','TÉCNICO','PROFESIONAL') NOT NULL,
  `EPS` enum('NUEVA_EPS','MEDIMAS','COOMEVA','COMPENSAR','SANITAS','SURA','SALUD_TOTAL') NOT NULL,
  `COD_CARGO` int(11) DEFAULT NULL,
  `NUMERO_CUENTA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_cabeza`
--

CREATE TABLE `factura_cabeza` (
  `COD_FACTURA` int(11) NOT NULL,
  `FECHA_EXPEDICION` date NOT NULL,
  `FECHA_ENTREGA` date NOT NULL,
  `COD_CLIENTE` int(11) DEFAULT NULL,
  `COD_EMPLEADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_detalle`
--

CREATE TABLE `factura_detalle` (
  `COD_FACTURA_DETALLE` int(11) NOT NULL,
  `FACTCAB_COD` int(11) DEFAULT NULL,
  `METODO_PAGO` enum('EFECTIVO','CHEQUE','TARJETA') NOT NULL,
  `COD_PRODUCTO` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `PRECIO_VENTA` double NOT NULL,
  `MONTO` double NOT NULL,
  `SUBTOTAL` double NOT NULL,
  `IVA` double NOT NULL,
  `DESCUENTO` double NOT NULL,
  `NETO_PAGAR` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomina`
--

CREATE TABLE `nomina` (
  `COD_NOMINA` int(11) NOT NULL,
  `COD_EMPLEADO` int(11) DEFAULT NULL,
  `SALARIO` double NOT NULL,
  `DIAS_TRABAJADOS` double NOT NULL,
  `SALARIO_BASE` double NOT NULL,
  `TIPO_HORAS_EXTRAS` enum('DIURNAS','NOCTURNAS','FESTIVAS','RECARGO_NOCTURNO') NOT NULL,
  `CANTIDAD_HORAS_EXTRA` int(11) NOT NULL,
  `VALOR_HORAS_EXTRAS` enum('DIURNAS','NOCTURNAS','FESTIVAS','RECARGO_NOCTURNO') NOT NULL,
  `COMISIONES` double NOT NULL,
  `AUXILIO_TRANSPORTE` double NOT NULL,
  `TOTAL_DEVENGADO` double NOT NULL,
  `SALUD` double NOT NULL,
  `PENSION` double NOT NULL,
  `PRESTAMOS` double NOT NULL,
  `TOTAL_DEDUCIDO` double NOT NULL,
  `NETO_PAGAR` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_cabeza`
--

CREATE TABLE `pedidos_cabeza` (
  `COD_PEDIDOCABEZA` int(11) NOT NULL,
  `COD_PROVEEDOR` int(11) DEFAULT NULL,
  `FECHA_PEDIDO` date NOT NULL,
  `FECHA_ENTREGA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_detalle`
--

CREATE TABLE `pedidos_detalle` (
  `COD_PEDIDODETALLE` int(11) NOT NULL,
  `FACTURACABEZA_COD` int(11) DEFAULT NULL,
  `PRODUCTO_COD` int(11) DEFAULT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `PRECIO_UNITARIO` double NOT NULL,
  `TIPO_DE_PAGO` enum('EFECTIVO','CHEQUE','TARJETA') NOT NULL,
  `SUBTOTAL` double NOT NULL,
  `DESCUENTO` double NOT NULL,
  `IVA` double NOT NULL,
  `NETO_A_PAFGAR` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `COD_PRODUCTO` int(11) NOT NULL,
  `COD_PROVEEDOR` int(11) DEFAULT NULL,
  `Clasificacion` enum('mas vendido','menos vendido','mas economico','comida','electrodomesticos','hogar') NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Cantidad_disponible` int(11) NOT NULL,
  `PRECIO_COMPRA` double NOT NULL,
  `PRECIO_VENTA` double NOT NULL,
  `FECHA_DE_INGRESO` date NOT NULL,
  `FECHA_DE_EXPIRACION` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `COD_PROVEEDOR` int(11) NOT NULL,
  `RAZON_SOCIAL` varchar(50) NOT NULL,
  `TIPO_DOCUMENTO` enum('NIT','RUT','CEDULA') NOT NULL,
  `DOCUMENTO` varchar(15) NOT NULL,
  `DIRECCION` varchar(50) NOT NULL,
  `TELEFONO` varchar(20) NOT NULL,
  `CORREO_ELECTRONICO` varchar(30) NOT NULL,
  `CIUDAD` varchar(30) NOT NULL,
  `NOMBRE_REPRESENTANTE` varchar(30) NOT NULL,
  `TELEFONO_REPRESENTANTE` varchar(20) NOT NULL,
  `CORREO_REPRESENTANTE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`COD_CARGO`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`COD_CLIENTE`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`COD_EMPLEADO`),
  ADD KEY `COD_CARGO` (`COD_CARGO`);

--
-- Indices de la tabla `factura_cabeza`
--
ALTER TABLE `factura_cabeza`
  ADD PRIMARY KEY (`COD_FACTURA`),
  ADD KEY `COD_CLIENTE` (`COD_CLIENTE`),
  ADD KEY `COD_EMPLEADO` (`COD_EMPLEADO`);

--
-- Indices de la tabla `factura_detalle`
--
ALTER TABLE `factura_detalle`
  ADD PRIMARY KEY (`COD_FACTURA_DETALLE`),
  ADD KEY `FACTCAB_COD` (`FACTCAB_COD`),
  ADD KEY `COD_PRODUCTO` (`COD_PRODUCTO`);

--
-- Indices de la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD PRIMARY KEY (`COD_NOMINA`),
  ADD KEY `COD_EMPLEADO` (`COD_EMPLEADO`);

--
-- Indices de la tabla `pedidos_cabeza`
--
ALTER TABLE `pedidos_cabeza`
  ADD PRIMARY KEY (`COD_PEDIDOCABEZA`),
  ADD KEY `COD_PROVEEDOR` (`COD_PROVEEDOR`);

--
-- Indices de la tabla `pedidos_detalle`
--
ALTER TABLE `pedidos_detalle`
  ADD PRIMARY KEY (`COD_PEDIDODETALLE`),
  ADD KEY `FACTURACABEZA_COD` (`FACTURACABEZA_COD`),
  ADD KEY `PRODUCTO_COD` (`PRODUCTO_COD`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`COD_PRODUCTO`),
  ADD KEY `COD_PROVEEDOR` (`COD_PROVEEDOR`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`COD_PROVEEDOR`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `COD_CARGO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `COD_CLIENTE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `COD_EMPLEADO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura_cabeza`
--
ALTER TABLE `factura_cabeza`
  MODIFY `COD_FACTURA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura_detalle`
--
ALTER TABLE `factura_detalle`
  MODIFY `COD_FACTURA_DETALLE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nomina`
--
ALTER TABLE `nomina`
  MODIFY `COD_NOMINA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos_cabeza`
--
ALTER TABLE `pedidos_cabeza`
  MODIFY `COD_PEDIDOCABEZA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos_detalle`
--
ALTER TABLE `pedidos_detalle`
  MODIFY `COD_PEDIDODETALLE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `COD_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `COD_PROVEEDOR` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`COD_CARGO`) REFERENCES `cargos` (`COD_CARGO`);

--
-- Filtros para la tabla `factura_cabeza`
--
ALTER TABLE `factura_cabeza`
  ADD CONSTRAINT `factura_cabeza_ibfk_1` FOREIGN KEY (`COD_CLIENTE`) REFERENCES `clientes` (`COD_CLIENTE`),
  ADD CONSTRAINT `factura_cabeza_ibfk_2` FOREIGN KEY (`COD_EMPLEADO`) REFERENCES `empleados` (`COD_EMPLEADO`);

--
-- Filtros para la tabla `factura_detalle`
--
ALTER TABLE `factura_detalle`
  ADD CONSTRAINT `factura_detalle_ibfk_1` FOREIGN KEY (`FACTCAB_COD`) REFERENCES `factura_cabeza` (`COD_FACTURA`),
  ADD CONSTRAINT `factura_detalle_ibfk_2` FOREIGN KEY (`COD_PRODUCTO`) REFERENCES `productos` (`COD_PRODUCTO`);

--
-- Filtros para la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD CONSTRAINT `nomina_ibfk_1` FOREIGN KEY (`COD_EMPLEADO`) REFERENCES `empleados` (`COD_EMPLEADO`);

--
-- Filtros para la tabla `pedidos_cabeza`
--
ALTER TABLE `pedidos_cabeza`
  ADD CONSTRAINT `pedidos_cabeza_ibfk_1` FOREIGN KEY (`COD_PROVEEDOR`) REFERENCES `proveedores` (`COD_PROVEEDOR`);

--
-- Filtros para la tabla `pedidos_detalle`
--
ALTER TABLE `pedidos_detalle`
  ADD CONSTRAINT `pedidos_detalle_ibfk_1` FOREIGN KEY (`FACTURACABEZA_COD`) REFERENCES `factura_cabeza` (`COD_FACTURA`),
  ADD CONSTRAINT `pedidos_detalle_ibfk_2` FOREIGN KEY (`PRODUCTO_COD`) REFERENCES `productos` (`COD_PRODUCTO`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`COD_PROVEEDOR`) REFERENCES `proveedores` (`COD_PROVEEDOR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
