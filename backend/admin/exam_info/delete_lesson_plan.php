<?php 
include('../../../database/connection.php');
$db=new database();

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	// print $id;

	$pathImage =$db->link->query("SELECT `image` FROM `lesson_plan` WHERE `id`='$id' ");
    $fetch_image= $pathImage->fetch_assoc();

    $path = '../../asset/img/lesson_plan/'.$fetch_image['image'];
    if(file_exists($path))
    {
        unlink($path);
    }

	$sql = $db->link->query("DELETE FROM `lesson_plan` WHERE `id`='$id'");

	if($sql)
	{
		echo "<script>location='view_lesson_plan.php'</script>";
	}
	else
	{
		echo "<script>location='view_lesson_plan.php'</script>";
	}
}
?>