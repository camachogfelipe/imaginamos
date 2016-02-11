<div class="container">
    <div class="row-fluid">
        <div class="span12 wt-box-<?php echo $color_module; ?>">
            <ul id="breadcrumbs">
                <li><a href="javascript:void(0)"><i class="icon-home"></i></a></li>
                <li><a href="javascript:void(0)">Configuración</a></li>
                <li><a href="javascript:void(0)">Generador de Modelos</a></li>
            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12 wt-box-<?php echo $color_module; ?>"  >
            <h3>Generador de Modelos</h3>
        </div>
    </div>
    <div class="row-fluid">
         <div class="span9">
             <h3>Denegar Escritura   <input type="checkbox" name="ckall" id="ckall" class="btn btn-success"  value="Select ALL" ></h3>
        <form action="<?php echo base_url()."cms/generator_models/" ?>" method="POST" >
                        <input type="submit" class="btn btn-success" name="generar" value="Genrerar"/>
                        <?php foreach ($enum_class as $value) : ?>
                        <div class="span2">
                        <label><?php echo $value ?></label>
                        <input type="checkbox" name="<?php echo $value ?>"  class="chekeds btn btn-success" value="<?php echo $value ?>">
                        </div>
                        <?php endforeach; ?>
                      
                        
                        </form>
               </div>
       </div> 
        <div class="row-fluid">
        <div class="span11">
            <div class="w-box w-box-blue ">
                <div class="w-box-header">
                    <h4>Consola</h4>
                </div>
                <div class="pull-right">
                   
                        
                        
                  
                </div>
                <div class="w-box-content"  style="background-color: #000000;">
                    <?php  echo $console;  ?>
                </div>
            </div>
        </div>
    </div>
</div>