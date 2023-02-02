CREATE TABLE 'login'.`t_usuario`(
    'id_usuario' INT NOT NULL AUTO_INCREMENT,
    'usuario' VARCHAR(255) NOT NULL,
    'password' VARCHAR(255) NOT NULL,
    PRIMARY KEY ('id_usuario'));
CREATE TABLE `login`.`libros` (
  `idlibros` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `autor` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `accion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idlibros`));
