<!DOCTYPE html>
<html lang="en">

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