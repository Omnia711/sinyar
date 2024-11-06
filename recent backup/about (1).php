<?php /* Template Name:  About*/ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amani
 */

get_header('special');
?>

<!-- Start Page Title Area -->
<!-- start about title -->
<section id="about-title" class="mb-5">
      <div class="about-h-content">
        <h1>About Us</h1>
      </div>
    </section>
     <!-- end about title -->
<!-- End Page Title Area -->

<!-- Start Explore Area -->
<!-- start about content sec -->
<section id="about-hh" class="my-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-md-6">
            <div class="about-sec-img">
              <img
                src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/about-img-2.png"
                alt=""
                width="100%"
                height="100%"
              />
            </div>
          </div>
          <div
            class="col-md-6 about-text"
          >
            <div class="about-sec-content text-center">
              <h2>
                Hi, I'm Nika and<br />
                Nick Loren
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum.
              </p>
              <div class="about-sec-content-sign">
                <p
                  class="sign "
                >
                  Family Loren
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- end about content sec -->
<!-- End Explore Area -->

     <!-- start about video sec -->

    <section id="about-vid">
      <div class="about-vid-block">
        <div class="about-vid-img">
          <img
            loading="lazy"
            src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/about-img-3.jpg"
            alt=""
            width="100%"
            height="auto"
          />
        </div>
        <a
          itemprop="url"
          class="popup-item"
          href="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Video.mp4"
          onclick="openVideo(event)"
        >
          <span class="play-inner">
            <span class="play-svg-holder">
              <svg
                class="qodef-svg--stamp"
                xmlns="http://www.w3.org/2000/svg"
                width="110"
                height="110"
                viewBox="0 0 110 110"
              >
                <g>
                  <path
                    d="M109.2,72.8c-1.9,5.2-11.5,6.4-14.7,10.6c-3.4,4.3-2,13.5-6.5,16.6c-4.6,3.1-13.1-1.3-18.4,0.3c-5.3,1.6-9.7,9.8-15.4,9.7
        c-5.5-0.1-9.6-8.4-15.1-10.2C33.6,98,25,102.1,20.6,99c-4.5-3.3-2.8-12.4-5.9-16.8c-3.2-4.4-12.8-5.9-14.4-11.1
        c-1.6-5.1,5.3-11.5,5.4-16.9C5.8,49-1.1,42.4,0.8,37.2s11.5-6.4,14.7-10.6c3.4-4.3,2-13.5,6.5-16.6c4.6-3.1,13.1,1.3,18.4-0.3
        c5.3-1.6,9.7-9.8,15.4-9.7c5.5,0.1,9.6,8.4,15.1,10.2C76.4,12,85,7.9,89.4,11c4.5,3.3,2.8,12.4,5.9,16.8
        c3.2,4.4,12.8,5.9,14.4,11.1c1.6,5.1-5.3,11.5-5.4,16.9C104.2,61,111.1,67.6,109.2,72.8z"
                    fill="#e84c47"
                  ></path>
                </g>
              </svg>
    
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="40"
                height="40"
                fill="currentColor"
                class="bi bi-play-fill play-svg"
                viewBox="0 0 16 16"
              >
                <path
                  d="M11.445 8.226l-6.468 3.59A.5.5 0 0 1 4 11.59V4.41a.5.5 0 0 1 .977-.226l6.468 3.59a.5.5 0 0 1 0 .852z"
                />
              </svg>
            </span>
          </span>
        </a>
      </div>
      <div id="video-modal" class="video-modal">
        <div class="video-content">
          <video id="video-frame" width="100%" height="100%" controls autoplay>
            <source src="" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          
          <span class="close-modal me-0" onclick="closeVideo()" >
            <svg
                class="qodef-svg--stamp"
                xmlns="http://www.w3.org/2000/svg"
                width="40"
                height="40"
                viewBox="0 0 110 110"
              >
                <g>
                  <path
                    d="M109.2,72.8c-1.9,5.2-11.5,6.4-14.7,10.6c-3.4,4.3-2,13.5-6.5,16.6c-4.6,3.1-13.1-1.3-18.4,0.3c-5.3,1.6-9.7,9.8-15.4,9.7
        c-5.5-0.1-9.6-8.4-15.1-10.2C33.6,98,25,102.1,20.6,99c-4.5-3.3-2.8-12.4-5.9-16.8c-3.2-4.4-12.8-5.9-14.4-11.1
        c-1.6-5.1,5.3-11.5,5.4-16.9C5.8,49-1.1,42.4,0.8,37.2s11.5-6.4,14.7-10.6c3.4-4.3,2-13.5,6.5-16.6c4.6-3.1,13.1,1.3,18.4-0.3
        c5.3-1.6,9.7-9.8,15.4-9.7c5.5,0.1,9.6,8.4,15.1,10.2C76.4,12,85,7.9,89.4,11c4.5,3.3,2.8,12.4,5.9,16.8
        c3.2,4.4,12.8,5.9,14.4,11.1c1.6,5.1-5.3,11.5-5.4,16.9C104.2,61,111.1,67.6,109.2,72.8z"
                    fill="#e84c47"
                  ></path>
                </g>
              </svg>
    
              <svg xmlns="http://www.w3.org/2000/svg"
     width="30"
     height="30"
     fill="#fff"
     class="bi bi-x-circle-fill cls-svg"
     viewBox="0 0 16 16"
     >
  <path fill-rule="evenodd" 
        d="M11.354 4.646a.5.5 0 0 0-.708 0L8 7.293 5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0 0-.708z"/>
</svg>

          </span>
        </div>
      </div>
    </section>
    <!-- end about video sec -->

<!-- start Fav-Dest section  -->
 <section id="FavDest" class="">
    <div class="container">
        <div class="text-center mt-5 sec-head">
          <h2>Favourite Destinations</h2>
          <p>Vestibulum id neque varius, laoreet nisi ut, pharetra metus.</p>
        </div>
        <div
          class="owl-carousel fav-dest-s"
          style="padding: 0px 40px 0px 40px !important"
        >
          <div class="item">
            <div
              class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0"
              style="height: 100%"
            >
              <div class="item-img">
                <img
                  src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-01.jpg"
                  loading="lazy"
                  alt=""
                />
              </div>
              <h5 class="pt-1">Cairo</h5>
            </div>
          </div>

          <div class="item">
            <div
              class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0"
              style="height: 100%"
            >
              <div class="item-img">
                <img
                  src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-04.jpg"
                  loading="lazy"
                  alt=""
                />
              </div>
              <h5 class="pt-1">Cairo</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0"
              style="height: 100%"
            >
              <div class="item-img">
                <img
                  src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-01.jpg"
                  loading="lazy"
                  alt=""
                />
              </div>
              <h5 class="pt-1">Cairo</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0"
              style="height: 100%"
            >
              <div class="item-img">
                <img
                  src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-04.jpg"
                  loading="lazy"
                  alt=""
                />
              </div>
              <h5 class="pt-1">Cairo</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0"
              style="height: 100%"
            >
              <div class="item-img">
                <img
                  src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-01.jpg"
                  loading="lazy"
                  alt=""
                />
              </div>
              <h5 class="pt-1">Cairo</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0"
              style="height: 100%"
            >
              <div class="item-img">
                <img
                  src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-04.jpg"
                  loading="lazy"
                  alt=""
                />
              </div>
              <h5 class="pt-1">Cairo</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0"
              style="height: 100%"
            >
              <div class="item-img">
                <img
                  src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-01.jpg"
                  loading="lazy"
                  alt=""
                />
              </div>
              <h5 class="pt-1">Cairo</h5>
            </div>
          </div>
          <div class="item">
            <div
              class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0"
              style="height: 100%"
            >
              <div class="item-img">
                <img
                  src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-04.jpg"
                  loading="lazy"
                  alt=""
                />
              </div>
              <h5 class="pt-1">Cairo</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Fav-Dest section  -->



<!-- Start City View Area -->
<!-- start Tours&Things section  -->
<section id="tours" class="my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 tours-right-inner">
            <div class="tours-right-inner-details position-relative">
              <div class="img-container" style="overflow: hidden">
                <div class="inner-img">
                  <a href="">
                    <img
                      loading="lazy"
                      width="100%"
                      height="100%"
                      src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-1.jpg"
                      alt="g"
                    />
                  </a>
                </div>
              </div>
              <div class="backg-layer position-absolute bottom-0"></div>

              <div class="layer position-absolute bottom-0">
                <a href="" class="text-white">
                  <h5 class="text-center p-4">
                    Mexico City Tours and Things <br />
                    to Do in 2023
                  </h5>
                </a>
              </div>
            </div>
          </div>
          <div
            class="col-md-4 tours-left-inner"

            style="background-color: #43abe10a; "
          >
            <div class="box border-bottom text-center">
              <div
                class="author-details"
                style="display: flex; justify-content: center"
              >
                <div
                  class="date"
                  style="vertical-align: middle; margin-right: 4px"
                >
                  <a href="#" style="font-size: 14px">08.08.2023</a>
                </div>
                <div class="author">
                  <h6>
                    <span>by </span>
                    <a
                      href="#"
                      class="hover-underline-animation"
                      style="font-size: 14px"
                      >Marina Lorena</a
                    >
                  </h6>
                </div>
              </div>
              <div class="inner-text">
                <h5 class=" ">
                  <a class=" " href=" ">
                    Enjoy in Bali gallery of best bloggers
                  </a>
                </h5>
              </div>
            </div>
            <div class="box border-bottom text-center">
              <div
                class="author-details"
                style="display: flex; justify-content: center"
              >
                <div
                  class="date"
                  style="vertical-align: middle; margin-right: 4px"
                >
                  <a href="#" style="font-size: 14px">08.08.2023</a>
                </div>
                <div class="author">
                  <h6>
                    <span>by </span>
                    <a
                      href="#"
                      class="hover-underline-animation"
                      style="font-size: 14px"
                      >Marina Lorena</a
                    >
                  </h6>
                </div>
              </div>
              <div class="inner-text">
                <h5 class=" ">
                  <a class=" " href=" ">
                    The best way to explore an off-beat destination
                  </a>
                </h5>
              </div>
            </div>
            <div class="box border-bottom text-center">
              <div
                class="author-details"
                style="display: flex; justify-content: center"
              >
                <div
                  class="date"
                  style="vertical-align: middle; margin-right: 4px"
                >
                  <a href="#" style="font-size: 14px">08.08.2023</a>
                </div>
                <div class="author">
                  <h6>
                    <span>by </span>
                    <a
                      href="#"
                      class="hover-underline-animation"
                      style="font-size: 14px"
                      >Marina Lorena</a
                    >
                  </h6>
                </div>
              </div>
              <div class="inner-text">
                <h5 class=" ">
                  <a class=" " href=" ">
                    How to plan a delightfully romantic honeymoon
                  </a>
                </h5>
              </div>
            </div>
            <div class="box text-center">
              <div
                class="author-details"
                style="display: flex; justify-content: center"
              >
                <div
                  class="date"
                  style="vertical-align: middle; margin-right: 4px"
                >
                  <a href="#" style="font-size: 14px">08.08.2023</a>
                </div>
                <div class="author">
                  <h6>
                    <span>by </span>
                    <a
                      href="#"
                      class="hover-underline-animation"
                      style="font-size: 14px"
                      >Marina Lorena</a
                    >
                  </h6>
                </div>
              </div>
              <div class="inner-text">
                <h5 class=" ">
                  <a class=" " href=" ">
                    How to get the best deals on hotels and resorts
                  </a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <!-- end Tours&Things section  -->


<!-- Start Counter Area -->
<!-- start explore section  -->
<section id="explore"  class="my-5">
      <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-center">
          <div class="inner">
            <div class="media-image">
              <a href="">
                <img loading="lazy"  width="100%" height="100%" src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/home-3-img5.jpg" alt="Image">
              </a>
            </div>
            <div class="media-content text-center">
              <div class="media-icon my-2">
                <a href="">Explore</a>
              </div>
              <h4
              >Exploring the tropic’s charm of Maldives and Seychelles</h4>

              <div class="box text-center">
                <div
                  class="author-details"
                  style="display: flex; justify-content: center"
                >
                  <div
                    class="date"
                    style="vertical-align: middle; margin-right: 4px"
                  >
                    <a href="#" style="font-size: 14px">08.08.2023</a>
                  </div>
                  <div class="author">
                    <h6>
                      <span>by </span>
                      <a
                        href="#"
                        class="hover-underline-animation"
                        style="font-size: 14px"
                        >Marina Lorena</a
                      >
                    </h6>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="image-h">
            <a href="/">
              <img loading="lazy" width="100%" height="100%" src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/home-3-img-9.jpg" alt="Image Description">
              <div class="image-overlay"></div>
              <div class="image-text">
                <h3 >
                  Tropics Unveild: a colorful odyssey awaits
                  </h3>
                  
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end explore section  -->
<!-- End Counter Area -->


<!-- start Testimonials Area -->
<!-- start latest third owl-carousel  (visit about sect)-->
<section id="latest" class="about-visit" >
      <div class="text-center sec-head">
        <h2>Visit Our Instagram</h2>
        <p>Check out our Instagram page for a glimpse into our world! </p>
      </div>

      <div class="owl-carousel latest-owl">
        <div class="item"
              >
          <a href="">
            <div class="third-car-img door-shap">
              <img loading="lazy" decoding="async" width="100%" height="100%"
              
              src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Instagram-gallery-01.jpg" >
            </div>
            
          </a>
        </div>
        
        <div class="item"  >
          <a href="">
            <div class="third-car-img">
              <img
                src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-2.jpg"
                width="100%"
                height="100%"
                alt=""
              />
            </div>
            
          </a>
        </div>
        <div class="item">
          <a href="">
            <div class="third-car-img">
              <img loading="lazy" decoding="async" width="100%" height="100%" 
              class="rounded-pill"
            
              src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/Instagram-gallery-03.jpg" >
            </div>
           
          </a>
        </div>
        <div class="item" >
          <a href="">
            <div class="third-car-img">
              <img
                src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-13.jpg"
                width="100%"
                height="100%"
                alt=""
              />
            </div>
            
          </a>
        </div>
        
      </div>
    </section>  
    <!-- end latest third owl-carousel  -->
<!-- End Testimonials Area -->

<!-- vission-about-section  -->
<section class="viss-sec" id="viss-sec">
  <div class="container sm-media">
    <div class="row">
      <div class="col-md-6">
        <div class="about-viss-sect">
          <div class="about-viss-content">
            <h3>Our Mission:</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque fugiat aut explicabo reprehenderit eos assumenda magni in amet. Dignissimos ipsum vel delectus, adipisci dolor quo deleniti eaque ipsa rem optio!
            </p>
          </div>
          <div class="about-viss-img">
            <img loading="lazy"  width="100%" height="100%" src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/home-3-img5.jpg" alt="Image">

          </div>
        </div>
      </div>
      <div class="col-md-6 s-media">
        <div class="about-viss-sect">
          <div class="about-viss-content">
            <h3>Our Vission:</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, labore, quas ipsam repudiandae non vitae qui dolores rerum ullam, fuga veniam obcaecati pariatur est! Earum, officia. Aut nam error sunt!
            </p>
          </div>
          <div class="about-viss-img">
            <img loading="lazy"  width="100%" height="100%" src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/home-3-img5.jpg" alt="Image">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- vission-about-section  -->
 <!-- start Icons section  -->
   <section id="icons-sec" class="my-5 pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="icon-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" width="111" height="115" viewBox="0 0 111 115">
          <path fill="#43abe10d" d="M109.953 76.373c-1.876 5.477-11.553 6.748-14.85 11.141-3.417 4.553-1.992 14.169-6.555 17.371-4.609 3.233-13.189-1.388-18.568.271-5.326 1.643-9.814 10.311-15.506 10.22-5.492-.088-9.7-8.832-15.178-10.708s-14.162 2.454-18.555-.843c-4.553-3.417-2.786-13.016-5.987-17.579-3.233-4.609-12.845-6.216-14.505-11.6-1.643-5.326 5.377-12.051 5.468-17.743.088-5.492-6.78-12.427-4.9-17.9s11.552-6.748 14.849-11.141c3.417-4.553 1.992-14.169 6.555-17.371 4.608-3.233 13.189 1.388 18.568-.271C46.115 8.577 50.602-.091 56.295 0c5.492.087 9.7 8.832 15.177 10.708s14.163-2.455 18.556.843c4.553 3.417 2.786 13.016 5.987 17.579 3.233 4.609 12.846 6.216 14.505 11.6 1.643 5.326-5.377 12.051-5.468 17.743-.091 5.488 6.777 12.423 4.901 17.9Z"></path>
          <path fill="#E84C47" d="M75.821 38.566a.808.808 0 0 0-.7-.144l-13.018 3.406-12.955-3.6h-.027a.738.738 0 0 0-.093-.015.746.746 0 0 0-.09-.008c-.03 0-.06 0-.09.007a.893.893 0 0 0-.094.013h-.027l-13.23 3.461a.809.809 0 0 0-.6.777l-.259 33.706a.808.808 0 0 0 .809.815.817.817 0 0 0 .2-.026l13.019-3.406 12.955 3.6h.023a.811.811 0 0 0 .193.026.8.8 0 0 0 .181-.023h.024l13.23-3.461a.809.809 0 0 0 .6-.777l.259-33.706a.808.808 0 0 0-.31-.645Zm-1.383 10.685-11.625 5.177.086-11.137 11.609-3.037Zm-13.247 5.68-4.5.672.18-.3c1.726-2.826 3.155-5.284 3.155-6.755a4.642 4.642 0 1 0-9.284 0c0 1.46 1.427 3.9 3.151 6.7l.43.7-4.719.7.127-16.588 11.551 3.207Zm-5.922-.524c-1.017-1.654-2.911-4.733-2.911-5.855a3.025 3.025 0 1 1 6.049 0c0 1.135-1.9 4.242-2.918 5.911l-.092.15ZM48.112 40.06l-.083 10.755-.049 6.31-11.627 5.373.149-19.4ZM36.34 64.286l11.627-5.373-.1 13.177-11.609 3.037Zm13.249-5.989 11.589-1.728-.144 18.741-11.551-3.207Zm13.062 17.025.083-10.76.064-8.357 11.625-5.177-.164 21.257Z"></path>
          <path fill="#E84C47" d="M57.501 48.522a2.119 2.119 0 1 0-2.1 2.135 2.1 2.1 0 0 0 2.1-2.135Z"></path>
          </svg> </div>
          <div class="icon-content">
            
            <h5 class=" " style="margin-top: 18px">
              <span class=" ">Lorem, ipsum.</span>
              </h5>
              <p class="" style="margin-top: 6px">Lorem, ipsum dolor.</p>
              
          </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="icon-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" width="111" height="115" viewBox="0 0 111 115">
        <path fill="#43abe10d" d="M109.953 76.373c-1.876 5.477-11.553 6.748-14.85 11.141-3.417 4.553-1.992 14.169-6.555 17.371-4.609 3.233-13.189-1.388-18.568.271-5.326 1.643-9.814 10.311-15.506 10.22-5.492-.088-9.7-8.832-15.178-10.708s-14.162 2.454-18.555-.843c-4.553-3.417-2.786-13.016-5.987-17.579-3.233-4.609-12.845-6.216-14.505-11.6-1.643-5.326 5.377-12.051 5.468-17.743.088-5.492-6.78-12.427-4.9-17.9s11.552-6.748 14.849-11.141c3.417-4.553 1.992-14.169 6.555-17.371 4.608-3.233 13.189 1.388 18.568-.271C46.115 8.577 50.602-.091 56.295 0c5.492.087 9.7 8.832 15.177 10.708s14.163-2.455 18.556.843c4.553 3.417 2.786 13.016 5.987 17.579 3.233 4.609 12.846 6.216 14.505 11.6 1.643 5.326-5.377 12.051-5.468 17.743-.091 5.488 6.777 12.423 4.901 17.9Z"></path>
        <path fill="#E84C47" d="M75.861 55.482a1.911 1.911 0 0 0-1.307-.556H72.92l.033-5.032a3.564 3.564 0 0 0-1.013-2.483 3.366 3.366 0 0 0-1.666-.915l1.438-1.177a.824.824 0 0 0 .131-1.144L61.681 31.497a.823.823 0 0 0-1.144-.1l-1.013.784-1.732-1.634a.86.86 0 0 0-1.176.032L41.847 46.264h-1.895a3.564 3.564 0 0 0-2.483 1.013 3.485 3.485 0 0 0-1.013 2.451l-.1 22.612a3.485 3.485 0 0 0 1.013 2.451 3.38 3.38 0 0 0 2.451 1.048l29.538.131a3.486 3.486 0 0 0 2.451-1.013 3.382 3.382 0 0 0 1.045-2.451v-5.067h1.634a1.825 1.825 0 0 0 1.307-.523 1.725 1.725 0 0 0 .555-1.307l.032-8.822a1.824 1.824 0 0 0-.521-1.305Zm-5.817-10.914-2.254 1.8h-1.47l2.81-2.974Zm-9.116-11.4 1.111 1.405-1.34-1.242Zm-3.66-.849 10.619 10-3.823 4.052-6.208-.033h-1.307L44.1 46.273ZM71.22 72.473a1.853 1.853 0 0 1-.555 1.307 1.726 1.726 0 0 1-1.307.555l-29.538-.13a1.726 1.726 0 0 1-1.307-.556 1.824 1.824 0 0 1-.523-1.307l.065-22.612a2.07 2.07 0 0 1 .555-1.307 1.944 1.944 0 0 1 1.307-.523l16.632.065 7.842.033h5.065a1.852 1.852 0 0 1 1.307.555 1.978 1.978 0 0 1 .555 1.307l-.033 5.065-10.946-.065a1.992 1.992 0 0 0-1.34.555 1.824 1.824 0 0 0-.523 1.307l-.033 8.822a1.883 1.883 0 0 0 .523 1.307 2 2 0 0 0 1.307.555l10.979.033Zm3.5-6.862c0 .065-.032.1-.065.163a.247.247 0 0 1-.163.065l-14.214-.065c-.065 0-.1-.032-.164-.065-.032-.065-.065-.1-.065-.164l.065-8.822a.18.18 0 0 1 .065-.164.248.248 0 0 1 .131-.065l14.247.065a.249.249 0 0 1 .131.065c.065.033.065.1.065.164Z"></path>
        <path fill="#E84C47" d="M64.424 57.998a3.124 3.124 0 1 0 2.222.915 3.133 3.133 0 0 0-2.222-.915Zm1.078 4.248a1.706 1.706 0 0 1-1.111.457 1.794 1.794 0 0 1-1.078-.457 1.705 1.705 0 0 1-.458-1.111 1.8 1.8 0 0 1 .458-1.078 1.529 1.529 0 0 1 1.111-.425 1.593 1.593 0 0 1 1.078.425 1.705 1.705 0 0 1 .457 1.111 1.8 1.8 0 0 1-.457 1.078Z"></path>
        </svg> </div>
        <div class="icon-content">
          <h5 class=" " style="margin-top: 18px">
            <span class=" ">Lorem, ipsum.</span>
            </h5>
            <p class="" style="margin-top: 6px">Lorem, ipsum dolor.</p>
            
        </div>
        </div>
      <div class="col-md-4 text-center">
        <div class="icon-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" width="111" height="115" viewBox="0 0 111 115">
          <path fill="#43abe10d" d="M109.953 76.373c-1.876 5.477-11.553 6.748-14.85 11.141-3.417 4.553-1.992 14.169-6.555 17.371-4.609 3.233-13.189-1.388-18.568.271-5.326 1.643-9.814 10.311-15.506 10.22-5.492-.088-9.7-8.832-15.178-10.708s-14.162 2.454-18.555-.843c-4.553-3.417-2.786-13.016-5.987-17.579-3.233-4.609-12.845-6.216-14.505-11.6-1.643-5.326 5.377-12.051 5.468-17.743.088-5.492-6.78-12.427-4.9-17.9s11.552-6.748 14.849-11.141c3.417-4.553 1.992-14.169 6.555-17.371 4.608-3.233 13.189 1.388 18.568-.271C46.115 8.577 50.602-.091 56.295 0c5.492.087 9.7 8.832 15.177 10.708s14.163-2.455 18.556.843c4.553 3.417 2.786 13.016 5.987 17.579 3.233 4.609 12.846 6.216 14.505 11.6 1.643 5.326-5.377 12.051-5.468 17.743-.091 5.488 6.777 12.423 4.901 17.9Z"></path>
          <path fill="#E84C47" d="M73.449 42.325H49.191v-2.692a1.452 1.452 0 0 0-1.433-1.433h-9.861a1.418 1.418 0 0 0-1.433 1.433v2.692H35.31a3.027 3.027 0 0 0-3.041 3.006v24.538a3.044 3.044 0 0 0 3.041 3.041h38.135a3.044 3.044 0 0 0 3.041-3.041V45.331a3.027 3.027 0 0 0-3.037-3.006Zm-35.233-2.373h9.228v2.377h-9.228Zm36.527 29.922a1.311 1.311 0 0 1-1.293 1.293H35.315a1.311 1.311 0 0 1-1.293-1.293V45.331a1.278 1.278 0 0 1 1.293-1.258H73.45a1.278 1.278 0 0 1 1.293 1.258Z"></path>
          <path fill="#E84C47" d="M47.898 46.904a10.714 10.714 0 1 0 10.7 10.7 10.708 10.708 0 0 0-10.7-10.7Zm0 19.68a8.966 8.966 0 1 1 8.948-8.984 8.976 8.976 0 0 1-8.948 8.98Z"></path>
          <path fill="#E84C47" d="M71.348 46.415h-6.082a2.222 2.222 0 0 0-2.2 2.237v.7a2.2 2.2 0 0 0 2.2 2.2h6.082a2.2 2.2 0 0 0 2.2-2.2v-.7a2.222 2.222 0 0 0-2.2-2.237Zm.455 2.936a.455.455 0 0 1-.455.455h-6.082a.455.455 0 0 1-.454-.455v-.7a.485.485 0 0 1 .454-.49h6.082a.485.485 0 0 1 .455.49Z"></path>
          <path fill="#E84C47" d="M47.898 50.719a6.9 6.9 0 1 0 6.886 6.886 6.894 6.894 0 0 0-6.886-6.886Zm0 12.059a5.156 5.156 0 1 1 5.139-5.174 5.162 5.162 0 0 1-5.139 5.169Z"></path>
          </svg> </div>
          <div class="icon-content">
            
            <h5 class=" " style="margin-top: 18px">
              <span class=" ">Lorem, ipsum.</span>
              </h5>
              <p class="" style="margin-top: 6px">Lorem, ipsum.</p>
              
          </div>
          
      </div>

    </div>
  </div>
</section>  
    <!-- end Icons section  -->

<!-- Start Footer Area -->
<?php get_footer(); ?>