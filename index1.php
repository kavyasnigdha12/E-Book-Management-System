<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PixyBook</title>
    <link rel="stylesheet" href="Style1.css">
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
    crossorigin="anonymous"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
    rel="stylesheet"
  />
</head>
<body>
   <nav class="navbar">
   <div class="navbar__container">
    <a href="/" id="navbar__logo"><img src="images\icons8-magic-wand-48.png" height="50"><b>&nbsp;PixyBook</b></a>
    <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="navbar__menu">
      <li class="navbar__items">
        <a href="#about" class="navbar__links">About</a>
      </li>      
      <li class="navbar__btn">
        <a href="login.php" class="button">Sign In</a>
      </li>
    </ul>
   </div>
   </nav>

  <!-- 
  <div class="joke">
    <h1 style="text-align: center; color: red;">VARDHAMAN COLLEGE OF ENGINEERING, HYDERABAD</h1>
    <h2 style="text-align: center; color: red;">Autonomous institute, affiliated to JNTUH</h2>
    <h2 style="text-align: center; color: orange;">DEPARTMENT OF INFORMATION TECHNOLOGY</H2>
  </div>-->
   

   <!-- Hero Section -->
   <div class="main">
    <div class="main__container">
      <div class="main__content">
        <h1>READ FROM ANY CORNER</h1>
        <h2>OF THE WORLD!</h2>
        <h3>Download Books At The Most Reasonable Price!</h3>
        <button class="main__btn">
          <a href="login.php">Join Now</a>
        </button>
      </div>
      <div class="main__img--container">
        <img id="main__img" src="images\undraw_book_reading_re_fu2c.svg"  />
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="main" id="about">
    <div class="main__container">
      <div class="main__content">
        <h2>About</h2>
        <p>PixyBook boasts an extensive and diverse collection of e-books curated specifically for young adults. Our team of dedicated bibliophiles scours the literary world to bring you the most enthralling reads across all genres. From bestselling authors to rising talents, we've got it all, ensuring that you never run out of exciting options to explore.
          We believe that reading should be an effortless and enjoyable experience. Our user-friendly interface is designed to make navigating through the vast library a breeze. With a clean layout and intuitive search options, finding your next adventure is just a few clicks away.

          <br><br>
          Join us today and open the door to a world of stories, adventures, and infinite possibilities. Happy reading with PixyBook!
        </p>
        
      </div>
      <div class="main__img--container">
        <img id="main__img2" src="images\undraw_bookshelves_re_lxoy.svg"  />
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <div class="footer__container">
    <div class="footer__links">
      <div class="footer__link--wrapper">
        <div class="footer__link--items">
          <h2>About Us</h2>
          <a href="/">How it works</a> <a href="/">Testimonials</a>
          <a href="/">Careers</a> <a href="/">Investments</a>
          <a href="/">Terms of Service</a>
        </div>
        <div class="footer__link--items">
          <h2>Contact Us</h2>
          <a href="/">Contact</a> <a href="/">Support</a>
          <a href="/">Destinations</a> <a href="/">Sponsorships</a>
        </div>
      </div>
      <div class="footer__link--wrapper">
        <div class="footer__link--items">
          <h2>Videos</h2>
          <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
          <a href="/">Agency</a> <a href="/">Influencer</a>
        </div>
        <div class="footer__link--items">
          <h2>Social Media</h2>
          <a href="/">Instagram</a> <a href="/">Facebook</a>
          <a href="/">Youtube</a> <a href="/">Twitter</a>
        </div>
      </div>
    </div>
    <section class="social__media">
      <div class="social__media--wrap">
        <div class="footer__logo">
          <a href="/" id="footer__logo"><img src="images\icons8-magic-wand-48.png" height="60">&nbsp;BookyPixy</a>
        </div>
        <p class="website__rights">© BookyPixy 2023. All rights reserved</p>
        <div class="social__icons">
          <a
            class="social__icon--link"
            href="/"
            target="_blank"
            aria-label="Facebook"
          >
            <i class="fab fa-facebook"></i>
          </a>
          <a
            class="social__icon--link"
            href="/"
            target="_blank"
            aria-label="Instagram"
          >
            <i class="fab fa-instagram"></i>
          </a>
          <a
            class="social__icon--link"
            href="#"
            target="_blank"
            aria-label="Youtube"
          >
            <i class="fab fa-youtube"></i>
          </a>
          <a
            class="social__icon--link"
            href="/"
            target="_blank"
            aria-label="Twitter"
          >
            <i class="fab fa-twitter"></i>
          </a>
          <a
            class="social__icon--link"
            href="/"
            target="_blank"
            aria-label="LinkedIn"
          >
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
      </div>
    </section>
  </div>
  <script src="app.js"></script>
</body>
</html>
