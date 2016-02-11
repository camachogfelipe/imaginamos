<div class="container">
    <div class="row-fluid">
        <div class="span12 wt-box-<?php echo $color_module; ?>">
            <ul id="breadcrumbs">
                <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
                <li><a href="javascript:void(0)">Configuración</a></li>
                <li><a href="javascript:void(0)">Generador de Front END</a></li>
            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12 wt-box-<?php echo $color_module; ?>"  >
            <h3>Generador de Front END</h3>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span11">
            <div class="w-box w-box-blue ">
                <div class="w-box-header">
                    <h4>Consola</h4>
                </div>
                <div class="pull-right">
                    <div>
                        <form action="<?php echo base_url()."cms/generator_front_modules/" ?>" method="POST" >
                        <input type="submit" class="btn btn-success" name="generar" value="Genrerar"/>
                        </form>
                    </div>
                </div>
                <div class="w-box-content"  style="background-color: #000000;">
                    <?php  echo $console;  ?>
                </div>
            </div>
        </div>
    </div>
</div>