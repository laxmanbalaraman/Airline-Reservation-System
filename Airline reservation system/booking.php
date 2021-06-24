<?php include('flightdb.php') ?>
<?php include('loginvalid.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking Portal</title>
    <link rel="stylesheet" href="pbooking.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/e4eecd86d3.js"></script>
   </head>
  <body>
  <section class="header">
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
        <a class="nav-link" href="#"><i class="fa fa-plane" aria-hidden="true"></i>flight schedules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>about us</a>
      </li>
      <?php if(isset($_SESSION['uname'])): ?>
      <li class="nav-item">
        <a class="nav-link"  href="usersearch.php?searchlogout='1'" ><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a>
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
</section>
<section id="php">
  <?php
    if(isset($_GET['Book'])){
    $_SESSION['tcode']=$_GET['Book'];
    $_SESSION['dayid']=$_GET['Day'];
    $_SESSION['Time_ID']=$_GET['Time_ID'];
    $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
    $result=mysqli_query($db,"SELECT F.Flight_name,F.Seats,T.Departure,T.Arrival,T.Travel_type,C.Departure_time,C.Arrival_time,D.Day,cp.Price FROM flight_info F , travel_info T,time C,day_info D, cprice_info cp
            WHERE  F.Flight_ID=T.Flight_ID AND C.Travel_code=T.Travel_code AND D.Day_ID=C.Day_ID AND T.Travel_code={$_GET['Book']} AND D.Day_ID={$_GET['Day']} AND C.Time_ID={$_GET['Time_ID']}
            AND cp.Travel_code=T.Travel_code AND cp.Cno=1");
    }

    $row=mysqli_fetch_assoc($result);
  ?>
</section>

<section id="container">
  <div class="container text-center w-100">
      <h1 class="py-4 m-0 bg-primary text-light "><i class="fas fa-shopping-cart"></i> Booking Portal</h1>
  </div>
  <div class="row">
  <div class="col-md-6 text-center fname">
  <h1 ><i class="fas fa-plane-departure"></i><?php echo $row['Flight_name']; ?></h1>
 </div>
 <div class="col-md-3 content ">
   <p class="lead"><strong>From:     </strong><?php echo $row['Departure']; ?></p>
  <p class="lead"><strong>To:     </strong><?php echo $row['Arrival']; ?></p>
  <p class="lead"><strong>Departure time:     </strong><?php echo $row['Departure_time']; ?></p>
  <p class="lead"><strong>Arrival time:     </strong><?php echo $row['Arrival_time']; ?></p>
</div>
<div class="col-md-3 content">
  <p class="lead"><strong>Type:     </strong><?php echo $row['Travel_type']; ?></p>
    <p class="lead"><strong>Day:     </strong><?php echo $row['Day']; ?></p>
    <p class="lead"><strong>Flight name:     </strong><?php echo $row['Flight_name']; ?></p>
    <p class="lead"><strong>Starting Price:     </strong><i class="fa fa-inr"  aria-hidden="true"></i><strong><?php echo $row['Price']; ?></strong></p>
</div>

</div>
<div class="d-flex justify-content-center seatsinfo">
  <div class="d-flex flex-column">
  <div class="p-2 text-center"><h3>Enter the Number of seats</h3></div>
    <form class="seatinfo" method="post">
  <div class="row">
    <div class="col">
            <div class="input-group mb-2 ">
        <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-info-circle"></i></div>
        </div>
        <input type="number" min="1" max="6" required autocomplete="off" name="Seatno" placeholder="No of seats" class="form-control" id="inlineFormInputGroup">
      </div>
    </div>
    <div class="col">
            <div class="input-group mb-2 ">
        <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
        </div>
        <select class="custom-select"  name="class" required>
      <option selected disabled>Choose Class</option>
      <option value=1>Economy</option>
      <option value=2>Business</option>
      <option value=3>First Class</option>
    </select>
      </div>
    </div>
    <div class=" text-center seatbtn">
    <button type="submit" class="btn btn-success" name="s" ><strong>Submit</strong></button>
    <a href="usersearch.php"><button type="button" class="btn btn-secondary" name="back"> <i class="fa fa-angle-double-left" aria-hidden="true"></i><strong> Go Back</strong></button></a>

  </div>
  </div>
  </form>
</div>
  </div>

</section>

<section id="pform">


<?php  if(isset($_POST['s'])){?>
<?php if($row['Seats']>=$_POST['Seatno']&&$_POST['Seatno']>0){$type=$_POST['class'];$row['Seats']=$row['Seats']-$_POST['Seatno'];$_SESSION['num']=$_POST['Seatno'];$_SESSION['class']=$_POST['class'];?>
<div class=" pform">
<h1 class="py-4 bg-dark text-light text-center top"> <i class="fa fa-list-alt" aria-hidden="true"></i> Passenger Information</h1>
</div>
<div class="text-center">
<div class="alert alert-info text-center " role="alert">
  Fill the details below
</div>
</div>
<form class="Passengerform" action="realbooking.php?type=<?php echo $type; ?>" method="post">
<?php for ($i=0; $i < $_POST['Seatno'] ; $i++) { ?>
  <div class="d-flex p-3 justify-content-center">
  <div class="row w-50">
    <div class="col">
  <div class="input-group mb-2 ">
          <div class="input-group-prepend ">
            <div class="input-group-text bg-warning"><i class="fa fa-user-o" aria-hidden="true"></i></div>
          </div>
          <input type="text"required class="form-control" id="inlineFormInputGroup" name='Pname[]' placeholder="Passenger Name">
        </div>
      </div>
      <div class="col">
        <div class="input-group mb-2 ">
    <div class="input-group-prepend">
      <div class="input-group-text bg-warning"><i class="fas fa-venus-mars"></i></i></div>
    </div>
    <select class="custom-select" required  name="Gender[]" required>
  <option selected disabled>Choose Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select>
  </div>
        </div>
      </div>
    </div>

<?php
}
$_SESSION['seat']=$_POST['Seatno'];
 ?>

<div class=" text-center seatbtn">
<button type="submit" class="btn btn-success" name="checkout" ><i class="fa fa-check" aria-hidden="true"></i>        Proceed to pay</button>
</div>

</form>

<?php }  else { ?>
  <div class="text-center">
  <div class="alert alert-danger" role="alert">
    Oops! Not enough seats available. Try reducing numbers.
  </div>
</div>
<?php } ?>
<?php  } ?>


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
        <form class="foot"  method="post">
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
