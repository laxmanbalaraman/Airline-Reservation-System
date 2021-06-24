<?php
$db = mysqli_connect('localhost','root','','airlines system') or die("could not connect to database");
$errors=array();
$msg=array();
$upd=array();
// create operation

if(isset($_POST['create'])){
  $Arrival= mysqli_real_escape_string($db,$_POST['Arrival']);
  $T_ID= mysqli_real_escape_string($db,$_POST['T_ID']);
  $Departure= mysqli_real_escape_string($db,$_POST['Departure']);
  $query="INSERT INTO travel_info (T_ID,Arrival,Departure)
         VALUES ('$T_ID','$Arrival','$Departure')";
  if(mysqli_query($db,$query)){

    //Record Created messages!

    array_push($msg,"Recorded added sucessfully");
  };
}

//update operation

if(isset($_POST['update'])){
  $Arrival= mysqli_real_escape_string($db,$_POST['Arrival']);
  $T_ID= mysqli_real_escape_string($db,$_POST['T_ID']);
  $Departure= mysqli_real_escape_string($db,$_POST['Departure']);
  $query="UPDATE travel_info SET Arrival='$Arrival', Departure='$Departure'
              WHERE T_ID='$T_ID'";
  if(mysqli_query($db,$query)){
    //Record Updated messages!
    array_push($upd,"Recorded Updated sucessfully");}
    else{
      array_push($errors,"Unable to update");
    }
  }

  //Delete opertaion

  if(isset($_POST['delete'])){
    $Arrival= mysqli_real_escape_string($db,$_POST['Arrival']);
    $T_ID= mysqli_real_escape_string($db,$_POST['T_ID']);
    $Departure= mysqli_real_escape_string($db,$_POST['Departure']);
    $query="DELETE FROM travel_info WHERE T_ID='$T_ID'";
    if(mysqli_query($db,$query)){
      //Record deleted messages!
      array_push($errors,"Recorded Deleted sucessfully");}
      else{
        array_push($errors,"Unable to Delete");
      }
    }

 ?>
