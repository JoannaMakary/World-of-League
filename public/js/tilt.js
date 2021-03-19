$(document).ready(function () {
  var movementStrength = 25;
  var height = movementStrength / $(window).height();
  var width = movementStrength / $(window).width();
  $("#league-trans").mousemove(function (e) {
    var pageX = e.pageX - $(window).width() / 2;
    var pageY = e.pageY - $(window).height() / 2;
    var newvalueX = width * pageX * -1 - 25;
    var newvalueY = height * pageY * -1 - 50;
    $("#league-trans").css("background-position", newvalueX + "px     " + newvalueY + "px");
  });

  var images = ["lux-main.png", "jinx-main.png", "akali-main.png"];
  $(function () {
    var i = 0;
    $("#league-trans").css(
      "background-image",
      "url(http://localhost/world-of-league/public/images/" + images[i] + ")"
    );
    setInterval(function () {
      i++;
      if (i == images.length) {
        i = 0;
      }
      $("#league-trans").fadeOut("slow", function () {
        $(this).css(
          "background-image",
          "url(http://localhost/world-of-league/public/images/" + images[i] + ")"
        );
        $(this).fadeIn("slow");
      });
    }, 5000);
  });
});
