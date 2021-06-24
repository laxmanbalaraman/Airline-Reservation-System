<?php
$db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
$errors=array();
$msg=array();
$upd=array();
// create operation

if(isset($_POST['create'])){

  $Flight_name= mysqli_real_escape_string($db,$_POST['Flight_name']);
  $Flight_ID= mysqli_real_escape_string($db,$_POST['Flight_ID']);
  $seats= mysqli_real_escape_string($db,$_POST['Seats']);
  $query="INSERT INTO flight_info (Flight_ID,Flight_name,Seats)
         VALUES ('$Flight_ID','$Flight_name','$seats')";
  if(mysqli_query($db,$query)){

    //Record Created messages!

    array_push($msg,"Recorded added sucessfully");
  };

}

//update operation

if(isset($_POST['update'])){
  $Flight_name= mysqli_real_escape_string($db,$_POST['Flight_name']);
  $Flight_ID= mysqli_real_escape_string($db,$_POST['Flight_ID']);
  $seats= mysqli_real_escape_string($db,$_POST['Seats']);
  $query="UPDATE flight_info SET Flight_name='$Flight_name', Seats='$seats'
              WHERE Flight_ID='$Flight_ID'";
  if(mysqli_query($db,$query)){
    //Record Updated messages!
    array_push($upd,"Recorded Updated sucessfully");}
    else{
      array_push($errors,"Unable to update");
    }
  }

  //Delete opertaion

  if(isset($_POST['delete'])){
    $Flight_name= mysqli_real_escape_string($db,$_POST['Flight_name']);
    $Flight_ID= mysqli_real_escape_string($db,$_POST['Flight_ID']);
    $seats= mysqli_real_escape_string($db,$_POST['Seats']);
    $query="DELETE FROM flight_info WHERE Flight_ID='$Flight_ID'";
    if(mysqli_query($db,$query)){
      //Record deleted messages!
      array_push($errors,"Recorded Deleted sucessfully");}
      else{
        array_push($errors,"Unable to Delete");
      }
    }

    // create operation

    if(isset($_POST['t_create'])){
      $Flight_ID= mysqli_real_escape_string($db,$_POST['Flight_ID']);
      $Arrival= mysqli_real_escape_string($db,$_POST['Arrival']);
      $Travel_code= mysqli_real_escape_string($db,$_POST['Travel_code']);
      $Departure= mysqli_real_escape_string($db,$_POST['Departure']);
      $Travel_type= mysqli_real_escape_string($db,$_POST['Travel_type']);
      $query="INSERT INTO travel_info (Travel_code,Arrival,Departure,Flight_id,Travel_type)
             VALUES ('$Travel_code','$Arrival','$Departure','$Flight_ID','$Travel_type')";
      if(mysqli_query($db,$query)){
        //Record Created messages!
        array_push($msg,"Recorded added sucessfully");  }
      else{
        array_push($errors,"Unable to create");
      }
    }

    //update operation

    if(isset($_POST['t_update'])){
      $Flight_ID= mysqli_real_escape_string($db,$_POST['Flight_ID']);
      $Arrival= mysqli_real_escape_string($db,$_POST['Arrival']);
      $Travel_code= mysqli_real_escape_string($db,$_POST['Travel_code']);
      $Departure= mysqli_real_escape_string($db,$_POST['Departure']);
      $Travel_type= mysqli_real_escape_string($db,$_POST['Travel_type']);
      $query="UPDATE travel_info SET Arrival='$Arrival', Departure='$Departure',Flight_id='$Flight_ID',
                Travel_type='$Travel_type'  WHERE Travel_code='$Travel_code'";
      if(mysqli_query($db,$query)){
        //Record Updated messages!
        array_push($upd,"Recorded Updated sucessfully");}
        else{
          array_push($errors,"Unable to update");
        }
      }

      //Delete opertaion

      if(isset($_POST['t_delete'])){
        $Flight_ID= mysqli_real_escape_string($db,$_POST['Flight_ID']);
        $Arrival= mysqli_real_escape_string($db,$_POST['Arrival']);
        $Travel_code= mysqli_real_escape_string($db,$_POST['Travel_code']);
        $Departure= mysqli_real_escape_string($db,$_POST['Departure']);
        $Travel_type= mysqli_real_escape_string($db,$_POST['Travel_type']);
        $query="DELETE FROM travel_info WHERE Travel_code='$Travel_code'";
        if(mysqli_query($db,$query)){
          //Record deleted messages!
          array_push($errors,"Record Deleted sucessfully");}
          else{
            array_push($errors,"Unable to Delete");
          }
        }


        // create operation

        if(isset($_POST['P_create'])){
          $Travel_code= mysqli_real_escape_string($db,$_POST['Travel_code']);
          $Price= mysqli_real_escape_string($db,$_POST['Price']);
          $Cno= mysqli_real_escape_string($db,$_POST['Cno']);
          $query="INSERT INTO cprice_info (Travel_code,Price,Cno)
                 VALUES ('$Travel_code','$Price','$Cno')";
          if(mysqli_query($db,$query)){
            //Record Created messages!
            array_push($msg,"Recorded added sucessfully");  }
          else{
            array_push($errors,"Unable to create");
          }
        }

        //update operation

  if(isset($_POST['P_update'])){
    $Travel_code= mysqli_real_escape_string($db,$_POST['Travel_code']);
    $Price= mysqli_real_escape_string($db,$_POST['Price']);
    $Cno= mysqli_real_escape_string($db,$_POST['Cno']);
    $query="UPDATE cprice_info SET Price='$Price'
                WHERE Travel_code='$Travel_code' AND Cno='$Cno'";
    if(mysqli_query($db,$query)){
      //Record Updated messages!
      array_push($upd,"Recorded Updated sucessfully");}
      else{
        array_push($errors,"Unable to update");
      }
    }

    //Delete opertaion

    if(isset($_POST['P_delete'])){
      $Travel_code= mysqli_real_escape_string($db,$_POST['Travel_code']);
      $Price= mysqli_real_escape_string($db,$_POST['Price']);
      $Cno= mysqli_real_escape_string($db,$_POST['Cno']);
      $query="DELETE FROM cprice_info WHERE Travel_code='$Travel_code' AND Cno='$Cno'";
      if(mysqli_query($db,$query)){
        //Record deleted messages!
        array_push($errors,"Record Deleted sucessfully");}
        else{
          array_push($errors,"Unable to Delete");
        }
      }



    // create operation

    if(isset($_POST['ti_create'])){
      $Travel_code= mysqli_real_escape_string($db,$_POST['Travel_code']);
      $Arrival_time= mysqli_real_escape_string($db,$_POST['Arrival_time']);
      $Departure_time= mysqli_real_escape_string($db,$_POST['Departure_time']);
      $Day_ID= mysqli_real_escape_string($db,$_POST['Day_ID']);
      $Time_ID= mysqli_real_escape_string($db,$_POST['Time_ID']);
      $query="INSERT INTO time (Travel_code,Arrival_time,Departure_time,Day_ID,Time_ID)
             VALUES ('$Travel_code','$Arrival_time','$Departure_time','$Day_ID','$Time_ID')";
      if(mysqli_query($db,$query)){
        //Record Created messages!
        array_push($msg,"Recorded added sucessfully");  }
      else{
        array_push($errors,"Unable to create");
      }
    }

    //update operation

    if(isset($_POST['ti_update'])){

      $Travel_code= mysqli_real_escape_string($db,$_POST['Travel_code']);
      $Arrival_time= mysqli_real_escape_string($db,$_POST['Arrival_time']);
      $Departure_time= mysqli_real_escape_string($db,$_POST['Departure_time']);
      $Day_ID= mysqli_real_escape_string($db,$_POST['Day_ID']);
      $Time_ID= mysqli_real_escape_string($db,$_POST['Time_ID']);
      $query="UPDATE time SET Travel_code='$Travel_code', Arrival_time='$Arrival_time',Departure_time='$Departure_time'
                  WHERE  Time_ID='$Time_ID' AND Day_ID='$Day_ID'";
      if(mysqli_query($db,$query)){
        //Record Updated messages!
        array_push($upd,"Recorded Updated sucessfully");}
        else{
          array_push($errors,"Unable to update");
        }
      }

      //Delete opertaion

      if(isset($_POST['ti_delete'])){
        $Travel_code= mysqli_real_escape_string($db,$_POST['Travel_code']);
        $Arrival_time= mysqli_real_escape_string($db,$_POST['Arrival_time']);
        $Departure_time= mysqli_real_escape_string($db,$_POST['Departure_time']);
        $Day_ID= mysqli_real_escape_string($db,$_POST['Day_ID']);
          $Time_ID= mysqli_real_escape_string($db,$_POST['Time_ID']);
        $query="DELETE FROM time WHERE Day_ID='$Day_ID' AND Time_ID='$Time_ID' ";
        if(mysqli_query($db,$query)){
          //Record deleted messages!
          array_push($errors,"Record Deleted sucessfully");}
          else{
            array_push($errors,"Unable to Delete");
          }
        }

        //create operation

        if(isset($_POST['D_create'])){

          $Day= mysqli_real_escape_string($db,$_POST['Day']);
          $Day_ID= mysqli_real_escape_string($db,$_POST['Day_ID']);
          $query="INSERT INTO Day_info (Day_ID,Day)
                 VALUES ('$Day_ID','$Day')";
          if(mysqli_query($db,$query)){

            //Record Created messages!

            array_push($msg,"Recorded added sucessfully");
          };

        }

        //update operation

  if(isset($_POST['D_update'])){
    $Day= mysqli_real_escape_string($db,$_POST['Day']);
    $Day_ID= mysqli_real_escape_string($db,$_POST['Day_ID']);
    $query="UPDATE Day_info SET Day='$Day'
                WHERE Day_ID='$Day_ID'";
    if(mysqli_query($db,$query)){
      //Record Updated messages!
      array_push($upd,"Recorded Updated sucessfully");}
      else{
        array_push($errors,"Unable to update");
      }
    }

    //Delete opertaion

    if(isset($_POST['D_delete'])){
      $Day= mysqli_real_escape_string($db,$_POST['Day']);
      $Day_ID= mysqli_real_escape_string($db,$_POST['Day_ID']);
      $query="DELETE FROM Day_info WHERE Day_ID='$Day_ID'";
      if(mysqli_query($db,$query)){
        //Record deleted messages!
        array_push($errors,"Recorded Deleted sucessfully");}
        else{
          array_push($errors,"Unable to Delete");
      }
    }




 ?>
