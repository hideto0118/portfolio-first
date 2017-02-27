(function(){

  //showMenu
  var body = document.querySelector("body");
  var navBtn = document.querySelector(".js-navbar__btn");
  var menuList = document.querySelector(".js-menu");
  navBtn.addEventListener("click", displayMenu);

  function displayMenu() {
    menuList.classList.remove("displayNone");
    navBtn.classList.toggle("js-menu-show");
    navBtn.classList.toggle("js-menu-hide");
    body.classList.toggle("js-overflow-hidden");
  }

  //Get Windown Width
  // var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  // console.log(width);

  // if(width < 500){
  //   document.getElementsByClassName("js-item01__img") = "img/marvel_heroes_square.jpg";
  //  document.getElementsByClassName("js-item05__img") = "img/movieposter_square.jpg.jpg";
  // }

}());

