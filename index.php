<!DOCTYPE html>
<html lang="en">
<?php
// Start the session
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php
		
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        // Create database
        $sql = "CREATE DATABASE IF NOT EXISTS inventory_db";
        if ($conn->query($sql) === TRUE) {
            //echo "Database created successfully";
            
        
        
        $conn->close();
        }
    ?>





    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/logo.svg" alt="logo" width="130" height="30" alt="Logo" loading="lazy">
        </a>
        <button class="btn btn-outline logout-btn" onclick="location.href='user-login.php'">Login</button>
    </div> 

    <div class="container h-100">
        <div class="row text-center align-items-center h-100 " >
            <div class="col-12 mx-auto">
                <div class="mt-4">
                    <div class="text-center p-2">
                        <h1 class="theme-color">Inventory Management System</h1>
                        <h5>DBMS Mini Project</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 mx-auto">
                <div class="mt-4">
                    <div class="text-center p-2">
                        <h3 class="theme-color">Team Members</h3>
                    </div>
                </div>
            </div>
      
           
            <!-- Team member-1 HERE -->
            <div class="col-lg-12 center team-menbers">
                <img src="images/runal.png" class="rounded-circle" width="120" height="120">
                <h6 class="m-1">Runal Banarse</h6>
                <a href="#" class="theme-color">runalb.com</a>
            </div>
               
        </div>


        

        

    </div>

</body>
</html>
