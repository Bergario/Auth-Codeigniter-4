$(window).scroll(function () {
  var wScroll = $(this).scrollTop();
  console.log(wScroll);

  $(".jumbotron.satu img").css({
    transform: "translate(0px, " + wScroll / 4 + "%)",
  });

  $(".jumbotron.satu h1").css({
    transform: "translate(0px, " + wScroll / 4 + "%)",
  });

  $(".jumbotron.satu a").css({
    transform: "translate(0px, " + wScroll / 3 + "%)",
  });

  // PANEL

  if (wScroll > $(".panel").offset().top - 500) {
    $(".panel img").each(function (i) {
      setTimeout(function () {
        $(".panel img").eq(i).addClass("muncul");
      }, 200 * (i + 1));
    });

    $(".panel h4").each(function (i) {
      setTimeout(function () {
        $(".panel h4").eq(i).addClass("muncul");
      }, 300 * (i + 1));
    });

    $(".panel p").each(function (i) {
      setTimeout(function () {
        $(".panel p").eq(i).addClass("muncul");
      }, 300 * (i + 1));
    });
  }
  // else {

      $('.panel img').removeClass('muncul')

  //     $('.panel h4').removeClass('muncul').css({
  //         'transform': 'translate(0px, 0)'
  //     });;
  //     $('.panel p').removeClass('muncul').css({
  //         'transform': 'translate(0px, 0)'
  //     });;
  // }

  // if (wScroll > $('.farm').offset().top - 400) {

  //     $('.farm img.img-fluid').addClass('muncul');
  //     $('.farm h3').addClass('muncul');
  //     $('.farm p').addClass('muncul');

  // }

  // if (wScroll > $('.farm2').offset().top - 400) {

  //     $('.farm2 img.img-fluid').addClass('muncul');
  //     $('.farm2 h3').addClass('muncul');
  //     $('.farm2 p').addClass('muncul');

  // }

  // if (wScroll > $('.kartu').offset().top - 400) {

  //     $('.kartu .card').each(function (i) {
  //         setTimeout(function () {
  //             $('.kartu .card').eq(i).addClass('muncul');
  //         }, 200 * (i + 1));

  //     });

  // }

  // GARIS

  if (wScroll > $(".panel").offset().top - 400) {
    $(".line .garis2").addClass("muncul");
  }
  if (wScroll > $(".panel").offset().top - 400) {
    $(".line .garis3").addClass("muncul");
  }

  // FEATURE
  if (wScroll > $(".panel").offset().top - 400) {
    $(".title h1").addClass("muncul");
  }
  if (wScroll > $(".panel").offset().top - 300) {
    $(".row.slide img").addClass("muncul");
  }

  // ABOUT US
  if (wScroll > $(".title").offset().top) {
    $(".title2 h1").addClass("muncul");
  }
  if (wScroll > $(".title").offset().top) {
    $(".line .aboutline1").addClass("muncul");
  }
  if (wScroll > $(".title").offset().top) {
    $(".line .aboutline2").addClass("muncul");
  }
  if (wScroll > $(".title").offset().top + 150) {
    $(".col-md-5.about").addClass("muncul");
  }

  // CONTACTUS
  if (wScroll > $(".tiga").offset().top - 300) {
    $(".section h1").addClass("muncul");
  }
  if (wScroll > $(".tiga").offset().top - 300) {
    $(".col-md.linecontact1").addClass("muncul");
  }
  if (wScroll > $(".tiga").offset().top - 300) {
    $(".col-md.linecontact2").addClass("muncul");
  }
  if (wScroll > $(".tiga").offset().top - 100) {
    $(".row.contactus").addClass("muncul");
  }

});

$(document).ready(function () {
  $("a").on("click", function () {
    var aID = $(this).attr("href");
    var elem = $("" + aID).html();

    $("#product").html(elem);
  });
});

