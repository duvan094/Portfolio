const canvas = document.getElementById("stage");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
canvas.style.background = "#000";
const ctx = canvas.getContext("2d");

const Ball = function(x, y, dx, dy, radius, speed, color) {//Object describing a ball
  this.x = x;
  this.y = y;
  this.dx = dx;
  this.dy = dy;
  this.radius = radius;
  this.speed = speed;
  this.color = color;
  this.draw = function(){
    ctx.beginPath();
    ctx.fillStyle = this.color;
    ctx.arc(this.x, this.y, this.radius, 0, 2 * Math.PI);
    ctx.fill();
  };
  this.move = function(){
    this.x += this.speed * this.dx;
    this.y += this.speed * this.dy;
    //Commented code which makes the ball movement a little more random
    /*this.x += this.speed * (this.dx*Math.random()*this.speed);
    this.y += this.speed * (this.dy*Math.random()*this.speed);*/
  };
};

function getRandomColor(){//A function for generating a random color.
  let color = "rgb(";
  for(let i = 0; i<3; i++){
    color +=Math.floor(Math.random()*255);
    if(i!=2){
      color += ",";
    }
  }
  color += ")";
  return color;
}


const balls = [];
const nbrOfBalls = 200;//Change for more balls

for(let i = 0; i < nbrOfBalls; i++){//Initiate the ball array
  const xDir = Math.random()*2-1;
  const yDir = Math.random()*2-1;
  balls.push(new Ball(canvas.width / 2, canvas.height / 2, xDir, yDir, 10, 3,getRandomColor()));
}

function wallHit(ball){
	if(((ball.x+ball.radius)>=canvas.width || (ball.x-ball.radius)<=0) && (ball.y-ball.radius)<=0){	//If it hits an position 0,0 or width,0
		ball.dx *=-1;
		ball.dy *=-1;
	}else	if((ball.x+ball.radius)>=canvas.width || (ball.x-ball.radius)<=0){
    ball.dx *= -1;
    if((ball.x+ball.radius)>=canvas.width){
      ball.x = canvas.width-ball.radius;
    }else{
      ball.x = ball.radius;
    }
	}else if((ball.y-ball.radius)<=0 || (ball.y+ball.radius)>=canvas.height){
		ball.dy *= -1;
    if((ball.y+ball.radius)>=canvas.height){
      ball.y = canvas.height-ball.radius;
    }else{
      ball.y = ball.radius;
    }
  }
}


function Render() {
  ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
  ctx.fillRect(0,0,canvas.width,canvas.height);

  for(let i = 0; i<balls.length;i++){
    balls[i].move();//change position
    balls[i].draw();//draw new position
    wallHit(balls[i]);//check if wallhit
  }


  window.requestAnimationFrame(Render);
}

Render();

window.onresize = function(event) {//resizes the canvas if the window is resized.
  width = window.innerWidth;
  height = window.innerHeight;
  canvas.width = width;
  canvas.height = height;
};
