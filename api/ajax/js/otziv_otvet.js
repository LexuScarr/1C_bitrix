$(document).on("click", ".product_reviews__answer", function () {
  var id_otziv = $(this).attr("id_otziv");
  $("#OZIV_OTVET").attr("id_otziv", id_otziv);
});

$("#OZIV_OTVET").on("click", function () {
  var form = $("#form_otizvOtv")[0];
  var formData = new FormData(form);
  formData.append("id_comp", $(this).attr("id_comp"));
  formData.append("id_otziv", $(this).attr("id_otziv"));
  formData.append("name_dolj", $(this).attr("name_dolj"));
  // formData.append('id_otziv', $('#otziv').attr('id_otziv') );

  $.ajax({
    type: "POST",
    url: "/ajax/otvet_otziv.php",
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
