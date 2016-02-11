<div class="mensajecerrar" id="mensajecerrarreq" style="z-index: 99; bottom: 50%; background-color: #F5F5F5; display: none;">
    <div class="contemensaje">		
        <p>{{ helper:lang line="lang:requirements:message" }}</p>
        <input type="submit" value="ACEPTAR" class="btnclosereq">
    </div>
</div>
<div class="lateralbar">
    {{ widgets:instance id="7"}}
    {{ widgets:instance id="8"}}

</div>

<div class="cajacompleta">
    <div class="contienecaja mtop">
        <div class="headercajaCompleta lineabottom">{{ helper:lang line="lang:requirements:title" }}</div>

        <div class="contienecollapsible">
            {{ streams:form stream="requirements" namespace="requirements" mode="new" exclude="state_requirements" }}

            <form action="requirements" method="post" accept-charset="utf-8" class="crud_form" id="sendReq" enctype="multipart/form-data">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, quasi, aperiam, quisquam deserunt velit nobis quae iusto aspernatur error veritatis amet mollitia ipsa vitae! Ad itaque earum velit assumenda ipsam.</p>

                {{ fields }}
                <div class="campo" id="div{{ input_slug }}">
                    <label>{{ helper:lang line="{{ input_title }}" }}</label>
                    <small>{{ instructions }}</small>
                    <label style="color: red;" id="error{{ input_slug }}">{{ error }}</label>{{ input }}
                </div>
                {{ /fields }}
                <?php
                if ($logged_in == 1) {
                    echo '<div class="contact-btn">
                             <input type="submit" value="ENVIAR" class="btnstyle mtop" />
                         </div>';
                } else {
                    echo '<div class="contact-btn">
                             <a class="btnstyle mtop log">PASO 2</a>
                         </div>';
                }
                ?>
            </form>

            {{ /streams:form }}

        </div>
    </div>
    <div class="plegable">
        <div class="contienecaja contieneplegable">
            <div class="mitad">
                <div class="headercajaCompleta lineabottom">LOGIN</div>

                <div class="contienecollapsible marginl">

                    <form action="" class="row" id="loginForm">

                        <div class="campo">    
                            <div class="error-req" id="errorLoginEmail"></div>
                            <label>Email</label>
                            <input type="text" id="loginEmail" name="loginEmail" placeholder="Usuraio">
                        </div>
                        <div class="campo">
                            <div class="error-req" id="errorLoginPass"></div>
                            <label>Clave</label>
                            <input type="password" id="loginPass" name="loginPass" placeholder="Clave">
                        </div>

                        <div class="contact-btn">
                            <a class="btnstyle mtop" id="btnLogin">ENTRAR Y ENVIAR</a>
                        </div>

                        <div class="contact-btn">
                            <a id="sendAnonimus" class="btnstyle mtopbtn">ENVIAR ANONIMO</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mitad">
                <div class="headercajaCompleta lineabottom">PRE-REGISTRO</div>

                <div class="contienecollapsible marginl">
                    <form action="" class="row" id="formRegister">
                        <div class="campo">
                            <div class="error-req" id="errorName"></div>
                            <label>Nombre</label>
                            <input type="text" id="name" name="name" placeholder="Nombre">
                        </div>
                        <div class="campo"> 
                            <div class="error-req" id="errorLastname"></div>
                            <label>Apellido</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Apellido">
                        </div>
                        <div class="campo">
                            <div class="error-req" id="errorEmail"></div>
                            <label>Email</label>
                            <input type="text" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="campo">
                            <div class="error-req" id="errorPass"></div>
                            <label>Clave</label>
                            <input type="password" id="pass" name="pass" placeholder="Clave">
                        </div>
                        <div class="campo">
                            <div class="error-req" id="errorPassconfirm"></div>
                            <label  class="dobleLine">Confirmar clave</label>
                            <input type="password" id="passconfirm" name="passconfirm" placeholder="Confirmar clave">
                        </div>

                        <div class="contact-btn">
                            <a class="btnstyle mtop" id="btnRegister">REGISTRAR Y ENVIAR</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{ theme:js file="requirements.js" }}
{{ streams:form_assets }}