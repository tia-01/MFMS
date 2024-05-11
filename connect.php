<?php
session_start();
include 'conection.php';
// Insert student record
if (isset($_POST['addstudent'])) {
  $id = $_POST['id'];
  $email = $_POST['email'];
  $semester = $_POST['semester'];
  $faculty = $_POST['faculty'];

  $sql = "INSERT INTO test (id, email, semester, faculty) VALUES ('$id', '$email', '$semester', '$faculty')";

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
