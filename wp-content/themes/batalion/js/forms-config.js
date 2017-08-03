$(document).ready(function() {
  
  $("#callback-form").submit(function(event) {
    event.preventDefault(); // Cancel the submit
    var
      siteUrl = window.location.origin,
      submitButton = $('#callback-button1'),
      form = $(this);

    $.ajax ({
      url: siteUrl + "/wp-content/themes/batalion/template-parts/forms/callback-form.php",
      data: form.serialize(),
      method: "POST",
      beforeSend: function() {
        submitButton.text("Зачекайте...");
      },
      success: function(response) {
        submitButton.text("Надіслати заявку");
        if (response.trim() == "Відправлено") {
          grecaptcha.reset();
          form[0].reset();
          alert("Відправлено");
          $("#callback-form-message").html("");
          return;
        }
        $("#callback-form-message").html(response);
      },
      error: function() {
        alert("Перевірте підключення до Інтернету");
      }
    });
  });

  $("#question-form").submit(function(event) {
    event.preventDefault(); // Cancel the submit
    var
      siteUrl = window.location.origin,
      submitButton = $('#question-form-button'),
      form = $(this);

    $.ajax ({
      url: siteUrl + "/wp-content/themes/batalion/template-parts/forms/question-form.php",
      data: form.serialize(),
      method: "POST",
      beforeSend: function() {
        submitButton.text("Зачекайте...");
      },
      success: function(response) {
        submitButton.text("Надіслати");
        if (response.trim() == "Відправлено") {
          grecaptcha.reset();
          form[0].reset();
          alert("Відправлено");
           $("#question-form-message").html("");
          return;
        }
        $("#question-form-message").html(response);
      },
      error: function() {
        alert("Перевірте підключення до Інтернету");
      }
    });
  });

});