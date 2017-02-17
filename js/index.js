(function(){
  // floating charactor
  var scene = document.getElementById('scene');
  var parallaxCharactor = new Parallax(scene);

  // Parallax with scroll
  var parallaxBg = document.querySelector(".js-parallax");
  var parallaxBg = document.querySelector(".temporary");
  var speed = 0.3;
  var windowYOffset;
  var elBackgrounPos;

  //Arrow to scroll down
  var arrowScroll = document.querySelector(".js-arrow-scroll");
  arrowScroll.addEventListener("click", function(){
     scrollIt(workDestination, 400, 'easeInQuad');
  });

  //using request animation
  var scroll = function (){

    windowYOffset = window.pageYOffset;
    elBackgrounPos = "translateY(" + (windowYOffset * speed) + "px)";

    parallaxBg.style.transform = elBackgrounPos;
  };

  var raf = window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.msRequestAnimationFrame ||
      window.oRequestAnimationFrame;
  // var $window = $(window);
  var lastScrollTop = document.documentElement.scrollTop || document.body.scrollTop;

  if (raf) {
      loop();
  }

  function loop() {
      var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
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

var h_left = document.getElementById("h_left");
var h_middle = document.getElementById("h_middle");
var h_right = document.getElementById("h_right");
var i_main = document.getElementById("i_main");
var i_dot = document.getElementById("i_dot");
var d = document.getElementById("d");
var e = document.getElementById("e");
var t_main = document.getElementById("t_main");
var t_top = document.getElementById("t_top");
var o = document.getElementById("o");

var controller = new ScrollMagic.Controller();

    var tweenHidetoSVG = new TimelineMax()
      .add(TweenMax.to(
            h_left,
            0.3,
            {strokeDashoffset: 0, ease:Linear.easeNone}))
      .add(TweenMax.to(
            h_middle,
            0.1,
            {strokeDashoffset: 0, ease:Linear.easeNone}))
       .add(TweenMax.to(
            h_right,
            0.2,
            {strokeDashoffset: 0, ease:Linear.easeNone}))
      .add(TweenMax.to(
            i_main,
            0.2,
            {strokeDashoffset: 0, ease:Linear.easeNone}))
      .add(TweenMax.to(
            d,
            0.3,
            {strokeDashoffset: 0, ease:Linear.easeNone}))
      .add(TweenMax.to(
            e,
            0.3,
            {strokeDashoffset: 0, ease:Linear.easeNone}))
       .add(TweenMax.to(
            t_main,
            0.2,
            {strokeDashoffset: 0, ease:Linear.easeNone}))
        .add(TweenMax.to(
            o,
            0.2,
            {strokeDashoffset: 0, ease:Linear.easeNone}))
         .add(TweenMax.to(
            i_dot,
            0.1,
            {strokeDashoffset: 0, ease:Linear.easeNone}))
          .add(TweenMax.to(
            t_top,
            0.1,
            {strokeDashoffset: 0, ease:Linear.easeNone}));

  // build scene for Hideto SVG
      var sceneHidetoSvg = new ScrollMagic.Scene({
        triggerElement: "#hideto_draw",
        offset: -100,
        triggerHook: 0.65,
        duration: 300,
        tweenChanges: true})
      .setTween(tweenHidetoSVG)
      // .addIndicators({name: "hideto SVG"})
      .addTo(controller);

      var sceneGalleryItem01 = new ScrollMagic.Scene({
        triggerElement: "#gallery__item01",
        offset: -100,
        reverse:false
      })
      .setTween("#gallery__item01", 0.8, {opacity: 1, visibility: 'visible', ease: Power1.easeOut}) // trigger a TweenMax.to tween
      // .addIndicators({name: "gallery__item01 (duration: 0)"})
      .addTo(controller);

      var sceneGalleryItem02 = new ScrollMagic.Scene({
        triggerElement: "#gallery__item02",
        offset: -100,
        reverse:false
      })
      .setTween("#gallery__item02", 0.8, {opacity: 1, visibility: 'visible', ease: Power1.easeOut}) // trigger a TweenMax.to tween
      // .addIndicators({name: "gallery__item02 (duration: 0)"})
      .addTo(controller);

      var sceneGalleryItem03 = new ScrollMagic.Scene({
        triggerElement: "#gallery__item03",
        offset: -100,
        reverse:false
      })
      .setTween("#gallery__item03", 0.8, {opacity: 1, visibility: 'visible', ease: Power1.easeOut}) // trigger a TweenMax.to tween
      // .addIndicators({name: "gallery__item03 (duration: 0)"})
      .addTo(controller);

      var sceneGalleryItem04 = new ScrollMagic.Scene({
        triggerElement: "#gallery__item04",
        offset: -100,
        reverse:false
      })
      .setTween("#gallery__item04", 0.8, {opacity: 1, visibility: 'visible', ease: Power1.easeOut}) // trigger a TweenMax.to tween
      // .addIndicators({name: "gallery__item04 (duration: 0)"})
      .addTo(controller);

      var sceneGalleryItem05 = new ScrollMagic.Scene({
        triggerElement: "#gallery__item05",
        offset: -100,
        reverse:false
      })
      .setTween("#gallery__item05", 0.8, {opacity: 1, visibility: 'visible', ease: Power1.easeOut}) // trigger a TweenMax.to tween
      // .addIndicators({name: "gallery__item05 (duration: 0)"})
      .addTo(controller);

      var sceneGalleryItem06 = new ScrollMagic.Scene({
        triggerElement: "#gallery__item06",
        offset: -100,
        reverse:false
      })
      .setTween("#gallery__item06", 0.8, {opacity: 1, visibility: 'visible', ease: Power1.easeOut}) // trigger a TweenMax.to tween
      // .addIndicators({name: "gallery__item06 (duration: 0)"})
      .addTo(controller);


    // build tween for About
    var aboutPic = document.getElementById("about__pic__item");
    var aboutDisc = document.getElementById("about__description");
    var tweenAbout = new TimelineMax();
      tweenAbout.to(
                  aboutPic,
                  0.8,
                  {opacity: 1, visibility: 'visible', ease: Power1.easeOut})
                .to(
                  aboutDisc,
                  0.8,
                  {opacity: 1, visibility: 'visible', ease: Power1.easeOut},
                  '-=0.5');

      var sceneAbout = new ScrollMagic.Scene({
        triggerElement: "#about__pic__item",
        offset: -100,
        reverse:false
      })
      .setTween(tweenAbout)  // trigger a TweenMax.to tween
      // .addIndicators({name: "About (duration: 0)"}
      .addTo(controller);

    // build tween for skill
    var skill01 = document.getElementById("skill01");
    var skill02 = document.getElementById("skill02");
    var skill03 = document.getElementById("skill03");
    var skill04 = document.getElementById("skill04");
    var tweenAbout = new TimelineMax();
      tweenAbout.from(
                  skill01,
                  0.5,
                  {opacity: 0, y: 50, ease: Power1.easeOut})
                . from(
                  skill02,
                  0.5,
                  {opacity: 0, y: 50, ease: Power1.easeOut},
                  '-=0.3')
                . from(
                  skill03,
                  0.5,
                  {opacity: 0, y: 50, ease: Power1.easeOut},
                  '-=0.3')
                . from(
                  skill04,
                  0.5,
                  {opacity: 0, y: 50, ease: Power1.easeOut},
                  '-=0.3');

    var sceneSkill = new ScrollMagic.Scene({
      triggerElement: "#skill02",
      offset: -100,
      reverse:false
    })
    .setTween(tweenAbout)  // trigger a TweenMax.to tween
    // .addIndicators({name: "Skill (duration: 0)"}
    .addTo(controller);

    //fadein email
    var sceneEmail = new ScrollMagic.Scene({
        triggerElement: "#footer",
        offset: 68,
        triggerHook: 1
      })
      .setClassToggle("#email", "email-shadow")
      // .addIndicators({name: "email (duration: 0)"})
      .addTo(controller);

}());