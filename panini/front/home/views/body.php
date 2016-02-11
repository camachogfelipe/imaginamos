		<div class="panini"></div>
		<div class="continente"></div>
		<div class="title"></div>
		<div class="ribbon-left"></div>
		<div class="ribbon-right"></div>
		<div class="footer"></div>
		<div class="balon"></div>		
		
		<!-- multistep form -->
		<div class="contenedor-medium contenedor" style="top: -130px;position: relative;">
			<form class="s_form s_form_columns" id="msform" method="post" action="home/send" autocomplete="off">
				<!-- fieldsets -->
				<fieldset>
                        <input required type="text" placeholder="Nombre/Razón Social" name="razon_social">
	                <input required type="text" placeholder="Nit y/o Cédula" name="nit">
	                <input required type="text" placeholder="RUT" name="rut">
	                <input required type="text" placeholder="Dirección" name="direccion">

	                <div class="title-fields">Ciudad</div>

	                <select class="val_select s2-required" name="ciudad">
	                    <option value=""></option>
	                    <option value="bogota">Bogotá</option>
	                    <option value="cali">Cali</option> 
	                </select>
					<div class="clear"></div>
					<input type="button" name="next" class="next action-button" value="Siguiente" />
				</fieldset>

				<fieldset style="height:340px;">
					<input required type="text" placeholder="Teléfonos" name="telefono">
	                <input required type="text" placeholder="Email" name="email">
	                <input required type="text" placeholder="Actividad Comercial" name="actividad_comercial">

	                
	                <input required type="text" placeholder="Marcas o Portafolio" name="marcas_porta">

	                
	                <div class="title-fields">Tipo de Distribución:</div>

	                <div class="checklist" style="top: -7px;position: relative;">
	                    <div class="checklist check-one">
	                        <label class="checkbox inline">
	                            <input type="checkbox" value="" name="mayorista" required>
	                            Mayorista
	                        </label>
	                    </div>
	                    <div class="checklist check-two">
	                        <label class="checkbox inline">
	                            <input type="checkbox" value="" name="distribuidor" required>
	                            Distribuidor
	                        </label>
	                    </div>
	                </div>
	                <br />
	                <div class="title-fields title-up">Puntos de Venta propios:</div>

	                <div class="checklist" style="position: relative;top: -35px;">
	                    <label class="radio inline radio-one">
	                        <input type="radio" value="si" name="puntosdeventa" required>
	                        Si
	                    </label>

	                    <label class="radio inline radio-two">
	                        <input type="radio" value="no" name="puntosdeventa" required>
	                        No
	                    </label>
	                </div>
					<div class="clear"></div>
					<input type="button" style="position: relative;top: -45px;" name="previous" class="previous action-button" value="Anterior" />				
					<input type="button" style="position: relative;top: -45px;" name="next" class="next action-button" value="Siguiente" />
				</fieldset>

				<fieldset>
					
	                <input required type="text" placeholder="Cuantos puntos de venta?" name="puntos_venta">

	                <div class="title-fields">Red Distribución: (Clientes tipo a los que llega)</div>

	                <div class="checklist" style="height:90px;">
	                    <div class="checklist check-red-one">
	                        <label class="checkbox inline">
	                            <input type="checkbox" value="papelerias" name="papelerias" required>
	                            Papelerias
	                        </label>
	                    </div>
	                    <div class="checklist check-red-two">
	                        <label class="checkbox inline">
	                            <input type="checkbox" value="droguerias" name="droguerias" required>
	                            Droguerias
	                        </label>
	                    </div>
	                    <div class="checklist check-red-three">
	                        <label class="checkbox inline">
	                            <input type="checkbox" value="miscelaneas" name="miscelaneas" required>
	                            Miscelaneas
	                        </label>
	                    </div>
	                    <div class="checklist check-red-four">
	                        <label class="checkbox inline">
	                            <input type="checkbox" value="tiendas" name="tiendas" required>
	                            Tiendas
	                        </label>
	                    </div>
	                    <div class="checklist check-red-five">
	                        <label class="checkbox inline">
	                            <input type="checkbox" value="voceadores" name="voceadores" required>
	                            Voceadores
	                        </label>
	                    </div>
	                    <div class="checklist check-red-six">
	                        <label class="checkbox inline">
	                            <input type="checkbox" value="venta informal" name="ventainf" required>
	                            Venta Informal
	                        </label>
	                    </div>
	                </div>

	                <input required type="text" placeholder="Puntos de venta a cubrir" name="puntos_venta_cubrir">

	                <div class="title-fields">Descripción Adicional:</div>

	                <textarea required name="comentarioadicional"></textarea>
					<div class="clear"></div>
					<input type="button" name="previous" class="previous action-button" value="Anterior" />				
					<input type="button" name="next" class="next action-button" value="Siguiente" />
				</fieldset>

				<fieldset>
					
					
	                    
	                
	                <div class="title-fields">Estructura de Ventas:</div>

	                <input required type="text" placeholder="Cuantos vendedores" name="cantidad_vendedores">

	                <input required type="text" placeholder="Zona de Cobertura" name="zona_cobertura">

	                
	                <div class="title-fields">Referencias Comerciales:</div>

	                <input required type="text" placeholder="Nombre" name="nombre_ref">
	                <input required type="text" placeholder="Telefono" name="telefono_ref">
	                <input required type="text" placeholder="Dirección" name="direccion_ref">
	                <input required type="text" placeholder="Cupo de Credito" name="cupo_ref">
					<div class="clear"></div>
					<input type="button" name="previous" class="previous action-button" value="Anterior" />				
					<input type="button" name="next" class="next action-button" value="Siguiente" />
				</fieldset>

				<fieldset>
					<input required type="text" placeholder="Tiempo de operaciones comerciales" name="tiempo_operaciones">                
	                
	                <input required type="text" placeholder="Contacto/Responsable" name="contacto_resp">                
	                <input required type="text" placeholder="Cargo" name="cargo">                

	                
	                <div class="title-fields">Teléfono Contacto/Fijo</div>

	                <input required type="text" placeholder="Fijo" name="fijo">
	                <input required type="text" placeholder="Celular" name="celular">

	                <input required type="text" placeholder="Correo Electronico Contacto" name="correo_contacto">
					<div class="clear"></div>
					<input type="button" name="previous" class="previous action-button" value="Anterior" />
					<input type="button" name="next" class="next action-button" value="Siguiente" />
				</fieldset>

				<fieldset style="height: 320px;">
					
					<div class="title-fields">Ha trabajado antes en el mundial panini:</div>

	                <div class="checklist" style="margin-bottom: 5px;">
	                    <label class="radio inline">
	                        <input type="radio" value="si" name="trabajadoantes" required>
	                        Si
	                    </label>

	                    <label class="radio inline">
	                        <input type="radio" value="no" name="trabajadoantes" required>
	                        No
	                    </label>
	                </div>

	                <input required type="text" placeholder="Con que distribuidor?" name="distribuidor_panini">

	                <div class="title-anio1">Año: 2006</div>
	                <input style="width: 130px;position: relative;left: -70px;" required type="text" placeholder="Numero de sobres" name="sobres_2006">

	                <div class="title-anio2">Año: 2010</div>
	                <input style="position: relative;top: -61px;width: 130px;left: 65px;" required type="text" placeholder="Numero de sobres" name="sobres_2010">
	                
	                <div class="title-fields" style="position:relative;top:-60px;">Cuanto estima vender para el mundial 2014</div>
	                <input required style="position:relative;top:-60px;" type="text" placeholder="Numero de sobres (UNIDADES)" name="cantidad_sobres">
					<div class="clear" style="position:relative;top:-60px;"></div>
					<input style="position:relative;top:-60px;" type="button" name="previous" class="previous action-button" value="Anterior" />
					<input style="position:relative;top:-60px;" type="submit" onclick="document.forms[0].submit();" class="btn-registro" name="submit"  value="Registrar" />
				</fieldset>
			</form>
		</div>
<?php 
if($ok>0){
    ?>
                <script>
                setTimeout(function(){alert('Muchas Gracias! Pronto nos comunicaremos con usted.');},500);
                </script>
   <?php
}
?>