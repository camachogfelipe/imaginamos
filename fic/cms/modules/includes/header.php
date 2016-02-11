 <div class="navbar">
  <div class="navbar-inner">
    <a class="brand" >Administrador</a>
    <ul class="nav">
      <li <?php if ($_GET['id']=='1'){ ?> class="active"<?php }?>><a href="categorias.php?id=1">Categorias</a></li>
      <li <?php if ($_GET['id']=='2'){ ?> class="active"<?php }?>><a href="productos.php?id=2">Productos</a></li>
      <li><a href="<?php echo $logoutAction ?>">Salir</a></li>
    </ul>
  </div>
</div>