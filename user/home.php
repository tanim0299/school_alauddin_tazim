<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="notice-board">
					<img src="../assets/image/globe.png" class="img-fluid">
					<div class="notice-list">
						<div class="title">
							<b>নোটিশ বোর্ড</b>
						</div>
						<div class="notices">
						<ul>
							
							<?php
							$sql = $db->link->query("SELECT * FROM `notice` ORDER BY `date` DESC LIMIT 10");
							if($sql)
							{
								while ($showdata = $sql->fetch_assoc())
								{
									?>
									<li><i class="fa fa-caret-right"></i><a href="view_notice.php?id=<?php echo $showdata['id']; ?>"><?php echo $showdata['title']; ?></a></li>
									<?php
									}
								}
								?>
								</ul>
								<div class="all-notices">
								<a href="notice.php">সকল নোটিশ</a>
							</div>
						</div>
					</div>
				</div>


				<div class="about_institute">
					<div class="sec-title">
						<b>প্রতিষ্ঠান সম্পর্কে</b>
						<?php
						$sql = $db->link->query("SELECT * FROM about_US WHERE `id`=1");
						if($sql)
						{
							$showdata = $sql->fetch_assoc();
						}
						?>
					</div>
					<div class="sec-text">
					<?php echo $showdata['description']; ?>
				</div>
				</div>

				<div class="section-box">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="box-single">
								<div class="box-title">
									<b>প্রতিষ্ঠান সম্পর্কে</b>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-4">
											<div class="icon">
												<img src="../assets/image/icons/1.jpg">
											</div>
										</div>
										<div class="col-8">
											<div class="list">
												<ul>
													<li><i class="fa fa-caret-right"></i><a href="about_institute.php">প্রতিষ্ঠান সম্পর্কে</a></li>
													<li><i class="fa fa-caret-right"></i><a href="mission_vision.php">লক্ষ্য এবং উদ্দেশ্য</a></li>
													<li><i class="fa fa-caret-right"></i><a href="history.php">ইতিহাস</a></li>
													<li><i class="fa fa-caret-right"></i><a href="contact_us.php">যোগাযোগ</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="box-single">
								<div class="box-title">
									<b>প্রশাসনিক তথ্য</b>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-4">
											<div class="icon">
												<img src="../assets/image/icons/2.jpg">
											</div>
										</div>
										<div class="col-8">
											<div class="list">
												<ul>
													<li><i class="fa fa-caret-right"></i><a href="principle_message.php">অধ্যক্ষ বার্তা</a></li>
													<li><i class="fa fa-caret-right"></i><a href="vice_principle_message.php">উপাধ্যক্ষ বার্তা</a></li>
													<li><i class="fa fa-caret-right"></i><a href="founder_message.php">প্রতিষ্ঠাতার বার্তা</a></li>
													<li><i class="fa fa-caret-right"></i><a href="president_message.php">সভাপতির বার্তা</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="box-single">
								<div class="box-title">
									<b>শিক্ষক ও কর্মচারী</b>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-4">
											<div class="icon">
												<img src="../assets/image/icons/3.jpg">
											</div>
										</div>
										<div class="col-8">
											<div class="list">
												<ul>
													<li><i class="fa fa-caret-right"></i><a href="teacher_info.php">শিক্ষক তথ্য</a></li>
													<li><i class="fa fa-caret-right"></i><a href="staff_info.php">কর্মচারী তথ্য</a></li>
													<li><i class="fa fa-caret-right"></i><a href="ex_memberlist.php">প্রাক্তন সদস্য তালিকা</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="box-single">
								<div class="box-title">
									<b>একাডেমিক তথ্য</b>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-4">
											<div class="icon">
												<img src="../assets/image/icons/4.jpg">
											</div>
										</div>
										<div class="col-8">
											<div class="list">
												<ul>
													<li><i class="fa fa-caret-right"></i><a href="notice.php">নোটিশ</a></li>
													<li><i class="fa fa-caret-right"></i><a href="events.php">ইভেন্টস</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">লাইব্রেরী তথ্য</a></li>
													<li><i class="fa fa-caret-right"></i><a href="#">হোস্টেল তথ্য</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="box-single">
								<div class="box-title">
									<b>পরীক্ষা সংক্রান্ত তথ্য</b>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-4">
											<div class="icon">
												<img src="../assets/image/icons/5.jpg">
											</div>
										</div>
										<div class="col-8">
											<div class="list">
												<ul>
													<li><i class="fa fa-caret-right"></i><a href="exam_rules.php">পরীক্ষা নিয়মাবলী</a></li>
													<li><i class="fa fa-caret-right"></i><a href="exam_routine.php">পরীক্ষা রুটিন</a></li>
													<li><i class="fa fa-caret-right"></i><a href="syllabus.php">সিলেবাস</a></li>
													<li><i class="fa fa-caret-right"></i><a href="lesson_plan.php">পাঠ পরিকল্পনা</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="box-single">
								<div class="box-title">
									<b>ফলাফল</b>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-4">
											<div class="icon">
												<img src="../assets/image/icons/6.jpg">
											</div>
										</div>
										<div class="col-8">
											<div class="list">
												<ul>
													<li><i class="fa fa-caret-right"></i><a href="http://202.5.38.86/ems/result">অভ্যন্তরীণ ফলাফল</a></li>
													<li><i class="fa fa-caret-right"></i><a href="https://eboardresults.com/v2/home">পাবলিক পরীক্ষার ফলাফল</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="box-single">
								<div class="box-title">
									<b>গ্যালারী</b>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-4">
											<div class="icon">
												<img src="../assets/image/icons/7.jpg">
											</div>
										</div>
										<div class="col-8">
											<div class="list">
												<ul>
													<li><i class="fa fa-caret-right"></i><a href="photo_gallery.php">ছবি গ্যালারী</a></li>
													<li><i class="fa fa-caret-right"></i><a href="video_gallery.php">ভিডিও গ্যালারী</a></li>
													<li><i class="fa fa-caret-right"></i><a href="magazine.php">ম্যাগাজিন</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="box-single">
								<div class="box-title">
									<b>ভর্তি সংক্রান্ত তথ্য</b>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-4">
											<div class="icon">
												<img src="../assets/image/icons/3.jpg">
											</div>
										</div>
										<div class="col-8">
											<div class="list">
												<ul>
													<li><i class="fa fa-caret-right"></i><a href="prosfects.php">প্রসফেকটস</a></li>
													<li><i class="fa fa-caret-right"></i><a href="admission_rules.php">ভর্তির নিয়মাবলি</a></li>
													<li><i class="fa fa-caret-right"></i><a href="admission_procedure.php">ভর্তির কার্যাবলি</a></li>
													<li><i class="fa fa-caret-right"></i><a href="admission_result.php">ভর্তির পরীক্ষার ফলাফল</a></li>
												</ul>
											</div>
										</div>
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