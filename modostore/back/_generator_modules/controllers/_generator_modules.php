<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class _generator_modules extends Back_Controller {
    public $model = NULL;
    protected $admin_area = true;
    protected $enum_class = array('index.html','users_groups','sessions','permissions','imagen','groups_permissions','groups','users','contacto','redes_sociales', 'api_oauth', '_template', 'datamapperext', 'ion_auth_model', 'ion_auth_mongodb_model', 'login_attempts', 'oauth_config');

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {

        if (isset($_POST['generar']))
            $this->_data['console'] = $this->genModule();
        else
            $this->_data['console'] = "";

        return $this->build('_generator');
    }

    public function genModule() {
        $html = "<table><thead><th>Consola de archivos generados</th></thead><tbody>";
        $dir = new DirectoryIterator(MODELSPATH);
        $total = 0;
        foreach ($dir as $obj) {
            $model_name = $obj->getFilename();
            $model_name = str_replace(".php", "", $model_name);
            
            if ($model_name != ".." AND $model_name != "." AND $model_name != "0" AND !is_null($model_name)) {
            
            
            if (!in_array($model_name, $this->enum_class)) {
                $module_name = $model_name . "s";
                $module_title = ucwords($module_name);
                $filestr = '';
                $autocopyrigth = "\n    /**\n     * @autor Elbert Tous\n     * @email elbert.tous@imaginamos.com\n     * @company Imaginamos S.A.S | Todos los derechos reservados\n     * @date " . date('NOW') . "\n     */\n
                        ";
                $filestr .= "<?php\n" . $autocopyrigth . "\n\nclass _" . $module_name . " extends Back_Controller {";
                $filestr .= "\n\tprotected \$admin_area = true;\n";
                $filestr .= "\tpublic \$model = '$model_name';\n";
                $filestr .= "\tpublic \$name = '$module_name';\n";
                $filestr .= "\tpublic \$title = '$module_title';\n";
                $filestr .= "\n\n\tpublic function __construct() {\n\t\tparent::__construct();\n\t\t\$this->menu();\n\t\t\$this->migas(\$this->current_menu);\n\t}";
                $filestr .= "\n\n\tpublic function menu() {\n\t\treturn \$this->current_menu['$module_title'] = cms_url('$module_name');\n\t}";
                $filestr .= "\n\n\tpublic function index() {\n\t\t\$data['pag'] = \$this->session->userdata('page_'.  \$this->name);\n\t\t\$this->session->set_userdata('page_'.\$this->name, '1');\n\t\t\$data['title_page'] = \$this->title;\n\t\t\$data['pag'] = 1;\n\t\t\$data['migas'] = \$this->miga;\n\t\t\$data['pag_content'] = \$this->contents();\n\t\t\$data['pag_content_title'] = ucwords (\$this->title);\n\t\treturn \$this->build('index', \$data);\n\t}";
                $filestr .= "\n\n\tpublic function contents() {\n\t\t\$data['path_delete'] = cms_url(\$this->name.'/delete');\n\t\t\$data['path_add'] = cms_url(\$this->name.'/form_add');\n\t\t\$data['path_edit'] = cms_url(\$this->name.'/form_edit');\n\t\t\$data['path_list'] = cms_url(\$this->name.'/lista');\n\t\t\$data['mpag_content'] = \$this->lista();\n\t\t\$data['pag'] = 1;\n\t\t\$this->session->set_userdata('page_'.\$this->name, '1');\n\t\treturn \$this->buildajax('control', \$data);\n\t}";
                $filestr .= "\n\n\tpublic function form_edit() {\n\t\t\$obj = new \$this->model();\n\t\t\$id = \$this->_post('id');\n\t\t\$obj->get_by_id(\$id); /* o \$obj->join_relate('mixed_model')->get_by_id(\$id); */\n\t\t\$data['form_content'] = \"\";\n\t\t\$data['form_content'] .= \$this->inputHidden(\$obj->id, \"id\", 11);\n\n\t\t/*\n\t\t\tEjemplos:\n\n\t\t\tFrom Imagen\n\t\t\t\$data['form_content'] .= \$this->imagen(\$obj->imagen_id, \$obj->imagen_path, \"Imagen\", \"0px × 0px\",false,\$obj->is_rule(\"imagen_id\",\"required\"),\"span3\");\n\t\t\t\$data['form_content'] .= \$this->imagen(\$obj->imagen1_id, \$obj->imagen1_path, \"Imagen 1\", \"0px × 0px\",false,\$obj->is_rule(\"imagen1_id\",\"required\"),\"span3\",1);\n\t\t\t\t\.\n\t\t\t\t\.\n\t\t\t\t\.\n\t\t\t\$data['form_content'] .= \$this->imagen(\$obj->imagen\$i_id, \$obj->imagen\$i_path, \"Imagen \$i\", \"0px × 0px\",false,\$obj->is_rule(\"imagen\$i_id\",\"required\"),\"span3\",\$i);\n\n\t\t\t\Form Input\n\t\t\t\$data['form_content'] .= \$this->input(\$obj->titulo, \"titulo\", \$obj->get_rule(\"titulo\",\"max_length\"), \"Titulo\", \"Maximo \".\$obj->get_rule(\"titulo\",\"max_length\").\" caracteres\",\$obj->is_rule(\"titulo\",\"required\"),\"span3\");\n\n\t\t\tForm Input\n\t\t\t\$data['form_content'] .= \$this->inputColor(\$obj->color, \"color\", \"Color\", \"Formato Hexadecimal\",\$obj->is_rule(\"color\",\"required\"),\"span2\",\"hex\");\n\n\t\t\tForm InputTime\n\t\t\t\$data['form_content'] .= \$this->inputTime(\$obj->hora, \"hora\", \"Hora\", \"Formato 12 Horas\",\$obj->is_rule(\"hora\",\"required\"),\"span2\",\"tp-default\");\n\n\t\t\tFrom Date\n\t\t\t\$data['form_content'] .= \$this->inputDate(\$obj->fecha, \"fecha\", \"Fecha\", \"\",\$obj->is_rule(\"fecha\",\"required\"),\"span2\",\"dd-mm-yyyy\");\n\n\t\t\tForm Text (Count Limit)\n\t\t\t\$data['form_content'] .= \$this->text(\$obj->texto, \"texto\", \"Texto\", \"Maximo \".\$obj->get_rule(\"texto\",\"max_length\").\" caracteres\", \$obj->is_rule(\"texto\",\"required\"), \"span8\", false, true, \$obj->get_rule(\"texto\",\"max_length\"),3,4);\n\n\t\t\tForm Text (wysiwy)\n\t\t\t\$data['form_content'] .= \$this->text(\$obj->texto, \"texto\", \"Texto\", \"Maximo \".\$obj->get_rule(\"texto\",\"max_length\").\" caracteres\", \$obj->is_rule(\"texto\",\"required\"), \"span8\", true, false, \$obj->get_rule(\"texto\",\"max_length\"),3,4);\n\n\t\t\tForm Combo Box\n\t\t\t\$list_obj = new mixed_model();\n\t\t\t\$data['form_content'] .= \$this->combox(\$obj->item_id,\$list_obj->get_data('','campo'),\"item_id\", \"Lista\", \"Seleccione un Items\", \$obj->is_rule(\"item_id\",\"required\"), \"span5\");\n\t\t*/\n\n\t\t\$data['direct_form'] = \$this->name.'/add';\n\t\treturn \$this->buildajax('control/form', \$data);\n\t}";
                $filestr .= "\n\n\tpublic function form_add() {\n\t\t\$obj = new \$this->model();\n\t\t\$data['form_content'] = \"\";\n\t\t\$data['form_content'] .= \$this->inputHidden(\"\",\"id\", 11);\n\n\t\t/*\n\t\t\tEjemplos:\n\n\t\t\tFrom Imagen\n\t\t\t\$data['form_content'] .= \$this->imagen(\"\", NULL, \"Imagen\", \"0px × 0px\",false,\$obj->is_rule(\"imagen_id\",\"required\"),\"span3\");\n\t\t\t\$data['form_content'] .= \$this->imagen(\"\", NULL, \"Imagen 1\", \"0px × 0px\",false,\$obj->is_rule(\"imagen1_id\",\"required\"),\"span3\",1);\n\t\t\t\t\.\n\t\t\t\t\.\n\t\t\t\t\.\n\t\t\t\$data['form_content'] .= \$this->imagen(\"\", NULL, \"Imagen \$i\", \"0px × 0px\",false,\$obj->is_rule(\"imagen\$i_id\",\"required\"),\"span3\",\$i);\n\n\t\t\t\Form Input\n\t\t\t\$data['form_content'] .= \$this->input(\"\", \"titulo\", \$obj->get_rule(\"titulo\",\"max_length\"), \"Titulo\", \"Maximo \".\$obj->get_rule(\"titulo\",\"max_length\").\" caracteres\",\$obj->is_rule(\"titulo\",\"required\"),\"span3\");\n\n\t\t\tForm Input\n\t\t\t\$data['form_content'] .= \$this->inputColor(\"\", \"color\", \"Color\", \"Formato Hexadecimal\",\$obj->is_rule(\"color\",\"required\"),\"span2\",\"hex\");\n\n\t\t\tForm InputTime\n\t\t\t\$data['form_content'] .= \$this->inputTime(\"\", \"hora\", \"Hora\", \"Formato 12 Horas\",\$obj->is_rule(\"hora\",\"required\"),\"span2\",\"tp-default\");\n\n\t\t\tFrom Date\n\t\t\t\$data['form_content'] .= \$this->inputDate(\"\", \"fecha\", \"Fecha\", \"\",\$obj->is_rule(\"fecha\",\"required\"),\"span2\",\"dd-mm-yyyy\");\n\n\t\t\tForm Text (Count Limit)\n\t\t\t\$data['form_content'] .= \$this->text(\"\", \"texto\", \"Texto\", \"Maximo \".\$obj->get_rule(\"texto\",\"max_length\").\" caracteres\", \$obj->is_rule(\"texto\",\"required\"), \"span8\", false, true, \$obj->get_rule(\"texto\",\"max_length\"),3,4);\n\n\t\t\tForm Text (wysiwy)\n\t\t\t\$data['form_content'] .= \$this->text(\"\", \"texto\", \"Texto\", \"Maximo \".\$obj->get_rule(\"texto\",\"max_length\").\" caracteres\", \$obj->is_rule(\"texto\",\"required\"), \"span8\", true, false, \$obj->get_rule(\"texto\",\"max_length\"),3,4);\n\n\t\t\tForm Combo Box\n\t\t\t\$list_obj = new mixed_model();\n\t\t\t\$data['form_content'] .= \$this->combox(\"\",\$list_obj->get_data('','campo'),\"item_id\", \"Lista\", \"Seleccione un Items\", \$obj->is_rule(\"item_id\",\"required\"), \"span5\");\n\t\t*/\n\n\t\t\$data['direct_form'] = \$this->name.'/add';\n\t\treturn \$this->buildajax('control/form', \$data);\n\t}";
                $filestr .= "\n\n\tpublic function lista() {\n\t\t\$obj = new \$this->model();\n\t\t\$data['datos'] = \$obj->get(); /*  \$obj->join_related('imagen')->get(); */ \n\t\t\$data['direct_form'] = \$this->name.'/delete';\n\t\treturn \$this->buildajax('control/lista', \$data);\n\t}";
                $filestr .= "\n\n\tpublic function add() {\n\t\t\$error = false;\n\t\t\$msg = \"\";\n\t\t\$obj = new \$this->model();\n\t\t\$obj->get_by_id(\$this->_post('id'));\n\t\tif(!\$obj->exists())\n\t\t\$obj->id = \"\";\n\t\t\$this->loadVar(\$obj);\n\t\tif (!\$obj->save()) {\n\t\t\t\$error = true;\n\t\t\t\$msg = \$obj->error->string;\n\t\t\t\$this->deleteImg(\$this->data_id_obj_path(\$obj));\n\t\t}\n\t\tif (\$error)\n\t\t\t\$this->set_alert_session(\"Error guardando datos,\" . \$msg, 'error');\n\t\telse\n\t\t\t\$this->set_alert_session(\"Datos Guardados con exito...!\", 'info');\n\t\tredirect(cms_url(\$this->name));\n\t}";
                $filestr .= "\n\n\tpublic function delete() {\n\t\t\$error = false;\n\t\t\$obj = new \$this->model();\n\t\t\$obj->get_by_id(\$this->_post('value'));\n\t\t\$msg = \"\";\n\t\tif (\$obj->exists()) {\n\t\t\t\$id_file = \$this->data_id_obj_path(\$obj);\n\t\t\tif (!\$obj->delete()){\n\t\t\t\t\$error = true;\n\t\t\t\t\$msg = \$obj->error->string;\n\t\t\t}\n\t\t\t\$this->deleteImg(\$id_file);\n\t\t} else {\n\t\t\t\$error = true;\n\t\t\t\$msg = \"No existe item...!\";\n\t\t}\n\t\tif (\$error)\n\t\t\t\$this->set_alert('Error al eliminar datos' . ', ' . \$msg, 'error');\n\t\telse{\n\t\t\t\$this->set_alert_session(\"Datos eliminados con éxito...!\", 'info');\n\t\t}\n\t\treturn \$this->render_json(!\$error);\n\t}";
                $filestr .= "\n\n}\n?>";
                
               
                
                if ($this->create(BACKPATH . "_{$module_name}/controllers/_{$module_name}.php", $filestr, 'w+', 0777)) {
                    $this->create(BACKPATH . "_{$module_name}/views/control/");
                    $this->create(BACKPATH . "_{$module_name}/public/js/");
                    @copy(BACKPATH . "_generator_modules/template/views/control/form.php", BACKPATH . "_{$module_name}/views/control/form.php");
                    @copy(BACKPATH . "_generator_modules/template/views/control/lista.php", BACKPATH . "_{$module_name}/views/control/lista.php");
                    @copy(BACKPATH . "_generator_modules/template/views/_control.php", BACKPATH . "_{$module_name}/views/control.php");
                    @copy(BACKPATH . "_generator_modules/template/views/_index.php", BACKPATH . "_{$module_name}/views/index.php");
                    @copy(BACKPATH . "_generator_modules/template/public/.htaccess", BACKPATH . "_{$module_name}/public/.htaccess");
                    @copy(BACKPATH . "_generator_modules/template/public/js/autoload.js", BACKPATH . "_{$module_name}/public/js/autoload.js");
                    $html .= "<tr><td><strong><span style=\"color:#fff;\"> Module {$module_name} ha sido generado - Ruta:</span><span style=\"color:#729fbe;\">" . BACKPATH . "_{$module_name}" . "</span></strong><span style=\"color:#fff;\">.php</span></td></tr>";
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



}
