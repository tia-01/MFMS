
<DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Equip Materials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                      <a class="nav-link active" aria-current="page" href="http://localhost/projectmfms/addmaterialho.php" style="color:white; font-weight: bold;">Inventory</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="http://localhost/projectmfms/addstudent.php" style="color:white;">Students Record</a>
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
    <!-- <h1> Inventory </h1> <hr>  -->
<h4> Equip Materials </h4> <hr> 
<table>
<form class="equipmaterial" action="connect2.php" method="POST" onsubmit="return validd()" enctype="multipart/form-data">
<tr> <th> <label for="sname" style="font-size: 20px; padding-right: 10px;">Student Name</label> </th>
    <th> <input type="text" id="sname" name="sname" style="height: 25pt; width: max-content;"><br> </th> </tr>
        <tr> <th> <label for="sid" style="font-size: 20px; padding-right: 10px;">Student Id</label> </th>
            <th> <input type="text" id="sid" name="sid" style="height: 25pt; width: max-content;"><br> </th> </tr>
 <tr> <th> <label for="pid" style="font-size: 20px; padding-right: 10px;">Product ID</label>  </th>
<th>  <input type="text" id="pid" name="pid" style="height: 25pt; width: max-content;"><br> </th> </tr>
<tr><td>.</td></tr>
    <tr> <th> </th>
        <th><input type="submit" value="Equip" style="background-color:#1c7943; color: white;
            padding: 10px 20px;
            text-align: center; 
            text-decoration: none;
            display: inline-block;
            font-size: 20px;" name="equipmaterial"> </th> </tr>
</form>
</table>
<br>
<script>
     function validd(){
  alert("Submitted");
    }
</script>
</body>
</html>