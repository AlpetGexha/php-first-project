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
                    <th scope="col">Mesazhi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * from mesazhi  ";
                $results = mysqli_query($db, $sql);
                while (($row = $results->fetch_assoc()) != null) {
                    echo '<tr>';
                    echo "<td>" . $row['id'] . "</td>";
                    echo '<td>' . '<textarea class="inputat" required=""  name="body" rows="4" cols="30" id="body" readonly+>' . $row['mesazhi'] . '</textarea>' . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>