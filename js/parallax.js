var parallaxWaves = document.querySelectorAll(".hero .parallax");

window.addEventListener("scroll",changeParallax);

var initialValue = 0;

var minimizedScale = "scale(1,1)";
var expandedScale = "scale(1.4,1.4)";
var expanded = false;


function changeParallax(){
  var windowOffset = window.pageYOffset;
  for(var i = 0; i < parallaxWaves.length; i++){

    var depth = parallaxWaves[i].getAttribute("data-depth");
    var movement = (((windowOffset) * depth) + initialValue);
    var translate3d = " translate3d(0,"+ movement +"px,0)";

    parallaxWaves[i].style['-webkit-transform'] = translate3d;
    parallaxWaves[i].style['-moz-transform'] = translate3d;
    parallaxWaves[i].style['-ms-transform'] = translate3d;
    parallaxWaves[i].style['-o-transform'] = translate3d;
    parallaxWaves[i].style.transform = translate3d;
  }

}
