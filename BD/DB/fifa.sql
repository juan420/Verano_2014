-- MySQL Script generated by MySQL Workbench
-- Thu 03 Jul 2014 03:45:56 PM CDT
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema fifa
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `fifa` ;
CREATE SCHEMA IF NOT EXISTS `fifa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `fifa` ;

-- -----------------------------------------------------
-- Table `fifa`.`continente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`continente` ;

CREATE TABLE IF NOT EXISTS `fifa`.`continente` (
  `idcontinente` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idcontinente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fifa`.`pais`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`pais` ;

CREATE TABLE IF NOT EXISTS `fifa`.`pais` (
  `idpais` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `bandera` VARCHAR(45) NULL,
  `idcontinente` INT NOT NULL,
  PRIMARY KEY (`idpais`),
  INDEX `fkContinente_idx` (`idcontinente` ASC),
  CONSTRAINT `fkPais`
    FOREIGN KEY (`idcontinente`)
    REFERENCES `fifa`.`continente` (`idcontinente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fifa`.`equipo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`equipo` ;

CREATE TABLE IF NOT EXISTS `fifa`.`equipo` (
  `idequipo` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `idpais` INT NOT NULL,
  `escudo` VARCHAR(45) NULL,
  PRIMARY KEY (`idequipo`),
  INDEX `fk1Pais_idx` (`idpais` ASC),
  CONSTRAINT `fk1Equipo`
    FOREIGN KEY (`idpais`)
    REFERENCES `fifa`.`pais` (`idpais`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fifa`.`integrante`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`integrante` ;

CREATE TABLE IF NOT EXISTS `fifa`.`integrante` (
  `idintegrante` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `apellido` VARCHAR(100) NULL,
  `peso` FLOAT NULL,
  `estatura` FLOAT NULL,
  `foto` VARCHAR(50) NULL,
  `Edad` INT NULL,
  `idequipo` INT NOT NULL,
  PRIMARY KEY (`idintegrante`),
  INDEX `fkIntegrante_idx` (`idequipo` ASC),
  CONSTRAINT `fkIntegrante`
    FOREIGN KEY (`idequipo`)
    REFERENCES `fifa`.`equipo` (`idequipo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `fifa`.`posision`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`posision` ;

CREATE TABLE IF NOT EXISTS `fifa`.`posision` (
  `idposision` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL,
  `abreviatura` VARCHAR(45) NULL,
  PRIMARY KEY (`idposision`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fifa`.`jugador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`jugador` ;

CREATE TABLE IF NOT EXISTS `fifa`.`jugador` (
  `idjugador` INT NOT NULL AUTO_INCREMENT,
  `numero` INT NULL,
  `idintegrante` INT NOT NULL,
  `idposicion` INT NOT NULL,
  INDEX `fk2Jugador_idx` (`idposicion` ASC),
  PRIMARY KEY (`idjugador`),
  CONSTRAINT `fk1Jugador`
    FOREIGN KEY (`idintegrante`)
    REFERENCES `fifa`.`integrante` (`idintegrante`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk2Jugador`
    FOREIGN KEY (`idposicion`)
    REFERENCES `fifa`.`posision` (`idposision`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fifa`.`entrenador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`entrenador` ;

CREATE TABLE IF NOT EXISTS `fifa`.`entrenador` (
  `identrenador` INT NOT NULL AUTO_INCREMENT,
  `identrenador` INT NOT NULL,
  `idpais` INT NOT NULL,
  INDEX `fk1Entrenador_idx` (`idpais` ASC),
  INDEX `fk2Entrenador_idx` (`identrenador` ASC),
  PRIMARY KEY (`identrenador`),
  CONSTRAINT `fk1Entrenador`
    FOREIGN KEY (`idpais`)
    REFERENCES `fifa`.`pais` (`idpais`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk2Entrenador`
    FOREIGN KEY (`identrenador`)
    REFERENCES `fifa`.`integrante` (`idintegrante`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fifa`.`ciudad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`ciudad` ;

CREATE TABLE IF NOT EXISTS `fifa`.`ciudad` (
  `idciudad` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idciudad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fifa`.`estadio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`estadio` ;

CREATE TABLE IF NOT EXISTS `fifa`.`estadio` (
  `idestadio` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  `idciudad` INT NOT NULL,
  PRIMARY KEY (`idestadio`),
  INDEX `fkEstadio_idx` (`idciudad` ASC),
  CONSTRAINT `fkEstadio`
    FOREIGN KEY (`idciudad`)
    REFERENCES `fifa`.`ciudad` (`idciudad`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fifa`.`juego`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`juego` ;

CREATE TABLE IF NOT EXISTS `fifa`.`juego` (
  `idjuego` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME NULL,
  `idequipolocal` INT NOT NULL,
  `idequipovisitante` INT NOT NULL,
  `idestadio` INT NOT NULL,
  PRIMARY KEY (`idjuego`),
  INDEX `fk1Juego_idx` (`idestadio` ASC),
  INDEX `fk2Juego_idx` (`idequipolocal` ASC),
  INDEX `fk3Juego_idx` (`idequipovisitante` ASC),
  CONSTRAINT `fk1Juego`
    FOREIGN KEY (`idestadio`)
    REFERENCES `fifa`.`estadio` (`idestadio`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk2Juego`
    FOREIGN KEY (`idequipolocal`)
    REFERENCES `fifa`.`equipo` (`idequipo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk3Juego`
    FOREIGN KEY (`idequipovisitante`)
    REFERENCES `fifa`.`equipo` (`idequipo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `fifa`.`goles_Jugador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`goles_Jugador` ;

CREATE TABLE IF NOT EXISTS `fifa`.`goles_Jugador` (
  `idresultado` INT NOT NULL AUTO_INCREMENT,
  `minutogol` TIME NULL,
  `idjuego` INT NOT NULL,
  `idjugador` INT NOT NULL,
  PRIMARY KEY (`idresultado`),
  INDEX `fk_resultado_1_idx` (`idjuego` ASC),
  INDEX `fk_golesJugador_1_idx` (`idjugador` ASC),
  CONSTRAINT `fk_resultado_1`
    FOREIGN KEY (`idjuego`)
    REFERENCES `fifa`.`juego` (`idjuego`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_golesJugador_1`
    FOREIGN KEY (`idjugador`)
    REFERENCES `fifa`.`jugador` (`idjugador`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fifa`.`tarjetas_jugador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fifa`.`tarjetas_jugador` ;

CREATE TABLE IF NOT EXISTS `fifa`.`tarjetas_jugador` (
  `idtarjetajugador` INT NOT NULL AUTO_INCREMENT,
  `minutotarjeta` TIME NOT NULL,
  `idjuego` INT NOT NULL,
  `idjugador` INT NOT NULL,
  `tipotarjeta` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idtarjetajugador`),
  INDEX `fk_resultado_1_idx` (`idjuego` ASC),
  INDEX `fk_golesJugador_1_idx` (`idjugador` ASC),
  CONSTRAINT `fk_resultado_10`
    FOREIGN KEY (`idjuego`)
    REFERENCES `fifa`.`juego` (`idjuego`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_golesJugador_10`
    FOREIGN KEY (`idjugador`)
    REFERENCES `fifa`.`jugador` (`idjugador`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
