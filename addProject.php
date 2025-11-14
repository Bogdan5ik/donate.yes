<?php
$con = mysqli_connect( "127.0.0.1", "root", "", "donate");

$insert = "INSERT INTO projects (title, text, goal, donated, img) VALUES ('{$_GET[title]}', '{$_GET[text]}', '{$_GET[goal]}', '{$_GET[donated]}', '{$_GET[image]}')";
$result_insert = mysqli_query($con, $insert);
header("Location: /index.php");
exit;
?>