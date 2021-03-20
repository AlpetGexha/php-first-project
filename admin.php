<?php
session_start();
include 'config.php';
if (isset($_SESSION['ROLE']) &&  $_SESSION['ROLE'] != '1') {
    header('location: index.php');
    die();
}
?>
 <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    to ez my frends
</body>
</html>
