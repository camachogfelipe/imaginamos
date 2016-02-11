<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CMS imaginamos V 1.0</title>

    <meta name="description" content="Sistema que permite la gesti&oacute;n de contenidos web">
    <meta name="author" content="imaginamos.com | Brayan Acebo">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Link shortcut icon-->
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url() ?>assets/images/ico-imaginamos.gif"/>

    <!--External Files-->
    <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
    <!--End External Files-->  

    <!-- Estilos del autor -->
    <link href="../assets/css/styles.css" rel="stylesheet" type="text/css" />
    <!-- Fin Estilos del autor -->
    <script src="../../application/libraries/ckeditor_l/ckeditor.js"></script>

  </head>
  <body class="dashborad">
    <div id="alertMessage" class="error"></div>
    <!-- Header -->
    <div id="header">
      <div id="account_info">
        <?php echo $administrator; ?>
      </div>
    </div><!-- End Header -->
    <div id="shadowhead"></div>

    <div id="left_menu">
      <ul id="main_menu" class="main_menu">
        <?php echo $index; ?>
      </ul>
    </div>

    <div id="content">
      <div class="inner">
        <div style="width: auto;height: 30px"></div>  

        <!-- full width -->
        <div class="widget">
          <div class="header"><span><span class="ico gray window"></span>CMS Metalmecanico / Proyectos / Editar</span>
            <br /><?php echo anchor('proyectos/index/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>
          </div><!-- End header -->
          <div class="content">

            <div class="formEl_b">

              <div>

                <div>
                  <div class="imu_info" id="info"></div>

                  <?php echo form_open_multipart('proyectos/update/' . $record[0]->id) ?>
                  <fieldset>
                    <div>
                      <p><label>Título</label></p>
                      <div><input type="text" name="titulo" class="small" value="<?php echo $record[0]->titulo; ?>" maxlength="500" title="500 caracteres máximo" /></div>
                    </div>

                    <br>

                    <div>
                      <p><label>Descripcion<strong style="color: red">*</strong></label></p>
                      <div><textarea name="texto" id="texto" cols="62" rows="8" class="small" maxlength="900" title="900 caracteres máximo" ><?php echo $record[0]->texto; ?></textarea></div>                      
                    </div>

                    <br>                   

                    <div>
                      <p><label>Imagen</label></p>
                      <a href="<?php echo base_url('application/modules/proyectos/assets/images/' . $record[0]->imagen_principal) ?>" target="_blank"><img src="<?php echo base_url('application/modules/proyectos/assets/images/' . $record[0]->imagen_principal) ?>" alt="imaginamos.com" width="500"></a><br/>
                      <input class="file fileupload2" placeholder="Choose File" style="display: inline; color: rgb(102, 102, 102); font-size: 11px; width: 142px;">
                      <div class="filebtn" style="width: 190px; height: 30px; background-image: url(http://repositorio.imaginamos.com/MAM/metalmecanico/alcance/edit/images/addFiles.png); display: inline; position: absolute; margin-left: -168px; background-position: 100% 50%; background-repeat: no-repeat no-repeat;"><input type="file" name="userfile" value="" title="Imagenes permitidas jpg|jpeg|png|gif" class="fileupload2" style="position: absolute; height: 30px; width: 170px; margin-left: 5px; display: inline; cursor: pointer; opacity: 0;"></div><?php //echo form_upload('userfile', '', ' title="Imagenes permitidas jpg|jpeg|png|gif" class="fileupload" style="position: absolute; height: 30px; width: 170px; margin-left: 5px; display: inline; cursor: pointer; opacity: 0; "') ?>
                      <br><small>Tama&ntilde;o recomendado 1350 x 355 px (No debe de pesar mas de 250 KB).</small>

                    </div>

                    <br>

                    <div>
                      <input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
                      <input type="submit" value="Guardar" class="uibutton confirm" />
                    </div>

                  </fieldset>

                  <?php echo form_close() ?>
                </div>

              </div>

            </div>
          </div>	

        </div><!-- End content -->
      </div><!-- End full width -->

      <!-- clear fix -->
      <div class="clear"></div>

      <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

    </div> <!--// End inner -->
  </div> <!--// End content -->

</body> 
<?php echo $functions; ?>
</html>
<script>
  CKEDITOR.replace( "texto" );
</script>