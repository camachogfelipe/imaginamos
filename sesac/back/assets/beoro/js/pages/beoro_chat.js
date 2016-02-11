/* [ ---- Beoro Admin - chat ---- ] */

    $(document).ready(function() {
        //* chat
        beoro_chat.init();
    });

    //* chat
    beoro_chat = {
        init: function() {
            //send on button press
            $('.ch-message-send').click(function(e) {
                e.preventDefault();
                beoro_chat.sendMsg();
            });
            // send on enter key press
            $('.ch-message-input').keypress(function (e) {
                if (e.which == 13) {
                    e.preventDefault();
                    beoro_chat.sendMsg();
                }
            });
        },
        sendMsg: function() {
            var messageInput = $('.ch-message-input');
            var messageVal = messageInput.val();
            var messageVal = messageVal.replace(/^\s+/, '').replace(/\s+$/, '');
            if( messageVal != '' ) {
                var msg_cloned = $('#ch-message-temp').clone();
                $('.ch-messages').append(msg_cloned).find('#ch-message-temp').addClass('ch-messages-added');
                $('.ch-messages-added').find('.ch-text').text(messageVal);
                $('.ch-messages-added').find('.ch-time').text(moment().format('HH:mm'));
                messageInput.val('');
                $('.ch-messages-added').attr('id','').removeClass('ch-messages-added').show();
                $('.ch-messages').stop().animate({
                    scrollTop: msg_cloned.offset().top
                }, 600);
                $('.ch-message-input').closest('.control-group').removeClass('error');
            } else {
                $('.ch-message-input').closest('.control-group').addClass('error');
            }
        }
    }