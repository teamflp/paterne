
//      // modules
// import { Circle } from './node_modules/progressbar.js/src/circle.js';
// import { Line } from './node_modules/progressbar.js/src/line.js';
 

// Créer un carousel pour les images
let mainPosts = document.querySelectorAll(".main-post");
let posts = document.querySelectorAll(".post");

let i = 0;
let postIndex = 0;
let currentPost = posts[postIndex];
let currentMainPost = mainPosts[postIndex];

let progressInterval = setInterval(progress, 100); // 180

function progress() {
     if (i === 100) {
          i = -5;
          // reset progress bar
          currentPost.querySelector(".progress-bar__fill").style.width = 0;
          document.querySelector(
               ".progress-bar--primary .progress-bar__fill"
          ).style.width = 0;
          currentPost.classList.remove("post--active");

          postIndex++;

          currentMainPost.classList.add("main-post--not-active");
          currentMainPost.classList.remove("main-post--active");

          // reset postIndex to loop over the slides again
          if (postIndex === posts.length) {
               postIndex = 0;
          }

          currentPost = posts[postIndex];
          currentMainPost = mainPosts[postIndex];
     } 
     else {
     i++;
     currentPost.querySelector(".progress-bar__fill").style.width = `${i}%`;
     document.querySelector(
          ".progress-bar--primary .progress-bar__fill"
     ).style.width = `${i}%`;
     currentPost.classList.add("post--active");

     currentMainPost.classList.add("main-post--active");
     currentMainPost.classList.remove("main-post--not-active");
     }
}
// End of carousel

// Créer un mini carousel
const buttonsWrapper = document.querySelector(".map");
const slides = document.querySelector(".inner");

buttonsWrapper.addEventListener("click", e => {
     if (e.target.nodeName === "BUTTON") {
          Array.from(buttonsWrapper.children).forEach(item =>item.classList.remove("active"));
          if (e.target.classList.contains("first")) {
               slides.style.transform = "translateX(-0%)";
               e.target.classList.add("active");
          } else if (e.target.classList.contains("second")) {
               slides.style.transform = "translateX(-33.33333333333333%)";
               e.target.classList.add("active");
          } else if (e.target.classList.contains('third')){
               slides.style.transform = 'translatex(-66.6666666667%)';
               e.target.classList.add('active');
          }
     }
});