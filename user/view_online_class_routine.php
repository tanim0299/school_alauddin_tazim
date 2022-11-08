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
						$sql = $db->link->query("SELECT * FROM `online_class_routine` WHERE `id`=$id");
						
						if($sql)
						{
							$showdata = $sql->fetch_assoc();
						}
					?>
					<b><?php echo $showdata['title']; ?></b>
				</div>
				
				<li class="list-group-item">
					<h5><?php echo $showdata['title']; ?> <a href="../backend/asset/img/online_class_routine/<?php print $showdata['image']; ?>" class="btn btn-sm btn-danger float-right" download="<?php echo $showdata['title']; ?>"> Download</a>
					</h5><br>
					
					<div class='embed-responsive' style='padding-bottom:150%'>
					<object data="../backend/asset/img/online_class_routine/<?php print $showdata['image']; ?>" type='application/pdf' width='100%' height='100%'></object>
					<?php
					}
					?>
				</div>
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