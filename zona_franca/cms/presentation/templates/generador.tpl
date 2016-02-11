{load_presentation_object filename="generador" assign="obj"}

{literal}
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
{/literal}
<div class="container ">
  <div class="row">
    <h1>Admin generator</h1>
    <br/>
    <form action="" method="post">
      <input type="hidden" name="modo" id="modo" value="generador" />
      <div class="row">
        {section name=a loop=$obj->mTablas}
          <label class="btn span3" style="text-align: justify;">
          <input class="check" type="checkbox" name="{$obj->mTablas[a]}" id="{$obj->mTablas[a]}" value="{$obj->mTablas[a]}"/>
          {$obj->mTablas[a]}
        </label>
        {/section}
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
