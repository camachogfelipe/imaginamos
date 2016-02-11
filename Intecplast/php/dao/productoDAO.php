<?php

class productoDAO{

    public $daoConnection;

    function __construct(){
        
        $this->daoConnection = new DAO;
        $this->daoConnection->conectar();
    }

    function save($producto){
        
        $new = new producto();
        $new = $producto;

        $sql = "INSERT INTO productos (producto_codigo, producto_descripcion, producto_nombre, categoria_id, sublinea_id, forma_id, producto_atributo1, producto_atributo2, producto_entradas, tamano_id, producto_capacidad, producto_unidadCap, material_id, color_id, producto_boca, producto_unidadBoca, producto_peso, producto_terminado, linner_id, falda_id, producto_cavidades, producto_anotacion, clase_id, producto_imagen, boca_id, capacidad_id, producto_descripcion_i, producto_nombre_i, producto_terminado_i, producto_anotacion_i)
        VALUES (
        '".mysql_real_escape_string($new->getProducto_codigo())."',
        '".mysql_real_escape_string($new->getProducto_descripcion())."',
        '".mysql_real_escape_string($new->getProducto_nombre())."',
        '".mysql_real_escape_string($new->getCategoria_id())."',
        '".mysql_real_escape_string($new->getSublinea_id())."',
        '".mysql_real_escape_string($new->getForma_id())."',
        '".mysql_real_escape_string($new->getProducto_atributo1())."',  
        '".mysql_real_escape_string($new->getProducto_atributo2())."',
        '".mysql_real_escape_string($new->getProducto_entradas())."',
        '".mysql_real_escape_string($new->getTamano_id())."',
        '".mysql_real_escape_string($new->getProducto_capacidad())."',  
        '".mysql_real_escape_string($new->getProducto_unidadCap())."',  
        '".mysql_real_escape_string($new->getMaterial_id())."',
        '".mysql_real_escape_string($new->getColor_id())."',
        '".mysql_real_escape_string($new->getProducto_boca())."',
        '".mysql_real_escape_string($new->getProducto_unidadBoca())."',
        '".mysql_real_escape_string($new->getProducto_peso())."',
        '".mysql_real_escape_string($new->getProducto_terminado())."',  
        '".mysql_real_escape_string($new->getLinner_id())."',
        '".mysql_real_escape_string($new->getFalda_id())."',
        '".mysql_real_escape_string($new->getProducto_cavidades())."',  
        '".mysql_real_escape_string($new->getProducto_anotacion())."',  
        '".mysql_real_escape_string($new->getClase_id())."',
        '".mysql_real_escape_string($new->getProducto_imagen())."',
        '".mysql_real_escape_string($new->getBoca_id())."',
        '".mysql_real_escape_string($new->getCapacidad_id())."',
        '".mysql_real_escape_string($new->getProducto_descripcion_i())."',
        '".mysql_real_escape_string($new->getProducto_nombre_i())."',
        '".mysql_real_escape_string($new->getProducto_terminado_i())."',
        '".mysql_real_escape_string($new->getProducto_anotacion_i())."');";


            $result = mysql_query($sql, $this->daoConnection->Conexion_ID);
            if (!$result) {
                echo 'Ooops (save producto): '.mysql_error();
                return false;
            }
            return true;
    }

    function getLastId(){
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }

    function update ($producto){

        $new = new producto();
        $new = $producto;

        $sql = "UPDATE productos SET  
            producto_descripcion=
                '".mysql_real_escape_string($new->getProducto_descripcion())."',
            producto_nombre=
            '".mysql_real_escape_string($new->getProducto_nombre())."',
            categoria_id=
            '".mysql_real_escape_string($new->getCategoria_id())."',
            sublinea_id=
            '".mysql_real_escape_string($new->getSublinea_id())."',
            forma_id=
            '".mysql_real_escape_string($new->getForma_id())."',
            producto_atributo1=
            '".mysql_real_escape_string($new->getProducto_atributo1())."',
            producto_atributo2= 
            '".mysql_real_escape_string($new->getProducto_atributo2())."',
            producto_entradas=
            '".mysql_real_escape_string($new->getProducto_entradas())."',
            tamano_id=
            '".mysql_real_escape_string($new->getTamano_id())."',
            producto_capacidad=
            '".mysql_real_escape_string($new->getProducto_capacidad())."',
            producto_unidadCap=
            '".mysql_real_escape_string($new->getProducto_unidadCap())."',  
            material_id=
            '".mysql_real_escape_string($new->getMaterial_id())."',
            color_id=
            '".mysql_real_escape_string($new->getColor_id())."',
            producto_boca=
            '".mysql_real_escape_string($new->getProducto_boca())."',
            producto_unidadBoca=
            '".mysql_real_escape_string($new->getProducto_unidadBoca())."',
            producto_peso=
            '".mysql_real_escape_string($new->getProducto_peso())."',
            producto_terminado=
            '".mysql_real_escape_string($new->getProducto_terminado())."',  
            linner_id=
            '".mysql_real_escape_string($new->getLinner_id())."',
            falda_id=
            '".mysql_real_escape_string($new->getFalda_id())."',
            producto_cavidades=
            '".mysql_real_escape_string($new->getProducto_cavidades())."',
            producto_anotacion= 
            '".mysql_real_escape_string($new->getProducto_anotacion())."',  
            clase_id=
            '".mysql_real_escape_string($new->getClase_id())."',
            producto_imagen=
            '".mysql_real_escape_string($new->getProducto_imagen())."',
            boca_id=
            '".mysql_real_escape_string($new->getBoca_id())."',
            capacidad_id=
            '".mysql_real_escape_string($new->getCapacidad_id())."',
            producto_descripcion_i=
            '".mysql_real_escape_string($new->getProducto_descripcion_i())."',
            producto_nombre_i=
            '".mysql_real_escape_string($new->getProducto_nombre_i())."',
            producto_terminado_i=
            '".mysql_real_escape_string($new->getProducto_terminado_i())."',
            producto_anotacion_i=
            '".mysql_real_escape_string($new->getProducto_anotacion_i())."'

             WHERE producto_codigo = '".mysql_real_escape_string($new->getProducto_codigo())."';";

        $result = mysql_query($sql, $this->daoConnection->Conexion_ID);
        if (!$result){
            echo 'Ooops (update producto): '.mysql_error();
            return false;
        }
        return true;
    }



    function gets(){

        $sql = "SELECT * FROM productos ORDER BY clase_id;";

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

        $numRegistros = $this->daoConnection->numregistros();

        if ($numRegistros == 0){
            return NULL;
        }

        $news = NULL;

        for ($i = 0; $i < $numRegistros; $i++){

            $new = new producto();

            $new->setProducto_codigo($this->daoConnection->ObjetoConsulta2[$i][0]);
            $new->setProducto_descripcion($this->daoConnection->ObjetoConsulta2[$i][1]);
            $new->setProducto_nombre($this->daoConnection->ObjetoConsulta2[$i][2]);
            $new->setCategoria_id($this->daoConnection->ObjetoConsulta2[$i][3]);
            $new->setSublinea_id($this->daoConnection->ObjetoConsulta2[$i][4]);
            $new->setForma_id($this->daoConnection->ObjetoConsulta2[$i][5]);
            $new->setProducto_atributo1($this->daoConnection->ObjetoConsulta2[$i][6]);
            $new->setProducto_atributo2($this->daoConnection->ObjetoConsulta2[$i][7]);
            $new->setProducto_entradas($this->daoConnection->ObjetoConsulta2[$i][8]);
            $new->setTamano_id($this->daoConnection->ObjetoConsulta2[$i][9]);
            $new->setProducto_capacidad($this->daoConnection->ObjetoConsulta2[$i][10]);
            $new->setProducto_unidadCap($this->daoConnection->ObjetoConsulta2[$i][11]);
            $new->setMaterial_id($this->daoConnection->ObjetoConsulta2[$i][12]);
            $new->setColor_id($this->daoConnection->ObjetoConsulta2[$i][13]);
            $new->setProducto_boca($this->daoConnection->ObjetoConsulta2[$i][14]);
            $new->setProducto_unidadBoca($this->daoConnection->ObjetoConsulta2[$i][15]);
            $new->setProducto_peso($this->daoConnection->ObjetoConsulta2[$i][16]);
            $new->setProducto_terminado($this->daoConnection->ObjetoConsulta2[$i][17]);
            $new->setLinner_id($this->daoConnection->ObjetoConsulta2[$i][18]);
            $new->setFalda_id($this->daoConnection->ObjetoConsulta2[$i][19]);
            $new->setProducto_cavidades($this->daoConnection->ObjetoConsulta2[$i][20]);
            $new->setProducto_anotacion($this->daoConnection->ObjetoConsulta2[$i][21]);
            $new->setClase_id($this->daoConnection->ObjetoConsulta2[$i][22]);
            $new->setProducto_imagen($this->daoConnection->ObjetoConsulta2[$i][23]);
            $new->setBoca_id($this->daoConnection->ObjetoConsulta2[$i][24]);
            $new->setCapacidad_id($this->daoConnection->ObjetoConsulta2[$i][25]);
            $new->setProducto_descripcion_i($this->daoConnection->ObjetoConsulta2[$i][26]);
            $new->setProducto_nombre_i($this->daoConnection->ObjetoConsulta2[$i][27]);
            $new->setProducto_terminado_i($this->daoConnection->ObjetoConsulta2[$i][28]);
            $new->setProducto_anotacion_i($this->daoConnection->ObjetoConsulta2[$i][29]);

                $new->setProducto_codigo(str_replace('\\', '', $new->getProducto_codigo()));
                $new->setProducto_descripcion(str_replace('\\', '', $new->getProducto_descripcion()));
                $new->setProducto_nombre(str_replace('\\', '', $new->getProducto_nombre()));
                $new->setProducto_entradas(str_replace('\\', '', $new->getProducto_entradas()));
                $new->setProducto_capacidad(str_replace('\\', '', $new->getProducto_capacidad()));
                $new->setProducto_boca(str_replace('\\', '', $new->getProducto_boca()));
                $new->setProducto_peso(str_replace('\\', '', $new->getProducto_peso()));
                $new->setProducto_terminado(str_replace('\\', '', $new->getProducto_terminado()));
                $new->setProducto_cavidades(str_replace('\\', '', $new->getProducto_cavidades()));
                $new->setProducto_anotacion(str_replace('\\', '', $new->getProducto_anotacion()));

            $news[$i] = $new;

        }

        return $news;

    }


    function buscarAtributo($atributo,$valor){

        $sql = "SELECT * FROM productos WHERE ".$atributo." = '".$valor."' ";

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

        $numRegistros = $this->daoConnection->numregistros();

        if ($numRegistros == 0){
            return NULL;
        }

        $news = NULL;

        for ($i = 0; $i < $numRegistros; $i++){

            $new = new producto();

            $new->setProducto_codigo($this->daoConnection->ObjetoConsulta2[$i][0]);
            $new->setProducto_descripcion($this->daoConnection->ObjetoConsulta2[$i][1]);
            $new->setProducto_nombre($this->daoConnection->ObjetoConsulta2[$i][2]);
            $new->setCategoria_id($this->daoConnection->ObjetoConsulta2[$i][3]);
            $new->setSublinea_id($this->daoConnection->ObjetoConsulta2[$i][4]);
            $new->setForma_id($this->daoConnection->ObjetoConsulta2[$i][5]);
            $new->setProducto_atributo1($this->daoConnection->ObjetoConsulta2[$i][6]);
            $new->setProducto_atributo2($this->daoConnection->ObjetoConsulta2[$i][7]);
            $new->setProducto_entradas($this->daoConnection->ObjetoConsulta2[$i][8]);
            $new->setTamano_id($this->daoConnection->ObjetoConsulta2[$i][9]);
            $new->setProducto_capacidad($this->daoConnection->ObjetoConsulta2[$i][10]);
            $new->setProducto_unidadCap($this->daoConnection->ObjetoConsulta2[$i][11]);
            $new->setMaterial_id($this->daoConnection->ObjetoConsulta2[$i][12]);
            $new->setColor_id($this->daoConnection->ObjetoConsulta2[$i][13]);
            $new->setProducto_boca($this->daoConnection->ObjetoConsulta2[$i][14]);
            $new->setProducto_unidadBoca($this->daoConnection->ObjetoConsulta2[$i][15]);
            $new->setProducto_peso($this->daoConnection->ObjetoConsulta2[$i][16]);
            $new->setProducto_terminado($this->daoConnection->ObjetoConsulta2[$i][17]);
            $new->setLinner_id($this->daoConnection->ObjetoConsulta2[$i][18]);
            $new->setFalda_id($this->daoConnection->ObjetoConsulta2[$i][19]);
            $new->setProducto_cavidades($this->daoConnection->ObjetoConsulta2[$i][20]);
            $new->setProducto_anotacion($this->daoConnection->ObjetoConsulta2[$i][21]);
            $new->setClase_id($this->daoConnection->ObjetoConsulta2[$i][22]);
            $new->setProducto_imagen($this->daoConnection->ObjetoConsulta2[$i][23]);
            $new->setBoca_id($this->daoConnection->ObjetoConsulta2[$i][24]);
            $new->setCapacidad_id($this->daoConnection->ObjetoConsulta2[$i][25]);
            $new->setProducto_descripcion_i($this->daoConnection->ObjetoConsulta2[$i][26]);
            $new->setProducto_nombre_i($this->daoConnection->ObjetoConsulta2[$i][27]);
            $new->setProducto_terminado_i($this->daoConnection->ObjetoConsulta2[$i][28]);
            $new->setProducto_anotacion_i($this->daoConnection->ObjetoConsulta2[$i][29]);

                $new->setProducto_codigo(str_replace('\\', '', $new->getProducto_codigo()));
                $new->setProducto_descripcion(str_replace('\\', '', $new->getProducto_descripcion()));
                $new->setProducto_nombre(str_replace('\\', '', $new->getProducto_nombre()));
                $new->setProducto_entradas(str_replace('\\', '', $new->getProducto_entradas()));
                $new->setProducto_capacidad(str_replace('\\', '', $new->getProducto_capacidad()));
                $new->setProducto_boca(str_replace('\\', '', $new->getProducto_boca()));
                $new->setProducto_peso(str_replace('\\', '', $new->getProducto_peso()));
                $new->setProducto_terminado(str_replace('\\', '', $new->getProducto_terminado()));
                $new->setProducto_cavidades(str_replace('\\', '', $new->getProducto_cavidades()));
                $new->setProducto_anotacion(str_replace('\\', '', $new->getProducto_anotacion()));

            $news[$i] = $new;

        }

        return $news;

    }


    function getRandom($producto_codigo,$clase_id){
            $sql = "SELECT * FROM productos WHERE producto_codigo != '".mysql_real_escape_string($producto_codigo)."' AND clase_id = '".mysql_real_escape_string($clase_id)."' ORDER BY RAND() LIMIT 2;";

            $this->daoConnection->consulta($sql);
            $this->daoConnection->leerVarios();

            $numRegistros = $this->daoConnection->numregistros();

            if ($numRegistros == 0){
                return NULL;
            }

            $news = NULL;

            for ($i = 0; $i < $numRegistros; $i++){

                $new = new producto();

                $new->setProducto_codigo($this->daoConnection->ObjetoConsulta2[$i][0]);
                $new->setProducto_descripcion($this->daoConnection->ObjetoConsulta2[$i][1]);
                $new->setProducto_nombre($this->daoConnection->ObjetoConsulta2[$i][2]);
                $new->setCategoria_id($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setSublinea_id($this->daoConnection->ObjetoConsulta2[$i][4]);
                $new->setForma_id($this->daoConnection->ObjetoConsulta2[$i][5]);
                $new->setProducto_atributo1($this->daoConnection->ObjetoConsulta2[$i][6]);
                $new->setProducto_atributo2($this->daoConnection->ObjetoConsulta2[$i][7]);
                $new->setProducto_entradas($this->daoConnection->ObjetoConsulta2[$i][8]);
                $new->setTamano_id($this->daoConnection->ObjetoConsulta2[$i][9]);
                $new->setProducto_capacidad($this->daoConnection->ObjetoConsulta2[$i][10]);
                $new->setProducto_unidadCap($this->daoConnection->ObjetoConsulta2[$i][11]);
                $new->setMaterial_id($this->daoConnection->ObjetoConsulta2[$i][12]);
                $new->setColor_id($this->daoConnection->ObjetoConsulta2[$i][13]);
                $new->setProducto_boca($this->daoConnection->ObjetoConsulta2[$i][14]);
                $new->setProducto_unidadBoca($this->daoConnection->ObjetoConsulta2[$i][15]);
                $new->setProducto_peso($this->daoConnection->ObjetoConsulta2[$i][16]);
                $new->setProducto_terminado($this->daoConnection->ObjetoConsulta2[$i][17]);
                $new->setLinner_id($this->daoConnection->ObjetoConsulta2[$i][18]);
                $new->setFalda_id($this->daoConnection->ObjetoConsulta2[$i][19]);
                $new->setProducto_cavidades($this->daoConnection->ObjetoConsulta2[$i][20]);
                $new->setProducto_anotacion($this->daoConnection->ObjetoConsulta2[$i][21]);
                $new->setClase_id($this->daoConnection->ObjetoConsulta2[$i][22]);
                $new->setProducto_imagen($this->daoConnection->ObjetoConsulta2[$i][23]);
                $new->setBoca_id($this->daoConnection->ObjetoConsulta2[$i][24]);
                $new->setCapacidad_id($this->daoConnection->ObjetoConsulta2[$i][25]);
                $new->setProducto_descripcion_i($this->daoConnection->ObjetoConsulta2[$i][26]);
                $new->setProducto_nombre_i($this->daoConnection->ObjetoConsulta2[$i][27]);
                $new->setProducto_terminado_i($this->daoConnection->ObjetoConsulta2[$i][28]);
                $new->setProducto_anotacion_i($this->daoConnection->ObjetoConsulta2[$i][29]);
                    $new->setProducto_codigo(str_replace('\\', '', $new->getProducto_codigo()));
                    $new->setProducto_descripcion(str_replace('\\', '', $new->getProducto_descripcion()));
                    $new->setProducto_nombre(str_replace('\\', '', $new->getProducto_nombre()));
                    $new->setProducto_entradas(str_replace('\\', '', $new->getProducto_entradas()));
                    $new->setProducto_capacidad(str_replace('\\', '', $new->getProducto_capacidad()));
                    $new->setProducto_boca(str_replace('\\', '', $new->getProducto_boca()));
                    $new->setProducto_peso(str_replace('\\', '', $new->getProducto_peso()));
                    $new->setProducto_terminado(str_replace('\\', '', $new->getProducto_terminado()));
                    $new->setProducto_cavidades(str_replace('\\', '', $new->getProducto_cavidades()));
                    $new->setProducto_anotacion(str_replace('\\', '', $new->getProducto_anotacion()));

                $news[$i] = $new;

            }

            return $news;

        }

    function getFilter($clase_id){
            $sql = "SELECT * FROM productos WHERE clase_id = $clase_id ORDER BY producto_nombre;";

            $this->daoConnection->consulta($sql);
            $this->daoConnection->leerVarios();

            $numRegistros = $this->daoConnection->numregistros();

            if ($numRegistros == 0){
                return NULL;
            }

            $news = NULL;

            for ($i = 0; $i < $numRegistros; $i++){

                $new = new producto();

                $new->setProducto_codigo($this->daoConnection->ObjetoConsulta2[$i][0]);
                $new->setProducto_descripcion($this->daoConnection->ObjetoConsulta2[$i][1]);
                $new->setProducto_nombre($this->daoConnection->ObjetoConsulta2[$i][2]);
                $new->setCategoria_id($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setSublinea_id($this->daoConnection->ObjetoConsulta2[$i][4]);
                $new->setForma_id($this->daoConnection->ObjetoConsulta2[$i][5]);
                $new->setProducto_atributo1($this->daoConnection->ObjetoConsulta2[$i][6]);
                $new->setProducto_atributo2($this->daoConnection->ObjetoConsulta2[$i][7]);
                $new->setProducto_entradas($this->daoConnection->ObjetoConsulta2[$i][8]);
                $new->setTamano_id($this->daoConnection->ObjetoConsulta2[$i][9]);
                $new->setProducto_capacidad($this->daoConnection->ObjetoConsulta2[$i][10]);
                $new->setProducto_unidadCap($this->daoConnection->ObjetoConsulta2[$i][11]);
                $new->setMaterial_id($this->daoConnection->ObjetoConsulta2[$i][12]);
                $new->setColor_id($this->daoConnection->ObjetoConsulta2[$i][13]);
                $new->setProducto_boca($this->daoConnection->ObjetoConsulta2[$i][14]);
                $new->setProducto_unidadBoca($this->daoConnection->ObjetoConsulta2[$i][15]);
                $new->setProducto_peso($this->daoConnection->ObjetoConsulta2[$i][16]);
                $new->setProducto_terminado($this->daoConnection->ObjetoConsulta2[$i][17]);
                $new->setLinner_id($this->daoConnection->ObjetoConsulta2[$i][18]);
                $new->setFalda_id($this->daoConnection->ObjetoConsulta2[$i][19]);
                $new->setProducto_cavidades($this->daoConnection->ObjetoConsulta2[$i][20]);
                $new->setProducto_anotacion($this->daoConnection->ObjetoConsulta2[$i][21]);
                $new->setClase_id($this->daoConnection->ObjetoConsulta2[$i][22]);
                $new->setProducto_imagen($this->daoConnection->ObjetoConsulta2[$i][23]);
                $new->setBoca_id($this->daoConnection->ObjetoConsulta2[$i][24]);
                $new->setCapacidad_id($this->daoConnection->ObjetoConsulta2[$i][25]);
                $new->setProducto_descripcion_i($this->daoConnection->ObjetoConsulta2[$i][26]);
                $new->setProducto_nombre_i($this->daoConnection->ObjetoConsulta2[$i][27]);
                $new->setProducto_terminado_i($this->daoConnection->ObjetoConsulta2[$i][28]);
                $new->setProducto_anotacion_i($this->daoConnection->ObjetoConsulta2[$i][29]);
                    $new->setProducto_codigo(str_replace('\\', '', $new->getProducto_codigo()));
                    $new->setProducto_descripcion(str_replace('\\', '', $new->getProducto_descripcion()));
                    $new->setProducto_nombre(str_replace('\\', '', $new->getProducto_nombre()));
                    $new->setProducto_entradas(str_replace('\\', '', $new->getProducto_entradas()));
                    $new->setProducto_capacidad(str_replace('\\', '', $new->getProducto_capacidad()));
                    $new->setProducto_boca(str_replace('\\', '', $new->getProducto_boca()));
                    $new->setProducto_peso(str_replace('\\', '', $new->getProducto_peso()));
                    $new->setProducto_terminado(str_replace('\\', '', $new->getProducto_terminado()));
                    $new->setProducto_cavidades(str_replace('\\', '', $new->getProducto_cavidades()));
                    $new->setProducto_anotacion(str_replace('\\', '', $new->getProducto_anotacion()));

                $news[$i] = $new;

            }

            return $news;

        }
      function getAutoCompleteBase($clase_id,$param){
            $sql = "SELECT * FROM productos WHERE producto_codigo LIKE '%".$param."%' AND clase_id =".$clase_id.";";

            $this->daoConnection->consulta($sql);
            $this->daoConnection->leerVarios();

            $numRegistros = $this->daoConnection->numregistros();

            if ($numRegistros == 0){
                return NULL;
            }

            $news = NULL;

            for ($i = 0; $i < $numRegistros; $i++){

                $new = new producto();

                $new->setProducto_codigo($this->daoConnection->ObjetoConsulta2[$i][0]);
                $new->setProducto_descripcion($this->daoConnection->ObjetoConsulta2[$i][1]);
                $new->setProducto_nombre($this->daoConnection->ObjetoConsulta2[$i][2]);
                $new->setCategoria_id($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setSublinea_id($this->daoConnection->ObjetoConsulta2[$i][4]);
                $new->setForma_id($this->daoConnection->ObjetoConsulta2[$i][5]);
                $new->setProducto_atributo1($this->daoConnection->ObjetoConsulta2[$i][6]);
                $new->setProducto_atributo2($this->daoConnection->ObjetoConsulta2[$i][7]);
                $new->setProducto_entradas($this->daoConnection->ObjetoConsulta2[$i][8]);
                $new->setTamano_id($this->daoConnection->ObjetoConsulta2[$i][9]);
                $new->setProducto_capacidad($this->daoConnection->ObjetoConsulta2[$i][10]);
                $new->setProducto_unidadCap($this->daoConnection->ObjetoConsulta2[$i][11]);
                $new->setMaterial_id($this->daoConnection->ObjetoConsulta2[$i][12]);
                $new->setColor_id($this->daoConnection->ObjetoConsulta2[$i][13]);
                $new->setProducto_boca($this->daoConnection->ObjetoConsulta2[$i][14]);
                $new->setProducto_unidadBoca($this->daoConnection->ObjetoConsulta2[$i][15]);
                $new->setProducto_peso($this->daoConnection->ObjetoConsulta2[$i][16]);
                $new->setProducto_terminado($this->daoConnection->ObjetoConsulta2[$i][17]);
                $new->setLinner_id($this->daoConnection->ObjetoConsulta2[$i][18]);
                $new->setFalda_id($this->daoConnection->ObjetoConsulta2[$i][19]);
                $new->setProducto_cavidades($this->daoConnection->ObjetoConsulta2[$i][20]);
                $new->setProducto_anotacion($this->daoConnection->ObjetoConsulta2[$i][21]);
                $new->setClase_id($this->daoConnection->ObjetoConsulta2[$i][22]);
                $new->setProducto_imagen($this->daoConnection->ObjetoConsulta2[$i][23]);
                $new->setBoca_id($this->daoConnection->ObjetoConsulta2[$i][24]);
                $new->setCapacidad_id($this->daoConnection->ObjetoConsulta2[$i][25]);
                $new->setProducto_descripcion_i($this->daoConnection->ObjetoConsulta2[$i][26]);
                $new->setProducto_nombre_i($this->daoConnection->ObjetoConsulta2[$i][27]);
                $new->setProducto_terminado_i($this->daoConnection->ObjetoConsulta2[$i][28]);
                $new->setProducto_anotacion_i($this->daoConnection->ObjetoConsulta2[$i][29]);
                    $new->setProducto_codigo(str_replace('\\', '', $new->getProducto_codigo()));
                    $new->setProducto_descripcion(str_replace('\\', '', $new->getProducto_descripcion()));
                    $new->setProducto_nombre(str_replace('\\', '', $new->getProducto_nombre()));
                    $new->setProducto_entradas(str_replace('\\', '', $new->getProducto_entradas()));
                    $new->setProducto_capacidad(str_replace('\\', '', $new->getProducto_capacidad()));
                    $new->setProducto_boca(str_replace('\\', '', $new->getProducto_boca()));
                    $new->setProducto_peso(str_replace('\\', '', $new->getProducto_peso()));
                    $new->setProducto_terminado(str_replace('\\', '', $new->getProducto_terminado()));
                    $new->setProducto_cavidades(str_replace('\\', '', $new->getProducto_cavidades()));
                    $new->setProducto_anotacion(str_replace('\\', '', $new->getProducto_anotacion()));

                $news[$i] = $new;

            }

            return $news;

        }
    
    function getByCategoria($categoria_id){
            $sql = "SELECT * FROM productos WHERE categoria_id = $categoria_id ORDER BY producto_nombre;";

            $this->daoConnection->consulta($sql);
            $this->daoConnection->leerVarios();

            $numRegistros = $this->daoConnection->numregistros();

            if ($numRegistros == 0){
                return NULL;
            }

            $news = NULL;

            for ($i = 0; $i < $numRegistros; $i++){

                $new = new producto();

                $new->setProducto_codigo($this->daoConnection->ObjetoConsulta2[$i][0]);
                $new->setProducto_descripcion($this->daoConnection->ObjetoConsulta2[$i][1]);
                $new->setProducto_nombre($this->daoConnection->ObjetoConsulta2[$i][2]);
                $new->setCategoria_id($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setSublinea_id($this->daoConnection->ObjetoConsulta2[$i][4]);
                $new->setForma_id($this->daoConnection->ObjetoConsulta2[$i][5]);
                $new->setProducto_atributo1($this->daoConnection->ObjetoConsulta2[$i][6]);
                $new->setProducto_atributo2($this->daoConnection->ObjetoConsulta2[$i][7]);
                $new->setProducto_entradas($this->daoConnection->ObjetoConsulta2[$i][8]);
                $new->setTamano_id($this->daoConnection->ObjetoConsulta2[$i][9]);
                $new->setProducto_capacidad($this->daoConnection->ObjetoConsulta2[$i][10]);
                $new->setProducto_unidadCap($this->daoConnection->ObjetoConsulta2[$i][11]);
                $new->setMaterial_id($this->daoConnection->ObjetoConsulta2[$i][12]);
                $new->setColor_id($this->daoConnection->ObjetoConsulta2[$i][13]);
                $new->setProducto_boca($this->daoConnection->ObjetoConsulta2[$i][14]);
                $new->setProducto_unidadBoca($this->daoConnection->ObjetoConsulta2[$i][15]);
                $new->setProducto_peso($this->daoConnection->ObjetoConsulta2[$i][16]);
                $new->setProducto_terminado($this->daoConnection->ObjetoConsulta2[$i][17]);
                $new->setLinner_id($this->daoConnection->ObjetoConsulta2[$i][18]);
                $new->setFalda_id($this->daoConnection->ObjetoConsulta2[$i][19]);
                $new->setProducto_cavidades($this->daoConnection->ObjetoConsulta2[$i][20]);
                $new->setProducto_anotacion($this->daoConnection->ObjetoConsulta2[$i][21]);
                $new->setClase_id($this->daoConnection->ObjetoConsulta2[$i][22]);
                $new->setProducto_imagen($this->daoConnection->ObjetoConsulta2[$i][23]);
                $new->setBoca_id($this->daoConnection->ObjetoConsulta2[$i][24]);
                $new->setCapacidad_id($this->daoConnection->ObjetoConsulta2[$i][25]);
                $new->setProducto_descripcion_i($this->daoConnection->ObjetoConsulta2[$i][26]);
                $new->setProducto_nombre_i($this->daoConnection->ObjetoConsulta2[$i][27]);
                $new->setProducto_terminado_i($this->daoConnection->ObjetoConsulta2[$i][28]);
                $new->setProducto_anotacion_i($this->daoConnection->ObjetoConsulta2[$i][29]);
                    $new->setProducto_codigo(str_replace('\\', '', $new->getProducto_codigo()));
                    $new->setProducto_descripcion(str_replace('\\', '', $new->getProducto_descripcion()));
                    $new->setProducto_nombre(str_replace('\\', '', $new->getProducto_nombre()));
                    $new->setProducto_entradas(str_replace('\\', '', $new->getProducto_entradas()));
                    $new->setProducto_capacidad(str_replace('\\', '', $new->getProducto_capacidad()));
                    $new->setProducto_boca(str_replace('\\', '', $new->getProducto_boca()));
                    $new->setProducto_peso(str_replace('\\', '', $new->getProducto_peso()));
                    $new->setProducto_terminado(str_replace('\\', '', $new->getProducto_terminado()));
                    $new->setProducto_cavidades(str_replace('\\', '', $new->getProducto_cavidades()));
                    $new->setProducto_anotacion(str_replace('\\', '', $new->getProducto_anotacion()));

                $news[$i] = $new;

            }

            return $news;

        }

    function getFilterSublinea($clase_id,$sublinea_id){
            $sql = "SELECT * FROM productos WHERE clase_id = '".mysql_real_escape_string($clase_id)."' AND sublinea_id = '".mysql_real_escape_string($sublinea_id)."' ORDER BY producto_codigo;";

            $this->daoConnection->consulta($sql);
            $this->daoConnection->leerVarios();

            $numRegistros = $this->daoConnection->numregistros();

            if ($numRegistros == 0){
                return NULL;
            }

            $news = NULL;

            for ($i = 0; $i < $numRegistros; $i++){

                $new = new producto();

                $new->setProducto_codigo($this->daoConnection->ObjetoConsulta2[$i][0]);
                $new->setProducto_descripcion($this->daoConnection->ObjetoConsulta2[$i][1]);
                $new->setProducto_nombre($this->daoConnection->ObjetoConsulta2[$i][2]);
                $new->setCategoria_id($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setSublinea_id($this->daoConnection->ObjetoConsulta2[$i][4]);
                $new->setForma_id($this->daoConnection->ObjetoConsulta2[$i][5]);
                $new->setProducto_atributo1($this->daoConnection->ObjetoConsulta2[$i][6]);
                $new->setProducto_atributo2($this->daoConnection->ObjetoConsulta2[$i][7]);
                $new->setProducto_entradas($this->daoConnection->ObjetoConsulta2[$i][8]);
                $new->setTamano_id($this->daoConnection->ObjetoConsulta2[$i][9]);
                $new->setProducto_capacidad($this->daoConnection->ObjetoConsulta2[$i][10]);
                $new->setProducto_unidadCap($this->daoConnection->ObjetoConsulta2[$i][11]);
                $new->setMaterial_id($this->daoConnection->ObjetoConsulta2[$i][12]);
                $new->setColor_id($this->daoConnection->ObjetoConsulta2[$i][13]);
                $new->setProducto_boca($this->daoConnection->ObjetoConsulta2[$i][14]);
                $new->setProducto_unidadBoca($this->daoConnection->ObjetoConsulta2[$i][15]);
                $new->setProducto_peso($this->daoConnection->ObjetoConsulta2[$i][16]);
                $new->setProducto_terminado($this->daoConnection->ObjetoConsulta2[$i][17]);
                $new->setLinner_id($this->daoConnection->ObjetoConsulta2[$i][18]);
                $new->setFalda_id($this->daoConnection->ObjetoConsulta2[$i][19]);
                $new->setProducto_cavidades($this->daoConnection->ObjetoConsulta2[$i][20]);
                $new->setProducto_anotacion($this->daoConnection->ObjetoConsulta2[$i][21]);
                $new->setClase_id($this->daoConnection->ObjetoConsulta2[$i][22]);
                $new->setProducto_imagen($this->daoConnection->ObjetoConsulta2[$i][23]);
                $new->setBoca_id($this->daoConnection->ObjetoConsulta2[$i][24]);
                $new->setCapacidad_id($this->daoConnection->ObjetoConsulta2[$i][25]);
                $new->setProducto_descripcion_i($this->daoConnection->ObjetoConsulta2[$i][26]);
                $new->setProducto_nombre_i($this->daoConnection->ObjetoConsulta2[$i][27]);
                $new->setProducto_terminado_i($this->daoConnection->ObjetoConsulta2[$i][28]);
                $new->setProducto_anotacion_i($this->daoConnection->ObjetoConsulta2[$i][29]);
                    $new->setProducto_codigo(str_replace('\\', '', $new->getProducto_codigo()));
                    $new->setProducto_descripcion(str_replace('\\', '', $new->getProducto_descripcion()));
                    $new->setProducto_nombre(str_replace('\\', '', $new->getProducto_nombre()));
                    $new->setProducto_entradas(str_replace('\\', '', $new->getProducto_entradas()));
                    $new->setProducto_capacidad(str_replace('\\', '', $new->getProducto_capacidad()));
                    $new->setProducto_boca(str_replace('\\', '', $new->getProducto_boca()));
                    $new->setProducto_peso(str_replace('\\', '', $new->getProducto_peso()));
                    $new->setProducto_terminado(str_replace('\\', '', $new->getProducto_terminado()));
                    $new->setProducto_cavidades(str_replace('\\', '', $new->getProducto_cavidades()));
                    $new->setProducto_anotacion(str_replace('\\', '', $new->getProducto_anotacion()));

                $news[$i] = $new;

            }

            return $news;

        }

    function getByLinea($clase_id,$linea_id){
            //$sql = "SELECT productos.producto_codigo, productos.producto_imagen, productos.producto_nombre, productos.material_id FROM  productos, sublineas WHERE sublineas.sublinea_id=productos.sublinea_id AND sublineas.linea_id = $linea_id AND productos.clase_id = $clase_id ORDER BY producto_nombre;";
    
            $sql = "SELECT productos.producto_codigo, productos.producto_imagen, productos.producto_nombre, productos.material_id, productos.boca_id FROM  productos, sublineas WHERE sublineas.sublinea_id=productos.sublinea_id $linea_id AND productos.clase_id = $clase_id ORDER BY producto_nombre;";

            //echo $sql;

            $this->daoConnection->consulta($sql);
            $this->daoConnection->leerVariosArray();

            $numRegistros = $this->daoConnection->numregistros();

            if ($numRegistros == 0){
                return NULL;
            }

            $news = NULL;

            for ($i = 0; $i < $numRegistros; $i++){

                $new = new producto();

                $new->setProducto_codigo($this->daoConnection->ObjetoConsulta2[$i]["producto_codigo"]);
                $new->setProducto_nombre($this->daoConnection->ObjetoConsulta2[$i]["producto_nombre"]);
                $new->setMaterial_id($this->daoConnection->ObjetoConsulta2[$i]["material_id"]);
                $new->setBoca_id($this->daoConnection->ObjetoConsulta2[$i]["boca_id"]);
                $new->setProducto_imagen($this->daoConnection->ObjetoConsulta2[$i]["producto_imagen"]);
                    $new->setProducto_codigo(str_replace('\\', '', $new->getProducto_codigo()));
                    $new->setProducto_nombre(str_replace('\\', '', $new->getProducto_nombre()));
                $news[$i] = $new;

            }

            return $news;

        }


    function getById($producto_codigo){

        $sql = "SELECT * FROM productos WHERE producto_codigo = '".mysql_real_escape_string($producto_codigo)."' ;";

        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();

        $numRegistros = $this->daoConnection->numregistros();

        if ($numRegistros == 0){
            return NULL;
        }

        $i = 0;

            $new = new producto();

            $new->setProducto_codigo($this->daoConnection->ObjetoConsulta2[$i][0]);
            $new->setProducto_descripcion($this->daoConnection->ObjetoConsulta2[$i][1]);
            $new->setProducto_nombre($this->daoConnection->ObjetoConsulta2[$i][2]);
            $new->setCategoria_id($this->daoConnection->ObjetoConsulta2[$i][3]);
            $new->setSublinea_id($this->daoConnection->ObjetoConsulta2[$i][4]);
            $new->setForma_id($this->daoConnection->ObjetoConsulta2[$i][5]);
            $new->setProducto_atributo1($this->daoConnection->ObjetoConsulta2[$i][6]);
            $new->setProducto_atributo2($this->daoConnection->ObjetoConsulta2[$i][7]);
            $new->setProducto_entradas($this->daoConnection->ObjetoConsulta2[$i][8]);
            $new->setTamano_id($this->daoConnection->ObjetoConsulta2[$i][9]);
            $new->setProducto_capacidad($this->daoConnection->ObjetoConsulta2[$i][10]);
            $new->setProducto_unidadCap($this->daoConnection->ObjetoConsulta2[$i][11]);
            $new->setMaterial_id($this->daoConnection->ObjetoConsulta2[$i][12]);
            $new->setColor_id($this->daoConnection->ObjetoConsulta2[$i][13]);
            $new->setProducto_boca($this->daoConnection->ObjetoConsulta2[$i][14]);
            $new->setProducto_unidadBoca($this->daoConnection->ObjetoConsulta2[$i][15]);
            $new->setProducto_peso($this->daoConnection->ObjetoConsulta2[$i][16]);
            $new->setProducto_terminado($this->daoConnection->ObjetoConsulta2[$i][17]);
            $new->setLinner_id($this->daoConnection->ObjetoConsulta2[$i][18]);
            $new->setFalda_id($this->daoConnection->ObjetoConsulta2[$i][19]);
            $new->setProducto_cavidades($this->daoConnection->ObjetoConsulta2[$i][20]);
            $new->setProducto_anotacion($this->daoConnection->ObjetoConsulta2[$i][21]);
            $new->setClase_id($this->daoConnection->ObjetoConsulta2[$i][22]);
            $new->setProducto_imagen($this->daoConnection->ObjetoConsulta2[$i][23]);
            $new->setBoca_id($this->daoConnection->ObjetoConsulta2[$i][24]);
            $new->setCapacidad_id($this->daoConnection->ObjetoConsulta2[$i][25]);
            $new->setProducto_descripcion_i($this->daoConnection->ObjetoConsulta2[$i][26]);
            $new->setProducto_nombre_i($this->daoConnection->ObjetoConsulta2[$i][27]);
            $new->setProducto_terminado_i($this->daoConnection->ObjetoConsulta2[$i][28]);
            $new->setProducto_anotacion_i($this->daoConnection->ObjetoConsulta2[$i][29]);
                $new->setProducto_codigo(str_replace('\\', '', $new->getProducto_codigo()));
                $new->setProducto_descripcion(str_replace('\\', '', $new->getProducto_descripcion()));
                $new->setProducto_nombre(str_replace('\\', '', $new->getProducto_nombre()));
                $new->setProducto_entradas(str_replace('\\', '', $new->getProducto_entradas()));
                $new->setProducto_capacidad(str_replace('\\', '', $new->getProducto_capacidad()));
                $new->setProducto_boca(str_replace('\\', '', $new->getProducto_boca()));
                $new->setProducto_peso(str_replace('\\', '', $new->getProducto_peso()));
                $new->setProducto_terminado(str_replace('\\', '', $new->getProducto_terminado()));
                $new->setProducto_cavidades(str_replace('\\', '', $new->getProducto_cavidades()));
                $new->setProducto_anotacion(str_replace('\\', '', $new->getProducto_anotacion()));
        return $new;

    }


    function total(){

    $sql = "SELECT COUNT(*) FROM productos;";

    $this->daoConnection->consulta($sql);
    $this->daoConnection->leerVarios();

    $numRegistros = $this->daoConnection->numregistros();

    if ($numRegistros == 0){
        return 0;
    }

    return $this->daoConnection->ObjetoConsulta2[0][0];

    }

    function delete($producto_codigo){


        $sql = "DELETE FROM productos WHERE producto_codigo = '".mysql_real_escape_string($producto_codigo)."';";

        $result = mysql_query($sql, $this->daoConnection->Conexion_ID);
        if (!$result){
            echo 'Ooops (delete producto): '.mysql_error();
            return false;
        }
        return true;
    }



}

?>