				<?php
					$sql = ("select * from tbl_slideshow where enable='1'");
					$result = mysqli_query($config, $sql);
					$num = mysqli_num_rows($result);
				?>
				<div id="header-carousel" class="carousel slide" data-ride="carousel">
					<div class="container">
					  <ol class="carousel-indicators">
						<?php
							for($i=0;$i<$num;$i++)
							{
						?>
						 <li data-target="#customCarousel1" data-slide-to="<?=$i?>" class="<?=($i==0?"active":"")?>"></li>
						<?php
							}
						?>
					  </ol>
					</div>
                    <div class="carousel-inner">
						<?php
							$i=1;
							while($row = mysqli_fetch_array($result))
							{
						?>
                        <div class="carousel-item <?=($i==1?"active":"")?>" style="height: 410px; ">
                            <img class="img-fluid" src="../admin/img/slideshow/<?=$row['img']?>" alt="Image"/>
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
									<h3 class="display-4 font-weight-semi-bold mb-4 text-success" ><?=$row['title']?></h3>
                                    <h4 class="text-uppercase font-weight-medium text-info mb-3"><?=$row['subtitle']?></h4>
									<p class="text-uppercase font-weight-medium text-primary mb-3"><?=$row['text']?></p>
                                    <a href="<?=$row['link']?>" class="btn btn-light py-2 bg-warning px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
						<?php
							$i++;
							}
						?>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            