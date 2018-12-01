$(".nav-collapse .nav-left").html($(".nav-menu[nav-component='main_menu']").html());
$(".nav-collapse .nav-right .nav-search").html($(".nav-menu[nav-component='search_bar']").html());
$(".nav-toggle").on("click", function() {
  $(".nav-collapse").slideToggle();
})
