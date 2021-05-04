   <?php include('../items/admin_navbar.php'); ?>
   <div id="layoutSidenav_content">
     <div class="container ">

       <form class="form-inline" method="get" action="#" style="margin:10px;">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
         <button id="btn_search" class="btn btn-outline-primary" type="submit">Search</button>
       </form>


       <?php
        if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
          $page_no = $_GET['page_no'];
        } else {
          $page_no = 1;
        }

        $total_records_per_page = 3;
        $offset = ($page_no - 1) * $total_records_per_page;
        $previous_page = $page_no - 1;
        $next_page = $page_no + 1;
        $adjacents = "2";

        $result_count = mysqli_query($db, "SELECT COUNT(*) As total_records FROM `post`");
        $total_records = mysqli_fetch_array($result_count);
        $total_records = $total_records['total_records'];
        $total_no_of_pages = ceil($total_records / $total_records_per_page);
        $sedbd_last = $total_no_of_pages - 1; // total page minus 1

        //shfaqj e postimeve
        $select = "SELECT u.emri, u.mbiemri, p.emri_post, u.username, p.body, p.image, p.post_time,  p.id from post p, users u where p.user_id = u.id  order by p.id DESC LIMIT $offset, $total_records_per_page ";
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

        mysqli_close($db);
        ?>

       <?php


        ?>

       <div class="page-count" style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
         <strong>Page <?php echo $page_no . " of " . $total_no_of_pages; ?></strong>
       </div>

       <ul class="pagination">
         <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } 
          ?>

         <li <?php if ($page_no <= 1) {
                echo "class='disabled'";
              } ?>>
           <a <?php if ($page_no > 1) {
                echo "href='?page_no=$previous_page'";
              } ?>>Prapa</a>
         </li>

         <?php
          if ($total_no_of_pages <= 10) {
            for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
              if ($counter == $page_no) {
                echo "<li class='active'><a>$counter</a></li>";
              } else {
                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
              }
            }
          } elseif ($total_no_of_pages > 10) {

            if ($page_no <= 4) {
              for ($counter = 1; $counter < 8; $counter++) {
                if ($counter == $page_no) {
                  echo "<li class='active'><a>$counter</a></li>";
                } else {
                  echo "<li><a href='?page_no=$counter'>$counter</a></li>ssssssss";
                }
              }
              echo "<li><a>...</a></li>";
              echo "<li><a href='?page_no=$sedbd_last'>$sedbd_last</a></li>";
              echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
            } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
              echo "<li><a href='?page_no=1'>1</a></li>";
              echo "<li><a href='?page_no=2'>2</a></li>";
              echo "<li><a>...</a></li>";
              for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
                if ($counter == $page_no) {
                  echo "<li class='active'><a>$counter</a></li>";
                } else {
                  echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }
              }
              echo "<li><a>...</a></li>";
              echo "<li><a href='?page_no=$sedbd_last'>$sedbd_last</a></li>";
              echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
            } else {
              echo "<li><a href='?page_no=1'>1</a></li>";
              echo "<li><a href='?page_no=2'>2</a></li>";
              echo "<li><a>...</a></li>";

              for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                if ($counter == $page_no) {
                  echo "<li class='active'><a>$counter</a></li>";
                } else {
                  echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }
              }
            }
          }
          ?>

         <li <?php if ($page_no >= $total_no_of_pages) {
                echo "class='disabled'";
              } ?>>
           <a <?php if ($page_no < $total_no_of_pages) {
                echo "href='?page_no=$next_page'";
              } ?>>Tjetra</a>
         </li>
         <?php if ($page_no < $total_no_of_pages) {
            echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
          } ?>
       </ul>
     </div>
   </div>
   <!-- Loading  -->
   <div class="loader loader-default" data-text="Duke u Fshir"></div>
   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
   <script src="assets/js/function.js"> </script>
   </body>

   </html>