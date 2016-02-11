// JavaScript Document
$(function() {
    $("#country_id, #country2_id").selectbox();
});
/*boton flotante*/
$(function() {
    $('.documentacion').click(function() {
        $.scrollTo('.vid', 800);
    })
    $('.documentacion').css({
        'right': -200
    });
    setTimeout(function() {
        $('.documentacion').animate({
            'right': 20
        }, 1000, 'easeInOutQuad', function() {
            animateVerVideoBtnUp()
        });
    }, 1000);
    function animateVerVideoBtnUp() {
        $('.documentacion').animate({
            'top': 245
        }, 2000, 'easeInOutQuad', function() {
            animateVerVideoBtnDown()
        });
    }
    function animateVerVideoBtnDown() {
        $('.documentacion').animate({
            'top': 255
        }, 2000, 'easeInOutQuad', function() {
            animateVerVideoBtnUp()
        });


    }
});

/*fin boton flotante*/
//flechita menu
$(function() {
    $('.menu > li').hover(
            function() {
                $('#flechita', $(this)).stop().animate({
                    'margin-left': '44px'
                }, 200);
            },
            function() {
                $('#flechita', $(this)).stop().animate({
                    'margin-left': '0px'
                }, 200);
            }
    );
});
// banner
$(function() {
    $('#carousel').carouFredSel({
        width: '100%',
        items: {
            visible: 1
        },
        scroll: {
            items: 1,
            duration: 1500,
            timeoutDuration: 4000
        },
        pagination: {
            container: '#pager',
            deviation: 1
        }
    });
});
// bannernosotros
$(function() {
    $('#carouselnosotros').carouFredSel({
        width: 925,
        auto: true,
        items: {
            visible: 1
        },
        scroll: {
            items: 1,
            duration: 1500,
            timeoutDuration: 4000
        },
        pagination: {
            container: '#pager',
            deviation: 1
        }
    });
});
// slider
$(function() {
    $('#colchonimg').carouFredSel({
        width: 1000,
        items: {
            visible: 5
        },
        scroll: {
            items: 1,
            duration: 1500,
            timeoutDuration: 2000
        },
        prev: {
            button: '#prevline',
            items: 1
        },
        next: {
            button: '#nextline',
            items: 1
        }
    });
});
//drogbox
$(function() {
    // there's the gallery and the trash
    var $gallery = $("#gallery"),
            $trash = $("#trash");
    // let the gallery items be draggable
    $("li", $gallery).draggable({
        cancel: "a.ui-icon", // clicking an icon won't initiate dragging
        revert: "invalid", // when not dropped, the item will revert back to its initial position
        containment: "document",
        helper: "clone",
        cursor: "move"
    });
    // let the trash be droppable, accepting the gallery items
    $trash.droppable({
        accept: "#gallery > li",
        activeClass: "ui-state-highlight",
        drop: function(event, ui) {
            deleteImage(ui.draggable);
        }
    });
    // let the gallery be droppable as well, accepting items from the trash
    $gallery.droppable({
        accept: "#trash li",
        activeClass: "custom-state-active",
        drop: function(event, ui) {
            recycleImage(ui.draggable);
        }
    });
    // image deletion function
    var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
    function deleteImage($item) {
        $item.fadeOut(function() {
            var $list = $("ul", $trash).length ?
                    $("ul", $trash) :
                    $("<ul class='gallery ui-helper-reset'/>").appendTo($trash);

            $item.find("a.ui-icon-trash").remove();
            $item.append(recycle_icon).appendTo($list).fadeIn(function() {
                $item
                        .animate({
                    width: "100px"
                })
                        .find("img")
                        .animate({
                    height: "67px"
                });
            });
        });
    }
    // image recycle function
    var trash_icon = "<a href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
    function recycleImage($item) {
        $item.fadeOut(function() {
            $item
                    .find("a.ui-icon-refresh")
                    .remove()
                    .end()
                    .css("width", "200px")
                    .append(trash_icon)
                    .find("img")
                    .css("height", "128px")
                    .end()
                    .appendTo($gallery)
                    .fadeIn();
        });
    }
    // image preview function, demonstrating the ui.dialog used as a modal window
    function viewLargerImage($link) {
        var src = $link.attr("href"),
                title = $link.siblings("img").attr("alt"),
                $modal = $("img[src$='" + src + "']");

        if ($modal.length) {
            $modal.dialog("open");
        } else {
            var img = $("<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />")
                    .attr("src", src).appendTo("body");
            setTimeout(function() {
                img.dialog({
                    title: title,
                    width: 400,
                    modal: true
                });
            }, 1);
        }
    }
    // resolve the icons behavior with event delegation
    $("ul.gallery > li").click(function(event) {
        var $item = $(this),
                $target = $(event.target);
        if ($target.is("a.ui-icon-trash")) {
            deleteImage($item);
        } else if ($target.is("a.ui-icon-zoomin")) {
            viewLargerImage($target);
        } else if ($target.is("a.ui-icon-refresh")) {
            recycleImage($item);
        }
        return false;
    });
});
// slider
$(function() {
    $('#colchonimg2').carouFredSel({
        auto: true,
        width: 280,
        items: {
            visible: 3
        },
        prev: {
            button: '#prevline2',
            items: 1
        },
        next: {
            button: '#nextline2',
            items: 1
        },
        scroll: {
            items: 1,
            duration: 1000,
            timeoutDuration: 1500
        }
    });

});
// slider
$(function() {
    $('#colchonimg3').carouFredSel({
        width: 280,
        auto: true,
        items: {
            visible: 3
        },
        scroll: {
            items: 1,
            duration: 1000,
            timeoutDuration: 1500
        },
        prev: {
            button: '#prevline3',
            items: 1
        },
        next: {
            button: '#nextline3',
            items: 1
        }
    });

});
// slider
$(function() {
    $('#colchonimg4').carouFredSel({
        width: 280,
        auto: true,
        items: {
            visible: 3
        },
        scroll: {
            items: 1,
            duration: 1000,
            timeoutDuration: 1500
        },
        prev: {
            button: '#prevline4',
            items: 1
        },
        next: {
            button: '#nextline4',
            items: 1
        }
    });

});
// slider
$(function() {
    $('#colchonimg5').carouFredSel({
        width: 280,
        auto: true,
        items: {
            visible: 3
        },
        scroll: {
            items: 1,
            duration: 1000,
            timeoutDuration: 1500
        },
        prev: {
            button: '#prevline5',
            items: 1
        },
        next: {
            button: '#nextline5',
            items: 1
        }
    });
});
$(function() {
    $('#paso-1').click(function() {
        $.scrollTo('.con-filtros', 0);
    })
    $('#paso-1').css({
        'right': 250
    });
    setTimeout(function() {
        $('#paso-1').animate({
            'right': 250
        }, 1200, 'easeInOutQuad', function() {
            animatePasoU()
        });
    }, 1200);
    function animatePasoU() {
        $('#paso-1').animate({
            'top': -60
        }, 2000, 'easeInOutQuad', function() {
            animatePasoD()
        });
    }
    function animatePasoD() {
        $('#paso-1').animate({
            'top': -52
        }, 2000, 'easeInOutQuad', function() {
            animatePasoU()
        });
    }
});
$(function() {
    $('#paso-2').click(function() {
        $.scrollTo('.con-filtros', 0);
    })
    $('#paso-2').css({
        'right': 200
    });
    setTimeout(function() {
        $('#paso-2').animate({
            'right': 200
        }, 1200, 'easeInOutQuad', function() {
            animatePasoU()
        });
    }, 1200);
    function animatePasoU() {
        $('#paso-2').animate({
            'top': -40
        }, 2000, 'easeInOutQuad', function() {
            animatePasoD()
        });
    }
    function animatePasoD() {
        $('#paso-2').animate({
            'top': -32
        }, 2000, 'easeInOutQuad', function() {
            animatePasoU()
        });
    }
});
$(function() {
    $('#paso-3').click(function() {
        $.scrollTo('#form-cotizacion', 0);
    })
    $('#paso-3').css({
        'right': 65
    });
    setTimeout(function() {
        $('#paso-3').animate({
            'right': 65
        }, 1200, 'easeInOutQuad', function() {
            animatePasoU()
        });
    }, 1200);
    function animatePasoU() {
        $('#paso-3').animate({
            'top': 68
        }, 2000, 'easeInOutQuad', function() {
            animatePasoD()
        });
    }
    function animatePasoD() {
        $('#paso-3').animate({
            'top': 60
        }, 2000, 'easeInOutQuad', function() {
            animatePasoU()
        });
    }
});
$(function() {
    $('#paso-4').click(function() {
        $.scrollTo('#form-cotizacion', 0);
    })
    $('#paso-4').css({
        'right': 110
    });
    setTimeout(function() {
        $('#paso-4').animate({
            'right': 110
        }, 1200, 'easeInOutQuad', function() {
            animatePasoU()
        });
    }, 1200);
    function animatePasoU() {
        $('#paso-4').animate({
            'top': 56
        }, 2000, 'easeInOutQuad', function() {
            animatePasoD()
        });
    }
    function animatePasoD() {
        $('#paso-4').animate({
            'top': 48
        }, 2000, 'easeInOutQuad', function() {
            animatePasoU()
        });
    }
});
$(function() {
    // jQuery UI Draggable
    $("#product li").draggable({
        // brings the item back to its place when dragging is over
        revert: true,
        // once the dragging starts, we decrease the opactiy of other items
        // Appending a class as we do that with CSS
        drag: function() {
            $(this).addClass("active");
            $(this).closest("#product").addClass("active");
        },
        // removing the CSS classes once dragging is over.
        stop: function() {
            $(this).removeClass("active").closest("#product").removeClass("active");
        }
    });
    // jQuery Ui Droppable
    $(".basket").droppable({
        // The class that will be appended to the to-be-dropped-element (basket)
        activeClass: "active",
        // The class that will be appended once we are hovering the to-be-dropped-element (basket)
        hoverClass: "hover",
        // The acceptance of the item once it touches the to-be-dropped-element basket
        // For different values http://api.jqueryui.com/droppable/#option-tolerance
        tolerance: "touch",
        drop: function(event, ui) {
            var urls = "index.php?seccion=Funcion1";
            var basket = $(this),
                    move = ui.draggable,
                    itemId = basket.find("ul li[data-id='" + move.attr("data-id") + "']");
            var id_prod = move.attr("data-id");
            // To increase the value by +1 if the same item is already in the basket
            if (itemId.html() != null) {
                var data = {
                    id: move.attr("data-id"),
                    cantidad: parseInt(itemId.find("input").val()) + 1
                }
                $.ajax({
                    type: "POST",
                    url: urls,
                    data: data,
                    dataType: "json",
                    success: function(data) {
                        // Si el ajax respondio
                        if (data.val == 1) {
                            //si data es 1 se suma y se guarda
                            var apuntador = "#productid" + id_prod;
                            var chever = $(apuntador).val();
                            if (parseInt(chever) == 0) {
                                var newCant = parseInt($(apuntador).val()) + 1;
                                $(apuntador).val(newCant);
                            }
                            else {
                                var newCant = parseInt($(apuntador).val()) + 1;
                                $(apuntador).val(newCant);
                            }


                            //alert(newCant);
                            //move.find("input").val(parseInt(move.find("input").val()) + 1);
                        } else {
                            var apuntador = "#productid" + id_prod;
                            var newCant = parseInt($(apuntador).val(data.val));
                            $(apuntador).val(newCant);
                            //es porque no se guardo en la sesion
                            //  move.find("input").val(data.val);
                        }
                    }
                });
            }
            else {
                var urls1 = "index.php?seccion=Funcion1";
                // Add the dragged item to the basket
                addBasket(basket, move);

                var id_prod = move.attr("data-id");
                var data1 = {
                    id: move.attr("data-id"),
                    cantidad: 1
                }
                $.ajax({
                    type: "POST",
                    url: urls1,
                    data: data1,
                    dataType: "json",
                    success: function(data) {
                        // Si el ajax respondio
                        if (data.val == 1) {
                            //si data es 1 se suma y se guarda
                            var apuntador = "#productid" + id_prod;
                            var chever = $(apuntador).val();
                            if (parseInt(chever) == 0) {
                                var newCant = parseInt($(apuntador).val()) + 1;
                                $(apuntador).val(newCant);
                            }
                            else {
                                var newCant = parseInt($(apuntador).val()) + 1;
                                $(apuntador).val(newCant);
                            }


                            //alert(newCant);
                            //move.find("input").val(parseInt(move.find("input").val()) + 1);
                        } else {
                            var apuntador = "#productid" + id_prod;
                            var newCant = parseInt($(apuntador).val(data.val));
                            $(apuntador).val(newCant);
                            //es porque no se guardo en la sesion
                            //  move.find("input").val(data.val);
                        }
                    }
                });
                // Updating the quantity by +1" rather than adding it to the basket


            }
        }
    });

    // This function runs onc ean item is added to the basket
    function addBasket(basket, move) {
        basket.find("ul").append('<li data-id="' + move.attr("data-id") + '">'
                + '<span class="name">' + move.find(".saber2").html() + '</span>' //onblur="cambioCant('+ move.attr("data-id")+',this.value);"
                + '<input name="productid' + move.attr("data-id") + '" id="productid' + move.attr("data-id") + '" onblur="cambioCant(' + move.attr("data-id") + ',this.value);"  class="count" value="0" type="text">'
                + '<button onclick="GenericAjax(\'EliminarItem\',' + move.attr("data-id") + ');" class="delete">&#10005;</button>');
    }
    // The function that is triggered once delete button is pressed
    $(".basket ul li button.delete").live("click", function() {
        $(this).closest("li").remove();
    });
});
//ahoranito
function cambiarestado(band) {
    $.post('index.php?seccion=cambios1', {
        bandera: band
    }, function(cambioresultado) {
        if (cambioresultado == false) {
            alert("Lo sentimos otro asesor esta revisando esta cotización");
            return false;
        } else {
            return true;
        }
    });
}
$(document).ready(function() {
    $(function() {
        $("#footform12").validationEngine();
    });
    $("#validation1").hide();
    $('.zona-entornos').click(function() {
        var pass = $("#pass").val();
        var pass1 = $("#pass1").val();
        if (pass != pass1) {
            $('#validation1').fadeIn();
            return false;
        } else {
            $('#validation1').fadeOut();
        }
    });
});
$(document).ready(function() {
    $('.cotizar').validationEngine();
    $('#btncotizar').click(function() {
        $('#formenviar').slideDown().css({
            display: 'block'
        });
    });
    $('.modal-img').colorbox({
        inline: true,
        width: "600px",
        height: "400px"
    });
    $('.zona-seguridad, .zona-password').colorbox({
        inline: true,
        width: "500px",
        height: "350px"
    });
    $('.zona-recupera').colorbox({
        inline: true,
        width: "500px",
        height: "270px"
    });
    $('.cot-desc').colorbox({
        inline: true,
        width: "600px",
        height: "280px"
    });
    $('.cot-nula').colorbox({
        inline: true,
        width: "400px",
        height: "150px"
    });
    $('#tablaZona').dataTable({
        "sScrollY": "433",
        "bJQueryUI": true,
        "bPaginate": false,
        "aaSorting": [[1, "desc"]],
        "aoColumnDefs": [
            {
                'bSortable': false,
                'aTargets': [-1, -2]
            }
        ]
    });
    $('#tablaBreve').dataTable({
        "sScrollY": "100",
        "bJQueryUI": true,
        "bFilter": false,
        "bPaginate": false
    });
    $('#tablaEdicion').dataTable({
        "sScrollY": "241",
        "bJQueryUI": true,
        "bFilter": false,
        "bPaginate": false,
        "aaSorting": [[1, "desc"]],
        "aoColumnDefs": [
            {
                'bSortable': false,
                'aTargets': [-1, -2]
            }
        ]
    });
    $('#paging_site').pajinate({
        items_per_page: 6
    });
    $('.footer-ahorranito').ahorranito({
        theme: 'oscuro',
        type: 1
    });
});

function elimitemo(bande, ss) {
    var data1 = {id: bande, ss: ss}
    $.ajax({
        type: "POST",
        url: "index.php?seccion=Funcion2",
        data: data1,
        dataType: "json",
        success: function(data) {
            // Si el ajax respondio
            if (data == 1) {
                alert("No se pudo eliminar");
            } else {
                window.location = 'index.php?seccion=editar&el&ss=' + ss + '';
                /*window.location.href("index.php?seccion=editar&ss="+ss+"&el");                 */
            }
        }
    });

}
