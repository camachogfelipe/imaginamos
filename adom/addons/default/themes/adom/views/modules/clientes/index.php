<div class="content_940 content_home">
    <div class="linea_home">
        <h1 class="title_dest bold">Clientes y Convenios</h1>
    </div>
    <div class="clearfix">
        <div class="content_convenios left">
            {{convenios}}
            <div class="item_convenio">
                <h3 class="bold">{{name}}</h3>
                <div class="clearfix">
                    <div class="texto_convenio left">
                        <div class="main_p">
                            {{description}}    
                        </div>
                    </div>
                    <img src="{{url:site}}files/large/{{images:fullname}}" class="right" width="240" />
                </div>
            </div>
            {{/convenios}}
        </div>
        <div class="content_clientes right">
            <h3 class="bold">Nuestros Clientes</h3>

            <div class="contenido_clientes scroll_pane">
                {{clientes}}
                <div class="item_cliente">
                    <img src="{{url:site}}files/large/{{images:fullname}}" width="128" height="128"/>
                    <h4>{{name}}</h4>
                </div>
                {{/clientes}}
            </div>

        </div>
    </div>
</div>