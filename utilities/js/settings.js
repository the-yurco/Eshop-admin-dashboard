//! DATA INCLUDE

$(function () {
  $("[data-include]").each(function () {
    let file = $(this).data("include");
    $(this).load(file);
  });
});
