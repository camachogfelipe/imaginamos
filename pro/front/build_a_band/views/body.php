
<script type="text/javascript">
    $(document).ready(function(){
        /*$(".elegir-m").colorbox({iframe:true, innerWidth:"1050", innerHeight:"300"});
        $(".invitar-m").colorbox({iframe:true, innerWidth:"500", innerHeight:"300"});
        $(".agregar-m").colorbox({iframe:true, innerWidth:"500", innerHeight:"300"});*/
		
        $('.elegir-m').fancybox();
		
        $(".s1").css({
            'display':"block"	
				
        });
        $(".s2").css({
            'display':"none"	
				
        });
        $(".s3").css({
            'display':"none"	
				
        });
			
        $("#msdrpdd39_msa_0").click(function(){
            $(".s1").css({
                'display':"block"	
					
            });
            $(".s2").css({
                'display':"none"	
					
            });
            $(".s3").css({
                'display':"none"	
					
            });

			
        });
        $("#msdrpdd39_msa_1").click(function(){
            $(".s1").css({
                'display':"block"	
					
            });
            $(".s2").css({
                'display':"none"	
					
            });
            $(".s3").css({
                'display':"none"	
					
            });

			
        });
        $("#msdrpdd39_msa_2").click(function(){
            $(".s1").css({
                'display':"block"	
					
            });
            $(".s2").css({
                'display':"block"	
					
            });
            $(".s3").css({
                'display':"none"	
					
            });

			
        });
        $("#msdrpdd39_msa_3").click(function(){
            $(".s1").css({
                'display':"none"	
					
            });
            $(".s2").css({
                'display':"none"	
					
            });
            $(".s3").css({
                'display':"block"	
					
            });

			
        });
        $("#msdrpdd39_msa_4").click(function(){
            $(".s1").css({
                'display':"none"	
					
            });
            $(".s2").css({
                'display':"none"	
					
            });
            $(".s3").css({
                'display':"block"	
					
            });

			
        });
        
    });
    
</script>
<style>

    .musicos-cont{
        margin: 0 auto;
        width: 960px;
    }
    input[type="checkbox"] + label {
        background: url("images/fondo-check.png") no-repeat scroll 0 0 transparent;
        height: 14px;
        margin-top: -14px;
        padding-left: 26px;
        padding-top: 3px;
    }
    input[type="checkbox"] {
        cursor: pointer;
        left: 0;
        margin-bottom: -10px;
        margin-right: 20px;
        opacity: 0.01;
    }
    .ver-mas{
        margin-top:0;
    }
    .bot-buscar {
        float:right;
        margin-top:30px;
        margin-bottom:50px;
    }
    .ddTitleText{
        background-image:none !important;
    }
    .sep-mus{
        margin-top:20px;
        margin-bottom:20px;
    }
    .bot-aceptar {
        float: right;
        margin-right: 30px;

    }
</style>

<script>
    $(function() {
        function log( message ) {
            $( "<div>" ).text( message ).prependTo( "#log" );
            $( "#log" ).scrollTop( 0 );
        }
 
        $( "#city" ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "http://ws.geonames.org/searchJSON",
                    dataType: "jsonp",
                    data: {
                        featureClass: "P",
                        style: "full",
                        maxRows: 12,
                        name_startsWith: request.term
                    },
                    success: function( data ) {
                        response( $.map( data.geonames, function( item ) {
                            return {
                                label: item.name + (item.adminName1 ? ", " + item.adminName1 : "") + ", " + item.countryName,
                                value: item.name
                            }
                        }));
                    }
                });
            },
            minLength: 2,
            select: function( event, ui ) {
                log( ui.item ?
                    "Selected: " + ui.item.label :
                    "Nothing selected, input was " + this.value);
            },
            open: function() {
                $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
            },
            close: function() {
                $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
            }
        });
		
		
		$( "#city2" ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "http://ws.geonames.org/searchJSON",
                    dataType: "jsonp",
                    data: {
                        featureClass: "P",
                        style: "full",
                        maxRows: 12,
                        name_startsWith: request.term
                    },
                    success: function( data ) {
                        response( $.map( data.geonames, function( item ) {
                            return {
                                label: item.name + (item.adminName1 ? ", " + item.adminName1 : "") + ", " + item.countryName,
                                value: item.name
                            }
                        }));
                    }
                });
            },
            minLength: 2,
            select: function( event, ui ) {
                log( ui.item ?
                    "Selected: " + ui.item.label :
                    "Nothing selected, input was " + this.value);
            },
            open: function() {
                $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
            },
            close: function() {
                $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
            }
        });
		
		
		$( "#city3" ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "http://ws.geonames.org/searchJSON",
                    dataType: "jsonp",
                    data: {
                        featureClass: "P",
                        style: "full",
                        maxRows: 12,
                        name_startsWith: request.term
                    },
                    success: function( data ) {
                        response( $.map( data.geonames, function( item ) {
                            return {
                                label: item.name + (item.adminName1 ? ", " + item.adminName1 : "") + ", " + item.countryName,
                                value: item.name
                            }
                        }));
                    }
                });
            },
            minLength: 2,
            select: function( event, ui ) {
                log( ui.item ?
                    "Selected: " + ui.item.label :
                    "Nothing selected, input was " + this.value);
            },
            open: function() {
                $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
            },
            close: function() {
                $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
            }
        });
    });
</script>


<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txSeccion">
            <div class="encabezado-tit">Build a band</div>
            <div class="encabezado-subtit">Más sonidos, más amplificación</div>
        </div>
    </div>
</div>

<div class="contenido">
    <div class="buildaband-cont">
        <ul class="tabs">
            <li class="t3 <?php echo $seccion == 'crear_banda' ? 'active' : '' ?>"><a href="<?php echo site_url('build-a-band/crear-banda') ?>">Crear Banda</a></li>
            <li style="display:none;" class="t4 <?php echo $seccion == 'crear_concierto' ? 'active' : '' ?>"><a href="<?php echo site_url('build-a-band/crear-concierto') ?>">Crear Concierto</a></li>
            <li class="t5 <?php echo $seccion == 'se_busca' ? 'active' : '' ?>"><a href="<?php echo site_url('mishaka') ?>">Se Busca</a></li>
        </ul>
    </div>

    <div class="clear"></div>
    <div class="tab_container">
        <div class="tab_content"><?php echo $content ?></div>
    </div>

<script defer src="js/build-a-band.js"></script>