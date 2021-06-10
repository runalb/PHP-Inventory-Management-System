<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Book - Action 2</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vender/css/all.css">
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/logo.svg" alt="logo" width="130" height="30" alt="Logo" loading="lazy">
        </a>
        
        <button class="btn btn-outline logout-btn" onclick="location.href='user-logout.php'">Logout</button>

      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-8 mx-auto">

                <div class="shadow-lg bg-white mt-4 p-4">
                <?php
		
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname ="librarydb";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    
                    $bookid = $_SESSION["bookid"];
                    $studentid = $_SESSION["studentid"];
                    
                        $sql = "DELETE FROM issue_table WHERE student_id='$studentid' AND book_id='$bookid'";
                        if ($conn->query($sql) === TRUE) {
                            $sql2 = "UPDATE book_table SET quantity=quantity+1 WHERE book_id='$bookid'";
                            $resul = $conn->query($sql2);
                    
                            echo "<h3 class='text-center m-4'>Book Returned Successfully</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
                        } else {
                            //echo "Error deleting record: " . $conn->error;
                        }
                    

                    $conn->close();
                    ?>
                </div>
                
          </div>
        </div>
          
      </div>
</body>
</html>