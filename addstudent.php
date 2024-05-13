
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    /* search bar */
.form-control{
    width: 800px;
}
form{
    padding-left: 20pt;
}
.search{
    margin: auto;
}
        .container-lg{
            padding: 10px;
            margin: -1px;
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
                      <a class="nav-link"  href="http://localhost/projectmfms/admin.php" style="color:white;"> Dashboard </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="http://localhost/projectmfms/addmaterialho.php" style="color:white;">Inventory</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="http://localhost/projectmfms/addstudent.php" style="color:white; font-weight: bold;">Students Record</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expand ed="false" style="color:white;">
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


    
<div class="container-lg px-5">
    <!-- <h1> Students Record </h1> <hr>  -->
<h4> Add Students </h4> <hr> 
    <form class="addstudent" action="connect.php" method="POST">
        <div class="form-group">
        <label for="exampleInputEmail1">Student ID</label>
            <input type="number" name="id" class="form-control"  placeholder="Enter student ID">
                        
            
        </div>
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="sname" class="form-control" id="exampleInputName" placeholder="Enter student name">
            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Semester</label>
            <input type="text" name="semester" class="form-control" placeholder="Enter student semester">
            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Faculty</label>
            <input type="text" name="faculty" class="form-control" placeholder="Enter Faculty">
            
        </div>
    
        <br>
        <button type="submit" class="btn btn-success" name="addstudent">Add</button>
            
    </form>
    <div class="data">
    <div class="card" style="width:100%; margin: 10px;">
            <h5 class="card-title" style="padding: 10px;">Student Information</h5>
        <?php
        include 'connection1.php';
        $sql = "SELECT * FROM addstudent";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">Student ID</th>';
            echo '<th scope="col">Name</th>';
            echo '<th scope="col">Semester</th>';
            echo '<th scope="col">Faculty</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["sname"] . '</td>';
                echo '<td>' . $row["semester"] . '</td>';
                echo '<td>' . $row["faculty"] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo 'No records found.';
        }
        ?> 
        </div>
    </div>
    </div>
    
</body>
</html>