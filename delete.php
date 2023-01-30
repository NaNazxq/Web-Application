<html>
<head>
<title>delete</title>
</head>
<body>
<?php

include('connect2.php');
	$strCustomerID = $_GET["CustomerID"];
	$sql = "DELETE FROM customer
			WHERE CustomerID = '".$strCustomerID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "Record delete successfully";
	}

	mysqli_close($conn);
?>
<p><a href="index.php">Home | กลับหน้าแรก</a></p>
</body>
</html>
