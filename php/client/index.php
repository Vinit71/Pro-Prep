<?php 
   session_start();

   include("../config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>

<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../../styles/clientWebstyle.css">
      </head>
    <body>
       
            
        <div id="img-container">
            <img src="../../img/bgImg.jpg" alt="">
        </div>
        
        <div class="navbar">
          <div class="logo"><b>Logo</b></div>

          <div class="links">
          <a class="nav-links" href="#">Home</a>
              <a class="nav-links" href="#">Contact</a>
              <a class="nav-links" href="#">About</a>
          </div>

          <div class="profile menu-toggle" onclick="toggleMenu()">
            <img class="profile-img" src="../../img/836.jpg" alt="">
            <div class="menu" id="menu">
              <a href="#">Profile</a>
              <a href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
          </div> 
        </div>

<!-- href="php/login.php"><img src="../img/836.jpg" alt=""> -->
        <button id="main-btn">Get started</button>

        <div class="section-wrapper">
        <h1 class="section-heading">We provide</h1>
        <div class="Home-grid">
            <a class="grid-item" id="img1" href="./coachSection/yogaCoach.php"><img src="../../img/img-yoga.jpg" alt="Image 5"><div class="image-wrapper"><h1>yoga</h1></div></a>
            <a class="grid-item" id="img2" href="#"><img src="../../img/img-fitness.jpg" alt="Image 1"><div class="image-wrapper"><h1>Fitness</h1></div></a>
            <a class="grid-item" id="img3" href="#"><img src="../../img/img-boxing.jpg" alt="Image 2"><div class="image-wrapper"><h1>Boxing</h1></div></a>
            <a class="grid-item" id="img4" href="#"><img src="../../img/img-calisthenics.jpg" alt="Image 3"><div class="image-wrapper"><h1>Calisthenics</h1></div></a>
            <a class="grid-item" id="img5" href="#"><img src="../../img/img-running.jpg" alt="Image 4"><div class="image-wrapper"><h1>Running</h1></div></a>
            <a class="grid-item" id="img6" href="#"><img src="../../img/img-pl.jpg" alt="Image 4"><div class="image-wrapper"><h1>Boxing</h1></div></a>
          </div>
        </div>


        <!-- ------About Us--------- -->
        <div class="section-wrapper">
          <div class="texture-about"><img src="../../img/texture-about.jpeg" alt="">
          <div class="main-about">
            <h1 class="section-heading about-intro">About us</h1>
          <div id="about-us">
              <div class="about-left">
               <h1 class="about-heading">Connecting You to Fitness Experts at Pro Prep:</h1>
               <p class="about-paragraph">At Pro Prep, we are committed to revolutionizing the way people approach health and fitness. Our vision is to bridge the gap between clients 
                and coaches, making personalized training accessible to all. We strive to create a 
                supportive community where individuals can achieve their fitness aspirations with confidence. Our goal is not just to train bodies 
                but to transform lives, one client at a time. Join us in our mission to make health and fitness a lifestyle, not a chore.</p>

                <div class="social-handles">
                  <a href="#" class="social-handle instagram"><i class="fa-brands fa-square-instagram"></i></a>
                     <a href="#" class="social-handle facebook"><i class="fab fa-facebook-f"></i></a>
                     <a href="#" class="social-handle twitter"><i class="fab fa-twitter"></i></a>
                     <a href="#" class="social-handle linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>

              <div class="about-right ">
                <div class="slideshow-container">
                  <div class="slide fade">
                    <img src="../../img/a-coaching.jpg" alt="Slide 1">
                  </div>

                  <div class="slide fade">
                    <img src="../../img/a-hiking.jpg" alt="Slide 2">
                  </div>

                  <div class="slide fade">
                    <img src="../../img/a-medal.jpg" alt="Slide 3">
                  </div>

                  <div class="slide fade">
                    <img src="../../img/a-run.jpg" alt="Slide 4">
                  </div>

                  <div class="slide fade">
                    <img src="../../img/a-team1.jpg" alt="Slide 5">
                  </div>
                  
                  <div class="slide fade">
                    <img src="../../img/a-transformation.jpg" alt="Slide 6">
                  </div>
                  <!-- Add more slides as needed -->
          </div>
                
                <!-- <img src="./img/aboutus.jpg" alt=""> -->

                <div class="about-points">
                  <div class="about-grid" id="about-grid1">
                    <h2><b>1000+</b></h2>
                    <p class="point-p">Happy Clients</p>

                  </div>
                  <div class="about-grid" id="about-grid2">
                    <h2><b>6</b></h2>
                    <p class="point-p">Expert Coaches</p>
                  </div>

                  <div class="about-grid" id="about-grid3">
                    <h2><b>20+</b></h2>
                    <p class="point-p">Industry Collaborations</p>
                  </div>

                  <div class="about-grid" id="about-grid4">
                    <h2><b>5+</b></h2>
                    <p class="point-p">Years of Empowering</p>
                  </div>

                </div>
              </div>
        </div><!--about us -->
      </div><!-- main about -->
          </div>
    </div> <!--wrapper -->

        <!-- Coaches -->
        <!-- <div class="section-wrapper"> -->
        <h1 class="section-heading">Our Team</h1>
        <div id="our-team">
          <div class="coaches">

                <div class="c-profile" id="c1">
                   <section class="top-card">
                     <img src="https://www.bolnews.com/wp-content/uploads/2023/11/FotoJet-8-15-635x430.jpg" alt="user picture">
                   </section>
               
                   <section class="middle-card">
                    <div class="middle-card-heading">
                      <h1>Anjali Sharma</h1>
                      <div class="ratings">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
                     <p>Yoga<br>
                        Experence: 8 years</p>
                   </section>
               
                   <footer>
                     <a href="#" class="social-icon instagram"><i class="fa-brands fa-square-instagram"></i></a>
                     <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                     <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                     <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                   </footer>
                </div>

            <div class="c-profile" id="c2">
                   <section class="top-card">
                     <img src="https://www.bolnews.com/wp-content/uploads/2023/11/FotoJet-8-15-635x430.jpg" alt="user picture">
                   </section>
               
                   <section class="middle-card">
                    <div class="middle-card-heading">
                      <h1>H.Rambod</h1>
                      <div class="ratings">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                    </div>
                  </div>
                     <p>Bodybuilding
                      <br>Experence: 12 years
                     </p>
                   </section>
               
                   <footer> 
                     <a href="#" class="social-icon instagram"><i class="fa-brands fa-square-instagram"></i></a>
                     <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                     <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                     <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                   </footer>
            </div>

            <div class="c-profile" id="c3">
                   <section class="top-card">
                     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVRIZIM_x5_Iv2NtFFpolChjakDbzWPBXT6Q&usqp=CAU" alt="user picture">
                   </section>
               
                   <section class="middle-card">
                    <div class="middle-card-heading">
                      <h1>C.Heria</h1>
                      <div class="ratings">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
                     <p>Calisthenics
                      <br>Experence: 7 years
                     </p>
                   </section>
               
                   <footer>
                     <a href="#" class="social-icon instagram"><i class="fa-brands fa-square-instagram"></i></a>
                     <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                     <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                     <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                   </footer>
            </div>

            <div class="c-profile" id="c4">
              <section class="top-card">
                <img src="https://www.bolnews.com/wp-content/uploads/2023/11/FotoJet-8-15-635x430.jpg" alt="user picture">
              </section>
          
              <section class="middle-card">
                <div class="middle-card-heading">
                  <h1>Abhay Roy</h1>
                  <div class="ratings">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
                <p>Power Lifting
                  <br>Experence: 4 years
                 </p>
              </section>
          
              <footer>
                <a href="#" class="social-icon instagram"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
              </footer>
            </div>

            <div class="c-profile" id="c5">
                <section class="top-card">
                  <img src="../../img/c-boxing.jpg" alt="user picture">
                </section>
              
                <section class="middle-card">
                  <div class="middle-card-heading">
                    <h1>Jake Paul</h1>
                    <div class="ratings">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                </div>
                  <p>Boxing
                    <br>Experence: 8 years
                   </p>
                </section>
              
                <footer>
                  <a href="#" class="social-icon instagram"><i class="fa-brands fa-square-instagram"></i></a>
                  <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                </footer>
            </div>

            <!-- hiring -->
            <div class="c-profile" id="c-hiring"> 
              <h3>We are hiring..</h3>
              <!-- btn -->
<div class="joinBtnWrapper">
  <a href="./php/coach/cApply.php" class="joinBtn">Join us..</a>
  
</div>

          </div>
          </div>
        <!-- </div> -->


        <!-- testimonials -->
  <div class="texture-testimonials">
    <img src="../../img/testimonials/test-background.jpg" alt="">
    <h1 class="section-heading test-intro">Reviews</h1>
    <div class="main-testimonials">
        <div class="review">
          <div class="orange-circle">
            <i class="fa-solid fa-quote-right"></i>
          </div>
          <img src="../../img/testimonials/u-1.jpg" alt="Testimonial">
          <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac lorem sed massa ullamcorper scelerisque.</p>
              <p>- John Doe</p>
          </div>
      </div>

        <div class="review">
          <div class="orange-circle">
            <i class="fa-solid fa-quote-right"></i>
          </div>
          <img src="../../img/testimonials/u-2.jpg" alt="Testimonial">
          <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac lorem sed massa ullamcorper scelerisque.</p>
              <p>- John Doe</p>
          </div>
      </div>

        <div class="review">
          <div class="orange-circle">
            <i class="fa-solid fa-quote-right"></i>
          </div>
          <img src="../../img/testimonials/u-3.jpg" alt="Testimonial">
          <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac lorem sed massa ullamcorper scelerisque.</p>
              <p>- John Doe</p>
          </div>
      </div>
    </div>
  </div>

        <div class="footer">
          <div class="container">
            
              <div class="row">

                  <div class="col-lg-4 col-sm-4 col-xs-12">
                    <!-- single-footer#1 -->
                      <div class="single_footer">
                          <h4>Services</h4>
                          <ul class="fotter-ul">
                              <li><a class="fotter-links" href="#">Home</a></li>
                              <li><a class="fotter-links" href="#">Gents</a></li>
                              <li><a class="fotter-links" href="#">Ladies</a></li>
                              <li><a class="fotter-links" href="#">Type specimen book</a></li>
                          </ul>
                      </div>
                  </div><!--- END COL -->

                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="single_footer single_footer_address">
                          <h4>Page Link</h4>
                          <ul class="fotter-ul">
                              <li><a class="fotter-links" href="#">Lorem Ipsum</a></li>
                              <li><a  class="fotter-links"href="#">Simply dummy text</a></li>
                              <li><a class="fotter-links" href="#">The printing and typesetting</a></li>
                              <li><a class="fotter-links" href="#">Standard dummy text</a></li>
                              <li><a class="fotter-links" href="#">Type specimen book</a></li>
                          </ul>
                      </div>
                  </div><!--- END COL -->

                  <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="single_footer single_footer_address">
                          <h4>Subscribe today</h4>
                          <div class="signup_form">
                              <form action="#" class="subscribe">
                                  <input type="text" class="subscribe__input" placeholder="Enter Email Address">
                                  <button type="button" class="subscribe__btn"><i class="fas fa-paper-plane"></i></button>
                              </form>
                          </div>
                      </div>

                      <div class="social_profile">
                          <ul class="fotter-ul">
                              <li><a  class="fotter-links f-icons"href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a  class="fotter-links f-icons"href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a  class="fotter-links f-icons"href="#"><i class="fab fa-google-plus-g"></i></a></li>
                              <li><a  class="fotter-links f-icons"href="#"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div><!--- END COL -->
              </div><!--- END ROW -->

              <div class="f-row">
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                      <p class="copyright">Copyright © 2019 <a href="#">Akdesign</a>.
                      </p>
                  </div><!--- END COL -->
              </div><!--- END ROW -->
          </div><!--- END CONTAINER -->
      </div>


        <script>
          function toggleMenu() {
              var menu = document.getElementById("menu");
              menu.classList.toggle("show");
          }

          
          var slideIndex = 0;
          showSlides();
                  
          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("slide");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 3000);
          }
          
      </script>
    </body>
</html>