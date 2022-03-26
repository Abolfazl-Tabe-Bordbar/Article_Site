$(document).ready(function () {
  var show_mnue = document.getElementById("show_mnue");
  var minify = document.getElementById("minify");
  show_mnue.addEventListener("click", function () {
    minify.style.display = "flex";
    show_mnue.style.display = "none";
    close.style.display = "flex";
    document.body.style.overflow = "hidden";
  });
  var close = document.getElementById("colse");
  close.addEventListener("click", function () {
    minify.style.display = "none";
    document.body.style.overflowY = "auto";
    show_mnue.style.display = "flex";
    close.style.display = "none";
  });

  var show_search_box = document.getElementById("show_search_box");
  var search_box = document.getElementById("search_box");
  var cloes_search_box = document.getElementById("cloes_search_box");
  show_search_box.addEventListener("click", function () {
    search_box.style.display = "flex";
    shopping_bag.style.display = "none";
  });
  cloes_search_box.addEventListener("click", function () {
    search_box.style.display = "none";
  });
  var show_shopping_bag = document.getElementById("show_shopping_bag");
  var shopping_bag = document.getElementById("shopping_bag");
  show_shopping_bag.addEventListener("click", function () {
    shopping_bag.style.display = "flex";
    search_box.style.display = "none";
  });
  var cloes_shopping_bag = document.getElementById("cloes_shopping_bag");
  cloes_shopping_bag.addEventListener("click",function () {
    shopping_bag.style.display = "none";
    
  });
  var show_mini_shopping_bag = document.getElementById("show_mini_shopping_bag");
  var mini_shopping_bag = document.getElementById("mini_shopping_bag");
  show_mini_shopping_bag.addEventListener("click",function () {
    mini_shopping_bag.style.display = "flex";
  });
  var cloes_mini_shopping_bag = document.getElementById("cloes_mini_shopping_bag");
  cloes_mini_shopping_bag.addEventListener("click",function () {
    mini_shopping_bag.style.display = "none";
    
  });
  $(window).resize(function () {
    if (window.innerWidth < 1024) {
      shopping_bag.style.display = "none";
      search_box.style.display = "none";
      $("div").removeAttr("data-aos");
      minify.style.display = "none";
      document.body.style.overflowY = "auto";
      show_mnue.style.display = "flex";
      close.style.display = "none";
    }
  });
 
});
var number_of_shop = document.getElementById("number_of_shop");
if (number_of_shop.innerHTML == "") {
  number_of_shop.style.display = "none";
}
if (window.innerWidth < 1024) {
  $("div").removeAttr("data-aos");
}
