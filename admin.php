<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title> MFMS </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>

/* dashboard ko container */
.container_1, .card{
background-color: #e7ebe6;
margin: 10px;
border-radius: 15px;
}

/* search bar */
.form-control{
    width: 800px;
}
.search{
    margin: auto;
}

/* counter */
.counter{
    color: #319b31;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    width: 210px;
    height: 222px;
    padding: 48px 28px 0;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
    z-index: 1;
}
.counter:before,
.counter:after{
    content: '';
    background: linear-gradient(135deg,#fff,#f1f1f1);
    height: 147px;
    width: 147px;
    box-shadow: -5px -5px 3px rgba(0, 0, 0, 0.2), -10px -10px #008533;
    transform: translateX(-50%) rotate(45deg);
    position: absolute;
    left: 50%;
    top: 44px;
    z-index: -1;
    transition: all 0.3s ease 0s;
}
.counter:before{
    background: linear-gradient(135deg, #00652F 50%, transparent 50%);
    box-shadow: none;
    top: 80px;
}
.counter .counter-icon{
    font-size: 35px;
    line-height: 40px;
    margin: 0 0 12px;
}
.counter h3{
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 0 16px;
}
.counter .counter-value{
    color: #fff;
    background: linear-gradient(to right, #0c842a, #319B38);
    font-size: 27px;
    font-weight: 500;
    line-height: 33px;
    width: 100%;
    padding: 10px 0 26px;
    position: absolute;
    left: 0;
    bottom: 0;
    clip-path: polygon(0 0, 100% 0, 50% 100%);
}
.counter.orange{ color: #FB9500; }
.counter.orange:after{
    box-shadow: -5px -5px 3px rgba(0, 0, 0, 0.2), -10px -10px #ED8F1D;
}
.counter.orange:before{
    background: linear-gradient(135deg, #ED610A 50%,transparent 50%);
}
.counter.orange .counter-value{
    background: linear-gradient(to right, #EA7A00, #F1980C);
}
.counter.blue{ color: #1B9FD1; }
.counter.blue:after{
    box-shadow: -5px -5px 3px rgba(0, 0, 0, 0.2), -10px -10px #288EBB;
}
.counter.blue:before{
    background: linear-gradient(135deg, #1167C3 50%, transparent 50%);
}
.counter.blue .counter-value{
    background: linear-gradient(to right, #0784C3, #32AAEE);
}
.counter.red{ color: #D85411; }
.counter.red:after{
    box-shadow: -5px -5px 3px rgba(0, 0, 0, 0.2), -10px -10px #BF4C13;
}
.counter.red:before{
    background: linear-gradient(135deg, #A60810 50%, transparent 50%);
}
.counter.red .counter-value{
    background: linear-gradient(to right, #CC2D00, #FC6000);
}
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }
}

</style>

<!-- counter ko js -->
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script>
 $(document).ready(function(){
     $('.counter-value').each(function(){
         $(this).prop('Counter',0).animate({
             Counter: $(this).text()
         },{
             duration: 3500,
             easing: 'swing',
             step: function (now){
                 $(this).text(Math.ceil(now));
             }
         });
     });
 });
</script>

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
            <a href="prof.html" style="text-decoration:none; color:inherit;">  <i class="bi bi-person-circle">My Profile</i> </a>
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
                        <a class="nav-link active" aria-current="page" href="http://localhost/projectmfms/admin.php" style="color:white; font-weight: bold;"> Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/projectmfms/addmaterialho.php" style="color:white;">Inventory</a>
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

<!-- dashboard ko container_1 -->
<div class="container_1">
    <div class="row p-5">
        <div class="col-md-3 col-sm-6">
            <div class="counter">
                <div class="counter-content">
                    <div class="counter-icon">
                        <i class="bi bi-dribbble"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-dribbble" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8m5.284 3.688a6.8 6.8 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A7 7 0 0 1 8 1.18m-2.907.642A43 43 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.87 6.87 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.82 6.82 0 0 1-1.752-4.564zM8 14.837a6.8 6.8 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.3 28.3 0 0 1 1.457 5.18A6.7 6.7 0 0 1 8 14.837m3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.77 6.77 0 0 1-2.924 4.573z"/>
                          </svg>
                    </div>
                    <h3 style="font-weight: bold;">TOTAL <br> MATERIALS</h3>
                </div>
                <span class="counter-value" id="cv-1"> 
                    <?php
        include 'connection1.php';
        $sql = "SELECT * FROM `mfms`";
        $result = $conn->query($sql);
        // $num_records = $result->num_rows; 
        if ($result->num_rows > 0) {
            $num_records = $result->num_rows; 
            echo  $num_records ;
        } else {
          
        }
    
        ?> 
                </span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter green">
                <div class="counter-content">
                    <div class="counter-icon">
                        <i class="bi bi-check-circle-fill"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                    </div>
                    <h3 style="font-weight: bold;">MATERIALS <br> EQUIPPED</h3>
                </div>
                <span class="counter-value" id="cv-2">
                <?php
        include 'connection1.php';
        $sql = "SELECT * FROM equipmaterial";
        $result = $conn->query($sql);
        // $num_records = $result->num_rows; 
        if ($result->num_rows > 0) {
            $num_records = $result->num_rows; 
            echo  $num_records ;
        } else {
          
        }
    
        ?>
                </span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter green">
                <div class="counter-content">
                    <div class="counter-icon">
                        <i class="bi bi-cart"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                          </svg>
                    </div>
                    <h3 style="font-weight: bold;">AVAILABLE <br> MATERIALS</h3>
                </div>
                <span class="counter-value">
                <?php
        include 'connection1.php';
        $sql = "SELECT * FROM mfms WHERE sid IS NULL OR sid=''";
        $result = $conn->query($sql);
        // $num_records = $result->num_rows; 
        if ($result->num_rows > 0) {
            $num_records = $result->num_rows; 
            echo  $num_records ;
        } else {
          
        }
    
        ?> 

                </span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter green">
                <div class="counter-content">
                    <div class="counter-icon">
                        <i class="bi bi-person-raised-hand"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                            <path d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207"/>
                            <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                          </svg>
                    </div>
                    <h3 style="font-weight: bold;">TOTAL <br> STUDENTS</h3>
                </div>
                <span class="counter-value">
                <?php
        include 'connection1.php';
        $sql = "SELECT * FROM addstudent";
        $result = $conn->query($sql);
        // $num_records = $result->num_rows; 
        if ($result->num_rows > 0) {
            $num_records = $result->num_rows; 
            echo  $num_records ;
        } else {
          
        }
        ?>
                </span>
            </div>
        </div>
    </div>
</div>


<!-- view all equipped -->
<div class="card">
    <h5 class="card-header">Materials Equipped</h5>
    <div class="card-body">
      <p class="card-text">
        <table class="table table-success table-hover">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Students Name</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Equipped Material</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tia Bishwakarma</td>
                    <th scope="row">2024002</th>
                    <td>Baasketball</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Suman Bishowkarma</td>
                    <th scope="row">2024003</th>
                    <td>Football</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Chhanu Gurung</td>
                    <th scope="row">2024004</th>
                    <td>Badminton</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ria Thapa</td>
                    <th scope="row">2024005</th>
                    <td>Table Tennis</td>
                </tr>
            </tbody>
        </table>
      </p>
      <a href="http://localhost/projectmfms/viewallequipped.php" class="btn btn-success"> View All</a>
    </div>
  </div>

    <!-- bootstrap ko js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<!-- 
<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form> -->
