
/* aos init */
AOS.init({

  offset: 200,
  duration: 1000,
  easing: 'cubic-bezier(.17,.67,.64,.95)',
  delay: 100,
  once: true

})

var lastScroll = 0;
$(window).scroll(function (event) {
  var st = $(this).scrollTop();
  // Make sure they scroll more than delta
  if (Math.abs(lastScroll - st) <= 5)
    return;

  if (st < lastScroll) {
    $("#header").css("top", "0");
  } else {
    $("#header").css("top", "-4rem");
  }
  lastScroll = st;
});

$(function () {

  /* autosize */
  autosize($('#message'));

$('#loading img').delay(1200).fadeOut("fast");

$('#loading').delay(1700).fadeOut("fast");
  // /* toggle button */
  // var $toggleButton = $('.toggle-button');
  // $toggleButton.on('click', function () {
  //   $(this).toggleClass('button-open');
  // });

  /* hamburger */
  var $hamburger = $("#hamburger");
  $hamburger.on("click", function (e) {
    var $nav = $("#myNav");
    if ($hamburger.hasClass("is-active")) {
      $nav.css("height", "0");
    } else {
      $nav.css("height", "100%");
    }
    $hamburger.toggleClass("is-active")
  });





});
