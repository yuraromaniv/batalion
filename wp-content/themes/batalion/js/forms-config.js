$(document).ready(function() {
  $("#callback-form").submit(function(event) {
    event.preventDefault(); // Cancel the submit
    var siteUrl = window.location.origin;
    $.ajax ({
      url: siteUrl + "/wp-content/themes/batalion/template-parts/forms/callback-form.php",
      type: "POST",
      data: $("#callback-form").serialize(),
      dataType: "html",
      beforeSend: function() {
        $("#callback-button1").html("Зачекайте...");
      },
      success: function(data) {
        $("#callback-button1").html("Надіслати");
        if (data.trim() == "Відправлено") {
          grecaptcha.reset();
          $("#callback-form")[0].reset();
        }
        $("#callback-form-message").html(data);
      }
    });
  });

  $("#question-form").submit(function(event) {
    event.preventDefault(); // Cancel the submit
    var siteUrl = window.location.origin;
    $.ajax ({
      url: siteUrl + "/wp-content/themes/batalion/template-parts/forms/question-form.php",
      type: "POST",
      data: $("#question-form").serialize(),
      dataType: "html",
      beforeSend: function() {
        $("#question-form-button").html("Зачекайте...");
      },
      success: function(data) {
        $("#question-form-button").html("Надіслати");
        if (data.trim() == "Відправлено") {
          grecaptcha.reset();
          $("#question-form")[0].reset();
        }
        $("#question-form-message").html(data);
      }
    });
  });

});