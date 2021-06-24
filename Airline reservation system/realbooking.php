<?php session_start(); ?>
<?php
  initiate_transaction();

  function initiate_transaction(){
    if(isset($_POST['paybtn'])){
      header("Location:ticket.php");
      send_mail();
    }

  }
  book_ticket();
  function book_ticket(){
  if(isset($_POST['checkout'])){
  $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
  $Pname=array();
  $Gender=array();
  $type=$_GET['type'];
  echo $type;
  $paid_by=$_SESSION['uname'];
  $Day_ID=$_SESSION['dayid'];
  $Class=$_SESSION['class'];
  $Time_ID=$_SESSION['Time_ID'];
  echo $Day_ID;
  $Pname=$_POST['Pname'];
  $Gender=$_POST['Gender'];
  deduct_seat();




  for ($i=0; $i < $_SESSION['num']; $i++) {
    $query="INSERT INTO passenger_info (Travel_code,Pname,Gender,paid_by,Day_ID,Type,Time_ID)
           VALUES ({$_SESSION['tcode']},'$Pname[$i]','$Gender[$i]','$paid_by',$Day_ID,'$Class','$Time_ID')";
           if(mysqli_query($db,$query)){

             //Record Created messages!
            echo "Recorded added sucessfully";
           }

  }
  calc_amount($type);


}

}
function deduct_seat(){
  $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
  $reduce="UPDATE flight_info SET Seats=Seats-{$_SESSION['num']}
  WHERE Flight_ID=(SELECT Flight_ID FROM travel_info WHERE Travel_code={$_SESSION['tcode']})";
  if(mysqli_query($db,$reduce)){

    //Reduce seats messages!
   echo "Seats reduced successfully  sucessfully";
  }
}

function calc_amount($type){
  $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
  $result=mysqli_query($db,"SELECT Price FROM cprice_info WHERE Travel_code={$_SESSION['tcode']} AND Cno='$type'" );
  $row=mysqli_fetch_assoc($result);
  $Price=$row['Price'];
  header("Location:choosepayment.php?Price=$Price");
}

function send_mail(){
  $paid_by=$_SESSION['uname'];
  $db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
  $result=mysqli_query($db,"SELECT F.Flight_name,F.Seats,T.Departure,T.Arrival,cp.Price,cl.Cname,C.Departure_time,C.Arrival_time,D.Day,U.Pname,U.paid_by
          FROM flight_info F , travel_info T, cprice_info cp,time C,day_info D,passenger_info U, class cl
          WHERE  F.Flight_ID=T.Flight_ID AND cp.Travel_code=T.Travel_code AND C.Travel_code=T.Travel_code AND D.Day_ID=C.Day_ID AND U.Travel_code=T.Travel_code
           AND C.Time_ID=U.Time_ID AND U.paid_by='$paid_by'
          AND cp.Cno=U.Type AND cp.Cno IN (SELECT DISTINCT  TYPE FROM passenger_info WHERE paid_by='$paid_by')
          AND cl.Cno=Cp.Cno AND cl.Cno IN  (SELECT DISTINCT  TYPE FROM passenger_info WHERE paid_by='$paid_by')
          AND C.Time_ID IN  (SELECT DISTINCT Time_ID FROM passenger_info WHERE paid_by='$paid_by')");
    $count=mysqli_num_rows($result);
    if($count > 0){

      $bodymsg = '<h1 align="center" style="color:green;">Ticket Successfully Booked</h1>';
      for ( $i = 0; $i < $count; $i++ ){
      $row=mysqli_fetch_assoc($result);
      $bodymsg .= '
      <center>
      <div>

      <table border="1" cellspacing="0"  style="width:80%;" cellpadding="5" >
      <tr>
      <th colspan="2" style="color:blue; font-size:25px; ">'.$row['Pname'].'</th>
      </tr>
      <tr>
      <th>Flight Name</th>
      <td>'.$row['Flight_name'].'</td>
      </tr>
      <tr>
      <th>Departure</th>
      <td>'.$row['Departure'].'</td>
      </tr>
      <tr>
      <th>Departure time</th>
      <td>'.$row['Departure_time'].'</td>
      </tr>
      <tr>
      <th>Arrival</th>
      <td>'.$row['Arrival'].'</td>
      </tr>
      <tr>
      <th>Arrival Time</th>
      <td>'.$row['Arrival_time'].'</td>
      </tr>
      <tr>
      <th>Class</th>
      <td>'.$row['Cname'].'</td>
      </tr>
      </table>
      </div>
      </center><br><hr><br>
      ';
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: irctc12102020@gmail.com' . "\r\n";
    mail('laxmanbalaraman@gmail.com', "Ticket confirmatiom", $bodymsg, $headers);
    }
}

?>
