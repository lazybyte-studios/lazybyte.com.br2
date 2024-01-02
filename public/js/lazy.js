import { SW } from "../../_sw.js";


let sw = new SW();// cria o service worker


$(document).ready(function() {

    var imagecollection = [
      { src: "imagens/unsplash1.jpg" },
      { src: "imagens/hero-bg.jpg" },
      {
      video: {
                src: [
                        'https://samplelib.com/lib/preview/mp4/sample-5s.mp4'
                          ],
                          loop: false,
                          mute: true
                      }
                    }
    ];             
  
  $('#vegas').vegas({
      delay: 7000,
      timer: false,
      shuffle: true,
      firstTransition: 'blur',
      firstTransitionDuration: 5000,
      transition: 'zoomOut',
      preload: true,
      transitionDuration: 5000,
      slides: imagecollection,
      overlay: './assets/js/overlays/02.png'
  });

});

let height = window.innerHeight;
let quem = document.getElementById("vegas");

window.onscroll = function(ev) {
  if (window.scrollY > height) {
       quem.style.setProperty('display', 'none', 'important');
  }
  else{
      quem.style.setProperty('display', 'block', 'important'); 
  }
};