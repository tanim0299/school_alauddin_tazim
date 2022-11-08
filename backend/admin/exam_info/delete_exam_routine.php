<?php 
include('../../../database/connection.php');
$db=new database();

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	// print $id;

	$sql = $db->link->query("DELETE FROM `exam_routine` WHERE `id`='$id'");

	if($sql)
	{
		echo "<script>location='view_exam_routine.php'</script>";
	}
	else
	{
		echo "<script>location='view_exam_routine.php'</script>";
	}
}
?>