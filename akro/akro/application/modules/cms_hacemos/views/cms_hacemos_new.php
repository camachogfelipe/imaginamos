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
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
    <!-- Fin Estilos del autor -->
    <script src="<?php echo base_url('application/libraries/ckeditor/ckeditor.js') ?>"></script>

    <style>
      small{color: #999;display: block;font-size: 11px;font-weight: normal;line-height: 13px;margin-top: 3px;text-transform: none;}
    </style>

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
          <div class="header"><span><span class="ico gray window"></span>CMS AKRO / Que Hacemos / Nuevo</span>
            <br /><?php echo anchor('cms_hacemos/index/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>
          </div><!-- End header -->
          <div class="content">

            <div class="formEl_b">

              <div>

                <div>
                  <div class="imu_info" id="info"></div>

                  <?php echo form_open_multipart('cms_hacemos/new_record/') ?>
                  <fieldset>                    
                    
                    <div>
                      <p><label>Descripcion Corta Español<strong style="color: red">*</strong></label></p>
                      <div><textarea name="descripcion_corta_spa" id="descripcion_corta_spa" cols="60" rows="6" class="small" ><?php echo set_value('descripcion_corta_spa'); ?></textarea></div>
                      <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="descripcion_corta_spa"></span></span>
                      <script type="text/javascript">
                        $("#descripcion_corta_spa").limit("150",".descripcion_corta_spa");
                      </script>
                    </div>

                    <br>
                    
                    <div>
                      <p><label>Descripcion Corta Ingles<strong style="color: red">*</strong></label></p>
                      <div><textarea name="descripcion_corta_eng" id="descripcion_corta_eng" cols="60" rows="6" class="small" ><?php echo set_value('descripcion_corta_eng'); ?></textarea></div>
                      <span class="f_help"> L&iacute;mite de car&aacute;cteres: <span class="descripcion_corta_eng"></span></span>
                      <script type="text/javascript">
                        $("#descripcion_corta_eng").limit("150",".descripcion_corta_eng");
                      </script>
                    </div>

                    <br>
                    
                    <div>
                      <p><label>Descripcion Detallada Español</label></p>
                      <div><textarea name="descripcion_detallada_spa" id="descripcion_detallada_spa" cols="62" rows="5" class="small" ><?php echo set_value('descripcion_detallada_spa'); ?></textarea></div>
                    </div>

                    <br>
                    
                    <div>
                      <p><label>Descripcion Detallada Ingles</label></p>
                      <div><textarea name="descripcion_detallada_eng" id="descripcion_detallada_eng" cols="62" rows="5" class="small" ><?php echo set_value('descripcion_detallada_eng'); ?></textarea></div>
                    </div>

                    <br>

                    <div>
                      <p><label>Imagen <strong style="color: red">*</strong></label></p>
                      <?php echo form_upload('userfile', '', ' title="Imagenes permitidas jpg|jpeg|png|gif" class="fileupload" style="position: absolute; height: 30px; width: 170px; margin-left: 5px; display: inline; cursor: pointer; opacity: 0; "') ?>
                      <br><small>Tama&ntilde;o recomendado 1350 x 355 px (No debe de pesar mas de 250 KB).</small>
                    </div>

                    <br>

                    <div>
                      <input type="submit" value="Guardar" class="uibutton confirm" />
                    </div>

                  </fieldset>
                  <br>
                  <?php echo form_close() ?>
                </div>

              </div>

            </div>
          </div>

        </div><!-- End content -->
      </div><!-- End full width -->

      <!-- clear fix -->
      <div class="clear"></div>

      <div id="footer"> &copy; Copyright 2013 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

    </div> <!--// End inner -->
  </div> <!--// End content -->

</body> 
<?php echo $functions; ?>
</html>
<script>
  CKEDITOR.replace( "descripcion_detallada_spa" );
  CKEDITOR.replace( "descripcion_detallada_eng" );
</script>