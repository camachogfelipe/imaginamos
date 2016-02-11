<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class _generator_front_modules extends Back_Controller {

    public $model = NULL;
    protected $admin_area = true;
    protected $enum_class = array('index.html', 'users_groups', 'sessions', 'permissions', 'imagen', 'groups_permissions', 'groups', 'users', 'contacto', 'redes_sociales', 'api_oauth', '_template', 'datamapperext', 'ion_auth_model', 'ion_auth_mongodb_model', 'login_attempts', 'oauth_config');

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
        $arhivos_procesados = array();
        $html = "<table><thead><th>Consola de archivos generados</th></thead><tbody>";
        $dir = new DirectoryIterator(TEMPLATEPATH);
        $total = 0;
        if (file_exists(TEMPLATEPATH . "index.php")) {
            $contenido = $this->readFileContents(TEMPLATEPATH . "index.php");
            $head = array();
            $link_data = array();
            $contenido = preg_replace('/<title>(.*?)<\/title>/', "<title><?php echo SITENAME; ?></title>", $contenido);
            $contenido = str_replace("<?php include(CURRENT_FILE); ?>", "<?php echo \$template['body']; ?>", $contenido);
            $contenido = str_replace("<?php include(\"config.php\"); ?>", "", $contenido);
            $includes = array();
            if (preg_match_all("/include\(\"(.*?)\"\);/", $contenido, $head, 0, 0)) {
                $includes = $head[1];
            }
            $inculdes_controller_from = "array( ";
            foreach ($includes as $file_partials) {
                if (file_exists(TEMPLATEPATH . "{$file_partials}") AND $file_partials != "config") {
                    $contenido_partials = $this->readFileContents(TEMPLATEPATH . "{$file_partials}");
                    $module = array();
                    $a_data = array();
                    $contenido_partials = preg_replace("/href=\"(.*?)\"/", "href=\"<?php echo base_url(); ?>$1\"", $contenido_partials);
                    $contenido_partials = preg_replace("/src=\"(.*?)\"/", "src=\"<?php echo base_url(); ?>$1\"", $contenido_partials);
                    $contenido_partials = str_replace(".php", "", $contenido_partials);
                    $contenido_partials = str_replace("<?php echo base_url(); ?>mailto", "mailto", $contenido_partials);
                    $contenido_partials = str_replace("<?php echo base_url(); ?>http", "http", $contenido_partials);
                    $contenido_partials = str_replace("<?php echo base_url(); ?>https", "https", $contenido_partials);
                    $contenido_partials = str_replace("<?php echo base_url(); ?>#", "#", $contenido_partials);
                    $contenido_partials = str_replace("index", "home", $contenido_partials);
                    if ($this->create(FRONTPATH . "home/views/partials/{$file_partials}", $contenido_partials, 'w+', 0777)) {
                        $file_partial = str_replace(".php", "", $file_partials);
                        $arhivos_procesados[] = $file_partial;
                        $inculdes_controller_from .= "'{$file_partial}',";
                        $html .= "<tr><td><strong><span style=\"color:#fff;\"> se ha generado el archivo {$file_partial}.php en partials - Ruta:</span><span style=\"color:#729fbe;\">" . FRONTPATH . "home/views/partials/{$file_partial}</span></strong><span style=\"color:#fff;\">.php</span></td></tr>";
                    }
                }
            }
            $contenido = preg_replace("/include\(\"(.*?)\"\);/", "echo \$template['partials']['$1'];", $contenido);
            $front_controller = $this->readFileContents(APPPATH . "core/Front_Controller.php");
            $array_data = "include = " . substr($inculdes_controller_from, 0, strlen($inculdes_controller_from) - 1) . ");";
            $front_controller = preg_replace("/include = array\(\"(.*?)\"\);/", $array_data, $front_controller);
            if ($this->create(APPPATH . "core/Front_Controller.php", $front_controller, 'w+', 0777)) {
                $html .= "<tr><td><strong><span style=\"color:#fff;\"> se ha modificado el archivo Front_Controller.php en core - Ruta:</span><span style=\"color:#729fbe;\">" . APPPATH . "core/Front_Controller</span></strong><span style=\"color:#fff;\">.php</span></td></tr>";
            }
            $contenido = preg_replace("/href=\"(.*?)\"/", "href=\"<?php echo base_url(); ?>$1\"", $contenido);
            $contenido = preg_replace("/src=\"(.*?)\"/", "src=\"<?php echo base_url(); ?>$1\"", $contenido);
            $contenido = preg_replace("/href='(.*?)'/", "href=\"<?php echo base_url(); ?>$1\"", $contenido);
            $contenido = preg_replace("/src='(.*?)'/", "src=\"<?php echo base_url(); ?>$1\"", $contenido);
            $script_url = "<script>var globals = <?php echo json_encode(array('site_url' => site_url(), 'base_url' => base_url())) ?>;</script>";
            $contenido = str_replace("</head>", $script_url . "\n</head>", $contenido);
            $contenido = str_replace("<?php echo base_url(); ?>#", "#", $contenido);
            $contenido = str_replace("<?php echo base_url(); ?>http", "http", $contenido);
            $contenido = str_replace("<?php echo base_url(); ?>https", "https", $contenido);
             $contenido = str_replace(".php", "", $contenido);
            $contenido = str_replace("index", "home", $contenido);
            if ($this->create(FRONTPATH . "home/views/layouts/general.php", $contenido, 'w+', 0777)) {
                $arhivos_procesados[] = "index";
                $html .= "<tr><td><strong><span style=\"color:#fff;\"> se ha modificado el archivo general.php en layout - Ruta:</span><span style=\"color:#729fbe;\">" . FRONTPATH . "home/views/layouts/general</span></strong><span style=\"color:#fff;\">.php</span></td></tr>";
                $total++;
            }
        }

        foreach ($dir as $obj) {
            $module_name = $obj->getFilename();
            $module_name = str_replace(".php", "", $module_name);
            if (!in_array($module_name, $arhivos_procesados)) {
                if ($module_name != ".." AND $module_name != "config" AND $module_name != ".htaccess" AND $module_name != "favicon.ico" AND $module_name != "assets" AND $module_name != "." AND $module_name != "0" AND !is_null($module_name)) {

                    if (!in_array($module_name, $this->enum_class)) {
                        $filestr = '';
                        $autocopyrigth = "\n    /**\n     * @autor Elbert Tous\n     * @email elbert.tous@imaginamos.com\n     * @company Imaginamos S.A.S | Todos los derechos reservados\n     * @date " . date('NOW') . "\n     */\n
                        ";
                        $module_class = str_replace("-", "_", $module_name);
                        if (strtolower($module_name) == strtolower("index") OR strtolower($module_name) == strtolower("default")) {
                            $module_class = "home";
                        }
                        $filestr .= "<?php\n" . $autocopyrigth . "\n\nclass " . ucwords($module_class) . " extends Front_Controller {";
                        $filestr .= "\n\n\tpublic function __construct() {\n\t\tparent::__construct();\n\t}";
                        $filestr .= "\n\n\tpublic function index() {\n\t\treturn \$this->build();\n\t}";
                        $filestr .= "\n\n}\n?>";

                        $controller = str_replace("-", "_", $module_name);
                        if ($module_name == "home" OR $module_name == "default" OR $module_name == "index1" OR $module_name == "index" ) {
                            $controller = "home";
                        }
                        if ($this->create(FRONTPATH . "{$controller}/controllers/{$controller}.php", $filestr, 'w+', 0777)) {
                            $this->create(FRONTPATH . "{$controller}/views/");
                            $view = $this->readFileContents(TEMPLATEPATH . "{$module_name}.php");
                            $view = str_replace(".php", "", $view);
                            $view = preg_replace("/href=\"(.*?)\"/", "href=\"<?php echo base_url(); ?>$1\"", $view);
                            $view = preg_replace("/src=\"(.*?)\"/", "src=\"<?php echo base_url(); ?>$1\"", $view);
                            $view = preg_replace("/href='(.*?)'/", "href=\"<?php echo base_url(); ?>$1\"", $view);
                            $view = preg_replace("/src='(.*?)'/", "src=\"<?php echo base_url(); ?>$1\"", $view);
                            $view = str_replace(".php", "", $view);
                            $view = str_replace("<?php echo base_url(); ?>mailto", "mailto", $view);
                            $view = str_replace("<?php echo base_url(); ?>http", "http", $view);
                            $view = str_replace("<?php echo base_url(); ?>https", "https", $view);
                            $view = str_replace("<?php echo base_url(); ?>#", "#", $view);
                            $view = str_replace("index", "home", $view);
                            $this->create(FRONTPATH . "{$controller}/views/body.php", $view, 'w+', 0777);

                            $html .= "<tr><td><strong><span style=\"color:#fff;\"> Module {$controller} ha sido generado - Ruta:</span><span style=\"color:#729fbe;\">" . FRONTPATH . "{$controller}" . "</span></strong><span style=\"color:#fff;\">.php</span></td></tr>";
                            $total++;
                        }
                    }
                }
            }
        }
        $html .= "<tr style=\"font-size:190%;font-family: 'Courier New', Courier, monospace;color:#fff;\"><td>Total $total registros de archivo(s) procesados.</td></tr></body></html>";
        $html .= "</tbody></table>";

        return $html;
    }

    function findinside($start, $end, $string) {
        preg_match_all('/' . preg_quote($start, '/') . '([^\.)]+)' . preg_quote($end, '/') . '/i', $string, $m);
        return $m[1];
    }

    function functionName($regexp, $replacement, $string_before) {
        return preg_replace($regexp, $replacement, $string_before);
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
