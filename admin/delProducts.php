<?php
 session_start();
 include('../config/db.php');
 
 

if(isset($_GET['id'])){
    $product_id = $_GET['id'];
   $sql = "DELETE FROM products WHERE product_id='$product_id'";
   $result = mysqli_query($conn, $sql);
   header('location:viewproduct.php');


}

?>