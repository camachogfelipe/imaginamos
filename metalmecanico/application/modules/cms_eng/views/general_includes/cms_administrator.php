<!---------------
@autor: Brayan Acebo
brayan.acebo@imaginamos.co
Agencia: imaginamos.com
Bogotá, Colombia, 2012
----------------->

<!-----------------  Sacar de la aplicacion en caso de no haber sesion  -->

<?php 
if (!$this->session->userdata('is_logged_in')){
header('location: cms');
exit();
} 
?>


<!-----------------  Link a zona admin  -->

<div style="float: left">
    <a href="http://imaginamos.com" target="_blank">
    <img src="<?php echo base_url('assets/images/logo_admin.png'); ?>" alt="Ver sitio" style="position: relative;top: 2px;float: left;left: -15px" height="40">
    </a>
    <a href="<?php echo base_url() ?>cms_eng">
    <strong title="Profile">Hello, <?php echo ucwords($this->session->userdata('username_user')) ?></strong>
    </a>
</div>

<?php if ($this->session->userdata('roll') == "admin"): ?>
    <div class="setting">
        <a href="<?php echo base_url(); ?>cms/admin_zone">
            <b>Administrators</b>
        </a>
        <img src="http://cms.imaginamos.com/images/gear.png" class="gear" style="width: 25px;position: relative;top: -4px">
    </div>
<?php endif; ?>

<div title="Go to CMS spanish">
        <a href="<?php echo base_url(); ?>cms"><b>CMS Spanish</b></a>
        <img src="<?php echo base_url(); ?>assets/images/icons/random.png" alt="Ver sitio" style="position: relative;top: -7px" >
</div>

<div title="Go to my site">
        <a href="<?php echo base_url(); ?>" target="_blank"><b>View site</b></a>
        <img src="<?php echo base_url(); ?>assets/images/icons/home.png" alt="Ver sitio" style="position: relative;top: -7px" >
</div>

<a href="<?php echo base_url(); ?>cms/logout">
<div class="logout" title="Clic">Logout</div>
</a>