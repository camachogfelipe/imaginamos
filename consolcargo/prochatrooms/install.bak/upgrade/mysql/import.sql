--
-- Table: `prochatrooms_group`
--

ALTER TABLE `prochatrooms_group` 
				  ADD `groupShare` VARCHAR( 3 ) NOT NULL DEFAULT '0',
				  ADD `groupVideo` VARCHAR( 3 ) NOT NULL DEFAULT '0';

--
-- Table: `prochatrooms_config`
--
				  
ALTER TABLE `prochatrooms_config`	
				  DROP `moderator`,
				  DROP `speaker`;	
				  
--
-- Table: `prochatrooms_config`
--
				  
UPDATE prochatrooms_config 
				  SET 
				  `adminLogin` = '25e4ee4e9229397b6b17776bfceaf8e7',
				  `admin` = 'admin',
				  `avatars` = 'couple.gif,female.gif,male.gif,phone.gif,' 
				  WHERE id=1;		

--
-- Table: `prochatrooms_users`
--

ALTER TABLE `prochatrooms_users` 
				  ADD `admin` VARCHAR( 3 ) NOT NULL DEFAULT '0',
				  ADD `moderator` VARCHAR( 3 ) NOT NULL DEFAULT '0',	
				  ADD `speaker` VARCHAR( 3 ) NOT NULL DEFAULT '0';					  