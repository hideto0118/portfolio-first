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

//scroll smooothly
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

var helloDestination = document.querySelector("#hello");
var helloJump = document.querySelector(".js-hello-jump");
helloJump.addEventListener("click", function(){
   scrollIt(helloJump, 400, 'easeInQuad');
});

var workDestination = document.querySelector("#work");
var workJump = document.querySelector(".js-work-jump");
workJump.addEventListener("click", function(){
   scrollIt(workDestination, 400, 'easeInQuad');
});

var aboutDestination = document.querySelector("#about");
var aboutJump = document.querySelector(".js-about-jump");
aboutJump.addEventListener("click", function(){
   scrollIt(aboutDestination, 400, 'easeInQuad');
});

var skillDestination = document.querySelector("#skill");
var skillJump = document.querySelector(".js-skill-jump");
skillJump.addEventListener("click", function(){
   scrollIt(skillDestination, 400, 'easeInQuad');
});

var contactDestination = document.querySelector("#contact");
var contactJump = document.querySelector(".js-contact-jump");
contactJump.addEventListener("click", function(){
   scrollIt(contactDestination, 400, 'easeInQuad');
});


  //Get Windown Width
  // var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  // console.log(width);

  // if(width < 500){
  //   document.getElementsByClassName("js-item01__img") = "img/marvel_heroes_square.jpg";
  //  document.getElementsByClassName("js-item05__img") = "img/movieposter_square.jpg.jpg";
  // }

}());

