   <?php include('../items/admin_navbar.php'); ?>
   <div id="layoutSidenav_content">
     <div class="container ">

       <form class="form-inline" method="get" action="#" style="margin:10px;">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
         <button id="btn_search" class="btn btn-outline-primary" type="submit">Search</button>
       </form>
       <?php

        //shfaqj e postimeve
        $select = "SELECT u.emri, u.mbiemri, p.emri_post, u.username, p.body, p.image, p.post_time,  p.id from post p, users u where p.user_id = u.id  order by p.id DESC ";
        $result   = mysqli_query($db, $select);

        //shfaqja e te gjithave postimeve 
        while (($row = $result->fetch_assoc()) != null) {

          echo "<div class='jumbotron'>";
          echo "<h1 class='display-4'>" . $row['emri_post'] . "</h1>";
          echo "<div class='post_foto'>";
          echo "<a target='_blank' href=../'assets/post_images/" . $row['image'] . "'>";
          echo "<img src='../assets/post_images/" . $row['image'] . "' >";
          echo "</a>";
          echo "</div>";
          echo "<div class='post_delete'>";
          echo "
        <td>
         <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#post2_" . $row['id'] . "'>
       Fshije
      </button> </td> ";
          echo "</div>";
          echo " <p class='lead'>" . $row['body'] . "</p>";
          echo "<hr class='my-4'>";
          echo "<p>Postuesi: " . $row['emri'] . " " . $row['mbiemri'] . "</p>";
          echo "<div class= 'post_time'";
          echo " <p class='lead'>" . $row['post_time'] . "</p>";
          echo "</div>";
          echo "</div>";
          echo '
              <div class="modal fade" id="post2_' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Fshije Postimin</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      A jeni i sigurt q&euml; d&euml;shironi ta fshini k&euml;t&euml; postim
                    </div>
                    <div class="modal-footer">
                    <td> <button type="button" class="btn btn-secondary" data-dismiss="modal">JO</button>
                      <a href="post_delete.php? id=' . $row['id'] . ' "class="btn btn-danger"id="delete_btn" >PO! Fshije</a> </td>
                    </div>
                  </div>
                </div>
              </div>
              ';
        }
        //nese nuk ka postime
        if (mysqli_num_rows($result) == 0) {
          echo "<p style='text-align:center; color:red; font-size:20px'> Nuk ka rezultate";
        }
        ?>
     </div>
   </div>
   <!-- Loading  -->
   <div class="loader loader-default" data-text="Duke u Fshir"></div>
   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
   <script src="assets/js/function.js"> </script>
   </body>

   </html>