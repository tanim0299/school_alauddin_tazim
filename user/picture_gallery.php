<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>ছবি গ্যালারী</b>
					</div>
					<div class="body-text">
						<div class="row">
							<?php
								$sql = $db->link->query("SELECT * FROM `photo_gallery` ORDER BY `id` DESC");
								if($sql)
								{
								while ($showdata = $sql->fetch_array())
								{
							?>
							<div class="col-6">
								<div class="picture-box">
									<div uk-lightbox id="photo-box">
									    <a class="uk-button uk-button-default" href="../backend/asset/img/photo_gallery/<?php print $showdata['image']; ?>">
									    	<img src="../backend/asset/img/photo_gallery/<?php print $showdata['image']; ?>" class="img-fluid">
									    	<span><?php print $showdata['title']; ?></span>
									    </a>
									</div>
								</div>
							</div>
							<?php
							}
						}
						?>

						</div>
						<!-- <div>
        <samp>
            <span>Current page:</span>
            <span id="page-number-1"></span>
        </samp>

        <div id="pagination-1"></div>
    </div> -->
					</div>
				</div>
			</div>
		</div>

		<!-- left body -->
		<div class="col-lg-3 col-md-3 col-12">
			<?php include("right_body.php"); ?>
		</div>
		<!-- left body -->

	</div>
</div>
<?php 
include 'footer.php';
?>