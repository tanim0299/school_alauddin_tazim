<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>ল্যাংগুয়েজ ক্লাব</b>
					</div>
					<div class="body-text">
						<?php
						$sql = $db->link->query("SELECT * FROM `language_club` ORDER BY `date` DESC");
						if($sql)
						{
							while ($showdata = $sql->fetch_array())
							{
								?>
						<div class="news">
							<div class="news-single">
								<div class="row">
									<div class="col-3">
										<div class="news-image">
											<img src="../backend/asset/img/language_club/<?php print $showdata['image']; ?>" class="img-fluid" style="max-height: 300px;">
										</div>
									</div>
									<div class="col-8">
										<div class="heading">
											<a href="view_languageclub.php?id=<?php echo $showdata['0']; ?>">
											<?php echo $showdata['2']; ?>
										</a>
										</div>
										<div class="pub-date">
											<span><?php echo $showdata['1']; ?></span>
										</div>
										
									</div>
									
								</div>
							</div>
						</div>
						<?php
						}
					}
					?>
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