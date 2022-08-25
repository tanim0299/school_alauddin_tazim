<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<?php
						$sql=$db->link->query("SELECT * FROM `founder_message` WHERE `id`=1");
						if($sql)
						{
							$showdata=$sql->fetch_assoc();
						}
						?>
						<b><?php echo $showdata['title']; ?></b>
					</div>
					<div class="body-text">
						<div class="image" style="text-align: center;">
							<img src="../backend/asset/img/founder_message/<?php echo $showdata['image'];?>" class="img-fluid" style="max-width: 50%;">
						</div>
						<p>
						 <?php
						 
						 echo $showdata['description'];
						 

						 ?>
						</p>
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