(function(){
  // floating charactor
  // var scene = document.getElementById('scene');
  // var parallaxCharactor = new Parallax(scene);

  // Parallax with scroll
  var parallaxBg = document.querySelectorAll(".js-parallax");
  var speed = 0.3;

  // window.addEventListener("scroll", function(){
  //   [].slice.call(parallaxBg).forEach(function(el,i){

  //     var windowYOffset = window.pageYOffset;
  //     var elBackgrounPos = "0 " + (windowYOffset * speed) + "px";

  //     el.style.backgroundPosition = elBackgrounPos;

  //   });
  // });


  //using request animation
  var scroll = function () {
    // do the onscroll stuff you want here
    [].slice.call(parallaxBg).forEach(function(el){

      // console.log(el);

      var windowYOffset = window.pageYOffset;
      var elBackgrounPos = "0 " + (windowYOffset * speed) + "px";

      // console.log(elBackgrounPos);
      el.style.backgroundPosition = elBackgrounPos;

    });
  };

  var raf = window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.msRequestAnimationFrame ||
      window.oRequestAnimationFrame;
  var $window = $(window);
  var lastScrollTop = $window.scrollTop();

  if (raf) {
      loop();
  }

  function loop() {
      var scrollTop = $window.scrollTop();
      if (lastScrollTop === scrollTop) {
          raf(loop);
          return;
      } else {
          lastScrollTop = scrollTop;

          // fire scroll function if scrolls vertically
          scroll();
          raf(loop);
      }
  }


  //showMenu
  var body = document.querySelector("body");
  var navBtn = document.querySelector(".js-navbar__btn");
  var menuList = document.querySelector(".js-menu__list");
  navBtn.addEventListener("click", displayMenu);

  function displayMenu() {
    menuList.style.display = "flex";
    navBtn.classList.toggle("js-menu-show");
    navBtn.classList.toggle("js-menu-hide");
    body.classList.toggle("js-overflow-hidden");
  }


  // Arrow to scroll down
  $(".js-scroll").on("click",function(){
    var offset = $("#work").offset();
    $("html, body").animate({
      scrollTop: offset.top
    });
  });

  //Menu jump
  $(".js-hello-jump").on("click",function(){
    var offset = $("#hello").offset();
    $("html, body").animate({
      scrollTop: offset.top
    });
  });

  $(".js-work-jump").on("click",function(){
    var offset = $("#work").offset();
    $("html, body").animate({
      scrollTop: offset.top
    });
  });

  $(".js-about-jump").on("click",function(){
    var offset = $("#about").offset();
    $("html, body").animate({
      scrollTop: offset.top
    });
  });

   $(".js-skill-jump").on("click",function(){
    var offset = $("#skill").offset();
    $("html, body").animate({
      scrollTop: offset.top
    });
  });

    $(".js-contact-jump").on("click",function(){
    var offset = $("#contact").offset();
    $("html, body").animate({
      scrollTop: offset.top
    });
  });

  //Get Windown Width
  // var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  // console.log(width);

  // if(width < 500){
  //   document.getElementsByClassName("js-item01__img") = "img/marvel_heroes_square.jpg";
  //  document.getElementsByClassName("js-item05__img") = "img/movieposter_square.jpg.jpg";
  // }


//hideto svg animation
var h_left = document.getElementById("h_left");
var h_i = document.getElementById("h_i");
var deto = document.getElementById("deto");
var i_dot = document.getElementById("i_dot");
var t_top = document.getElementById("t_top");

// var length = t_top.getTotalLength();
// console.log(length);

// var controller = new ScrollMagic.Controller();

//  // build tween
//     var tween = new TimelineMax()
//       .add(TweenMax.to(
//             h_left,
//             0.1,
//             {strokeDashoffset: 0, ease:Linear.easeNone}))
//       .add(TweenMax.to(
//             h_i,
//             0.2,
//             {strokeDashoffset: 0, ease:Linear.easeNone}))
//       .add(TweenMax.to(
//             deto,
//             0.8,
//             {strokeDashoffset: 0, ease:Linear.easeNone}))
//       .add(TweenMax.to(
//             i_dot,
//             0.3,
//             {strokeDashoffset: 0, ease:Linear.easeNone}))
//       .add(TweenMax.to(
//             t_top,
//             0.3,
//             {strokeDashoffset: 0, ease:Linear.easeNone}));

//   // build scene
//       var sceneSvg = new ScrollMagic.Scene({
//         triggerElement: "#hideto_draw",
//         offset: -100,
//         triggerHook: 0.65,
//         duration: 300,
//         tweenChanges: true})
//       .setTween(tween)
//       //.addIndicators() // add indicators (requires plugin)
//       .addTo(controller);

}());

