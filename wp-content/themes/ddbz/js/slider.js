/**
 * File slider.js.
 *
 * Scripts for the slider. Clicks, keyboard, and touch navigation.
 */

let sliderImages = document.querySelectorAll('.slide'),
  slider = document.querySelector('#slider'),
  current = 0,
  x0 = null;


// Clear all images
function reset() {
  for(let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = 'none';
  }
}

// Initializes Slider
function startSlide(){
  reset();
  sliderImages[0].style.display = 'grid';
}

function slideLeft(){
  reset();
  sliderImages[current - 1].style.display = 'grid';
  current--;
}

function slideRight(){
  reset();
  sliderImages[current + 1].style.display = 'grid';
  current++;
}

document.addEventListener('click', function (event) {
  if (event.target.matches('#arrow-left')) {
    if(current === 0) {
      current = sliderImages.length;
    }
    slideLeft();
  }

  if (event.target.matches('#arrow-right')) {
    if(current === sliderImages.length - 1) {
      current = -1;
    }
    slideRight();
  }
}, false);

document.onkeydown = function(e) {
  switch (e.keyCode) {
    case 37: //left
      e.preventDefault();
      if(current === 0) {
        current = sliderImages.length;
      }
      slideLeft();
      break;
    case 39: //right
      e.preventDefault();
      if(current === sliderImages.length - 1) {
        current = -1;
      }
      slideRight();
      break;
  }
}

// Gesture Support

function handle(e) { 
  x0 = e.clientX; 
  console.log(x0);
};

function swipe(e) {
  if(x0 || x0 === 0) {
    let dx = e.clientX - x0, s = Math.sign(dx);
    console.log(s);
    x0 = null;
  }
};

slider.addEventListener('mousedown', handle, true);
slider.addEventListener('mouseup', swipe, true);

startSlide();
