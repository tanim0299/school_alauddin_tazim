<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="divider">
					<?php
					if(isset($_GET['id']))
					{
						$id=$_GET['id'];
						// echo $id;
						$sql=$db->link->query("SELECT * FROM `department` WHERE `id`='$id'");
						if($sql)
						{
							$showdata=$sql->fetch_assoc();
						}
						?>
						<div class="left-body-boxtitle">
						<i class="fa fa-caret-right"></i><b><?php echo $showdata['title'];?> ডিপার্টমেন্ট এর শিক্ষক তালিকা</b><span style="color: yellow;"></span>
						</div>
					<?php	
					}
					?>
					
					<div class="teacher-info-box">
						<div class="row">
							<?php 
							$sql_teacher = $db->link->query("SELECT * FROM `teacher_staff` WHERE `department`='$id' AND `type`=1");
							if($sql)
							{
								while($teacher = $sql_teacher->fetch_assoc())
								{
									?>
									<div class="col-6">
										<div class="teacher_info-single-box">
											<div class="teacher_image">
												<img src="../backend/asset/img/teacher/<?php echo $teacher['image'];?>" class="img-fluid">
											</div>
											<div class="information">
												<table class="table table-bordered">
													<tr>
														<td>Name</td>
														<td><?php echo $teacher['name']; ?></td>
													</tr>
													<tr>
														<td>Designation</td>
														<td><?php echo $teacher['designation']; ?></td>
													</tr>
													<tr>
														<td>Mobile</td>
														<td><?php echo $teacher['mobile'];?></td>
													</tr>
													<tr>
														<td>Email</td>
														<td><?php echo $teacher['email'];?></td>
													</tr>
													<tr>
														<td colspan="2" style="text-align:center;">
															<a href="view_teacherinfo.php?id=<?php echo $teacher['id']; ?>" class="btn btn-outline-success">Details</a>
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