



<?php
 $connect=mysqli_connect('localhost','root','','store');

$sql=mysqli_query($connect,"SELECT * FROM users");   //select all columns

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <style>
        /* for header and footer */
        <?php require "style.css"  ?>  

        .container{
            background-color: #ddd;
            width: 70vw;
        
            margin:0 auto;
        }

        table{
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
    </style>
</head>
<body>
  <?php  require "header.php"   ?>
  
  <div class="container">
        <table>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>email</th>
                <th>password</th>
            </tr>


            <?php 
                  $i=1;
                while($row=mysqli_fetch_assoc($sql))
                { 
                 ?>
             <tr>
                  <td><?= $row['id'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['user_password'] ?></td>
             </tr>

            <?php  $i++; }  ?>
        
        
        </table>

  </div>

  <?php  include "footer.php"   ?>
</body>
</html>