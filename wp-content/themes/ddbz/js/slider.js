/**
 * File slider.js.
 *
 * Scripts for the slider. Click and keyboard navigation.
 * Am I doing this right?
 */

let sliderImages = document.querySelectorAll('.slide'),
  arrowLeft = document.querySelector('#arrow-left'),
  arrowRight = document.querySelector('#arrow-right'),
  current = 0;

// Clear all images
function reset() {
  console.log('We getting to this part?');
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

arrowLeft.addEventListener('click', function() {
  if(current === 0) {
    current = sliderImages.length;
  }
  slideLeft();
});

arrowRight.addEventListener('click', function() {
  if(current === sliderImages.length - 1) {
    current = -1;
  }
  slideRight();
});

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

startSlide();
