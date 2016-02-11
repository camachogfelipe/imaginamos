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
        $html = "<table><thead><th>Consola de archivos generados</th></thead><tbody>";
        $dir = new DirectoryIterator(TEMPLATEPATH);
        $total = 0;
        foreach ($dir as $obj) {
            $module_name = $obj->getFilename();
            $module_name = str_replace(".php", "", $module_name);

            if ($module_name != ".." AND $module_name != "favicon.ico" AND $module_name != "assets" AND $module_name != "." AND $module_name != "0" AND !is_null($module_name)) {


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

                    if ($module_name == "head") {
                        $contenido = $this->readFileContents(TEMPLATEPATH . $module_name . ".php");
                        $head = array();
                        $link_data = array();
                        $contenido = preg_replace('/<title>(.*?)<\/title>/', "<title><?php echo SITENAME; ?></title>", $contenido);
                        if (preg_match_all('/<link(.*?)\/>/', $contenido, $head, 0, 0)) {
                            foreach ($head[1] as $hd) {
                                $link = array();
                                if (preg_match('/href="(.*?)"/', $hd, $link, 0, 0)) {
                                    $link_data[$link[1]] = "<?php echo base_url(); ?>" . $link[1];
                                }
                            }
                            //echo $contenido; 
                        }
                        foreach ($link_data as $key => $value) {
                            $contenido = str_replace($key, $value, $contenido);
                        }
                        $script_url = "<script>var globals = <?php echo json_encode(array('site_url' => site_url(), 'base_url' => base_url())) ?>;</script>";
                        $contenido = str_replace("</head>", $script_url . "</head>", $contenido);
                        $body = "\n<body><div id=\"preload\"></div><div class=\"con-bw\"><div class=\"info-bw\"><div class=\"head-bw cfx\"><div class=\"logo-bw\"><img src=\"<?php echo base_url();?>assets/img/browser/logo-bw.png\" width=\"200\" height=\"100\" alt=\"\"></div><div class=\"tx-bw\"><h1>Oops!... Lo sentimos, este sitio se ha desarrollado para navegadores modernos con el fin de mejorar tu experiencia.</h1><h1>Para que lo puedas disfrutar es necesario actualizar tu navegador o simplemente descargar e instalar uno mejor.</h1></div></div><div class=\"con-icon-bw\"><a href=\"https://www.google.com/intl/es/chrome/browser/?hl=es\" target=\"_blank\" class=\"over-bw\"><div class=\"icon-bw\"><img src=\"<?php echo base_url();?>assets/img/browser/b-1.png\" width=\"160\" height=\"160\" alt=\"\"></div><h1>Chrome</h1></a></div><div class=\"con-icon-bw\"><a href=\"http://www.mozilla.org/es-ES/firefox/new/ \" target=\"_blank\" class=\"over-bw\"><div class=\"icon-bw\"><img src=\"<?php echo base_url();?>assets/img/browser/b-2.png\" width=\"160\" height=\"160\" alt=\"\"></div><h1>Firefox</h1></a></div><div class=\"con-icon-bw\"><a href=\"http://support.apple.com/kb/DL1531?viewlocale=es_ES\" target=\"_blank\" class=\"over-bw\"><div class=\"icon-bw\"><img src=\"<?php echo base_url(); ?>assets/img/browser/b-3.png\" width=\"160\" height=\"160\" alt=\"\"></div><h1>Safari</h1></a></div><div class=\"con-icon-bw\"><a href=\"http://www.opera.com/es-419/computer/\" target=\"_blank\" class=\"over-bw\"><div class=\"icon-bw\"><img src=\"<?php echo base_url();?>assets/img/browser/b-4.png\" width=\"160\" height=\"160\" alt=\"\"></div><h1>Opera</h1></a></div><div class=\"con-icon-bw\"><a href=\"http://windows.microsoft.com/es-es/internet-explorer/download-ie\" target=\"_blank\" class=\"over-bw\"><div class=\"icon-bw\"><img src=\"<?php echo base_url();?>assets/img/browser/b-5.png\" width=\"160\" height=\"160\" alt=\"\"></div><h1>Explorer</h1></a></div><div class=\"con-bt-bw cfx\"><a class=\"over-bt-bw\"><div class=\"bt-bw\"></div></a></div></div></div>";
                        $body .= "\n\t<?php echo \$template['partials']['header'], \$template['body'], \$template['partials']['footer'] ?>\n\t<div class=\"errors\"><?php\n\t\tif (!empty(\$alert_messages)) {\n\t\t\techo \$alert_messages;\n\t\t}\n\t?></div>\n</body>\n</html>";
                        $contenido = str_replace("<body>", $body, $contenido);
                        $contenido = str_replace("<?php echo base_url(); ?>#", "#", $contenido);
                         $contenido = str_replace("index", "home", $contenido);
                        if ($this->create(FRONTPATH . "home/views/layouts/general.php", $contenido, 'w+', 0777)) {
                            $html .= "<tr><td><strong><span style=\"color:#fff;\"> se ha modificado el archivo general.php en layout - Ruta:</span><span style=\"color:#729fbe;\">" . FRONTPATH . "home/views/layouts/general.php </span></strong><span style=\"color:#fff;\">.php</span></td></tr>";
                            $total++;
                        }
                    } else {

                        if ($module_name == "header" OR $module_name == "footer") {
                            $contenido = $this->readFileContents(TEMPLATEPATH . $module_name . ".php");
                            $module = array();
                            $a_data = array();
                            $contenido = str_replace("href=\"", "href=\"<?php echo base_url(); ?>", $contenido);
                            $contenido = str_replace("src=\"", "src=\"<?php echo base_url(); ?>", $contenido);
                            $contenido = str_replace(".php", "", $contenido);
                            $contenido = str_replace("<?php echo base_url(); ?>mailto", "mailto", $contenido);
                            $contenido = str_replace("<?php echo base_url(); ?>http", "http", $contenido);
                            $contenido = str_replace("<?php echo base_url(); ?>https", "https", $contenido);
                            $contenido = str_replace("<?php echo base_url(); ?>#", "#", $contenido);
                            $contenido = str_replace("index", "home", $contenido);
                            if ($this->create(FRONTPATH . "home/views/partials/{$module_name}.php", $contenido, 'w+', 0777)) {
                                $html .= "<tr><td><strong><span style=\"color:#fff;\"> se ha modificado el archivo {$module_name}.php en partials - Ruta:</span><span style=\"color:#729fbe;\">" . FRONTPATH . "home/views/partials/{$module_name}.php </span></strong><span style=\"color:#fff;\">.php</span></td></tr>";
                                $total++;
                            }
                        } else {
                            $controller = str_replace("-", "_", $module_name);
                            if ($module_name == "index" OR $module_name == "default") {
                                $controller = "home";
                            }
                            if ($this->create(FRONTPATH . "{$controller}/controllers/{$controller}.php", $filestr, 'w+', 0777)) {
                                $this->create(FRONTPATH . "{$controller}/views/");
                                $view = $this->readFileContents(TEMPLATEPATH . "{$module_name}.php");
                                $view = str_replace("<?php include(\"head.php\"); ?>", "", $view);
                                $view = str_replace("<?php include('head.php'); ?>", "", $view);
                                $view = str_replace("<?php include(\"header.php\"); ?>", "", $view);
                                $view = str_replace("<?php include('header.php'); ?>", "", $view);
                                $view = str_replace("<?php include('footer.php'); ?>", "", $view);
                                $view = str_replace("<?php include(\"footer.php\"); ?>", "", $view);
                                $view = str_replace(".php", "", $view);
                                $view = str_replace("href=\"", "href=\"<?php echo base_url(); ?>", $view);
                                $view = str_replace("src=\"", "src=\"<?php echo base_url(); ?>", $view);
                                $view = str_replace("<?php echo base_url(); ?>mailto", "mailto", $view);
                                $view = str_replace("<?php echo base_url(); ?>http", "http", $view);
                                $view = str_replace("<?php echo base_url(); ?>https", "https", $view);
                                $view = str_replace("<?php echo base_url(); ?>#", "#", $view);
                                $view = str_replace("index", "home", $view);
                                $this->create(FRONTPATH . "{$controller}/views/body.php", $view, 'w+', 0777);
                                /* @copy(TEMPLATEPATH . "{$module_name}.php", FRONTPATH . "{$module_name}/views/body.php"); */
                                $html .= "<tr><td><strong><span style=\"color:#fff;\"> Module {$controller} ha sido generado - Ruta:</span><span style=\"color:#729fbe;\">" . FRONTPATH . "{$controller}" . "</span></strong><span style=\"color:#fff;\">.php</span></td></tr>";
                                $total++;
                            }
                        }
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
