{load_presentation_object filename="seg_empresa" assign="obj"}

{include file="buscador-interna.tpl"}

<!-- buscador_internas -->
<div class="clear espacio_en_blanco"></div>
<div class="contenedor_internas contenedor_internasbgcompleto">
  <div class="container cont_contenidos">
    <div class="cont_titulos-dv2 inline">
      <h1 class="inline">Formulario <span>Seguimiento</span></h1>
      <div class="clear"></div>
      <h2 class="inline">Usuarios</h2>
    </div>
    <div class="clear espacio_en_blanco"></div>
    <div class="cont_grisancho620 centrado">
      <div class="cont_cont_grisancho620">
        <div class="row-fluid form_fluid">
          <div class="span12">
            <form name="seg_empresa" id="seg_empresa" method="post">
              <input type="hidden" name="send" id="send" value="enviar" />
              <div class="row-fluid cont_formfluid">
                <fieldset class="pasos_formulario" id="info1">
                  <legend class="tit_formulario">
                    
                  </legend>
                  <div class="clear espacio_en_blanco"></div>
                  <div class="span8">
                    <p>¿Consiguió empleado para su oferta?</p>
                  </div>
                  <div class="span2 ">
                    <p>
                      <input type="radio" name="con_empl" value="si" id="con_empl_a" {*class="cform"*}>
                      <label for="con_empl_a" class="lblr">Si</label>
                    </p>
                  </div>
                  <div class="span2 ">
                    <p>
                      <input type="radio" name="con_empl" value="no" id="con_empl_b" {*class="cform"*}>
                      <label for="con_empl_b" class="lblr">No</label>
                    </p>
                  </div>
                  
                  <div id="if_si" style="display: none;" >
                    <div class="clear espacio_en_blanco"></div>
                    <div class="span8">
                      <p>¿El empleado que consiguió fue a través de Empleo en Marcha?</p>
                    </div>
                    <div class="span2">
                      <input type="radio" name="trav_emar" value="si" id="trav_emar_a" {*class="cform"*}>
                      <label for="trav_emar_a" class="label_radio">Si</label>
                    </div>
                    <div class="span2">
                      <input type="radio" name="trav_emar" value="" id="trav_emar_b" {*class="cform"*}>
                      <label for="trav_emar_b" class="label_radio">No</label>
                    </div>

                    <div id="if_si3" style="display: none;" >
                      <div class="clear espacio_en_blanco"></div>
                      <div class="span8">
                        <label>Cuantos empleados consiguierón empleo?</label>
                      </div>
                      <div class="span4">
                        <select class="selectdd" name="cali_exp" id="cal_exp" style="width:100%;">
                          <option value=""></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="99">99</option>
                        </select>
                      </div>
                      <div id="cedulas" style="" >
                        <div class="clear espacio_en_blanco"></div>
                        <div class="span8">
                          <label>Cédula de los empleados contratados</label>
                        </div>
                        <div class="span4">
                          <input type="text" name="" id="" placeholder="" value="">
                        </div>
                      </div>
                    </div>

                    <div id="if_si2" style="display: none;" >
                      <div class="clear espacio_en_blanco"></div>
                      <div class="span8">
                        <label>Califique su experiencia de contratación a través de Empleo en Marcha</label>
                      </div>
                      <div class="span4">
                        <select class="selectdd" name="cali_exp" id="cal_exp" style="width:100%;">
                          <option value=""></option>
                          <option value="Muy satisfecho">Muy satisfecho</option>
                          <option value="Satisfecho">Satisfecho</option>
                          <option value="poco Satisfecho">poco Satisfecho</option>
                          <option value="En desacuerdo">En desacuerdo</option>
                        </select>
                      </div>
                      
                      <div class="clear espacio_en_blanco"></div>
                      <div class="span8">
                        <p>En términos de tiempo ¿La obtención de empleado se ajustó en los términos esperados por la empresa?</p>
                      </div>
                      <div class="span2">
                        <input type="radio" name="tiem_esp" value="si" id="tiem_esp_a" class="cform">
                        <label for="tiem_esp_a" class="label_radio">Si</label>
                      </div>
                      <div class="span2">
                        <input type="radio" name="tiem_esp" value="" id="tiem_esp_b" class="cform">
                        <label for="tiem_esp_b" class="label_radio">No</label>
                      </div>
                    </div>
                    
                    <div id="if_no2" style="display: none;">
                      
                      <div class="clear espacio_en_blanco"></div>
                      <div class="span8">
                        <label>¿Cómo consiguió el empleado?</label>
                      </div>
                      <div class="span4">
                        <select class="selectdd" name="como_emp" id="como_emp" style="width:100%;">
                          <option value=""></option>
                          <option value="Empleado Interno de la empresa ocupó el cargo">Empleado Interno de la empresa ocupó el cargo</option>
                          <option value="Por medio de un proceso de Selección presencial">Por medio de un proceso de Selección presencial</option>
                        </select>
                      </div>
                      
                      <div class="clear espacio_en_blanco"></div>
                      <div class="span8">
                        <p>¿Dentro del proceso le fue de utilidad a la empresa el servicio otorgado por Empleo en Marcha?</p>
                      </div>
                      <div class="span2">
                        <input type="radio" name="util_emar" value="si" id="util_emar_a" class="cform">
                        <label for="util_emar_a" class="label_radio">Si</label>
                      </div>
                      <div class="span2">
                        <input type="radio" name="util_emar" value="" id="util_emar_b" class="cform">
                        <label for="util_emar_b" class="label_radio">No</label>
                      </div>
                      
                    </div>

                  </div>
                  
                  <div id="if_no" style="display: none;">
                    
                    <div class="clear espacio_en_blanco"></div>
                    <div class="span8">
                      <label>¿Por qué está eliminando su oferta?</label>
                    </div>
                    <div class="span4">
                      <select class="selectdd" name="elim_ofe" id="elim_ofe" style="width:100%;">
                        <option value=""></option>
                        <option value="Ya no necesita un empleado">Ya no necesita un empleado</option>
                        <option value="El cargo fue eliminado">El cargo fue eliminado</option>
                        <option value="No encontró personal que se acoplara a sus necesidades">No encontró personal que se acoplara a sus necesidades</option>
                      </select>
                    </div>
                    
                    <div class="clear espacio_en_blanco"></div>
                    <div class="span8">
                      <p>¿Dentro del proceso le fue de utilidad a la empresa el servicio otorgado por Empleo en Marcha?</p>
                    </div>
                    <div class="span2">
                      <input type="radio" name="util_emar2" value="si" id="util_emar2_a" class="cform">
                      <label for="util_emar2_a" class="label_radio">Si</label>
                    </div>
                    <div class="span2">
                      <input type="radio" name="util_emar2" value="" id="util_emar2_b" class="cform">
                      <label for="util_emar2_b" class="label_radio">No</label>
                    </div>
                    
                  </div>

                  <div class="clear espacio_en_blanco"></div>
                    <div class="span8">
                      <label>Ingrese el resultado de su experiencia con el portal de Empleo en Marcha</label>
                    </div>
                    <div class="span4">
                      <textarea name="resu_exp" id="resu_exp"></textarea>
                    </div>
                  </div>
                  
                </fieldset>
                <fieldset>
                  <div class="span8 marcaagua" style=""> </div>
                  <div class="span4">
                    <div class="clear espacio_en_blanco"></div>
                    <input class="bt_enviar" type="submit" value="Enviar">
                  </div>
                </fieldset>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- contenedor_internas -->
