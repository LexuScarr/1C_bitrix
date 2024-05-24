$("#SEND_KONTAKTY").on("click", function () {
  var form = $("#form_kontakty")[0];
  var formData = new FormData(form);

  $.ajax({
    type: "POST",
    url: "/ajax/KONTAKTY_FEEDBACK.php",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "json", // Указываем, что ожидаем JSON-ответ
    success: function (response) {
      if (response > 0) {
        $(".placeholder").each(function (i) {
          if ($(this).hasClass("active")) {
            $(this).removeClass("active");
          }
        });

        $("main").toggleClass("modal");
        $("html").toggleClass("modal");
        var $modal_box = $(".modal-contacts");
        var $container = $modal_box.children(".modal-box__container");
        $modal_box.toggleClass("active");
        $container.slideToggle();
        form.reset();
      }
    },
    error: function (response) {
      // Обработка ошибки
      console.log(response);
    },
  });
});

$("#SEND_PREZENTACIYA").on("click", function () {
  var form = $("#form_prezentaciya")[0];
  var formData = new FormData(form);

  $.ajax({
    type: "POST",
    url: "/ajax/PREZENTACIYA_FEEDBACK.php",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "json", // Указываем, что ожидаем JSON-ответ
    success: function (response) {
      console.log(response);
      form.reset();
    },
    error: function (response) {
      // Обработка ошибки
      console.log(response);
    },
  });
});
