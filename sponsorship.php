<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PAF - Sponsorship</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/image001.png" rel="icon">
  

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style type="text/css">
  #hero {
  width: 100%;
  height: 30vh;
  background: url("assets/img/bg.jpg") top left;
  background-size: cover;
  position: relative;
}

#hero2{
  width: 100%;
  height: 30vh;
  //background: url("../img/image012.jpg") top left;
  background-size: cover;
  position: relative;
}
#hero2:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.3);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}



#hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}

#hero h1 span {
  color: #00a651 ;
}


#hero h2 {
  color: #fff;
  margin: 5px 0 30px 0;
  font-size: 24px;
  font-weight: 400;
}

</style>


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">africapaf@gmail.com </a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+256 789 104 159 </span> <span>+256 789 280 711</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets/img/image001.png" style="width: 85px; height: 85px;" alt=""></a>
     

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="about.html">What We Do</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Moments</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
         
      
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Child Sponsorship<span> <br>  </span></h1>
      <h2>Get involve and sponsor a child today </h2>
      <div class="d-flex">
        <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <section id="about" class="about section-bg2">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Child </h2>
          <?php
            if(isset($_GET['n'])){
              $n = $_GET['n'];
              $a = $_GET['a'];
              $g = $_GET['g'];
              $i = $_GET['i'];
            ?>

            
           <h3><?php echo $n;?>  <!--<span>Amugen</span>--></h3>
          <?php
          }else{
            echo "No Name";
          }
          ?>
          <p></p>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="">
      
        <div class="row">
    
          <!-- Profile Information Column -->
          <div class="col-lg-4 mt-0">
            <img src="assets/img/<?php echo $i;?>" class="img-fluid border-radius-photo" alt="Team Member Photo">
            <p class="mt-3 px-0 text-center"><?php echo $n;?></p>
          </div>
    
          <div class="col-lg-8">
            <!-- First Paragraph -->
            <div class="row text-justify">
              <div class="col-lg-12 text-justify mt-1">
                <p class="mt-5 ml-2">name: <b><?php echo $n;?></b></p>
                <p class=" ml-2">Age: <b><?php echo $a;?></b></p>
                <p class=" ml-2">Greatest need: <b><?php echo $g;?></b></p>
                <p class="ml-2">Joan has been a member of the Passion Aid Foundation Africa’s board since 2021. An Insightful organizational programmer with over 9 years’ experience working with network organization implementing high-level projects with mid-sized teams. Possessing dependable relationship building and management skills to deliver faster than projected with history of meeting deadlines. She has vast experience in Strategic Planning, Project Management, Monitoring and Evaluation, Coordination, Training & Development, Appraisal, discipline, Welfare and Rewards, Change Management and Performance Improvement. Joan holds a Bachelor of Arts Degree in Social Development, master’s in business administration and management, and currently serving as Programs Manager at Lango Civil Society Network; a membership umbrella organization made up of Civil Society Organizations, CBOs, FBOs. LACSON has a total of 150 member organizations that are actively doing work in Lango.</p>
                <a href="#contact"><button class="btn btn-primary ml-2">Sponsor</button></a>
              </div>
            </div>
    
            <!-- Second Paragraph 
            <div class="row mt-4 text-justify">
              <div class="col-lg-12">
                <p>Joan has worked across public, private, and non-governmental sectors, gaining experience in coordination, partnership, advocacy, learner field supervision, peace-building, and training. She serves as a senior clinical instructor, chairperson of the disciplinary committee, and head of the department of midwifery trainer at Jerusalem Institute of Health Sciences. Her commitment, self-drive, and motivation reflect in her continuous efforts to provide quality service and improve the quality of life for people facing health challenges.</p>
              </div>
            </div>-->
          </div>
        </div>
      </div>
    </section>

    

    <!-- ======= Frequently Asked Questions Section ======= -->
   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sponsorsip</h2>
          <h3><span>Sign up to sponsor now</span></h3>
          <p>Reach out to support a life</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <!-- <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Junior Quarters, P.O BOX 330480 Lira City</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>africapaf@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+256 789 104 159 </p>
            </div>
          </div> -->

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">
            <div style="width: 100%"><img src="assets/img/s.jpg" class="img-fluid border-radius-photo" alt="Team Member Photo"></div>
          </div>
          

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="phone" class="form-control" name="subject" id="subject" placeholder="Phone Number" required>
              </div>
              <div class="form-group">
                <!-- <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea> -->
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your registration was successful. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Junior Quarters<span>.</span></h3>
            <p>
              P.O BOX 330480  <br>
              Lira City<br>
              Northern Uganda<br><br>
              <strong>Phone:</strong> +256 789 104 159<br>Tel:  / +256 789 280 711
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>PAFAfrica.org</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Dovin Ssenyange</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>