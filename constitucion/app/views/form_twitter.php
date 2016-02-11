<div class="content">
    <form action="<?php echo 'http://127.0.0.1/baseapp/oauth/oauth_mod/saveuser_twitter' ?>" method="post">
        <label class="req">Email</label>
        <input type="text" class="email" id="email" name="email" required/>
        <input type="hidden" id="iduser" name="iduser" value="<?php echo $iduser; ?>"/>
        <input type="hidden" id="iduseraccount" name="iduseraccount" value="<?php echo $iduseraccount; ?>" />
        <button class="btn" type="submit" >Guardar</button>
    </form>
</div>