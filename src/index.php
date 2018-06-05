<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "./dbconnector/mysql-connector.php";?>
    <?php $result = mysqli_query($conn, "SELECT * FROM tb_portfolio");?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>One Page Portfolio</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link href="css/style.css" rel="stylesheet">
    <link href="css/card_layout.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,700" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <header class="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6 col-xs-12">
              <nav>
                <div id="menu-toggle">
                  <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                  <div class="cross">
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                </div>
                <ul class="main-nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Portfolio</a></li>
                  <li><a href="#">Skills</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </nav>
              <!-- <a href="#" class="menu"><img src="assets/menu.png"></a> -->
              <div class="hero-text">
                 <img class="profile-image" src="./assets/profile.jpeg"style="width:200px;height:auto">
                <h1><span>Hi, I'm</span><br>Nidennis Be</h1>

                <h3>WELCOME TO MY PORTFOLIO WEBSITE</h3>
                <a href="#" class="btn btn-lg btn-primary">Download my CV</a>
                <ul class="social-links">
                  <li class="label">Connect with me via </li>
                  <li><a href="https://www.facebook.com/nidennisbe" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://github.com/nidennisbe" class="social-icon"> <i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.youtube.com/user/nidennisbe" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/dev_nidennisbe/" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section class="case-study">
        <div class="container">
          <div class="row" >
            <div class="col-md-12">
              <h1 class="heading purple">Summary</h1>
              <h1 class="heading purple"><span class="purple">Android developer </span> in <br>Auckland</h1>
              <!-- Swiper -->

                  <div class="swiper-slide client-box">

                    <h3 class="text-left title">Experienced in coding with native android, desktop software and some web applications.
                       I really enjoy learning latest technologies as have strong appreciation for its ability to provide efficient
                       solutions and improve productivities. I would value the opportunity to work for your company and create quality
                       software products that will meet the demands of your customers as well as I would be pleased to utilize my skills
                       to transform and upgrade your software to perform well and to build a professional image for your business.
                    </h3>
                    <p class="text-left tag">"Be patient and persistent"</p>
                      <img src="assets/signature.png" class="client-logo">

              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="testimonial">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="sub-heading">Happy</h4>
              <h1 class="heading pink"><span class="pink">My</span> mobile <br>projects</h1>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- Swiper -->
              <div class="swiper-container testimonial-swiper">
                <div class="swiper-wrapper">
                  <?php while ($result && $row = mysqli_fetch_assoc($result)) {?>
                          <div class="wrapper">
                                      <div class="product-img">
                                          <img src="<?php echo $row['imageUrl'];?>" height="350" width="100%">
                                      </div>

                                      <div class="product-info">
                                          <div class="product-text">
                                              <h1><?php echo $row['title'];?></h1>
                                              <h2>Platform: <?php echo $row['platform'];?></h2>
                                              <p style="text-align:justify"><?php echo $row['description'];?> </p>
                                          </div>
                                          <div class="product-price-btn">
                                              <button type="button" onclick="location.href='../templetes/review-detail.php?id=<?php echo $row['id'];?>';">Read more</button>
                                          </div>
                                       </div>
                          </div>
                        <?php }
                                ?>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
<section class="start">


</section>
      <!-- Statistics -->
      <section class="stats">
        <div class="container">
          <div class="row">
            <div class="col-md-4 text-center stat-box">
              <h1 class="purple"><span class="counter">7.0</span>Band Scores</h1>
              <h3>ANDROID DEVELOPEMENT</h3>
            </div>
            <div class="col-md-4 text-center stat-box">
              <h1 class="blue counter">6.5</h1>
              <h3>Java</h3>
            </div>
            <div class="col-md-4 text-center stat-box">
              <h1 class="pink"><span class="counter">7.0</span>Band Scores</h1>
              <h3>Mobile UI Design</h3>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Banner -->
      <section class="contact-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1>Let’s talk about your product</h1>
              <a href="#" class="btn btn-lg btn-primary">Get in touch now</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer>
        <div class="container-fluid">
          <div class="row footer">
            <div class="col-md-12 text-center">
              <h1>Maria<br><span>Ferrero</span></h1>

            </div>
          </div>
          <div class="row sub-footer">
            <div class="col-md-12 text-center">
              <p>Copyright 2018 <a href="#" target="_blank">NidennisBE</a></p>
            </div>
          </div>
        </div>
      </footer>

      <!-- Some Javascript -->
      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/swiper.jquery.min.js"></script>
      <!-- Initialize Client Swiper -->
      <script>
      var swiper1 = new Swiper('.client-swiper', {
        slidesPerView: 3,
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 60,
        // Responsive breakpoints
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: '.swiper-pagination'
          },
          // when window width is <= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is <= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 30
          }
        }
      });
      // Initialize Testimonial Swiper
      var swiper2 = new Swiper('.testimonial-swiper', {
        slidesPerView: 3,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        grabCursor: true,
        freeMode: true,
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          // when window width is <= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 10
          },
          // when window width is <= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 10
          }
        }
      });
      </script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script>
      // Counterup
      $('.counter').counterUp({
        time: 1000
      });

      // Main Navigation
      $('#menu-toggle').click(function(){
        $(this).toggleClass('open'),
        $('.main-nav').toggleClass('show-it');
      })
      </script>

      <!-- Google Analytics - You should remove this -->
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29231762-2', 'auto');
      ga('send', 'pageview');

      </script>
    </body>
    </html>
