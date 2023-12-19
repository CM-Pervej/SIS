<?php
   include('../database_conn.php');
   $query = "select * from students where department = 'Finance and Banking'";
   $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finance and Banking</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/dept.css">
</head>
<body>


  <div style="position: sticky; top: 0px; z-index: 10000;">
    <nav class="navbar bg-dark-purple">
      <div class="container-fluid d-flex justify-content-end align-items-center">
        <div class="w-100 m-0">
          <p id="delayedText" class="m-0">Finance and Banking</p>
        </div>
      </div>
    </nav>  
    <nav class="navbar navbar-primary bg-primary-purple">
      <div class="container-fluid">
        <div class="d-flex justify-content-end ms-auto btn-group btn-group-lg">
          <button class="btn btn-color" type="button" onclick="window.location.href='../index.html'">Home</button>
          <button class="btn btn-color" type="button" onclick="window.location.href='../faculty.html'">Faculty</button>
          <button class="btn btn-color" type="button" onclick="window.location.href='../login.php'">Sign in</button>
          <button class="btn btn-color" type="button" onclick="window.location.href='../reg.php'">Sign up</button>
        </div>
      </div>
    </nav>
    <div class="fixed shape">
      <div class="shape-container">
          <div class="parallelogram"><img src="../img/JUST.png" alt="Poor Net connection"></div>
      </div>
     </div>
  </div>
     
     <div style="z-index: -1;">
      <div class="fixed2">
        <div class="fixed3">
            <div class="btn-group-vertical" style="width: 100%; margin-top: 30px;">
                <button type="button" class="btn btn-light"><a href="../index.html" style="text-align: right;"><b>HOME</b></a></button>
                <button type="button" class="btn btn-light containerr">
                            <a href="#" style="text-align: right;" class="span"><b>FACULTY</b></a>
                                <big class="contentt">
                                    <a href="../faculty/Fa1. E and T.php" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Engineering and Technology</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa2. A S n T.php" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Applied Science and Technology</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa3. B S n T.php" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Biological Science and Technology</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa4. H S.php" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Health Science</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa5. A n S S.php" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Arts and Social Science</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa6. S.php" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Science</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa7. B S.php" class="cardd" style="padding: 0px;">
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
                <button type="button" class="btn btn-light"><a href="../login.php" style="text-align: right;"><b>LOGIN</b></a></button>
            </div>
          </div>
        </div>
        <div class="fixed4">
        <div>
              <div class="row" style="margin: 2%;">
                    
                    <?php
                      // Loop through the database results and create cards
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-md-2 mt-3">';
                        echo '<div class="card2">';

                        // Display user image
                        echo '<img src="../' . $row['image_path'] . '" class="card-img-top" alt="User Image" height="150" width="150">';
    
                        echo '<div class="card2-body" style="border-radius: 0px;">';
                        echo '<big class="card2-title">' . $row['name'] . '</big>'; 
                        echo '<br>';
                        echo '<i>ID: ' . $row['sid'] . '</i>'; 
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                      }
                    ?>
                            
                </div>
            </div>
        </div>
     </div>
</body>
</html>
