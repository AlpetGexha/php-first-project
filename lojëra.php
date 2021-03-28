<?php 
include "config.php";
include "server.php";
// ne fillim kyqu para se te hysh ne index
ob_start();
//Nese nuk je i kyqur nuk mund te hysh ne kete faqe
include('items/need_to_login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lojërat</title>
	<!-- ------------ Foto per title bar ------------------ -->
    <?php include('items/title_bar_img.php'); ?>

    <!-- ------------ Links ------------------ -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- ------------ Meta ------------------ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">

    <!-- ------------ Boostrap css ------------------ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	  <!-- ------------ Boostrap JS ------------------ -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>

	<?php include('items/navbar.php'); ?>

	<div class="container mt-5">
		<style>
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
  margin: auto;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.ez {
	max-width: 340px;
	max-height: 380px;
	padding: 10px;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
	flex-direction: row;
}
.flip-card-title{
	text-align: center;
	font-size: 30px;
	font-weight: bold;
}
</style>
</head>
<body>

	<div class="container mt-5">
  <div class="row">

    <div class="col order-last">
      <div class="ez">
	<div class="flip-card-title">
		Titulli i lojes
	</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/image/AA.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Emri i lojes</h1> 
      <p></p> 
      <p>pershkrimi</p>
    </div>
  </div>
</div>
</div>
    </div>

    <div class="col">
      <div class="ez">
	<div class="flip-card-title">
		Titulli i lojes
	</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/image/AA.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Emri i lojes</h1> 
      <p></p> 
      <p>pershkrimi</p>
    </div>
  </div>
</div>
</div>
    </div>

    <div class="col order-first">
      <div class="ez">
	<div class="flip-card-title">
		Titulli i lojes
	</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets/image/AA.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Emri i lojes</h1> 
      <p></p> 
      <p>pershkrimi</p>
    </div>
  </div>
</div>
</div>
    </div>

  </div>
</div>


</body>
</html>