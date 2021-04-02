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
    <!-- ------------ Meta ------------------ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">

    <!-- ------------ Boostrap css ------------------ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php include('../items/title_bar_img.php'); ?>

    <title>Admin Users</title>
</head>

<body>

    <!-- ------------ Boostrap JS ------------------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>

    <style type="text/css">
        body {
            background: #222D32;
        }

        body,
        th,
        td {
            color: red;
        }
    </style>
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

                //Userat
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
                        <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#userdelete_" . $row['id'] . "'>   Fshije
                        </button> 
                        </td>
                        ";
                    echo "</tr>";
                }
                ?>

</body>

</html>