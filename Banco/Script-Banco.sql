-- MySQL Script generated by MySQL Workbench
-- Wed Nov  9 13:31:58 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Liloca
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Liloca
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Liloca` DEFAULT CHARACTER SET utf8 ;
USE `Liloca` ;

-- -----------------------------------------------------
-- Table `Liloca`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Liloca`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(255) NOT NULL,
  `CPF` VARCHAR(45) NOT NULL,
  `Telefone` INT NOT NULL,
  `Email` VARCHAR(255) NOT NULL,
  `Senha` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Liloca`.`Aniversariante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Liloca`.`Aniversariante` (
  `idAniversariante` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(255) NOT NULL,
  `Idade` INT NOT NULL,
  `Tema` VARCHAR(255) NOT NULL,
  `Cores` VARCHAR(255) NOT NULL,
  `Data_Festa` DATETIME NOT NULL,
  `Cliente_idCliente` INT NOT NULL,
  PRIMARY KEY (`idAniversariante`, `Cliente_idCliente`),
  INDEX `fk_Aniversariante_Cliente1_idx` (`Cliente_idCliente` ASC) ,
  CONSTRAINT `fk_Aniversariante_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `Liloca`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Liloca`.`Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Liloca`.`Pedido` (
  `idPedido` INT NOT NULL AUTO_INCREMENT,
  `Data_Pedido` DATETIME NOT NULL,
  `Data_Entrega` DATETIME NOT NULL,
  `Tipo_Da_Entrega` VARCHAR(45) NOT NULL,
  `Prozo_de_Entrega` DATETIME NOT NULL,
  `Frete` DOUBLE NOT NULL,
  `End_Do_Cliente_Entrega` VARCHAR(45) NOT NULL,
  `Valor_Pedido` DOUBLE NOT NULL,
  `Valor_Sinal` DOUBLE NOT NULL,
  `Valor_A_Pagar` DOUBLE NOT NULL,
  `Aniversariante_idAniversariante` INT NOT NULL,
  PRIMARY KEY (`idPedido`),
  INDEX `fk_Pedido_Aniversariante1_idx` (`Aniversariante_idAniversariante` ASC) ,
  CONSTRAINT `fk_Pedido_Aniversariante1`
    FOREIGN KEY (`Aniversariante_idAniversariante`)
    REFERENCES `Liloca`.`Aniversariante` (`idAniversariante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Liloca`.`Produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Liloca`.`Produtos` (
  `idProdutos` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(255) NOT NULL,
  `Quantidade` INT NOT NULL,
  `Valor` DOUBLE NOT NULL,
  PRIMARY KEY (`idProdutos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Liloca`.`Enfeites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Liloca`.`Enfeites` (
  `idEnfeites` INT NOT NULL AUTO_INCREMENT,
  `Cor` VARCHAR(45) NOT NULL,
  `Produtos_idProdutos` INT NOT NULL,
  PRIMARY KEY (`idEnfeites`, `Produtos_idProdutos`),
  INDEX `fk_Enfeites_Produtos1_idx` (`Produtos_idProdutos` ASC) ,
  CONSTRAINT `fk_Enfeites_Produtos1`
    FOREIGN KEY (`Produtos_idProdutos`)
    REFERENCES `Liloca`.`Produtos` (`idProdutos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Liloca`.`Alimentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Liloca`.`Alimentos` (
  `idAlimentos` INT NOT NULL AUTO_INCREMENT,
  `Medida` FLOAT NOT NULL,
  `Sabor` VARCHAR(45) NOT NULL,
  `Recheio` VARCHAR(45) NOT NULL,
  `Produtos_idProdutos` INT NOT NULL,
  PRIMARY KEY (`idAlimentos`, `Produtos_idProdutos`),
  INDEX `fk_Alimentos_Produtos1_idx` (`Produtos_idProdutos` ASC) ,
  CONSTRAINT `fk_Alimentos_Produtos1`
    FOREIGN KEY (`Produtos_idProdutos`)
    REFERENCES `Liloca`.`Produtos` (`idProdutos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Liloca`.`Bebidas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Liloca`.`Bebidas` (
  `idBebidas` INT NOT NULL AUTO_INCREMENT,
  `Marca` VARCHAR(100) NOT NULL,
  `Litros` INT NOT NULL,
  `Sabor` VARCHAR(45) NOT NULL,
  `Produtos_idProdutos` INT NOT NULL,
  PRIMARY KEY (`idBebidas`, `Produtos_idProdutos`),
  CONSTRAINT `fk_Bebidas_Produtos1`
    FOREIGN KEY (`Produtos_idProdutos`)
    REFERENCES `Liloca`.`Produtos` (`idProdutos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Liloca`.`Itens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Liloca`.`Itens` (
  `Pedido_idPedido` INT NOT NULL,
  `Produtos_idProdutos` INT NOT NULL,
  `Quantidade` INT NOT NULL,
  `Valor_Pago` DOUBLE NOT NULL,
  PRIMARY KEY (`Pedido_idPedido`, `Produtos_idProdutos`),
  INDEX `fk_Pedido_has_Produtos_Produtos1_idx` (`Produtos_idProdutos` ASC) ,
  INDEX `fk_Pedido_has_Produtos_Pedido1_idx` (`Pedido_idPedido` ASC),
  CONSTRAINT `fk_Pedido_has_Produtos_Pedido1`
    FOREIGN KEY (`Pedido_idPedido`)
    REFERENCES `Liloca`.`Pedido` (`idPedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_has_Produtos_Produtos1`
    FOREIGN KEY (`Produtos_idProdutos`)
    REFERENCES `Liloca`.`Produtos` (`idProdutos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
