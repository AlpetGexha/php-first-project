   <?php include('../items/admin_navbar.php'); ?>
   <style>
       body,
       th,
       td {
           color: red;
       }

       .inputat {
           font-weight: bold;
           color: red;
           background-color: #18161b;
       }

       .inputat:focus {
           background-color: black;
       }
   </style>
   <div id="layoutSidenav_content">
       <div class="container-fluid">
           <table class="table">
               <thead>
                   <tr>
                       <th scope="col">#ID</th>
                       <th scope="col">Mesazhi</th>
                   </tr>
               </thead>
               <tbody>

                   <?php
                    if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
                        $page_no = $_GET['page_no'];
                    } else {
                        $page_no = 1;
                    }

                    $total_records_per_page = 10;
                    $offset = ($page_no - 1) * $total_records_per_page;
                    $previous_page = $page_no - 1;
                    $next_page = $page_no + 1;
                    $adjacents = "2";

                    $result_count = mysqli_query($db, "SELECT COUNT(*) As total_records FROM `mesazhi`");
                    $total_records = mysqli_fetch_array($result_count);
                    $total_records = $total_records['total_records'];
                    $total_no_of_pages = ceil($total_records / $total_records_per_page);
                    $sedbd_last = $total_no_of_pages - 1; // total page minus 1

                    $result = mysqli_query($db, "SELECT * FROM `mesazhi` LIMIT $offset, $total_records_per_page");
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>
                                    <td>" . $row['id'] . "</td>
                                    <td> <textarea class='inputat' name='body' rows='5' cols='80' id='body' readonly=''>" . $row['mesazhi'] . "</textarea></td>;
                                  </tr>";
                    }
                    mysqli_close($db);
                    ?>
               </tbody>
           </table>


           <div class="page-count" style='padding: 10px 20px 0px;'>
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
                        } ?>>Previous</a>
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
                                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
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
                        } ?>>Next</a>
               </li>
               <?php if ($page_no < $total_no_of_pages) {
                    echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                } ?>
           </ul>

       </div>
   </div>

   </body>

   </html>
