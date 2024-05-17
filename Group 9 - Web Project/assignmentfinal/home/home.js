//new bar responsive
function myFunction() {
     var x = document.getElementById("myTopnav");
     if (x.className === "topnav") {
       x.className += " responsive";
     } else {
       x.className = "topnav";
     }
}    


//Slide show

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

// typing effect

var TxtType = function(el, toRotate, period) {
     this.toRotate = toRotate;
     this.el = el;
     this.loopNum = 0;
     this.period = parseInt(period, 10) || 2000;
     this.txt = '';
     this.tick();
     this.isDeleting = false;
 };

 TxtType.prototype.tick = function() {
     var i = this.loopNum % this.toRotate.length;
     var fullTxt = this.toRotate[i];

     if (this.isDeleting) {
     this.txt = fullTxt.substring(0, this.txt.length - 1);
     } else {
     this.txt = fullTxt.substring(0, this.txt.length + 1);
     }

     this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

     var that = this;
     var delta = 200 - Math.random() * 100;

     if (this.isDeleting) { delta /= 2; }

     if (!this.isDeleting && this.txt === fullTxt) {
     delta = this.period;
     this.isDeleting = true;
     } else if (this.isDeleting && this.txt === '') {
     this.isDeleting = false;
     this.loopNum++;
     delta = 500;
     }

     setTimeout(function() {
     that.tick();
     }, delta);
 };

 window.onload = function() {
     var elements = document.getElementsByClassName('typewrite');
     for (var i=0; i<elements.length; i++) {
         var toRotate = elements[i].getAttribute('data-type');
         var period = elements[i].getAttribute('data-period');
         if (toRotate) {
           new TxtType(elements[i], JSON.parse(toRotate), period);
         }
     }
     // INJECT CSS
     var css = document.createElement("style");
     css.type = "text/css";
     css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
     document.body.appendChild(css);
 };


 function loadForm(formPath, stylePath, scriptPath) {
  var formContainer = document.getElementById('formContainer');

  // Use fetch or XMLHttpRequest to load the form content
  fetch(formPath + '.html')
      .then(response => response.text())
      .then(data => {
          formContainer.innerHTML = data;
          loadStyles(stylePath);
          loadScripts(scriptPath);
      })
      .catch(error => {
          console.error('Error loading form:', error);
      });
}

// function loadForm(formPath, scriptPath) {
//   var formContainer = document.getElementById('formContainer');

//   // Use fetch or XMLHttpRequest to load the form content
//   fetch(formPath + '.html')
//       .then(response => response.text())
//       .then(data => {
//           formContainer.innerHTML = data;
//           loadScripts(scriptPath);
//       })
//       .catch(error => {
//           console.error('Error loading form:', error);
//       });
// }


// function loadScripts(scriptPaths) {
//   var head = document.head || document.getElementsByTagName('head')[0];
//   scriptPaths.forEach(scriptPath => {
//     var script = document.createElement('script');
//     script.src = scriptPath + '.js';
//     head.appendChild(script);
//   });}