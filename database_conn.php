<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "sinformations";

       $conn = mysqli_connect($servername,$username,$password,$dbname);

       if($conn)
       {
        // echo "Connection Ok";
       }

       else
       {
        echo "Connection failed".mysqli_connect_error();
       }
    ?>
</body>
</html>