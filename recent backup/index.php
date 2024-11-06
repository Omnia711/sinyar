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

get_header();
?>

<section class="new-s-slider">
  <div class="main-s-slider owl-carousel owl-theme">
    <?php if (have_rows('الاسلايدر_الاساسي', 'option')) : while (have_rows('الاسلايدر_الاساسي', 'option')) : the_row(); ?>
        <?php
        $video_url = get_sub_field('الفيديو');
        if ($video_url) :
        ?>
          <div class="item">
            <div class="item-s-slider-video">
              <video src="<?php echo esc_url($video_url); ?>" autoplay muted loop></video>
              <div class="desi-s-img">
                <h3><?php the_sub_field('وصف_الصورة'); ?></h3>
              </div>
            </div>
          </div>
        <?php else :
        ?>
          <div class="item">
            <div class="item-s-slider-img" data-fancybox="galleryPhoto">
              <div class="bg-s-slider">
                <img src="<?php the_sub_field('الصورة'); ?>" alt="">
              </div>
              <div class="desi-s-img">
                <h3><?php the_sub_field('وصف_الصورة'); ?></h3>
              </div>
            </div>
          </div>
        <?php endif; ?>
    <?php endwhile;
    else : endif; ?>
  </div>
</section>








<!-- Start Ecorik Slider Area -->
<!-- <section class="eorik-slider-area">
    <div class="video-slider">
        <div class="container">
            <div class="row">
                <div class="banner-desc col-md-5">
                    <h1><?php the_field('عنوان_الفيديو_الأول', 'option'); ?></h1>
                    <p><?php the_field('توصيف_الفيديو', 'option'); ?></p>
                    <a href="about.html" class="default-btn">
                        <?php _e('[:en]explore More[:ar] اعرف المزيد '); ?>
                        <i class="flaticon-right"></i>
                    </a>
                </div>
                <div class="banner-images col-md-7">
                    <img src="<?php the_field('الصورة_الأولي', 'option'); ?>" class="f-b-img" alt="">
                    <img src="<?php the_field('الصورة_الثانية', 'option'); ?>" class="s-b-img" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="white-shape">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/home-one/slider/white-shape.png" alt="Image">
    </div>
    <div class="social-link">
        <ul>
            <?php if (have_rows('السوشيال_ميديا', 'option')) : ?>
                <?php while (have_rows('السوشيال_ميديا', 'option')) : the_row(); ?>
                    <li>
                        <a href="<?php the_sub_field('رابط_السوشيال'); ?>">
                            <?php the_sub_field('ايقونة_السوشيال'); ?>
                        </a>
                    </li>
            <?php // End loop.
                endwhile;
              // No value.
              else :
              // Do something...
              endif; ?>
        </ul>
    </div>
</section> -->
<!-- End Ecorik Slider Area -->

<!-- Start Check Area -->
<div class="check-area mb-minus-70">
  <div class="container">
    <form class="check-form">
      <div class="row align-items-center">
        <div class="col-lg-3 col-sm-6">
          <div class="check-content">
            <p>Arrival Date</p>
            <div class="form-group">
              <div class="input-group date" id="datetimepicker-1">
                <i class="flaticon-calendar"></i>
                <input type="text" class="form-control" placeholder="29/02/2020">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-th"></i>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="check-content">
            <p>Departure Date</p>
            <div class="form-group">
              <div class="input-group date" id="datetimepicker-2">
                <i class="flaticon-calendar"></i>
                <input type="text" class="form-control" placeholder="29/02/2020">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-th"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="check-content">
                <p>Adults</p>
                <div class="form-group">
                  <select name="adult" class="form-content">
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="check-content">
                <p>Children</p>
                <div class="form-group">
                  <select name="adult" class="form-content">
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="check-btn check-content mb-0">
            <button class="default-btn">
              Check Availability
              <i class="flaticon-right"></i>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End Check Section -->


<!-- start Fav-Dest section  -->
<section id="FavDest">
  <div class="container">
    <div class="text-center mt-5 sec-head">
      <h2>Favourite Destinations</h2>
      <p>Vestibulum id neque varius, laoreet nisi ut, pharetra metus.</p>
    </div>
    <div class="owl-carousel fav-dest-s" style="padding: 0px 40px 0px 40px !important">
      <div class="item">
        <div class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0" style="height: 100%">
          <div class="item-img">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-01.jpg" loading="lazy" alt="" />
          </div>
          <h5 class="pt-1">Cairo</h5>
        </div>
      </div>

      <div class="item">
        <div class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0" style="height: 100%">
          <div class="item-img">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-04.jpg" loading="lazy" alt="" />
          </div>
          <h5 class="pt-1">Cairo</h5>
        </div>
      </div>
      <div class="item">
        <div class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0" style="height: 100%">
          <div class="item-img">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-01.jpg" loading="lazy" alt="" />
          </div>
          <h5 class="pt-1">Cairo</h5>
        </div>
      </div>
      <div class="item">
        <div class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0" style="height: 100%">
          <div class="item-img">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-04.jpg" loading="lazy" alt="" />
          </div>
          <h5 class="pt-1">Cairo</h5>
        </div>
      </div>
      <div class="item">
        <div class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0" style="height: 100%">
          <div class="item-img">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-01.jpg" loading="lazy" alt="" />
          </div>
          <h5 class="pt-1">Cairo</h5>
        </div>
      </div>
      <div class="item">
        <div class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0" style="height: 100%">
          <div class="item-img">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-04.jpg" loading="lazy" alt="" />
          </div>
          <h5 class="pt-1">Cairo</h5>
        </div>
      </div>
      <div class="item">
        <div class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0" style="height: 100%">
          <div class="item-img">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-01.jpg" loading="lazy" alt="" />
          </div>
          <h5 class="pt-1">Cairo</h5>
        </div>
      </div>
      <div class="item">
        <div class="item-content text-center d-flex flex-column align-items-center justify-content-center px-0" style="height: 100%">
          <div class="item-img">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/Home-1-destination-04.jpg" loading="lazy" alt="" />
          </div>
          <h5 class="pt-1">Cairo</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end Fav-Dest section  -->


<!-- Start icons -->
<!-- start Tours&Things section  -->
<section id="tours">
  <div class="container">
    <div class="row">
      <div class="col-md-8 tours-right-inner">
        <div class="tours-right-inner-details position-relative">
          <div class="img-container" style="overflow: hidden">
            <div class="inner-img">
              <a href="">
                <img loading="lazy" width="100%" height="100%" src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-1.jpg" alt="g" />
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
      <div class="col-md-4 tours-left-inner" style="background-color: #e84c470d">
        <div class="box border-bottom text-center">
          <div class="author-details" style="display: flex; justify-content: center">
            <div class="date" style="vertical-align: middle; margin-right: 4px">
              <a href="#" style="font-size: 14px">08.08.2023</a>
            </div>
            <div class="author">
              <h6>
                <span>by </span>
                <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
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
          <div class="author-details" style="display: flex; justify-content: center">
            <div class="date" style="vertical-align: middle; margin-right: 4px">
              <a href="#" style="font-size: 14px">08.08.2023</a>
            </div>
            <div class="author">
              <h6>
                <span>by </span>
                <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
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
          <div class="author-details" style="display: flex; justify-content: center">
            <div class="date" style="vertical-align: middle; margin-right: 4px">
              <a href="#" style="font-size: 14px">08.08.2023</a>
            </div>
            <div class="author">
              <h6>
                <span>by </span>
                <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
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
          <div class="author-details" style="display: flex; justify-content: center">
            <div class="date" style="vertical-align: middle; margin-right: 4px">
              <a href="#" style="font-size: 14px">08.08.2023</a>
            </div>
            <div class="author">
              <h6>
                <span>by </span>
                <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
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



<!-- End icons -->

<!-- Start Restaurants Area -->
<!-- start  second carousel section  -->
<section id="sec-car" class="py-5" style="background-color: #43abe10a">
  <div class="row mx-0">
    <div class="col-md-4">
      <div class="block">
        <div class="block-item d-flex ms-5">
          <div class="block-img" style="width: 260px !important; height: 114px">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-6-1.jpg" alt="" width="100%" height="100%" style="object-fit: cover" />
          </div>
          <div class="block-content ps-4">
            <div class="box">
              <div class="author-details">
                <div class="date" style="vertical-align: middle; margin-right: 4px">
                  <a href="#" style="font-size: 14px">08.08.2023</a>
                </div>
                <div class="author">
                  <h6>
                    <span>by </span>
                    <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
                  </h6>
                </div>
              </div>
              <div class="inner-text">
                <h5 class=" ">
                  <a class=" " href=" ">
                    20 Reasons why you should visit Japan
                  </a>
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div class="block-item d-flex ms-5">
          <div class="block-img" style="width: 182px !important; height: 114px">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-8.jpg" alt="" width="100%" height="100%" style="object-fit: cover" />
          </div>
          <div class="block-content ps-4">
            <div class="box">
              <div class="author-details">
                <div class="date" style="vertical-align: middle; margin-right: 4px">
                  <a href="#" style="font-size: 14px">08.08.2023</a>
                </div>
                <div class="author">
                  <h6>
                    <span>by </span>
                    <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
                  </h6>
                </div>
              </div>
              <div class="inner-text">
                <h5 class=" ">
                  <a class=" " href=" "> Visit animal sanctuaries </a>
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div class="block-item d-flex ms-5">
          <div class="block-img" style="width: 270px !important; height: 114px">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-new-10.jpg" alt="" width="100%" height="100%" style="object-fit: cover" />
          </div>
          <div class="block-content ps-4">
            <div class="box">
              <div class="author-details">
                <div class="date" style="vertical-align: middle; margin-right: 4px">
                  <a href="#" style="font-size: 14px">08.08.2023</a>
                </div>
                <div class="author">
                  <h6>
                    <span>by </span>
                    <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
                  </h6>
                </div>
              </div>
              <div class="inner-text">
                <h5 class=" ">
                  <a class=" " href=" ">
                    Wandering through ancient world streets
                  </a>
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div class="block-item d-flex ms-5">
          <div class="block-img" style="width: 210px !important; height: 114px">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-7.jpg" alt="" width="100%" height="100%" style="object-fit: cover" />
          </div>
          <div class="block-content ps-4">
            <div class="box">
              <div class="author-details">
                <div class="date" style="vertical-align: middle; margin-right: 4px">
                  <a href="#" style="font-size: 14px">08.08.2023</a>
                </div>
                <div class="author">
                  <h6>
                    <span>by </span>
                    <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
                  </h6>
                </div>
              </div>
              <div class="inner-text">
                <h5 class=" ">
                  <a class=" " href=" "> Uncover hidden gems of islands </a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="owl-carousel main-s-slider">
        <a href="">
          <div class="item-o">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-14.jpg" alt="" />
            <div class="overlay">
              <h5>Lost Cities and Rediscovered Journeys</h5>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item-o">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-3.jpg" alt="" />
            <div class="overlay">
              <h5>Tropical Bliss: Sun, Sand and Serenity Await</h5>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item-o">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-10.jpg" alt="" />
            <div class="overlay">
              <h5>Witnessing Africa’s Majestic Wildlife</h5>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- end second carousel section -->
<!-- End Restaurants Area -->


<!-- Start Our Rooms Area -->
<!-- start where next section  -->
<section id="next">
  <div class="container">
    <div class="text-center mt-5 sec-head">
      <h2>Where Next?</h2>
      <p>Ut orci augue, fermentum id aliquam, ut, faucibus.</p>
    </div>
    <div class="row text-center d-flex justify-content-evenly g-5">
      <div class="col-md-4 py-3">
        <div class="nex-img">
          <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-5.jpg" width="100%" height="100%" alt="" />
        </div>
        <div class="nex-content">
          <div class="nex-category mt-4 mb-3">
            <a href="">Sea</a>
          </div>

          <div class="nex-inner-text">
            <h4>
              <a href=""> Beachfront Paradise: Seaside Symphony </a>
            </h4>
          </div>
          <div class="author-details" style="display: flex; justify-content: center">
            <div class="date" style="vertical-align: middle; margin-right: 4px">
              <a href="#" style="font-size: 14px">08.08.2023</a>
            </div>
            <div class="author">
              <h6>
                <span>by </span>
                <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-3 d-flex flex-column align-items-center">
        <div class="nex-img round-shap">
          <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-new-1.jpg" width="100%" height="100%" alt="" />
        </div>
        <div class="nex-content">
          <div class="nex-category mt-4 mb-3">
            <a href="">Ocean</a>
          </div>

          <div class="nex-inner-text">
            <h4>
              <a href=""> Oceans Charms: Tropics’ Delights </a>
            </h4>
          </div>
          <div class="author-details" style="display: flex; justify-content: center">
            <div class="date" style="vertical-align: middle; margin-right: 4px">
              <a href="#" style="font-size: 14px">08.08.2023</a>
            </div>
            <div class="author">
              <h6>
                <span>by </span>
                <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 py-3">
        <div class="nex-img">
          <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-4.jpg" width="100%" height="100%" alt="" />
        </div>
        <div class="nex-content">
          <div class="nex-category mt-4 mb-3">
            <a href="">sea</a>
          </div>

          <div class="nex-inner-text">
            <h4>
              <a href=""> Azure Dreams and Beachside Bliss</a>
            </h4>
          </div>
          <div class="author-details" style="display: flex; justify-content: center">
            <div class="date" style="vertical-align: middle; margin-right: 4px">
              <a href="#" style="font-size: 14px">08.08.2023</a>
            </div>
            <div class="author">
              <h6>
                <span>by </span>
                <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end where next section  -->
<!-- End Our Rooms Area -->


<!-- Start videos -->
<!-- start latest third owl-carousel  -->
<section id="latest" class="">
  <div class="text-center sec-head">
    <h2>Latest Stories</h2>
    <p>Duis molestie ligula quis orci malesuada, sollicitudin faucibus</p>
  </div>

  <div class="owl-carousel latest-owl">
    <div class="item">
      <a href="">
        <div class="third-car-img">
          <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-12.jpg" width="100%" height="100%" alt="" />
        </div>
        <div class="third-car-content">
          <div class="box text-center">
            <div class="author-details">
              <div class="date" style="vertical-align: middle; margin-right: 4px">
                <a href="#" style="font-size: 14px">08.08.2023</a>
              </div>
              <div class="author">
                <h6>
                  <span>by </span>
                  <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
                </h6>
              </div>
            </div>
            <div class="inner-text">
              <h5 class="">
                <a class="" href=" " style="font-size: 19px; font-weight: 500">
                  Wanderlust chronicles: a globetrotter’s unforgettable
                  journeys
                </a>
              </h5>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="item">
      <a href="">
        <div class="third-car-img">
          <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-2.jpg" width="100%" height="100%" alt="" />
        </div>
        <div class="third-car-content">
          <div class="box text-center">
            <div class="author-details">
              <div class="date" style="vertical-align: middle; margin-right: 4px">
                <a href="#" style="font-size: 14px">08.08.2023</a>
              </div>
              <div class="author">
                <h6>
                  <span>by </span>
                  <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
                </h6>
              </div>
            </div>
            <div class="inner-text">
              <h5 class="">
                <a class="" href=" " style="font-size: 19px; font-weight: 500">
                  Jetset Diaries: Captivating Tales of Global Exploration
                </a>
              </h5>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="item">
      <a href="">
        <div class="third-car-img">
          <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-9.jpg" width="100%" height="100%" alt="" />
        </div>
        <div class="third-car-content">
          <div class="box text-center ">
            <div class="author-details">
              <div class="date" style="vertical-align: middle; margin-right: 4px">
                <a href="#" style="font-size: 14px">08.08.2023</a>
              </div>
              <div class="author">
                <h6>
                  <span>by </span>
                  <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
                </h6>
              </div>
            </div>
            <div class="inner-text">
              <h5 class="">
                <a class="" href=" " style="font-size: 19px; font-weight: 500">
                  Roaming Horizons: Adventures in Every Latitude
                </a>
              </h5>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="item">
      <a href="">
        <div class="third-car-img">
          <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/main-home-img-13.jpg" width="100%" height="100%" alt="" />
        </div>
        <div class="third-car-content">
          <div class="box text-center ">
            <div class="author-details">
              <div class="date" style="vertical-align: middle; margin-right: 4px">
                <a href="#" style="font-size: 14px">08.08.2023</a>
              </div>
              <div class="author">
                <h6>
                  <span>by </span>
                  <a href="#" class="hover-underline-animation" style="font-size: 14px">Marina Lorena</a>
                </h6>
              </div>
            </div>
            <div class="inner-text">
              <h5 class="">
                <a class="" href=" " style="font-size: 19px; font-weight: 500">
                  Footprints Across Continets: Exploring the Earth’s Hidden
                  Gems
                </a>
              </h5>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>
<!-- end latest third owl-carousel  -->
<!-- End videos -->


<!-- End Incredible Area -->
<!-- start best Travel section  -->
<section id="best-travel">
  <div class="row">
    <div class="col-md-6 best-left-col">
      <a href="">
        <div class="banner-img mt-5 position-relative">
          <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/home-1-banner-img-1.jpg" alt="" />
          <div class="text-overlay">
            <h3>
              Travel <br />Presets<br />
              2024
            </h3>
          </div>

          <div class="qodef-m-badge">
            <div class="qodef-shortcode qodef-m qodef-stamp qodef--appeared" style="--stamp-color: #E84C47">
              <div class="qodef-m-circle">
                <svg class="qodef-svg--stamp" xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 110 110">
                  <g>
                    <path d="M109.2,72.8c-1.9,5.2-11.5,6.4-14.7,10.6c-3.4,4.3-2,13.5-6.5,16.6c-4.6,3.1-13.1-1.3-18.4,0.3c-5.3,1.6-9.7,9.8-15.4,9.7c-5.5-0.1-9.6-8.4-15.1-10.2C33.6,98,25,102.1,20.6,99c-4.5-3.3-2.8-12.4-5.9-16.8c-3.2-4.4-12.8-5.9-14.4-11.1c-1.6-5.1,5.3-11.5,5.4-16.9C5.8,49-1.1,42.4,0.8,37.2s11.5-6.4,14.7-10.6c3.4-4.3,2-13.5,6.5-16.6c4.6-3.1,13.1,1.3,18.4-0.3c5.3-1.6,9.7-9.8,15.4-9.7c5.5,0.1,9.6,8.4,15.1,10.2C76.4,12,85,7.9,89.4,11c4.5,3.3,2.8,12.4,5.9,16.8c3.2,4.4,12.8,5.9,14.4,11.1c1.6,5.1-5.3,11.5-5.4,16.9C104.2,61,111.1,67.6,109.2,72.8z"></path>
                  </g>
                </svg>
              </div>
              <svg class="qodef-m-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                <path id="qodef-m-path-911" d="M0,21C0,9.4,9.4,0,21,0s21,9.4,21,21-9.4,21-21,21S0,32.6,0,21Z" fill="none"></path>
                <text>
                  <textPath href="#qodef-m-path-911" lengthAdjust="spacing">
                    Travel Presets 2024
                  </textPath>
                </text>
              </svg>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 best-right-col position-relative">
      <div class="best-travel-content position-relative">
        <div class="best-travel-content-head mt-5 ms-5 pt-4">
          <h2>Try our best Travel Presets for 2024.</h2>
          <p>Maecenas mollis, mauris tempor dictum finibus, diam eros</p>
          <div class="bt-button">
            <a href="" class="bt-a">View More</a>
          </div>
        </div>
      </div>

      <div class="best-travel-content-footer">
        <div class="qodef-m-icon-wrapper me-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33">
            <path fill="var(--secondary-color)" d="M32.096 21.742c-.547 1.559-3.372 1.921-4.335 3.172-1 1.3-.582 4.034-1.913 4.945s-3.85-.4-5.42.077c-1.555.468-2.865 2.935-4.526 2.909-1.6-.025-2.832-2.514-4.431-3.048s-4.134.7-5.416-.24c-1.329-.973-.813-3.706-1.748-5s-3.75-1.77-4.234-3.3c-.48-1.516 1.57-3.431 1.6-5.051.026-1.563-1.979-3.538-1.431-5.1s3.372-1.921 4.334-3.172c1-1.3.582-4.034 1.914-4.945s3.85.4 5.42-.077c1.555-.468 2.865-2.935 4.526-2.909 1.6.025 2.832 2.514 4.43 3.048s4.134-.7 5.416.24c1.329.973.813 3.705 1.748 5s3.75 1.77 4.234 3.3c.48 1.516-1.57 3.431-1.6 5.051-.026 1.57 1.979 3.541 1.432 5.1Z"></path>
            <path fill="#fff" d="m16.167 9.257 2.068 4.19 4.625.672-3.346 3.262.79 4.606-4.136-2.174-4.136 2.174.79-4.606-3.346-3.262 4.625-.672Z"></path>
          </svg>
        </div>
        <p>Duis et malesuada lorem, vel risus.</p>
      </div>
    </div>
  </div>
</section>
<!-- end best Travel section  -->
<!-- End Incredible Area -->


<!-- Start images -->

<!-- start Quick-Pick section  -->
<section id="Quick-Pick" class="my-5">
  <div class="text-center sec-head">
    <h2>Quick Type Pick</h2>
    <p>
      Nulla massa nisl, aliquam sed ante porta, suscipit facilisis nulla.
    </p>
  </div>
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6">
        <a href="">
          <div class="quick-img position-relative">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/home-1-d.category-2.jpg" width="100%" height="100%" alt="" />
            <div class="text-overlay">
              <h4>Destinations</h4>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="">
          <div class="quick-img position-relative">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/home-1-d.category-1.jpg" width="100%" height="100%" alt="" />
            <div class="text-overlay">
              <h4>Road Trips</h4>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6">
        <a href="">
          <div class="quick-img position-relative">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/home-1-d.category-3.jpg" width="100%" height="100%" alt="" />
            <div class="text-overlay">
              <h4>Secret Gems</h4>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="">
          <div class="quick-img position-relative">
            <img src="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/home-1-d.category-4.jpg" width="100%" height="100%" alt="" />
            <div class="text-overlay">
              <h4>Tips & Tricks</h4>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- end Quick-Pick section  -->

<!-- End images -->

<!-- Start City View Area -->
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
          </svg>
        </div>
        <div class="icon-content">

          <h5 class=" " style="margin-top: 18px">
            <span class=" ">Easy Maps</span>
          </h5>
          <p class="" style="margin-top: 6px">Navigation Made Easy</p>

        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="icon-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" width="111" height="115" viewBox="0 0 111 115">
            <path fill="#43abe10d" d="M109.953 76.373c-1.876 5.477-11.553 6.748-14.85 11.141-3.417 4.553-1.992 14.169-6.555 17.371-4.609 3.233-13.189-1.388-18.568.271-5.326 1.643-9.814 10.311-15.506 10.22-5.492-.088-9.7-8.832-15.178-10.708s-14.162 2.454-18.555-.843c-4.553-3.417-2.786-13.016-5.987-17.579-3.233-4.609-12.845-6.216-14.505-11.6-1.643-5.326 5.377-12.051 5.468-17.743.088-5.492-6.78-12.427-4.9-17.9s11.552-6.748 14.849-11.141c3.417-4.553 1.992-14.169 6.555-17.371 4.608-3.233 13.189 1.388 18.568-.271C46.115 8.577 50.602-.091 56.295 0c5.492.087 9.7 8.832 15.177 10.708s14.163-2.455 18.556.843c4.553 3.417 2.786 13.016 5.987 17.579 3.233 4.609 12.846 6.216 14.505 11.6 1.643 5.326-5.377 12.051-5.468 17.743-.091 5.488 6.777 12.423 4.901 17.9Z"></path>
            <path fill="#E84C47" d="M75.861 55.482a1.911 1.911 0 0 0-1.307-.556H72.92l.033-5.032a3.564 3.564 0 0 0-1.013-2.483 3.366 3.366 0 0 0-1.666-.915l1.438-1.177a.824.824 0 0 0 .131-1.144L61.681 31.497a.823.823 0 0 0-1.144-.1l-1.013.784-1.732-1.634a.86.86 0 0 0-1.176.032L41.847 46.264h-1.895a3.564 3.564 0 0 0-2.483 1.013 3.485 3.485 0 0 0-1.013 2.451l-.1 22.612a3.485 3.485 0 0 0 1.013 2.451 3.38 3.38 0 0 0 2.451 1.048l29.538.131a3.486 3.486 0 0 0 2.451-1.013 3.382 3.382 0 0 0 1.045-2.451v-5.067h1.634a1.825 1.825 0 0 0 1.307-.523 1.725 1.725 0 0 0 .555-1.307l.032-8.822a1.824 1.824 0 0 0-.521-1.305Zm-5.817-10.914-2.254 1.8h-1.47l2.81-2.974Zm-9.116-11.4 1.111 1.405-1.34-1.242Zm-3.66-.849 10.619 10-3.823 4.052-6.208-.033h-1.307L44.1 46.273ZM71.22 72.473a1.853 1.853 0 0 1-.555 1.307 1.726 1.726 0 0 1-1.307.555l-29.538-.13a1.726 1.726 0 0 1-1.307-.556 1.824 1.824 0 0 1-.523-1.307l.065-22.612a2.07 2.07 0 0 1 .555-1.307 1.944 1.944 0 0 1 1.307-.523l16.632.065 7.842.033h5.065a1.852 1.852 0 0 1 1.307.555 1.978 1.978 0 0 1 .555 1.307l-.033 5.065-10.946-.065a1.992 1.992 0 0 0-1.34.555 1.824 1.824 0 0 0-.523 1.307l-.033 8.822a1.883 1.883 0 0 0 .523 1.307 2 2 0 0 0 1.307.555l10.979.033Zm3.5-6.862c0 .065-.032.1-.065.163a.247.247 0 0 1-.163.065l-14.214-.065c-.065 0-.1-.032-.164-.065-.032-.065-.065-.1-.065-.164l.065-8.822a.18.18 0 0 1 .065-.164.248.248 0 0 1 .131-.065l14.247.065a.249.249 0 0 1 .131.065c.065.033.065.1.065.164Z"></path>
            <path fill="#E84C47" d="M64.424 57.998a3.124 3.124 0 1 0 2.222.915 3.133 3.133 0 0 0-2.222-.915Zm1.078 4.248a1.706 1.706 0 0 1-1.111.457 1.794 1.794 0 0 1-1.078-.457 1.705 1.705 0 0 1-.458-1.111 1.8 1.8 0 0 1 .458-1.078 1.529 1.529 0 0 1 1.111-.425 1.593 1.593 0 0 1 1.078.425 1.705 1.705 0 0 1 .457 1.111 1.8 1.8 0 0 1-.457 1.078Z"></path>
          </svg>
        </div>
        <div class="icon-content">
          <h5 class=" " style="margin-top: 18px">
            <span class=" ">Low Budget</span>
          </h5>
          <p class="" style="margin-top: 6px">Budget-Friendly Adventures</p>

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
          </svg>
        </div>
        <div class="icon-content">

          <h5 class=" " style="margin-top: 18px">
            <span class=" ">Photo Presets</span>
          </h5>
          <p class="" style="margin-top: 6px">Pixel Impressions</p>

        </div>

      </div>

    </div>
  </div>
</section>
<!-- end Icons section  -->
<!-- End City View Area -->

<!-- Start Exclusive Area -->

<!-- End Exclusive Area -->


<!-- start Testimonials Area -->

<!-- End Testimonials Area -->

<!-- End News Area -->

<!-- End News Area -->
<?php get_footer(); ?>


<?php
$typed_word_sets = get_field('الكلمات_المتغيرة', 'option'); // 'repeater_field_name' should be replaced with the name of your repeater field

if ($typed_word_sets) {
  $typed_words = array();
  foreach ($typed_word_sets as $typed_word_set) {
    $typed_words[] = $typed_word_set['الكلمة']; // 'sub_field_name' should be replaced with the name of your text sub-field inside the repeater
  }
?>
  <script>
    var typing = new Typed(".textTyping", {
      strings: ["", "<?php echo implode('", "', $typed_words); ?>"],
      typeSpeed: 100,
      backSpeed: 40,
      loop: true,
    });
  </script>
<?php
}
?>