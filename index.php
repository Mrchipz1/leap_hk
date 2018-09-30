<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Page Title -->
  <title>LEAP Hackathon - Learn Experience and Program</title>
  <!-- / -->

  <!---Font Icon-->
  <link href="static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
  <!-- / -->

  <!-- Plugin CSS -->
  <link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="static/plugin/magnific/magnific-popup.css" rel="stylesheet">

  <!-- / -->

  <!-- Theme Style -->
  <link href="static/css/styles.css" rel="stylesheet">
  <link href="static/css/color/default.css" rel="stylesheet" id="color_theme">
  <link rel="stylesheet" href="static/css/leapwise.css">
  <link rel="stylesheet" href="static/css/animate.css">
  <link rel="stylesheet" href="static/css/izimodal.min.css">
  <!-- / -->

    <!-- jQuery -->
  <script src="static/js/jquery-3.2.1.min.js"></script>
  <script src="static/js/jquery-migrate-3.0.0.min.js"></script>

  <!-- custom -->
  <script src="static/js/custom.js"></script>

  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" />
  <!-- / -->
</head>

<!-- Body Start -->
<body>

  <!-- Loading -->
  <div id="loading">
    <div class="load"><img src="./static/img/loader.gif" alt=""></div>
  </div>
  <!-- / -->
  
  <!-- Main Start -->
  <main>
    <!-- Modal structure -->
    <div id="modal" data-iziModal-title="LEAP Hackathon"  data-iziModal-subtitle="Join the contest"  data-iziModal-icon="icon-home">
        <!-- Modal content -->
        <div class="form">
          <div class="form-panel one">
            <div class="form-content">
              <form id="reg-form" >
                <div class="form-group">
                  <label for="username">Full name</label>
                  <input type="text" id="username" name="username" required="required"/>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required="required"/>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" required="required"/>
                </div>
                <div class="form-group">
                  <label for="regno">Reg. Number</label>
                  <input type="text" id="regno" name="reg_no" required="required"/>
                </div>
                <div class="form-group">
                  <label for="matno">Matric. Number</label>
                  <input type="text" id="matno" name="mat_no" required="required"/>
                </div>
                <div class="form-group">
                  <label for="department">Department</label>
                  <input type="text" id="department" name="dept" required="required"/>
                </div>
                <div class="form-group">
                  <label for="">Category</label>
                  <div class="row" style="width: 110%;">
                      <div class="inputGroup col-md-6" style="min-width: 50%;">
                        <input id="radio1" name="category" value="1" type="radio"/>
                        <label for="radio1">
                            <img src="./static/img/code.svg" style="width: 35px; height: 50px;"/>
                            <span style="font-weight: bolder;">Coding</span>
                        </label>
                      </div>
                      <div class="inputGroup col-md-6">
                        <!--<input id="radio2" name="radio" type="radio"/>-->
                        <input id="radio2" name="category" value="2" type="radio"/>
                        <label for="radio2">
                            <img src="./static/img/design.svg" style="width: 33px; height: 50px;"/>
                            <span style="font-weight: bolder;">Design</span>
                        </label>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit">Get Started</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
     
    <!-- Trigger to open Modal -->

    <!-- Home Banner Start -->
   <section id="home" class="home-banner-01 gray-bg-g border-bottom">
    <div class="bg-effect"></div>
    <div id="particles-box"></div>
      <div class="container">
        <div class="row full-screen align-items-center">
          <div class="col col-md-12 col-lg-6 col-xl-6 p-70px-tb md-p-30px-b sm-p-60px-t m-50px-t">
            <div class="home-text-center p-50px-r md-p-0px-r">
              <h1 class="font-alt animated fadeInUp">LEAP Hackathon</h1>
              <p class="animated fadeIn">
                The Learn, Experience and Program (LEAP) hackathon is a 5-day design and coding contest aimed at training and finding the fastest and sassiest designers and developers in Landmark University who are willing to step up their game, apply their skills and gain some recognition (and of course, win amazing prizes 😜).
              </p>
             <h4 style="margin-bottom: 5%; color: #DB3726; opacity: 0.8;" class="animated pulse infinite">Are you up for the challenge?</h4>
             <span class="animate slideInUp">Time left: <h3 id="demo" style="display: inline;"></h3></span>
            <br>
              <div class="subscribe-box"  style="margin-top: 5%;">
                <form>
                  <input placeholder="you@lmu.edu.ng" class="form-control animated fadeInLeft" type="text" name="email" id="first-email" required>
                  <button class="m-btn m-btn-theme2nd animated fadeInRight trigger" id="want-in" data-izimodal-open="#modal" data-izimodal-transitionin="fadeInDown" role="submit">I want in</button>
                </form>
              </div>
            </div> <!-- home-text-center -->
          </div> 
          <div class="col-md-12 col-lg-6 col-xl-6 home-right m-50px-t md-m-0px-t">
            <div class="home-right-inner">
              <img src="static/img/zone-5.svg" title="" alt="">
            </div>
          </div><!-- col -->
          <div class="col-md-12" style="text-align: center; padding-bottom: 10%;">
            Organized with <i class="fa fa-heart text-red"></i> by <a href="https://fstackdev.net" target="_blank" style="color: #2BC9B4; border-bottom: 1px dotted #2BC9B4; text-decoration: none;">FStackDev</a> • GDSC Landmark University • NACOSS, LMU
          </div>
        </div>
      </div><!-- container -->
    </section>
    <!-- / -->

  <!-- Plugins -->
  <script src="static/plugin/bootstrap/js/popper.min.js"></script>
  <script src="static/plugin/bootstrap/js/bootstrap.min.js"></script>
  <script src="static/plugin/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="static/plugin/magnific/jquery.magnific-popup.min.js"></script>
  <script src="static/js/izimodal.min.js"></script>

  <script type="text/javascript">
    $("#modal").iziModal();
  </script>
</body>
<!-- Body End -->

</html>