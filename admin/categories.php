<!DOCTYPE html>
<html lang="en">
<?php include('../config/db.php') ?>
<?php
    include_once 'includes/head.php';
?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
        <?php
                include_once 'includes/nav.php';
            ?>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
                include_once 'includes/side.php';
            ?>
            <!-- Navbar End -->
    
            <!-- use it for add prduct tables -->

                <div class="container pt-5">
<table class='table table-bordered bg-white'>
    <thead>
        <tr>
            <td>Name</td>
            <td>Action</td>
        </tr>
    </thead>

    <!-- <?php
     $sql = "SELECT * FROM Category";
     $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {

            ?>
         -->
        <tbody>
        <tr>
            <td><?php echo $row["cat_name"] ?></td>  
            
            <td><a href='editCategory.php?id=<?php echo $row["cat_id"] ?>'>Edit</a> 
            <td> <a href='delCategory.php?id=<?php echo $row["cat_id"] ?>'>Delete</a></td>
        </tr>

        
        <?php
         }
      } else {
         echo "0 results";
      }


?>
       </tbody>
    
</table>
</div>


            <!-- use it for add prduct tables -->

            


            <!-- Footer Start -->
            <?php
                // include_once 'includes/realfooter.php';
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php
         include_once 'includes/footer.php';
    ?>
</body>

</html>