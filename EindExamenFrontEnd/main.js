// All page's: 
TweenMax.from(".logo", 0.8, {opacity: 0, x: -50, delay: 0.4, ease:SlowMo.easeOut}, 0.2);
TweenMax.staggerFrom(".navTxt", 0.6, {opacity: 0, y: 200, delay: 0.3, ease:SlowMo.easeOut}, 0.8)

// Home page:
TweenMax.from(".about", 0.8, {opacity: 0, y: -200, delay: 0.8}, 0.5);
TweenMax.from(".aboutproducts", 0.8, {opacity: 0, x: -200, delay: 1.5}, 0.5)

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

// Product page:
TweenMax.staggerFrom(".card", 0.6, {opacity: 0, y: 200, rotation: 45, scale: 2, delay: 0.5}, 0.2);

// Contact page:
TweenMax.from(".child1", 1.0, {opacity: 0, scale: 0, height:"600px", delay: 0.8, ease:SlowMo.easeOut}, 0.8);
TweenMax.from(".child2", 1.0, {opacity: 0, scale: 0, height:"600px", delay: 1.2, ease:SlowMo.easeOut}, 0.8);

//cart
TweenMax.from(".thanks1", 1.0, {opacity: 0, scale: 0, height:"600px", delay: 0.2, ease:SlowMo.easeOut}, 0.8);
TweenMax.from(".thanks2", 1.0, {opacity: 0, scale: 0, height:"600px", delay: 0.4, ease:SlowMo.easeOut}, 0.8);
TweenMax.from(".thanks3", 1.0, {opacity: 0, scale: 0, height:"600px", delay: 0.6, ease:SlowMo.easeOut}, 0.8);

// Footer page:
TweenMax.from(".footer:hover", 0.5, {heigth:"150px", scale: 1, delay: 0.5, ease:SlowMo.easeout}, 0.5);
