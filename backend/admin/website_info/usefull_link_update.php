<?php 

include('../../../database/connection.php');
$db=new database();
session_name("admin");
session_start();

$id = $_POST['id'];
$title = $_POST['title'];
$url = $_POST['url'];

// echo $url;

$sql = $db->link->query("UPDATE `useful_link` SET `title`='$title',`url`='$url' WHERE `id`='$id'");

if($sql)
{
    echo 1;
}
else
{
    echo 0;
}

?>