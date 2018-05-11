var slider;
slider = document.getElementById("hero-slider");

setTimeout(nextImg,1500);

for(var i = 1; i<slider.children.length; i++){
  slider.children[i].classList.add("next");
}


var index = 0;

function nextImg(){
    slider.children[index].classList.remove("current");
    slider.children[index].classList.add("next");

    index = (index+1)%slider.children.length;

    slider.children[index].classList.remove("next");
    slider.children[index].classList.add("current");

  setTimeout(nextImg,1500);
}
