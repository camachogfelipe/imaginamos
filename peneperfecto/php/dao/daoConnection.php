<?php

class DAO {
    /* variables de conexiï¿½n */

    var $BaseDatos;
    var $Servidor;
    var $Usuario;
    var $Clave;
    var $ObjetoConsulta;
    var $ObjetoConsulta2;

    /* identificador de conexiï¿½n y consulta */
    var $Conexion_ID = 0;
    var $Consulta_ID = 0;


    /* numero de error y texto error */
    var $Errno = 0;
    var $Error = "";

    function DB_mysql() {
        
    }

    /* Conexiï¿½n a la base de datos */

    function conectar() {

        /* $this->BaseDatos = "vida10_peneP";
          $this->Servidor = "localhost";
          $this->Usuario = "vida10_usPeneP";
          $this->Clave = "oW0qud#Dr6oq";
         * this->db = "usuariosena_corazon";
		$this->user = "usuariosena";
		$this->pwd = "p&86XoI/P4Ea";
		$this->host = "localhost";
         */
        // Conectamos al servidor
        $this->BaseDatos = "usuariosena_peneperfecto";
        $this->Servidor = "localhost";
        $this->Usuario = "usuariosena";
        $this->Clave = "p&86XoI/P4Ea";

        $this->Conexion_ID = mysql_connect($this->Servidor, $this->Usuario, $this->Clave);
        if (!$this->Conexion_ID) {
            $this->Error = "Ha fallado la conexion.";
            echo $this->Error;
            return 0;
        }


        //seleccionamos la base de datos


        if (!mysql_select_db($this->BaseDatos, $this->Conexion_ID)) {
            $this->Error = "Imposible abrir " . $this->BaseDatos;
            return 0;
        }
        return $this->Conexion_ID;
    }

    /* Ejecuta un consulta */

    function consulta($sql = "") {
        if ($sql == "") {
            $this->Error = "No ha especificado una consulta SQL";
            return 0;
        }


        //ejecutamos la consulta


        $this->Consulta_ID = mysql_query($sql, $this->Conexion_ID);
        if (!$this->Consulta_ID) {
            $this->Errno = mysql_errno();
            $this->Error = mysql_error();
            print_r($this->Errno);
            print_r($this->Error);
        }
        return $this->Consulta_ID;
    }

    function leerVarios() {
        $j = 0;
        while ($this->ObjetoConsulta2[$j] = @mysql_fetch_row($this->Consulta_ID)) {
            $j++;
        }
    }

    function numcampos() {
        return mysql_num_fields($this->Consulta_ID);
    }

    function numregistros() {
        return @mysql_num_rows($this->Consulta_ID);
    }

    function nombrecampo($numcampo) {
        return mysql_field_name($this->Consulta_ID, $numcampo);
    }

}

?>