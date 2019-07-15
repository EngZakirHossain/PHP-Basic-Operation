<?php 
	include_once('connection.php');
	if(isset($_GET['id'])){
		
		$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM contact WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header('Location: show.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
