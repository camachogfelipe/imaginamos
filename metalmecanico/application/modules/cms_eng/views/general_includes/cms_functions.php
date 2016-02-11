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
            showSuccess('Successful process',3000);
<?php endif; ?>
<?php if ($return == 'erRequired'): ?>
            showError('Remember that fields marked (*) are obligatrios',3000);
<?php endif; ?>        
<?php if ($return == 'erSizeImg'): ?>
            showError('The file size is too large, must be less than or equal to 250 MB',3000);
                                                
<?php endif; ?>
    
<?php if ($return == 'erLogVac'): ?>
            showError('Enter username and password',3000);                     
<?php endif; ?>
    
<?php if ($return == 'erLogin'): ?>
            showError('Invalid data, try it again',3000);                     
<?php endif; ?>
    
<?php if ($return == 'fail2'): ?>
                showError('Invalid data, try it again',3000);                     
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
                    showError('Remember that fields marked (*) are obligatrios',3000);
                    return false;
             }
             if(!valEmail(jQuery('#'+email).val())){
                    showError('Please type a valid email',3000);
                    return false;
             }
             if(jQuery('#'+user).val() == ""){
                    showError('Remember that fields marked (*) are obligatrios',3000);
                    return false;
             }
             if(jQuery('#'+pass).val() == ""){
                    showError('Remember that fields marked (*) are obligatrios',3000);
                    return false;
             }
             return true;
      }

</script>

