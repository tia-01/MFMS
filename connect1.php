<?php
session_start();
include 'connection1.php';
// Insert material record
if (isset($_POST['submit'])) {

  $pname = $_REQUEST['pname'];
  $pid = $_REQUEST['pid'];


  $sql = "INSERT INTO mfms (pid, pname, sid, sname) VALUES ( '$pid','$pname','', '')";

  if($conn->query($sql)){
    $_SESSION['success']='material added successfully';
    
  }
  else{
    $_SESSION['error']=$conn->error ;

  }
}
else{
  $_SESSION['error'] = 'Fill Form First';
}
header("location: addmaterialho.php");

?>