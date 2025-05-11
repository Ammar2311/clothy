

<?php
// include "config.php";

   $connect=mysqli_connect('localhost','root','','store');
 
   if(isset($_POST['register'])){     //don't send data to mysql until click register
    
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['pass'];

    $sql="INSERT INTO users (username,email,user_password) Values ('$username','$email','$password')";
    $query=mysqli_query($connect,$sql);

    // var_dump($query);


    // if($query){
    //   echo "sign up successfully";
    //  }
    //   else{
    //     echo "fail to sign up";
    //   }
   }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
       .container{
        width: 50vw;
        background-color: #ddd;
        margin: 0 auto;
        padding: 10px;

        display: flex;
        justify-content: center;
        /* align-items: center; */

        flex-direction: column;
       }
           form div{
            display: flex;
            flex-direction: column;
           }

           input {
            height: 4vh;
           }

    </style>
</head>
<body>
    <div class="container">
         <h2>Sign Up</h2>
         <form action="" method="POST">
           <div>
            <label for="username">username</label>
            <input type="text" name="username" id="name">
          </div>
          <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
          </div>
          <div>
            <label for="pass">password</label>
            <input type="password" name="pass" id="pass"> 
           </div> 
          <div>
          <input type="submit" name="register" value="register" id="reg">
          </div>
          
         </form>

         <?php 
         if(isset($_POST['register'])){
            if($query){
              echo '<h3>sign up successed</h3>'; 

              header("Location: index.php");
              die();
              
              }  else
                echo '<h3>fail to sign up</h3>';
          }
         ?>
    </div>
    
</body>
</html>