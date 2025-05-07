(function ($) {
    "use strict";

    // Handle install and activate plugins button click
    $("#install-activate-button").on("click", function (e) {
        e.preventDefault();
        var button = $(this);
        button.attr("disabled", "disabled");
        button.text("Installing & Activating recommended plugins").addClass("processing-spinner");

        var activationData = {
            action: "one_business_blocks_install_and_activate_plugins",
            nonce: one_business_blocks_localize.nonce,
        };

        $.post(one_business_blocks_localize.ajax_url, activationData, function (response) {
            console.log("asdasd", response);
            if (response.success) {
                window.location.href = one_business_blocks_localize.redirect_url;
            } else {
                button.text(response.data.message);
            }
        });
    });

    // Handle notice dismiss button click
    $(document).on('click', '.notice-info .notice-dismiss', function () {
        var type = $(this).closest('.notice-info').data('notice');

        $.ajax({
            type: 'POST',
            url: one_business_blocks_localize.ajax_url,
            data: {
                action: 'one_business_blocks_dismissed_notice_handler',
                type: type,
                wpnonce: one_business_blocks_localize.dismiss_nonce
            },
            success: function (response) {
                if (response.success) {
                    console.log("Notice dismissed successfully");
                } else {
                    console.log("Failed to dismiss notice");
                }
            }
        });
    });

})(jQuery);
