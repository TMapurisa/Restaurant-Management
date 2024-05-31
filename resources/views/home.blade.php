<!DOCTYPE html>
<html lang="en">
<head>

     <title>Debbie's Kitchen</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href=# class="navbar-brand">Debbie's <span>.</span> Kitchen</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#menu" class="smoothScroll">Menu</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                         
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))
                    @auth

                        <li><a href="{{url('/showcart',Auth::user()->id)}}" >Cart[{{$count}}]</a></li>
                        
                        <li>
            <span class="nav-link text-sm text-gray-700 underline">{{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" class="nav-link text-sm text-gray-700 underline" onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}" class="nav-link text-sm text-gray-700 underline">Log in</a>
                        </li>

                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="nav-link ml-4 text-sm text-gray-700 underline">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif

                
                
            </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Debbie's Kitchen &amp; Restaurant</h3>
                                             <h1>Our mission is to provide an unforgettable experience</h1>
                                             <a href="#menu" class="section-btn btn btn-default smoothScroll">Meet our chef</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Your Perfect Breakfast</h3>
                                             <h1>The best dinning quality can be here too!</h1>
                                             <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>New Restaurant in Town</h3>
                                             <h1>Enjoy our special menus every Sunday and Friday</h1>
                                             <a href="#menu" class="section-btn btn btn-default smoothScroll">Order Online</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Read our story</h4>
                                   <h2>We've been Making The Delicious Foods Since 1999</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus ratione eaque earum cumque qui nemo repellendus, voluptatum vitae atque ab? Magnam nam saepe, cupiditate officiis et asperiores vitae illum labore?</p>
                                   <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque et minima quo! Aspernatur maiores minus atque perferendis. Eaque perferendis totam obcaecati eum cum aliquam reprehenderit numquam voluptatem. Soluta, provident veniam..</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/about-image.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TEAM -->
     

     <!-- MENU-->
     @include("menu")


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Testimonials</h2>
                         </div>
                    </div>  

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="owl-carousel owl-theme">
                              <div class="item">
                                   <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum ullamcorper nulla non.</p>
                                        <div class="tst-author">
                                             <h4>Digital Carlson</h4>
                                             <span>Pharetra quam sit amet</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed vestibulum orci quam.</p>
                                        <div class="tst-author">
                                             <h4>Johnny Stephen</h4>
                                             <span>Magna nisi porta ligula</span>
                                        </div>
                              </div>

                              <div class="item">
                                   <p>Vivamus aliquet felis eu diam ultricies congue. Morbi porta lorem nec consectetur porta quis dui elit habitant morbi.</p>
                                        <div class="tst-author">
                                             <h4>Jessie White</h4>
                                             <span>Vitae lacinia augue urna quis</span>
                                        </div>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>  


     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                    

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Contact Us</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <h6 class="text-success">Your message has been sent successfully.</h6>
                              
                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>          


     <!-- FOOTER -->
     @include("footer")
     


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>