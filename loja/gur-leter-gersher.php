<?php
$msg = "";
include "../config.php";
include "../server.php";
// ne fillim kyqu para se te hysh ne index
ob_start();
//Nese nuk je i kyqur nuk mund te hysh ne kete faqe
include('../items/need_to_login.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="description" content="Rock-Paper-Scissors">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>GUR-LETER-GERSHER</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../assets/css/gur_leter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <?php include '../items/game_navbar.php' ;?>

    <div id="main">
        <div id="header">
            <div class="scores" id="score_computer">0</div>
            <div class="scores" id="score_you">0</div>
        </div>
        <div class="buttons" id="b_scissor"></div>
        <div class="buttons" id="b_paper"></div>
        <div class="buttons" id="b_rock"></div>
        <div id="playagain"></div>
        <div class="options" id="o_computer"></div>
        <div class="options" id="o_you"></div>
        <div id="result"></div>
    </div>

    <script src="../assets/js/gur_leter.js"></script>
</body>

</html>