<?php
          include("./include/vars.php");

          $sql = "SELECT id, nombre FROM productos";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            ?>
            <ul class="btn-link">
            <?php
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  ?>
                    <li><a href="#section<?php echo $row["id"];?>"><?php echo $row["nombre"];?></a></li>
                  <?php
              }
              ?>
              </ul>
               <?php
          } else {
              echo "0 results";
          }
          $conn->close();
      ?>