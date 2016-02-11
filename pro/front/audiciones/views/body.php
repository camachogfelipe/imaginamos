<script src="js/audiciones.js"></script>
<script>
$(function() {
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
})
</script>
<style>
	.b4{
		color:#333 !important;	
	}
	.t3{
		display:none !important;		
	}
	.t3-active{
		display:none !important;	
	}
	.login{
		display:none;	
	}

</style>




<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txSeccion">
            <div class="encabezado-tit">Audiciones</div>
            <div class="encabezado-subtit">Conectando tu sonido</div>
        </div>
    </div>
</div>

<div class="contenido">
    <div class="audiciones-cont">
        <ul class="tabs">

            <li class="t1 <?php echo $seccion == 'nuevas_audiciones' ? 'active' : null ?>"><a href="<?php echo site_url('audiciones') ?>">Nuevas Audiciones</a></li>
            <li class="t2 <?php echo $seccion == 'crear_audicion' ? 'active' : null ?>"><a href="<?php echo site_url('audiciones/crear/') ?>">Crear</a></li>
        </ul>
    </div>

    <div class="clear"></div>
    <div class="tab_container">
        <?php echo $content ?>
        <div class="clr"></div>
    </div>
</div>

<div class="clear"></div>