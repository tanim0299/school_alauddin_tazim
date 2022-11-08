<?php 
include('../database/connection.php');
$db=new database();

$data = $db->link->query("SELECT * FROM `settings` WHERE `id`=1");
if($data)
{
 $showdata = $data->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $showdata['title']; ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/slider.css">
		<!-- fontawsome css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/brands.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/solid.min.css">

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />

	<link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

	<!-- pagination css -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../assets/css/pagination.css" />


	<link rel="icon" type="image/x-icon" href="../backend/asset/img/settings/<?php echo $showdata['logo']; ?>">

	<style>
	.map-responsive{
		overflow:hidden;
		padding-bottom:56.25%;
		position:relative;
		height:0;
	}
	.map-responsive iframe{
		left:0;
		top:0;
		height:100%;
		width:100%;
		position:absolute;
	}
	</style>
	
</head>
<body>

<div class="section">
	<div class="container">
		<div class="wrapper">

			<div class="header-area">
				<div class="top-header">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-12">
							<div class="link">
								<a href="#">সুবর্ণ জয়ন্তী ও বঙ্গবন্ধু কর্ণার</a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-12">
							<div class="links">
								<ul>
									<li><a href="#">Online Exam</a></li>
									<li><a href="http://www.falahiafeni.edu.bd/onlineAdmission">Admission</a></li>
									<li><a href="http://202.5.38.86/ems/result">Result</a></li>
									<li><a href="http://202.5.38.86/ems/studentLogin">Student Login</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-area">
					<div class="slider" id="slider1">
						<?php
						$sql = $db->link->query("SELECT * FROM `photo_gallery` WHERE `slider`=1");
						if($sql)
						{
							while ($showdata = $sql->fetch_array())
							{
								?>
				        <div style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../backend/asset/img/photo_gallery/<?php print $showdata['image']; ?>); background-position: center; background-size: cover;"></div>
						<?php
						}
					}
					?>
				        <span class="titleBar">
						<?php
						$data = $db->link->query("SELECT * FROM `settings` WHERE `id`=1");
						if($data)
						{
							$showdata = $data->fetch_assoc();
						}
						?>
				         <a href="home.php"><img src="../backend/asset/img/settings/<?php echo $showdata['logo']; ?>" class="img-fluid rounded"></a>&nbsp;&nbsp;<span><?php echo $showdata['title']; ?><p style="padding-left: 100px;  margin-top: -25px;"><?php echo $showdata['established']; ?></p></span><br>
				       </span>
				     </div>
				</div>
				<div class="menu-bar">
					<div class="nav-area">
						<nav class="navbar navbar-expand-lg navbar-light bg-light btco-hover-menu menubar">
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav mr-auto">
						      <li class="nav-item">
						        <a class="nav-link" href="../"><i class="fa fa-home"></i> <span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          আমাদের সম্পর্কে
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown_menu3">
						          <div class="row">
						          	<div class="col-4">
						          		<ul>
						          			<li><a href="about_institute.php">প্রতিষ্ঠান সম্পর্কে</a></li>
						          			<li><a href="mission_vision.php">লক্ষ্য এবং উদ্দেশ্য</a></li>
						          			<li><a href="history.php">ইতিহাস</a></li>
						          			<li><a href="citizen_charter.php">সিটিজেন চার্টার</a></li>
						          			<li><a href="student_info_chart.php">ছাত্র/ছাত্রীর তথ্য চার্ট</a></li>
						          		</ul>
						          	</div>
						          	<div class="col-4">
						          		<ul>
						          			<li><a href="infrastructure.php">ইনফ্রাসটাকচার</a></li>
						          			<li><a href="yearly_working_plan.php">বার্ষিক কর্ম পরিকল্পনা</a></li>
						          			<li><a href="contact_us.php">যোগযোগ</a></li>
						          			<li><a href="principle_message.php">অধ্যক্ষ</a></li>
						          			<li><a href="vice_principle_message.php">সহকারি অধ্যক্ষ</a></li>
						          		</ul>
						          	</div>
						          	<div class="col-4">
						          		<ul>
						          			<li><a href="teacher_info.php">শিক্ষক তথ্য</a></li>
						          			<li><a href="staff_info.php">কর্মচারী তথ্য</a></li>
						          		</ul>
						          	</div>
						          </div>
						        </div>
						      </li>

						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          প্রশাসনিক তথ্য
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown_menu">
						          <ul>
					          			<li><a href="principle_message.php">অধ্যক্ষ বার্তা</a></li>
					          			<li><a href="vice_principle_message.php">উপাধ্যক্ষ বার্তা</a></li>
					          			<li><a href="founder_message.php">প্রতিষ্ঠাতার বার্তা</a></li>
					          			<li><a href="president_message.php">সভাপতির বার্তা</a></li>
										<?php
										$sql=$db->link->query("SELECT * FROM `committee` LIMIT 9");
										while ($showdata= $sql->fetch_assoc()) {
											?>
											<li><a href="managing_comitee.php?id=<?php echo $showdata['id'];?>"><?php echo $showdata['title'];?></a></li>
											<?php
											}
											?>
					          		</ul>
						        </div>
						      </li>

						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          শিক্ষক এবং কর্মচারী
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown_menu2">
						          <div class="row">
								  <div class="col-6">
									<ul>
										<li><a href="teacher_info.php">শিক্ষক তথ্য</a></li>
										<?php
										$sql=$db->link->query("SELECT * FROM `department` LIMIT 9");
										while ($showdata= $sql->fetch_assoc()) {
											?>
											<li><a href="department_teacher.php?id=<?php echo $showdata['id'];?>"><?php echo $showdata['title'];?></a></li>
											<?php
											}
											?>
										</ul>
									</div>
									<div class="col-6">
										<ul>
											<?php
											$sql=$db->link->query("SELECT * FROM `department` LIMIT 9,9");
											while ($showdata= $sql->fetch_assoc()) {
												?>
												<li><a href="department_teacher.php?id=<?php echo $showdata['id'];?>"><?php echo $showdata['title'];?></a></li>
												<?php
												}
												?>
											<li><a href="staff_info.php">কর্মচারী তথ্য</a></li>
										</ul>
									</div>
						          </div>
						        </div>
						      </li>

						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          একাডেমিক
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown_menu">
						          <ul>
					          			<li><a href="rules_regulation.php">বিধি ও প্রবিধান</a></li>
					          			<li><a href="academic_calendar.php">একাডেমিক ক্যালেন্ডার</a></li>
					          			<li><a href="class_routine.php">ক্লাস রুটিন</a></li>
					          			<li><a href="online_class_routine.php">অনলাইন ক্লাস রুটিন</a></li>
					          			<li><a href="book_list.php">বই তালিকা</a></li>
					          			<li><a href="uniform.php">ইউনিফর্ম</a></li>
					          			<li><a href="fees.php">ফিস</a></li>
					          			<li><a href="holiday_list.php">ছুটি তালিকা</a></li>
					          		</ul>
						        </div>
						      </li>


						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          কো-কারিকুলার
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown_menu2">
						          <div class="row">
						          	<div class="col-6">
						          		<ul>
						          			<li><a href="events.php">ইভেন্টস</a></li>
						          			<li><a href="sports.php">স্পোর্টস</a></li>
						          			<li><a href="cultural_activities.php">সাংস্কৃতিক কর্মকান্ড</a></li>
						          			<li><a href="scouts.php">স্কাউটস</a></li>
						          			<li><a href="girls_guide.php">গার্লস গাইড</a></li>
						          			<li><a href="bncc.php">বিএনসিসি</a></li>
						          			<li><a href="red_crescent.php">রেড ক্রিসেন্ট</a></li>
						          		</ul>
						          	</div>
						          	<div class="col-6">
						          		<ul>
						          			<li><a href="students_cabinet.php">ছাত্র/ছাত্রী সংসদ</a></li>
						          			<li><a href="debate.php">বিতর্ক প্রতিযোগীতা</a></li>
						          			<li><a href="language_club.php">ল্যাংগুয়েজ ক্লাব</a></li>
						          			<li><a href="study_tour.php">শিক্ষা সফর</a></li>
						          			<li><a href="science_fair.php">বিজ্ঞান মেলা</a></li>
						          			<li><a href="computer_club.php">কম্পিউটার ক্লাব</a></li>
						          		</ul>
						          	</div>
						          </div>
						        </div>
						      </li>


						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          ভর্তি সংক্রান্ত তথ্য
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown_menu">
						          <ul>
					          			<li><a href="prosfects.php">প্রসফেকটস</a></li>
					          			<li><a href="admission_rules.php">ভর্তি নিয়মাবলি</a></li>
					          			<li><a href="admission_procedure.php">ভর্তির কার্যাবলি</a></li>
					          			<li><a href="admission_result.php">ভর্তির পরীক্ষা ফলাফল</a></li>
					          			<li><a href="admission_test_question.php">ভর্তির টেস্ট প্রশ্নপত্র</a></li>
					          			<li><a href="transfer_procedure.php">বদলি কার্যাবলি</a></li>
					          		</ul>
						        </div>
						      </li>

						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          পরীক্ষা
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown_menu">
						          <ul>
					          			<li><a href="exam_rules.php">পরীক্ষা নিয়ামবলি</a></li>
					          			<li><a href="exam_routine.php">পরীক্ষার সময়সূচী</a></li>
					          			<li><a href="syllabus.php">সিলেবাস</a></li>
					          			<li><a href="lesson_plan.php">পাঠ পরিকল্পনা</a></li>
					          			<li><a href="suggestion.php">সাজেশন্স</a></li>
					          		</ul>
						        </div>
						      </li>

						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          ফলাফল
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown_menu">
						          <ul>
					          			<li><a href="https://eboardresults.com/v2/home">পাবলিক পরীক্ষার ফলাফল</a></li>
					          			<li><a href="http://202.5.38.86/ems/result">অভ্যন্তরীণ ফলাফল</a></li>
					          		</ul>
						        </div>
						      </li>

						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          গ্যালারী
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown_menu">
						          <ul>
					          			<li><a href="picture_gallery.php">ছবি গ্যালারী</a></li>
					          			<li><a href="vedio_gallery.php">ভিডিও গ্যালারী</a></li>
					          			<li><a href="magazine.php">ম্যাগাজিন</a></li>
					          		</ul>
						        </div>
						      </li>

						    </ul>
						    
						  </div>
						</nav>
					</div>
				</div>
			</div>