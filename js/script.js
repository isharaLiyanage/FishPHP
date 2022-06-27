$(document).ready(function () {
  $(".item").load("category/All.php");
  $(".ALL").addClass("bthover");
  $(".ALL").click(function () {
    $(".ALL").addClass("bthover");
    $(".category02").removeClass("bthover");
    $(".category03").removeClass("bthover");
    $(".category04").removeClass("bthover");
    $(".category05").removeClass("bthover");
    $(".item").load("category/All.php");
  });

  $(".category01").click(function () {
    $(".category01").addClass("bthover");
    $(".ALL").removeClass("bthover");
    $(".category02").removeClass("bthover");
    $(".category03").removeClass("bthover");
    $(".category04").removeClass("bthover");
    $(".category05").removeClass("bthover");
    $(".item").load("category/category01.php");
  });

  $(".category02").click(function () {
    $(".category02").addClass("bthover");
    $(".ALL").removeClass("bthover");
    $(".category01").removeClass("bthover");
    $(".category03").removeClass("bthover");
    $(".category04").removeClass("bthover");
    $(".category05").removeClass("bthover");
    $(".item").load("category/category02.php");
  });

  $(".category03").click(function () {
    $(".category03").addClass("bthover");
    $(".ALL").removeClass("bthover");
    $(".category01").removeClass("bthover");
    $(".category02").removeClass("bthover");
    $(".category04").removeClass("bthover");
    $(".category05").removeClass("bthover");
    $(".item").load("category/category03.php");
  });
  $(".category04").click(function () {
    $(".category04").addClass("bthover");
    $(".ALL").removeClass("bthover");
    $(".category01").removeClass("bthover");
    $(".category02").removeClass("bthover");
    $(".category03").removeClass("bthover");

    $(".category05").removeClass("bthover");
    $(".item").load("category/category04.php");
  });

  $(".category05").click(function () {
    $(".category05").addClass("bthover");
    $(".ALL").removeClass("bthover");
    $(".category01").removeClass("bthover");
    $(".category02").removeClass("bthover");
    $(".category03").removeClass("bthover");
    $(".category04").removeClass("bthover");

    $(".item").load("category/category05.php");
  });

  //  For Mobile 600px maxWidth
  $(".MoCategory01").click(function () {
    $(".itemMobile01").load("category/MobCategory01.php");
  });

  $(".MoCategory02").click(function () {
    $(".itemMobile02").load("category/MobCategory02.php");
  });

  $(".MoCategory03").click(function () {
    $(".category03").addClass("bthover");
    $(".itemMobile03").load("category/MobCategory03.php");
  });
  $(".MoCategory04").click(function () {
    $(".category04").addClass("bthover");
    $(".itemMobile04").load("category/MobCategory04.php");
  });

  $(".MoCategory05").click(function () {
    $(".category05").addClass("bthover");
    $(".itemMobile05").load("category/MobCategory05.php");
  });
});
