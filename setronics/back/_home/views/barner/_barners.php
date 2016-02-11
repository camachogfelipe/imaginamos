<div class="container">
    <div class="row-fluid">
        <div class="span12"  style="color: #208BBD;">
            <h3>Barners</h3>
        </div>
    </div>
    <div class="row-fluid">

        <div class="span2">
            <div class="sidebar">
                <ul id="pageNav">
                    <li id="p1" class="<?php echo ($pag == 1)?"current":""; ?>" ><a class="jnav-ext c_datatables" href="barners/izq">Posición Izquierda</a></li>
                    <li id="p2" class="<?php echo ($pag == 2)?"current":""; ?>" ><a class="jnav-ext c_datatables" href="barners/der_up">Posición Derecha Arriba</a></li>
                    <li id="p3" class="<?php echo ($pag == 3)?"current":""; ?>"><a class="jnav-ext c_datatables" href="barners/der_down">Posición Derecha Abajo</a></li>
                 
                </ul>
            </div>
        </div>

        <div class="span10">
            <div class="w-box w-box-blue">
                <div id="title_content" class="w-box-header"><?php echo $pag_content_title;?></div>
                <div class="w-box-content ">
                    <div id="ajax_content">
                        <?php echo $pag_content; ?>
                    </div>
                </div>
            </div>
        </div>


    </div>
    
</div>

