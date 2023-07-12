$(document).ready(function () {
  $(".hamburger").click(function () {
    $(".menu").fadeIn(100);
  });
  $(".close_menu").click(function () {
    $(".menu").fadeOut(100, function () {
      $(this).css("display", "");
    });
  });
});
