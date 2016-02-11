<div class="content_940 content_home">
    <div class="linea_home">
        <h1 class="title_dest bold">VACANTES</h1>
    </div>
    <div class="clearfix">
        {{vacantes}}
        <div class="item_vacante left">
            <h2>{{title}}</h2>
            <img src="{{url:site}}files/large/{{image}}" width="278" height="232"/>
            <a href="javascript:abrirVacante('{{id}}');" class="btn_vermas">Ver más <span></span></a>
        </div>
        {{/vacantes}}
    </div>

</div>

{{vacantes}}
<div class="popup_vacante{{id}} popup1">
    <div class="bg_popup"></div>
    <div class="content_popup1">
        <a href="javascript:cerrarPopup();" class="btn_cerrar"></a>
        <div class="contenido_popup">
            <h2 class="bold">{{title}}</h2>
            <div class="clearfix">
                <div class="share" style="padding-bottom: 15px">
                    <span class='st_facebook_hcount' displayText='Facebook'></span>
                </div>

                <div class="texto_vacante clearfix">
                    <img class="right" src="{{url:site}}files/large/{{image}}" width="230" height="192"/>
                    <p class="main_p">
                        {{description}}     
                    </p>

                </div>
                <a href="javascript:aplicarVacante('{{title}}');" class="btn_vermas2">Aplicar  <span></span></a>
            </div>
        </div>
    </div>
</div>
{{/vacantes}}
<div class="popup_aplicar popup1">
    <div class="bg_popup"></div>
    <div class="content_popup1">
        <a href="javascript:cerrarPopup();" class="btn_cerrar"></a>
        <div class="contenido_popup">
            <h2 class="bold">Formulario de aplicación</h2>
            <form class="form_vacante" id='formAplicar' action="{{url:site}}vacantes/aplicar" method="post">
                <input type="hidden" id='vacante' name='vacante' value="">
                <div class="clearfix">
                    <input type="text" name='nombre' id='nombre' class="input2  left" data-validate="validate(required) on(keyup focus)" placeholder="Nombre" />
                    <input type="text" name='doc' id='doc' class="input2  right" data-validate="validate(required) on(keyup focus)" placeholder="No. de cédula" />
                </div>
                <div class="clearfix">
                    <input type="text" name='email' id='email' class="input2  left" data-validate="validate(required, email) on(keyup focus)" placeholder="Correo electrónico" />
                    <input type="text" name='tel' id='tel' class="input2  right" data-validate="validate(required) on(keyup focus)" placeholder="Teléfono" />
                </div>
                <div class="clearfix">
                    <input type="text" name='cel' id='cel' class="input2  left" data-validate="validate(required) on(keyup focus)" placeholder="Celular" />
                    <input type="text" name='exp' id='exp' class="input2  right" data-validate="validate(required) on(keyup focus)" placeholder="Años de experiencia" />
                </div>
                <div class="clearfix">
                    <select name='profe' id='profe' class="select1 left" data-validate="validate(required) on(keyup focus)">
                        <option value='0'>Título profesional o técnico</option>
                        {{titulos}}
                        <option>{{name}}</option>
                        {{/titulos}}
                    </select>                   
                </div>                              
                <input type="button" onclick="validaAplicar()" class="submit" value="Enviar" />
            </form>
        </div>
    </div>
</div>





