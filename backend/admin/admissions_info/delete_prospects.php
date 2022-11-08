<?php 
include('../../../database/connection.php');
$db=new database();

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	// print $id;

	$sql = $db->link->query("DELETE FROM `prospects` WHERE `id`='$id'");

	if($sql)
	{
		echo "<script>location='view_prospects.php'</script>";
	}
	else
	{
		echo "<script>location='view_prospects.php'</script>";
	}
}
?>