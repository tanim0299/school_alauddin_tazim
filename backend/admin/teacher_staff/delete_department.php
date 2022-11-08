<?php 
include('../../../database/connection.php');
$db=new database();

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	// print $id;

	$sql = $db->link->query("DELETE FROM `department` WHERE `id`='$id'");

	if($sql)
	{
		echo "<script>location='add_department.php'</script>";
	}
	else
	{
		echo "<script>location='add_department.php'</script>";
	}
}
?>