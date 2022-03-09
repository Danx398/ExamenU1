create database examenU1;
use examenU1;
CREATE TABLE `examenu1`.`t_datos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Edad` INT NOT NULL,
  `Sexo` VARCHAR(45) NOT NULL,
  `Nacionalidad` VARCHAR(45) NOT NULL,
  `Antiguedad` VARCHAR(45) NOT NULL,
  `Php` VARCHAR(1) NOT NULL,
  `Asp` VARCHAR(1) NOT NULL,
  `Bv` VARCHAR(1) NOT NULL,
  `Java` VARCHAR(1) NOT NULL,
  `Oracle` VARCHAR(1) NOT NULL,
  `Bd` VARCHAR(1) NOT NULL,
  `Bono` VARCHAR(45) NOT NULL,
  `t_datoscol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));