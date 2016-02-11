<?php
/**
 * This file contains the Backup_Database class wich performs
 * a partial or complete backup of any given MySQL database
 * @author Daniel López Azaña <http://www.daniloaz.com>
 * @version 1.0
 */
 
// Report all errors
error_reporting(E_ALL);
set_time_limit(0);
 
/**
 * Definir parametros de la base de datos a continuación
 */
define("DB_USER", 'pbabase'); /* Nombre de usuario de la base de datos */
define("DB_PASSWORD", 'Pba@260613'); /* Clave de acceso del usuario de la base de datos */
define("DB_NAME", 'pbabase'); /* Nombre de la base de datos a sacar backup */
define("DB_HOST", 'pbabase.db.11341161.hostedresource.com'); /* Nombre del sevidor de donde sacar backup de la base de datos */
define("OUTPUT_DIR", 'BD'); /* Nombre del directorio donde se alojará el archivo de backup de la base de datos */
define("TABLES", '*'); /* Tablas a sacarle backup. * si es a todas las tablas */
/**
 * Fin definición de los parametros de la base de datos
 */


/**
 * Instantiate Backup_Database and perform backup
 */
$backupDatabase = new Backup_Database(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$status = $backupDatabase->backupTables(TABLES, OUTPUT_DIR) ? 'OK' : 'KO';
//$status = $backupDatabase->insertTables() ? 'OK' : 'KO';
echo "<br /><br /><br />Backup result: ".$status;
 
/**
 * The Backup_Database class
 */
class Backup_Database {
    /**
     * Host where database is located
     */
    var $host = '';
 
    /**
     * Username used to connect to database
     */
    var $username = '';
 
    /**
     * Password used to connect to database
     */
    var $passwd = '';
 
    /**
     * Database to backup
     */
    var $dbName = '';
 
    /**
     * Database charset
     */
    var $charset = '';
 
    /**
     * Constructor initializes database
     */
    function Backup_Database($host, $username, $passwd, $dbName, $charset = 'utf8')
    {
        $this->host     = $host;
        $this->username = $username;
        $this->passwd   = $passwd;
        $this->dbName   = $dbName;
        $this->charset  = $charset;
 
        $this->initializeDatabase();
    }
 
    protected function initializeDatabase()
    {
        $conn = mysql_pconnect($this->host, $this->username, $this->passwd);
        mysql_select_db($this->dbName, $conn);
        if (! mysql_set_charset ($this->charset, $conn))
        {
            mysql_query('SET NAMES '.$this->charset);
        }
    }
 
    /**
     * Backup the whole database or just some tables
     * Use '*' for whole database or 'table1 table2 table3...'
     * @param string $tables
     */
    public function backupTables($tables = '*', $outputDir = '.')
    {
        try
        {
            /**
            * Tables to export
            */
            if($tables == '*')
            {
                $tables = array();
                $result = mysql_query('SHOW TABLES');
                while($row = mysql_fetch_row($result))
                {
                    $tables[] = $row[0];
                }
            }
            else
            {
                $tables = is_array($tables) ? $tables : explode(',',$tables);
            }
						
						$sql = "/*!40101 SET NAMES utf8 */;\n".
									 "/*!40101 SET SQL_MODE=''*/;\n\n".
									 "/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;\n".
									 "/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;\n".
									 "/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;\n".
									 "/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;\n\n";
 
            $sql .= 'CREATE DATABASE IF NOT EXISTS '.$this->dbName.";\n\n";
            $sql .= 'USE '.$this->dbName.";\n\n";
 
            /**
            * Iterate tables
            */
            foreach($tables as $table)
            {
                echo "Backing up ".$table." table...";
 
                $result = mysql_query('SELECT * FROM '.$table);
                $numFields = mysql_num_fields($result);
 
                $sql .= 'DROP TABLE IF EXISTS '.$table.';';
                $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
                $sql.= "\n\n".$row2[1].";\n\n";
 
                for ($i = 0; $i < $numFields; $i++)
                {
                    while($row = mysql_fetch_row($result))
                    {
                        $sql .= 'INSERT INTO '.$table.' VALUES(';
                        for($j=0; $j<$numFields; $j++)
                        {
                            $row[$j] = addslashes($row[$j]);
                            $row[$j] = str_replace("\n","\\n",$row[$j]);
                            if (isset($row[$j]))
                            {
                                $sql .= '"'.$row[$j].'"' ;
                            }
                            else
                            {
                                $sql.= '""';
                            }
 
                            if ($j < ($numFields-1))
                            {
                                $sql .= ',';
                            }
                        }
 
                        $sql.= ");\n";
                    }
                }
 
                echo " OK" . "<br />";
            }
						$sql.="\n\n".
									"/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;\n".
									"/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;\n".
									"/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;\n".
									"/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;\n";
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
            return false;
        }
 
        return $this->saveFile($sql, $outputDir);
    }
		
		 public function insertTables()
    {
        try
        {
            /**
            * Tables to export
            */
            $tables = array();
							$tables[0] = "CREATE TABLE `cms_personal` (
`id_fundation` INT(11) NOT NULL AUTO_INCREMENT,
`titulo` VARCHAR(250) DEFAULT NULL,
`texto` TEXT,
`imagen` VARCHAR(250) DEFAULT NULL,
PRIMARY KEY (`id_fundation`)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8";
							$tables[1] = "CREATE TABLE `cms_company` (
`id` int(5) NOT NULL AUTO_INCREMENT,
`texto` text COLLATE utf8_unicode_ci NOT NULL,
`imagen` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
							$tables[2] = "INSERT INTO `pbabase`.`cms_user` (`username_user`, `password_user`, `email_user`, `rol_user`) VALUES ('administrator', '475266560c6d9f03f9ec80340218fa4c', 'cms@imaginamos.com', 'admin')";
							$tables[3] = "INSERT INTO `pbabase`.`cms_personal` (`texto`, `imagen`) VALUES ('In the very near future, we will place our Foundation on this Web Site.  \r\nBasically, it is geared to not only further enhance the priceless quality of 2 of our 7 native indigenous groups, but also foster the development of a better lifestyle for them. These 2 native indigenous groups are the Emberas & the Kunas. It\'s just a matter of giving back to life, part of what LIFE has given us.... & as a testimonial as to how we at PBA Holding Group have literally grown precisely because of these natives & their kids.', 'foundation1373303453.jpg');";
							$tables[4] = "INSERT INTO `pbabase`.`cms_company` (`texto`, `imagen`) VALUES ('In the very near future, we will place our Foundation on this Web Site.  \r\nBasically, it is geared to not only further enhance the priceless quality of 2 of our 7 native indigenous groups, but also foster the development of a better lifestyle for them. These 2 native indigenous groups are the Emberas & the Kunas. It\'s just a matter of giving back to life, part of what LIFE has given us.... & as a testimonial as to how we at PBA Holding Group have literally grown precisely because of these natives & their kids.', 'foundation1373303453.jpg');";
            /**
            * Iterate tables
            */
            foreach($tables as $table)
            {
                echo "Execute to ".$table;
 
                $result = mysql_query($table);
								echo "<br />";
 
                echo " OK" . "<br />";
            }
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
            return false;
        }
 
        return $this->saveFile($sql, $outputDir);
    }
 
    /**
     * Save SQL to file
     * @param string $sql
     */
    protected function saveFile(&$sql, $outputDir = '.')
    {
        if (!$sql) return false;
 
        try
        {
            $handle = fopen($outputDir.'/db-backup-'.$this->dbName.'-'.date("Ymd-His", time()).'.sql','w+');
            fwrite($handle, $sql);
            fclose($handle);
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
            return false;
        }
 
        return true;
    }
}