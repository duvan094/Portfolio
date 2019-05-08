const parallaxWaves = document.querySelectorAll(".parallax");




  window.addEventListener("scroll",changeParallax);

  const initialValue = 0;


function changeParallax(){

  if(window.innerWidth > 720){

    const windowOffset = window.pageYOffset;
    for(let i = 0; i < parallaxWaves.length; i++){

      const depth = parallaxWaves[i].getAttribute("data-depth");
      const movement = (((windowOffset) * depth) + initialValue);
      const translate3d = " translate3d(0,"+ movement +"px,0)";

      parallaxWaves[i].style['-webkit-transform'] = translate3d;
      parallaxWaves[i].style['-moz-transform'] = translate3d;
      parallaxWaves[i].style['-ms-transform'] = translate3d;
      parallaxWaves[i].style['-o-transform'] = translate3d;
      parallaxWaves[i].style.transform = translate3d;
    }
  }
  
}
