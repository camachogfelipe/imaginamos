(function($, globals) {

  var list = $('#songs-url-list');

  $(document).on('submit', '#save-song-url-form', function() {
    var $this = $(this), submitBtn = $this.find('[type="submit"]');

    submitBtn.css('opacity', .6);

    $.getJSON($this.attr('action'), $this.serialize(), function(json) {
      if (json.url && json.ok == true) {
        oembed(json.url);
        $this[0].reset();
      } else {
        $('<div />', {
          html: json.alert_messages
        }).dialog({
          modal: true,
          close: function() {
            return $(this).close();
          }
        });
      }

      submitBtn.css('opacity', 1);
    });

    return false;
  });

  function oembed(url) {
    list.find('p').remove();

    $.getJSON('http://soundcloud.com/oembed?callback=?', {
      format: 'js',
      url: url,
      iframe: true,
      show_comments: false,
      color: 'E82E7C'
    },
    function(data) {
      if (data.html) {
        var content = $('<div />', {
          html: data.html
        }).appendTo(list),
        text_delete = '';

        $('<a />', {
          "class" : 'opacity-hover',
          css: {
            "float": "right",
            "font-size": '.6em',
            'margin': '.4em'
          },
          href: '#',
          html: text_delete,
          click: function(e) {
            if (!$(this).hasClass('deleting')) {
                                    
              $('#delete-song-confirm').dialog({
                modal : true,
                resizable : false,
                width : 400,
                show : 'drop',
                hide : 'drop',
                buttons : {
                  Aceptar : function(){
                                        
                    $(this).html('Eliminando, por favor espera...').css('opacity', .8).addClass('deleting');
                                                
                    $.getJSON(globals.site_url + 'perfil/ajax/delete_songs_url', {
                      url: url
                    }, function(json) {
                      if (json.ok === true) {
                        content.fadeOut(function() {
                          return $(this).remove();
                        })
                      } else {
                        alert('Hubo un error al eliminar la canción.');
                      }
                      $(this).html(text_delete).css('opacity', 1).addClass('deleting');
                    });
                                    
                    return $(this).dialog('close');
                  },
                  Cancelar : function(){
                    return $(this).dialog('close');
                  }
                }
              });

            }

            return e.preventDefault();
          }
        }).prependTo(content);
      }
    });
  }



  $(function() {

    list.html('<p>Cargando canciones...</p>');

    if (songs_urls.length > 0) {
      $.each(songs_urls, function(index, url) {
        return oembed(url);
      });
    } else {
      list.html('<p>Ninguna canción agregada.</p>');
    }

  });


  /* ==== Functions for Shows ==== */

  var shows_list = $('#shows-list');

  $(document).on('submit', '#add-shows-form', function() {
    var $this = $(this), submitBtn = $this.find('[type="submit"]'), messages = $this.find('.messages');

    submitBtn.css('opacity', .6);
    messages.empty().hide();

    $.getJSON($this.attr('action'), $this.serialize(), function(json) {
      messages.html(json.alert_messages).show();
      if (json.ok) {
        load_shows();
        $this[0].reset();
      }
      return submitBtn.css('opacity', 1);
    });

    return false;
  });

  $(document).on('click', '[data-action="delete-show"]', function(e) {
    var parent = $(this).parents('.show:first');
    if (confirm('¿Deseas borrar el show?')) {
      $.get(this.href + '/ajax/delete_show', {}, function() {
        return parent.fadeOut(function() {
          return $(this).remove();
        });
      });
    }

    return e.preventDefault();
  });

  function load_shows() {
    shows_list.load(shows_list.data('load-url'));
  }


  $(function() {
    load_shows();
  });


  /* ==== Functions for Comments -  Ratins ==== */
  $(document).on('submit', '#create-comment-form', function() {
    var $this = $(this),
    submitBtn = $this.find('[type="submit"]'),
    messages = $this.find('.messages');

    $.ajax({
      url: $this.attr('action'),
      type: $this.attr('method'),
      data: $this.serialize(),
      dataType: 'json',
      beforeSend: function() {
        messages.empty().hide();
      },
      success: function(json) {
        if (json.alert_messages) {
          messages.html(json.alert_messages).show();
        }
        if (true === json.ok) {
          setTimeout(function() {
            return window.location.reload();
          }, 1200);
        }
      }
    });
    return false;
  });


})(window.jQuery, window.globals);