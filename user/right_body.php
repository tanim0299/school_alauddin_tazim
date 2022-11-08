
<div class="left-body">
				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<b>সভাপতির বার্তা</b>
						<?php
						$sql = $db->link->query("SELECT * FROM president_message WHERE `id`=1");
						if($sql)
						{
							$showdata = $sql->fetch_assoc();
						}
						?>
					</div>
					<div class="box-image">
						<img src="../backend/asset/img/president_message/<?php print $showdata['image']; ?>">
					</div>
					<div class="designation">
						<span><?php print $showdata['name']; ?></span>
					</div>
					<div class="subtitle">
						<span><a href="president_message.php" class="btn btn-success btn-sm btn-block">View Message</a></span>
					</div>
				</div>

				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<b>অধ্যক্ষের বার্তা</b>
						<?php
						$sql = $db->link->query("SELECT * FROM principle_message WHERE `id`=1");
						if($sql)
						{
							$showdata = $sql->fetch_assoc();
						}
						?>
					</div>
					<div class="box-image">
						<img src="../backend/asset/img/principle_message/<?php print $showdata['image']; ?>">
					</div>
					<div class="designation">
						<span><?php print $showdata['name']; ?></span>
					</div>
					<div class="subtitle">
						<span><a href="principle_message.php" class="btn btn-success btn-sm btn-block">View Message</a></span>
					</div>
				</div>
				

				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<b>গুরুত্বপূর্ণ লিংক</b>
					</div>
					
					<?php
					$sql = $db->link->query("SELECT * FROM `useful_link`");
					if($sql)
					{
						while ($showdata = $sql->fetch_assoc())
						{
						?>
					<div class="feature">
						<a href="<?php echo $showdata['url']; ?>" target="blank"><li><i class="fa fa-caret-right"></i> <?php echo $showdata['title']; ?></li></a>
						<?php
						}
					}
				?>
					</div>
				</div>

				<?php
				$data = $db->link->query("SELECT * FROM `settings` WHERE `id`=1");
				if($data)
				{
					$showdata = $data->fetch_assoc();
				}
				?>

				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<b>গুগল ম্যাপ</b>
					</div>
					<div class="map">
					<?php echo $showdata['map']; ?>	
				</div>

				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<b>ফেইসবুক পেইজ</b>
					</div>
					<div class="map">
					<?php echo $showdata['facebook']; ?>
					</div>
				</div>


				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<b>জাতীয় সংগীত</b>
					</div>
					<div class="map">
						<iframe width="180" height="150" src="https://www.youtube.com/embed/SjefET6W3q4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>


			</div>