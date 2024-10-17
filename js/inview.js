$(function () {
  $(".js-fadeup").on("inview", function () {
    $(this).addClass("is-inview");
  });
});