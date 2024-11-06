//  First carousel
 $(".owl-theme").owlCarousel({
     loop: true,
     margin:10,
     nav: false,
     dots: false,
     autoplay: true,
     autoplayTimeout: 2000,
     smartSpeed: 450,
     responsive: {
       0: {
         items: 1,
       },
       600: {
         items: 3,
       },
       1000: {
         items: 8,
       },
     },
   });
// third carousel
 $(".owl-themee").owlCarousel({
   loop: true,
   nav: false,
   dots: false,
   autoplay: true,
   autoplayTimeout: 2000,
   margin: 10,
   smartSpeed: 450,
   responsive: {
     0: {
       items: 1,
     },
     600: {
       items: 5,
     },
     1000: {
       items: 5,
     },
   },
 });

/// Second carousel
 $(".owl-carousel").owlCarousel({
   loop: true,
   nav: false,
   dots: false,
   autoplay: true,
   autoplayTimeout: 2000,
   margin: 100,
   smartSpeed: 450,
   responsive: {
     0: {
       items: 1,
     },
     600: {
       items: 3,
     },
     1000: {
       items: 3,
     },
   },
 });
//  start about video sec
function openVideo(event) {
  event.preventDefault();
  var videoUrl = event.currentTarget.getAttribute("href");
  var videoFrame = document.getElementById("video-frame");
  var source = videoFrame.querySelector("source");
  source.src = videoUrl;
  videoFrame.load();

  var videoModal = document.getElementById("video-modal");
  videoModal.style.display = "flex";
}

function closeVideo() {
  var videoFrame = document.getElementById("video-frame");
  var source = videoFrame.querySelector("source");
  source.src = "";

  var videoModal = document.getElementById("video-modal");
  videoModal.style.display = "none";
}
//  end about video sec
// blog owl car..
$(".owl-blog").owlCarousel({
  loop: true,
  nav: true,
  navText: [
    "<div class='nav-button owl-prev'>‹</div>",
    "<div class='nav-button owl-next next'>›</div>",
  ],

  dots: false,
  autoplay: true,
  autoplayTimeout: 2000,
  margin: 100,
  smartSpeed: 450,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});
