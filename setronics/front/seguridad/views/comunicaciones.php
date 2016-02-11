<style type="text/css">#nav-bt-2 {background-color:#6a6a6a;} #foo-bt-3 {color:#ce1728;}</style>

<section>
    <div class="con-section">
        <div class="mg-section cfx">
            <div class="con-miga">
                <ul class="miga-site">
                    <li><a href="comunicaciones.php">Comunicaciones</a></li>
                    <li><a href="javascript:void(0)" class="menu-vn-t2">Nombre</a></li>
                </ul>
            </div>
            <div class="con-logo-section">
                <img src="img/logo-t1.png" height="74" width="204" alt="">
            </div>
            <div class="con-menu-lt flt">
                <div class="menu-fx">
                    <a href="javascript:void(0)" class="menu-lt-act-first menu-lt-act-first-c1 menu-vn-t1">Comunicaciones</a>
                    <ul class="menu-lt">
                        <?php echo $categorias; ?>
                    </ul>
                </div>
            </div>
           <div id="contenido_ajax">
                    <?php echo isset($pag_content)?$pag_content:"";  ?>
           </div>





        </div>
    </div>
</section>

<script>
   
    $("a#action_ajax").click(function(e) {
        $.ajax({
            type: "POST",
            url: $(this).data('url'),
            data: $(this).data('datos'),
            dataType: 'html',
            success: function(html) {
                $('#contenido_ajax').html(html);
            }
        });
          return false; 
    }); 
    
    var overItem = 0; $(".over-items").hover(function(){if(overItem==0){$(this).children(".item-over-img").stop().animate({margin:"15px auto 20px"}); $(this).children(".con-certificado-info").stop().animate({height:"160px"}); overItem=1;} else {$(this).children(".item-over-img").stop().animate({margin:"20px auto 15px"}); $(this).children(".con-certificado-info").stop().animate({height:"0px"}); overItem=0;}});
	

</script>


