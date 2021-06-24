<!DOCTYPE html>
<?php session_start();?>
<html>
  <head>
    <title>Your profile</title>
    <link rel="stylesheet" href="user profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img class="img" src="travel.png">Airline reservation system</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <?php if(isset($_SESSION['uname'])): ?>
        <a class="nav-link" id="user" href="#"><?php echo "Welcome " .$_SESSION['uname']; ?></a>
      <?php endif ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usersearch.php"><i class="fa fa-plane" aria-hidden="true"></i>flight schedules</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>about us</a>
      </li>
      <?php if(isset($_SESSION['uname'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="ticket.php"><i class="fas fa-receipt" aria-hidden="true"></i>Your Bookings</a>
        </li>
      <li class="nav-item">
        <a class="nav-link"  href="homepage.php?homelogout='1'" ><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a>
      </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="signin.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a>
        </li>
      <?php endif ?>
    </ul>
  </div>
  </nav>
    </section>
    <section class="user_profile">
      <?php
      if (isset($_SESSION['uname'])){
      $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
      $query="SELECT * FROM us WHERE uname = '{$_SESSION['uname']}'";
      $results=mysqli_query($db,$query);
      if (mysqli_num_rows($results)){
        $row =  mysqli_fetch_assoc($results);
      }
      else {
        echo "no such user found user";
      }
      }
       ?>
       <?php
       function update(){
       if (isset($_POST['update'])){
         $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
         $name = mysqli_real_escape_string($db,$_POST['name']);
         $pwd = mysqli_real_escape_string($db,$_POST['pwd']);
         $cpwd = mysqli_real_escape_string($db,$_POST['cpwd']);
         $dob = mysqli_real_escape_string($db,$_POST['dob']);
         if ($pwd == $cpwd){

           $query="UPDATE us SET name = '$name', password = '$pwd', dob = '$dob'  WHERE uname = '{$_SESSION['uname']}'";
           $results=mysqli_query($db,$query);
           echo '<h4 align="center" style="color:green;" >Profile updated successfully</h4>';
         }
         else{
           echo '<h4 align="center" style="color:red;" >Password does not match</h4>';
         }
       }
}
        ?>
       <div class="profile">
        <br>  <h1 align="center">Edit Your profile</h1><br>
         <form class="change-profile"  method="post">
           <?php update(); ?>
           <label for="name">Name</label><input  type="text" class="input-group input-group-sm" name="name" required value="<?php if(isset($_SESSION['uname'])){echo $row['name']; } ?>"><br>
           <label for="eid">Email ID</label><input disabled type="email" class="input-group input-group-sm" name="eid"  value="<?php if(isset($_SESSION['uname'])){echo $row['eid']; } ?>"><br>
           <label for="dob">DOB</label><input type="date" class="input-group input-group-sm" name="dob"  required value="<?php if(isset($_SESSION['uname'])){echo $row['dob']; } ?>"><br>
           <label for="pwd">Reset password</label><input  type="text" class="input-group input-group-sm"  name="pwd"  ><br>
           <label for="cpwd">confirm password</label><input  type="text" class="input-group input-group-sm"  name="cpwd"  ><br>
           <center><input type="submit" class="btn btn-info" name="update" value="Update"></center>
         </form><br>
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
