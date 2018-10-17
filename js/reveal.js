var nodes = document.querySelectorAll(".invisible");//An array containing all elements that should be visible when scrolled to.

var invisibleArr = [];
for(var i = nodes.length; i--; invisibleArr.unshift(nodes[i]));


function elementReveald(){

  var windowHeight = window.innerHeight;
  var intervalDefault = 350;//Change interval to change detection ratio

  for(var i = 0; i < invisibleArr.length; i++){

    /*Check if invisible element is visible on screen*/

    if(invisibleArr[i].getAttribute("data-interval")){
      interval = invisibleArr[i].getAttribute("data-interval");
    }else{
      interval = intervalDefault;
    }
    
    if(invisibleArr[i].getBoundingClientRect().top < windowHeight - interval){
      invisibleArr[i].classList.remove("invisible");//remove invisible class
    }else if(invisibleArr[i].getBoundingClientRect().top > windowHeight - interval/2){
      invisibleArr[i].classList.add("invisible");//remove invisible class
    }
  }




//  if(document.querySelectorAll(".invisible").length > 0){//Exit animation frame once array is cleared
      window.requestAnimationFrame(elementReveald);
//  }
}

window.requestAnimationFrame(elementReveald);
