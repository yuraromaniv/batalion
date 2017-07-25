$(document).ready(function() {
	$("#callback-form").submit(function(event) {
        event.preventDefault(); // Cancel the submit
        var siteUrl = window.location.origin;
        $.ajax ({
            url: siteUrl + "/wp-content/themes/batalion/template-parts/form-config.php",
            type: "POST",
            data: $("#callback-form").serialize(),
            dataType: "html",
            beforeSend: funcBefore,
            success: funcSuccess
        });
    });

    function funcBefore() {
        $("#callback-button1").html("Зачекайте...");
    }

    function funcSuccess(data) {
        $("#callback-button1").html("НАДІСЛАТИ ЗАЯВКУ");
        if (data.trim() == "Відправлено") {
            grecaptcha.reset();
        }
        $("#callback-form-message").html(data);
    }
});