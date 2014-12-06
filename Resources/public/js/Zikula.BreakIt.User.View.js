/**
 * Zikula.BreakIt.User.View.js
 * 
 * jQuery based JS
 */
( function($) {$(document).ready(function() {
    $(".breakSelect").click(breakOnClick);

    function breakOnClick(e) {
        e.preventDefault();
        $('#ajax-button').prepend("<i id='break-spinner' class='fa fa-cog fa-spin'></i> ");

        // compute controller and generate path
        var path;
        var controller = $('#breakit-ajax-controller').val();
        if (controller == 'new') {
            path = Routing.generate('zikulabreakitmodule_new_break');
        } else if (controller == 'old-unrouted') {
            path = Zikula.Config.baseURL + 'index.php?module=BreakIt&type=ajax&func=oldbreak'
        } else if (controller == 'old-ajax') {
            path = Zikula.Config.baseURL + 'ajax.php?module=BreakIt&type=ajax&func=oldbreak'
        } else {
            // default controller = 'old-routed'
            path = Routing.generate('zikulabreakitmodule_ajax_break');
        }

        // send ajax request and process result
        $.ajax({
            type: "POST",
            data: {
                break: $(this).data('break')
            },
            url: path,
            success: function(result, textStatus, jqXHR) {
                console.log('SUCCESS');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('FAILURE');
            },
            complete: function(jqXHR, textStatus) {
                //console.log(result);
                $('#break-spinner').hide();
                postToModal(jqXHR);
            }
        });
    }
    function postToModal(jqXHR) {
        if (jqXHR.responseText) {
            var m = $('#breakItModal');
            m.find('.modal-body').html(jqXHR.responseText);
            m.modal({
                backdrop: 'static'
            });
            m.modal('show');
        }
    }
});})(jQuery);