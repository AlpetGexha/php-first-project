<!-- ------------ Scripti Per Iconat ------------------ -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <img class="navbar-brand" src="../assets/image/Killerlogo.jpg" alt="logo" style="width:50px;">
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link fas fa-home" href="../index.php">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link fas fa-id-card-alt" href="../contact.php">Kontaktonani</a>
      </li>

      <li class="nav-item">
        <a class="nav-link fas fa-tools" href="../create_post.php">Krijoni Postime</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fas fa-gamepad" href="../lojëra.php">Loj&euml;ra</a>
      </li>

      <!-- SETTINGAT me foto dhe username   -->
      <?php
      $username11 = $_SESSION['username'];
      $sql11 = "SELECT * from users where username = '$username11'";
      $sql12 = "SELECT * from post where";
      
      $results11 = mysqli_query($db, $sql11);
      $row = $results11->fetch_assoc();
      ?>
      <li class="nav-item dropdown nav_item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

          <?php echo "<img src='../assets/profile_image/" . $row['image'] . "' alt='Profile Pic' class='rounded-circle' height='32'  loading='lazy'>"; ?>
          <?php echo "<p class='fas'> " . $row['username'] . " </p>" ?>

        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

          <li>
            <a class="dropdown-item fas fa-user-alt" href="../myprofile.php">Profili im</a>
          </li>

          <li>
           <a class="dropdown-item fas fa-user-alt" href="../userpost.php">Postimet tua</a>
          </li>

          <li>
            <a class="dropdown-item fas fa-cog" href="../myprofile_edit.php">Settings</a>
          </li>

          <?php 
                if (isset($_SESSION['ROLE']) &&  $_SESSION['ROLE'] != '0') {
                  echo  '
              
                <li class="nav-item">
                <a class="dropdown-item fas fa-toolbox" href="../admin/index.php">Admin Control Panel</a>
              </li>
                  ';
                }
          ?>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item fas fa-sign-out-alt" href="../logout.php">Shkyquni</a>
          </li>

        </ul>
      </li>


    </ul>
  </div>
</nav>

<style type="text/css">
  .nav_item{
    position:absolute; 
    right: 2%;
    top:15%;
    font-size:25px;
  }

  @media screen and (max-width: 780px) {
  .nav_item {
    position: initial;

  }

}
  body {
    background: #092756;
    background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -moz-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
    background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -webkit-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -webkit-linear-gradient(-45deg, #670d10 0%, #092756 100%);
    background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -o-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -o-linear-gradient(-45deg, #670d10 0%, #092756 100%);
    background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -ms-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -ms-linear-gradient(-45deg, #670d10 0%, #092756 100%);
    background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), linear-gradient(135deg, #670d10 0%, #092756 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3E1D6D', endColorstr='#092756', GradientType=1);
    background-repeat: no-repeat;
    background-position: right top;
    background-attachment: fixed;
    height: 100vh;
  }
</style>