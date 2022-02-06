// Functions to execute when the page is loaded
window.onload = function() {

    loading();

    darkModeSetup();

}

// Applies the Fade In Effect for every element in the page
function loading() {

    var bodyElements = document.body.children;
    
    for (let i = 0; i < bodyElements.length; i++) {
        fadeIn(bodyElements[i], 1000);
    }

}

// Creates the Fade In Effect
function fadeIn(el, time) {
    el.style.opacity = 0;           // Initial opacity
  
    var last = +new Date();
    var tick = function() {
      el.style.opacity = +el.style.opacity + (new Date() - last) / time;    // Increases the opacity according to the remaining time
      last = +new Date();
  
      if (+el.style.opacity < 1) {
        (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16);
      }
    }

    tick();
}