<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vender/css/all.css">
</head>
<body>
<?php
        if($_SESSION["username"] === ""){
          echo $_SESSION['username'];
          echo "login";
          header("Location: index.php ");
        }
      ?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/logo.svg" alt="logo" width="130" height="30" alt="Logo" loading="lazy">
        </a>
        
        <button class="btn btn-outline logout-btn" onclick="location.href='user-logout.php'">Logout</button>
        
      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-8 mx-auto">

                <div class="shadow-lg bg-white mt-4">
                    <div class="col form-header text-center p-3">
                        Add New Admin
                    </div>
                    <form action="add-admin-action.php" method="get">
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="email" required  name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="password" required  name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn login-btn btn-block my-4">Add Admin</button>
                    </form>
                </div>
                
          </div>
        </div>
          
      </div>
</body>
</html>