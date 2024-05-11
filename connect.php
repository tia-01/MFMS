<?php

include 'connection.php'
// Insert student record
if (isset($_POST['addrecord'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $semester = $_POST['semester'];
  $faculty = $_POST['faculty'];

  $sql = "INSERT INTO test (name, email, semester, faculty)
  VALUES ('$name', '$email', '$semester', '$faculty')";

  if ($conn->query($sql) === TRUE) {
    echo "New student record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>