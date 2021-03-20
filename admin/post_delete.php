<?php
include "../config.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // write delete query
    $sql = "DELETE FROM `post` WHERE `id`='$id'";

    // Execute the query

    $result = $db->query($sql);

    if ($result == TRUE) {
        $msg = "Record deleted successfully.";
        header('Location: post_admin.php');
    } else {
        echo "Error:" . $sql . "<br>" . $db->error;
    }
}
