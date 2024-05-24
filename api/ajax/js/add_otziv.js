$(".stars-input").on("click", function () {
  count = $(this).attr("value");
});

$("#SEND_OTZIV").on("click", function () {
  var form = $("#form_otizv")[0];
  var formData = new FormData(form);
  formData.append("id_prod", $(this).attr("id_prod"));

  formData.append("SCORE", count);

  $.ajax({
    type: "POST",
    url: "/ajax/add_otziv.php",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "json",
    success: function (response) {
      console.log(response);
      form.reset();
    },
    error: function (response) {
      console.log(response);
    },
  });
});
