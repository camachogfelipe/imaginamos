<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>CMS Imaginamos</span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>


                    <form action="<?php echo base_url(); ?>cms/chagePass" method="post">
                        <label>Clave actual<strong style="color:red"> *</strong></label>
                        <input type="text" class="medium" name="oldpass" />
                        <br/><br/>

                        <label>Nueva clave<strong style="color:red"> *</strong></label>
                        <input type="text" class="medium" name="newpass" />
                        <br/><br/>
                        <input type="submit" value="Actualizar" class="uibutton" />
                    </form>
                </fieldset>
            </div>

        </div>
    </div>	

</div><!-- End content -->