var scrolls = document.getElementById("list");
var left = document.getElementById("left");
var right = document.getElementById("right");

left.onclick = function () {
  scrolls.scrollBy(-350, 0);
};
right.onclick = function () {
  scrolls.scrollBy(350, 0);
};
