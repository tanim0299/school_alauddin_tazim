<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>ছাত্র/ছাত্রী তথ্য</b>
					</div>
					<div class="body-text">
						<div class="data">
							<table class="table table-hover table-bordered" id="myTable">
								<thead>
									<tr>
										<th>Title</th>
										<th>Date</th>
										<th>Download</th>
									</tr>
								</thead>
                                <?php
							$sql = $db->link->query("SELECT * FROM `student_info`");
							if($sql)
							{
								while ($showdata = $sql->fetch_array())
								{
									?>
								<tbody>
									<tr style="font-size: 15px;">
										<td><a href="view_student_info_chart.php?id=<?php echo $showdata['0']; ?>" style="text-decoration: none;color: black"><?php echo $showdata['2']; ?></a></td>
										<td><a href="view_student_info_chart.php?id=<?php echo $showdata['0']; ?>" style="text-decoration: none;color: black"><?php echo $showdata['1']; ?></a></td>
										<td>
											<a href="../backend/asset/img/student_info_chart/<?php print $showdata['image']; ?>" class="btn btn-sm btn-danger" download="<?php echo $showdata['title']; ?>" ><img src="../assets/image/pdf_icon.png" class="img-fluid"></a>
										</td>
									</tr>
                                    <?php
									}
								}
								?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- left body -->
		
		<!-- left body -->

	</div>
</div>
<?php 
include 'footer.php';
?>