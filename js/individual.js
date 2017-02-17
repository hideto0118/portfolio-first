(function(){

  var controller = new ScrollMagic.Controller();

  //fadein email
    var sceneEmail = new ScrollMagic.Scene({
        triggerElement: "#footer",
        offset: 68,
        triggerHook: 1
      })
      .setClassToggle("#email", "email-shadow__individual")
      // .addIndicators({name: "email (duration: 0)"})
      .addTo(controller);

}());