CREATE DATABASE  `dental_time` DEFAULT CHARACTER SET utf8 ;
USE `dental_time` ;

-- -----------------------------------------------------
-- Table `dental_time`.`ROL`
-- -----------------------------------------------------
CREATE TABLE  ROL (
  `idRol` INT NULL AUTO_INCREMENT,
  `descripcionRol` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dental_time`.`USUARIO`
-- -----------------------------------------------------
CREATE TABLE USUARIO (
  `idUsuario` INT NULL AUTO_INCREMENT,
  `correoUsuario` VARCHAR(50) NOT NULL,
  `passwordUsuario` VARCHAR(100) NOT NULL,
  `estadoUsuario` BIT(1) NOT NULL,
  `nombreUsuario` VARCHAR(100) NOT NULL,
  `apellidoUsuario` VARCHAR(20) NOT NULL,
  `documentoUsuario` INT NOT NULL,
  `direccionUsuario` VARCHAR(20) NOT NULL,
  `telefonoUsuario` INT NOT NULL,
  `IdRolFK` INT NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `ind_rol_usuario` (`IdRolFK` ASC) ,
  CONSTRAINT `IdRolFK`
    FOREIGN KEY (`IdRolFK`)
    REFERENCES `dental_time`.`ROL` (`idRol`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `dental_time`.`EMPLEADO`
-- -----------------------------------------------------
CREATE TABLE EMPLEADO (
  `idEmpleado` INT NOT NULL,
  `idUsuarioFK` INT NOT NULL,
  PRIMARY KEY (`idEmpleado`),
  INDEX `idUsuarioFK_idx` (`idUsuarioFK` ASC) ,
  CONSTRAINT `idUsuarioFK`
    FOREIGN KEY (`idUsuarioFK`)
    REFERENCES `dental_time`.`USUARIO` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;

-- -----------------------------------------------------
--  Table `dental_time`.`CLIENTE`
-- -----------------------------------------------------
CREATE TABLE  CLIENTE (    
  `idCliente` INT NOT NULL,    
  `idUsuarioFK` INT NOT NULL,    
  PRIMARY KEY (`idCliente`),      
  INDEX `idUsuarioFK_idx` (`idUsuarioFK` ASC) ,       
  CONSTRAINT `idUsuarioFK2`        
   FOREIGN KEY (`idUsuarioFK`)         
   REFERENCES `dental_time`.`USUARIO` (`idUsuario`)        
   ON DELETE NO ACTION         
   ON UPDATE NO ACTION
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `dental_time`.`SERVICIO`
-- -----------------------------------------------------
CREATE TABLE SERVICIO (
  `idServicio` INT NOT NULL,
  `descripcionServicio` VARCHAR(100) NOT NULL,
  `estadoServicio` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idServicio`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `dental_time`.`CITA`
-- -----------------------------------------------------
CREATE TABLE  CITA(
  `idCita` INT NOT NULL,
  `fechaCita` DATE NOT NULL,
  `horaCita` TIME NOT NULL,
  `estadoCita` VARCHAR(20) NOT NULL,
  `idEmpleado` INT,
  `idCliente` INT,    
  PRIMARY KEY (`idCita`),
  INDEX `idEmpleado_idx` (`idEmpleado`) ,
  INDEX `idCliente_idx` (`idCliente`) ,
  CONSTRAINT `idEmpleado`
    FOREIGN KEY (`idEmpleado`)
    REFERENCES `dental_time`.`EMPLEADO` (`idEmpleado`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `idCliente`
    FOREIGN KEY (`idCliente`)
    REFERENCES `dental_time`.`CLIENTE` (`idCliente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `dental_time`.`CATALOGO`
-- -----------------------------------------------------
CREATE TABLE CATALOGO (
  `idCita` INT,
  `idServicio` INT,
  INDEX `idCita_idx` (`idCita`) ,
  INDEX `idServicio_idx` (`idServicio`) ,
 CONSTRAINT `idCita`
    FOREIGN KEY (`idCita`)
    REFERENCES `dental_time`.`CITA` (`idCita`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `idServicio`
    FOREIGN KEY (`idServicio`)
    REFERENCES `dental_time`.`SERVICIO` (`idServicio`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;
