<?php

class GeneradorDaoAutomatico {

  public $mSiteUrl;
  public $mTablas = array();
  public $mCampo;

  // Class constructor
  public function __construct() {
    $this->mSiteUrl = Link::Build('');   
  }

  public function init() {
    $this->mCampo = "Tables_in_".DB_DATABASE;
    $mTablasTemp = DbHandler::GetAll( "SHOW TABLES" );
    for( $i=0, $tot=count($mTablasTemp); $i<$tot; $i++ ){
      $this->mTablas[$i] = $mTablasTemp[$i][$this->mCampo];
      if( isset( $_POST[$this->mTablas[$i]] ) ){
        self::generateFile( $this->mTablas[$i] );
      }
    }
  }
  
  // Funcion para generar el modelo basico de los objetos de DB
  function generateFile( $clase="" ){
    $vercion = "Generador DAO vercion 1.1";
    $fp = fopen( 'business/model/Db'.$clase.'.db.php',"w+");
    $fields = array();
    
    // Obtenemos las descripciones de los campos de DB
    $mFieldTemp = DbHandler::GetAll( 'DESCRIBE '.$clase );
    for( $i=0,$tot=count($mFieldTemp); $i<$tot; $i++){
      $fields[] = $mFieldTemp[$i]["Field"];
    }

    $contenido = '<?php
/*
 * @file               : Db'.$clase.'.db.php
 * @brief              : Clase para la interaccion con la tabla '.$clase.'
 * @version            : 3.3
 * @ultima_modificacion: '.date("Y-m-d").'
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : '.$vercion.'
 *
 * @class: Db'.$clase.'
 * @brief: Clase para la interaccion con la tabla '.$clase.'
 */
 
class Db'.$clase.' extends DbDAO {
';
    
    for( $i=0,$tot=count($fields); $i<$tot; $i++){
      if( $fields[$i]=="id" ){
        $contenido .='
  public $'.$fields[$i].' = NULL;';
      }else{
        $contenido .='
  protected $'.$fields[$i].' = NULL;';
      }
    }
  
    for( $i=0,$tot=count($fields); $i<$tot; $i++){
  $contenido .='

  public function set'.$fields[$i].'($mData = NULL) {
    if ($mData === NULL) { $this->'.$fields[$i].' = NULL; }
    $this->'.$fields[$i].' = StripHtml($mData);
  }';
    }
  $contenido .='

}
?>';
    
    fwrite( $fp, $contenido );
    fclose( $fp );
  }

}

$obj = new GeneradorDaoAutomatico();
$obj->init();

?>

<style>
  .nombreTabla{
    width: 200px;
    float: left;
    border: #F00 solid 1px;
    margin: 5px;
  }
</style>

<script src="js/jquery.js"></script>

<script>
  var ban = 0;
  function changeSelected(){
    if( ban == 0 ){
      $(".check").attr("checked", "checked");
        ban = 1;
    }else{
      ban = 0;
      $(".check").removeAttr("checked");
    }
  }
</script>

<form action="" method="post">
  <div style="display: block; width: 100%; float: left;">
    <?php for($i=0,$tot=count($obj->mTablas);$i<$tot;$i++){ ?>
    <label class="nombreTabla">
      <input class="check" type="checkbox" name="<?php echo $obj->mTablas[$i]; ?>" id="<?php echo $obj->mTablas[$i]; ?>" value="<?php echo $obj->mTablas[$i]; ?>"/> 
      <?php echo $obj->mTablas[$i]; ?>
    </label>
    <?php } ?>
  </div>
  
  <div style="display: block; width: 100%; float: left;">
    <br/><br/>
    <a href="javascript:void(0);" onclick="changeSelected()">Seleccionar</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="GENERAR" id="GENERAR" value="GENERAR" />
    <br/><br/><br/>
  </div>
</form>