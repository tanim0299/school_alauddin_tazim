<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>ভর্তির নিয়মাবলি</b>
					</div>
					<div class="body-text">
						<div class="data">
							<table class="table table-hover table-bordered" id="myTable">
								<thead>
									<tr>
										<th>Title</th>
										<th>Date</th>
										<th>View</th>
									</tr>
								</thead>
                                <?php
							$sql = $db->link->query("SELECT * FROM `admission_rules`");
							if($sql)
							{
								while ($showdata = $sql->fetch_array())
								{
									?>
								<tbody>
									<tr style="font-size: 15px;">
										<td><a href="view_admission_rules.php?id=<?php echo $showdata['0']; ?>" style="text-decoration: none;color: black"><?php echo $showdata['2']; ?></a></td>
										<td><a href="view_admission_rules.php?id=<?php echo $showdata['0']; ?>" style="text-decoration: none;color: black"><?php echo $showdata['1']; ?></a></td>
										<td>
											<a href="view_admission_rules.php?id=<?php echo $showdata['0']; ?>" class="btn btn-success">View</a>
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