<?php 
include('../../../database/connection.php');
$db=new database();

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	// print $id;

	$pathImage =$db->link->query("SELECT `image` FROM `holiday_list` WHERE `id`='$id' ");
    $fetch_image= $pathImage->fetch_assoc();

    $path = '../../asset/img/holiday_list/'.$fetch_image['image'];
    if(file_exists($path))
    {
        unlink($path);
    }

	$sql = $db->link->query("DELETE FROM `holiday_list` WHERE `id`='$id'");

	if($sql)
	{
		echo "<script>location='view_holiday_list.php'</script>";
	}
	else
	{
		echo "<script>location='view_holiday_list.php'</script>";
	}
}
?>