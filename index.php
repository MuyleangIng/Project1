<?php
	$page = "home.php";
	$slide = true;
	if(isset($_GET['p']))
	{
		$p = $_GET['p'];
		switch($p)
		{
			case"shop":
				$page = "shop.php";
				$slide = false;
				break;
			case"check-out":
				$page = "check-out.php";
				$slide = false;
				break;
			case"blog":
				$page = "blog.php";
				$slide = false;
				break;
			case"contact":
				$page = "contact.php";
				$slide = false;
				break;
			case "add-to-card":
				$page = "add-to-card.php";
				$slider = false;
				break;
			
			
		}
	}
?>

<!DOCTYPE html>
<html lang="zxx">
<?php include"includes/head.php" ?>
<body>
	<?php include"includes/header.php" ?>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <?php include"includes/menu-bar.php" ?>
                <div class="col-lg-9">
                    <?php include"includes/search.php" ?>
                    <?php if($slide) include"includes/slide.php" ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
	<?php include $page ?>
	<?php include"includes/footer.php" ?>
    <?php include"includes/js-plugins.php" ?>



</body>

</html>