<?php 
include "../config.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$sql = "SELECT image from post where id = '$id'";
    $results= mysqli_query($db,$sql);
    $row = $results->fetch_assoc();
    $image = $row['image'];
    unlink('../assets/profile_images/'.$image);

	$sql1 = "DELETE FROM `users` WHERE `id`='$id'";
	$result = $db->query($sql1);

	if ($result == TRUE) {
		$msg = "Record deleted successfully.";
		header('Location: index.php');
	}
}
