<!DOCTYPE html>
<html lang="en">

<?php
    include_once 'includes/head.php';
    include('../config/db.php');
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
All Products
</div>
<div class="card-body">
<section id="content mt-5">
	<div class="content-blog  bg-white">
		<div class="container">
			<table class="table table-striped">
				<thead>
					<tr> 
						<th>Product Name</th>
						<th>Category Name</th>
						<th>Thumbnail</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

                <?php
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
      
        <tr>
            <td><?php echo $row["product_name"] ?></td>
            <td><?php echo $row["cat_id"] ?></td>
            <td><?php if(isset($row["thumb"])){echo 'yes'; }else{ echo 'No'; }  ?></td> 
            <td><a href='editProducts.php?id=<?php echo $row["product_id"] ?>'>Edit</a> 
            | <a href='delProducts.php?id=<?php echo $row["product_id"] ?>'>Delete</a></td>
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
	</div>

</section>
</div>
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