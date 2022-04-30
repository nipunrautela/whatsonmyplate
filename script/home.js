$(document).ready(function () {
  $(".navbar").hide();
  const offsetN = $(window).height() / 4;
  $(window).scroll(function () {
    // $(".navbar").stop(true, true);
    // $("#start-button").stop(true, true);
    if (window.pageYOffset >= offsetN) {
      $(".navbar").slideDown(300);
      $("#start-button").fadeOut(100);
    } else {
      $(".navbar").slideUp(200);
      $("#start-button").fadeIn(100);
    }
  });

  $("#start-button").click(function () {
    $("html, body").animate({ scrollTop: offsetN * 4 - 80 }, 1000);
  });
});
