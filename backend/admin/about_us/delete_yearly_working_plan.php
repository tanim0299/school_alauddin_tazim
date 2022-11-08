<?php 
include('../../../database/connection.php');
$db=new database();

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	// print $id;

	$sql = $db->link->query("DELETE FROM `yearly_working_plan` WHERE `id`='$id'");

	if($sql)
	{
		echo "<script>location='view_yearly_working_plan.php'</script>";
	}
	else
	{
		echo "<script>location='view_yearly_working_plan.php'</script>";
	}
}
?>