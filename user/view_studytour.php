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
					if(isset($_GET['id']))
					{
						$id = $_GET['id'];
						$sql = $db->link->query("SELECT * FROM `study_tour` WHERE `id`=$id");
						
						if($sql)
						{
							$showdata = $sql->fetch_assoc();
						}
					?>
					<b><?php echo $showdata['title']; ?></b>
				</div>
					<div class="body-text">
						<div class="news">
							<li class="list-group-item">
								<img src="../backend/asset/img/study_tour/<?php print $showdata['image']; ?>" class="img-fluid"><br><br>
								<h4><?php echo $showdata['title']; ?></h4>
								<span><?php echo $showdata['date']; ?></span><br><br>
								<span><?php echo $showdata['description']; ?><br></span>
								<?php
								}
								?>
							</li>
						</div>
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