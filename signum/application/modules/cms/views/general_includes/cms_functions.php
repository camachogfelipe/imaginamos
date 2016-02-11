<?php
///////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
///////////////////////////////
?>


<script>
    $(document).ready(function() {
<?php if ($return == 'ok'): ?>
            showSuccess('Proceso exitoso',3000);
<?php endif; ?>
<?php if ($return == 'erRequired'): ?>
            showError('Recuerde que los campos marcados (*) son obligatrios',3000);
<?php endif; ?>        
<?php if ($return == 'erSizeImg'): ?>
            showError('El tamaño del archivo es demasiado grande, debe ser menor o igual a 250 MB',3000);
                                                
<?php endif; ?>
    
<?php if ($return == 'erLogVac'): ?>
            showError('ingrese usuario y clave',3000);                     
<?php endif; ?>
    
<?php if ($return == 'erLogin'): ?>
            showError('datos inv&aacute;lidos, intentenlo nuevamente',3000);                     
<?php endif; ?>
    
<?php if ($return == 'fail2'): ?>
                showError('datos inv&aacute;lidos, intentenlo nuevamente',3000);                     
<?php endif; ?>
    
    });
    
    
    
      function valEmail(email){
             re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
             if(!re.exec(email))    {
                    return false;
             }else{
                    return true;
             }
      }

      function validate_form_administradores(email,user,pass){
             if(jQuery('#'+email).val() == ""){
                    showError('Recuerde que los campos marcados (*) son obligatrios',3000);
                    return false;
             }
             if(!valEmail(jQuery('#'+email).val())){
                    showError('Por favor digite un email valido',3000);
                    return false;
             }
             if(jQuery('#'+user).val() == ""){
                    showError('Recuerde que los campos marcados (*) son obligatrios',3000);
                    return false;
             }
             if(jQuery('#'+pass).val() == ""){
                    showError('Recuerde que los campos marcados (*) son obligatrios',3000);
                    return false;
             }
             return true;
      }

</script>

