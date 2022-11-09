<?php 
include('../../../database/connection.php');
$db=new database();

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	// print $id;

	$pathImage =$db->link->query("SELECT `image` FROM `student_info` WHERE `id`='$id' ");
    $fetch_image= $pathImage->fetch_assoc();

    $path = '../../asset/img/student_info_chart/'.$fetch_image['image'];
    if(file_exists($path))
    {
        unlink($path);
    }

	$sql = $db->link->query("DELETE FROM `student_info` WHERE `id`='$id'");

	if($sql)
	{
		echo "<script>location='view_student_info_chart.php'</script>";
	}
	else
	{
		echo "<script>location='view_student_info_chart.php'</script>";
	}
}
?>