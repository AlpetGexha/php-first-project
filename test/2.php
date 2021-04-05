<?php
include "../config.php";
include "../server.php";
// ne fillim kyqu para se te hysh ne index


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ------------ Boostrap css ------------------ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <style type="text/css">
  	/*----------- Jumptron---------- */
.jumbotron {
  border: 2px black solid;
  border-radius: black 10px;
}

/*Foto*/
.post_foto img {
  max-width: 168px;
  max-height: 168px;
  padding: 10px;
}

.post_foto img:hover {
  transform: scale(1.09);
  transition: all 1.5s ease;
}

.post_foto img:not([src]) {
  visibility: hidden;
}

.jumbotron {
  position: relative;
  border: 2px black solid;
  background-color: #e9ecef;
  padding: 40px;
}

/*BTN*/
.post_delete {
  position: absolute;
  top: 16px;
  right: 20px;
}

#btn_search {
  margin: 10px 0px 10px !important;
}

/*date/time*/
.post_time {
  position: absolute;
  bottom: 10px;
  left: 30px;
  opacity: 0.4;
}

/*Loading gif*/
#jumbotron_loading img {
  width: 100%;
}

.loagin_no_more_post {
  text-align: center;
  color: red;
  font-size: 50px;


}
  </style>
  <body>
    <!-- ------------ Boostrap JS ------------------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <div class="container mt-5">
	<div class="row">
		<div class="col-md-2">
			<dl>
				<dt>
					Description lists
				</dt>
				<dd>
					A description list is perfect for defining terms.
				</dd>
				<dt>
					Euismod
				</dt>
				<dd>
					Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
				</dd>
				<dd>
					Donec id elit non mi porta gravida at eget metus.
				</dd>
				<dt>
					Malesuada porta
				</dt>
				<dd>
					Etiam porta sem malesuada magna mollis euismod.
				</dd>
				<dt>
					Felis euismod semper eget lacinia
				</dt>
				<dd>
					Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</dd>
			</dl>
		</div>
		<div class="col-md-8">
				<?php

  $sql = "SELECT u.emri, u.mbiemri, p.emri_post, p.body , p.image, p.post_data from post p, users u where p.user_id = u.id  order by p.id"; // "% $serach %" perafersish fjala qe e shenon per te kerkuar nje postim
  $result = mysqli_query($db, $sql);

  while (($row = $result->fetch_assoc()) != null) {

    echo "<div class='jumbotron'>";
    echo "<h1 class='display-4'>" . $row['emri_post'] . "</h1>";
    echo "<div class='post_foto'>";
    echo "<a target='_blank' href='../assets/post_images/" . $row['image'] . "'>";
    echo "<img src='../assets/post_images/" . $row['image'] . "' >";
    echo "</a>";
    echo "</div>";
    echo " <p class='lead'>" . $row['body'] . "</p>";
    echo "<hr class='my-4'>";
    echo "<p>Postuesi: " . $row['emri'] . " " . $row['mbiemri'] . "</p>";
    echo "<div class= 'post_time'";
    echo " <p class='lead'>" . $row['post_data'] . " </p>";
    echo "</div>";
    echo "</div>";
  }

				?>
		</div>
		<div class="col-md-2">
			<dl>
				<dt>
					Description lists
				</dt>
				<dd>
					A description list is perfect for defining terms.
				</dd>
				<dt>
					Euismod
				</dt>
				<dd>
					Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
				</dd>
				<dd>
					Donec id elit non mi porta gravida at eget metus.
				</dd>
				<dt>
					Malesuada porta
				</dt>
				<dd>
					Etiam porta sem malesuada magna mollis euismod.
				</dd>
				<dt>
					Felis euismod semper eget lacinia
				</dt>
				<dd>
					Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</dd>
			</dl>
		</div>
	</div>
</div>

  </body>
</html>