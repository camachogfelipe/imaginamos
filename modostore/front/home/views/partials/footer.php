		<footer>
      <div class="con-footer">
        <div class="mg-footer cfx">
          <div class="foo-col foo-col-s fl">
          	<h1>Mapa del sitio</h1>
            <ul>
            	<li><a href="<?php echo base_url(); ?>empresas"><span class="foo-bullet"></span><span class="foo-line"></span>Nuestra compañía</a></li>
              <li><a href="<?php echo base_url(); ?>recomendados"><span class="foo-bullet"></span><span class="foo-line"></span>Productos recomendados</a></li>
              <li><a href="<?php echo base_url(); ?>productos"><span class="foo-bullet"></span><span class="foo-line"></span>Nuestros productos</a></li>
              <li><a class="modals-act" href="#modal-news"><span class="foo-bullet"></span><span class="foo-line"></span>Newsletter</a></li>
              <li><a href="<?php echo base_url(); ?>contactenos"><span class="foo-bullet"></span><span class="foo-line"></span>Contáctenos</a></li>
            </ul>
          </div>
          <div class="foo-col foo-col-s fl">
            <h1>Categorías</h1>
            <ul>
             <?php foreach ($categorias as $categotria): ?>  
                <li><a href="<?php echo base_url(); ?>productos/productos_catgoria/<?php echo $categotria->id; ?>"><span class="foo-bullet"></span><span class="foo-line"></span><?php echo ucfirst(strtolower($categotria->titulo)); ?></a></li> 
             <?php endforeach; ?>  
            </ul>
          </div>
          <div class="foo-col foo-col-s fl">
            <h1>Información</h1>
            <ul>
             <?php foreach ($informacion as $info): ?>  
              <li><a href="<?php echo base_url(); ?>info/index/<?php echo $info->id; ?>"><span class="foo-bullet"></span><span class="foo-line"></span><?php echo $info->titulo; ?></a></li>
            <?php endforeach; ?>  
            </ul>
          </div>
          <div class="foo-col foo-col-b fr">
            <h1>Datos de contacto</h1>
            <p>Dirección: <?php echo $contacto->direccion; ?></p>
            <p>Telefóno: <?php echo $contacto->telefono; ?></p>
            <p>Fax: <?php echo $contacto->fax; ?></p>
            <p>E-mail: <a class="tr" href="mailto:#" target="_blank"><?php echo $contacto->email; ?></a></p>
            <p><?php echo $contacto->ciudad; ?></p>
          </div>
        </div>
      </div>
      <div class="con-footer-copy">
      	<div class="mg-footer cfx">
          <div class="footer-redes fl">
          	<p class="fl">Síguenos en: </p>
            <a class="foo-red foo-red-fb tr" href="<?php echo $facebook->link_red; ?>" target="_blank"></a>
            <a class="foo-red foo-red-tw tr" href="<?php echo $twitter->link_red; ?>" target="_blank"></a>
            <a class="foo-red foo-red-in tr" href="<?php echo $instagram->link_red; ?>" target="_blank"></a>
            <a class="foo-red foo-red-wa tr"><span><?php echo $contacto->celular; ?></span></a>
          </div>
        	<div class="footer-ahorranito fr"></div>
          <div class="footer-copy fr"><p>&copy; 2014 <strong>MODO STORE</strong> Todos los Derechos Reservados.</p></div>
        </div>
      </div>
    </footer><a class="up-bt op"></a><div class="foo-fk"></div>
    <div class="con-modals">
    	<div class="info-modal cfx" id="modal-news">
      	<h1>Mantente informado</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <form action="<?php echo base_url("contactenos/newsletter"); ?>" id="newsletter" class="grl-form cfx" method="post">
          <div class="grl-col-b">
            <input name="nombre" class="tr validate[required]" placeholder="Nombre" type="text">
            <input name="email" class="tr validate[required, custom[email]]" placeholder="Correo electrónico" type="text">
            <div class="src-select tr">
              <select name="marca" class="validate[required]">
                <option value="">Marca de vehículo</option>
                <?php foreach ($marcas as $marca): ?>
                <option value="<?php echo strtoupper($marca->nombre); ?>"> <?php echo strtoupper($marca->nombre); ?></option>
                <?php endforeach; ?>
              </select>
          	</div>
          </div>
          <div class="grl-col-c">
          	<input name="autoriza" class="validate[required]" type="checkbox" id="check-ok" name="r-group">
          	<label for="check-ok">Autorizo el envío de información a mi correo electrónico.</label>
					</div>
          <div class="con-grl-bts">
            <input class="grl-submit fr tr" type="submit" id="newsletter_btn" value="ENVIAR">
          </div>
        </form>
      </div>
    </div>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.plugs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/actions.js"></script>
    <script type="text/javascript">
  $(document).ready(function(){
      if($('#step-1').length){
       $('#step-1').change(function(){
          var this_data = $(this);
          $.ajax({
                 url:(this_data.data('url')+this_data.val()),
                 success:function(html_data){
                    if(parseInt(html_data) != 0){ 
                       $('#step-2').prop("readonly",false);
                       $('#step-2').prop("disabled",false);
                       $('#step-2').html(html_data);
                    }
                 }
             });
       });
   }
    
  
      if($('#step-2').length){
       $('#step-2').change(function (){
          var this_data = $(this);
          $.ajax({
                 url:(this_data.data('url')+this_data.val()),
                 success:function(html_data){
                    if(parseInt(html_data) != 0){ 
                       $('#step-3').prop("readonly",false);
                       $('#step-3').prop("disabled",false);
                       $('#step-3').html(html_data);
                    }
                 }
             });
       });
   }
    
  
      if($('#step-3').length){
       $('#step-3').change(function (){
           var this_data = $(this);
          $.ajax({
                 url:(this_data.data('url')+this_data.val()),
                 success:function(html_data){
                    if(parseInt(html_data) != 0){ 
                       $('#step-4').prop("readonly",false);
                       $('#step-4').prop("disabled",false);
                       $('#step-4').html(html_data);
                    }
                 }
             });
       });
   }
  
      if($('#step-4').length){
       $('#step-4').change(function (){
           var this_data = $(this);
          $.ajax({
                 url:this_data.data('url'),
                 data:'v='+this_data.val(),
                 success:function(html_data){
                    if(parseInt(html_data) != 0){ 
                       $('#step-5').prop("readonly",false);
                       $('#step-5').prop("disabled",false);
                       $('#step-5').html(html_data);
                    }
                 }
             });
       });
   }
   
     if($('#destino').length){
       $('#destino').change(function(){
          var this_data = $(this);
          $.ajax({
                 url:(this_data.data('url')+this_data.val()),
                 success:function(html_data){
                    $('#valor_destino').html('$'+html_data);
                    var value = $('#total').data('valor');
                    value = value.replace(",", "");
                    value = value.replace(",", "");
                    value = value.replace(",", "");
         
                    if(parseFloat(value)!=0){
                      $('#total').html('$'+( parseFloat(value)+parseFloat(html_data))); 
                    }else{
                      $('#total').html('$'+html_data);   
                    }
                 }
             });
       });
   }
    $('.add_to_cart').click(function(e) {
        var this_data = $(this);
        $.ajax({
            type: "POST",
            url: this_data.data('url'),
            data: this_data.data('datos'),
            dataType: 'json',
            success: function(js) {
                 if(js.ok){
                     alert('Producto Agregado con exíto...!');
                     $('#items-carro').html(js.np);
                 }else{
                     $('#items-carro').html('0');
                     alert('Error...!, El producto no pudo se agregado');
                 }
            }
        });
        return false; 
    });
       
    
   
   
   
   });
        
  </script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ahorranito.js"></script>
    
    
    <script type="text/javascript">
			<!-- Yodial D0FEB8E7C671ED75BF75F2B7F5B9EE8E 
				document.write('<div id="D0FEB8E7C671ED75BF75F2B7F5B9EE8E"></div>');
				function funcD0FEB8E7C671ED75BF75F2B7F5B9EE8E(){	
				idYodi = "D0FEB8E7C671ED75BF75F2B7F5B9EE8E";		
				var sy = document.createElement('script');sy.async = true;
				sy.type = "text/javascript"; 		
				sy.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'service.yodial.co/services/?src=524';
				document.getElementById(idYodi).appendChild(sy);
				}         
			//-->
			window.onload = function(){setTimeout(funcD0FEB8E7C671ED75BF75F2B7F5B9EE8E, 0);}
		</script>

	</body>
</html>