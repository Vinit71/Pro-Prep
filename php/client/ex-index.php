<?php 
   session_start();

   include("../config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../../styles/webstyle.css">
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

        <h1>We provide</h1>
        <div class="Home-grid">
            <a class="grid-item" id="img1" href="./coachSection/yogaCoach.php"><img src="../../img/img-yoga.jpg" alt="Image 5"></a>
            <a class="grid-item" id="img2" href="./coachSection/fitnessCoach.php"><img src="../../img/img-fitness.jpg" alt="Image 1"></a>
            <a class="grid-item" id="img3" href="./coachSection/boxingCoach.php"><img src="../../img/img-boxing.jpg" alt="Image 2"></a>
            <a class="grid-item" id="img4" href="./coachSection/calisthenicsCoach.php"><img src="../../img/img-calisthenics.jpg" alt="Image 3"></a>
            <a class="grid-item" id="img5" href="./coachSection/runningCoach.php"><img src="../../img/img-running.jpg" alt="Image 4"></a>
            <a class="grid-item" id="img6" href="./coachSection/plCoach.php"><img src="../../img/img-pl.jpg" alt="Image 5"></a>
        </div>

          <div id="about-us">
          <h1>About us</h1>
        </div>

        <!-- Coaches -->
        <div id="our-team">
            <h1>Our Team</h1>
          <div class="coaches">

                <div class="c-profile" id="c1">
                   <section class="top-card">
                     <img src="https://raw.githubusercontent.com/Jean-carje/Profile-card-Practice/master/Profile-card/img/user.jpg" alt="user picture">
                   </section>
               
                   <section class="middle-card">
                     <h1>About</h1>
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque iure earum, molestiae voluptatibus amet minus dolore.</p>
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
                     <img src="https://raw.githubusercontent.com/Jean-carje/Profile-card-Practice/master/Profile-card/img/user.jpg" alt="user picture">
                   </section>
               
                   <section class="middle-card">
                     <h1>About</h1>
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque iure earum, molestiae voluptatibus amet minus dolore.</p>
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
                     <img src="https://raw.githubusercontent.com/Jean-carje/Profile-card-Practice/master/Profile-card/img/user.jpg" alt="user picture">
                   </section>
               
                   <section class="middle-card">
                     <h1>About</h1>
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque iure earum, molestiae voluptatibus amet minus dolore.</p>
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
                <img src="https://raw.githubusercontent.com/Jean-carje/Profile-card-Practice/master/Profile-card/img/user.jpg" alt="user picture">
              </section>
          
              <section class="middle-card">
                <h1>About</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque iure earum, molestiae voluptatibus amet minus dolore.</p>
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
                  <img src="https://raw.githubusercontent.com/Jean-carje/Profile-card-Practice/master/Profile-card/img/user.jpg" alt="user picture">
                </section>
              
                <section class="middle-card">
                  <h1>About</h1>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque iure earum, molestiae voluptatibus amet minus dolore.</p>
                </section>
              
                <footer>
                  <a href="#" class="social-icon instagram"><i class="fa-brands fa-square-instagram"></i></a>
                  <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                </footer>
            </div>

            <!-- hiring -->
            <div class="c-profile" id="c6"> 
              <section class="top-card">
                <img src="https://raw.githubusercontent.com/Jean-carje/Profile-card-Practice/master/Profile-card/img/user.jpg" alt="user picture">
              </section>
            
              <section class="middle-card">
                <h1>About</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque iure earum, molestiae voluptatibus amet minus dolore.</p>
              </section>
            
              <footer>
                <a href="#" class="social-icon instagram"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
              </footer>
          </div>

          </div>
        </div>
        
            <h1>Contact</h1>
        <div class="contact-section">

            <div class="contact-info">
              <h1>Contact Now</h1>
              <h3>Get connect with us......</h3>
              <ul class="contact-options">
                <li><i class="fa-solid fa-envelope option"></i> hanyrambod@gmail.com</li>
                <li><i class="fa-solid fa-phone option"></i> 9998887772</li>
                <li><i class="fa-solid fa-location-dot option"></i> #45-A Changigarh</li>
              </ul>
            </div>

            <div class="contact-form">
             
              <div class="container">
                <div class="row body">
                  <form action="#">
                    <ul id="form-main">
                      <h2>leave your details here.....</h2>
                      <li>
                        <p class="left form-field">
                          <input type="text" name="first_name" placeholder="First name *" />
                        </p>
                        <p class="pull-right form-field">
                          <input type="text" name="last_name" placeholder="Last name *" />      
                        </p>
                      </li>
                      
                      <li>
                        <p class="form-field">
                          <input type="email" name="email" placeholder="Email Address *" />
                        </p>
                      </li>

                      <li>
                        <p class="form-field">
                          <input type="number" name="ph-number" placeholder="Phone number *" />
                        </p>
                      </li>  
                      <li>  
                        <p class="form-field">    
                        <textarea cols="46" rows="3" name="comments" placeholder="Purpose *"></textarea>
                        </p>
                      </li>
                      
                      <li>
                        <input class="btn btn-submit" type="submit" value="Submit" />
                      </li>
                      
                    </ul>
                  </form>  
                </div>
              </div>
          </div>

        </div>

        <div class="footer">
            <h1>footer</h1>
        </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.classList.toggle("show");
        }
    </script>
    </body>
</html>