<?php include('flightdb.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Filghts Information</title>
    <link rel="stylesheet" href="employeecrud.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/e4eecd86d3.js"></script>
  </head>
  <body>
    <?php include('msgalerts.php') ?>
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img class="img" src="travel.png">Airline reservation system</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="esignin.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Sign out</a>
      </li>
    </ul>
  </div>
</nav>
</section>
<section id="box">

  <div class="container text-center ">
    <h1 class="py-4 bg-dark text-light rounded"> <i class="fa fa-plane" aria-hidden="true"></i> Flights Information</h1>

  <div class="d-flex justify-content-center">
      <form class="w-50" action="" method="post" >
          <div class="input-group mb-2 ">
      <div class="input-group-prepend">
        <div class="input-group-text bg-warning"><i class="fa fa-plane" aria-hidden="true"></i></div>
      </div>
      <input type="text" required autocomplete="off" name="Flight_name" placeholder="Flight Name" class="form-control" id="inlineFormInputGroup">
    </div>
    <div class="row">
      <div class="col">
              <div class="input-group mb-2 ">
          <div class="input-group-prepend">
            <div class="input-group-text bg-warning"><i class="fas fa-info-circle"></i></div>
          </div>
          <input type="text" required autocomplete="off" name="Flight_ID" placeholder="Flight ID" class="form-control" id="inlineFormInputGroup">
        </div>

      </div>
      <div class="col">
              <div class="input-group mb-2 ">
          <div class="input-group-prepend">
            <div class="input-group-text bg-warning"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
          </div>
          <input type="number" required autocomplete="off" name="Seats" placeholder="Seats" class="form-control" id="inlineFormInputGroup">
        </div>

      </div>
    </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success data-toggle="modal" data-target="#exampleModal"" name="create"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</button>
        <button type="submit" class="btn btn-primary" name="update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
        <button type="submit" class="btn btn-danger" name="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
      </div>
        </form>
        </div>
        <section id="table1">
                <div class="d-flex table-data ">
                  <table class="table table-striped table-light table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th>Flight ID</th>
                        <th>Flight Name</th>
                        <th>Seats</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">
                      <?php
                      $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
                      $result=mysqli_query($db,"SELECT * FROM flight_info");
                      ?>
                      <?php
                      while($row=mysqli_fetch_assoc($result)){ ?>
                      <tr>
                        <td data-id="<?php echo $row['Flight_ID']; ?>"><?php echo $row['Flight_ID']; ?></td>
                        <td data-id="<?php echo $row['Flight_ID']; ?>"><?php echo $row['Flight_name']; ?></td>
                        <td data-id="<?php echo $row['Flight_ID']; ?>"><?php echo $row['Seats']; ?></td>
                      </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
        </section>
    </div>
  </section>
  <section id="box">
    <div class="container text-center ">
      <h1 class="py-4 bg-dark text-light rounded"> <i class="fa fa-suitcase" aria-hidden="true"></i> Travel Information</h1>
    <div class="d-flex justify-content-center">
        <form class="w-50" action="" method="post" >
      <div class="row">
        <div class="col">
                <div class="input-group mb-2 ">
            <div class="input-group-prepend">
              <div class="input-group-text bg-warning"><i class="fas fa-route"></i></div>
            </div>
            <input type="number" required autocomplete="off" name="Travel_code" placeholder="Travel Code" class="form-control" id="inlineFormInputGroup">
          </div>
        </div>
        <div class="col">
                <div class="input-group mb-2 ">
            <div class="input-group-prepend">
              <div class="input-group-text bg-warning"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
            </div>
            <input type="text" required autocomplete="off" name="Flight_ID" placeholder="FlightID" class="form-control" id="inlineFormInputGroup">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
                <div class="input-group mb-2 ">
            <div class="input-group-prepend">
              <div class="input-group-text bg-warning"><i class="fa fa-plane-departure"></i></div>
            </div>
            <input type="text" required autocomplete="off" name="Departure" placeholder="Departure" class="form-control" id="inlineFormInputGroup">
          </div>

        </div>
        <div class="col">
                <div class="input-group mb-2 ">
            <div class="input-group-prepend">
              <div class="input-group-text bg-warning"><i class="fa fa-plane-arrival" aria-hidden="true"></i></div>
            </div>
            <input type="text" required autocomplete="off" name="Arrival" placeholder="Arrival" class="form-control" id="inlineFormInputGroup">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline1" name="Travel_type" required value="International" class="custom-control-input">
        <label class="custom-control-label" for="customRadioInline1">International</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" value="Domestic" name="Travel_type" class="custom-control-input">
        <label class="custom-control-label" for="customRadioInline2">Domestic</label>
        </div>

      </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-success" name="t_create"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</button>
          <button type="submit" class="btn btn-primary" name="t_update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
          <button type="submit" class="btn btn-danger" name="t_delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
        </div>
          </form>
          </div>
          <section id="table">
                  <div class="d-flex table-data ">
                    <table class="table table-striped table-light table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th>Travel Code</th>
                          <th>Flight ID</th>
                          <th>Departure</th>
                          <th>Arrival</th>
                          <th>Travel Type</th>
                        </tr>
                      </thead>
                      <tbody id="tbody">
                        <?php
                        $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
                        $result=mysqli_query($db,"SELECT * FROM travel_info");
                        ?>
                        <?php
                        while($row=mysqli_fetch_assoc($result)){ ?>
                        <tr>
                          <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Travel_code']; ?></td>
                          <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Flight_ID']; ?></td>
                          <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Departure']; ?></td>
                          <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Arrival']; ?></td>
                          <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Travel_type']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
          </section>
      </div>
    </section>
    <section id="box">
      <div class="container text-center ">
        <h1 class="py-4 bg-dark text-light rounded"> <i class="fas fa-money-check-alt"></i> Price Information</h1>
      <div class="d-flex justify-content-center">
          <form class="w-50" action="" method="post" >
              <div class="input-group mb-2 ">
          <div class="input-group-prepend">
            <div class="input-group-text bg-warning"><i class="fas fa-route" aria-hidden="true"></i></div>
          </div>
          <input type="number" required autocomplete="off" name="Travel_code" placeholder="Travel code" class="form-control" id="inlineFormInputGroup">
        </div>
            <div class="row">
              <div class="col">


              <div class="input-group mb-2 ">
          <div class="input-group-prepend">
            <div class="input-group-text bg-warning"><i class="fas fa-rupee-sign"></i></div>
          </div>
          <input type="number" required autocomplete="off" name="Price" placeholder="Price" class="form-control" id="inlineFormInputGroup">
        </div>
        </div>
        <div class="col">


        <div class="input-group mb-2 ">
    <div class="input-group-prepend">
      <div class="input-group-text bg-warning"><i class="fas fa-sort-numeric-up-alt"></i></div>
    </div>
    <input type="number" required autocomplete="off" name="Cno" placeholder="Class no" class="form-control" id="inlineFormInputGroup">
  </div>
  </div>
          </div>

          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success" name="P_create"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</button>
            <button type="submit" class="btn btn-primary" name="P_update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
            <button type="submit" class="btn btn-danger" name="P_delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
          </div>
            </form>
            </div>
            <section id="table">
                    <div class="d-flex table-data ">
                      <table class="table table-striped table-light table-hover">
                        <thead class="thead-dark">
                          <tr>
                            <th>Travel Code</th>
                            <th>Price</th>
                            <th>Class no.</th>
                          </tr>
                        </thead>
                        <tbody id="tbody">
                          <?php
                          $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
                          $result=mysqli_query($db,"SELECT * FROM cprice_info");
                          ?>
                          <?php
                          while($row=mysqli_fetch_assoc($result)){ ?>
                          <tr>
                            <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Travel_code']; ?></td>
                            <td data-id="<?php echo $row['Travel_code']; ?>"><i class="fas fa-rupee-sign"></i><?php echo " ".$row['Price']; ?></td>
                            <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Cno']; ?></td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
            </section>
        </div>
      </section>
      <section id="box">
        <div class="container text-center ">
          <h1 class="py-4 bg-dark text-light rounded"> <i class="fa fa-clock-o" aria-hidden="true"></i> Time Information</h1>
        <div class="d-flex justify-content-center">
            <form class="w-50" action="" method="post" >
              <div class="input-group mb-2 ">
            <div class="input-group-prepend">
            <div class="input-group-text bg-warning"><i class="fas fa-route"></i></div>
            </div>
            <input type="text" required autocomplete="off" name="Travel_code" placeholder="Travel Code" class="form-control" id="inlineFormInputGroup">
            </div>
          <div class="row">
            <div class="col">
                    <div class="input-group mb-2 ">
                <div class="input-group-prepend">
                  <div class="input-group-text bg-warning"><i class="fas fa-hourglass-start"></i></div>
                </div>
                <input type="time" required autocomplete="off" name="Departure_time" placeholder="Departure Time" class="form-control" id="inlineFormInputGroup">
              </div>
            </div>
            <div class="col">
                    <div class="input-group mb-2 ">
                <div class="input-group-prepend">
                  <div class="input-group-text bg-warning"><i class="fas fa-hourglass-end"></i></div>
                </div>

                <input type="time" required autocomplete="off" name="Arrival_time" placeholder="Arrival_time" class="form-control" id="inlineFormInputGroup">
              </div>
            </div>
            <div class="col">
                    <div class="input-group mb-2 ">
                <div class="input-group-prepend">
                  <div class="input-group-text bg-warning"><i class="fas fa-sun"></i></div>
                </div>
                <input type="number" required autocomplete="off" name="Day_ID" placeholder="Day ID" class="form-control" id="inlineFormInputGroup">
              </div>
            </div>
            <div class="col">
                    <div class="input-group mb-2 ">
                <div class="input-group-prepend">
                  <div class="input-group-text bg-warning"><i class="fas fa-history"></i></div>
                </div>
                <input type="number" required autocomplete="off" name="Time_ID" placeholder="Time ID" class="form-control" id="inlineFormInputGroup">
              </div>
            </div>
          </div>
          </div>

            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-success" name="ti_create"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</button>
              <button type="submit" class="btn btn-primary" name="ti_update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
              <button type="submit" class="btn btn-danger" name="ti_delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
            </div>
              </form>
              </div>
              <section id="table">
                      <div class="d-flex table-data text-center">
                        <table class="table table-striped table-light table-hover">
                          <thead class="thead-dark">
                            <tr>
                              <th>Travel Code</th>
                              <th>Departure Time</th>
                              <th>Arrival Time</th>
                              <th>Day ID</th>
                              <th>Time ID</th>
                            </tr>
                          </thead>
                          <tbody id="tbody">
                            <?php
                            $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
                            $result=mysqli_query($db,"SELECT * FROM time");
                            ?>
                            <?php
                            while($row=mysqli_fetch_assoc($result)){ ?>
                            <tr>
                              <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Travel_code']; ?></td>
                              <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Departure_time']; ?></td>
                              <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Arrival_time']; ?></td>
                              <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Day_ID']; ?></td>
                              <td data-id="<?php echo $row['Travel_code']; ?>"><?php echo $row['Time_ID']; ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
              </section>
          </div>
        </section>
        <section id="box">
          <div class="container text-center ">
            <h1 class="py-4 bg-dark text-light rounded"> <i class="fas fa-cloud-sun"></i> Day Information</h1>
          <div class="d-flex justify-content-center">
              <form class="w-50" action="" method="post" >
            <div class="row">
              <div class="col">
                      <div class="input-group mb-2 ">
                  <div class="input-group-prepend">
                    <div class="input-group-text bg-warning"><i class="fas fa-info"></i></div>
                  </div>
                  <input type="number" min="1" max="7" required autocomplete="off" name="Day_ID" placeholder="Day ID" class="form-control" id="inlineFormInputGroup">
                </div>
              </div>
              <div class="col">
                      <div class="input-group mb-2 ">
                  <div class="input-group-prepend">
                    <div class="input-group-text bg-warning"><i class="fas fa-calendar-day"></i></div>
                  </div>
                  <input type="text" required autocomplete="off" name="Day" placeholder="Day" class="form-control" id="inlineFormInputGroup">
                </div>
              </div>
            </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success" name="D_create"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create</button>
                <button type="submit" class="btn btn-primary" name="D_update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
                <button type="submit" class="btn btn-danger" name="D_delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
              </div>
                </form>
                </div>
                <section id="table">
                        <div class="d-flex table-data ">
                          <table class="table table-striped table-light table-hover">
                            <thead class="thead-dark">
                              <tr>
                                <th>Day ID</th>
                                <th>Day</th>
                              </tr>
                            </thead>
                            <tbody id="tbody">
                              <?php
                              $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
                              $result=mysqli_query($db,"SELECT * FROM Day_info");
                              ?>
                              <?php
                              while($row=mysqli_fetch_assoc($result)){ ?>
                              <tr>
                                <td data-id="<?php echo $row['Day_ID']; ?>"><?php echo $row['Day_ID']; ?></td>
                                <td data-id="<?php echo $row['Day_ID']; ?>"><?php echo $row['Day']; ?></td>
                              </tr>
                              <?php
                              }
                              ?>
                            </tbody>
                          </table>
                        </div>
                </section>
            </div>

          </section>
          <section id="box">
            <div class="container text-center ">
              <h1 class="py-4 bg-dark text-light rounded"> <i class="fas fa-user-tie"></i> Class Information</h1>

                  <section id="table">
                          <div class="d-flex table-data ">
                            <table class="table table-striped table-light table-hover">
                              <thead class="thead-dark">
                                <tr>
                                  <th>Class number</th>
                                  <th>Class type</th>
                                </tr>
                              </thead>
                              <tbody id="tbody">
                                <?php
                                $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
                                $result=mysqli_query($db,"SELECT * FROM class");
                                ?>
                                <?php
                                while($row=mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                  <td data-id="<?php echo $row['Cno']; ?>"><?php echo $row['Cno']; ?></td>
                                  <td data-id="<?php echo $row['Cno']; ?>"><?php echo $row['Cname']; ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                              </tbody>
                            </table>
                          </div>
                  </section>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
