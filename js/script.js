/*Insert Javascript here*/
var invisibleArr = document.querySelectorAll(".invisible");//An array containing all elements that should be visible when scrolled to.

function elementReveald(){

  var windowHeight = window.innerHeight;
  var interval = 350;//Change interval to change detection ratio

  for(var i = 0; i < invisibleArr.length; i++){

    /*Check if invisible element is visible on screen*/
    if(invisibleArr[i].getBoundingClientRect().top < windowHeight - interval){
      invisibleArr[i].classList.remove("invisible");//remove invisible class
    }
  }

  if(document.querySelectorAll(".invisible").length > 0){//Exit animation frame once array is cleared
      window.requestAnimationFrame(elementReveald);
  }
}

window.requestAnimationFrame(elementReveald);
