<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				
							<div class="divider">
								<div class="left-body-boxtitle">
									<i class="fa fa-caret-right"></i><b>কর্মচারী তথ্য</b><span style="color: yellow;"></span>
								</div>
								<div class="teacher-info-box">
									<div class="row">
										
										<?php

										$sql_chack=$db->link->query("SELECT * FROM `teacher_staff` WHERE `type`=0 AND `status`=1");
										if($sql_chack)
										{
											while($staff_show=$sql_chack->fetch_assoc())
											{
										?>

										<div class="col-6">
											<div class="teacher_info-single-box">
												<div class="teacher_image">
													<img src="../backend/asset/img/teacher/<?php echo $staff_show['image'];?>" class="img-fluid">
												</div>
												<div class="information">
													<table class="table table-bordered">
														<tr>
															<td>Name</td>
															<td><?php echo $staff_show['name'];?></td>
														</tr>
														<tr>
															<td>Designation</td>
															<td><?php echo $staff_show['designation'];?></td>
														</tr>
														<tr>
															<td>Mobile</td>
															<td><?php echo $staff_show['mobile'];?></td>
														</tr>
														<tr>
															<td>Email</td>
															<td><?php echo $staff_show['email'];?></td>
														</tr>
														<tr>
															<td colspan="2" style="text-align:center;">
																<a href="view_staffinfo.php?id=<?php echo $staff_show['id']; ?>" class="btn btn-outline-success">Details</a>
															</td>
														</tr>
													</table>
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