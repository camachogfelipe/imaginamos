<style type="text/css">#nav-bt-3 {background-color:#6a6a6a;} #foo-bt-5 {color:#ce1728;} .menu-lt li a {color:#767D33;} .menu-lt li a:hover {background-color:#8f993e;} .menu-lt li a.cl-act {background-color:#8f993e;} .menu-lt ul li a {color:#767D33;} .menu-lt ul li a:hover {background-color:#8f993e;} .menu-lt ul ul li a {color:#767D33;} .menu-lt ul ul li a:hover {background-color:#8f993e;}</style>

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
                    <a href="javascript:void(0)" class="menu-lt-act-first menu-lt-act-first-c2 menu-vn-t1">Comunicaciones</a>
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


