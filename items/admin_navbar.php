<?php
$msg = "";
session_start();
ob_start();
include '../config.php';
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
  header("Location:../login.php");
  die();
}
if (isset($_SESSION['ROLE']) &&  $_SESSION['ROLE'] != '1') {
  header('location: ../index.php');
  die();
}

$username = $_SESSION['username'];
$username = $_SESSION['username'];
$sql1 = "SELECT * from users where username = '$username'";
$sql2 = "SELECT * from post";

$results1 = mysqli_query($db, $sql1);
$row = $results1->fetch_assoc();
$results2 = mysqli_query($db, $sql2);
$row = $results2->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- ------------ Meta ------------------ -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta charset="utf-8">

  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- ------------ Boostrap css ------------------ -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <?php include('../items/title_bar_img.php'); ?>
  <!-- ------------ Scripti Per Iconat ------------------ -->
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  <title>Admin Users</title>
</head>

<body>

  <!-- ------------ Boostrap JS ------------------ -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>


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
  <style type="text/css">

  </style>


  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin Pannel</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Main</div>
            <a class="nav-link" href="../admin/index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
              P&euml;doruesit
            </a>
            <a class="nav-link" href="../admin/sms_admin.php">
              <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
              Mesazhet
            </a>
            <a class="nav-link" href="../admin/post_admin.php">
              <div class="sb-nav-link-icon"><i class="fas fa-blog"></i></div>
              Postimet
            </a>
            <a class="nav-link" href="../index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
              Shko ne faqen kryesores
            </a>
            <!-- <a class="nav-link" href="#">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a> -->
            <!-- <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
              Pages
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Authentication
                </a>
              </nav>
            </div> -->
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Admini: <?php echo $username; ?></div>
        </div>
      </nav>
    </div>


    <script>
      /*!
       * Start Bootstrap - SB Admin v6.0.3 (https://startbootstrap.com/template/sb-admin)
       * Copyright 2013-2021 Start Bootstrap
       * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
       */
      (function($) {
        "use strict";

        // Add active state to sidbar nav links
        var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
          if (this.href === path) {
            $(this).addClass("active");
          }
        });

        // Toggle the side navigation
        $("#sidebarToggle").on("click", function(e) {
          e.preventDefault();
          $("body").toggleClass("sb-sidenav-toggled");
        });
      })(jQuery);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>