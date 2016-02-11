jQuery.fn.reset = function () {
    $(this).each (function() {
        this.reset();
    });
}
jQuery(document).ready(function($) {
    $('#divdescription_requirements').removeClass('campo');
    $('#divdescription_requirements').addClass('campocompleto');
    $('#sendAnonimus').click(function(){
        $('#sendReq').submit();
    });
    
    $('#btnLogin').click(function(){
        
        // Limpiamos los mensajes
        $('#errorLoginEmail').html(' ');
        $('#errorLoginPass').html(' ');
        $('#errordescription_requirements').html(' ');
        
        // Validamos formularios
        if ($('#description_requirements').val()==''){
            $('#errordescription_requirements').html('Campo Requerido');
        }
        if ($('#loginEmail').val()==''){
            $('#errorLoginEmail').html('Campo Requerido');
        }
        if ($('#loginPass').val()==''){
            $('#errorLoginPass').html('Campo Requerido');
        }
        if($('#loginPass').val()=='' || $('#loginEmail').val()=='' || $('#description_requirements').val()=='')
            return false;
 
        // Enviamos ajax
        $.ajax({
            url : SITE_URL + 'requirements/loginSend',
            type: 'post',
            dataType : 'json',
            data: $('#loginForm').serialize()+'&'+$('#sendReq').serialize(),
            success: function (data) {
                if (data.scalar=='0'){
                    $('#errorLoginEmail').html('Email o clave incorrectas');  
                }else{
                    window.location.reload();
                }
            }
        });
        
    });
    $('#mensajecerrarreq').css({
        'right': -$('#mensajecerrarreq').width() - 100
    }, 500);
    $('.btnclosereq').click(function() {
        $('#mensajecerrarreq').stop().animate({
            'right': -$('#mensajecerrarreq').width() - 50
        }, 500);
        window.location.reload();
  
    });
   
    
    $('#btnRegister').click(function(){       
        // Limpiamos los mensajes
        $('#errorName').html(' ');
        $('#errorLastname').html(' ');
        $('#errorEmail').html(' ');
        $('#errorPass').html(' ');
        $('#errorPassconfirm').html(' ');
        $('#errordescription_requirements').html(' ');
        
        // Validamos formularios
        if ($('#description_requirements').val()==''){
            $('#errordescription_requirements').html('Campo Requerido');
        }
        if ($('#name').val()==''){
            $('#errorName').html('Campo Requerido');
        }
        if ($('#lastname').val()==''){
            $('#errorLastname').html('Campo Requerido');
        }
        if ($('#email').val()==''){
            $('#errorEmail').html('Campo Requerido');
        }        
        if ($('#pass').val()==''){
            $('#errorPass').html('Campo Requerido');
        }
        if ($('#passconfirm').val()==''){
            $('#errorPassconfirm').html('Campo Requerido');
        }   
        if($('#name').val()=='' || $('#lastname').val()=='' || $('#email').val()=='' || $('#pass').val()=='' || $('#passconfirm').val()=='' ||  $('#description_requirements').val()=='')
            return false;
        if($("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1) {
            $('#errorEmail').html('La dirección e-mail parece incorrecta');
            return false;
        }
        if ($('#pass').val() != $('#passconfirm').val()){
            $('#errorPass').html('Las claves no coinciden');
            return false;
        }
 
        // Enviamos ajax
        $.ajax({
            url : SITE_URL + 'requirements/registerSend',
            type: 'post',
            dataType : 'json',
            data: $('#formRegister').serialize()+'&'+$('#sendReq').serialize(),
            success: function (data) {
                if (data.scalar=='0'){
                    $('#errorEmail').html('Este Email ya existe');  
                }else{
                    $('#mensajecerrarreq').show();
                    $('#mensajecerrarreq').stop().animate({
                        'right': '0px'
                    }, 500); 
                    $("#formRegister").reset();
                }
            }
        });  
        
    });
});