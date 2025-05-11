
<?php
$connect=mysqli_connect('localhost','root','','store');

$sql=mysqli_query($connect,"SELECT * FROM products");   //select all columns

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
       <?php  require "style.css" ?>
    </style>
</head>
 <body>

    <?php  require "header.php"  ?>
 
    <div class="main">
        <div class="action">
            <h2>every where you'll find us</h2>
            <a href="products.php">
            <button>See All</button>  </a>
        </div>
    </div>

    <div class="products">
         <!-- <h3>most selling products</h3> -->
         <?php 
                $i=1;
              
                while($row=mysqli_fetch_assoc($sql))
                {  
       
         ?>

         <div class="product">
            <img  src=<?= "imgs/".$row['img']?>  width="100px"> 
            <div class="prod_text">
                <p><?=$row['product_name']  ?></p>
                <span><?= $row['price'].".00 USD"?> </span>
            </div>
         </div>
        <?php  $i++; 
           if($i>4)break;   //only appear four item
                }  ?>

         <!-- <div class="product">
            <img src="imgs/prod3.png" width="100px"> 
            <div class="prod_text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. s culpa fuga quibusdam accusantium, optio libero atque harum!</p>
                <span>$199.00 USD</span>
            </div>
         </div>

         <div class="product">
            <img src="imgs/prod7.png" width="100px"> 
            <div class="prod_text">
                <p>Lorem ipsum dolor sit Vitae quam deleniti voluptas culpa fuga quibusdam accusantium, optio libero atque harum!</p>
                <span>$199.00 USD</span>
            </div>
         </div>


         <div class="product">
            <img src="imgs/prod5.png" width="100px"> 
            <div class="prod_text">
                <p>Lorem ipsum dolor sit Vitae quam deleniti voluptas culpa fuga quibusdam accusantium, optio libero atque harum!</p>
                <span>$199.00 USD</span>
            </div>
         </div> -->
    
    </div>
    
    <?php  include "footer.php"  ?>
     


 </body>
</html>