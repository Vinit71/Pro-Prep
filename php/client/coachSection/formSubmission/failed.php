<?php 
   session_start();

   include("../../../config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>

<html>
    <head>
   <style>

body{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

svg {
  width: 200px;
  display: block;
  /* margin: 30px auto 0; */
  margin: 1.5rem auto;
}

.path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 0;
}
.path.circle {
  -webkit-animation: dash .9s ease-in-out;
  animation: dash .9s ease-in-out;
}
.path.line {
  stroke-dashoffset: 1000;
  -webkit-animation: dash .9s .35s ease-in-out forwards;
  animation: dash .9s .35s ease-in-out forwards;
}
.path.check {
  stroke-dashoffset: -100;
  -webkit-animation: dash-check .9s .35s ease-in-out forwards;
  animation: dash-check .9s .35s ease-in-out forwards;
}

.msg-head {
  text-align: center;
  /* margin: 20px 0 60px; */
  margin: 1rem 0 2rem 0;
  font-size: 1.25em;
}
p.success {
  color: #73AF55;
}
p.error {
  color: #D06079;
}

@-webkit-keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@-webkit-keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}
@keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}

.submission-container{
  box-shadow: 0 0 10px #003A85;
/* margin-top: 5rem; */
text-align: center;
margin: 5rem 10rem;
background-color: rgba(128, 128, 128, 0.3);
}

.submission-msg{
  font-size: 1.1em;
  color: black;
}

.submission-btn{
    /* display: inline-block; */
    display: flex;
    justify-content: center;
    margin: 1.5rem 31rem;
  padding: 10px 20px;
  background-color: #00246B;
  color: white;
  text-decoration: none;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.submission-btn:hover {
  box-shadow: 2px 2px 4px #00246B;
    background-color:white;
    color: #00246B;
}

   </style>
    </head>
    <body>

        <!-- Failure -->
        <div class="submission-container">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
            <circle class="path circle" fill="none" stroke="#D06079" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
            <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
            <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
          </svg>
          <p class="msg-head error">Failed!</p>

            <p class="submission-msg">You are already our costumer. Kindly check your mail<br>
            Contact us: proprepsupport@gmail.com</p>
            
            <a class="submission-btn" href="../../index.php">Go back</a>
        </div>
       
      
      
    </body>
</html>