

<?php 
	include_once('connection.php'); 
	$sql = "SELECT * FROM contact";
	$result = mysqli_query($conn, $sql);
?>
<html>
	<head>
		<meta charset=""/>
		<title>Add Page</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<center>
			<table border="1px" cellpadding="5px">
				<tr>
					<th colspan="6"><h2>Contact List</h2></th>
				</tr>
				<tr>
					<th width="100px"> Name </th>
					<th width="100px">email</th>
					<th width="100px">Phone</th>
					<th width="100px">City</th>
					<th width="100px">edit</th>
					<th width="100px">delete</th>
				</tr>
				<?php
					while($row=mysqli_fetch_array($result))	{
				?>
				<tr>
					<td><?php echo $row[1] ; ?></td>
					<td><?php echo $row[2] ; ?></td>
					<td><?php echo $row[3] ; ?></td>
					<td><?php echo $row[4] ; ?></td>
					<td><a href = "edit.php?id=<?php echo $row[0]; ?>">Edit</a></td>
					<td><a href = "delete.php?id=<?php echo $row[0]; ?>">Delete</a></td>
				</tr>
				
			<?php } ?>
			</table>
		</center>
	</body>
</html>