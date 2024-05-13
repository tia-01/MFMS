
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" initial-scale=1.0">
    <title>Equipped Materials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<?php
include 'connection1.php';
$sql = "SELECT * FROM `equipmaterial`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $num_records = $result->num_rows;
        echo ' <table class="table table-success table-hover table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">Student Name</th>';
            echo '<th scope="col">Student ID</th>';
            echo '<th scope="col">Product ID</th>';
           
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["sname"] . '</td>';
                    echo '<td>' . $row["sid"] . '</td>';
                    echo '<td>' . $row["pid"] . '</td>';
                    
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                echo '<p>Number of records: ' . $num_records . '</p>';
            } else {
                echo 'No records found.';
            }
            
            ?> 
            </body>
            </html>