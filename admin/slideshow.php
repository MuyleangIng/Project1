<?php
	include("config.php");
	$config = mysqli_connect(HOST, USER, PASS, DB) or die ("Can not connect to DB!");
?>

<!DOCTYPE html>
<html lang="en">

<?php
    include_once 'includes/head.php';

	$newQuery = "select * from tbl_slideshow;";
	$resNew = mysqli_query($config, $newQuery);
	$amount = mysqli_num_rows($resNew);

	if(isset($_GET['pg'])){
		$pg = $_GET['pg'];
	}
	else{
		$pg = 1;
	}

	if(isset($_GET['order'])){
        if($_GET['order'] == 1){
            if($_GET['ssorder'] == 1){
                header("location: slideshow.php?pg=".$pg);
            }
            else{
                $ssorder = $_GET['ssorder'] - 1;

                $update_sql = "
                    UPDATE tbl_slideshow 
                    SET ssorder = '". $_GET['ssorder'] ."'
                    WHERE ssorder = ". $ssorder .";
                ";
                mysqli_query($config,$update_sql);
    
                $update_sql = "
                    UPDATE tbl_slideshow 
                    SET ssorder = '". $ssorder ."'
                    WHERE ssid = ". $_GET['ssid'] .";
                ";
                mysqli_query($config,$update_sql);
                header("location: slideshow.php?p=slideshow&pg=".$pg);
            }
        }
        if($_GET['order'] == 0){
            if($_GET['ssorder'] == $amount){
                header("location: slideshow.php?pg=".$pg);
            }
            else{
                $ssorder = $_GET['ssorder'] + 1;

                $update_sql = "
                    UPDATE tbl_slideshow 
                    SET ssorder = '". $_GET['ssorder'] ."'
                    WHERE ssorder = ". $ssorder .";
                ";
                mysqli_query($config,$update_sql);
    
                $update_sql = "
                    UPDATE tbl_slideshow 
                    SET ssorder = '". $ssorder ."'
                    WHERE ssid = ". $_GET['ssid'] .";
                ";
                mysqli_query($config,$update_sql);
                header("location: slideshow.php?pg=".$pg);
            }
        }
    }
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
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->



 
            <?php
 $error = -1; /* 1:faild  -1:normal  0:success*/
 $errmsg = "";
 if(isset($_GET['action']))
 {
	$action = $_GET['action'];
	switch($action)
	{
		case "0":
			$ssid = $_GET['ssid'];
			$sql = "update tbl_slideshow set enable='1' where ssid=$ssid";
			mysqli_query($config, $sql);
			break;
		case "1":
			$ssid = $_GET['ssid'];
			$sql = "update tbl_slideshow set enable='0' where ssid=$ssid";
			mysqli_query($config, $sql);
			break;
		case "2":
			$cur_ssid = $_GET['ssid'];
			$cur_ssorder = $_GET['ssorder'];
			$sql = "select ssid, ssorder from tbl_slideshow where ssorder < $cur_ssorder order by ssorder desc limit 1";
			$result = mysqli_query($config, $sql);
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_array($result); 
				$next_ssid = $row['ssid'];
				$next_ssorder = $row['ssorder'];
				$sql = "update tbl_slideshow set ssorder=$next_ssorder where ssid=$cur_ssid";
				mysqli_query($config, $sql);
				$sql = "update tbl_slideshow set ssorder=$cur_ssorder where ssid=$next_ssid";
				mysqli_query($config, $sql);
			}
			break;
		case "3":
			$cur_ssid = $_GET['ssid'];
			$cur_ssorder = $_GET['ssorder'];
			$sql = "select ssid, ssorder from tbl_slideshow where ssorder > $cur_ssorder order by ssorder asc limit 1";
			$result = mysqli_query($config, $sql);
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_array($result);
				$next_ssid = $row['ssid'];
				$next_ssorder = $row['ssorder'];
				$sql = "update tbl_slideshow set ssorder=$next_ssorder where ssid=$cur_ssid";
				mysqli_query($config, $sql);
				$sql = "update tbl_slideshow set ssorder=$cur_ssorder where ssid=$next_ssid";
				mysqli_query($config, $sql);
			}
			break;
		case "4":
			$title = $_POST['txttitle'];
			$subtitle = $_POST['txtsubtitle'];
			$text = $_POST['tatext'];
			$link = $_POST['txtlink'];
			$enable = "0";
			if(isset($_POST['chkenable']))
			{
				$enable = "1";
			}
			
			$sql = "select max(ssorder)+1 as nextssorder from tbl_slideshow";
			$result = mysqli_query($config, $sql);
			$ssorder = 1;
			if(mysqli_num_rows($result) == 1)
			{
				$row = mysqli_fetch_array($result);
				$ssorder = $row['nextssorder'];
			}
			$img = "";
			if(isset($_FILES['fileimg']))
			{
				$tmp_name = $_FILES['fileimg'] ['tmp_name'];
				if(file_exists($tmp_name) || is_uploaded_file($tmp_name))
				$org_name = $_FILES['fileimg'] ['name'];
				$ext = pathinfo($org_name, PATHINFO_EXTENSION);
				if($ext == "gif" || $ext == "png" || $ext == "jpg")
				{
					if(($_FILES['fileimg'] ['size']/1048576) <= 1)
					{
						$img = floor(microtime(true) * 1000) . "." . $ext;
						$dir = "img/slideshow/";
						$sql = "insert into tbl_slideshow(title, subtitle, text, link, enable, ssorder, img)
							values('$title', '$subtitle', '$text', '$link', '$enable', '$ssorder', '$img')";
						$result = mysqli_query($config, $sql);	
						if($result)
						{
							move_uploaded_file($tmp_name, $dir .$img);
							$error = 0;
							$errmsg = "A slideshow has been added successfully!";
						}
					}
					else
					{
						$error = 1;
						$errmsg = "File image is large than 1MB.";
					}
				}
				else
				{
					$error = 1;
					$errmsg = "Only images file allowed the extension...";
				}
			}
			break;
		case "5":
			$title = $_POST['txttitle'];
			$subtitle = $_POST['txtsubtitle'];
			$text = $_POST['tatext'];
			$link = $_POST['txtlink'];
			$enable = "0";
			if(isset($_POST['chkenable']))
			{
				$enable = "1";
			}
			
			$sql = "select max(ssorder)+1 as nextssorder from tbl_slideshow";
			$result = mysqli_query($config, $sql);
			$ssorder = 1;
			if(mysqli_num_rows($result) == 1)
			{
				$row = mysqli_fetch_array($result);
				$ssorder = $row['nextssorder'];
			}
			$img = "";
			if(isset($_FILES['fileimg']))
			{
				$tmp_name = $_FILES['fileimg'] ['tmp_name'];
				if(file_exists($tmp_name) || is_uploaded_file($tmp_name))
				$org_name = $_FILES['fileimg'] ['name'];
				$ext = pathinfo($org_name, PATHINFO_EXTENSION);
				if($ext == "gif" || $ext == "png" || $ext == "jpg")
				{
					if(($_FILES['fileimg'] ['size']/1048576) <= 1)
					{
						$img = floor(microtime(true) * 1000) . "." . $ext;
						$dir = "img/slideshow/";
						$sql = "UPDATE `tbl_slideshow` SET `title`='$title',`subtitle`='$subtitle',`text`='$text',`link`='$link',`img`='$img',`enable`='$enable',`ssorder`='$enable' LIMIT 1";
						$result = mysqli_query($config, $sql);	
						if($result)
						{
							move_uploaded_file($tmp_name, $dir .$img);
							$error = 0;
							$errmsg = "A slideshow has been edited successfully!";
						}
					}
					else
					{
						$error = 1;
						$errmsg = "File image is large than 1MB.";
					}
				}
				else
				{
					$error = 1;
					$errmsg = "Only images file allowed the extension...";
				}
			}
			break;
		case "6":
			break;
		case "7":
			$ssid = $_GET['ssid'];
			$sql = "select img from tbl_slideshow where ssid = $ssid";
			$result = mysqli_query($config, $sql);
			$row = mysqli_fetch_array($result);
			$img = $row['img'];
			$sql = "delete from tbl_slideshow where ssid = $ssid";
			$result = mysqli_query($config, $sql);
			if($result)
			{
				unlink("img/slideshow/$img");
				$error = 0;
				$errmsg = "A slideshow has been deleted successfully!";
			}
			else
			{
				$error = 1;
				$errmsg = "Fial to delete a slideshow!";
			}
			break;
		case "8":
			break;
	}
 }
	
	$sql = ("select * from tbl_slideshow");
	$result = mysqli_query($config, $sql);
	$num = mysqli_num_rows($result);
	$numpage = ceil($num/MAXPERPAGE);
	$offset = 0;
	$pg = 1;
	if(isset($_GET['pg']))
	{
		$pg = $_GET['pg'];
		$offset = ($pg-1) * MAXPERPAGE;
	}		
	
	
	$sql = ("select * from tbl_slideshow order by ssorder limit " . MAXPERPAGE . " offset $offset");
	$result = mysqli_query($config, $sql);
?>
 
 
 <div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2 style="margin:30px 0px">Slideshow</h2>
            </div>
        </div>
    </div>
	<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSlideshowModal">Add new slideshow</a>
	<?php
		if($error != -1)
		{
	?>
	<div class="alert alert-<?=($error==1?"danger":"success")?> alert-dismissible fade show" style="margin:20px 0px;" role="alert">
	  <?=$errmsg?>
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	<?php
		}
	?>
	<table class="table">
		<tr>
			<th>No</th>
			<th>Image</th>
			<th>Title</th>
			<th>Subtitle</th>
			<th>Text</th>
			<th>Link</th>
			<th>Action</th>
		</tr>
		<?php
			$i=1;
			while($row = mysqli_fetch_array($result))
			{
		?>
		<tr>
			<td><?=$i?></td>
			<td><img src="img/slideshow/<?=$row['img']?>" style="width: 90px;"/></td>
			<td><?=$row['title']?></td>
			<td><?=$row['subtitle']?></td>
			<td><?=$row['text']?></td>
			<td><?=$row['link']?></td>
			<td>
				<a href="slideshow.php?action=<?=$row['enable']?>&ssid=<?=$row['ssid']?>&pg=<?= $pg ?>"><i class="<?=($row['enable']?"fa fa-eye yellow_color":"fa fa-eye-slash yellow_color")?>"></i></a>
				<a href="slideshow.php?order=1&ssid=<?=$row['ssid']?>&ssorder=<?=$row['ssorder']?>&pg=<?= $pg ?>"><i class="fa fa-arrow-circle-up green_color"></i></a>
				<a href="slideshow.php?order=0&ssid=<?=$row['ssid']?>&ssorder=<?=$row['ssorder']?>&pg=<?= $pg ?>"><i class="fa fa-arrow-circle-down green_color"></i></a>
				<a href="#"><i class="fa fa-edit blue_color" data-bs-toggle="modal" data-bs-target="#editSlideshowModal"></i></a>
				<a href="slideshow.php?action=7&ssid=<?=$row['ssid']?>" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="updateDeleteLink('<?=$row['ssid']?>')"><i class="fa fa-trash red_color"></i></a>
			</td>
		</tr>
		<?php
			$i++;
			}
		?>
	</table>
	<nav aria-label="Page navigation example">
	  <ul class="pagination d-flex justify-content-center">
		<li class="page-item">
		  <a class="page-link" href="slideshow.php?p=slideshow&pg=<?=($pg>1?$pg-1:1)?>" aria-label="Previous">
			<span aria-hidden="true">&laquo;</span>
		  </a>
		</li>
		<?php
			for($i=1;$i<=$numpage;$i++)
			{
		?>
		<li class="page-item <?=($pg==$i?"active":"")?>"><a class="page-link" href="slideshow.php?p=slideshow&pg=<?=$i?>"><?=$i?></a></li>
		<?php
			}
		?>
		<li class="page-item">
		  <a class="page-link" href="slideshow.php?p=slideshow&pg=<?=($pg<$numpage?$pg+1:$numpage)?>" aria-label="Next">
			<span aria-hidden="true">&raquo;</span>
		  </a>
		</li>
	  </ul>
    </nav>
    </div>
	
	<!--Delete Modal -->
	<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="deleteModalLabel">Confirmation!</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			Do you want to delete this slideshow?
		  </div>
		  <div class="modal-footer">
			<a href="#" id="deletecon" class="btn btn-primary">YES</a>
			<a href="#" class="btn btn-secondary" data-bs-dismiss="modal">NO</a>
		  </div>
		</div>
	  </div>
	</div>
	<script>
		function updateDeleteLink(ssid)
		{
			document.getElementById("deletecon").href="slideshow.php?action=7&ssid=" + ssid;
			//alert(document.getElementById("deletecon").href);
		}
	</script>
	<!--End Delete Modal -->			
	<!--Add slideshow Modal -->
	<div class="modal fade" id="addSlideshowModal" tabindex="-1" aria-labelledby="addSlideshowModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form action="slideshow.php?action=4" method="post" enctype="multipart/form-data">
			<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addSlideshowModalLabel">Add new slideshows</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
						<div class="modal-body">
							<div class="mb-3">
								<label for="title" class="form-label">Title</label>
								<input type="text" class="form-control" id="txttitle" name="txttitle" >
							</div>
							<div class="mb-3">
								<label for="subtitle" class="form-label">Subtitle</label>
								<input type="text" class="form-control" id="txtsubtitle" name="txtsubtitle" >
							</div>
							<div class="mb-3">
								<label for="tatext" class="form-label">Text</label>
								<textarea class="form-control" id="tatext" name="tatext" rows="3"></textarea>
							</div>
							<div class="mb-4">
								<label for="link" class="form-label">Link</label>
								<input type="text" class="form-control" id="txtlink" name="txtlink" >
							</div>
							<div class="form-check form-switch mb-3">
								<input class="form-check-input" type="checkbox" id="chkenable" name="chkenable"  checked>
								<label class="form-check-label" for="chkenable">Enable</label>
							</div>
							<div class="mb-3">
								<label for="fileimg" class="form-label">Select slideshow image</label>
								<input class="form-control" type="file" name="fileimg" id="fileimg">
							</div>



						</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Add</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				</div>
			</div>
			</form>
		</div>
	</div>	


<!--Edit slideshow Modal -->
<div class="modal fade" id="editSlideshowModal" tabindex="-1" aria-labelledby="editSlideshowModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form action="slideshow.php?action=5" method="post" enctype="multipart/form-data">
			<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="editSlideshowModalLabel">Add new slideshows</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
						<div class="modal-body">
							<div class="mb-3">
								<label for="title" class="form-label">Title</label>
								<input type="text" class="form-control" id="txttitle" name="txttitle" >
							</div>
							<div class="mb-3">
								<label for="subtitle" class="form-label">Subtitle</label>
								<input type="text" class="form-control" id="txtsubtitle" name="txtsubtitle" >
							</div>
							<div class="mb-3">
								<label for="tatext" class="form-label">Text</label>
								<textarea class="form-control" id="tatext" name="tatext" rows="3"></textarea>
							</div>
							<div class="mb-4">
								<label for="link" class="form-label">Link</label>
								<input type="text" class="form-control" id="txtlink" name="txtlink" >
							</div>
							<div class="form-check form-switch mb-3">
								<input class="form-check-input" type="checkbox" id="chkenable" name="chkenable"  checked>
								<label class="form-check-label" for="chkenable">Enable</label>
							</div>
							<div class="mb-3">
								<label for="fileimg" class="form-label">Select slideshow image</label>
								<input class="form-control" type="file" name="fileimg" id="fileimg">
							</div>



						</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Edit</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				</div>
			</div>
			</form>
		</div>
	</div>			
<!--
Action:
	0 = enable slideshow
	1 = disable slideshow
	2 = move up slideshow
	3 = move down slideshow
	4 = add new slideshow
	5 = edit slideshow
	6 = update slideshow
	7 = delete slideshow
-->





            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
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


<!--Close connection db-->
<?php
	mysqli_close($config);
?>