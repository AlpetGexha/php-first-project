<?php
include '../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //fshirja e fotos te postimit
    $sql = "SELECT image from post where id = '$id'";
    $results = mysqli_query($db, $sql);
    $row = $results->fetch_assoc();
    $image = $row['image'];
    unlink('../assets/post_images/' . $image);

    //fshitja e postimit
    $sql1 = "DELETE FROM `post` WHERE `id`='$id'";
    $result = $db->query($sql1);

    if ($result == TRUE) {
        header('Location: post_admin.php');
    }
}
?>