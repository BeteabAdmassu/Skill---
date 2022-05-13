<?php
 $conn = new mysqli('remotemysql.com','NaXmWscQNV', '4mGy83U85M', 'NaXmWscQNV');
 $sql = "SELECT * FROM `user`";
 $result = mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result)){
     ?>
     <tr>
         <td><?php echo $row['Fname'];?></td>
         <td><?php echo $row['Lname'];?></td>
     </tr>
     <?php
                                        }


?>