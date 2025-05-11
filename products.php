<?php
//    require "config.php";

       //connect with database(mysql)
    $connect=mysqli_connect('localhost','root','','store');

   if(isset($_POST['submit'])){
    $name=$_POST['prod_name'];
    $price=$_POST['price'];
    $desc=$_POST['desc'];
    $img=$_POST['img'];

    $sql="INSERT INTO products (product_name, price,description,img) VALUES ('$name','$price','$desc','$img')";
    $query=mysqli_query($connect,$sql);  //access to databse and run sql code

    var_dump($query);

           if($query)  //if query success
                {
                echo "<script>alert('Data inserted successfully');</script>";
                }
                    else
                    {
                    echo "<script>alert('Data not inserted');</script>";
                    }

     }

     $sql=mysqli_query($connect,"SELECT * FROM products");   //select all columns

         /////////////// //////////////

     if(isset($_POST['delete'])){
    //   echo $_POST['id'];

        $sql_del="DELETE FROM products WHERE id = 15";
        mysqli_query($connect,$sql_del);
     }
     echo $_POST['delete'];


   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <style>
         <?php require "style.css"  ?>

         .allProducts{
            width: 100%;
            
            margin 5px;

            /* background-color: #ddd; */

    

         }
         .prod{
            width: 60%;
            display: flex;
            /* justify-content: center; */
            align-items: center;

            border-bottom: 1px solid #ddd;
         }
         .prod img,.prod_text2{

            padding: 7px;
         }



         .addNewProduct{

            /* background-color: lightblue; */
            width: 100%;
            height 60vh;

            margin: 5px;
            padding: 5px;
           }
    </style>
</head>
<body>
    <?php  require "header.php"   ?>

   <?php 
   $i=1;
    while($arr=mysqli_fetch_assoc($sql))
    { 
     ?>

    <div class="allProducts">
            <div class="prod">
                <img  src=<?= "imgs/".$arr['img']?>  width="100px"> 
                <div class="prod_text2">
                    <p> <?=$arr['product_name']  ?></p>
                    <span><?= $arr['price'].".00 USD"?> </span>
                </div>
                <input type="submit" name="delete" value="delete">
            </div>
  
    </div>

<?php  $i++; }  ?>
                     

<!-- Adding new product -->
    <div class="addNewProduct">
        <h3>Add new item</h2>
        <form action="" method="POST">
            <label for="prod_name">product name</label>
            <input type="text" name="prod_name">

            <label for="">price</label>
            <input type="number" name="price">
 
            <label for="">description</label>
            <textarea id="" name="desc" ></textarea>

            <label for="">image link</label>
            <input type="text" name="img" placeholder="prod1.png">
            
            <input type="submit" name="submit" value="Add">

        </form>
    </div>


     <?php  include "footer.php"  ?>
    
</body>
</html>



