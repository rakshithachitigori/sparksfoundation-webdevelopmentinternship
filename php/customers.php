<!Doctype html>
<html>
<head>
	<title>View Customers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <div class="topnav-right">
  <a class="active" href="transactiondetails.php">Transaction History</a>
  <a class="active" href="customers.php">View Customers</a>

  </div>
</div>
</div>  
<table class="viewusers">
	<h1>Customers Details</h1>
	<tr>
		<th>Name</th>
		<th>AccountNumber</th>
		<th>CurrentBalance</th>
                <th>Email</th> 
		
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "Bank");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT name, accountnumber, CurrentBalance,email FROM customers";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["name"] ."</td><td>".  $row["accountnumber"] ."</td><td>" .  $row["CurrentBalance"] ."</td><td>" .  $row["email"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>
<div class="middle">
	<h3 style="color: #ffffff">by Rakshitha Chitigori</h3>
	
</div>
</body>
</html>