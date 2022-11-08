<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>সাজেশন্স</b>
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
									$sql = $db->link->query("SELECT * FROM `suggestion`");
									if($sql)
									{
										while ($showdata = $sql->fetch_assoc())
										{
									?>
								<tbody>
									<tr style="font-size: 12px;">
										<td><a href="view_suggestion.php?id=<?php echo $showdata['id']; ?>" style="text-decoration: none;color: black"><?php echo $showdata['title']; ?></a></td>
										<td><a href="view_suggestion.php?id=<?php echo $showdata['id']; ?>" style="text-decoration: none;color: black"><?php echo $showdata['date']; ?></a></td>
										<td>
											<a href="../backend/asset/img/suggestion/<?php print $showdata['image']; ?>" class="btn btn-sm btn-danger" download="<?php echo $showdata['title']; ?>" ><img src="../assets/image/pdf_icon.png" class="img-fluid"></a>
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