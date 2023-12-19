<?php
// $sid = $password="";
//     session_start();
//     include("database_conn.php");
// if(isset($_POST['submit'])){
//     $sid = $_POST['sid'];
//     $password= $_POST['password'];
//     if($sid!="" && $password!=""){
//        $sql=  "SELECT  `sid`, `pass` FROM `students`";
//        $result = $conn->query($sql);
//        if ($result->num_rows > 0) {
//         // output data of each row
//         while($row = $result->fetch_assoc()) {
//             if($row['sid']==$sid && $row['pass']==$password){
//                 header('location:profile.php');
//             }else{
//                 echo "Wrong Password";
//             }
//         }
//     }else{
//         echo "No user found";
//     }
//     }

// }else{
//     echo "";
// }

//     mysqli_close($conn);
?>

<?php
$sid = $password = "";
session_start();
include("database_conn.php");

if (isset($_POST['submit'])) {
    $sid = $_POST['sid'];
    $password = $_POST['password'];

    if ($sid != "" && $password != "") {
        $sql = "SELECT `sid`, `pass` FROM `students` WHERE `sid` = '$sid' AND `pass` = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // User found, set session and redirect to profile page
            $_SESSION['sid'] = $sid;
            header('location: profile.php');
        } else {
            echo "Wrong ID or Password";
        }
    } else {
        echo "Please enter both ID and Password";
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Navbar</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div>
        <nav class="navbar bg-dark-purple">
            <div class="container-fluid d-flex justify-content-end align-items-center">
              <div class="w-100 m-0">
                <p id="delayedText" class="m-0">Jashore University of Science and Technology</p>
              </div>
            </div>
          </nav>  
          
        
          <nav class="navbar navbar-primary bg-primary-purple">
            <div class="container-fluid">
              <div class="d-flex justify-content-end ms-auto btn-group btn-group-lg">
                <button class="btn btn-color" type="button" onclick="window.location.href='index.html'">Home</button>
                <button class="btn btn-color" type="button" onclick="window.location.href='faculty.html'">Faculty</button>
                <button class="btn btn-color" type="button">Services</button>
                <button class="btn btn-color" type="button">Contact</button>
              </div>
            </div>
          </nav>
          <div class="fixed shape">
            <div class="shape-container">
                <div class="parallelogram"><img src="img/JUST.png" alt="Poor Net connection"></div>
            </div>
           </div>
    </div>


   <div class="fixed2">
    <div class="fixed3">
        <div class="btn-group-vertical" style="width: 100%; margin-top: 30px;">
            <button type="button" class="btn btn-light"><a href="index.html" style="text-align: right;"><b>HOME</b></a></button>
            <button type="button" class="btn btn-light containerr">
                        <a href="#" style="text-align: right;" class="span"><b>FACULTY</b></a>
                            <big class="contentt">
                                <a href="faculty/Fa1. E and T.html" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Engineering and Technology</span>
                                        </div>
                                </a>
                                <a href="faculty/Fa2. A S n T.html" class="cardd" style="padding: 0px;">
                                    <div class="cardd-body">
                                        <span class="card-title">Faculty of Applied Science and Technology</span>
                                    </div>
                                </a>
                                <a href="faculty/Fa3. B S n T.html" class="cardd" style="padding: 0px;">
                                    <div class="cardd-body">
                                        <span class="card-title">Faculty of Biological Science and Technology</span>
                                    </div>
                                </a>
                                <a href="faculty/Fa4. H S.html" class="cardd" style="padding: 0px;">
                                    <div class="cardd-body">
                                        <span class="card-title">Faculty of Health Science</span>
                                    </div>
                                </a>
                                <a href="faculty/Fa5. A n S S.html" class="cardd" style="padding: 0px;">
                                    <div class="cardd-body">
                                        <span class="card-title">Faculty of Arts and Social Science</span>
                                    </div>
                                </a>
                                <a href="faculty/Fa6. S.html" class="cardd" style="padding: 0px;">
                                    <div class="cardd-body">
                                        <span class="card-title">Faculty of Science</span>
                                    </div>
                                </a>
                                <a href="faculty/Fa7. B S.html" class="cardd" style="padding: 0px;">
                                    <div class="cardd-body">
                                        <span class="card-title">Faculty of Business Studies</span>
                                    </div>
                                </a>
                                <a href="Fa8.html" class="cardd" style="padding: 0px;">
                                    <div class="cardd-body">
                                        <span class="card-title">Faculty of Veterinary Medicine</span>
                                    </div>
                                </a>
                            </big>
                        
            </button>
            <button type="button" class="btn btn-light"><a href="login.php" style="text-align: right;"><b>LOGIN</b></a></button>
        </div>
      </div>
    </div>

    <div class="p-5 fixed4">
      <div class="container">
        <div class="center box shapee">
            <div class="center">
                <form action="" method="post">
                     <div><header class="center h1 mb-3">Login to Your Profile</header></div>
                    <div class="row">
                        <div class="col-3">
                            <label for="sid">ID</label>
                        </div>
                        <div class="col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-5">
                            <input type="text" id="sid" name="sid" placeholder="">
                            <br><span id="sidd"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="pass">Password</label>
                        </div>
                        <div class="col-sm-1">
                            <label>:</label>
                        </div>
                        <div class="col-5">
                            <input type="password" id="password" name="password" placeholder="">
                            <br><span id="passs"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <input type="submit" name="submit" value="login"class="btnn"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Don't have account? <a href="reg.php">Sign Up Now</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
