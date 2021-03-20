<?php
$msg = "";
session_start();
include '../config.php';
include "../items/need_to_login.php";
if (isset($_SESSION['ROLE']) &&  $_SESSION['ROLE'] != '1') {
    header('location: ../index.php');
    die();
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Admin Users</title>
</head>

<body>
    <?php include('../items/admin_navbar.php'); ?>
    <div class="container mt-5">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Foto e Profilit</th>
                    <th scope="col">Emri</th>
                    <th scope="col">Mbiemri</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opsioni</th>
                    </th>
                </tr>
            <tbody>

                <?php
                $sql = "SELECT * from users ";
                $results = mysqli_query($db, $sql);

                while (($row = $results->fetch_assoc()) != null) {

                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . "<img width='85' height='85' src='../assets/profile_image/" . $row['image'] . "' alt='Profile Pic'>" . "</td>";
                    echo "<td>" . $row['emri'] . "</td>";
                    echo "<td>" . $row['mbiemri'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "
                <td>
                 <a href='user_delete.php? id=" . $row['id'] . "'class='btn btn-danger'>Fshije</a>
            </td>
                    ";
                    echo "</tr>";
                }


                ?>

</body>

</html>