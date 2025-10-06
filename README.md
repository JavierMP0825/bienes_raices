# Proyecto Bienes Raíces
CRUD de propiedades con PHP, MySQL y XAMPP.

## 🚀 Comandos útiles

- Iniciar primero el servidor PHP:
    en la terminal escribe:
  php -S localhost:3000

  luego

  npm install

   y finaliza con
  
  npm run dev

  Esto hara que el proyecto se actualice en el navegador y podras ver los cambios

  En la carpeta database se encuentra el sql para workbench, si lo quieres para Xampp utiliza

  -- ===========================================================
-- Script corregido para MariaDB / XAMPP (phpMyAdmin)
-- Proyecto: Bienes Raíces CRUD
-- ===========================================================

-- Desactivar temporalmente verificaciones para evitar errores en creación
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Crear la base de datos si no existe
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `bienesraices_crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bienesraices_crud`;

-- -----------------------------------------------------
-- Tabla: vendedores
-- -----------------------------------------------------
DROP TABLE IF EXISTS `vendedores`;
CREATE TABLE `vendedores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) DEFAULT NULL,
  `apellido` VARCHAR(45) DEFAULT NULL,
  `telefono` VARCHAR(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -----------------------------------------------------
-- Tabla: propiedades
-- -----------------------------------------------------
DROP TABLE IF EXISTS `propiedades`;
CREATE TABLE `propiedades` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) DEFAULT NULL,
  `precio` DECIMAL(10,2) DEFAULT NULL,
  `imagen` VARCHAR(200) DEFAULT NULL,
  `descripcion` LONGTEXT DEFAULT NULL,
  `habitaciones` INT(1) DEFAULT NULL,
  `wc` INT(1) DEFAULT NULL,
  `estacionamiento` INT(1) DEFAULT NULL,
  `creado` DATE DEFAULT NULL,
  `vendedorId` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_propiedades_vendedores_idx` (`vendedorId` ASC),
  CONSTRAINT `fk_propiedades_vendedores`
    FOREIGN KEY (`vendedorId`)
    REFERENCES `vendedores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -----------------------------------------------------
-- Insertar datos en vendedores
-- -----------------------------------------------------
START TRANSACTION;

INSERT INTO `vendedores` (`id`, `nombre`, `apellido`, `telefono`) VALUES 
(1, 'Javier', 'Mendieta', '2461038675'),
(2, 'Karen', 'Perez', '2461038642');

COMMIT;

-- -----------------------------------------------------
-- Restaurar configuraciones originales
-- -----------------------------------------------------
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;