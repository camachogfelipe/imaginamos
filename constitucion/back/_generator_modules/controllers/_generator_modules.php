<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.co
 * @company Imaginamos.com | todos los derechos reservados
 */
class _generator_modules extends Back_Controller {
    public $model = NULL;
    protected $admin_area = true;
    protected $enum_class = array('menu','municipio', 'departamento','index.html','users_groups','sessions','permissions','imagen','groups_permissions','groups','users','contacto','redes_sociales', 'api_oauth', '_template', 'datamapperext', 'ion_auth_model', 'ion_auth_mongodb_model', 'login_attempts', 'oauth_config');
    public $thead = array();
    public $tbody = array();
    public $menu = array(); 
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
    /**
     * 
     * @return type
     */        
    public function index() {
      if (isset($_POST['generar'])){
        $this->enum_class = array_merge(array_values($_POST), $this->enum_class);
        unset($this->enum_class['generar']);
       }
        if (isset($_POST['generar']))
            $this->_data['console'] = $this->genModule();
        else
            $this->_data['console'] = "";

        return $this->build('_generator');
    }
    /**
     * 
     * @param type $config
     * @param type $value
     * @param type $var
     */
    public function getconfig($config, $value,&$var) {
         $needlePos = strpos(strtolower($value), $config);
        if (is_numeric($needlePos)) {
            $m = array();
            if (preg_match("/#(.*?)#/", $value, $m)) {
               $var = $m[1];
            }
        }
    }
    /**
     * 
     * @param type $value
     * @param type $var
     */
    public function get_metodo_name($value, &$var) {

        switch (strtolower($value)) {
            case "imagen":
                $var = "imagen";
                break;
            case "input":
                $var = "input";
                break;
            case "inputcolor":
                $var = "inputColor";
                break;
            case "inputtime":
                $var = "inputTime";
                break;
            case "inputhidden":
                $var = "inputHidden";
                break;
            case "text":
                $var = "text";
                break;
            case "combox":
                $var = "combox";
                break;
            case "input_money":
                $var = "input_money";
                break;
            case "select_multiple":
                $var = "select_multiple";
                break;
            case "inputdate":
                $var = "inputDate";
                break;
            case "inputfile":
                $var = "inputFile";
                break;
            default:
                break;
        }
    }
    /**
     * 
     * @param type $value
     * @param type $key
     */
    public function get_lista_content($value,$key) {

        switch (strtolower($value)) {
            case "imagen":
                $this->tbody[$key]= "                                    <td>
                                        <a class=\"thumbnail img_action_zoom\" title=\"Imagen\" href=\"<?php echo base_url() . \$img->imagen_path ?>\">
                                            <img style=\"height:50px;width:50px\" src=\"<?php echo base_url() . \$img->imagen_path ?>\" alt=\"\" />
                                        </a>
                                    </td>\n";
                break;
            case "input":
                  $this->tbody[$key]= "                                    <td>
                                        <?php echo \$img->".$key.";  ?>
                                    </td>\n";
                break;
            case "inputcolor":
                 $this->tbody[$key]= "                                    <td>
                                        <?php echo \$img->".$key.";  ?>
                                    </td>\n";
                break;
            case "inputtime":
                 $this->tbody[$key]= "                                    <td>
                                        <?php echo \$img->".$key.";  ?>
                                    </td>\n";
                break;
            case "inputhidden":
                 $this->tbody[$key]= "                                    <td>
                                        <?php echo \$img->".$key.";  ?>
                                    </td>\n";
                break;
            case "text":
                 $this->tbody[$key]= "                                    <td>
                                        <?php echo substr(strip_tags(\$img->".$key."),0,120).\"...\";  ?>
                                    </td>\n";
                break;
            case "combox":
                $this->tbody[$key]= "                                    <td>
                                        <?php echo \$img->".$key.";  ?>
                                    </td>\n";
                break;
            case "input_money":
                $this->tbody[$key]= "                                    <td>
                                        <?php echo \$img->".$key.";  ?>
                                    </td>\n";
                break;
            case "select_multiple":
                $this->tbody[$key]= "                                    <td>
                                        <?php echo \$img->".$key.";  ?>
                                    </td>\n";
                break;
            case "inputdate":
                $this->tbody[$key]= "                                    <td>
                                        <?php echo \$img->".$key.";  ?>
                                    </td>\n";
                break;
            case "inputfile":
                $this->tbody[$key]= "                                    <td>
                                        <a target=\"_blank\" title=\"Archivo\" href=\"<?php echo base_url() . \$img->".$key." ?>\">
                                        Link Archivo</a>
                                    </td>\n";
                break;
            default:
                break;
        }
    }
    /**
     * 
     * @param type $value
     * @param type $key
     * @param type $label
     */
    public function get_lista_head($value,$key, $label) {
        switch (strtolower($value)) {
            case "view":
                $this->thead[$key] = "                                    <th>".(empty($label)?ucwords(str_replace("_", " ", str_replace("_id","",$key))):$label)."</th>";
            break;
            default:
            break;
        }
    }
    /**
     * 
     * @param type $model_name
     * @return type
     */
    public function get_html($model_name="") {
       $models = new $model_name(); 
        $html = "";
        if(is_array($models->coments)){
            foreach ($models->coments as $key =>  $coment) {
               $label = "";
               $metodo = "";
               $instructions = "";
               $span = "span3";
               $config = explode("|", $coment);
               if(count($config)>0){
                   
                    foreach ($config as $value) {
                        $this->getconfig('instructions',$value,$instructions);
                        $this->getconfig('span',$value,$span);
                        $this->getconfig('label',$value,$label);
                        $this->get_metodo_name($value, $metodo);
                        $this->get_lista_head($value, $key, $label);
                        $this->get_lista_content($value, $key);  
                    }
                   $menu = "";
                   $this->getconfig('menu',$config[0],$menu); 
                   $this->menu = $this->get_menu($menu);
                   $html .= $this->get_componente($metodo,$label,$key,$instructions,$span,$model_name);
                  
               }
            }
        }
        return $html;
   }
    /**
     * 
     * @param type $model_name
     * @return string
     */
    public function get_related_models($model_name="") {
        $models = new $model_name(); 
        $html_array = array(); 
        if(is_array($models->has_one)){
            foreach ($models->has_one as $key =>  $val) {
                $html_array[] = "join_related('{$key}')"; 
            }
        }
        return (!empty($html_array))?implode("->", $html_array)."->":"";
   }
   /**
    * 
    * @param type $menu
    * @return type
    */
   public function get_menu($menu){
       if($menu !== ""){
          return explode("->", $menu);
       }else
          return array();  
   }
   /**
    * 
    * @return type
    */
   public function miga_menu() {
       $html = ""; 
       if(is_array($this->menu) AND (count($this->menu) > 0) ) {      
            foreach ($this->menu as $obj) {
                $html .= "['".$obj."']";  
            }
       }
       return empty($html)?false:$html;
   }
   /**
    * 
    * @param type $metodo
    * @param type $label
    * @param type $key
    * @param type $inst
    * @param type $span
    * @param type $class_name
    * @return string
    */
   public function get_componente($metodo = "", $label = "", $key = "",$inst = "",$span = "span3",$class_name ="") {
       $html = ""; 
       switch (strtolower($metodo)) {
            case "imagen":
                $html = "\n\t\t\$data['form_content'] .= \$this->imagen(\$obj->".$key.",\$obj->imagen_path, \"" . $label . "\", \"" . $inst . "\", false, \$obj->is_rule(\"" . $key . "\",\"required\"), \"" . $span . "\");".$html;
                break;
            case "input":
                $html .= "\n\t\t\$data['form_content'] .= \$this->input(\$obj->".$key.", \"".$key."\",\$obj->get_rule(\"".$key."\",\"max_length\") ,\"" . $label . "\", \"Maximo \".\$obj->get_rule(\"".$key."\",\"max_length\").\" caracteres\", \$obj->is_rule(\"" . $key . "\",\"required\"), \"" . $span . "\");";
                break;
            case "inputcolor":
                $html .= "\n\t\t\$data['form_content'] .= \$this->inputColor(\$obj->".$key.", \"".$key."\" ,\"" . $label . "\", \"Formato Hexadecimal\", \$obj->is_rule(\"" . $key . "\",\"required\"), \"" . $span . "\",\"hex\");";
                break;
            case "inputtime":
                $html .= "\n\t\t\$data['form_content'] .= \$this->inputTime(\$obj->".$key.", \"".$key."\" ,\"" . $label . "\", \"Formato 12 Horas\", \$obj->is_rule(\"" . $key . "\",\"required\"), \"" . $span . "\",\$formato = \"tp-default\");";
                break;
            case "inputhidden":
                $html .= "\n\t\t\$data['form_content'] .= \$this->inputHidden(\$obj->".$key.", \"".$key."\", \$obj->get_rule(\"".$key."\",\"max_length\"));";
                break;
            case "text":
                $html .= "\n\t\t\$data['form_content'] .= \$this->text(\$obj->".$key.", \"".$key."\", \"".$label."\", \"Maximo \".\$obj->get_rule(\"".$key."\",\"max_length\").\" caracteres\", \$obj->is_rule(\"".$key."\",\"required\"), \"".$span."\", true, false, \$obj->get_rule(\"".$key."\",\"max_length\"),3,4);";
                break;
            case "combox":
                 $key1 = str_replace("_id", "", $key);
                 $html .= "\n\t\t\$var_".$key." = new ".$class_name."();\n\t\t\$data['form_content'] .= \$this->combox(\$obj->".$key.",\$var_".$key."->get_".$key1."_list(),\"".$key."\", \"".$label."\", \"".$inst."\", \$obj->is_rule(\"".$key."\",\"required\"), \"".$span."\");";
                break;
            case "input_money":
                $html .= "\n\t\t\$data['form_content'] .= \$this->input_money(\$obj->".$key.", \"".$key."\" ,\"$\",\"" . $label . "\", \"".$inst."\", \$obj->is_rule(\"" . $key . "\",\"required\"), \"" . $span . "\");";
                break;
            case "select_multiple":
                $html .= "";
                break;
            case "inputdate":
                 $html .= "\n\t\t\$data['form_content'] .= \$this->inputDate(\$obj->".$key.", \"".$key."\" ,\"" . $label . "\", \"\", \$obj->is_rule(\"" . $key . "\",\"required\"), \"" . $span . "\",\$formato = \"dd/mm/yyyy\");";
                 break;
            case "inputfile":
                 $html .= "\n\t\t\$data['form_content'] .= \$this->inputFile(\$obj->".$key.", \"".$key."\" ,\"" . $label . "\", \"Maximo 200 mb\", \$obj->is_rule(\"" . $key . "\",\"required\"), \"" . $span . "\");";
                 break;
            default:
                break;
        }
        return $html;
    }

    /**
     * 
     * @return string
     */
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
                $module_title = ucwords(str_replace("_", " ", $module_name));
                $filestr = '';
                $autocopyrigth = "\n    /**\n     * @autor Elbert Tous\n     * @email elbert.tous@imaginamos.co\n     * @company Imaginamos S.A.S | Todos los derechos reservados\n     * @date " . date("D, d M Y H:i:s") . "\n     */\n
                        ";
                $menu_miga = $this->miga_menu(); 
                $menu_miga = ($menu_miga===false)?"['$module_title']":$menu_miga; 
                $filestr .= "<?php\n" . $autocopyrigth . "\n\nclass _" . $module_name . " extends Back_Controller {";
                $filestr .= "\n\tprotected \$admin_area = true;\n";
                $filestr .= "\tpublic \$model = '$model_name';\n";
                $filestr .= "\tpublic \$name = '$module_name';\n";
                $filestr .= "\tpublic \$title = '$module_title';\n";
                $filestr .= "\n\n\tpublic function __construct() {\n\t\tparent::__construct();\n\t\t\$this->menu();\n\t\t\$this->migas(\$this->current_menu);\n\t\t\$this->add_modular_assets('js', 'autoload');\n\t}";
                $filestr .= "\n\n\tpublic function menu() {\n\t\treturn \$this->current_menu".$menu_miga." = cms_url('$module_name');\n\t}";
                $filestr .= "\n\n\tpublic function index() {\n\t\t\$data['pag'] = \$this->session->userdata('page_'.  \$this->name);\n\t\t\$this->session->set_userdata('page_'.\$this->name, '1');\n\t\t\$data['title_page'] = \$this->title;\n\t\t\$data['pag'] = 1;\n\t\t\$data['migas'] = \$this->miga;\n\t\t\$data['pag_content'] = \$this->contents();\n\t\t\$data['pag_content_title'] = ucwords (\$this->title);\n\t\treturn \$this->build('index', \$data);\n\t}";
                $filestr .= "\n\n\tpublic function contents() {\n\t\t\$data['path_delete'] = cms_url(\$this->name.'/delete');\n\t\t\$data['path_add'] = cms_url(\$this->name.'/form');\n\t\t\$data['path_edit'] = cms_url(\$this->name.'/form');\n\t\t\$data['path_list'] = cms_url(\$this->name.'/lista');\n\t\t\$data['mpag_content'] = \$this->lista();\n\t\t\$data['pag'] = 1;\n\t\t\$this->session->set_userdata('page_'.\$this->name, '1');\n\t\treturn \$this->buildajax('control', \$data);\n\t}";
                $filestr .= "\n\n\tpublic function form() {\n\t\t\$obj = new \$this->model();\n\t\t\$id = \$this->_post('id');\n\t\tif(!empty(\$id))\n\t\t  \$obj->{$this->get_related_models($model_name)}get_by_id(\$id);\n\t\t\$data['form_content'] = \"\";\n\t\t\$data['form_content'] .= \$this->inputHidden(\$obj->id, \"id\");".$this->get_html($model_name)."\n\n\t\t\$data['direct_form'] = \$this->name.'/add';\n\t\treturn \$this->buildajax('control/form', \$data);\n\t}";
                //$filestr .= "\n\n\tpublic function form_add() {\n\t\t\$obj = new \$this->model();\n\t\t\$data['form_content'] = \"\";".$this->get_html($model_name)."\n\n\t\t\$data['direct_form'] = \$this->name.'/add';\n\t\treturn \$this->buildajax('control/form', \$data);\n\t}";
                $filestr .= "\n\n\tpublic function lista() {\n\t\t\$obj = new \$this->model();\n\t\t\$data['datos'] = \$obj->{$this->get_related_models($model_name)}get();\n\t\t\$data['direct_form'] = \$this->name.'/delete';\n\t\treturn \$this->buildajax('control/lista', \$data);\n\t}";
                $filestr .= "\n\n\tpublic function add() {\n\t\t\$error = false;\n\t\t\$msg = \"\";\n\t\t\$obj = new \$this->model();\n\t\t\$obj->get_by_id(\$this->_post('id'));\n\t\tif(!\$obj->exists())\n\t\t\$obj->id = \"\";\n\t\t\$this->loadVar(\$obj);\n\t\tif (!\$obj->save()) {\n\t\t\t\$error = true;\n\t\t\t\$msg = \$obj->error->string;\n\t\t\t\$this->deleteImg(\$this->data_id_obj_path(\$obj));\n\t\t}\n\t\tif (\$error)\n\t\t\t\$this->set_alert_session(\"Error guardando datos,\" . \$msg, 'error');\n\t\telse\n\t\t\t\$this->set_alert_session(\"Datos Guardados con exito...!\", 'info');\n\t\tredirect(cms_url(\$this->name));\n\t}";
                $filestr .= "\n\n\tpublic function delete() {\n\t\t\$error = false;\n\t\t\$obj = new \$this->model();\n\t\t\$obj->get_by_id(\$this->_post('value'));\n\t\t\$msg = \"\";\n\t\tif (\$obj->exists()) {\n\t\t\t\$id_file = \$this->data_id_obj_path(\$obj);\n\t\t\tif (!\$obj->delete()){\n\t\t\t\t\$error = true;\n\t\t\t\t\$msg = \$obj->error->string;\n\t\t\t}\n\t\t\t\$this->delete_files(\$this->data_file_path(\$obj));\n\t\t\t\$this->deleteImg(\$id_file);\n\t\t} else {\n\t\t\t\$error = true;\n\t\t\t\$msg = \"No existe item...!\";\n\t\t}\n\t\tif (\$error)\n\t\t\t\$this->set_alert('Error al eliminar datos' . ', ' . \$msg, 'error');\n\t\telse{\n\t\t\t\$this->set_alert_session(\"Datos eliminados con éxito...!\", 'info');\n\t\t}\n\t\treturn \$this->render_json(!\$error);\n\t}";
                $filestr .= "\n\n}\n?>";
                
               
                
                if ($this->create(BACKPATH . "_{$module_name}/controllers/_{$module_name}.php", $filestr, 'w+', 0777)) {
                    $this->create(BACKPATH . "_{$module_name}/views/control/");
                    $this->create(BACKPATH . "_{$module_name}/public/js/");
                    @copy(BACKPATH . "_generator_modules/template/views/control/form.php", BACKPATH . "_{$module_name}/views/control/form.php");
                    
                    //@copy(BACKPATH . "_generator_modules/template/views/control/lista.php", BACKPATH . "_{$module_name}/views/control/lista.php");
                   $this->create(BACKPATH . "_{$module_name}/views/control/lista.php", $this->get_html_lista(), 'w+', 0777);
                   $this->tbody = array();
                   $this->thead = array();
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
     * 
     * @return string
     */
    public function get_html_lista(){
       $head = "\n";
        foreach ($this->thead as $key => $th) {
                $head .= $th."\n"; 
        }
       $body = "\n";
        foreach ($this->tbody as $key => $th) {
                $body .= $th."\n"; 
        }
    
    
       $html = "";
        $html .=  "<form id=\"From-ajax\" name=\"From-ajax\" method=\"POST\">
<?php if (!empty(\$datos)) : ?>
    <div class=\"row-fluid\">
        <div class=\"span12\">
            <div class=\"w-box w-box-<?php echo \$color_module ?>\">
                <div class=\"w-box-header\">
                    <h4>Registros</h4>
                </div>
                <div class=\"w-box-content\">
                    <table id=\"dt_basic\" class=\"dataTables_full table table-striped\">
                        <thead>
                            <tr>
                                <th class=\"span1 table_checkbox sorting_disabled\" role=\"columnheader\" rowspan=\"1\" colspan=\"1\" aria-label=\"\" style=\"width: 5px;\"></th>
                                ".$head."
                                <th>Acciones</th>    
                            </tr>
                        </thead>
                        <tbody id='table_contet'  >
                            <?php foreach (\$datos as \$img) : ?>
                                <tr class=\"odd gradeX parent-delete\">
                                    <td class=\"nolink \">
                                        <input type=\"radio\"  value=\"<?php echo \$img->id ?>\" name=\"id\" class=\"select_obj\">
                                    </td>".$body."
                                    <td class=\"center\" width=\"100px\">
                                        <?php if(\$delete): ?>  
                                       <?php if(\$datos->result_count() > 0): ?>
                                        <a href=\"<?php echo cms_url(\$direct_form) ?>\" class=\"btn btn-danger btn-small logic-delete del_count\" data-num=\"0\" data-value=\"<?php echo \$img->id ?>\">Eliminar</a>
                                       <?php endif; ?>
                                       <?php endif; ?> 
                                    </td> 
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
<?php endif; ?>
    </form>
<script>
    $('.select_obj').change(function() {
        $('.obj_sel').on('click', function() {
            if ($(this).is(':checked')) {
                $(this).closest('tr').addClass('rowChecked');
            } else {
                $(this).closest('tr').removeClass('rowChecked');
            }
        });
    });
</script>";
        
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
