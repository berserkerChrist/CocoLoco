-- MySQL Script generated by MySQL Workbench
-- Mon Oct  8 19:32:20 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Invoice
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Invoice
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Invoice` DEFAULT CHARACTER SET utf8 ;
USE `Invoice` ;

-- -----------------------------------------------------
-- Table `Invoice`.`Neighborhood`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Invoice`.`Neighborhood` (
  `Code` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NULL,
  `PC` INT(5) NULL,
  PRIMARY KEY (`Code`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Invoice`.`Adress`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Invoice`.`Adress` (
  `Code` INT NOT NULL AUTO_INCREMENT,
  `Street` VARCHAR(40) NULL,
  `Number` INT NULL,
  `Neighborhood_Code` INT NOT NULL,
  PRIMARY KEY (`Code`),
  INDEX `fk_Address_Neighborhood1_idx` (`Neighborhood_Code` ASC),
  CONSTRAINT `fk_Address_Neighborhood1`
    FOREIGN KEY (`Neighborhood_Code`)
    REFERENCES `Invoice`.`Neighborhood` (`Code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Invoice`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Invoice`.`User` (
  `User_Name` VARCHAR(30) NOT NULL,
  `Password` VARCHAR(20) NULL,
  `Mail` VARCHAR(35) NULL,
  `Amount` INT NULL,
  `Type_User` TINYINT(1) NULL,
  `Name` VARCHAR(30) NULL,
  `Last_Name` VARCHAR(45) NULL,
  `Phone_Number` VARCHAR(10) NULL,
  `Adress_Code` INT NOT NULL,
  PRIMARY KEY (`User_Name`),
  INDEX `fk_User_Adress1_idx` (`Adress_Code` ASC),
  CONSTRAINT `fk_User_Adress1`
    FOREIGN KEY (`Adress_Code`)
    REFERENCES `Invoice`.`Adress` (`Code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Invoice`.`Stocktaking`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Invoice`.`Stocktaking` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Product_Name` VARCHAR(45) NULL,
  `Lot` INT NULL,
  `Rate` MEDIUMINT NULL,
  `Product_Descript` VARCHAR(120) NULL,
  `Class` VARCHAR(50) NULL,
  `SubClass` VARCHAR(50) NULL,
  `Image` VARCHAR(150) NULL,
  `User_User_Name` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Stocktaking_User1_idx` (`User_User_Name` ASC),
  CONSTRAINT `fk_Stocktaking_User1`
    FOREIGN KEY (`User_User_Name`)
    REFERENCES `Invoice`.`User` (`User_Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Invoice`.`Transaction`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Invoice`.`Transaction` (
  `Folio` INT NOT NULL AUTO_INCREMENT,
  `Date` DATETIME NULL,
  `User_User_Name` VARCHAR(30) NOT NULL,
  `Stocktaking_ID` INT NOT NULL,
  PRIMARY KEY (`Folio`),
  INDEX `fk_Transaction_User1_idx` (`User_User_Name` ASC),
  INDEX `fk_Transaction_Stocktaking1_idx` (`Stocktaking_ID` ASC),
  CONSTRAINT `fk_Transaction_User1`
    FOREIGN KEY (`User_User_Name`)
    REFERENCES `Invoice`.`User` (`User_Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Transaction_Stocktaking1`
    FOREIGN KEY (`Stocktaking_ID`)
    REFERENCES `Invoice`.`Stocktaking` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;