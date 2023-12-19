<?php
session_start();
include("database_conn.php");

// Check if the user is logged in
if (isset($_SESSION['sid'])) {
    $sid = $_SESSION['sid'];

    // Retrieve user data based on the session ID
    $sql = "SELECT * FROM `students` WHERE `sid` = '$sid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Display user data on the profile page
        // echo "<h1>Welcome, " . $row['sid'] . "</h1>";
    } else {
        echo "User not found.";
    }
} else {
    // Redirect to the login page if the user is not logged in
    header('location: login.php');
}

mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Computer Science and Engineering</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/faculty.css">
</head>
<body>


  <div style="position: sticky; top: 0px; z-index: 10000;">
    <nav class="navbar bg-dark-purple">
      <div class="container-fluid d-flex justify-content-end align-items-center">
        <div class="w-100 m-0">
          <p id="delayedText" class="m-0 p">Computer Science and Engineering</p>
        </div>
      </div>
    </nav>  
    <nav class="navbar navbar-primary bg-primary-purple">
      <div class="container-fluid">
        <div class="d-flex justify-content-end ms-auto btn-group btn-group-lg">
          <button class="btn btn-color" type="button" onclick="window.location.href='../index.html'">Home</button>
          <button class="btn btn-color" type="button">About</button>
          <button class="btn btn-color" type="button">Services</button>
          <button class="btn btn-color" type="button" onclick="window.location.href='logout.php'">Log out</button>
        </div>
      </div>
    </nav>
    <div class="fixed shape">
      <div class="shape-container">
          <div class="parallelogram"><img src="./img/JUST.png" alt="Poor Net connection"></div>
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
                                    <a href="../faculty/Fa1. E and T.html" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                           <span class="card-title">Faculty of Engineering and Technology</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa2. A S n T.html" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Applied Science and Technology</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa3. B S n T.html" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Biological Science and Technology</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa4. H S.html" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Health Science</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa5. A n S S.html" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Arts and Social Science</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa6. S.html" class="cardd" style="padding: 0px;">
                                        <div class="cardd-body">
                                            <span class="card-title">Faculty of Science</span>
                                        </div>
                                    </a>
                                    <a href="../faculty/Fa7. B S.html" class="cardd" style="padding: 0px;">
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
          <div class="profile">
            <!-- Head -->
            <div class="row head">
              <div class="col-sm-3" style = "border-radious: 100%;">
                <?php echo '<img src="' . $row['image_path'] . '" class="card-img-top" alt="User Image" height="150" width="150">'; ?>
              </div>
              <div class="col" style = "margin-bottom: 0px;">
                <?php echo "<h3>" . $row['name'] . "</h3>"; ?>
                <?php echo "<big><b>" . $row['department'] . "</b></big>"; ?> 
                <div>
                    <?php echo "Email: <a href='mailto:" . $row['pemail'] . "' target='_blank'>" . $row['pemail'] . "</a>"; ?>
                </div>
                <div>
                    <?php echo "Email: <a href='mailto:" . $row['pemail'] . "' target='_blank'>" . $row['aemail'] . "</a>"; ?>
                </div>
                <div>
                    <?php echo "Mobile: <a href='tel:" . $row['mobile'] . "'>" . $row['mobile'] . "</a>"; ?>
                </div>
              </div>
            </div>
            <hr>

            <!-- Main -->
            <div class="row main">
              <!-- Left -->
              <div class="left col-sm-4">
                <div>
                  <div class="accordion">
                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1" class="btn" data-bs-toggle="collapse" style="display: block; border: none; text-align: left; font-size: 25px;"><strong>Skill</strong></a>
                                        </div>
                                        <div id="collapse1" class="collapse" data-bs-parent="#accordion">
                                            <div class="card-body">
                                              <span>
                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse2" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Programming Language:</a>
                                                        </div>
                                                        <div  id="collapse2" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>C</li>
                                                                    <li>C++</li>
                                                                    <li>JAVA</li>
                                                                    <li>Python</li>
                                                                    <li>Assembly Language</li>
                                                                    <li>Verilog or VHDL (for FPGA programming)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse3" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Software Development:</a>
                                                        </div>
                                                        <div  id="collapse3" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Algorithm design and analysis</li>
                                                                    <li>Object-oriented programming</li>                                                                    
                                                                    <li>Software testing and debugging</li>                                                                   
                                                                    <li>Version control (e.g., Git)</li>                                                                    
                                                                    <li>Object-oriented programming</li>                                                                    
                                                                    <li>Integrated Development Environments (IDEs)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse4" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Web Development:</a>
                                                        </div>
                                                        <div  id="collapse4" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>HTML, CSS, JavaScript</li>
                                                                    <li>Front-end frameworks (e.g., React, Angular, Vue)</li>
                                                                    <li>Back-end frameworks (e.g., Node.js, Django, Flask)</li>
                                                                    <li>Database management (SQL, MongoDB)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse5" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Operating Systems:</a>
                                                        </div>
                                                        <div  id="collapse5" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Understanding of operating system concepts</li>
                                                                    <li>Linux/Unix system administration</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse6" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Computer Networks:</a>
                                                        </div>
                                                        <div  id="collapse6" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>TCP/IP protocols</li>
                                                                    <li>Network configuration and troubleshooting</li>
                                                                    <li>Routing and switching</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse7" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Hardware Design:</a>
                                                        </div>
                                                        <div  id="collapse7" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Digital logic design</li>
                                                                    <li>Computer organization and architecture</li>
                                                                    <li>Microprocessor and microcontroller programming</li>
                                                                    <li>FPGA programming</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse8" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Data Structures and Algorithms:</a>
                                                        </div>
                                                        <div  id="collapse8" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Linked lists, stacks, queues</li>
                                                                    <li>Trees, graphs</li>
                                                                    <li>Sorting and searching algorithms</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse9" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Cybersecurity:</a>
                                                        </div>
                                                        <div  id="collapse9" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Understanding of security principles</li>
                                                                    <li>Encryption techniques</li>
                                                                    <li>Network security</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse10" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Database Management:</a>
                                                        </div>
                                                        <div  id="collapse10" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Relational database concepts</li>
                                                                    <li>SQL programming</li>                                                                    
                                                                    <li>Database design</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse11" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Embedded Systems:</a>
                                                        </div>
                                                        <div  id="collapse11" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Programming embedded systems</li>
                                                                    <li>Real-time operating systems</li>
                                                                    <li>Sensor interfacing</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse12" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Signal Processing:</a>
                                                        </div>
                                                        <div  id="collapse12" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Digital signal processing concepts</li>
                                                                    <li>Image and audio processing</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse13" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Robotics:</a>
                                                        </div>
                                                        <div  id="collapse13" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Robotics programming</li>
                                                                    <li>Control systems</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse14" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Computer-Aided Design (CAD):</a>
                                                        </div>
                                                        <div  id="collapse14" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>CAD tools for hardware design</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse15" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Soft Skills:</a>
                                                        </div>
                                                        <div  id="collapse15" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Communication skills</li>
                                                                    <li>Problem-solving abilities</li>
                                                                    <li>Teamwork and collaboration</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse16" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Project Management:</a>
                                                        </div>
                                                        <div  id="collapse16" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Agile methodologies</li>
                                                                    <li>Project planning and execution</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse17" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Machine Learning and Artificial Intelligence:</a>
                                                        </div>
                                                        <div  id="collapse17" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Basic understanding of ML and AI concepts</li>
                                                                    <li>Programming with ML libraries (e.g., TensorFlow, PyTorch)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse18" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">Cloud Computing:</a>
                                                        </div>
                                                        <div  id="collapse18" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>Cloud service platforms (e.g., AWS, Azure, Google Cloud)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="accordion">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="#collapse19" class="btn" data-bs-toggle="collapse" style="display: block; border: none;">IoT (Internet of Things):</a>
                                                        </div>
                                                        <div  id="collapse19" class="collapse" data-bs-parent="#accordion">
                                                            <div class="card-body">
                                                                <ul>
                                                                    <li>IoT device programming</li>
                                                                    <li>IoT protocols and platforms</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              </span>
                                        </div>
                                    </div>
                    </div>
                  </div>
                </div><br>

                <div>
                  <h4>Languages</h4>
                    <select id="languageSelect" style="width: 100%;"></select>
                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
                    <script>
                      $(document).ready(function() {
                        // Fetch language data from a free API (Restcountries)
                          $.ajax({
                            url: 'https://restcountries.com/v2/all',
                            type: 'GET',
                            success: function(data) {
                              // Collect unique languages from all countries
                              let allLanguages = data.reduce(function(languages, country) {
                                  if (country.languages) {
                                    languages.push(...country.languages.map(lang => lang.name)); // Extract language names
                                  }
                                  return languages;
                              }, []);

                              // Remove duplicates by converting to a Set and back to an array
                              allLanguages = Array.from(new Set(allLanguages));

                              // Sort languages alphabetically
                              allLanguages.sort();

                              // Populate the select box with sorted language names
                              allLanguages.forEach(function(language) {
                                $('#languageSelect').append('<option value="' + language + '">' + language + '</option>');
                              });

                              // Initialize the select2 plugin
                              $('#languageSelect').select2();
                            },
                            error: function(error) {
                          console.error('Error fetching language data:', error);
                        }
                        });
                      });
                    </script>
                </div><br>

                <div>
                  <h4>Country</h4>
                    <select id="countrySelect" style="width: 100%;"></select>
                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>

                    <script>
                      $(document).ready(function() {
                        // Fetch country data from a free API (Restcountries)
                        $.ajax({
                          url: 'https://restcountries.com/v2/all',
                          type: 'GET',
                          success: function(data) {
                            // Populate the select box with country names
                            data.forEach(function(country) {
                              $('#countrySelect').append('<option value="' + country.alpha2Code + '">' + country.name + '</option>');
                            });

                            // Initialize the select2 plugin
                            $('#countrySelect').select2();
                          },
                          error: function(error) {
                            console.error('Error fetching country data:', error);
                          }
                        });
                      });
                     </script>
                </div>
                
              </div>

              <!-- Right -->
              <div class="col right">
                <div>
                    <strong class="h1 text-primary" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Education</strong>
                    <div style="margin-top: 5px; margin-left: 5px;">
                        <p>
                            <strong style="font-size: large;">Bachelor of Science (B.Sc) in Computre Science & Engineering</strong><br>
                            <p style="line-height: 0;">
                                <p style="line-height: 0; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:medium; margin-left: 5px; padding-left: 5px;">
                                    Duration: 2019-2024 (Runing)
                                </p>
                                <p style="margin-left: 5px; padding-left: 5px; color: blue">
                                    Jashore University of Science & Technoogy (JUST), Jashore, Bangladesh
                                </p>
                            </p>
                        </p>
                    </div>

                    <div style="margin-left: 5px;">
                        <p>
                            <strong style="font-size: large;">Higher Secondary School Certificate (HSC), Science</strong>
                            <p style="line-height: 0;">
                                <p style="line-height: 0; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:medium; margin-left: 5px; padding-left: 5px;">
                                    Duration: 2016-2018
                                </p>
                                <p style="margin-left: 5px; padding-left: 5px; color: blue">
                                    Govt. Bangabandhu College, Khulna, Bangladesh    
                                </p>
                            </p>
                        </p>
                    </div>

                    <div style="margin-left: 5px;">
                        <p>
                            <strong style="font-size: large;">Secondary Secondary School Certificate (SSC), Science</strong>
                            <p style="line-height: 0;">
                                <p style="line-height: 0; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:medium; margin-left: 5px; padding-left: 5px;">
                                    Duration: 2010-2015
                                </p>
                                <p style="margin-left: 5px; padding-left: 5px; color: blue">
                                    Gunari Shital Chondra Secondary High School, Dacope, Khulna, Bangladesh
                                </p>
                            </p>
                        </p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>
</body>
</html>
