<!---------------
@autor: Brayan Acebo
brayan.acebo@imaginamos.co
Agencia: imaginamos.com
Bogotá, Colombia, 2012
----------------->


<!--------------- Menu para usuarios de rol admin -->
<?php if (TRUE === $menu_superadmin) : ?>
    <li class = "limenu">
        <a href = "<?php echo base_url() ?>cms">
            <img src = "<?php echo back_asset('img/icons/home.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Dashboard
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('admin/administradores') ?>">
            <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Administradores
            </b>
        </a>
    </li>
<?php endif; ?>
     <li class = "limenu">
        <a href = "#">
            <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Home
            </b>
        </a>
         <ul style="width: 250px;">
             <li >
                  <a href = "<?php echo cms_url('home/info_contacto') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                       <span class = "ico gray shadow" ></span><b>Contacto
                        </b>
                 </a>
             </li>
               <li >
                  <a href = "<?php echo cms_url('home/menu_roll') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                       <span class = "ico gray shadow" ></span><b>Roll Over Menu 
                        </b>
                 </a>
             </li>
               <li >
                  <a href = "<?php echo cms_url('home/redes_sociales') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                       <span class = "ico gray shadow" ></span><b>Redes Sociales
                        </b>
                 </a>
             </li>
         </ul>
    </li>
    <li class = "limenu">
    		<a href = "#">
          <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
          <span class = "ico gray shadow" ></span><b>Entérate
          </b>
        </a>
        <ul style="width: 250px;">
             <li >
                  <a href = "<?php echo cms_url('enterate/enterate') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                      <span class = "ico gray shadow" ></span><b>Entérate
                      </b>
                  </a>
             </li>
             <li >
                  <a href = "<?php echo cms_url('enterate/propietarios') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                       <span class = "ico gray shadow" ></span><b>Propietarios 
                        </b>
                 </a>
             </li>
         </ul>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('equipo/trabajadores') ?>">
            <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Equipo de Trabajo
            </b>
        </a>
    </li>
     <li class = "limenu">
        <a href = "#">
            <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Trabaja Nosotros
            </b>
        </a>
         <ul style="width: 250px;">
             <li>
                  <a href = "<?php echo cms_url('trabaja_nosotros/inicio') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                       <span class = "ico gray shadow" ></span><b>Imágen Sección
                        </b>
                 </a>
             </li>
              <li>
                  <a href = "<?php echo cms_url('trabaja_nosotros/vacantes') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                       <span class = "ico gray shadow" ></span><b>Vacantes
                        </b>
                 </a>
             </li>
         </ul>
    </li>
    <li class = "limenu">
        <a href = "#">
            <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Líneas
            </b>
        </a>
         <ul style="width: 250px;">
             <li>
                  <a href = "<?php echo cms_url('lineas/lineas') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                       <span class = "ico gray shadow" ></span><b>Líneas
                        </b>
                 </a>
             </li>
             <li>
                  <a href = "<?php echo cms_url('lineas/categorias') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                       <span class = "ico gray shadow" ></span><b>Categorías
                        </b>
                 </a>
             </li>
             <li>
                  <a href = "<?php echo cms_url('lineas/sub_categorias') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                       <span class = "ico gray shadow" ></span><b>Sub Categorías
                        </b>
                 </a>
             </li>
             <li>
                  <a href = "<?php echo cms_url('lineas/productos') ?>">
                      <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
                       <span class = "ico gray shadow" ></span><b>Productos
                        </b>
                 </a>
             </li>
             
         </ul>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('documentos/documentos') ?>">
            <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Documentos
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('servicios/servicio_cortes') ?>">
            <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Servicio a su medida
            </b>
        </a>
    </li>
<?php if (FALSE === $menu_superadmin) : ?>
    <!-- Aca el menu del usuario -->
<?php endif; ?>
