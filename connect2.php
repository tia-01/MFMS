<?php
session_start();
include 'connection1.php';
if (isset($_POST['equipmaterial'])) {
    $sname = $_REQUEST['sname'];
  $sid = $_REQUEST['sid'];
  $pid = $_REQUEST['pid'];


  $sql = "INSERT INTO equipmaterial (sname, sid, pid) VALUES ('$sname','$sid', '$pid')";
// $sql = "UPDATE mfms SET sid = '$sid', sname = '$sname' WHERE pid = '$pid'";

  if($conn->query($sql)){
    $_SESSION['success']= 'material equipped successfully';
    
  }
  else{
    $_SESSION['error']=$conn->error ;

  }
}
else{
  $_SESSION['error'] = 'Fill Form First';
}
header("location: equippedmaterial.php");

?>
