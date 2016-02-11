<?php echo $template['partials']['header']; ?>
<div class="container">
  <div class="cont_tit">
    <h1 class="inline">RESULTADOS <span>CORTE CONSTITUCIONAL</span></h1>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Lista de resultados</th>
        <th class="centrar_contenido">Descarga</th>
      </tr>
    </thead>
    <tbody>
    	<?php
				if(!empty($demandas)) :
					$x = 1;
					foreach($demandas as $demanda) :
						?>
			<tr>
        <td><?php echo $x . ". ";
					if(isset($demanda['cms_numeroref'])) echo $demanda['cms_numeroref'];
					else echo $demanda['demandas_tutelas_cms_numeroref'];
					/*echo " - ";
					if(isset($demanda['constitucion_cms_texto'])) { echo $demanda['constitucion_cms_texto']; echo "aqui"; }
					elseif(isset($demanda['demandas_tutelas_constitucion_cms_texto'])) echo $demanda['demandas_tutelas_constitucion_cms_texto'];*/
				?></td>
        <td class="centrar_contenido"><a class="color_rojo" href="<?php echo base_url($demanda['link_path']) ?>">Descargar</a></td>
      </tr>
            <?php
					endforeach;
				endif;
      ?>
    </tbody>
  </table>
</div>
