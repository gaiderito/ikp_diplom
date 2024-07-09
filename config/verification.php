<?php
$login = $_POST['login'];
$password = $_POST['password'];

if ($password == 'root' && $login == 'admin'){
    header('Location: ../admin.php');
}else{
    echo('неверный логин или пароль!');
}
?>