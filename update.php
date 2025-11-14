<?php
    $con = mysqli_connect("127.0.0.1", "root", "", "donate");

    $update = "UPDATE projects SET title='{$_GET['title']}', text='{$_GET['text']}', goal='{$_GET['goal']}', donated='{$_GET['donated']}', img='{$_GET['image']}' WHERE id='{$_GET['id']}'";

    $result_update = mysqli_query($con, $update);

    header("Location: /index.php");
    exit;
?>