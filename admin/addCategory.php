<?php 
 include('../config/db.php');

 
if(isset($_POST['submit'])){
    $catName = $_POST['catName'];
    
    $sql = "INSERT INTO Category (cat_name) VALUES ('$catName')";
    
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header('location:categories.php');
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    }
    
?>





<!DOCTYPE html>
<html lang="en">

<?php
    include_once 'includes/head.php';
    include('../config/db.php')
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
            <div class="container">

<div class="card">
    <div class="card-header">
        Add Category
    </div>
    <div class="card-body">

    <form action="addCategory.php" method='post'>
             <div class="form-group">
            <label for="catName"> Name:</label>
            <input type="text" class="form-control" id="catName" name='catName'>
            </div> 
            <button type="submit" name='submit' class="btn btn-primary">Submit</button>
    </form>

    </div>
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