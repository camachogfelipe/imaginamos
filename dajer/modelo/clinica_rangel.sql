SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `clinica_rangel` DEFAULT CHARACTER SET latin1 ;
USE `clinica_rangel` ;

-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_api_oauth`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_api_oauth` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `provider` VARCHAR(255) NOT NULL ,
  `strategy` VARCHAR(255) NOT NULL ,
  `api_key` VARCHAR(255) NOT NULL ,
  `api_secret` VARCHAR(255) NOT NULL ,
  `scope` VARCHAR(255) NOT NULL ,
  `active` TINYINT(4) NOT NULL DEFAULT '0' ,
  `active_oauth` TINYINT(4) NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_contacto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_contacto` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `direccion` VARCHAR(28) NULL DEFAULT NULL ,
  `edificio` VARCHAR(28) NULL DEFAULT NULL ,
  `barrio` VARCHAR(23) NULL DEFAULT NULL ,
  `ciudad` VARCHAR(20) NULL DEFAULT NULL ,
  `telefono` VARCHAR(18) NULL DEFAULT NULL ,
  `mobile` VARCHAR(18) NULL DEFAULT NULL ,
  `email` VARCHAR(23) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_departamento`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_departamento` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 33
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_groups`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_groups` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(20) NOT NULL ,
  `description` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_permissions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_permissions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL DEFAULT NULL ,
  `var` VARCHAR(255) NULL DEFAULT NULL ,
  `type` ENUM('module','function','component') NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_groups_permissions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_groups_permissions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `group_id` INT(10) UNSIGNED NOT NULL ,
  `permission_id` INT(11) NOT NULL ,
  `view` TINYINT(1) NULL DEFAULT '0' ,
  `create` TINYINT(1) NULL DEFAULT '0' ,
  `update` TINYINT(1) NULL DEFAULT '0' ,
  `delete` TINYINT(1) NULL DEFAULT '0' ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_cms_users_permissions_cms_permissions1_idx` (`permission_id` ASC) ,
  INDEX `fk_cms_groups_permissions_cms_groups1_idx` (`group_id` ASC) ,
  CONSTRAINT `fk_cms_groups_permissions_cms_groups1`
    FOREIGN KEY (`group_id` )
    REFERENCES `clinica_rangel`.`cms_groups` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_groups_permissions_cms_permissions1`
    FOREIGN KEY (`permission_id` )
    REFERENCES `clinica_rangel`.`cms_permissions` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`imagen`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`imagen` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `path` VARCHAR(255) NOT NULL ,
  `name` VARCHAR(70) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 557
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_login_attempts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_login_attempts` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `ip_address` VARBINARY(16) NOT NULL ,
  `login` VARCHAR(100) NOT NULL ,
  `time` INT(11) UNSIGNED NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_menu`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_menu` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `parent` INT(11) NULL DEFAULT NULL ,
  `name` VARCHAR(255) NULL DEFAULT NULL ,
  `name_short` VARCHAR(20) NULL DEFAULT NULL ,
  `url` TEXT NULL DEFAULT NULL ,
  `content` TEXT NULL DEFAULT NULL ,
  `image` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `nombre_UNIQUE` (`name` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_oauth_config`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_oauth_config` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `uri` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_redes_sociales`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_redes_sociales` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `red_social` VARCHAR(100) NULL DEFAULT NULL ,
  `link_red` VARCHAR(255) NULL DEFAULT NULL ,
  `fecha_creacion` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_sessions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_sessions` (
  `session_id` VARCHAR(40) NOT NULL DEFAULT '0' ,
  `ip_address` VARCHAR(45) NOT NULL DEFAULT '0' ,
  `user_agent` VARCHAR(120) NOT NULL ,
  `last_activity` INT(10) UNSIGNED NOT NULL DEFAULT '0' ,
  `user_data` TEXT NOT NULL ,
  PRIMARY KEY (`session_id`) ,
  INDEX `last_activity_idx` (`last_activity` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `ip_address` VARBINARY(16) NOT NULL ,
  `username` VARCHAR(100) NOT NULL ,
  `password` VARCHAR(40) NOT NULL ,
  `salt` VARCHAR(40) NULL DEFAULT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  `activation_code` VARCHAR(40) NULL DEFAULT NULL ,
  `forgotten_password_code` VARCHAR(40) NULL DEFAULT NULL ,
  `forgotten_password_time` INT(11) UNSIGNED NULL DEFAULT NULL ,
  `remember_code` VARCHAR(40) NULL DEFAULT NULL ,
  `created_on` INT(11) UNSIGNED NOT NULL ,
  `last_login` INT(11) UNSIGNED NULL DEFAULT NULL ,
  `active` TINYINT(1) UNSIGNED NULL DEFAULT NULL ,
  `first_name` VARCHAR(50) NULL DEFAULT NULL ,
  `last_name` VARCHAR(50) NULL DEFAULT NULL ,
  `company` VARCHAR(100) NULL DEFAULT NULL ,
  `phone` VARCHAR(20) NULL DEFAULT NULL ,
  `departamento_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `departamento_id` (`departamento_id` ASC) ,
  CONSTRAINT `cms_users_ibfk_1`
    FOREIGN KEY (`departamento_id` )
    REFERENCES `clinica_rangel`.`cms_departamento` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`cms_users_groups`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`cms_users_groups` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `group_id` INT(10) UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `user_users_groups` (`user_id` ASC) ,
  INDEX `group_users_groups` (`group_id` ASC) ,
  CONSTRAINT `group_users_groups`
    FOREIGN KEY (`group_id` )
    REFERENCES `clinica_rangel`.`cms_groups` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `user_users_groups`
    FOREIGN KEY (`user_id` )
    REFERENCES `clinica_rangel`.`cms_users` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`barner_principal`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`barner_principal` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(27) NOT NULL ,
  `link` VARCHAR(255) NULL ,
  `imagen_id` INT(11) NOT NULL COMMENT '1054 px x 400 px' ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_barner_cms_imagen1_idx` (`imagen_id` ASC) ,
  CONSTRAINT `fk_barner_cms_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`pagina`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`pagina` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(60) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`texto_principal`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`texto_principal` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(80) NOT NULL ,
  `texto` VARCHAR(670) NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_texto_principal_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_texto_principal_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`contenedor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`contenedor` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(55) NOT NULL ,
  `texto` VARCHAR(350) NULL ,
  `imagen_id` INT(11) NOT NULL COMMENT '382 x 200' ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_pasos_imagen1_idx` (`imagen_id` ASC) ,
  INDEX `fk_contenedor_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_pasos_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contenedor_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`destacado`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`destacado` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(33) NOT NULL ,
  `texto` VARCHAR(117) NULL ,
  `link` VARCHAR(355) NULL ,
  `imagen_id` INT(11) NOT NULL COMMENT '288 x 130' ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_destacado_imagen1_idx` (`imagen_id` ASC) ,
  INDEX `fk_destacado_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_destacado_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_destacado_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`video`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`video` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(37) NULL ,
  `link` VARCHAR(350) NOT NULL ,
  `imagen_id` INT(11) NOT NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_video_imagen1_idx` (`imagen_id` ASC) ,
  INDEX `fk_video_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_video_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_video_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`barner`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`barner` (
  `id` INT NOT NULL ,
  `imagen_id` INT(11) NOT NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_barner_trtamiento_imagen1_idx` (`imagen_id` ASC) ,
  INDEX `fk_barner_trtamiento_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_barner_trtamiento_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_barner_trtamiento_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`analisis_gratuito`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`analisis_gratuito` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(23) NOT NULL ,
  `texto` VARCHAR(138) NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_analisis_gratuito_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_analisis_gratuito_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`receta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`receta` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(52) NOT NULL ,
  `texto` VARCHAR(528) NULL ,
  `imagen_id` INT(11) NOT NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_receta_imagen1_idx` (`imagen_id` ASC) ,
  INDEX `fk_receta_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_receta_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_receta_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`contenedor_alimentacion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`contenedor_alimentacion` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(34) NOT NULL ,
  `subtiulo` VARCHAR(22) NULL ,
  `texto` VARCHAR(470) NULL ,
  `imagen_id` INT(11) NOT NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_contenedor_alimentacion_imagen1_idx` (`imagen_id` ASC) ,
  INDEX `fk_contenedor_alimentacion_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_contenedor_alimentacion_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contenedor_alimentacion_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`asi_facil`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`asi_facil` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(64) NOT NULL ,
  `texto` VARCHAR(52) NULL ,
  `link` VARCHAR(350) NULL ,
  `imagen_id` INT(11) NOT NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_asi_facil_imagen1_idx` (`imagen_id` ASC) ,
  INDEX `fk_asi_facil_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_asi_facil_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_asi_facil_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`contenedor_testimonio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`contenedor_testimonio` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(44) NOT NULL ,
  `texto` VARCHAR(360) NOT NULL ,
  `nombre` VARCHAR(41) NOT NULL ,
  `pagina_id` INT NOT NULL ,
  `imagen_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_contenedor_testimonio_pagina1_idx` (`pagina_id` ASC) ,
  INDEX `fk_contenedor_testimonio_imagen1_idx` (`imagen_id` ASC) ,
  CONSTRAINT `fk_contenedor_testimonio_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contenedor_testimonio_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`acordeon_lugar`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`acordeon_lugar` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(49) NOT NULL ,
  `texto` VARCHAR(200) NULL ,
  `link` VARCHAR(350) NULL ,
  `imagen_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_acordeon_lugar_imagen1_idx` (`imagen_id` ASC) ,
  CONSTRAINT `fk_acordeon_lugar_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`beneficio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`beneficio` (
  `id` INT NOT NULL ,
  `texto` VARCHAR(89) NOT NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_beneficio_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_beneficio_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`testimonios_fitcamp`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`testimonios_fitcamp` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(37) NOT NULL ,
  `peso_antes` CHAR(5) NOT NULL ,
  `peso_despues` CHAR(5) NOT NULL ,
  `descripcion_persona` VARCHAR(98) NULL ,
  `texto` TEXT NOT NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_testimonios_fitcamp_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_testimonios_fitcamp_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`contenedor_renacimiento`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`contenedor_renacimiento` (
  `id` INT NOT NULL ,
  `titulo_parrafo1` VARCHAR(36) NULL ,
  `titulo_parrafo2` VARCHAR(36) NULL ,
  `parrafo1` VARCHAR(530) NULL ,
  `parrafo2` VARCHAR(530) NULL ,
  `pagina_id` INT NOT NULL ,
  `imagen_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_contenedor_renacimiento_pagina1_idx` (`pagina_id` ASC) ,
  INDEX `fk_contenedor_renacimiento_imagen1_idx` (`imagen_id` ASC) ,
  CONSTRAINT `fk_contenedor_renacimiento_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contenedor_renacimiento_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`imagen_beneficio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`imagen_beneficio` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `imagen_id` INT(11) NOT NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_imagen_beneficio_imagen1_idx` (`imagen_id` ASC) ,
  INDEX `fk_imagen_beneficio_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_imagen_beneficio_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_imagen_beneficio_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`dra_rosalinda`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`dra_rosalinda` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(34) NOT NULL ,
  `descripcion` VARCHAR(221) NOT NULL ,
  `titulo_texto` VARCHAR(41) NOT NULL ,
  `texto` VARCHAR(995) NOT NULL ,
  `titulo_link` VARCHAR(93) NULL ,
  `link` VARCHAR(350) NULL ,
  `pagina_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_dra_rosalinda_pagina1_idx` (`pagina_id` ASC) ,
  CONSTRAINT `fk_dra_rosalinda_pagina1`
    FOREIGN KEY (`pagina_id` )
    REFERENCES `clinica_rangel`.`pagina` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`preguntas_frecuentes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`preguntas_frecuentes` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `pregunta` VARCHAR(92) NOT NULL ,
  `texto` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clinica_rangel`.`contactenos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `clinica_rangel`.`contactenos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `texto` VARCHAR(588) NOT NULL ,
  `imagen_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_contactenos_imagen1_idx` (`imagen_id` ASC) ,
  CONSTRAINT `fk_contactenos_imagen1`
    FOREIGN KEY (`imagen_id` )
    REFERENCES `clinica_rangel`.`imagen` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `clinica_rangel` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
