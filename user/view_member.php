<?php 
include 'header.php';
if(isset($_GET['id']))
{
	$id = $_GET['id'];

	$sql = $db->link->query("SELECT * FROM `add_member` WHERE `id`=$id");

	if($sql)
	{
		$member = $sql->fetch_assoc();
	}
}
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="divider">
					<div class="teacher-info-box">
						<div class="row">
							<div class="col-12">
								<div class="teacher_info-single-box">
									<div class="teacher_image">
									<img src="../backend/asset/img/committee/<?php echo $member['image'];?>" class="img-fluid">
									</div>
									<div class="information">
										<table class="table table-bordered">
											<tr>
												<td>Name</td>
												<td><?php echo $member['name']; ?></td>
											</tr>
											<tr>
												<td>Designation</td>
												<td><?php echo $member['designation']; ?></td>
											</tr>
											<tr>
												<td>Fathers Name</td>
												<td><?php echo $member['father_name']; ?></td>
											</tr>
											<tr>
												<td>Mothers Name</td>
												<td><?php echo $member['mother_name']; ?></td>
											</tr>
											<tr>
												<td>Mobile</td>
												<td><?php echo $member['mobile']; ?></td>
											</tr>
											<tr>
												<td>Email</td>
												<td><?php echo $member['email']; ?></td>
											</tr>
											<tr>
												<td>Duration</td>
												<td><?php echo $member['duration']; ?></td>
											</tr>
											<tr>
												<td>Adress</td>
												<td><?php echo $member['address']; ?></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
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