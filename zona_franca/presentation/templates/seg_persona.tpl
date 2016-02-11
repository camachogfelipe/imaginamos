{load_presentation_object filename="seg_personal" assign="obj"}

{include file="buscador-interna.tpl"}

<!-- buscador_internas -->
<div class="clear espacio_en_blanco"></div>
<div class="contenedor_internas contenedor_internasbgcompleto">
  <div class="container cont_contenidos">
    <div class="cont_titulos inline">
      <h1 class="inline">Formulario <span>Seguimiento</span></h1>
      <div class="clear"></div>
      <h2 class="inline">Usuarios</h2>
    </div>
    <div class="clear espacio_en_blanco"></div>
    <div class="cont_grisancho620 centrado">
      <div class="cont_cont_grisancho620">
        <div class="row-fluid form_fluid">
          <div class="span12">
            <form name="seg_persona" id="seg_persona" method="post">
              <input type="hidden" name="send" id="send" value="enviar" />
              <div class="row-fluid cont_formfluid">
                <fieldset class="pasos_formulario" id="info1">
                  <legend class="tit_formulario">
                    <strong>¿Dónde has estado?</strong>
                    Hemos visto que no has vuelto a entrar a Empleo en Marcha y queremos saber de ti
                  </legend>
                  <div class="clear espacio_en_blanco"></div>
                  <div class="span8">
                    <p>¿Ya conseguiste Trabajo?</p>
                  </div>
                  <div class="span2 ">
                    <p>
                      <input type="radio" name="con_trab" value="si" id="con_trab_a" class="cform">
                      <label for="con_trab_a" class="lblr">Si</label>
                    </p>
                  </div>
                  <div class="span2 ">
                    <p>
                      <input type="radio" name="con_trab" value="no" id="con_trab_b" class="cform">
                      <label for="con_trab_b" class="lblr">No</label>
                    </p>
                  </div>
                  <div class="clear espacio_en_blanco"></div>
                  <div class="span8">
                    <p>¿Sigues interesado en conseguir trabajo?</p>
                  </div>
                  <div class="span2">
                    <input type="radio" name="int_trab" value="si" id="int_trab_a" class="cform">
                    <label for="int_trab_a" class="label_radio">Si</label>
                  </div>
                  <div class="span2">
                    <input type="radio" name="int_trab" value="" id="int_trab_b" class="cform">
                    <label for="int_trab_b" class="label_radio">No</label>
                  </div>
                  <div class="clear espacio_en_blanco"></div>
                  <div class="span8">
                    <label>Califique su experiencia de búsqueda de empleo a través de Empleo en Marcha</label>
                  </div>
                  <div class="span4">
                    <select class="selectdd" name="cal_exp" id="cal_exp" style="width:100%;">
                      <option value="Muy satisfecho">Muy satisfecho</option>
                      <option value="Satisfecho">Satisfecho</option>
                      <option value="Poco Satisfecho">Poco Satisfecho</option>
                      <option value="En desacuerdo">En desacuerdo</option>
                    </select>
                  </div>
                  <div class="clear espacio_en_blanco"></div>
                  <div class="span8">
                    <p>¿El empleo que consiguió lo hizo a través de Empleo en Marcha?</p>
                  </div>
                  <div class="span2">
                    <input type="radio" name="atra_emp" value="" id="atra_emp_a" {*class="cform"*}>
                    <label for="atra_emp_a" class="label_radio">Si</label>
                  </div>
                  <div class="span2">
                    <input type="radio" name="atra_emp" value="" id="atra_emp_b" {*class="cform"*}>
                    <label for="atra_emp_b" class="label_radio">No</label>
                  </div>
                  
                  <div id="if_si" style="display: none;" >
                    <div class="clear espacio_en_blanco"></div>
                    <div class="span8">
                      <label>¿Cómo consiguió el trabajo que tiene actualmente?</label>
                    </div>
                    <div class="span4">
                      <select class="selectdd" name="como_tra" id="como_tra" style="width:100%;">
                        <option value="Otro portal de empleo">Otro portal de empleo</option>
                        <option value="A través de redes sociales">A través de redes sociales</option>
                        <option value="Otros  medios de comunicación">Otros  medios de comunicación</option>
                        <option value="Directa de la empresa">Directa de la empresa</option>
                        <option value="Familiar o amigo">Familiar o amigo</option>
                        <option value="Otro">Otro</option>
                      </select>
                    </div>
                  </div>
                  
                  <div id="if_no" style="display: none;">
                    <div class="clear espacio_en_blanco"></div>
                    <div class="span8">
                      <label>¿Cuánto tiempo se demoró consiguiendo trabajo a través del portal?</label>
                    </div>
                    <div class="span4">
                      <select class="selectdd" name="demo_tra" id="demo_tra" style="width:100%;">
                        <option value="Menos de una semana">Menos de una semana</option>
                        <option value="Entre una y dos semanas">Entre una y dos semanas</option>
                        <option value="Entre dos y tres semanas">Entre dos y tres semanas</option>
                        <option value="Entre tres  semanas y un mes">Entre tres  semanas y un mes</option>
                        <option value="Entre un mes y dos meses">Entre un mes y dos meses</option>
                        <option value="Más de dos meses">Más de dos meses</option>
                      </select>
                    </div>
                    <div class="clear espacio_en_blanco"></div>
                    <div class="span8">
                      <label>Califique su experiencia de búsqueda de empleo a través de Empleo en Marcha</label>
                    </div>
                    <div class="span4">
                      <select class="select_dd" name="expe_emp" id="expe_emp" style="width:100%;">
                        <option value="Muy satisfecho">Muy satisfecho</option>
                        <option value="Satisfecho">Satisfecho</option>
                        <option value="Poco Satisfecho">Poco Satisfecho</option>
                        <option value="En desacuerdo">En desacuerdo</option>
                      </select>
                    </div>
                    <div class="clear espacio_en_blanco"></div>
                    <div class="span8">
                      <p>¿Recomendaría el Portal de Empleo en Marcha para la obtención de empleo?</p>
                    </div>
                    <div class="span2">
                      <input type="radio" name="reco_emp" value="si" id="reco_emp_a" class="cform">
                      <label for="reco_emp_a" class="label_radio">Si</label>
                    </div>
                    <div class="span2">
                      <input type="radio" name="reco_emp" value="no" id="reco_emp_b" class="cform">
                      <label for="reco_emp_b" class="label_radio">No</label>
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
