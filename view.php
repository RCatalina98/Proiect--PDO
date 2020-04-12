   
          <?php
require_once 'Connection.php';
        $sql1="CALL images.viewImage()";
        $q=$con->query($sql1);
       
        $row = $q->fetch();
        ?>
               <td><?php echo $row['title'];?></td>
               <td><img src="<?php echo $row['image'];?>"</td>

<a href="sale.php">Back</a>