<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Product - Action</title>
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
		$dbname ="inventory_db";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "CREATE TABLE IF NOT EXISTS sold_products_table (
			product_id VARCHAR(50),
			product_name VARCHAR(50), 
			product_price VARCHAR(50),
			quantity INT(11)
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table admin_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
		
		
		$productid = filter_input(INPUT_GET,'productid');
		$qty = filter_input(INPUT_GET,'qty');

		//test
		echo $productid; echo $qty;
		
		
		$sql="SELECT * FROM available_products_table WHERE product_id='$productid' AND quantity>0";
		$ret=mysqli_query($conn,$sql);
            if(mysqli_num_rows($ret)>0)
            {
				//test
                echo"<br><br>";
				while($row=mysqli_fetch_assoc($ret))
				{
					
					//test
					echo"{$row['product_id']} - {$row['product_name']} - {$row['product_price']} - {$row['quantity']}<br><br>";
					
					
					$productid_value = $row['product_id'];
					$productname_value = $row['product_name'];
					$productprice_value = $row['product_price'];
					$productquantity_value = $row['quantity'];

	

				}

				//test
				echo $productid_value , $productname_value, $productprice_value,$productquantity_value;

				
				$sql2 = "INSERT INTO sold_products_table (product_id, product_name, product_price, quantity) VALUES ('$productid_value', '$productname_value', '$productprice_value', '$qty')";
				
				if ($conn->query($sql2) === TRUE) {
					echo "New record created successfully";

					//removing qty from avaliable table
					$sql3 = "UPDATE book_table SET quantity=quantity+1 WHERE book_id='$bookid'";
					
					
				} else {
					echo "Fail";
				}
				
				
				
			}

            if(mysqli_num_rows($ret)==0)
            {
				echo"0 res";
            }
			$conn->close();
			
				
			
		
		?>
                
          </div>
        </div>
          
      </div>
      
</body>
</html>