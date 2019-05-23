<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="js/scripts/simplecartjs/simpleCart.js"></script>
      <script src="js/scripts/simplecartjs-config.js"></script>
      <link rel="stylesheet" href="css/styles.css">
      <title>Coffee Buzz - Home</title>
      <link rel="icon" href="img/coffee-buzz-logo.png" type="image/png">
      <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
      <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
      <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
      <link rel="stylesheet" href="vendors/Magnific-Popup/magnific-popup.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <?php include('login.php'); ?>
      <div>
         <!--================ Header Menu Area start =================-->
         <header class="header_area">
            <div class="main_menu">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="container box_1620">
                     <a class="navbar-brand logo_h" href="index.html"><img src="img/coffee-buzz-logo.png" alt=""></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-end">
                           <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                           <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                           <li class="nav-item"><a class="nav-link" href="menu.html">Menu</a>
                           <li class="nav-item">
                              <a class="nav-link" href="barista.html">Baristas</a>
                              <!-- <li class="nav-item submenu dropdown">
                                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false">Blog</a>
                                 <ul class="dropdown-menu">
                                   <li class="nav-item"><a class="nav-link" href="blog.html">Blog Single</a></li>
                                   <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                                 </ul>
                                 </li> -->
                           <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                           <li class="nav-item"><a class="nav-link" href="cart.html" class="button">View Cart (<span class="simpleCart_quantity"></span> items)</a></li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </header>
         <!--================Header Menu Area =================-->
         <!--================Hero Banner Section start =================-->
         <section class="hero-banner">
            <div class="hero-wrapper">
               <div class="hero-left">
                  <h1 class="hero-title">Coffee & Tea <br> Life's esstentials</h1>
                  <div class="d-sm-flex flex-wrap">
                     <a class="button button-hero button-shadow" href="menu.html">Order Now</a>
                     <a class="hero-banner__video" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Watch Video</a>          
                  </div>
                  <ul class="hero-info d-none d-lg-block">
                     <li>
                        <img src="img/banner/fas-service-icon.png" alt="">
                        <h4>Fast Service</h4>
                     </li>
                     <li>
                        <img src="img/banner/fresh-food-icon.png" alt="">
                        <h4>Fresh Beverages</h4>
                     </li>
                  </ul>
               </div>
               <div class="hero-right">
                  <div class="owl-carousel owl-theme hero-carousel">
                     <div class="hero-carousel-item">
                        <img class="img-fluid" src="img/banner/Coffee1.jpg" alt="">
                     </div>
                     <div class="hero-carousel-item">
                        <img class="img-fluid" src="img/banner/Coffee2.jpg" alt="">
                     </div>
                     <div class="hero-carousel-item">
                        <img class="img-fluid" src="img/banner/tea1.jpg" alt="">
                     </div>
                     <div class="hero-carousel-item">
                        <img class="img-fluid" src="img/banner/Coffee3.png" alt="">
                     </div>
                  </div>
               </div>
               <ul class="social-icons d-none d-lg-block">
                  <li><a href="#"><i class="ti-facebook"></i></a></li>
                  <li><a href="#"><i class="ti-twitter"></i></a></li>
                  <li><a href="#"><i class="ti-instagram"></i></a></li>
               </ul>
            </div>
         </section>
         <!--================Hero Banner Section end =================-->
         <!--================About Section start =================-->
         <section class="about section-margin pb-xl-70">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-xl-6 mb-5 mb-md-0 pb-5 pb-md-0">
                     <div class="img-styleBox">
                        <div class="styleBox-border">
                           <img class="styleBox-img1 img-fluid" src="img/home/about-img1.png" alt="">
                        </div>
                        <img class="styleBox-img2 img-fluid" src="img/home/about-img2.png" alt="">
                     </div>
                  </div>
                  <div class="col-md-6 pl-md-5 pl-xl-0 offset-xl-1 col-xl-5">
                     <div class="section-intro mb-lg-4">
                        <h4 class="intro-title">About Us</h4>
                        <h2>We speak the good drink language</h2>
                     </div>
                     <p>Coffee Buzz is a proud cafe located next to RMIT University. We take pride in our fast and quality service with our experienced staff and promise a satisified experience.</p>
                     <a class="button button-shadow mt-2 mt-lg-4" href="#">Learn More</a>
                  </div>
               </div>
            </div>
         </section>
         <!--================About Section End =================-->
         <!--================Featured Section Start =================-->
         <section class="section-margin mb-lg-100">
            <div class="container">
               <div class="section-intro mb-75px">
                  <h4 class="intro-title">Featured Drinks</h4>
                  <h2>Fresh taste and great price</h2>
               </div>
               <div class="owl-carousel owl-theme featured-carousel">
                  <div class="featured-item">
                     <img class="card-img rounded-0" src="img/home/latte1.jpg" alt="">
                     <div class="item-body">
                        <a href="#">
                           <h3>Latte</h3>
                        </a>
                        <p>Whales and darkness moving</p>
                        <div class="d-flex justify-content-between">
                           <ul class="rating-star">
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                           </ul>
                           <h3 class="price-tag">from $3.50</h3>
                        </div>
                     </div>
                  </div>
                  <div class="featured-item">
                     <img class="card-img rounded-0" src="img/home/cappuccino1.jpg" alt="">
                     <div class="item-body">
                        <a href="#">
                           <h3>Cappuccino</h3>
                        </a>
                        <p>Whales and darkness moving</p>
                        <div class="d-flex justify-content-between">
                           <ul class="rating-star">
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                           </ul>
                           <h3 class="price-tag">from $3.50</h3>
                        </div>
                     </div>
                  </div>
                  <div class="featured-item">
                     <img class="card-img rounded-0" src="img/home/mocha1.png" alt="">
                     <div class="item-body">
                        <a href="#">
                           <h3>Mocha</h3>
                        </a>
                        <p>Whales and darkness moving</p>
                        <div class="d-flex justify-content-between">
                           <ul class="rating-star">
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                           </ul>
                           <h3 class="price-tag">from $3.50</h3>
                        </div>
                     </div>
                  </div>
                  <div class="featured-item">
                     <img class="card-img rounded-0" src="img/home/frappe1.png" alt="">
                     <div class="item-body">
                        <a href="#">
                           <h3>Frappe</h3>
                        </a>
                        <p>Whales and darkness moving</p>
                        <div class="d-flex justify-content-between">
                           <ul class="rating-star">
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                              <li><i class="ti-star"></i></li>
                           </ul>
                           <h3 class="price-tag">from $3.50</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--================Featured Section End =================-->
         <!--================Offer Section Start =================-->
         <section class="bg-lightGray section-padding">
            <div class="container">
               <div class="row no-gutters">
                  <div class="col-sm">
                     <img class="card-img rounded-0" src="img/home/surprise1.png" alt="">
                  </div>
                  <div class="col-sm">
                     <div class="offer-card offer-card-position">
                        <h3>Surprise Drink</h3>
                        <h2>50% OFF</h2>
                        <a class="button" href="#">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--================Offer Section End =================-->
         <!--================Food menu section start =================-->  
         <section class="section-margin">
            <div class="container">
               <div class="section-intro mb-75px">
                  <h4 class="intro-title">Drink Menu</h4>
                  <h2>Fresh Beverages</h2>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="media align-items-center food-card">
                        <img class="mr-3 mr-sm-4" src="img/home/cappuccino2.png" alt="">
                        <div class="media-body">
                           <div class="d-flex justify-content-between food-card-title">
                              <h4>Cappuccino</h4>
                              <h3 class="price-tag">from $4.50</h3>
                           </div>
                           <p>Whales and darkness moving form cattle</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="media align-items-center food-card">
                        <img class="mr-3 mr-sm-4" src="img/home/espresso1.png" alt="">
                        <div class="media-body">
                           <div class="d-flex justify-content-between food-card-title">
                              <h4>Espresso</h4>
                              <h3 class="price-tag">from $3.50</h3>
                           </div>
                           <p>Whales and darkness moving form cattle</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="media align-items-center food-card">
                        <img class="mr-3 mr-sm-4" src="img/home/latte2.png" alt="">
                        <div class="media-body">
                           <div class="d-flex justify-content-between food-card-title">
                              <h4>Latte</h4>
                              <h3 class="price-tag">from $5.50</h3>
                           </div>
                           <p>Whales and darkness moving form cattle</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="media align-items-center food-card">
                        <img class="mr-3 mr-sm-4" src="img/home/coffee5.png" alt="">
                        <div class="media-body">
                           <div class="d-flex justify-content-between food-card-title">
                              <h4>Roasted Marrow</h4>
                              ￼
                              Qty:
                              <h3 class="price-tag">from $3.50</h3>
                           </div>
                           <p>Whales and darkness moving form cattle</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="media align-items-center food-card">
                        <img class="mr-3 mr-sm-4" src="img/home/coffee6.png" alt="">
                        <div class="media-body">
                           <div class="d-flex justify-content-between food-card-title">
                              <h4>Roasted Marrow</h4>
                              <h3 class="price-tag">from $3.50</h3>
                           </div>
                           <p>Whales and darkness moving form cattle</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="media align-items-center food-card">
                        <img class="mr-3 mr-sm-4" src="img/home/coffee7.png" alt="">
                        <div class="media-body">
                           <div class="d-flex justify-content-between food-card-title">
                              <h4>Roasted Marrow</h4>
                              <h3 class="price-tag">from $3.50</h3>
                           </div>
                           <p>Whales and darkness moving form cattle</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="media align-items-center food-card">
                        <img class="mr-3 mr-sm-4" src="img/home/coffee8.png" alt="">
                        <div class="media-body">
                           <div class="d-flex justify-content-between food-card-title">
                              <h4>Roasted Marrow</h4>
                              <h3 class="price-tag">from $3.50</h3>
                           </div>
                           <p>Whales and darkness moving form cattle</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="media align-items-center food-card">
                        <img class="mr-3 mr-sm-4" src="img/home/latte3.png" alt="">
                        <div class="media-body">
                           <div class="d-flex justify-content-between food-card-title">
                              <h4>Roasted Marrow</h4>
                              <h3 class="price-tag">from $3.50</h3>
                           </div>
                           <p>Whales and darkness moving form cattle</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--================Food menu section end =================-->  
         <!--================CTA section start =================-->  
         <section class="cta-area text-center">
            <div class="container">
               <p>still not enough?</p>
               <h2>Check out our full menu </h2>
               <a class="button" href="menu.html">View Menu</a>
            </div>
         </section>
         <!--================CTA section end =================-->  
         <!--================Chef section start =================-->  
         <section class="section-margin">
            <div class="container">
               <div class="section-intro mb-75px">
                  <h4 class="intro-title">Our Team </h4>
                  <h2>Baristas</h2>
               </div>
               <div class="row">
                  <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                     <div class="chef-card">
                        <img class="card-img rounded-0" src="img/home/student1.png" alt="">
                        <div class="chef-footer">
                           <h4>Almog Dadush</h4>
                           <p>Executive Barista</p>
                           <p>s3567655@student.rmit.edu.au</p>
                        </div>
                        <div class="chef-overlay">
                           <ul class="social-icons">
                              <li><a href="#"><i class="ti-facebook"></i></a></li>
                              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                              <li><a href="#"><i class="ti-skype"></i></a></li>
                              <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                     <div class="chef-card">
                        <img class="card-img rounded-0" src="img/home/student1.png" alt="">
                        <div class="chef-footer">
                           <h4>Dylan Johnson</h4>
                           <p>Executive Barista</p>
                           <p>s3567655@student.rmit.edu.au</p>
                        </div>
                        <div class="chef-overlay">
                           <ul class="social-icons">
                              <li><a href="#"><i class="ti-facebook"></i></a></li>
                              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                              <li><a href="#"><i class="ti-skype"></i></a></li>
                              <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                     <div class="chef-card">
                        <img class="card-img rounded-0" src="img/home/student1.png" alt="">
                        <div class="chef-footer">
                           <h4>Mohammad Siddiqui</h4>
                           <p>Executive Barista</p>
                           <p>s3656260@student.rmit.edu.au</p>
                        </div>
                        <div class="chef-overlay">
                           <ul class="social-icons">
                              <li><a href="#"><i class="ti-facebook"></i></a></li>
                              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                              <li><a href="#"><i class="ti-skype"></i></a></li>
                              <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                     <div class="chef-card">
                        <img class="card-img rounded-0" src="img/home/student1.png" alt="">
                        <div class="chef-footer">
                           <h4>Anthony Ho</h4>
                           <p>Executive Barista</p>
                           <p>s3662061@student.rmit.edu.au</p>
                        </div>
                        <div class="chef-overlay">
                           <ul class="social-icons">
                              <li><a href="#"><i class="ti-facebook"></i></a></li>
                              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                              <li><a href="#"><i class="ti-skype"></i></a></li>
                              <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                     <div class="chef-card">
                        <img class="card-img rounded-0" src="img/home/student1.png" alt="">
                        <div class="chef-footer">
                           <h4>Yonas Sisay</h4>
                           <p>Executive Barista</p>
                           <p>s3659939@student.rmit.edu.au</p>
                        </div>
                        <div class="chef-overlay">
                           <ul class="social-icons">
                              <li><a href="#"><i class="ti-facebook"></i></a></li>
                              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                              <li><a href="#"><i class="ti-skype"></i></a></li>
                              <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--================Chef section end =================-->  
         <!--================Reservation section start ================= 
            <section class="bg-lightGray section-padding">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-6 col-xl-5 mb-4 mb-md-0">
                    <div class="section-intro">
                      <h4 class="intro-title">Reservation</h4>
                      <h2 class="mb-3">Get experience from sneaky</h2>
                    </div>
                    <p>Him given and midst tree form seas she'd saw give evening one every make hath moveth you're appear female heaven had signs own days saw they're have let midst given him given and midst tree. Form seas she'd saw give evening</p>
                  </div>
                  <div class="col-md-6 offset-xl-2 col-xl-5">
                    <div class="search-wrapper">
                      <h3>Book A Table</h3>
            
                      <form class="search-form" action="#">
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="ti-user"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="ti-email"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Phone Number">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="ti-headphone-alt"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Select Date">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="ti-notepad"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Select People">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="ti-layout-column3"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group form-group-position">
                          <button class="button border-0" type="submit">Make Reservation</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            ================Reservation section end =================
            
            
            ================Blog section start =================
            <section class="section-margin">
              <div class="container">
                <div class="section-intro mb-75px">
                  <h4 class="intro-title">Our Blog</h4>
                  <h2>Latest food and recipe news</h2>
                </div>
            
                <div class="row">
                  <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card-blog">
                      <img class="card-img rounded-0" src="img/blog/blog1.png" alt="">
                      <div class="blog-body">
                        <ul class="blog-info">
                          <li><a href="#">Admin post</a></li>
                          <li><a href="#">Jan 10, 2019</a></li>
                        </ul>
                        <a href="#">
                          <h3>Huge cavity in antarctic glacie signals rapid</h3>
                        </a>
                      </div>
                    </div>
                  </div>
            
                  <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card-blog">
                      <img class="card-img rounded-0" src="img/blog/blog2.png" alt="">
                      <div class="blog-body">
                        <ul class="blog-info">
                          <li><a href="#">Admin post</a></li>
                          <li><a href="#">Jan 10, 2019</a></li>
                        </ul>
                        <a href="#">
                          <h3>Researcher unearths age
                              in the desert</h3>
                        </a>
                      </div>
                    </div>
                  </div>
            
                  <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card-blog">
                      <img class="card-img rounded-0" src="img/blog/blog3.png" alt="">
                      <div class="blog-body">
                        <ul class="blog-info">
                          <li><a href="#">Admin post</a></li>
                          <li><a href="#">Jan 10, 2019</a></li>
                        </ul>
                        <a href="#">
                          <h3>High-protein rice brings
                              value, nutrition</h3>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            ================Blog section end =================-->  
         <!-- ================ start footer Area ================= -->
         <footer class="footer-area section-gap">
            <div class="container">
               <div class="row">
                  <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                     <h4>Site Map</h4>
                     <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="menu.html">Food & Drink Menu</a></li>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="barista.html">Baristas</a></li>
                     </ul>
                  </div>
                  <!-- <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                     <h4>Top Products</h4>
                     <ul>
                     	<li><a href="#">Managed Website</a></li>
                     	<li><a href="#">Manage Reputation</a></li>
                     	<li><a href="#">Power Tools</a></li>
                     	<li><a href="#">Marketing Service</a></li>
                     </ul>
                     </div>
                     <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                     <h4>Quick Links</h4>
                     <ul>
                     	<li><a href="#">Jobs</a></li>
                     	<li><a href="#">Brand Assets</a></li>
                     	<li><a href="#">Investor Relations</a></li>
                     	<li><a href="#">Terms of Service</a></li>
                     </ul>
                     </div>
                     <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                     <h4>Features</h4>
                     <ul>
                     	<li><a href="#">Jobs</a></li>
                     	<li><a href="#">Brand Assets</a></li>
                     	<li><a href="#">Investor Relations</a></li>
                     	<li><a href="#">Terms of Service</a></li>
                     </ul>
                     </div>
                     <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                     <h4>Resources</h4>
                     <ul>
                     	<li><a href="#">Guides</a></li>
                     	<li><a href="#">Research</a></li>
                     	<li><a href="#">Experts</a></li>
                     	<li><a href="#">Agencies</a></li>
                     </ul>
                     </div> -->
                  <div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                     <h4>Newsletter</h4>
                     <p>You can trust us. we only send promo offers,</p>
                     <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                           method="get">
                           <div class="input-group">
                              <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                              <div class="input-group-append">
                                 <button class="btn click-btn" type="submit">
                                 <i class="ti-arrow-right"></i>
                                 </button>
                              </div>
                           </div>
                           <div style="position: absolute; left: -5000px;">
                              <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                           </div>
                           <div class="info"></div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="footer-bottom row align-items-center text-center text-lg-left">
                  <p class="footer-text m-0 col-lg-8 col-md-12">
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                  <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                     <a href="#"><i class="ti-facebook"></i></a>
                     <a href="#"><i class="ti-twitter-alt"></i></a>
                     <a href="#"><i class="ti-dribbble"></i></a>
                     <a href="#"><i class="ti-linkedin"></i></a>
                  </div>
               </div>
            </div>
         </footer>
         <!-- ================ End footer Area ================= -->
         <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
         <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
         <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
         <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
         <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
         <script src="js/jquery.ajaxchimp.min.js"></script>
         <script src="js/mail-script.js"></script>
         <script src="js/main.js"></script>
      </div>
   </body>
</html>