<!DOCTYPE html>
<?php include('uregvalid.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="homepage.php"><img class="img" src="travel.png">Airline reservation system</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-plane" aria-hidden="true"></i>flight schedules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>about us</a>
      </li>
    </ul>
  </div>
</nav>
    </section>
    <section>
      <div class="page-wrap">
        <div class="left-panel">
          <div class="illustration">
            <img src="regist.svg"  alt="">
          </div>
        </div>
        <div class="right-panel">
          <div class="animated-form">
            <h3>Sign Up to your account</h3>
            <form class="form" method="post">
              <?php include('uerrors.php') ?>
              <div class="form-group">
                <label for="name"><i class="fa fa-user" aria-hidden="true"></i>Name</label>
              <input type="text" id="name" name="name" required >
              </div>
              <div class="form-group">
                <label for="Username"><i class="fa fa-user-circle" aria-hidden="true"></i>Username</label>
              <input type="text" id="uname" name="uname" required >
              </div>
              <div class="form-group">
                <label for="Eid"><i class="fa fa-envelope" aria-hidden="true"></i>Email Id</label>
              <input type="email" id="eid" name="eid" required >
              </div>
              <div class="form-group">
                <label for="date"><i class="fa fa-calendar" aria-hidden="true"></i>DOB</label>
              <input type="date" id="date" name="dob" required >
              </div>
            <div class="form-group">
              <label for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Password</label>
              <input type="password" id="password" name="password" class="password" required >
              </div>
              <div class="form-group">
                <label for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" class="cpassword" required>
                </div>
              <div class="form-group flex-end">
                <button type="submit" class="button" name="signup">Sign Up</button>
              </div>
              <div class="No-account">
                <a href="signin.php" class="link">Have an account?Sign In</a>
              </div>
              </form>
          </div>
        </div>
      </div>

    </section>
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-info">
            <div class="ftitle">
            <h3>Airline Reservation System.</h3>
          </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
          </div>
          <div class="col-md-3 footer-links">
            <h3>Menu</h3>
            <ul>
              <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Home</a></li>
              <li><i class="fa fa-ticket" aria-hidden="true"></i><a href="#">Book tickets</a></li>
              <li><i class="fa fa-plane" aria-hidden="true"></i><a href="#">Flight Schedules</a></li>
              <li><i class="fa fa-question-circle" aria-hidden="true"></i><a href="#">About us</a></li>
              <li><i class="fa fa-phone" aria-hidden="true"></i><a href="#">Contct us</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-social">
            <h3>Follow us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"<i class="fa fa-whatsapp" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
          </div>
          <div class="col-md-3 Newsletter">
            <h3>Our Newsletter</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            <form class=""  method="post">
              <input type="email" class="email" name="" placeholder="Email">
              <input type="submit" class="submit" name="" value="Subscribe">
            </form>
          </div>
        </div>

      </div>
      <div class="box">
        <div class="copyright">
          &copy; copyright <strong>Airline Reservation system</strong>.All rights reserved.
            Designed with <i class="fa fa-heart" aria-hidden="true"></i> by 19CE1105 & 19BCE1460
      </div>
      </div>
    </section>
  </body>
</html>
