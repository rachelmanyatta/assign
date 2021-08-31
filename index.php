<?php
session_start();

if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    img {
     margin-top:-60px;
      object-position: center;
    }
  </style>


  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
      background-image: url("IMG5.jpeg");

    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
      height: 400px;
      
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 100%;
      position: relative;
      top: 0px;
      justify-content: center;
      background-color: #481314;
    }



    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
      visibility: hidden;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }

    .tablink {
      background-color: #555;
      color: white;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      font-size: 17px;
      width: 25%;
    }
  </style>

  <style>
    #mySidenav a {
      position: absolute;
      left: -80px;
      transition: 0.3s;
      padding: 15px;
      width: 50px;
      text-decoration: none;
      font-size: 20px;
      color: #481314;
      border-radius: 0 5px 5px 0;
    }

    #mySidenav a:hover {
      left: 0;
    }

    #contacts {
      bottom: 20px;
      background-color: black;
    }

    #mycv {
      bottom: 80px;
      background-color: black;
    }

    #courses {
      bottom: 140px;
      background-color: black;
    }

    #about {
      bottom: 200px;
      background-color: black;
    }
  </style>
</head>

<body>

  <div style="margin-left:80px;">
  </div>

  </head>

  <body>

    <style>
      h1 {

        color: black;
        float: right;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 30px 16px;
        font-size: 50px;
        font-family: Cursive, brush script MT;
      }
    </style>

    <p>
    <h1><strong>Hello!<br />
        Welcome to Rachel's Website.<br />
        Made to make studying easier for you.<br />
      </strong></h1>
    </p>
  </body>

</html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
    font-family: Cursive, brush script MT;
  }

  .pill-nav {}

  .pill-nav a {
    display: inline-block;
    color: #481314;
    text-align: center;
    padding: 14px;
    text-decoration: none;
    font-size: 17px;
    border-radius: 5px;



  }

  .pill-nav a:hover {
    background-color: black;
    color: #481314;
  }

  .pill-nav a.active {
    background-color: black;
    color: #481314;

  }
</style>
</head>

<body>
  <div class="pill-nav">
    <a href="index.php">Home</a>
    <a href="aboutme.php">About</a>
    <a href="register.php">Register</a>
    <a href="courses.php">courses</a>
    <a href="Manyatta.pdf">CV</a>
    <a href="Contact.php">Contacts</a>
    <a href="login.php">login</a>
    <?php if(isset($_SESSION['username'])) : ?>
<a href="index.php?logout='1' " style="color:black;">logout</a> 
 <?php endif ?>
</br ></br></br ></br >
  </div>

  <img src="1mgz.jpeg" alt="Capture photo" width="600" height="900" /></td>

</body>

</html>