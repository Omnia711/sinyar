<?php /* Template Name:  contact*/ ?>
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
 

<!-- start contact title -->
<section id="contact-title" class="my-5">
      <div class="contact-h-content">
        <h1>Get in Touch</h1>
      </div>
    </section> 
    <!-- end contact title -->
    <!-- start contact body -->
    <section id="contact-inner-sec">
        <div class="container">
          <div class="row texts">
            <div class="col-md-5">
              <div class="inner-left-o">
                <h2>Get in Touch</h2>
                <p>For all business and collaboration enquiries please contact
                  wanderraway@example.com</p>
              </div>
              <div class="inner-left-oo pt-5 my-1 pb-3">
                <h4>Subscribe to a newsletter</h4>
                <p>Be the first to receive on upcoming contests & more!</p>
                <div class="input-group mt-3 position-relative">
                  <input type="text" placeholder="Enter Your E-mail Address" class=" p-2">
                  <div class="input-icon">
                    <i class="fas fa-paper-plane "></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 offset-1 py-3">
              
              <div class="inner-right-o">
                <textarea cols="40" rows="10" maxlength="2000"  placeholder="Comment" name="your-message" class="w-100 p-2"></textarea>

                <div class="inner-right-inputs row g-1 mb-3 mt-2">
                  <input type="text" placeholder="Name" class="col-md-6 p-2 col-sm-12 ">
                  <input type="text" placeholder="Email" class="col-md-6 p-2 col-sm-12">
              </div>
                
              <div class="bt-button">
                <a href="" class="bt-a">Subscribe </a>
              </div>
            </div>
            
            </div>

          </div>
        </div>
      </section> 
    <!-- end contact body -->

    <!-- start latest third owl-carousel  (visit contact sect)-->

  <section id="latest" class="about-visit">
  <div class="text-center sec-head">
    <h2>Visit Our Instagram</h2>
    <p>Check out our Instagram page for a glimpse into our world! </p>
  </div>

  <div class="owl-carousel owl-themee">
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

    <!-- Start Footer Area -->
<?php get_footer(); ?>