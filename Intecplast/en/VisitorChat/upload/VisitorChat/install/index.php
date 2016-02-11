<?php

require 'classes/class.Controller.php';
require 'errors.php';
require '../language.php';

class Installer extends Controller
{
	
	public function Main()
	{
		$post = $this->Check(array("host","username","password","db_name","mail"));
		
		if($post && $this->Uploads() && $this->Config())
		{
			try {
				
				$this->DB_Connect($this->post('host'), $this->post('username'), $this->post('password'));				
				
			} catch(Exception $e)
			{
				$this->Fill(100);
				return;
			}
			
			/**
			 * Try to create database silently and use it
			 */
			try {
				
				
				$db_create = $this->db->prep("CREATE DATABASE IF NOT EXISTS `".$_POST['db_name']."`");
				$this->db->Exec($db_create);
				
				$use_db = $this->db->prep("USE `".$_POST['db_name']."`");
				$this->db->Exec($use_db);	
				
			} catch(Exception $e)
			{
				$this->Fill(200);
				return;
			}
			
			/**
			 * Create table messaging
			 */
			try {
				
				$db_create = $this->db->prep("
				CREATE TABLE IF NOT EXISTS `messaging` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `msg` text NOT NULL,
				  `user` int(11) NOT NULL,
				  `to_user` int(10) unsigned NOT NULL,
				  `type` enum('user','admin') NOT NULL,
				  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  PRIMARY KEY (`id`),
				  KEY `time` (`time`),
				  KEY `user` (`user`,`to_user`),
				  KEY `user_single` (`user`),
				  KEY `to_user_single` (`to_user`),
				  KEY `type` (`type`)
				) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
				");

				$this->db->Exec($db_create);
				
				
			} catch(Exception $e)
			{
				$this->Fill(300);
				return;
			}
			
			/**
			 * Create table messaging_admin
			 */
			try {
				
				$db_create = $this->db->prep("
				CREATE TABLE IF NOT EXISTS `messaging_admin` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `username` varchar(255) NOT NULL,
				  `pass` varchar(40) NOT NULL,
				  `group` int(11) NOT NULL,
				  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
				  PRIMARY KEY (`id`),
				  KEY `username` (`username`,`pass`),
				  KEY `group` (`group`,`time`)
				) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
				
				INSERT INTO `messaging_admin` (`id`, `username`, `pass`, `group`, `time`) VALUES
				(1, 'admin', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 1, '2011-05-18 19:20:14');
				
				");

				$this->db->Exec($db_create);
				
				
			} catch(Exception $e)
			{
				$this->Fill(400);
				return;
			}
			
			/**
			 * Create table messaging_ban
			 */
			try {
				
				$db_create = $this->db->prep("
				CREATE TABLE IF NOT EXISTS `messaging_ban` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `ip` int(10) unsigned NOT NULL,
				  `host` varchar(255) NOT NULL,
				  PRIMARY KEY (`id`),
				  UNIQUE KEY `ip` (`ip`)
				) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
				");

				$this->db->Exec($db_create);
				
				
			} catch(Exception $e)
			{
				$this->Fill(500);
				return;
			}

			/**
			 * Create table messaging_groups
			 */
			try {
				
				$db_create = $this->db->prep("
CREATE TABLE IF NOT EXISTS `messaging_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `groups` tinyint(1) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  `history` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `file` (`groups`,`banned`,`history`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
				
				INSERT INTO `messaging_groups` (`id`, `title`, `groups`, `banned`, `history`) VALUES
(1, 'Administrators', 1, 1, 1);
				");

				$this->db->Exec($db_create);
				
				
			} catch(Exception $e)
			{
				$this->Fill(600);
				return;
			}


			/**
			 * Create table messaging_history
			 */
			try {
				
				$db_create = $this->db->prep("
				CREATE TABLE IF NOT EXISTS `messaging_history` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `user` varchar(255) NOT NULL,
				  `from_ip` int(10) unsigned NOT NULL,
				  `email` varchar(255) NOT NULL,
				  `sess` varchar(255) NOT NULL,
				  `msg` text NOT NULL,
				  `admin` varchar(255) NOT NULL,
				  `type` enum('user','admin') NOT NULL,
				  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				  PRIMARY KEY (`id`),
				  KEY `sess` (`sess`),
				  KEY `time` (`time`),
				  KEY `email` (`email`),
				  FULLTEXT KEY `message` (`msg`)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
				");

				$this->db->Exec($db_create);
				
				
			} catch(Exception $e)
			{
				$this->Fill(700);
				return;
			}

			/**
			 * Create table messaging_users
			 */
			try {
				
				$db_create = $this->db->prep("
				CREATE TABLE IF NOT EXISTS `messaging_users` (
				  `user_id` int(11) NOT NULL AUTO_INCREMENT,
				  `nick` varchar(255) NOT NULL,
				  `email` varchar(255) NOT NULL,
				  `ip` int(10) unsigned NOT NULL,
				  `sess` varchar(255) NOT NULL,
                                  `upload` tinyint(1) NOT NULL DEFAULT '0',
				  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
				  PRIMARY KEY (`user_id`),
				  KEY `nickname` (`nick`),
				  KEY `sess` (`sess`)
				) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
				");

				$this->db->Exec($db_create);
				
				
			} catch(Exception $e)
			{
				$this->Fill(800);
				return;
			}

			/**
			 * Create table constraints
			 */
			try {
				
				$db_create = $this->db->prep("
				ALTER TABLE `messaging_admin`
				  ADD CONSTRAINT `messaging_admin_ibfk_1` FOREIGN KEY (`group`) REFERENCES `messaging_groups` (`id`) ON DELETE CASCADE;
				
				");

				$this->db->Exec($db_create);

				
			} catch(Exception $e)
			{
				$this->Fill(900);
				return;
			}

			/**
			 * Adding smiley tables
			 */
			try {
				
				$db_create = $this->db->prep("
                                CREATE TABLE IF NOT EXISTS `messaging_smiley` (
                                  `sign` varchar(255) NOT NULL,
                                  `filename` varchar(255) NOT NULL,
                                  PRIMARY KEY (`sign`)
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                                
                                INSERT INTO `messaging_smiley` (`sign`, `filename`) VALUES
                                (':(', 'sad.gif'),
                                (':)', 'smile.gif'),
                                (':*', 'kiss.gif'),
                                (':D', 'laugh.gif'),
                                (':P', 'tongue.gif'),
                                (':roll', 'rolleyes.gif'),
                                (':shock', 'shocked.gif'),
                                (':tired', 'tired.gif'),
                                (':]', 'grin.gif'),
                                (':|', 'blank.gif'),
                                (';)', 'wink.gif');
				");

				$this->db->Exec($db_create);
				
			} catch(Exception $e)
			{
				$this->Fill(1100);
				return;
			}                        
                        
			/**
			 * Write the configuration file
			 */
			try {
				
				$file = '../config.php';
				$contents = file_get_contents('config.txt.inc');
				echo $contents;
				
				$search = array(
				"%user",
				"%pass",
				"%host",
				"%db",
				"%email"
				);

				$replace = array(
					$this->post('username'),
					$this->post('password'),
					$this->post('host'),
					$this->post('db_name'),
					$this->post('mail')
				);
				
				$config = str_replace($search, $replace, $contents);
				
				$write = file_put_contents('../config.php', $config);
				
				if($write != false) {
					return true;
				} else {
					throw new Exception("");
				}
				
			} catch(Exception $e)
			{
				$this->Fill(1000);
				return;
			}			
						
		}
		
	}
	public function IsPDO()
	{
		return extension_loaded('pdo_mysql') ? true : false;
	}
	public function Uploads()
	{
		return $this->isWritable('../uploads');
	}
	public function Config()
	{
		return $this->isWritable('../config.php');
	}
	private function isWritable($file)
	{
		return is_writable($file) ? true : false;
	}
}

$class = new Installer();

$writable = $class->Uploads();
$config = $class->Config();
$pdo = $class->IsPDO();
$result = $class->Main();


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title><?php echo $_['ADMIN_SITE_TITLE']; ?></title>
  <meta name="description" content="" />
  <meta name="generator" content="Studio 3 http://aptana.com/" />
  <meta name="author" content="laptop" />

  <meta name="viewport" content="width=device-width; initial-scale=1.0" />

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico" />
  
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

		
		<script src="../admin/js/cufon-yui.js" type="text/javascript"></script>
		<link rel="stylesheet" href="stylesheet.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.js"></script> 
		<script src="../admin/js/AgencyFB_700.font.js" type="text/javascript"></script>
		<script type="text/javascript">

			
			
			
			$(document).ready(function(){
				

				dolzina = $(window).width();
				dolzina_obrazca = $("#login_form").width();
				
				$("#login_form").css("left", (dolzina/2)-(dolzina_obrazca/1.5)).fadeIn('slow'); 
				
				$("#submit").click(function(){
					$("#form_target").submit();
				});
				
				$('*').keypress(function(e) {
				        if(e.which == 13) {
				            $("#form_target").submit();
				        }
				    });
				    
				$(".error").click(function(){
					$(".problems").toggle();
				});    	
				
				$("#re_check").click(function(){ location.reload(); return false; });
				
				$("#back").click(function(){ parent.history.back(); });
				
				
				$("#thick").click(function(){
				
					var hasClass = $(this).hasClass("thick");
					
					if(hasClass)
					{
						$("#db_create").val(0);
						$(this).toggleClass("thick", false);	
					} else {
						$("#db_create").val(1);
						$(this).toggleClass("thick", true);					
					}

					return false;
				});
					
			});			
			Cufon.replace('label, span, .l1');
			</script>
</head>
<body>

<form method="post" id="form_target" action="">
<div class="login login_special" id="login_form">
	
	<?php if(!$result) { ?><div class="head_talk"><span>Welcome to the VisitorChat Installer</span></div><br /><?php } ?>
	
		<?php
	
	if(!$writable OR !$config OR !$pdo){
	
	?>
	<div class="error">Warning! There are some errors you have to fix, before proceeding. <a href="#">View Problems</a></div>
	<div class="problems">
		
		<ul>
		<?php if(!$writable) { ?>
			<li>Uploads directory is not writable! Make it writable for Web service user.</li>
		<?php } ?>
		<?php if(!$config) { ?>
			<li>config.php file is not writable! Make it writable for Web service user.</li>
		<?php } ?>
		</ul>
	</div>
	<a class="l1 l2" id="re_check" href="#">Re-Check</a>
	<?php 
	
	}
	
	?>

	<?php
	
	if($result){
	
	?>
	<span>Installation succeded!</span><br /><br />
	<div class="error">Congratulations. You have successfully installed all necesary tables and configuration files. Please remove install/ folder as soon as posible to avoid any security issues related to this installer.<p>You can now login to admin area with default username and password:<ul><li>Username: admin</li><li>Password: pass</li></ul>It is recommended, that you change your password as soon as you log in to your admin area.</p></div>
<a class="l1 l3" href="../admin/">Login to Admin area</a><br />
	<?php 
	
	}
	
	?>


	<?php
	
	if(!empty($class->error)){
	
	?>
	<div class="error">Warning! There are some errors you have to fix, before proceeding. <a href="#">View Problems</a></div>
	<div class="problems">
		
		<ul>
		<?php foreach($class->error as $key=>$val) { ?>
			<li><?php echo $_E[$key]; ?></li>
		<?php } ?>
		</ul>
		
	</div>
	<a class="l1 l2" id="back" href="../install/">Go Back</a>
	<?php 
	
	}
	
	?>
	
	<?php
	
	if($writable && $config && $pdo && empty($class->error) && !$result){
	
	?>
	<label>MySQL Host</label><input name="host" type="text" value="<?php echo $class->post('host') ?>" /><br />
	<label>MySQL Username</label><input name="username" value="<?php echo $class->post('username') ?>" type="text" /><br />
	<label>MySQL Password</label><input name="password" value="<?php echo $class->post('password') ?>" type="password" /><br />
	<label>Database name</label><input name="db_name" value="<?php echo $class->post('db_name') ?>" type="text" /><br />
	<label>E-mail</label><input name="mail" value="<?php echo $class->post('mail') ?>" type="text" /><br />
	
	<!--<label></label> <a id="thick" href="#" style="border:3px solid #3e606f; padding:6px; background-color:#f4f4f4; margin-top:10px; float:left"></a> <div style="font-size:12px; margin-top:12px; font-weight:bold; margin-left:10px; float:left;">Create database if one does not exist.</div> <input name="db_create" id="db_create" type="hidden" /><br />-->

	<label></label><a class="l1 l3" id="submit" href="#">INSTALL</a><br />
	<?php 
	
	}
	
	?>
	<div class="c"></div></div>
</form>

<div class="c"></div>
</body>
</html>