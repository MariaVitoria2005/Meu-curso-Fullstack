CREATE SCHEMA IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 ;
USE `blog` ;

-- -----------------------------------------------------
-- Table `blog`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`usuario` (
  `id` INT NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `telefone` VARCHAR(16) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`postagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`postagem` (
  `id` INT NOT NULL,
  `tirulo` VARCHAR(45) NOT NULL,
  `conteudo` TEXT NOT NULL,
  `data_publicada` DATE NOT NULL,
  `categoria` VARCHAR(45) NOT NULL,
  `estatus` VARCHAR(45) NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_postagem_usuario_idx` (`usuario_id` ASC) VISIBLE,
  CONSTRAINT `fk_postagem_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `blog`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blog`.`mensagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`mensagem` (
  `id` INT NOT NULL,
  `conteudo` TEXT NOT NULL,
  `data_envio` DATE NOT NULL,
  `estatus` VARCHAR(45) NOT NULL,
  `usuario_id` INT NOT NULL,
  `postagem_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_mensagem_usuario1_idx` (`usuario_id` ASC) VISIBLE,
  INDEX `fk_mensagem_postagem1_idx` (`postagem_id` ASC) VISIBLE,
  CONSTRAINT `fk_mensagem_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `blog`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_mensagem_postagem1`
    FOREIGN KEY (`postagem_id`)
    REFERENCES `blog`.`postagem` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;