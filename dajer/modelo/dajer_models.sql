SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `jabalies_dajer` DEFAULT CHARACTER SET latin1 ;
USE `jabalies_dajer` ;

-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_api_oauth`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_api_oauth` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `provider` VARCHAR(255) NOT NULL,
  `strategy` VARCHAR(255) NOT NULL,
  `api_key` VARCHAR(255) NOT NULL,
  `api_secret` VARCHAR(255) NOT NULL,
  `scope` VARCHAR(255) NOT NULL,
  `active` TINYINT(4) NOT NULL DEFAULT '0',
  `active_oauth` TINYINT(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_imagen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_imagen` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `path` VARCHAR(255) NOT NULL,
  `name` VARCHAR(70) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_barner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_barner` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(50) NOT NULL,
  `texto` VARCHAR(200) NOT NULL,
  `link` VARCHAR(255) NULL,
  `imagen_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_barner_trtamiento_imagen1_idx` (`imagen_id` ASC),
  CONSTRAINT `fk_barner_trtamiento_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_contactenos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_contactenos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `texto` VARCHAR(588) NOT NULL,
  `ciudad` VARCHAR(100) NULL,
  `imagen_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_contactenos_imagen1_idx` (`imagen_id` ASC),
  CONSTRAINT `fk_contactenos_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_contacto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_contacto` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `direccion` VARCHAR(28) NULL DEFAULT NULL,
  `edificio` VARCHAR(28) NULL DEFAULT NULL,
  `ciudad` VARCHAR(20) NULL DEFAULT NULL,
  `telefono1` VARCHAR(18) NULL DEFAULT NULL,
  `telefono2` VARCHAR(18) NULL DEFAULT NULL,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_departamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_departamento` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 33
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_destacado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_destacado` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(20) NOT NULL,
  `texto` VARCHAR(181) NOT NULL,
  `link` VARCHAR(355) NULL DEFAULT NULL,
  `imagen_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cms_destacado_cms_imagen1_idx` (`imagen_id` ASC),
  CONSTRAINT `fk_cms_destacado_cms_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 21;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_groups` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  `description` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_permissions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_permissions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `var` VARCHAR(255) NULL DEFAULT NULL,
  `type` ENUM('module','function','component') NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_groups_permissions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_groups_permissions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `group_id` INT(10) UNSIGNED NOT NULL,
  `permission_id` INT(11) NOT NULL,
  `view` TINYINT(1) NULL DEFAULT '0',
  `create` TINYINT(1) NULL DEFAULT '0',
  `update` TINYINT(1) NULL DEFAULT '0',
  `delete` TINYINT(1) NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  INDEX `fk_cms_users_permissions_cms_permissions1_idx` (`permission_id` ASC),
  INDEX `fk_cms_groups_permissions_cms_groups1_idx` (`group_id` ASC),
  CONSTRAINT `fk_cms_groups_permissions_cms_groups1`
    FOREIGN KEY (`group_id`)
    REFERENCES `jabalies_dajer`.`cms_groups` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_groups_permissions_cms_permissions1`
    FOREIGN KEY (`permission_id`)
    REFERENCES `jabalies_dajer`.`cms_permissions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 69
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_login_attempts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_login_attempts` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` VARBINARY(16) NOT NULL,
  `login` VARCHAR(100) NOT NULL,
  `time` INT(11) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_menu` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `parent` INT(11) NULL DEFAULT NULL,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `name_short` VARCHAR(20) NULL DEFAULT NULL,
  `url` TEXT NULL DEFAULT NULL,
  `content` TEXT NULL DEFAULT NULL,
  `image` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nombre_UNIQUE` (`name` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_oauth_config`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_oauth_config` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `uri` VARCHAR(255) NULL DEFAULT NULL,
  `var` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_redes_sociales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_redes_sociales` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `red_social` VARCHAR(100) NULL DEFAULT NULL,
  `link_red` VARCHAR(255) NULL DEFAULT NULL,
  `fecha_creacion` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_sessions` (
  `session_id` VARCHAR(40) NOT NULL DEFAULT '0',
  `ip_address` VARCHAR(45) NOT NULL DEFAULT '0',
  `user_agent` VARCHAR(120) NOT NULL,
  `last_activity` INT(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` TEXT NOT NULL,
  PRIMARY KEY (`session_id`),
  INDEX `last_activity_idx` (`last_activity` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_bienvenida`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_bienvenida` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(33) NOT NULL,
  `texto` VARCHAR(480) NOT NULL,
  `imagen_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cms_bienvenida_cms_imagen1_idx` (`imagen_id` ASC),
  CONSTRAINT `fk_cms_bienvenida_cms_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` VARBINARY(16) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(40) NOT NULL,
  `salt` VARCHAR(40) NULL DEFAULT NULL,
  `email` VARCHAR(100) NOT NULL,
  `activation_code` VARCHAR(40) NULL DEFAULT NULL,
  `forgotten_password_code` VARCHAR(40) NULL DEFAULT NULL,
  `forgotten_password_time` INT(11) UNSIGNED NULL DEFAULT NULL,
  `remember_code` VARCHAR(40) NULL DEFAULT NULL,
  `created_on` INT(11) UNSIGNED NOT NULL,
  `last_login` INT(11) UNSIGNED NULL DEFAULT NULL,
  `active` TINYINT(1) UNSIGNED NULL DEFAULT NULL,
  `first_name` VARCHAR(50) NULL DEFAULT NULL,
  `last_name` VARCHAR(50) NULL DEFAULT NULL,
  `company` VARCHAR(100) NULL DEFAULT NULL,
  `phone` VARCHAR(20) NULL DEFAULT NULL,
  `departamento_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `departamento_id` (`departamento_id` ASC),
  CONSTRAINT `cms_users_ibfk_1`
    FOREIGN KEY (`departamento_id`)
    REFERENCES `jabalies_dajer`.`cms_departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_users_groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_users_groups` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INT(10) UNSIGNED NOT NULL,
  `group_id` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `user_users_groups` (`user_id` ASC),
  INDEX `group_users_groups` (`group_id` ASC),
  CONSTRAINT `group_users_groups`
    FOREIGN KEY (`group_id`)
    REFERENCES `jabalies_dajer`.`cms_groups` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `user_users_groups`
    FOREIGN KEY (`user_id`)
    REFERENCES `jabalies_dajer`.`cms_users` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_video`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_video` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(37) NOT NULL,
  `link` VARCHAR(350) NOT NULL,
  `texto` VARCHAR(117) NULL,
  `fecha` DATE NOT NULL,
  `imagen_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cms_video_cms_imagen1_idx` (`imagen_id` ASC),
  CONSTRAINT `fk_cms_video_cms_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 6;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_telefono`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_telefono` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero` VARCHAR(20) NOT NULL,
  `contactenos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_telefono_cms_contactenos1_idx` (`contactenos_id` ASC),
  CONSTRAINT `fk_telefono_cms_contactenos1`
    FOREIGN KEY (`contactenos_id`)
    REFERENCES `jabalies_dajer`.`cms_contactenos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_email`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_email` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `contactenos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_email_cms_contactenos1_idx` (`contactenos_id` ASC),
  CONSTRAINT `fk_email_cms_contactenos1`
    FOREIGN KEY (`contactenos_id`)
    REFERENCES `jabalies_dajer`.`cms_contactenos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_horario_atencion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_horario_atencion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `dia_inicio` INT NOT NULL,
  `dia_final` INT NOT NULL,
  `hora_inicio_temp1` TIME NOT NULL,
  `hora_inicio_temp2` TIME NOT NULL,
  `hora_final_temp1` VARCHAR(45) NOT NULL,
  `hora_final_temp2` VARCHAR(45) NOT NULL,
  `contactenos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_horario_atencion_cms_contactenos1_idx` (`contactenos_id` ASC),
  CONSTRAINT `fk_horario_atencion_cms_contactenos1`
    FOREIGN KEY (`contactenos_id`)
    REFERENCES `jabalies_dajer`.`cms_contactenos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_catalogos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_catalogos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(35) NOT NULL,
  `texto` VARCHAR(64) NULL,
  `file_path` VARCHAR(255) NULL,
  `imagen_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_catalogos_cms_imagen1_idx` (`imagen_id` ASC),
  CONSTRAINT `fk_catalogos_cms_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_servicio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_servicio` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(67) NOT NULL,
  `texto` VARCHAR(1300) NOT NULL,
  `imagen_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_servicio_cms_imagen1_idx` (`imagen_id` ASC),
  CONSTRAINT `fk_servicio_cms_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_destacado_slider`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_destacado_slider` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(27) NOT NULL,
  `texto` VARCHAR(120) NOT NULL,
  `imagen_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cms_destacado_slider_cms_imagen1_idx` (`imagen_id` ASC),
  CONSTRAINT `fk_cms_destacado_slider_cms_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_logos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_logos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `imagen_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_logos_cms_imagen1_idx` (`imagen_id` ASC),
  CONSTRAINT `fk_logos_cms_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_acerca_de`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_acerca_de` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `texto` VARCHAR(400) NOT NULL,
  `imagen_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_acerca_de_cms_imagen1_idx` (`imagen_id` ASC),
  CONSTRAINT `fk_acerca_de_cms_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_producto` (
  `id` INT NOT NULL,
  `titulo` VARCHAR(47) NOT NULL,
  `intro` VARCHAR(154) NOT NULL,
  `texto` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_imagen_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_imagen_producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `imagen_id` INT(11) NOT NULL,
  `producto_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cms_imagen_producto_cms_imagen1_idx` (`imagen_id` ASC),
  INDEX `fk_cms_imagen_producto_cms_producto1_idx` (`producto_id` ASC),
  CONSTRAINT `fk_cms_imagen_producto_cms_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_imagen_producto_cms_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `jabalies_dajer`.`cms_producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jabalies_dajer`.`cms_categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jabalies_dajer`.`cms_categoria` (
  `id` INT NOT NULL,
  `titulo` VARCHAR(32) NOT NULL,
  `texto` VARCHAR(154) NOT NULL,
  `imagen_id` INT(11) NOT NULL,
  `categoria_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_categorias_cms_imagen1_idx` (`imagen_id` ASC),
  INDEX `fk_cms_categoria_cms_categoria1_idx` (`categoria_id` ASC),
  CONSTRAINT `fk_categorias_cms_imagen1`
    FOREIGN KEY (`imagen_id`)
    REFERENCES `jabalies_dajer`.`cms_imagen` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_categoria_cms_categoria1`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `jabalies_dajer`.`cms_categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
