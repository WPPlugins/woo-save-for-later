(function($) {



    $(window).load(function() {
        //subscription add script
        $("#wsfl_dialog").dialog({
            modal: true, title: 'Subscribe To Our Newsletter', zIndex: 10000, autoOpen: true,
            width: '400', resizable: false,
            position: {my: "center", at: "center", of: window},
            dialogClass: 'dialogButtons',
            buttons: [
                {
                    id: "Delete",
                    text: "Subscribe Me",
                    click: function() {
                        // $(obj).removeAttr('onclick');
                        // $(obj).parents('.Parent').remove();
                        var email_id = jQuery('#txt_user_sub_wsfl').val();
                        var data = {
                            'action': 'add_plugin_user_wsfl',
                            'email_id': email_id
                        };
                        // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
                        jQuery.post(ajaxurl, data, function(response) {
                            jQuery('#wsfl_dialog').html('<h2>You have been successfully subscribed');
                            jQuery(".ui-dialog-buttonpane").remove();
                        });
                    }
                },
                {
                    id: "No",
                    text: "No, Remind Me Later",
                    click: function() {
                        jQuery(this).dialog("close");
                    }
                },
            ]
        });
        jQuery("div.dialogButtons .ui-dialog-buttonset button").removeClass('ui-state-default');
        jQuery("div.dialogButtons .ui-dialog-buttonset button").addClass("button-primary woocommerce-save-button");


    });

})(jQuery);