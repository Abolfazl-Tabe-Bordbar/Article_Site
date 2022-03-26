var show_mnue = document.getElementById("show_mnue");
var show_categories = document.getElementById("show_categories");
var categories = document.getElementById("categories");

show_mnue.addEventListener("click", function () {
  categories.style.display = "none";
});

show_categories.addEventListener("click", function () {
  categories.style.display = "flex";
});
var coles_categories = document.getElementById("coles_categories");
coles_categories.addEventListener("click", function () {
  categories.style.display = "none";
});
