<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reg.css">
    <title>Document</title>
</head>
<body>
        <div class="row">
            <div class="col-lg">
                <div class="container">

                    <form id="form1" action="reg.php" method="POST" enctype="multipart/form-data" autocomplete="off" onsubmit="return validation(event)">
                        <div><h2>Personal Information</h2></div>

                        <div class="row">
                            <div class="col-5">
                                <label for="image">User Image</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" value="">
                                <br><span id="imagee"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label for="name">Name</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="text" id="name" name="name" placeholder="">
                                <br><span id="namee"></span>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col-5">
                                <label for="birth">Date of birth</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="date" id="birth" name="birth" placeholder="">
                                <br><span id="birthh"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label for="mobile">Mobile </label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="text" id="mobile" name="mobile" placeholder="">
                                <br><span id="mobilee"></span>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-5">
                                <label for="pemail">Personal email</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="email" id="pemail" name="pemail" placeholder="">
                                <br><span id="pemaill"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label for="aemail">Academic email*</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="email" id="aemail" name="aemail" placeholder="">
                                <br><span id="aemaill"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label for="passpass">Password*</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="password" id="pass" name="pass" placeholder="">
                                <br><span id="passs"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label for="cpass">Confirm Password*</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="password" id="cpass" name="cpass" placeholder="">
                                <br><span id="cpasss"></span>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-5">
                                <label for="sid">Student id</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="text" id="sid" name="sid" placeholder="">
                                <br><span id="sidd"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label for="session">Session</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="text" id="session" name="session" placeholder="">
                                <br><span id="sessionn"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label for="department">Department</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <!-- <input type="text" id="department" name="department" placeholder="Computer Science and Engineering"> -->
                                <input class="form-control" list="departments" name="department" id="department" placeholder="Select from the list">
                                    <datalist id="departments">
                                    <option value="Accounting and Information Systems">Accounting and Information Systems</option>
                                    <option value="Agro Product Processing Technology">Agro Product Processing Technology</option>
                                    <option value="Biomedical Engineering">Biomedical Engineering</option>
                                    <option value="Climate and Disaster Management">Climate and Disaster Management</option>
                                    <option value="Chemical Engineering">Chemical Engineering</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                                    <option value="Electrical and Electronic Engineering">Electrical and Electronic Engineering</option>
                                    <option value="English">English</option>
                                    <option value="Environmental Science and Technology">Environmental Science and Technology</option>
                                    <option value="Finance and Banking">Finance and Banking</option>
                                    <option value="Fisheries and Marine Bioscience">Fisheries and Marine Bioscience</option>
                                    <option value="Genetic Engineering and Biotechnology">Genetic Engineering and Biotechnology</option>
                                    <option value="Industrial and Production Engineering">Industrial and Production Engineering</option>
                                    <option value="Management">Management</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Microbiology">Microbiology</option>
                                    <option value="Nutrition and Food Technology">Nutrition and Food Technology</option>
                                    <option value="Nursing and Health Science">Nursing and Health Science</option>
                                    <option value="Physical Education and Sports Science">Physical Education and Sports Science</option>
                                    <option value="Pharmacy">Pharmacy</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Petroleum and Mining Engineering">Petroleum and Mining Engineering</option>
                                    <option value="Physiotherapy and Rehabilitation">Physiotherapy and Rehabilitation</option>
                                    <option value="Textile Engineering">Textile Engineering</option>
                                    </datalist>
                                <br><span id="departmentt"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label for="faculty">Faculty</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input class="form-control" list="faculties" name="faculty" id="faculty" placeholder="Select from the list">
                                    <datalist id="faculties"> 
                                    <option value="Faculty of Engineering and Technology">Faculty of Engineering and Technology</option>
                                    <option value="Faculty of Applied Science and Technology">Faculty of Applied Science and Technology</option>
                                    <option value="Faculty of Biological Science and Technology">Faculty of Biological Science and Technology</option>
                                    <option value="Faculty of Health Science">Faculty of Health Science</option>
                                    <option value="Faculty of Arts and Social Science">Faculty of Arts and Social Science</option>
                                    <option value="Faculty of Health Science">Faculty of Health Science</option>
                                    <option value="Faculty of Business Studies">Faculty of Business Studies</option>
                                    </datalist>
                                <br><span id="facultyy"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label for="university">University</label>
                            </div>
                            <div class="col-sm-1">
                                <label>:</label>
                            </div>
                            <div class="col">
                                <input type="text" id="university" name="university" placeholder="">
                                <br><span id="universityy"></span>
                            </div>
                        </div>

                        <div class="row footer">
                            <div class="col">
                                <input type="submit" class="btn" name="submit" value="submit">
                            </div>
                            <div class="col">
                                <input type="reset" class="btn" name="reset" value="reset">
                            </div>
                        </div>
                    </form>
                    <div class="row" style="text-align: center;">
                        <button type="button" class="col back" onclick="window.location.href='login.php'">Back</button>
                    </div>
                </div>
            </div>
        </div>
    

    <script src="js/regg.js"></script>

</body>
</html>



<?php
    include("database_conn.php");
    // error_reporting(0);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
     {
        echo "Form connected"; // Check if the form submission is reaching this point

            $name = $_POST['name'];
            $birth = $_POST['birth'];
            $mobile = $_POST['mobile'];
            $pemail = $_POST['pemail'];
            $aemail = $_POST['aemail'];
            $pass = $_POST['pass'];
            $cpass = $_POST['cpass'];
            $sid = $_POST['sid'];
            $session = $_POST['session'];
            $department = $_POST['department'];
            $faculty = $_POST['faculty'];
            $university = $_POST['university'];



    // Handle file upload
    $targetDirectory = "uploads/";  // Set the directory where you want to store uploaded images
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // ... (Your existing code for database insertion)

    $query = "INSERT INTO students (image_path, name, birth, mobile, pemail, aemail, pass, cpass, sid, session, department, faculty, university) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssssssssss", $targetFile, $name, $birth,  $mobile, $pemail, $aemail, $pass, $cpass,  $sid, $session, $department, $faculty, $university);
        mysqli_stmt_execute($stmt);

        echo "Data inserted into Database";
    } else {
        echo "Not inserted. Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
        
            // $query="INSERT INTO students (name, birth, mobile, pemail, aemail, pass, cpass, sid, session, department, faculty, university) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            // $stmt = mysqli_prepare($conn, $query);
    
            // if ($stmt) {
            //     mysqli_stmt_bind_param($stmt, "ssssssssssss", $name, $birth,  $mobile, $pemail, $aemail, $pass, $cpass,  $sid, $session, $department, $faculty, $university);
            //     mysqli_stmt_execute($stmt);
            
            //     echo "Data inserted into Database";
            // } else {
            //     echo "Not inserted. Error: " . mysqli_error($conn);
            // }
            
            // mysqli_stmt_close($stmt);
    }
?>
