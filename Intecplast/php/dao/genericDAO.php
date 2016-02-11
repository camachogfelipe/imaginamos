<? ini_set("memory_limit","512M"); ?>
<?php 
/** 
 * 
 * 
 * * @author Carlos Andres Gomez Pradilla (carlosgomez9010@gmail.com | carlos@imaginamos.co) 
 * 
 * 
*/
class genericDAO {

    public $daoConnection;

    function __construct() {
        $this->daoConnection = new DAO;
        $this->daoConnection->conectar();
    }

    function save($object) {
        $columns = "";
        $values = "";
        foreach ($object->getVars() as $key => $value) {
            if ($columns === "") {
                $columns = $key;
                if ($value == "" || $value == NULL)
                    $values = "'0'"; else
                    $values = "'" . mysql_real_escape_string($value) . "'";
            } else {
                $columns = $columns . ',' . $key;
                if ($value == "" || $value == NULL)
                    $values = $values . ',' . "'0'"; else
                    $values = $values . ",'" . mysql_real_escape_string($value) . "'";
            }
        } $sql = "INSERT INTO " . get_class($object) . " (" . $columns . ") VALUES (" . $values . ");";
        $result = mysql_query($sql, $this->daoConnection->Conexion_ID);
        if (!$result) {
            echo 'Ooops (save ' . get_class($object) . '): ' . mysql_error();
            return false;
        } return true;
    }

    function getLastId() {
        return mysql_insert_id($this->daoConnection->Conexion_ID);
    }

    function getById($object) {
        $columns = "";
        foreach ($object->getVars() as $key => $value) {
            if ($columns === "")
                $columns = $key; else
                $columns = $columns . ',' . $key;
        } $sql = "SELECT " . $columns . " FROM " . get_class($object) . " WHERE id = '" . mysql_real_escape_string($object->getId()) . "';";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numRegistros = $this->daoConnection->numregistros();
        if ($numRegistros == 0) {
            return NULL;
        } $i = 0;
        $j = 0;
        foreach ($object->getVars() as $key => $value) {
            $key = 'set' . $key;
            $object->$key(str_replace('\\', '', $this->daoConnection->ObjetoConsulta2[$i][$j]));
            $j++;
        } return $object;
    }

    function gets($object, $parametros = NULL) {
        $className = get_class($object);
        $columns = "";
        foreach ($object->getVars() as $key => $value) {
            if ($columns === "")
                $columns = $key; else
                $columns = $columns . ',' . $key;
        } $sql = "SELECT " . $columns . " FROM " . get_class($object);
        if ($parametros != NULL) {
            $sql = $sql . " WHERE ";
            for ($x = 0; $x < count($parametros); $x++) {
                if ($x != 0)
                    $sql = $sql . ' AND '; $sql = $sql . $parametros[$x];
            }
        } $sql = $sql . ";";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numRegistros = $this->daoConnection->numregistros();
        if ($numRegistros == 0) {
            return NULL;
        } for ($i = 0; $i < $numRegistros; $i++) {
            $object = new $className();
            $j = 0;
            foreach ($object->getVars() as $key => $value) {
                $key = 'set' . ucfirst($key);
                $object->$key(str_replace('\\', '', $this->daoConnection->ObjetoConsulta2[$i][$j]));
                $j++;
            } $objects[$i] = $object;
        } return $objects;
    }

    function dynamic($object, $parametros = NULL) {
        $className = get_class($object);
        $columns = "";
        foreach ($object->getVars() as $key => $value) {
            if ($columns === "")
                $columns = $key; else
                $columns = $columns . ',' . $key;
        } $sql = "SELECT " . $columns . " FROM " . get_class($object);
        if ($parametros != NULL) {
            $sql = $sql . " " . $parametros;
        } $sql = $sql . ";";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numRegistros = $this->daoConnection->numregistros();
        if ($numRegistros == 0) {
            return NULL;
        } for ($i = 0; $i < $numRegistros; $i++) {
            $object = new $className();
            $j = 0;
            foreach ($object->getVars() as $key => $value) {
                $key = 'set' . ucfirst($key);
                $object->$key(str_replace('\\', '', $this->daoConnection->ObjetoConsulta2[$i][$j]));
                $j++;
            } $objects[$i] = $object;
        } return $objects;
    }

    function update($object) {
        $i = 0;
        $sql = "UPDATE " . get_class($object) . " SET ";
        foreach ($object->getVars() as $key => $value) {
            if ($i == 0)
                $i++; if ($i == 1) {
                $i++;
                $sql = $sql . " " . $key . " = '" . mysql_real_escape_string($value) . "'";
            } else
                $sql = $sql . ", " . $key . " = '" . mysql_real_escape_string($value) . "'";
        } $vars = $object->getVars();
        $sql = $sql . " WHERE id = '" . mysql_real_escape_string($vars['id']) . "';";
        $result = mysql_query($sql, $this->daoConnection->Conexion_ID);
        if (!$result) {
            echo 'Ooops (update ' . get_class($object) . '): ' . mysql_error();
            return false;
        } return true;
    }

    function delete($object) {
        $vars = $object->getVars();
        $sql = "DELETE FROM " . get_class($object) . " WHERE id = '" . $vars['id'] . "';";
        $result = mysql_query($sql, $this->daoConnection->Conexion_ID);
        if (!$result) {
            echo 'Ooops (delete ' . get_class($object) . '): ' . mysql_error();
            return false;
        } return true;
    }

    function deleteDynamic($object, $parametros = "WHERE error") {
        $vars = $object->getVars();
        $sql = "DELETE FROM " . get_class($object) . " " . $parametros . " ;";
        $result = mysql_query($sql, $this->daoConnection->Conexion_ID);
        if (!$result) {
            echo 'Ooops (delete ' . get_class($object) . '): ' . mysql_error();
            return false;
        } return true;
    }

    function total($object, $parametros=NULL) {
        $sql = "SELECT COUNT(*) FROM " . get_class($object);
        if ($parametros != NULL) {
            $sql = $sql . " WHERE ";
            for ($x = 0; $x < count($parametros); $x++) {
                if ($x != 0)
                    $sql = $sql . ' AND '; $sql = $sql . $parametros[$x];
            }
        } $sql = $sql . ";";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numRegistros = $this->daoConnection->numregistros();
        if ($numRegistros == 0) {
            return 0;
        } return $this->daoConnection->ObjetoConsulta2[0][0];
    }

    function totalDynamic($object, $parametros=NULL) {
        $sql = "SELECT COUNT(*) FROM " . get_class($object);
        if ($parametros != NULL) {
            $sql = $sql . "  " . $parametros;
        } $sql = $sql . ";";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numRegistros = $this->daoConnection->numregistros();
        if ($numRegistros == 0) {
            return 0;
        } return $this->daoConnection->ObjetoConsulta2[0][0];
    }

    function getBest($object, $limit, $extra) {
        $className = get_class($object);
        $sql = "SELECT b.c FROM ( SELECT COUNT( id ) m , id c FROM " . $className . $extra . "megusta GROUP BY id ORDER BY m DESC LIMIT " . $limit . ")as b";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numRegistros = $this->daoConnection->numregistros();
        if ($numRegistros == 0) {
            return NULL;
        } for ($i = 0; $i < $numRegistros; $i++) {
            $object = new $className();
            $j = 0;
            foreach ($object->getVars() as $key => $value) {
                $key = 'set' . ucfirst($key);
                $object->$key(str_replace('\\', '', $this->daoConnection->ObjetoConsulta2[$i][$j]));
                $j++;
            } $objects[$i] = $object;
        } return $objects;
    }

    function getComented($object, $limit, $extra) {
        $className = get_class($object);
        $sql = "SELECT c.id" . $className . " FROM ( SELECT COUNT( id" . $className . ") w , id" . $className . " FROM " . $className . $extra . "comentario GROUP BY id" . $className . " order by w DESC limit " . $limit . ") AS c";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numRegistros = $this->daoConnection->numregistros();
        if ($numRegistros == 0) {
            return NULL;
        } for ($i = 0; $i < $numRegistros; $i++) {
            $object = new $className();
            $j = 0;
            foreach ($object->getVars() as $key => $value) {
                $key = 'set' . ucfirst($key);
                $object->$key(str_replace('\\', '', $this->daoConnection->ObjetoConsulta2[$i][$j]));
                $j++;
            } $objects[$i] = $object;
        } return $objects;
    }

    function combinada($object, $ambiguo, $parametros = NULL) {
        $className = get_class($object);
        $columns = "";
        foreach ($object->getVars() as $key => $value) {
            if ($columns === "")
                $columns = $key; else
                $columns = $columns . ',' . $key;
        } $sql = "SELECT " . $ambiguo . "." . $columns . " FROM " . get_class($object);
        if ($parametros != NULL) {
            $sql = $sql . " " . $parametros;
        } $sql = $sql . ";";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numRegistros = $this->daoConnection->numregistros();
        if ($numRegistros == 0) {
            return NULL;
        } for ($i = 0; $i < $numRegistros; $i++) {
            $object = new $className();
            $j = 0;
            foreach ($object->getVars() as $key => $value) {
                $key = 'set' . ucfirst($key);
                $object->$key(str_replace('\\', '', $this->daoConnection->ObjetoConsulta2[$i][$j]));
                $j++;
            } $objects[$i] = $object;
        } return $objects;
    }

    function totalCombinada($object, $ambiguo, $parametros=NULL) {
        $sql = "SELECT COUNT(*) FROM " . get_class($object);
        if ($parametros != NULL) {
            $sql = $sql . "  " . $parametros;
        } $sql = $sql . ";";
        $this->daoConnection->consulta($sql);
        $this->daoConnection->leerVarios();
        $numRegistros = $this->daoConnection->numregistros();
        if ($numRegistros == 0) {
            return 0;
        } return $this->daoConnection->ObjetoConsulta2[0][0];
    }

} ?>