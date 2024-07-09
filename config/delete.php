<?php
require_once('db.php');
$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM `application` WHERE `id` = '$id' ");
header('Location: ../admin.php');
?>