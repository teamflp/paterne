
//      // modules
// import { Circle } from './node_modules/progressbar.js/src/circle.js';
// import { Line } from './node_modules/progressbar.js/src/line.js';
 
//  //progresse bar animation pour les compétences
// var bar = new Circle(bar, {
//      color: '#aaa',
//      // This has to be the same size as the maximum width to
//      // prevent clipping
//      strokeWidth: 4,
//      trailWidth: 1,
//      easing: 'easeInOut',
//      duration: 1400,
//      text: {
//           autoStyleContainer: false
//      },
//      from: { color: '#aaa', width: 1 },
//      to: { color: '#00aaff', width: 4 },
//      // Set default step function for all animate calls
//      step: function (state, circle) {
//           circle.path.setAttribute('stroke', state.color);
//           circle.path.setAttribute('stroke-width', state.width);

//           var value = Math.round(circle.value() * 100);
//           if (value === 0) {
//                circle.setText('');
//           } else {
//                circle.setText(value);
//           }
//      }
// });

// bar.animate(0.8); // Number from 0.0 to 1.0


// var bar = new Line('.bar', {
//      strokeWidth: 4,
//      easing: 'easeInOut',
//      duration: 1400,
//      color: '#FFEA82',
//      trailColor: '#eee',
//      trailWidth: 1,
//      svgStyle: { width: '100%', height: '100%' },
//      text: {
//           style: {
//                // Text color.
//                // Default: same as stroke color (options.color)
//                color: '#999',
//                position: 'absolute',
//                padding: 0,
//                margin: 0,
//                transform: null
//           },
//            // Set default step animation duration (in milliseconds).
//           autoStyleContainer: false,
//      },
// });

// // Créer un mini carousel pour les images
// var carousel = new carousel('.carousel', {
//      duration: 200,
//      loop: true,
//      indicators: true,
//      controls: false,
//      onChange: function (index) {
//           console.log(index);
//      }
// })


// // Créer un mini carousel pour les images
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

