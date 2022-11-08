<?php 
include 'header.php';
if(isset($_GET['id']))
{
	$id = $_GET['id'];

	$sql = $db->link->query("SELECT * FROM `teacher_staff` WHERE `id`=$id");

	if($sql)
	{
		$staff_show = $sql->fetch_assoc();
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
                                    <img src="../backend/asset/img/teacher/<?php echo $staff_show['image'];?>" class="img-fluid">
                                </div>
									<div class="information">
										<table class="table table-bordered">
											<tr>
												<td>Name</td>
												<td><?php echo $staff_show['name']; ?></td>
											</tr>
											<tr>
												<td>Designation</td>
												<td><?php echo $staff_show['designation']; ?></td>
											</tr>
											<tr>
												<td>Fathers Name</td>
												<td><?php echo $staff_show['father_name']; ?></td>
											</tr>
											<tr>
												<td>Mothers Name</td>
												<td><?php echo $staff_show['mother_name']; ?></td>
											</tr>
											<tr>
												<td>Mobile</td>
												<td><?php echo $staff_show['mobile']; ?></td>
											</tr>
											<tr>
												<td>Email</td>
												<td><?php echo $staff_show['email']; ?></td>
											</tr>
											<tr>
												<td>Gender</td>
												<td><?php echo $staff_show['gender']; ?></td>
											</tr>
											<tr>
												<td>Religion</td>
												<td><?php echo $staff_show['religion']; ?></td>
											</tr>
											<tr>
												<td>Relationship</td>
												<td>
													<?php 
													if($staff_show['relation'] == 1)
													{
														echo 'Married';
													}else
													{
														echo 'UnMarried';
													}
													?>
												</td>
											</tr>
											<tr>
												<td>Join Date</td>
												<td><?php echo $staff_show['join_date']; ?></td>
											</tr>
											<tr>
												<td>Present Adress</td>
												<td style="text-transform:capitalize;"><?php echo $staff_show['present']; ?></td>
											</tr>
											<tr>
												<td>Permanent Adress</td>
												<td  style="text-transform:capitalize;"><?php echo $staff_show['permanent']; ?></td>
											</tr>
											<tr>
												<td>Education</td>
												<td style="text-transform:capitalize;"><?php echo $staff_show['education']; ?></td>
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