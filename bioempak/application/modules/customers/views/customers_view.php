<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CMS imaginamos V 1.0</title>

        <meta name="description" content="Sistema que permite la gesti&oacute;n de contenidos web">
        <meta name="author" content="Imaginamos.com">

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="http://cms.imaginamos.com/favicon/imaginamos.ico"/>
        <style>
            label{display: block}
            label strong{color:red}
            textarea{width: 740px; height: 100px; resize: none; text-align: left}
            #errorDiv{color: red;font-weight: bold}
        </style>
        <!--External Files-->
        <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
        <!--End External Files-->  



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
                    <!-- End header -->
                    <div class="content">


                        <div class="formEl_b">
                            <div>
                                <fieldset>
                                    <legend>Nuevo</legend>
                                    <form enctype="multipart/form-data" action="<?php echo base_url(); ?>customers/add" method="POST" onsubmit="return validate();" >
                                        <br><br>
                                        <label>Imagen 1<strong> (210 x 170px) *</strong></label>
                                        <input type="file" name="userfile" id="userfile1" class="fileupload" />
                                        <br><br>
                                        <label>Imagen 2<strong> (185 x 180px) *</strong></label>
                                        <input type="file" name="userfile2" id="userfile2" class="fileupload" />
                                        <br><br>
                                        <input type="submit" class="uibutton" value="Guardar" name="send" />
                                    </form>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Listado</legend>

                                    <div class="tableName toolbar">
                                        <table class="display data_table2" >
                                            <thead>
                                                <tr>
                                                    <th><div class="th_wrapp">No</div></th>	
                                                    <th><div class="th_wrapp">Accion</div></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $c = 0; ?>
                                                <?php foreach($data as $d): ?>
                                                <?php $c++; ?>
                                                <tr class="odd gradeX">
                                                    <td class="center" width="70px">Imagen <?php echo $c; ?></td>
                                                    <td class="center" width="200px">
                                                        <a class="uibutton" href="<?php echo base_url().'customers/view/'.$d->id; ?>">Editar</a>
                                                        <a class="uibutton" href="<?php echo base_url().'customers/delete/'.$d->id; ?>">Eliminar</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </fieldset>
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
<script>
    jQuery(document).ready(function(){
        jQuery("#text1,#text2,#text3").cleditor(); 
    });
    function validate(){

            if(jQuery('#userfile1').val() == ""){
                showError('Recuerde llenar los campos marcados con *',3000);
                return false;
            }
            if(jQuery('#userfile2').val() == ""){
                showError('Recuerde llenar los campos marcados con *',3000);
                return false;
            }
        
        return true;
    }
</script>
</html>