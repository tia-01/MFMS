<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" initial-scale=1.0">
    <title>Equipped Materials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
                /* search bar */
.form-control{
    width: 800px;
}
.search{
    margin: auto;
}
        .card{
background-color: #e7ebe6;
margin: 10px;
border-radius: 10px;
}
    </style>
</head>
<body>
    <!-- 1st nav bar -->
    <nav class="nav p-3">
        <img src="https://www.gandakiuniversity.edu.np/wp-content/uploads/2023/01/logo-gu-new.png" alt="Gandaki University" width="20%">
      <div class="search">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
      <div class="d-flex flex-row-reverse">
  <button class="btn btn-outline-success" type="submit"> 
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg> 
          <a href="http://172.162.20.155:5500/project%20II/myprofile.html" style="text-decoration:none; color:inherit;">  <i class="bi bi-person-circle">My Profile</i> </a>
      </button>
  </div>
  </nav>

  <!-- 2nd nav bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <div class="container-fluid">
          <a class="navbar-brand" href="#" style="font-family: 'papyrus', fantasy; color:white;">
          <b>MFMS</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="vr" style="color:white; width:2px;"></div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active"  href="http://localhost/projectmfms/admin.php" style="color:white;"> Dashboard </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="http://localhost/projectmfms/addmaterialho.php" style="color:white;">Inventory</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="http://localhost/projectmfms/addstudent.php" style="color:white;">Students Record</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expand ed="false" style="color:white;  font-weight: bold;">
                          Manage Materials
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="http://localhost/projectmfms/equippedmaterial.php">Equip Materials</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="http://localhost/projectmfms/viewallequipped.php">View All Equiped</a></li>
                      </ul>
                  </li>
          </ul>
      </div>
  </div>
</nav>
    <div class="card">
        <h5 class="card-header">Materials Equipped</h5>
        <div class="card-body">
          <p class="card-text">
           
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
    </div>
</body>
</html>



    
    



