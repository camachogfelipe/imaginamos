<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class _generator_models extends Back_Controller {

    protected $admin_area = true;
    protected $enum_class = array('index.html','api_oauth', '_template', 'datamapperext', 'redes_sociales','ion_auth_model', 'ion_auth_mongodb_model', 'login_attempts', 'oauth_config');

    public function __construct() {
        parent::__construct();
        $dir = new DirectoryIterator(MODELSPATH);
        $model_name = array();
         foreach ($dir as $obj) {
            $nm = $obj->getFilename();    
            if ($nm != ".." AND $nm != "." AND $nm != "0" AND !is_null($nm) AND ($nm !== "")) {
               $model_name[] = str_replace('.php',"",$nm);
            }
         }
        $this->_data['enum_class'] = array_diff($model_name,$this->enum_class);
        $this->add_modular_assets('js', 'functions');
    }

    // ----------------------------------------------------------------------

    public function index() {
         if (isset($_POST['generar'])){
        $this->enum_class = array_merge(array_values($_POST), $this->enum_class);
        unset($this->enum_class['generar']);
         }
        if (isset($_POST['generar']))
            $this->_data['console'] = $this->genMySQL($this->db->database, 0777);
        else
            $this->_data['console'] = "";
        
       
        return $this->build('_generator');
    }

    public function get_coments($table) {
                $row_result = $this->db->query('SHOW CREATE TABLE ' . $table);
                $row2 = $row_result->result_array();
                $row2 = array_values($row2[0]);
                //echo "<pre>".print_r($row2)."</pre>"; 
                 $matches = array();
                 
                  
                 $poss = strpos($row2[1],'PRIMARY KEY');
                if(is_numeric($poss))
                       $body = substr ($row2[1],0,$poss);  
                 if(preg_match("/CREATE TABLE `(.*?)`/", $body, $matches)){ 
                     $body = str_replace($matches[0], "", $body) ;
                     $lineas = explode(',', $body);
                 } 
                //echo "<pre>".print_r($lineas)."</pre>";
                 $data_coment = array();
                foreach ($lineas as $value) {
                    $name = "none"; 
                    if(preg_match("/`(.*?)`/", $value, $matches)){
                      $name = $matches[1];
                    }
                    if(preg_match("/COMMENT '(.*?)'/", $value, $matches)){
                     $data_coment[$name] = $matches[1] ;
                   }
                  
                }
                return $data_coment;
    }
    
    /**
     * Generates Model class files from a MySQL database
     * @param int $chmod Chmod for file manager
     */
    public function genMySQL($dbname = "base_db", $chmod = null) {

        $smt1 = $this->db->query("SHOW TABLES");
        $tables1 = $smt1->result_array();
        $tables_has_many = array();
        foreach ($tables1 as $tbl1) {
            if (stristr($_SERVER['SERVER_SOFTWARE'], 'Win32')) {
                $tblname1 = $tbl1['Tables_in_' . strtolower($dbname)];
            } else {
                $tblname1 = $tbl1['Tables_in_' . $dbname];
            }
            $tables_has_many[str_replace("cms_", "", $tblname1)] = array();
        }

        $smt = $this->db->query("SHOW TABLES");
        $tables = $smt->result_array();
        $clsExtendedNum = 0;
        foreach ($tables as $tbl) {
            if (stristr($_SERVER['SERVER_SOFTWARE'], 'Win32')) {
                $tblname = $tbl['Tables_in_' . strtolower($dbname)];
            } else {
                $tblname = $tbl['Tables_in_' . $dbname];
            }
            $smt2 = null;
            unset($smt2);
            $smt2 = $this->db->query("DESC `$tblname`");
            $fields = $smt2->result_array();
            //print_r($fields);
            $classname = '';
            $autocopyrigth = "\n    /**\n     * @autor Elbert Tous\n     * @email elbert.tous@imaginamos.com\n     * @company Imaginamos.com | todos los derechos reservados\n     */\n
                        ";
            $classname = str_replace("cms_", "", $tblname);


            $filestr = "<?php\n" . $autocopyrigth . "\n\nclass {$classname} extends  DataMapper {\n";

            $pkey = '';
            $ftype = '';
            $metodo_fr = '';
            $fieldnames = array();

            $rules = array();
            foreach ($fields as $f) {
                $fstring = '';
                if (isset($f['Type']) && !empty($f['Type'])) {
                    preg_match('/([^\(]+)[\(]?([\d]*)?[\)]?(.+)?/', $f['Type'], $ftype);
                    $length = '';
                    $more = '';

                    if (isset($ftype[2]) && !empty($ftype[2]))
                        $length = " Max length is $ftype[2].";
                    if (isset($ftype[3]) && !empty($ftype[3])) {
                        $more = " $ftype[3].";
                        $ftype[3] = trim($ftype[3]);
                    }

                    $fstring = "\n    /**\n     * @var {$ftype[1]}$length$more\n     */\n";

                    //-------- generate rules for the setupValidation() in Model ------

                    $rule = array();
                    if ($rulename = self::dbDataTypeToRules(strtolower($ftype[1]))) {
                        if ('date' == $rulename)
                            $rule['rules'][] = 'valid_date';
                    }
                    //	$rule = array(array($rulename));




                    if (isset($ftype[3]) && $ftype[3] == 'unsigned')
                        $rule['rules']['min_length'] = 0;
                    if (ctype_digit($ftype[2])) {
                        if ($ftype[1] == 'varchar' || $ftype[1] == 'char')
                            $rule['rules']['max_length'] = intval($ftype[2]);
                        else if ($rulename == 'integer') {
                            $rule['rules']['max_length'] = intval($ftype[2]);
                        }
                    }

                    if (strtolower($f['Null']) == 'no' && (strpos(strtolower($f['Extra']), 'auto_increment') === false))
                        $rule['rules'][] = 'required';

                    if (!empty($rule)) {
                        $rule['label'] = strtoupper(str_replace("_", "", str_replace("_id", "", $f['Field'])));
                        $rules[$f['Field']] = $rule;
                    }
                }

                $filestr .= "$fstring    public \${$f['Field']};\n";
                $fieldnames[] = $f['Field'];
                if ($f['Key'] == 'PRI') {
                    $pkey = $f['Field'];
                }

                $pos = strpos($f['Field'], "_id");

                if ($pos !== false) {
                    $fn = "";
                    $fk = str_replace("_id", "", $f['Field']);
                    $compare = "";
                    for ($i = 1; $i < 10; $i++) {
                        $compare = str_replace($i . "_id", "", $f['Field']);
                        if (strcmp(strtolower($compare), strtolower($fk)) == 0) {
                            $fn = $i;
                            break;
                        }
                    }
                    
                    


                    $div = explode("_", $classname, 2);
                    if (count($div) == 2) {
                        if (array_key_exists($div[0], $tables_has_many) AND array_key_exists($div[1], $tables_has_many)) {
                            $tables_has_many[$div[0]][$div[1]] = array('class' => $div[0], 'other_field' => $div[0], 'join_other_as' => $div[1], 'join_self_as' => $div[0], 'join_table' => "cms_" . $classname);
                            $tables_has_many[$div[1]][$div[0]] = array('class' => $div[0], 'other_field' => $div[1], 'join_other_as' => $div[0], 'join_self_as' => $div[1], 'join_table' => "cms_" . $classname);
                        }
                    }
                    if ($classname == $fk) {
                        $relacion[$fk . $fn . "_basic"] = array('class' => $fk, 'other_field' => $classname . "_recurrences", 'join_table' => "cms_" . $fk, 'join_self_as' => $fk . $fn, 'join_other_as' => $fk . $fn);
                        $tables_has_many[$fk . $fn][$classname . "_recurrences"] = array('class' => $classname, 'other_field' => $fk . $fn . "_basic", 'join_table' => "cms_" . $classname, 'join_self_as' => $classname, 'join_other_as' => $classname);
                    } else {
                        $relacion[$fk . $fn] = array('class' => $fk, 'other_field' => $classname, 'join_other_as' => $fk . $fn, 'join_self_as' => $classname, 'join_table' => "cms_" . $fk);
                        $tables_has_many[$fk . $fn][$classname] = array('class' => $classname, 'other_field' => $fk . $fn, 'join_other_as' => $classname, 'join_self_as' => $fk . $fn, 'join_table' => "cms_" . $classname);
                    }
                  $metodo_fr .= "\n    public function get_".$fk . $fn."_list(\$campo=\"name\",\$where=array()) {\n         \$model = new ".$fk . $fn."();\n         \$model->where(\$where)->get();\n         \$arrList = array();\n         foreach (\$model as \$k) {\n         \t\$arrList [] = array(\n         \t\t'id' => \$k->id,\n         \t\t'name' => \$k->{\$campo},\n         \t);\n         }\n         return \$arrList;\n    }\n\n";
                  $metodo_fr .= "\n    public function get_".$fk . $fn."(\$join_retale=\"\") {\n         \$model = new ".$fk . $fn."();\n         if(\$join_retale!=\"\"){\n         \treturn \$model->join_related(\$join_retale)->get_by_".$classname."_id(\$this->id);\n         }else{\n         \treturn \$model->get_by_".$classname."_id(\$this->id);\n         }\n    }\n\n";
                }
            }

            $fieldnames = implode($fieldnames, "','");
            $filestr .= "\n    public \$table = '$classname';\n";
            $filestr .= "\n    public \$model = '$classname';\n";
            $filestr .= "    public \$primarykey = '$pkey';\n";
            $filestr .= "    public \$_fields = array('$fieldnames');\n";
            if (!empty($relacion)) {
                $filestr .= "\n    public \$has_one =  " . self::exportRules($relacion) . "\n\n\n";
                $relacion = array();
            } else {
                $filestr .= "\n    public \$has_one = array();";
            }

            $filestr .= "var_has_many";


            if (!empty($rules)) {
                $filestr .= "\n    public function __construct(\$id = NULL) {\n         parent::__construct(\$id);\n    }\n\n";
            }

            $filestr .= "\n    public function get_data(\$id = '', \$campo = 'name') {\n        \$obj = new \$this->model();\n        \$arrList = array();\n        if (empty(\$id)) {\n             \$obj->get_iterated();\n              foreach (\$obj as \$value) {\n                 \$arrList = array('id' => \$value->id,'name' => \$value->{\$campo});\n              }\n              return \$arrList;\n        } else {\n              return \$obj->get_by_id(\$id);\n        }\n    }\n\n";

            $filestr .= $metodo_fr;
            
            $filestr .= "\n    public function selected_id(\$related_id = '', \$related = 'modelo') {\n        \$obj = new \$this->model();\n        \$obj->where_related(\$related, 'id', \$related_id)->get();\n        if (\$obj->exists()) {\n        \treturn \$obj->id;\n        } else {\n        \treturn 0;\n        }\n    }\n\n";
    
            $filestr .= "\n    public function selected_multiple_id(\$id = '', \$related = 'modelo') {\n        \$obj = new \$this->model();\n        \$obj->join_related(\$related)->get_by_id(\$id);\n        \$array = array();\n        if (\$obj->exists()) {\n        \tforeach (\$obj as \$value) {\n        \t\t\$array[] = \$value->modelo_id;\n        \t}\n        }\n        return \$array;\n    }\n\n";
            
            $filestr .= "\n    public function get_rule(\$campo, \$rule){\n         if(array_key_exists(\$rule, \$this->validation[\$campo]['rules']))\n            return \$this->validation[\$campo]['rules'][\$rule];\n         else\n            return false;\n    }\n\n";

            $filestr .= "\n    public function is_rule(\$campo, \$rule){\n         if(in_array(\$rule, \$this->validation[\$campo]['rules']))\n            return true;\n         else\n            return false;\n    }\n\n";

            $filestr .= "\n    public function to_array_first_row() {\n     \$model = clone \$this;\n     \$model->get_by_id(1);\n     \$datos = array();\n      foreach (\$this->fields as \$key) {\n           if(\$key != 'id')\n             \$datos[\$key] = \$model->{\$key};\n      }\n      return \$datos;\n    }\n\n";

            $filestr .= "\n    public \$default_order_by = array('id' => 'desc');\n\n";

            $filestr .= "\n    public function post_model_init(\$from_cache = FALSE){}\n\n";

            $filestr .= "\n    public function _encrypt(\$field)\n    {\n          if (!empty(\$this->{\$field}))\n          {\n              if (empty(\$this->salt))\n              {\n                  \$this->salt = md5(uniqid(rand(), true));\n              }\n             \$this->{\$field} = sha1(\$this->salt . \$this->{\$field});\n          }\n    }\n\n";

            $filestr .= "\n    public \$validation =  " . self::exportRules($rules) . "\n\n";
            
            $filestr .= "\n    public \$coments =  " . self::exportRules($this->get_coments($tblname)) . ";\n\n";
            
            
            $filestr .= "}";
            $html = "<table><thead><th>Consola de archivos generados</th></thead><tbody>";
            $total = 0;
            $dats = array_merge( $this->enum_class,array_values($_POST));
            if (!in_array($classname, $this->enum_class)) {
                if ($this->create(MODELSPATH . "{$classname}.php", $filestr, 'w+', $chmod)) {
                    $html .= "<tr><td><strong><span style=\"color:#fff;\"> el modelo " . $classname . ".php ha sido generado - Ruta:</span><span style=\"color:#729fbe;\">" . MODELSPATH . $classname . "</span></strong><span style=\"color:#fff;\">.php</span></td></tr>";
                    $total++;
                }
            }
        }

        foreach ($tables_has_many as $key => $value) {

            if (!in_array($key, $this->enum_class)) {

                if (empty($value)) {
                    $linea = "\n    public \$has_many = array();\n\n\n";
                } else {
                    $linea = "\n    public \$has_many =  " . self::exportRules($value) . "\n\n\n";
                }



                $content = $this->readFileContents(MODELSPATH . "{$key}.php");
                if ($content !== false) {
                    $content = str_replace("var_has_many", $linea, $content);
                    if ($this->delete(MODELSPATH . "{$key}.php") != false) {
                        if ($this->create(MODELSPATH . "{$key}.php", $content, 'w+')) {
                            $html .= "<tr><td><strong><span style=\"color:#fff;\"> el modelo " . $key . ".php ha sido generado - Ruta:</span><span style=\"color:#729fbe;\">" . MODELSPATH . $key . "</span></strong><span style=\"color:#fff;\">.php</span></td></tr>";
                        } else {
                            $html .= "<tr><td><span style=\"color:#fff;\"> el modelo " . $key . ".php no pudo ser generado.</td></tr>";
                        }
                        $total++;
                    }
                }
            }
        }

        $html .= "<tr style=\"font-size:190%;font-family: 'Courier New', Courier, monospace;color:#fff;\"><td>Total $total registros de archivo(s) procesados.</td></tr></body></html>";
        $html .= "</tbody></table>";

        return $html;
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

    /**
     * Get appropriate rules for a certain DB data type
     * @param string $dataType
     * @return string Rule name for the data type
     */
    public static function dbDataTypeToRules($type) {
        $dataType = array(
            //integers
            'tinyint' => 'integer',
            'smallint' => 'integer',
            'mediumint' => 'integer',
            'int' => 'integer',
            'bigint' => 'integer',
            //float
            'float' => 'float',
            'double' => 'float',
            'decimal' => 'float',
            //datetime
            'date' => 'date',
            'datetime' => 'datetime',
            'timestamp' => 'datetime',
            'time' => 'datetime'
        );
        if (isset($dataType[$type]))
            return $dataType[$type];
    }

    public static function exportRules($ruleArr) {
        $rule = preg_replace("/\d+\s+=>\s+/", '', var_export($ruleArr, true));
        $rule = str_replace("\n      ", ' ', $rule);
        $rule = str_replace(",\n    )", ' )', $rule);
        $rule = str_replace("array (", 'array(', $rule);
        $rule = str_replace("    array(", '                        array(', $rule);
        $rule = str_replace("=> \n  array(", '=> array(', $rule);
        $rule = str_replace("  '", "                '", $rule);
        $rule = str_replace("  ),", "                ),\n", $rule);
        $rule = str_replace(",\n\n)", "\n            );", $rule);
        $rule = str_replace("\n                        ", "", $rule);
        return $rule;
    }

}
