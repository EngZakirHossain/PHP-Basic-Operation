<?php 
	include_once('connection.php');
	if(isset($_GET['id'])){
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$city = $_POST['city'];
			$id = $_POST['id'];
			$update = "UPDATE contact SET name='$name', email='$email', phone='$phone', city='$city' WHERE id='$id'";
			
		if (mysqli_query($conn, $update)) {
   		 header('Location: show.php');
		}	
		}
		else{
		$id = $_GET['id'];
		$sql = "SELECT * FROM contact WHERE id = '$id'";
		$result = mysqli_query($conn, $sql);
		$row=mysqli_fetch_array($result);
?>	
<link rel="stylesheet" type="text/css" href="style.css"/>
<div class="main">
	<div class="center">
		<form action="" method="post" enctype="multipart/form-data">
			<label>Name:</label>
			<input type="text" name="name" id="name" required="required" value="<?php echo $row['name'] ;?>">
			<label>Email:</label>
			<input type="email" name="email" id="email" required="required" value="<?php echo $row['email'] ;?>">
			<label>Phone:</label>
			<input type="text" name="phone" id="phone" required="required" value="<?php echo $row['phone'] ;?>">
			<label>City:</label>
			<input type="text" name="city" id="city" required="required" value="<?php echo $row['city'] ;?>">
			<input type="hidden" name="id" value="<?php echo $row[0] ;?>"/>
			<input type="submit" name="submit" id="submit" value="Submit"/>
		</form>
	</div>
</div>
<?php 
	}}
?>
 
 
 
 
 
 
 
 
 
 
 
 