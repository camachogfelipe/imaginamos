<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class _backup_db extends Back_Controller {

    protected $admin_area = true;
    public function __construct() {
        parent::__construct();
    }

    public function index() {

        if (isset($_POST['generar']))
            $this->_data['console'] = $this->genBackup($this->db->database, 0777);
        else
            $this->_data['console'] = "";

        return $this->build('_generator');
    }

    /**
     * Generates Model class files from a MySQL database
     * @param int $chmod Chmod for file manager
     */
    public function genBackup($dbname = "base_db", $chmod = null) {
        try {

            $html = "";
            $smt1 = $this->db->query("SHOW TABLES");
            $tables1 = $smt1->result_array();
            $tables = array();
            foreach ($tables1 as $tbl1) {
                if (stristr($_SERVER['SERVER_SOFTWARE'], 'Win32')) {
                    $tblname1 = $tbl1['Tables_in_' . strtolower($dbname)];
                } else {
                    $tblname1 = $tbl1['Tables_in_' . $dbname];
                }
                $tables[] = $tblname1;
            }


            $sql = "/*!40101 SET NAMES utf8 */;\n/*!40101 SET SQL_MODE=''*/;\n\n\n/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;\n/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;\n/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;\n/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;\n\n--\n-- Base de datos: `$dbname`\n--\n\n";

            $sql .= "CREATE DATABASE IF NOT EXISTS {$dbname} ;\n\n";
            $sql .= "USE {$dbname} ;\n\n";


            foreach ($tables as $table) {
                $html .= "<tr><td>Backing up {$table} table...</td></tr>";

                $result = $this->db->query('SELECT * FROM ' . $table);
                $fields = $this->db->list_fields($table);
                $numFields = count($fields);

                $sql .= "\n\n-------------------------------------------------------\n\n--\n-- Estructura de tabla para la tabla `$table`\n--\n\nDROP TABLE IF EXISTS $table ;";
                $row_result = $this->db->query('SHOW CREATE TABLE ' . $table);
                $row2 = $row_result->result_array();
                $row2 = array_values($row2[0]);
                /* $matches = array();
                  preg_match("/COMMENT '(.*?)'/", $row2[1], $matches)."<br /><br />";
                  echo $matches[0]; */
                $sql.= "\n\n  {$row2[1]} ;\n\n";

                    foreach ($result->result_array() as $row) {
                        //($row = $result->_fetch_row())

                        $sql .= 'INSERT INTO ' . $table . ' VALUES(';
                        $j = 0;
                        foreach ($fields as $field) {
                            $row[$field] = addslashes($row[$field]);
                            $row[$field] = str_replace("\n", "\\n", $row[$field]);
                            if (isset($row[$field])) {
                                $sql .= '"' . $row[$field] . '"';
                            } else {
                                $sql.= '""';
                            }

                            if ($j < ($numFields - 1)) {
                                $sql .= ',';
                            }
                            $j++;
                        }
                        $sql.= ");\n";
                  }
               

                $sql.="\n\n/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;\n/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;\n/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;\n/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;";

                $html .= " OK" . "<br />";
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
            return false;
        }

        $this->create(BACKPATH . "_backup_db/backup/db-backup-" . $dbname . "-" . date("Ymd-His", time()) . ".sql", $sql, 'w+', $chmod);


        return $html . " Todos los backup generados se encuentran en la carpeta backup de este modulo.";
    }

    /**
     * Reads the contents of a given file
     * @param string $fullFilePath Full path to file whose contents should be read
     * @return string|bool Returns file contents or false if file not found
     */
    public function readFileContents($fullFilePath, $flags = 0, resource $context = null, $offset = -1, $maxlen = null) {
        if (file_exists($fullFilePath)) {
            if ($maxlen !== null)
                return file_get_contents($fullFilePath, $flags, $context, $offset, $maxlen);
            else
                return file_get_contents($fullFilePath, $flags, $context, $offset);
        } else {
            return false;
        }
    }

    /**
     * Delete a folder (and all files and folders below it)
     * @param string $path Path to folder to be deleted
     * @param bool $deleteSelf true if the folder should be deleted. false if just its contents.
     * @return int|bool Returns the total of deleted files/folder. Returns false if delete failed
     */
    public function delete($path, $deleteSelf = true) {

        if (file_exists($path)) {
            //delete all sub folder/files under, then delete the folder itself
            if (is_dir($path)) {
                if ($path[strlen($path) - 1] != '/' && $path[strlen($path) - 1] != '\\') {
                    $path .= DIRECTORY_SEPARATOR;
                    $path = str_replace('\\', '/', $path);
                }
                if ($total = $this->purgeContent($path)) {
                    if ($deleteSelf)
                        if ($t = rmdir($path))
                            return $total + $t;
                    return $total;
                }
                else if ($deleteSelf) {
                    return rmdir($path);
                }
                return false;
            } else {
                return unlink($path);
            }
        }
    }

    /**
     * If the folder does not exist creates it (recursively)
     * @param string $path Path to folder/file to be created
     * @param mixed $content Content to be written to the file
     * @param string $writeFileMode Mode to write the file
     * @return bool Returns true if file/folder created
     */
    public function create($path, $content = null, $writeFileMode = 'w+', $chmod = 0777) {
        //create file if content not empty
        if (!empty($content)) {
            if (strpos($path, '/') !== false || strpos($path, '\\') !== false) {
                $path = str_replace('\\', '/', $path);
                $filename = $path;
                $path = explode('/', $path);
                array_splice($path, sizeof($path) - 1);

                $path = implode('/', $path);
                if ($path[strlen($path) - 1] != '/') {
                    $path .= '/';
                }
            } else {
                $filename = $path;
            }

            if ($filename != $path && !file_exists($path))
                mkdir($path, $chmod, true);
            $fp = fopen($filename, $writeFileMode);
            $rs = fwrite($fp, $content);
            fclose($fp);

            return ($rs > 0);
        }else {
            if (!file_exists($path)) {
                return mkdir($path, $chmod, true);
            } else {
                return true;
            }
        }
    }




}
