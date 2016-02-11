<?
session_start();

//include "../security/secure.php";
include "../core/class/db.class.php";;
//include "../class/plGeneral.fnc.php";
//include "../class/PhpThumbFactory.class.php";
//include "../class/ClassFile.class.php";


class metodos{

public function insertar($tabla,$var,$veri,$size,$img,$tipo,$imtm){
    /*
    Es la funcion que ingresa o inserta un registro
    */
    
    //Creamos el nuevo objeto "Database"
    //$db = new Database();
    //Conectamos
    //$db->connect();

    if ($veri!='no'){//Si necesita algun tipo de verificacion
	//BUSCA LOS DATOS DE LA TABLA
			$sql_ver="SELECT * FROM ".$tabla." WHERE ".$veri." LIKE '%".trim($var[$veri])."%'";
			//echo $sql_ver;
    }else{
	$nv=0;	
    }
    if ($nv==0){//SINO NECESITA VIRIFICACION

        $i=1;
        //empieza a crear la sentencia sql para insertar un registro
        $sql="INSERT INTO ".$tabla." (";
        //recorre el arreglo de los indices a insertar
         foreach($var as $key => $value){
                if ($key=='id' ){
                   $sql.="";
                }else{
                   $sql.=$key.", ";
                }
	}//fin del foreach
//cuenta la cantidad de caracteres
	$con=strlen($sql);
	$con=$con-2;
//le quita la , restante
	$sql=substr($sql,0,$con);
        $sql.=") values (";
//recorre el arreglo de los valores a insertar
        foreach($var as $key => $value){
            if ($key=='id'){
                
            }elseif ($key=='imagen'){
		 
            }else{
                $sql.="'".$value."', ";
            }
         }//fin del foreach
        $con=strlen($sql);
        $con=$con-2;
        $sql=substr($sql,0,$con);
//Acaba de hacer la sentencia del sql 
	$sql.=")";
        $db->doQuery($sql, 1);
	echo $sql;
//genera la instaciaa de la base de datos
	//$db_i = DataBase::getInstance();
//ejecuta la base de datos
	//$db_i->setQuery($sql);
//trae la cantidad de filas que afecto
	//$na=$db_i->afecc_rows();  
        if ($na>=1){
                echo "<div id='dialog-modal' title='Registro'>
                    <p>Se Registro Exitosamente </p>
                    </div>";
        }else{
                        echo "<div id='dialog-modal' title='Registro'>
                        <p>No se pudo registrar por favor vuleva a intentarlo</p>
                        </div>";
        }
}else{
        echo "<div id='dialog-modal' title='Registro'>El ".$veri." ya existe</div>";
}

}//fun de la funcione insertar


public function modificar($tabla,$var,$veri,$size,$img,$tipo,$imtm){
/*
Es la funcion que modifica un registro
*/
    $i=1;
//Comienza a crear el sql
     $sql="UPDATE ".$tabla." SET ";
//recorre el arreglo de los datos a modificar
     foreach($var as $key => $value){
	if ($key!='id' and !empty($value)){
            $sql.=$key."='".$value."', ";
	}	
	if ($key=='imagen'){
		
	}
     }//fin del ciclo
    $con=strlen($sql);
    $con=$con-2;
//quita la coma sobrante
    $sql=substr($sql,0,$con);
    $sql.=" WHERE id='".$var['id']."'";

				//echo $sql;
//genera la instacia de la base de datos		
	//$db_i = DataBase::getInstance();
//ejecuta la base de datos
	//			$db_i->setQuery($sql);
//trae el numero de filas que afecto
	//			$na=$db_i->afecc_rows();  
if ($na>=1){
        echo "<div id='dialog-modal' title='Registro'>
       <p>Se Registro Exitosamente </p>
       </div>";
}else{
    echo "<div id='dialog-modal' title='Registro'>
<p>No se pudo modificar por favor vuleva a intentarlo</p>
</div>";

}
}//fun de la funcin 2

}
?>

