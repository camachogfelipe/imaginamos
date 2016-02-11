<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Uploader/
 * @author rigobcastro - rigo@imaginamos.co
 */
class Upload extends Back_Controller {

    const UPLOAD_FOLDER = 'news/';

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {


        $targetDir = UPLOADSFOLDER . self::UPLOAD_FOLDER;


        if (!is_dir(UPLOADSFOLDER)) {
            @mkdir(UPLOADSFOLDER);
            @chmod(UPLOADSFOLDER, 0777);
        }
        if (!is_dir($targetDir)) {
            @mkdir($targetDir);
            @chmod($targetDir, 0777);
        }

        //$cleanupTargetDir = false; // Remove old files
        //$maxFileAge = 60 * 60; // Temp file age in seconds
        // 5 minutes execution time
        @set_time_limit(5 * 60);

        // Uncomment this one to fake upload time
        // usleep(5000);
        // Get parameters
        $chunk = isset($_REQUEST["chunk"]) ? $_REQUEST["chunk"] : 0;
        $chunks = isset($_REQUEST["chunks"]) ? $_REQUEST["chunks"] : 0;
        $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';

        // Clean the fileName for security reasons
        $fileName = preg_replace('/[^\w\._]+/', '', $fileName);


        // Make sure the fileName is unique but only if chunking is disabled
        if ($chunks < 2 && file_exists($targetDir . DS . $fileName)) {
            $ext = strrpos($fileName, '.');
            $fileName_a = substr($fileName, 0, $ext);
            $fileName_b = substr($fileName, $ext);

            $count = 1;
            while (file_exists($targetDir . DS . $fileName_a . '_' . $count . $fileName_b))
                $count++;

            $fileName = $fileName_a . '_' . $count . $fileName_b;
        }

        // Create target dir
        if (!file_exists($targetDir))
            @mkdir($targetDir);

        if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
            $contentType = $_SERVER["HTTP_CONTENT_TYPE"];

        if (isset($_SERVER["CONTENT_TYPE"]))
            $contentType = $_SERVER["CONTENT_TYPE"];

        // Handle non multipart uploads older WebKit versions didn't support multipart in HTML5
        if (strpos($contentType, "multipart") !== false) {
            if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                // Open temp file
                $out = fopen($targetDir . DS . $fileName, $chunk == 0 ? "wb" : "ab");
                if ($out) {
                    // Read binary input stream and append it to temp file
                    $in = fopen($_FILES['file']['tmp_name'], "rb");

                    if ($in) {
                        while ($buff = fread($in, 4096))
                            fwrite($out, $buff);
                    } else
                        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
                    fclose($in);
                    fclose($out);
                    @unlink($_FILES['file']['tmp_name']);
                }
                else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
            }
            else
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
        }
        else {
            // Open temp file
            $out = fopen($targetDir . DS . $fileName, $chunk == 0 ? "wb" : "ab");
            if ($out) {
                // Read binary input stream and append it to temp file
                $in = fopen("php://input", "rb");

                if ($in) {
                    while ($buff = fread($in, 4096))
                        fwrite($out, $buff);
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

                fclose($in);
                fclose($out);
            }
            else
                die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

        $filePath = $targetDir . $fileName;
        $filePath = str_replace('//', '/', $filePath);
        $thumb = null;

         $this->load->library('image_lib');

        $thumb = $targetDir . 't_' . $fileName;
        if (!is_file($thumb)) {
            $config['source_image'] = $filePath;
            $config['master_dim'] = 'width';
            $config['new_image'] = $thumb;
            $config['width'] = 200;
            $config['height'] = 200;

            $this->image_lib->initialize($config);
            if (!$this->image_lib->resize()) {
                $thumb = null;
            }
        }


        $save = $this->_save_relation($this->_post('id'), $filePath, $thumb);

        if (!$save) {
            @unlink($filePath);
            die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Hubo un error en la aplicación."}, "id" : "id"}');
        }

        die('{"jsonrpc" : "2.0", "result" : null,  "save" : true, "save_relation" : ' . $save . '}');
    }

    // ----------------------------------------------------------------------


    private function _save_relation($id, $image, $thumb = null) {
        $image = str_replace(UPLOADSFOLDER, '', $image);
        $thumb = str_replace(UPLOADSFOLDER, '', $thumb);

        // Cargando modelos
        $datos = new News($id);
        $images = new News_image;
        // Obteniendo modelos
        $images->image = $image;
        $images->thumb = $thumb;


        // Guardando el item con las relaciones
        return $images->save($datos);
    }

    // ----------------------------------------------------------------------
}