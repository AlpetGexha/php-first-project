<?php include('config.php'); 
session_start();
ob_start();

// Delete me id
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT image from post where id = '$id'";
	$results= mysqli_query($db,$sql);
	$row = $results->fetch_assoc();
	$image = $row['image'];

	unlink('assets/post_images/'.$image);
	$delete = "DELETE from post where id='$id'"; 
	mysqli_query($db,$delete);
    header("Location:userpost.php");
}
?>
