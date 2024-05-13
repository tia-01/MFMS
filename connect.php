<?php
session_start();
include 'connection1.php';
// Insert student record
if (isset($_POST['addstudent'])) {
  $id = $_REQUEST['id'];
  $sname = $_REQUEST['sname'];
  $semester = $_REQUEST['semester'];
  $faculty = $_REQUEST['faculty'];

  $sql = "INSERT INTO addstudent (id, sname, semester, faculty) VALUES ('$id', '$sname', '$semester', '$faculty')";

  if($conn->query($sql)){
    $_SESSION['success']='student added successfully';
    
  }
  else{
    $_SESSION['error']=$conn->error ;

  }
}
else{
  $_SESSION['error'] = 'Fill Form First';
}
header("location: addstudent.php");

?>