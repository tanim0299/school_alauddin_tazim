<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>ভিডিও গ্যালারী</b>
					</div>
					<li class="list-group-item">
						<div class="row" uk-lightbox>
						<?php
								$sql = $db->link->query("SELECT * FROM `video_gallery` ORDER BY `id` DESC");
								if($sql)
								{
								while ($showdata = $sql->fetch_array())
								{
							?>
							
							<div class="col-sm-6 col-12 p-0">
								<iframe width="100%" height="250" src="<?php print $showdata['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<div class="uk-overlay uk-overlay-primary uk-position-bottom p-3">
									<p><?php print $showdata['title']; ?></p>
								</div>
							</div>
							<?php
							}
						}
						?>
						
					</li>
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