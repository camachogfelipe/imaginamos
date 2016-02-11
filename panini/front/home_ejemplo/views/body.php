


<div class="bg-home">
<div class="banner"> 

<section class="slider">
        <div id="slider" class="flexslider">
          <ul class="slides grand">
              <?php  foreach ($banner as $info): ?>
              <li>
  	    	    <img src="<?php echo base_url() ?>/uploads/banner/new/<?php echo $info->imagen; ?>" />
                <div class="text-slider">
                  <h2><?php echo $info->titulo; ?></h2>
                  <h1><?php echo $info->titulo2; ?></h1>
                  <h3><?php echo $info->titulo3; ?></h3>
                </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div id="carousel" class="flexslider">
          <ul class="slides miniatura">
            <?php foreach ($destacados as $dest): ?>
                    <li>
                        <img src="<?php echo base_url() ?>/uploads/destacado/new/<?php echo $dest->imagen; ?>" />
                            <div class="titulo-min">
                                <h1><?php echo $dest->titulo; ?></h1>
                                <h2><?php echo $dest->subtitulo; ?></h2>
                            </div>
                    </li>
                    <?php endforeach; ?>
          </ul>
        </div>
      </section>
 
</div>

<div class="text-biev">
  <h2><?php echo $titulo_de_bienvenida ?></h2>
  <h1>BIENVENIDOS <span>AUDIFACT S.A.S</span></h1>
  <p><?php echo $texto_de_bienvenida ?></p>
</div>

<div class="destacados">

 <a href="<?php echo $array[0]['link']; ?>">
  <div class="caja-destacado">
   <div class="text-destacado">
       <h1><?php echo $array[0]['titulo']; ?></h1>
         <h2><?php echo $array[0]['subtitulo']; ?> </h2>
     <p><?php echo $array[0]['texto']; ?></p>
   </div>
   <img src="<?php echo base_url() ?>/uploads/recuadro/new/<?php echo $array[0]['imagen']; ?>">
  </div>
  </a>

  <a href="<?php echo $array[1]['link']; ?>">
  <div class="caja-destacado">
  <img src="<?php echo base_url() ?>/uploads/recuadro/new/<?php echo $array[1]['imagen']; ?>">
    <div class="text-destacado des2">
     <h1><?php echo $array[1]['titulo']; ?></h1>
         <h2><?php echo $array[1]['subtitulo']; ?></h2>
     <p><?php echo $array[1]['texto']; ?></p>
   </div> 
  </div>
  </a>
 
</div>
</div>
<?php 
 if (isset($Erno)) {
        if ($Erno == 1) {
            ?><script> alert('Mensaje envidado exitosamente');</script>
            <?php
        }if ($Erno == 2) {
            ?><script> alert('Estamos presentando problemas técnicos , intenta más tarde');</script>
            <?php
        }
}
?>