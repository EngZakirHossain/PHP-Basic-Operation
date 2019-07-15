
<?php 
	include_once('connection.php');
	
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$city = $_POST['city'];
		
$sql = "INSERT INTO contact (name, email, phone, city)
VALUES ('$name', '$email', '$phone', '$city')";


if (mysqli_query($conn, $sql)) {
	header('Location: show.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
	}
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Add Page</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<div class="main">
		<h1 align="center"">Contact form</h1>
			<div class="center">
				<form action="#" method="post" enctype="multipart/form-data">
					<label>Name:</label>
					<input type="text" name="name" id="name" required="required">
					<label>Email:</label>
					<input type="email" name="email" id="email" required="required" >
					<label>Phone:</label>
					<input type="text" name="phone" id="phone" required="required">
					<label>City:</label>
					<input type="text" name="city" id="city" required="required">
					<input type="submit" name="submit" id="submit" value="Submit"/>
				</form>
			</div>
		</div>
	</body>
</html>