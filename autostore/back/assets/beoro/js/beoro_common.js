/* [ ---- Beoro Admin - common functions ---- ] */

//* avoid 'console' errors in browsers that lack a console
if (!(window.console && console.log)) {
    (function() {
        var noop = function() {
        };
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}

//* detect touch devices 
function is_touch_device() {
    return !!('ontouchstart' in window);
}

$(document).ready(function() {
    // powertip tooltips
    beoro_tooltips.p_ttip();

    // popovers
    beoro_popover.init();
    
    beoro_numeric_input.init();

    //* mobile navigation
    selectnav('mobile-nav', {
        indent: '-'
    });
 
    //* show/hide functionality for widget boxes    
    beoro_boxes.show_hide();

    // accordion show/hide
    beoro_accordion.init();

    //* top menu
    jqueryfademenu.buildmenu("fade-menu");
    $('#fade-menu').on('click', 'a[href="#"]', function(e) {
        e.preventDefault();
    });

    //* background switch
    //*beoro_bgSwitch.init();*//

    //* scroll to top button
    beoro_scrollToTop.init();

    // change breadcrumb home ico on hover
    if ($('#breadcrumbs li:first a i.icon-home').length) {
        $('#breadcrumbs li:first a').on('mouseenter', function() {
            $(this).children('i').addClass('icon-white')
        }).on('mouseleave', function() {
            $(this).children('i').removeClass('icon-white')
        })
    }

})

//* tooltips
beoro_tooltips = {
    //* powertip tooltips
    p_ttip: function() {
        if ($.isFunction($.fn.powerTip)) {
            $.fn.powerTip.defaults.smartPlacement = true;
            if ($('.ptip_n').length) {
                $('.ptip_n').powerTip({
                    placement: 'n'
                })
            }
            if ($('.ptip_e').length) {
                $('.ptip_e').powerTip({
                    placement: 'e'
                })
            }
            if ($('.ptip_s').length) {
                $('.ptip_s').powerTip({
                    placement: 's'
                })
            }
            if ($('.ptip_w').length) {
                $('.ptip_w').powerTip({
                    placement: 'w'
                })
            }
            if ($('.ptip_nw').length) {
                $('.ptip_nw').powerTip({
                    placement: 'nw'
                })
            }
            if ($('.ptip_ne').length) {
                $('.ptip_ne').powerTip({
                    placement: 'ne'
                })
            }
            if ($('.ptip_sw').length) {
                $('.ptip_sw').powerTip({
                    placement: 'sw'
                })
            }
            if ($('.ptip_se').length) {
                $('.ptip_se').powerTip({
                    placement: 'se'
                })
            }
        }
    }
};

beoro_numeric_input = {
      init: function() {
        if ($('.numeric_input').length) {
          /*  $(".numeric_input").priceFormat({
                prefix: '',
                thousandsSeparator: ''
            }); */
        }
    }
}

//* popovers
beoro_popover = {
    init: function() {
        if ($('.pop-over').length) {
            $('.pop-over').popover();
        }
    }
}

//* boxes actions
beoro_boxes = {
    show_hide: function() {
        $('.w-box.hideable').each(function() {
            $this = $(this)
            if (!$this.children('.w-box-header').children('.icon-plus,.icon-minus').length) {
                if ($this.children('.w-box-content').hasClass('content-hide')) {
                    $this.children('.w-box-header').prepend('<i class="icon-plus icon-white" />')
                } else {
                    $this.children('.w-box-header').prepend('<i class="icon-minus icon-white" />')
                }
            }
        });
        $('.w-box-header .icon-plus,.w-box-header .icon-minus').click(function() {
            var this_box_content = $(this).closest('.w-box').find('.w-box-content')
            var box_height = this_box_content.actual('height');
            this_box_content.height(box_height);
            $(this).toggleClass('icon-plus icon-minus');
            this_box_content.slideToggle(400, 'easeOutCubic', function() {
                this_box_content.css('height', '')
            });
        });
    }
};

//* background switcher
beoro_bgSwitch = {
    init: function() {
        $('body').append('<div class="bg_switch" />');
        $('.bg_switch').append('<a href="#" class="bg_a" /><a href="#" class="bg_b" /><a href="#" class="bg_c" /><a href="#" class="bg_d" /><a href="#" class="bg_e" /><a href="#" class="bg_f" /><a href="#" class="bg_none" />')
        $('.bg_switch a').not('.bg_none').click(function(e) {
            e.preventDefault();
            $('body').removeClass('bg_a bg_b bg_c bg_d bg_e bg_f').addClass($(this).attr('class'));
        });
        $('.bg_switch .bg_none').click(function(e) {
            e.preventDefault();
            $('body').removeClass('bg_a bg_b bg_c bg_d bg_e bg_f');
        });
    }
};

//* scroll to top
beoro_scrollToTop = {
    init: function() {
        $('body').append('<a href="javascript:void(0)" class="scrollup" style="display:none"><i class="icon-chevron-up icon-white"></i></a>');

        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function(e) {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            e.preventDefault();
        });
    }
};

//* accordion show/hide
beoro_accordion = {
    init: function() {
        if ($('.accordion').length) {
            $('.accordion').each(function() {
                $(this).find('.accordion-group').each(function() {
                    $(this).find('.accordion-toggle').prepend('<i class="icon-chevron-left"/>')
                    $(this).find('.accordion-body').filter('.in').prev('.accordion-heading').find('.accordion-toggle').addClass('acc-in').children('i').toggleClass('icon-chevron-left icon-chevron-down');

                    $(this).find('.accordion-body').on('show', function(option) {
                        $(this).find('.accordion-toggle').removeClass('acc-in');
                        $(option.target).prev('.accordion-heading').find('.accordion-toggle').addClass('acc-in').children('i').removeClass('icon-chevron-left').addClass('icon-chevron-down');
                    });
                    $(this).find('.accordion-body').on('hide', function(option) {
                        $(option.target).prev('.accordion-heading').find('.accordion-toggle').removeClass('acc-in').children('i').addClass('icon-chevron-left').removeClass('icon-chevron-down');
                    });

                });
            })
        }
    }
};
/* [ ---- Beoro Admin - datatables ---- ] */

$(document).ready(function() {
    //* datatables
    beoro_datatables.basic();
    beoro_datatables.hScroll();
    beoro_datatables.colReorder_visibility();
    beoro_datatables.table_tools();

    $('.dataTables_filter input').each(function() {
        $(this).attr("placeholder", "Enter search terms here");
    })
});

//* datatables
beoro_datatables = {
    basic: function() {
        if ($('#dt_basic').length) {
            $('#dt_basic').dataTable({
                "sPaginationType": "bootstrap_full",
                "sScrollX": "100%",
                "sScrollXInner": '150%',
                "bScrollCollapse": true,
                "sDom": "R<'dt-top-row'Clf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row-fluid'ip>",
                "fnInitComplete": function(oSettings, json) {
                    $('.ColVis_Button').addClass('btn btn-mini btn-inverse').html('Columns');
                }
            });
        }
    },
    //* horizontal scroll
    hScroll: function() {
        if ($('#dt_hScroll').length) {
            $('#dt_hScroll').dataTable({
                "sScrollX": "100%",
                "sScrollXInner": '150%',
                "sPaginationType": "bootstrap",
                "bScrollCollapse": true,
            });
        }
    },
    //* column reorder & toggle visibility
    colReorder_visibility: function() {
        if ($('#dt_colVis_Reorder').length) {
            $('#dt_colVis_Reorder').dataTable({
                "sPaginationType": "bootstrap",
                "sDom": "R<'dt-top-row'Clf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row-fluid'ip>",
                "fnInitComplete": function(oSettings, json) {
                    $('.ColVis_Button').addClass('btn btn-mini btn-inverse').html('Columns');
                }
            });
        }
    },
    //* column reorder & toggle visibility
    table_tools: function() {
        if ($('#dt_table_tools').length) {
            $('#dt_table_tools').dataTable({
                "sDom": "<'dt-top-row'Tlf>r<'dt-wrapper't><'dt-row dt-bottom-row'<'row-fluid'ip>",
                "oTableTools": {
                    "aButtons": [
                        "copy",
                        "print",
                        {
                            "sExtends": "collection",
                            "sButtonText": 'Save <span class="caret" />',
                            "aButtons": ["csv", "xls", "pdf"]
                        }
                    ],
                    "sSwfPath": "js/lib/datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
                },
                "fnInitComplete": function(oSettings, json) {
                    $(this).closest('#dt_table_tools_wrapper').find('.DTTT.btn-group').addClass('table_tools_group').children('a.btn').each(function() {
                        $(this).addClass('btn-mini btn-inverse');
                    });
                }
            });
        }
    }
};

/* [ ---- Beoro Admin - form elements ---- ] */

$(document).ready(function() {
    //* one page navigation
    beoro_PageNav.init();
    //* ui sliders
    beoro_sliders.init();
    //* ui progressbars
    beoro_progressbars.init();
    //* 2col multiselect
    beoro_multiselect.init();
    //* enchanced select box
    beoro_enchancedSelect.init();
    //* datepicker
    beoro_datepicker.init();
    //* timepicker
    beoro_timepicker.init();
    //* colorpicker
    beoro_colorpicker.init();
    //* switch buttons
    beoro_switchButtons.init();
    //* autosize textarea
    beoro_autosize_textarea.init();
    //* textarea counter
    beoro_textarea_counter.init();
    // UI spinners
    beoro_uiSpinners.init();
    //* multiupload
    beoro_multiupload1.init();
    // beoro_multiupload.init();
    //* WYSIWG Editor
    beoro_wysiwg.init();
    
    beoro_wysiwg1.init();

    beoro_PageNavToolbar.init();
    
    beoro_view_delete_table.init();
    
    
});


beoro_view_delete_table = {
    init: function(){
        var row = $('#table_contet >tr').length; 
        if($('.del_count').length){
            if(row == $('.del_count').data('num')){
                $('.del_count').remove(); 
            }
        }
    }
}

//* one page navigation
beoro_PageNav = {
    init: function() {
        if ($('#pageNav').length) {
            function goToByScroll(id) {
                // scroll
                if ($(window).width() > 979) {
                    var offsetFix = 50;
                } else {
                    var offsetFix = 10;
                }
                $('html,body').animate({
                    scrollTop: $(id).offset().top - offsetFix
                },
                'slow');
            }

            $("#pageNav a").click(function(e) {
                // prevent a page reload when a link is pressed
                
                $("#pageNavToolbar a").data('params', '');
                $("#pageNavToolbar a").data('httpmethod', 'POST');
                e.preventDefault();
                $('#title_content').html($(this).html());
                

                // call the scroll function
                //goToByScroll("#ajax_content");    
            });
        }
    }
};

beoro_PageNavToolbar = {
    init: function() {
        if ($('#pageNavToolbar').length) {
            function goToByScroll(id) {
                // scroll
                if ($(window).width() > 979) {
                    var offsetFix = 50;
                } else {
                    var offsetFix = 10;
                }
                $('html,body').animate({
                    scrollTop: $(id).offset().top - offsetFix
                },
                'slow');
            }

            $("#pageNavToolbar a").click(function(e) {
                // prevent a page reload when a link is pressed
                // alert($('#From-ajax').serialize());
                if ($(this).data('chek')) {
                    if (!$('.select_obj').is(':checked')) {
                        bootbox.alert('Operacion no permitida, se debe seleccionar por lo menos un item...');
                        setInterval(function(){window.location.reload();}, 2000);
                        e.preventDefault();
                    }
                } 
                 $("#pageNavToolbar a").data('params', '&' + $('#From-ajax').serialize());
                 $("#pageNavToolbar a").data('httpmethod', 'POST');
                 e.preventDefault();
                 $('#form_data').html($(this).html());
               
                // call the scroll function
                //goToByScroll("#ajax_content");    

            });
        }
    }
};

//* sliders
beoro_sliders = {
    init: function() {
        if ($('.ui_slider1').length) {
            //* default slider
            $(".ui_slider1").slider({
                value: 100,
                min: 0,
                max: 500,
                step: 50,
                slide: function(event, ui) {
                    $(".ui_slider1_val").text("$" + ui.value);
                    $("#ui_slider_default_val").val("$" + ui.value);
                }
            });
            $(".ui_slider1_val").text("$" + $(".ui_slider1").slider("value"));
            $("#ui_slider_default_val").val("$" + $(".ui_slider1").slider("value"));
        }
        if ($('.ui_slider2').length) {
            //* range slider
            $(".ui_slider2").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function(event, ui) {
                    $(".ui_slider2_val").text("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                    $("#ui_slider_min_val").val("$" + ui.values[ 0 ]);
                    $("#ui_slider_max_val").val("$" + ui.values[ 1 ]);
                }
            });
            $(".ui_slider2_val").text("$" + $(".ui_slider2").slider("values", 0) + " - $" + $(".ui_slider2").slider("values", 1));
            $("#ui_slider_min_val").val("$" + $(".ui_slider2").slider("values", 0));
            $("#ui_slider_max_val").val("$" + $(".ui_slider2").slider("values", 1));
        }
        if ($('#ui_slider3_sel').length) {
            //* slider with select
            var select = $("#ui_slider3_sel");
            var slider = $("<div id='ui_slider3'></div>").insertAfter(select).slider({
                min: 1,
                max: 6,
                range: "min",
                value: select[ 0 ].selectedIndex + 1,
                slide: function(event, ui) {
                    select[ 0 ].selectedIndex = ui.value - 1;
                }
            });
            $("#ui_slider3_sel").change(function() {
                slider.slider("value", this.selectedIndex + 1);
            });
        }
    }
};

//* progressbars
beoro_progressbars = {
    init: function() {
        beoro_progressbars.start();
    },
    start: function() {
        if ($('#progress1').length) {
            var iEnd1 = new Date().setTime(new Date().getTime() + 25 * 1000); // now plus 25 secs
            $('#progress1').anim_progressbar({
                finish: iEnd1,
                callback: function() {
                    // callback after finish
                }
            })
        }
        if ($('#progress2').length) {
            var iNow = new Date().setTime(new Date().getTime() + 2 * 1000); // now plus 2 secs
            var iEnd2 = new Date().setTime(new Date().getTime() + 10 * 1000); // now plus 10 secs
            $('#progress2').anim_progressbar({
                start: iNow,
                finish: iEnd2,
                interval: 100,
                callback: function() {
                    // callback after finish
                }
            })
        }
        if ($('#progress3').length) {
            var iEnd3 = new Date().setTime(new Date().getTime() + 15 * 1000); // now plus 15 secs
            $('#progress3').anim_progressbar({
                interval: 1000,
                finish: iEnd3,
                callback: function() {
                    // callback after finish
                }
            })
        }
    }
};

//* multiselect
beoro_multiselect = {
    init: function() {
        if ($('#public-methods').length) {
            //* public methods
            $('#public-methods').multiSelect();
            $('#select-all').click(function() {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function() {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#select-fr').click(function() {
                $('#public-methods').multiSelect('select', 'fr');
                return false;
            });
            $('#deselect-fr').click(function() {
                $('#public-methods').multiSelect('deselect', 'fr');
                return false;
            });
        }
        if ($('#optgroup').length) {
            //* optgroup
            $('#optgroup').multiSelect()
        }
        if ($('#custom-headers').length) {
            //* custom headers
            $('#custom-headers').multiSelect({
                selectableHeader: "<div class='custom-header'>Selectable item</div>",
                selectionHeader: "<div class='custom-header'>Selected items</div>"
            });
        }
        if ($('.searchable').length) {
            //* searchable
            $('.searchable').each(function(key, element){
                 $("#"+$(element).attr('id')).multiSelect({
                     selectableHeader: '<div class="search-header"><input type="text" class="span12 search_ch" data-padre_id="'+$(element).attr('id')+'" id="'+$(element).attr('id')+'-ms-search" autocomplete="off" placeholder="country name"></div>',
                     selectionHeader: "<div class='search-selected'></div>"
                 });
           }); 
        }   

        if($('.search_ch').length) {  
              $('.search_ch').each(function(key, element){ 
                    $("#"+$(element).attr('id')).quicksearch($('.ms-elem-selectable', '#ms-'+$(element).data('padre_id'))).on('keydown', function(e){
                        if (e.keyCode == 40){
                            $(this).trigger('focusout');
                            $('#ms-'+$(element).data('padre_id')).focus();
                            return false;
                        }
                    })
             });    
        }
    }
};

//* password strength meter
beoro_password_meter = {
    init: function() {
        if ($('#password_meter').length) {
            $('#password_meter').pwdMeter({
                minLength: 6,
                displayGeneratePassword: true,
                generatePassText: 'Generate Password',
                randomPassLength: 16,
                neutralText: "",
                veryWeakText: "Very weak",
                weakText: "Weak",
                mediumText: "Medium",
                strongText: "Strong",
                veryStrongText: "Very Strong"
            })
        }
    }
};

//* enchanced select box
beoro_enchancedSelect = {
    init: function() {
        if ($('.s2_single').length) {
                $('.s2_single').each(function(key, element) {
                    $("#"+$(element).attr('id')).select2({
                        placeholder: "Select a State",
                        allowClear: true
                    });
                });
        }
        
        if ($('.s2_multiple').length) {
                $('.s2_multiple').each(function(key, element) {
                    $("#"+$(element).attr('id')).select2({
                        placeholder: "Add tags"
                    });
                });
        }
        
        
        if ($('.s2_single_data').length) {
            $('.s2_single_data').each(function(key, element) {
                $("#" + $(element).attr('id')).select2({
                    minimumInputLength: 1,
                    query: function(query) {
                        var data = {
                            results: []
                        }, i, j, s;
                        for (i = 1; i < 5; i++) {
                            s = "";
                            for (j = 0; j < i; j++) {
                                s = s + query.term;
                            }
                            data.results.push({
                                id: query.term + i,
                                text: s
                            });
                        }
                        query.callback(data);
                    }
                });
            });
        }
        
       if ($('.s2_tag_handler').length) {
                $('.s2_tag_handler').each(function(key, element) {
                    $("#"+$(element).attr('id')).select2({
                       tags: ["red", "green", "blue", "black", "white"],
                       tokenSeparators: [",", " "]
                    });
                });
        }
    }
};

//* datepicker
beoro_datepicker = {
    init: function() {
        if ($('.dp1').length) {
            $('.dp1').datepicker()
        }
        if ($('.dp2').length) {
            $('.dp2').datepicker()
        }
        if ($('.dpYear').length) {
            $('.dpYear').datepicker()
        }
        if (($('.dpStart').length) && ($('.dpEnd').length)) {
            $('.dpStart').datepicker().on('changeDate', function(ev) {
                var dateText = $(this).data('date'),
                        endDateTextBox = $('.dpEnd input');
                if (endDateTextBox.val() != '') {
                    var testStartDate = new Date(dateText),
                            testEndDate = new Date(endDateTextBox.val());
                    if (testStartDate > testEndDate) {
                        endDateTextBox.val(dateText);
                    }
                } else {
                    endDateTextBox.text(dateText);
                }
                ;
                $('.dpEnd').datepicker('setStartDate', dateText);
                $('.dpStart').datepicker('hide');
            });
            $('.dpEnd').datepicker().on('changeDate', function(ev) {
                var dateText = $(this).data('date'),
                        startDateTextBox = $('.dpStart input');
                if (startDateTextBox.val() != '') {
                    var testStartDate = new Date(startDateTextBox.val()),
                            testEndDate = new Date(dateText);
                    if (testStartDate > testEndDate) {
                        startDateTextBox.text(dateText);
                    }
                } else {
                    startDateTextBox.val(dateText);
                }
                ;
                $('.dpStart').datepicker('setEndDate', dateText)
                $('.dpEnd').datepicker('hide')
            });
        }
    }
};

//* timepicker
beoro_timepicker = {
    init: function() {
        if ($('.tp-default').length) {
            $('.tp-default').timepicker()
        }
        if ($('.tp-24h').length) {
            $('.tp-24h').timepicker({
                minuteStep: 1,
                template: 'modal',
                showSeconds: true,
                showMeridian: false
            })
        }
        if ($('.tp-noTemplate').length) {
            $('.tp-noTemplate').timepicker({
                template: false,
                showInputs: false,
                minuteStep: 5
            })
        }
        if ($('.tp-noComponent').length) {
            $('.tp-noComponent').timepicker({
                disableFocus: true,
                showInputs: false,
                minuteStep: 5
            })
        }

    }
};

//* colorpicker
beoro_colorpicker = {
    init: function() {
        if ($('#cp1').length) {
            $('#cp1').colorpicker({
                format: 'hex'
            })
        }
        if ($('#cp2').length) {
            $('#cp2').colorpicker()
        }
        if ($('#cp3').length) {
            $('#cp3').colorpicker()
        }
    }
};

//* switch buttons
beoro_switchButtons = {
    init: function() {
        if ($('#sb_off').length) {
            $("#sb_off").iButton();
        }
        if ($('#sb_on').length) {
            $("#sb_on").iButton();
        }
        if ($('#sb_meta_a').length) {
            $("#sb_meta_a").iButton();
        }
        if ($('#sb_meta_b').length) {
            $("#sb_meta_b").iButton();
        }
        if ($('.sb_ch1').length) {
            $(".sb_ch1").iButton({
                resizeHandle: false
            });
        }
        if ($('.sb_ch2').length) {
            $(".sb_ch2").iButton({
                allowRadioUncheck: true
            });
        }
        if ($('#sb_wb').length) {
            $("#sb_wb").iButton({
                labelOn: "A really, really long label",
                labelOff: "Tiny label"
            });
        }
        if ($('#sb_call').length) {
            $("#sb_call").iButton({
                labelOn: "Yes",
                labelOff: "No",
                change: function($input) {
                    $("#sb_call_text").html($input.is(":checked") ? "Callback after change (Yes)" : "Callback after change (No)");
                }
            });
        }
    }
}

//* autosize textarea
beoro_autosize_textarea = {
    init: function() {
        if ($('.autosize_textarea').length) {
            $('.autosize_textarea').each(function() {
                $(this).autosize();
            })
        }
    }
};

//* textarea counter
beoro_textarea_counter = {
    init: function() {
        if ($('.count-textarea1').length) {
             $('#'+$('.count-textarea1').attr('id')).textareaCount({
                'maxCharacterSize': -2,
                'originalStyle': 'originalTextareaInfo',
                'warningStyle': 'warningTextareaInfo',
                'warningNumber': 40
            });
        }
        if ($('.count-textarea2').length) {
           $('.count-textarea2').each(function(key, element){
                   $('#'+$(element).attr('id')).textareaCount({
                       'maxCharacterSize': $('#'+$(element).attr('id')).data('count'),
                       'originalStyle': 'originalTextareaInfo',
                       'warningStyle': 'warningTextareaInfo',
                       'warningNumber': 40,
                       'displayFormat': '#input/#max | #words words'
                   });
           });
         }
        /*
        if ($('#'+$('.count-textarea2').attr('id')).length) {
            $('#'+$('.count-textarea2').attr('id')).textareaCount({
                'maxCharacterSize': $('#'+$('.count-textarea2').attr('id')).data('count'),
                'originalStyle': 'originalTextareaInfo',
                'warningStyle': 'warningTextareaInfo',
                'warningNumber': 40,
                'displayFormat': '#input/#max | #words words'
            })
        }*/
    }
};

//* UI spinners
beoro_uiSpinners = {
    init: function() {
        if ($('#def_spinner').length) {
            $('#def_spinner').spinner();
        }
        if ($('#decimal_spinner').length) {
            $("#decimal_spinner").numeric({
                step: 0.01,
                format: "n", // c - currency, d -  decimal digits, n - number, p - percentage
                buttons: {
                    position: "insideStacked"
                }

            });
        }
        if ($('#numeric_min_max').length) {
            var numericSpinner = $("#numeric_min_max").numeric({
                format: "c", // c - currency, d -  decimal digits, n - number, p - percentage
                min: -20,
                max: 100
            });
        }
        if ($('#time_spinner').length) {
            $.widget("jqAmpUI.timespinner", $.jqAmpUI.spinner, {
                options: {
                    // seconds
                    step: 60 * 1000,
                    // hours
                    page: 60
                },
                _parse: function(value) {
                    if (typeof value === "string") {
                        // already a timestamp
                        if (Number(value) == value) {
                            return Number(value);
                        }
                        return +Globalize.parseDate(value);
                    }
                    return value;
                },
                _format: function(value) {
                    return Globalize.format(new Date(value), "t");
                }
            });

            var timeSpinner = $("#time_spinner").timespinner();
        }
        if ($('#spinners_culture').length) {
            // culture change
            $("#spinners_culture").change(function() {
                var currentTime = timeSpinner.timespinner('value');
                var currentNumeric = numericSpinner.numeric('value');

                Globalize.culture($(this).val());

                timeSpinner.timespinner('value', currentTime);
                numericSpinner.numeric('value', currentNumeric);
            });
        }

        // remove default button styles
        $('.ui-spinner-button').each(function() {
            $(this).removeClass('ui-state-default ui-button');
        })

    }
};

beoro_multiupload1 = {
    init: function() {
        if ($('#multi_upload').length) {
            $("#multi_upload").pluploadQueue({
                // General settings
                runtimes: 'browserplus,html5,flash,silverlight',
                url: '',
                max_file_size: '10mb',
                chunk_size: '1mb',
                unique_names: true,
                browse_button: 'pickfiles',
                // Specify what files to browse for
                filters: [
                    {
                        title: "Image files",
                        extensions: "jpg,gif,png"
                    }],
                // Flash settings
                flash_swf_url: 'js/lib/plupload/js/plupload.flash.swf',
                // Silverlight settings
                silverlight_xap_url: 'js/lib/plupload/js/plupload.silverlight.xap',
                preinit: {
                    Init: function(up, info) {

                    },
                    UploadFile: function(up, file) {
                        // You can override settings before the file is uploaded
                        up.settings.url = $('#dirup').val() + "?" + $('#dirup').attr('dato');
                        //   up.settings.data = up.settings.data+"&"+$('#dirup').attr('dato');

                        // up.settings.multipart_params = {param1: 'value1', param2: 'value2'};
                    }
                },
                // Post init events, bound after the internal events
                init: {
                    Refresh: function(up) {
                        // Called when upload shim is moved
//				log('[Refresh]');
                    },
                    StateChanged: function(up) {
                        // Called when the state of the queue is changed
                        //log('[StateChanged]', up.state == plupload.STARTED ? "STARTED": "STOPPED");
                        if (up.state != plupload.STARTED) {
                            beoro_multiupload1.init();
                            location.reload();
                        }
                    },
                    QueueChanged: function(up) {
                        // Called when the files in queue are changed by adding/removing files
                        //log('[QueueChanged]');
                    },
                    UploadProgress: function(up, file, info) {
                        // Called while a file is being uploaded
                        //log('[UploadProgress]', 'File:', file, "Total:", up.total);

                        if (up.total > 90) {
                            up.total = 85;
                        }

                    },
                    FilesAdded: function(up, files) {
                        // Callced when files are added to queue
                        //log('[FilesAdded]');

                        plupload.each(files, function(file) {
                            //	log('  File:', file);
                            // alert(file.id+file.name)
                        });
                    },
                    FilesRemoved: function(up, files) {
                        // Called when files where removed from queue
                        //log('[FilesRemoved]');

                        plupload.each(files, function(file) {
                            //	log('  File:', file);
                        });
                    },
                    FileUploaded: function(up, file, info) {
                        // Called when a file has finished uploading
                        //	log('[FileUploaded] File:', file, "Info:", info);

                    },
                    ChunkUploaded: function(up, file, info) {
                        // Called when a file chunk has finished uploading
                        //	log('[ChunkUploaded] File:', file, "Info:", info);



                    },
                    Error: function(up, args) {
                        // Called when a error has occured
                        // Handle file specific error and general error
                        if (args) {
                            log('[error]', args, "File:", args.file);
                        } else {
                            log('[error]', args);
                        }
                    }
                }
            });
            $('.plupload_header').remove();
        }



    }
};




//* drag&drop multi-upload
beoro_multiupload = {
    init: function() {
        if ($('#multi_upload').length) {
            $("#multi_upload").pluploadQueue({
                // General settings
                runtimes: 'html5,flash,silverlight',
                url: CMS.globals.base_url + 'back/assets/beoro/js/lib/plupload/examples/dump.php',
                max_file_size: '10mb',
                chunk_size: '1mb',
                unique_names: true,
                browse_button: 'pickfiles',
                // Specify what files to browse for
                filters: [
                    {
                        title: "Image files",
                        extensions: "jpg,gif,png"
                    },
                    {
                        title: "Zip files",
                        extensions: "zip"
                    }
                ],
                // Flash settings
                flash_swf_url: CMS.globals.base_url + 'back/assets/beoro/js/lib/plupload/js/plupload.flash.swf',
                // Silverlight settings
                silverlight_xap_url: CMS.globals.base_url + 'back/assets/beoro/js/lib/plupload/js/plupload.silverlight.xap'
            });
            $('.plupload_header').remove();
        }
    }
};

//* WYSIWG Editor
beoro_wysiwg = {
    init: function() {
         if ($('.wysiwg_editor').length) {
           $('.wysiwg_editor').each(function(key, element){
                   CKEDITOR.replace($(element).attr('id'), {
                          toolbar: 'Standard'
                   });
           });
         }
    }
};


beoro_wysiwg1 = {
    init: function() {
        if ($('#wysiwg_editor1').length) {
            CKEDITOR.replace('wysiwg_editor1', {
                toolbar: 'Standard'
            });
        }
    }
};