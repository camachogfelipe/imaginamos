<?php /* Smarty version 2.6.24, created on 2013-07-09 09:04:43
         compiled from generador.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'generador.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'generador','assign' => 'obj'), $this);?>


<?php echo '
<style>
  .nombreTabla{
    width: 200px;
    float: left;
    border: #F00 solid 1px;
    margin: 5px;
  }
</style>

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
'; ?>

<div class="container ">
  <div class="row">
    <h1>Admin generator</h1>
    <br/>
    <form action="" method="post">
      <input type="hidden" name="modo" id="modo" value="generador" />
      <div class="row">
        <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mTablas) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
          <label class="btn span3" style="text-align: justify;">
          <input class="check" type="checkbox" name="<?php echo $this->_tpl_vars['obj']->mTablas[$this->_sections['a']['index']]; ?>
" id="<?php echo $this->_tpl_vars['obj']->mTablas[$this->_sections['a']['index']]; ?>
" value="<?php echo $this->_tpl_vars['obj']->mTablas[$this->_sections['a']['index']]; ?>
"/>
          <?php echo $this->_tpl_vars['obj']->mTablas[$this->_sections['a']['index']]; ?>

        </label>
        <?php endfor; endif; ?>
      </div>

      <br/>

      <div class="row">
        <input type="button" onclick="changeSelected();" value="Seleccionar todo" class="btn span2" />
      </div>

      <br/><br/>

      <div class="row">
        <label>Opciones</label>
        <label class="btn span2" style="text-align: justify;">
          <input type="checkbox" name="model" id="model" value="model" checked="checked"/>
          Modelo
        </label>
        <label class="btn span2" style="text-align: justify;">
          <input type="checkbox" name="controller" id="controller" value="controller" checked="checked"/>
          Controlador
        </label>
        <label class="btn span2" style="text-align: justify;">
          <input type="checkbox" name="view" id="view" value="view" checked="checked"/>
          Vista
        </label>
        <input type="submit" name="generar" id="generar" value="Generar" class="btn span2" />
      </div>
    </form>
  </div>

  <br/><br/>

  <div class="row">
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="modo" id="modo" value="modulo" />
      <div class="row">
        <label>Seleccione el modulo a cargar</label>
        <input type="file" name="archivo" id="archivo" >
      </div>
      <div class="row">
        <input type="submit" name="cargar" id="cargar" value="Cargar" class="btn span2" />
      </div>
    </form>
  </div>
</div>