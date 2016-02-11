
<?php include("header.php"); ?>
<?php include("menu.php"); ?>

<div class="container">

  <div class="row contenedor_internas">

    <div class="span12">
      <div class="cont_tit">
        <h1 class="inline">perfil</span></h1>
      </div> 
    </div>
    <div class="clear espacio_en_blanco"></div>
    <div class="conbt_tabsperfil">
      <a class="btn float_right marginleft" id="tab_historial" href="#">Historial de compras</a>
      <a class="btn float_right activo_botonperfil" id="tab_perfil" href="#">Editar perfil</a>
    </div>
    
    <div class="clear espacio_en_blanco"></div>

    <div class="span12 tabs_perfil tab_perfil" id="tab_perfil1">
      <form action="">
        <div class="row">
          <fieldset>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Nombre*:</label>
                </div>
                <div class="span4">
                  <input type="text" placeholder="Nombre">
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Apellidos*:</label>
                </div>
                <div class="span4">
                  <input type="text" placeholder="Apellidos">
                </div>
              </div>
            </div>

            <div class="clear espacio_en_blanco"></div>

            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Género:</label>
                </div>
                <div class="span4">
                  <div class="row-fluid">
                    <div class="span2">
                      <label>F</label>
                    </div>
                    <div class="span2">
                       <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    </div>
                    <div class="span2">
                      <label>M</label>
                    </div>
                    <div class="span2">
                       <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    </div>
                    <div class="span2">
                      <label>Otro</label>
                    </div>
                    <div class="span2">
                       <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Fecha de nacimiento::</label>
                </div>
                <div class="span4">
                  <div class="row-fluid">
                    <div class="span2">
                      <label>día:</label>
                    </div>
                    <div class="span2">
                      <input type="text">
                    </div>
                    <div class="span2">
                      <label>Mes:</label>
                    </div>
                    <div class="span2">
                      <input type="text">             
                    </div>
                    <div class="span2">
                      <label>Año:</label>
                    </div>
                    <div class="span2">
                      <input type="text">             
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clear espacio_en_blanco"></div>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Email*:</label>
                </div>
                <div class="span4">
                  <input type="text" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="span6">
              <div class="row">
                <div class="span2">
                  <label>Profesión:</label>
                </div>
                <div class="span4">
                  <input type="text" placeholder="Profesión">
                </div>
              </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="span4">
              <div class="row">
                <div class="span2">
                  <label>País:</label>
                </div>
                <div class="span2">
                  <input type="text" placeholder="País">
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="row">
                <div class="span2">
                  <label>Ciudad:</label>
                </div>
                <div class="span2">
                  <input type="text" placeholder="Ciudad">
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="row">
                <div class="span2">
                  <label>Teléfono:</label>
                </div>
                <div class="span2">
                  <input type="text" placeholder="Teléfono">
                </div>
              </div>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="span4">
              <div class="row">
                <div class="span2">
                  <label>Contraseña actual:</label>
                </div>
                <div class="span2">
                  <input type="text" placeholder="Contraseña actual">
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="row">
                <div class="span2">
                  <label>Nueva contraseña:</label>
                </div>
                <div class="span2">
                  <input type="text" placeholder="Nueva contraseña">
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="row">
                <div class="span2">
                  <label>Confirmar contraseña:</label>
                </div>
                <div class="span2">
                  <input type="text" placeholder="Confirmar contraseña">
                </div>
              </div>
            </div>
          <div class="clear espacio_en_blanco"></div>
          <fieldset>
            <div class="span12">
              <label>Comprar un plan:</label>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="span168">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Un mes $100.000" class="conttoltip">PLan1:</label>
                </div>
                <div class="span4">
                  <input type="radio" name="optionsRadios2" id="optionsRadios2-1" value="option2-1">
                </div>
              </div>
            </div>
            <div class="span168">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Dos meses $200.000" class="conttoltip">PLan2:</label>
                </div>
                <div class="span4">
                  <input type="radio" name="optionsRadios2" id="optionsRadios2-2" value="option2-2">
                </div>
              </div>
            </div>
            <div class="span168">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Tres meses $300.000" class="conttoltip">PLan3:</label>
                </div>
                <div class="span4">
                  <input type="radio" name="optionsRadios2" id="optionsRadios2-3" value="option2-3">
                </div>
              </div>
            </div>
            <div class="span168">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Cuatro meses $400.000" class="conttoltip">PLan4:</label>
                </div>
                <div class="span4">
                  <input type="radio" name="optionsRadios2" id="optionsRadios2-4" value="option2-4">
                </div>
              </div>
            </div>
            <div class="span168">
              <a href="#" class="btn btn-primary ancho100">Actualizar plan</a>
            </div>
          </fieldset>
          <div class="clear espacio_en_blanco"></div>
          <fieldset>
            <div class="span12">
              <label>Métodos de pago:</label>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="span7 modo_pagos">
              <img src="assets/img/tarjetas/1.png" alt="">
              <img src="assets/img/tarjetas/2.png" alt="">
              <img src="assets/img/tarjetas/3.png" alt="">
              <img src="assets/img/tarjetas/4.png" alt="">
            </div>
            <div class="span3">
              <label title="Estas son las politicas de privacidad" class="conttoltip">Políticas de privacidad</label>
            </div>
            <div class="span2">
              <button class="btn btn-primary ancho100" type="submit">Registrarse</button>
            </div>
          </fieldset>

        </div>
      </form>
    </div>

    <div class="span12 tabs_perfil tab_historial">
      <table class="table table-striped">
          <thead>
            <tr>
              <th>Historial</th>
              <th class="centrar_contenido">Fecha</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</td>
              <td class="centrar_contenido">08/07/2013</td>
            </tr>
            <tr>
              <td>1. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</td>
              <td class="centrar_contenido">08/07/2013</td>
            </tr>
            <tr>
              <td>1. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</td>
              <td class="centrar_contenido">08/07/2013</td>
            </tr>
            <tr>
              <td>1. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</td>
              <td class="centrar_contenido">08/07/2013</td>
            </tr>
            <tr>
              <td>1. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</td>
              <td class="centrar_contenido">08/07/2013</td>
            </tr>
          </tbody>
        </table>
    </div>
    

  </div>
</div>

<div class="clear espacio_en_blancofooter"></div>

<?php include("footer.php"); ?>


