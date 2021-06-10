<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Book - Action</title>
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
		
		$sql = "CREATE TABLE IF NOT EXISTS issue_table (
			student_id VARCHAR(50),
			book_id VARCHAR(50),
			date VARCHAR(30)
			)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table admin_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
		
		
		$studentid = filter_input(INPUT_GET,'studentid');
		$bookid = filter_input(INPUT_GET,'bookid');
		$date = filter_input(INPUT_GET,'date');
		
		$sql1 = "SELECT * FROM issue_table WHERE student_id='$studentid'";
		$res = $conn->query($sql1);

		if ($res->num_rows < 3) {
		
			$sql1 = "SELECT * FROM book_table WHERE book_id='$bookid' AND quantity>0";
			$result = $conn->query($sql1);

			if ($result->num_rows > 0) {
				$sql = "INSERT INTO issue_table (student_id,book_id, date) 
				VALUES ('$studentid','$bookid','$date')";
			
				if ($conn->query($sql) === TRUE) {
				$sql2 = "UPDATE book_table SET quantity=quantity-1 WHERE book_id='$bookid'";
				$resul = $conn->query($sql2);
				
				//echo "New record created successfully";
				echo "<h4 class='m-4 text-center'>Book Issued Successfully....</h4><form action='dashboard.php'><button class='btn btn-block action-btn m-4' type='submit'>Done</button></form>";
		
		
				} else {
					// echo "<h4 class='m-4 text-center'>Book ID is already taken!!!!</h4><form action='dashboard.php'><button class='btn btn-block action-btn m-4' type='submit'>Done</button></form>";
					
				}
			}
		
			else {
				echo "<h4 class='m-4 text-center'>No such book found</h4><form action='dashboard.php'><button class='btn btn-block action-btn m-4' type='submit'>Done</button></form>";
			}
		}
		else
		{
			echo "<h4 class='m-4 text-center'>Already 3 Books are taken...</h4><form action='dashboard.php'><button class='btn btn-block action-btn m-4' type='submit'>Done</button></form>";
			
		}

		$conn->close();
		
		?>
                
          </div>
        </div>
          
      </div>
      
</body>
</html>