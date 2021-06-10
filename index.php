<!DOCTYPE html>
<html lang="en">
<?php
// Start the session
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

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
                        <h1 class="theme-color">Library Management System</h1>
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
            <!-- <div class="col-lg-12 center team-menbers">
                <img src="images/runal.png" class="rounded-circle" width="120" height="120">
                <h6 class="m-1">Runal Banarse</h6>
                <a href="#" class="theme-color">runalb.com</a>
            </div> -->
               
        </div>


        <!-- Team member-2 HERE -->
        <!-- <div class="row center text-center align-items-center team-menbers">
            <div class="col-3">
            </div>
            <div class="col-3">
                <img src="images/runal2.png" class="rounded-circle" width="100" height="100">
                <h6 class="m-1">Runal Banarse</h6>
                <a href="#" class="theme-color">17BE0456</a>
            </div>   
            <div class="col-3">
                <img src="images/runal2.png" class="rounded-circle" width="100" height="100">
                <h6 class="m-1">Prathamesh Thakar</h6>
                <a href="#" class="theme-color">17BE0458</a>
            </div>
            <div class="col-3">
            </div>
        </div> -->
        <!-- Team member-2 END HERE -->



        <!-- Team member-3 HERE -->
        <div class="row center text-center align-items-center team-menbers">
            <div class="col-12">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-4">
                                <img src="images/runal2.png" class="rounded-circle" width="100" height="100">
                                <h6 class="m-1">Runal Pramod Banarse</h6>
                                <a href="#" class="theme-color">17BE0456</a>
                            </div>  

                            <div class="col-4">
                                <img src="images/runal2.png" class="rounded-circle" width="100" height="100">
                                <h6 class="m-1">Prathamesh Vijay Thakare</h6>
                                <a href="#" class="theme-color">17BE0458</a>
                            </div>

                            <div class="col-4">
                                <img src="images/runal2.png" class="rounded-circle" width="100" height="100">
                                <h6 class="m-1">Aditya Nandkumar Yewale</h6>
                                <a href="#" class="theme-color">17BE0308</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                    </div>
                </div>
            </div>   
        </div>
        <!-- Team member-3 END HERE -->

    </div>

</body>
</html>