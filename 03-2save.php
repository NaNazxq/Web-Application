<html>
<head>
<title>บันทึกข้อมูล</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>
<body>
<p>
  <?php

include('connect2.php');
	$sql = "INSERT INTO customer (Name, ID., Tel., Email) 
		VALUES ('".$_POST["txtName"]."','".$_POST["txtID."]."','".$_POST["txtTel."]."'
		,'".$_POST["txtEmail"]."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "บันทึกข้อมูลสำเร็จ / Record add successfully";
	}

	mysqli_close($conn);

?>
</p>
<p><a href="index.php">Home | กลับหน้าแรก</a></p>
</body>
</html>
