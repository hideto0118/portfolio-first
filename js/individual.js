(function(){

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


//scroll smooothly from arrow and menu
function scrollIt(element, duration = 200, easing = 'linear', callback) {
// define timing functions
const easings = {
  linear(t) {
    return t;
  },
  easeInQuad(t) {
    return t * t;
  },
  easeOutQuad(t) {
    return t * (2 - t);
  },
  easeInOutQuad(t) {
    return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
  },
  easeInCubic(t) {
    return t * t * t;
  },
  easeOutCubic(t) {
    return (--t) * t * t + 1;
  },
  easeInOutCubic(t) {
    return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
  },
  easeInQuart(t) {
    return t * t * t * t;
  },
  easeOutQuart(t) {
    return 1 - (--t) * t * t * t;
  },
  easeInOutQuart(t) {
    return t < 0.5 ? 8 * t * t * t * t : 1 - 8 * (--t) * t * t * t;
  },
  easeInQuint(t) {
    return t * t * t * t * t;
  },
  easeOutQuint(t) {
    return 1 + (--t) * t * t * t * t;
  },
  easeInOutQuint(t) {
    return t < 0.5 ? 16 * t * t * t * t * t : 1 + 16 * (--t) * t * t * t * t;
  }
};

// Returns document.documentElement for Chrome and Safari
// document.body for rest of the world
function checkBody() {
  document.documentElement.scrollTop += 1;
  const body = (document.documentElement.scrollTop !== 0) ? document.documentElement : document.body;
  document.documentElement.scrollTop -= 1;
  return body;
}

const body = checkBody();
const start = body.scrollTop;
const startTime = Date.now();

// Height checks to prevent requestAnimationFrame from infinitely looping
// If the function tries to scroll below the visible document area
// it should only scroll to the bottom of the document
const documentHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
const windowHeight = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
const destination = documentHeight - element.offsetTop < windowHeight ? documentHeight - windowHeight : element.offsetTop;

function scroll() {
  const now = Date.now();
  const time = Math.min(1, ((now - startTime) / duration));
  const timeFunction = easings[easing](time);
  body.scrollTop = (timeFunction * (destination - start)) + start;

  if (body.scrollTop === destination) {
    // callback();
    return;
  }
  requestAnimationFrame(scroll);
}
scroll();
}

//Arrow to scroll down
var arrowScroll = document.querySelector(".js-arrow-scroll");
if(arrowScroll){
  arrowScroll.addEventListener("click", function(){
     scrollIt(workDestination, 400, 'easeInQuad');
  });
}

//Scroll down from manu
var contactDestination = document.querySelector("#contact");
var contactJump = document.querySelector(".js-contact-jump");
contactJump.addEventListener("click", function(){
   scrollIt(contactDestination, 400, 'easeInQuad');
});


var controller = new ScrollMagic.Controller();

//shadow fadein email
var sceneEmail = new ScrollMagic.Scene({
    triggerElement: "#footer",
    offset: 68,
    triggerHook: 1
  })
  .setClassToggle("#email", "email-shadow__individual")
  // .addIndicators({name: "email (duration: 0)"})
  .addTo(controller);

}());