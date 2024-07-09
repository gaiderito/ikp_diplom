<?php
require_once('db.php');

$fio = $_POST['fio'];
$number = $_POST['number'];
$problem = $_POST['problem'];
$date = $_POST['date'];
$doctor = $_POST['doctor'];

mysqli_query($conn, "INSERT INTO `application` (`fio`, `number`, `problem`, `date`, `doctor`) VALUES ('$fio', '$number', '$problem', '$date', '$doctor') ");

header('Location: ../index.php');
?>